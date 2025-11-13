<?php

namespace App\Livewire;

use App\Models\EcoChallenge;
use App\Models\MissionSubmission;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class ChallengeCenter extends Component
{
    use WithFileUploads;

    public $currentPage = 'challenges';

    public $showAchievementsModal = false;

    public $showUploadModal = false;

    public $selectedMission = null;

    public $uploadedPhotos = [];

    public $completionDescription = '';

    public $showReviewModal = false;

    public $reviewSubmission = null;

    public $reviewNotes = '';

    public $submissionRating = 5;

    public $reviewSubmissionId = null;

    public $lastResetDate;

    public $nextResetTime;

    public $dailyResetCompleted = false;

    public function setSubmissionRating($rating)
    {
        $this->submissionRating = $rating;
    }

    public $pendingSubmissions = [];

    // User data
    public $userName;

    public $userAvatar = 'https://cdn-icons-png.flaticon.com/512/219/219983.png';

    public $userLocation = 'Jakarta';

    public $totalPoints = 0;

    public $challengesCompleted = 0;

    public $userLevel = 'Beginner';

    public $progressPercentage = 0;

    // Leaderboard
    public $selectedLocation = 'all';

    public $locations = ['Jakarta', 'Bandung', 'Surabaya', 'Bali', 'Yogyakarta', 'Medan'];

    public $leaderboard = [];

    public $filteredLeaderboard = [];

    public $currentUserRank = 1;

    // Missions data
    public $missions = [];

    // Achievements data
    public $achievements = [
        ['id' => 1, 'title' => 'Green Beginner', 'description' => 'Complete your first mission', 'icon' => '🌱', 'key' => 'first_mission'],
        ['id' => 2, 'title' => 'Point Collector', 'description' => 'Collect 50 points', 'icon' => '🪙', 'key' => 'point_collector'],
        ['id' => 3, 'title' => 'Eco Warrior', 'description' => 'Complete 3 missions', 'icon' => '🛡️', 'key' => 'eco_warrior'],
        ['id' => 4, 'title' => 'Environmental Master', 'description' => 'Complete all missions', 'icon' => '🏆', 'key' => 'eco_master'],
        ['id' => 5, 'title' => 'Community Leader', 'description' => 'Reach top 10 in leaderboard', 'icon' => '⭐', 'key' => 'community_leader'],
    ];

    public function mount()
    {
        $user = auth()->user();
        if ($user) {
            $this->userName = $user->name;
            $this->loadChallengesFromDatabase();
            $this->checkDailyReset(); // Cek reset harian
            $this->loadUserProgress();
            $this->initializeLeaderboard();
            $this->filterLeaderboard();
            $this->loadPendingSubmissions();
        }
    }

    // Method baru untuk mengecek dan melakukan reset harian
    public function checkDailyReset()
    {
        $user = auth()->user();
        if (! $user) {
            return;
        }

        $today = Carbon::now()->format('Y-m-d');
        $lastReset = $user->last_mission_reset ?? null;

        // Jika belum pernah reset atau reset terjadi kemarin, lakukan reset
        if (! $lastReset || $lastReset < $today) {
            $this->performDailyReset($user);
            $this->dailyResetCompleted = true;
        }

        // Set informasi reset
        $this->lastResetDate = $user->last_mission_reset ? Carbon::parse($user->last_mission_reset)->format('M j, Y') : 'Never';

        // Hitung waktu reset berikutnya (jam 00:00 besok)
        $now = Carbon::now();
        $tomorrow = $now->copy()->addDay()->startOfDay();
        $this->nextResetTime = $tomorrow->diffForHumans($now, true);
    }

    // Method untuk melakukan reset harian
    private function performDailyReset($user)
    {
        $today = Carbon::now()->format('Y-m-d');

        // Reset status misi
        foreach ($this->missions as &$mission) {
            $mission['status'] = 'pending';
            $mission['completedDate'] = null;
        }

        // Reset progress misi harian di database
        $user->update([
            'last_mission_reset' => $today,
            'daily_missions_completed' => 0,
            'daily_challenge_progress' => [],
        ]);

        // Simpan poin yang sudah didapatkan hari ini
        $todayPoints = $user->today_earned_points ?? 0;
        $user->increment('total_lifetime_points', $todayPoints);

        // Reset poin harian
        $user->update([
            'today_earned_points' => 0,
            'daily_streak' => $user->daily_streak + 1,
        ]);

    }

    public function loadChallengesFromDatabase()
    {
        $challenges = EcoChallenge::where('status', 'active')->get();

        $this->missions = $challenges->map(function ($challenge) {
            return [
                'id' => $challenge->id,
                'title' => $challenge->title,
                'description' => $challenge->description,
                'points' => $challenge->points_reward,
                'difficulty' => $this->calculateDifficulty($challenge->points_reward),
                'status' => 'pending',
                'completedDate' => null,
                'image_url' => $challenge->image_url,
                'category' => $challenge->category,
                'requirements' => $challenge->requirements,
            ];
        })->toArray();
    }

    private function calculateDifficulty($points)
    {
        if ($points <= 15) {
            return 1;
        }
        if ($points <= 25) {
            return 2;
        }
        if ($points <= 35) {
            return 3;
        }

        return 4;
    }

    public function loadUserProgress()
    {
        $user = auth()->user();
        if (! $user) {
            return;
        }

        // Gunakan total_lifetime_points untuk leaderboard
        $this->totalPoints = $user->total_lifetime_points ?? $user->eco_points ?? 0;
        $this->userLevel = $user->eco_level;

        // Gunakan daily_missions_completed untuk progress harian
        $this->challengesCompleted = $user->daily_missions_completed ?? 0;
        $this->progressPercentage = count($this->missions) > 0 ? ($this->challengesCompleted / count($this->missions)) * 100 : 0;

        // Update mission statuses based on user progress
        $progress = $user->daily_challenge_progress ?? [];
        foreach ($this->missions as &$mission) {
            if (isset($progress[$mission['id']]) && $progress[$mission['id']]['completed']) {
                $mission['status'] = 'completed';
                $mission['completedDate'] = $progress[$mission['id']]['completed_at'];
            }
        }

        // Update achievements
        $unlockedAchievements = $user->achievements_unlocked ?? [];
        foreach ($this->achievements as &$achievement) {
            $achievement['unlocked'] = isset($unlockedAchievements[$achievement['key']]);
        }
    }

    // Perbaikan: Mengambil semua submission yang pending dan approved untuk ditampilkan di review
    public function loadPendingSubmissions()
    {
        $this->pendingSubmissions = MissionSubmission::whereIn('status', ['pending', 'approved'])
            ->with(['ecoChallenge', 'user'])
            ->orderBy('status', 'asc') // pending dulu, lalu approved
            ->orderBy('submitted_at', 'desc')
            ->get()
            ->toArray();
    }

    public function openUploadModal($missionId)
    {
        $this->selectedMission = $missionId;
        $this->uploadedPhotos = [];
        $this->completionDescription = '';
        $this->showUploadModal = true;
    }

    public function closeUploadModal()
    {
        $this->showUploadModal = false;
        $this->selectedMission = null;
        $this->uploadedPhotos = [];
        $this->completionDescription = '';
    }

    public function submitMission()
    {
        $this->validate([
            'uploadedPhotos.*' => 'image|max:2048', // 2MB max per image
            'completionDescription' => 'required|min:10|max:500',
        ]);

        $user = auth()->user();
        $mission = collect($this->missions)->firstWhere('id', $this->selectedMission);

        if (! $mission || ! $user) {
            return;
        }

        // Check if user already has a pending or approved submission for this challenge
        $existingSubmission = MissionSubmission::where('user_id', $user->id)
            ->where('eco_challenge_id', $this->selectedMission)
            ->whereIn('status', ['pending', 'approved'])
            ->first();

        if ($existingSubmission) {
            if ($existingSubmission->status === 'pending') {
                session()->flash('error', '❌ You already have a pending submission for this mission. Please wait for review.');
            } else {
                session()->flash('error', '❌ You have already completed this mission today.');
            }
            $this->closeUploadModal();

            return;
        }

        // Store photos
        $photoPaths = [];
        foreach ($this->uploadedPhotos as $photo) {
            $path = $photo->store('mission-submissions', 'public');
            $photoPaths[] = $path;
        }

        // Create submission
        MissionSubmission::create([
            'user_id' => $user->id,
            'eco_challenge_id' => $this->selectedMission,
            'photo_path' => count($photoPaths) > 0 ? $photoPaths[0] : null, // For now, store first photo
            'description' => $this->completionDescription,
            'submitted_at' => now(),
        ]);

        $this->loadPendingSubmissions();
        $this->closeUploadModal();

        session()->flash('message', '✅ Mission submitted successfully! Your submission is now pending review.');
    }

    public function completeMission($missionId)
    {
        $user = auth()->user();
        if (! $user) {
            return;
        }

        $mission = collect($this->missions)->firstWhere('id', $missionId);
        if (! $mission || $mission['status'] === 'completed') {
            return;
        }

        // Check if photo is required
        if (isset($mission['requirements']['photo_required']) && $mission['requirements']['photo_required']) {
            $this->openUploadModal($missionId);

            return;
        }

        // For missions without photo requirement, complete immediately
        $this->awardMissionPoints($missionId, $mission);
    }

    private function awardMissionPoints($missionId, $mission)
    {
        $user = auth()->user();

        // Update mission status
        foreach ($this->missions as &$m) {
            if ($m['id'] == $missionId) {
                $m['status'] = 'completed';
                $m['completedDate'] = now()->toDateString();
                break;
            }
        }

        // Update user progress in database
        $user->updateDailyEcoProgress($missionId, $mission['points'], now()->toDateString());

        // Tambahkan poin ke total lifetime dan poin harian
        $user->increment('total_lifetime_points', $mission['points']);
        $user->increment('today_earned_points', $mission['points']);
        $user->increment('eco_points', $mission['points']); // Tetap update untuk kompatibilitas
        $user->increment('daily_missions_completed', 1);

        // Reload user progress
        $this->loadUserProgress();

        // Update leaderboard
        $this->refreshLeaderboard();

        // Show success message
        session()->flash('message', "🎉 Mission \"{$mission['title']}\" completed! +{$mission['points']} pts");
    }

    private function updateUserLevel($user)
    {
        $user->eco_level = $user->getEcoLevel();
        $user->save();
    }

    // Method baru untuk submit review (selalu approve)
    public function submitReview()
    {
        if (! $this->reviewSubmissionId) {
            session()->flash('error', 'No submission selected for review');

            return;
        }

        $submission = MissionSubmission::find($this->reviewSubmissionId);
        if (! $submission) {
            session()->flash('error', 'Submission not found');

            return;
        }

        // Approve submission
        $submission->update([
            'status' => 'approved',
            'reviewed_at' => now(),
            'review_notes' => $this->reviewNotes ?: 'Mission completed successfully! Thank you for your contribution to environmental conservation.',
            'rating' => $this->submissionRating,
        ]);

        // Award points to user
        $user = $submission->user;
        $points = $submission->ecoChallenge->points_reward;

        // Tambahkan ke total lifetime dan poin harian
        $user->increment('total_lifetime_points', $points);
        $user->increment('today_earned_points', $points);
        $user->increment('eco_points', $points); // Tetap update untuk kompatibilitas
        $user->increment('challenges_completed', 1);
        $user->increment('daily_missions_completed', 1);

        // Update user level
        $this->updateUserLevel($user);

        $this->loadUserProgress();
        $this->refreshLeaderboard();

        // Close modal and show success message
        $this->closeReviewModal();
        // Jangan reload pending submissions agar submission yang sudah di-approve tetap terlihat
        // $this->loadPendingSubmissions();

        session()->flash('message', '✅ Submission reviewed and approved successfully! Points awarded. Thank you for your environmental efforts!');
    }

    // Method reviewSubmission lama bisa dihapus atau dibiarkan untuk backward compatibility
    public function reviewSubmission($submissionId, $action)
    {
        // Method ini tidak digunakan lagi, tapi dibiarkan untuk mencegah error
        if ($action === 'approve') {
            $this->reviewSubmissionId = $submissionId;
            $this->submitReview();
        }
    }

    // Perbaikan: Menambahkan pengaturan reviewSubmissionId
    public function openReviewModal($submissionId)
    {
        $submission = MissionSubmission::with(['ecoChallenge', 'user'])->find($submissionId);
        if ($submission) {
            $this->reviewSubmission = $submission->toArray();
            $this->reviewSubmissionId = $submissionId;
        }
        $this->reviewNotes = '';
        $this->submissionRating = 5; // Reset rating ke default
        $this->showReviewModal = true;
    }

    public function closeReviewModal()
    {
        $this->showReviewModal = false;
        $this->reviewSubmission = null;
        $this->reviewSubmissionId = null; // Reset ID
        $this->reviewNotes = '';
        $this->submissionRating = 5; // Reset rating ke default
    }

    public function initializeLeaderboard()
    {
        // Get real users from database with their eco progress
        $users = \App\Models\User::with('challengeParticipations')
            ->where('id', '!=', auth()->id())
            ->get()
            ->map(function ($user) {
                return [
                    'id' => $user->id,
                    'name' => $user->name,
                    'points' => $user->total_lifetime_points ?? $user->eco_points ?? 0, // Gunakan total_lifetime_points
                    'location' => 'Jakarta',
                    'avatar' => 'https://cdn-icons-png.flaticon.com/512/219/219983.png',
                    'level' => $user->eco_level ?? 'Beginner',
                    'completedMissions' => $user->daily_missions_completed ?? $user->challenges_completed ?? 0,
                    'totalMissions' => count($this->missions),
                ];
            })
            ->toArray();

        // Add current user to the leaderboard
        $currentUser = [
            'id' => auth()->id(),
            'name' => $this->userName,
            'points' => $this->totalPoints,
            'location' => $this->userLocation,
            'avatar' => $this->userAvatar,
            'level' => $this->userLevel,
            'completedMissions' => $this->challengesCompleted,
            'totalMissions' => count($this->missions),
        ];

        // Combine and sort by points (descending)
        $this->leaderboard = collect(array_merge([$currentUser], $users))
            ->sortByDesc('points')
            ->values()
            ->all();
    }

    public function filterLeaderboard()
    {
        if ($this->selectedLocation === 'all') {
            $this->filteredLeaderboard = $this->leaderboard;
        } else {
            $this->filteredLeaderboard = collect($this->leaderboard)
                ->filter(fn ($user) => $user['location'] === $this->selectedLocation)
                ->values()
                ->all();
        }

        // Update current user rank
        $currentUserIndex = collect($this->filteredLeaderboard)->search(fn ($user) => $user['id'] == auth()->id());
        $this->currentUserRank = $currentUserIndex !== false ? $currentUserIndex + 1 : count($this->filteredLeaderboard) + 1;
    }

    public function refreshLeaderboard()
    {
        // Update current user data in leaderboard
        foreach ($this->leaderboard as &$user) {
            if ($user['id'] == auth()->id()) {
                $user['points'] = $this->totalPoints;
                $user['level'] = $this->userLevel;
                $user['completedMissions'] = $this->challengesCompleted;
                break;
            }
        }

        // Re-sort leaderboard
        $this->leaderboard = collect($this->leaderboard)->sortByDesc('points')->values()->all();
        $this->filterLeaderboard();
    }

    // Ubah method resetProgress untuk reset manual
    public function resetProgress()
    {
        if (! auth()->check()) {
            return;
        }

        $user = auth()->user();

        // Reset status misi saja, jangan reset poin
        foreach ($this->missions as &$mission) {
            $mission['status'] = 'pending';
            $mission['completedDate'] = null;
        }

        // Reset progress misi harian di database
        $user->update([
            'daily_missions_completed' => 0,
            'daily_challenge_progress' => [],
        ]);

        // Reload progress
        $this->loadUserProgress();

        session()->flash('message', 'Daily missions have been reset. Your total points remain unchanged.');
    }

    public function showAchievements()
    {
        $this->showAchievementsModal = true;
    }

    public function getRankBadgeClass($rank)
    {
        if ($rank === 1) {
            return 'bg-yellow-500 text-yellow-900';
        }
        if ($rank === 2) {
            return 'bg-gray-400 text-gray-900';
        }
        if ($rank === 3) {
            return 'bg-amber-700 text-amber-100';
        }

        return 'bg-slate-700 text-gray-300';
    }

    public function render()
    {
        return view('livewire.challenge-center')
            ->layout('layouts.app');
    }
}
