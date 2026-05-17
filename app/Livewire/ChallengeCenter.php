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

    public $dailyStreak = 0;

    public $totalChallenges = 11; // Total number of challenges (updated to match seeder)

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
        ['id' => 2, 'title' => 'Point Collector', 'description' => 'Collect 50 points', 'icon' => '💰', 'key' => 'point_collector'],
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

    // Method untuk mengecek dan melakukan reset harian
    public function checkDailyReset()
    {
        $user = auth()->user();
        if (! $user) {
            return;
        }

        $today = Carbon::now()->format('Y-m-d');
        $lastReset = $user->last_mission_reset ?? null;
        $yesterday = Carbon::now()->subDay()->format('Y-m-d');

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
    public function performDailyReset($user)
    {
        $today = Carbon::now()->format('Y-m-d');
        $yesterday = Carbon::now()->subDay()->format('Y-m-d');

        // Reset status misi
        foreach ($this->missions as &$mission) {
            $mission['status'] = 'pending';
            $mission['completedDate'] = null;
        }

        // Logika untuk daily streak
        if ($user->completed_all_challenges_today) {
            // Jika user menyelesaikan semua challenge hari ini, tambahkan streak
            $newStreak = ($user->daily_streak ?? 0) + 1;
        } else {
            // Jika tidak menyelesaikan semua hari ini, reset streak ke 0
            $newStreak = 0;
        }

        // Reset progress misi harian di database
        $user->update([
            'last_mission_reset' => $today,
            'daily_missions_completed' => 0,
            'daily_challenge_progress' => [],
            'daily_streak' => $newStreak,
            'completed_all_challenges_today' => false, // Reset flag untuk hari ini
            'completed_all_challenges_yesterday' => false, // Reset flag untuk kemarin
        ]);

        // Simpan poin yang sudah didapatkan hari ini ke total lifetime
        $todayPoints = $user->today_earned_points ?? 0;
        if ($todayPoints > 0) {
            $user->increment('eco_points', $todayPoints);
        }

        // Reset poin harian
        $user->update([
            'today_earned_points' => 0,
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

        // Load daily streak dari database
        $this->dailyStreak = $user->daily_streak ?? 0;

        // Gunakan eco_points untuk leaderboard
        $this->totalPoints = $user->eco_points ?? 0;
        $this->userLevel = $user->eco_level;

        $today = Carbon::now()->format('Y-m-d');
        $approvedToday = MissionSubmission::where('user_id', $user->id)
            ->whereDate('submitted_at', $today)
            ->where('status', 'approved')
            ->count();

        $this->challengesCompleted = $approvedToday;
        $this->progressPercentage = count($this->missions) > 0 ? ($this->challengesCompleted / count($this->missions)) * 100 : 0;

        $todaySubmissions = MissionSubmission::where('user_id', $user->id)
            ->whereDate('submitted_at', $today)
            ->get()
            ->keyBy('eco_challenge_id');

        $progress = $user->daily_challenge_progress ?? [];
        foreach ($this->missions as &$mission) {
            $challengeId = $mission['id'];

            // Check for submissions first
            if (isset($todaySubmissions[$challengeId])) {
                $submission = $todaySubmissions[$challengeId];
                if ($submission->status === 'approved') {
                    $mission['status'] = 'approved';
                    $mission['completedDate'] = $submission->reviewed_at?->format('Y-m-d');
                } elseif ($submission->status === 'pending') {
                    $mission['status'] = 'submitted';
                } elseif ($submission->status === 'rejected') {
                    $mission['status'] = 'pending'; // Allow resubmission for rejected submissions
                    $mission['completedDate'] = null;
                }
            }
            // Fallback to progress (for non-submission missions)
            elseif (isset($progress[$challengeId]) && $progress[$challengeId]['completed']) {
                $mission['status'] = 'completed';
                $mission['completedDate'] = $progress[$challengeId]['completed_at'];
            }
            // Default to pending
            else {
                $mission['status'] = 'pending';
                $mission['completedDate'] = null;
            }
        }

        // Update achievements
        $unlockedAchievements = $user->achievements_unlocked ?? [];
        foreach ($this->achievements as &$achievement) {
            $achievement['unlocked'] = isset($unlockedAchievements[$achievement['key']]);
        }

        // Check and update Community Leader achievement based on current rank
        $user->updateAchievements($this->currentUserRank);
    }

    // Perbaikan: Mengambil semua submission yang pending, approved, dan rejected untuk ditampilkan di review
    public function loadPendingSubmissions()
    {
        $this->pendingSubmissions = MissionSubmission::whereIn('status', ['pending', 'approved', 'rejected'])
            ->with(['ecoChallenge', 'user'])
            ->orderByRaw("CASE WHEN status = 'pending' THEN 1 WHEN status = 'approved' THEN 2 WHEN status = 'rejected' THEN 3 END")
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

        // Check if user already has a pending or approved submission for this challenge today
        // Allow resubmission if previous submission was rejected
        $today = Carbon::now()->format('Y-m-d');
        $existingSubmission = MissionSubmission::where('user_id', $user->id)
            ->where('eco_challenge_id', $this->selectedMission)
            ->whereDate('submitted_at', $today)
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

        // Check if user has a rejected submission for this challenge today, update it instead of creating new
        $rejectedSubmission = MissionSubmission::where('user_id', $user->id)
            ->where('eco_challenge_id', $this->selectedMission)
            ->whereDate('submitted_at', $today)
            ->where('status', 'rejected')
            ->first();

        // Store photos
        $photoPaths = [];
        foreach ($this->uploadedPhotos as $photo) {
            $path = $photo->store('mission-submissions', 'public');
            $photoPaths[] = $path;
        }

        if ($rejectedSubmission) {
            // Update existing rejected submission
            $rejectedSubmission->update([
                'photo_path' => count($photoPaths) > 0 ? $photoPaths[0] : $rejectedSubmission->photo_path,
                'description' => $this->completionDescription,
                'status' => 'pending', // Change status back to pending for review
                'submitted_at' => now(),
                'review_notes' => null, // Clear previous review notes
                'reviewed_at' => null,
                'rating' => null,
            ]);
        } else {
            // Create new submission
            MissionSubmission::create([
                'user_id' => $user->id,
                'eco_challenge_id' => $this->selectedMission,
                'photo_path' => count($photoPaths) > 0 ? $photoPaths[0] : null, // For now, store first photo
                'description' => $this->completionDescription,
                'submitted_at' => now(),
            ]);
        }

        // Update mission status to submitted
        foreach ($this->missions as &$m) {
            if ($m['id'] == $this->selectedMission) {
                $m['status'] = 'submitted';
                break;
            }
        }

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
        $user->increment('eco_points', $mission['points']);
        $user->increment('today_earned_points', $mission['points']);
        $user->increment('daily_missions_completed', 1);

        // Update last active date
        $user->update(['last_active_date' => Carbon::now()->format('Y-m-d')]);

        // Check dan update daily streak jika semua challenge sudah diselesaikan
        $this->checkAndUpdateDailyStreak($user);

        // Reload user progress
        $this->loadUserProgress();

        // Update leaderboard
        $this->refreshLeaderboard();

        // Show success message
        session()->flash('message', "Mission \"{$mission['title']}\" completed! +{$mission['points']} pts");
    }

    // Method untuk mengecek dan mengupdate daily streak
    private function checkAndUpdateDailyStreak($user)
    {
        $today = Carbon::now()->format('Y-m-d');

        // Hitung total challenge yang sudah diselesaikan hari ini
        $completedToday = MissionSubmission::where('user_id', $user->id)
            ->whereDate('submitted_at', $today)
            ->where('status', 'approved')
            ->count();

        if ($completedToday >= $this->totalChallenges) {
            if (! $user->completed_all_challenges_today) {
                $user->update(['completed_all_challenges_today' => true]);

                // Update flag untuk kemarin (untuk streak besok)
                $user->update(['completed_all_challenges_yesterday' => true]);

                session()->flash('streak_message', '🔥 Congratulations! You\'ve completed all challenges today! Your daily streak will increase tomorrow.');
            }
        }

        // Reload user progress
        $this->loadUserProgress();

        $this->refreshLeaderboard();

        session()->flash('message', "🎉 Mission \"{$mission['title']}\" completed! +{$mission['points']} pts");
    }

    private function updateUserLevel($user)
    {
        $user->eco_level = $user->getEcoLevel();
        $user->save();
    }

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

        $user = $submission->user;
        $points = $submission->ecoChallenge->points_reward;

        $user->increment('eco_points', $points);
        $user->increment('today_earned_points', $points);
        $user->increment('challenges_completed', 1);
        $user->increment('daily_missions_completed', 1);

        // Update last active date
        $user->update(['last_active_date' => Carbon::now()->format('Y-m-d')]);

        $today = Carbon::now()->format('Y-m-d');

        // Hitung total challenge yang sudah diselesaikan hari ini
        $completedToday = MissionSubmission::where('user_id', $user->id)
            ->whereDate('submitted_at', $today)
            ->where('status', 'approved')
            ->count();

        if ($completedToday >= $this->totalChallenges) {
            if (! $user->completed_all_challenges_today) {
                $user->update(['completed_all_challenges_today' => true]);

                // Update flag untuk kemarin (untuk streak besok)
                $user->update(['completed_all_challenges_yesterday' => true]);

                session()->flash('streak_message', '🔥 Congratulations! You\'ve completed all challenges today! Your daily streak will increase tomorrow.');
            }
        }

        foreach ($this->missions as &$mission) {
            if ($mission['id'] == $submission->eco_challenge_id) {
                $mission['status'] = 'approved';
                $mission['completedDate'] = now()->toDateString();
                break;
            }
        }

        // Update user level
        $this->updateUserLevel($user);
        $this->loadUserProgress();
        $this->refreshLeaderboard();

        // Update achievements after leaderboard refresh
        $user->updateAchievements($this->currentUserRank);

        $this->closeReviewModal();

        session()->flash('message', 'Submission reviewed and approved successfully! Points awarded. Thank you for your environmental efforts!');
    }

    public function reviewSubmission($submissionId, $action)
    {
        if ($action === 'approve') {
            $this->reviewSubmissionId = $submissionId;
            $this->submitReview();
        }
    }

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
        $this->submissionRating = 5;
    }

    public function initializeLeaderboard()
    {
        $users = \App\Models\User::with('challengeParticipations')
            ->where('id', '!=', auth()->id())
            ->get()
            ->map(function ($user) {
                $today = Carbon::now()->format('Y-m-d');
                $approvedToday = MissionSubmission::where('user_id', $user->id)
                    ->whereDate('submitted_at', $today)
                    ->where('status', 'approved')
                    ->count();

                return [
                    'id' => $user->id,
                    'name' => $user->name,
                    'points' => $user->eco_points ?? 0,
                    'location' => 'Jakarta',
                    'avatar' => 'https://cdn-icons-png.flaticon.com/512/219/219983.png',
                    'level' => $user->eco_level ?? 'Beginner',
                    'completedMissions' => $approvedToday,
                    'totalMissions' => $this->totalChallenges,
                    'dailyStreak' => $user->daily_streak ?? 0,
                ];
            })
            ->toArray();

        // Add current user to leaderboard
        $currentUser = [
            'id' => auth()->id(),
            'name' => $this->userName,
            'points' => $this->totalPoints,
            'location' => $this->userLocation,
            'avatar' => $this->userAvatar,
            'level' => $this->userLevel,
            'completedMissions' => $this->challengesCompleted,
            'totalMissions' => $this->totalChallenges,
            'dailyStreak' => $this->dailyStreak,
        ];

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
        foreach ($this->leaderboard as &$user) {
            if ($user['id'] == auth()->id()) {
                $user['points'] = $this->totalPoints;
                $user['level'] = $this->userLevel;
                $user['completedMissions'] = $this->challengesCompleted;
                $user['dailyStreak'] = $this->dailyStreak;
                break;
            }
        }

        $today = Carbon::now()->format('Y-m-d');
        foreach ($this->leaderboard as &$user) {
            if ($user['id'] != auth()->id()) {
                $approvedToday = MissionSubmission::where('user_id', $user['id'])
                    ->whereDate('submitted_at', $today)
                    ->where('status', 'approved')
                    ->count();
                $user['completedMissions'] = $approvedToday;
            }
        }

        // Re-sort leaderboard
        $this->leaderboard = collect($this->leaderboard)->sortByDesc('points')->values()->all();
        $this->filterLeaderboard();
    }

    public function resetProgress()
    {
        if (! auth()->check()) {
            return;
        }

        $user = auth()->user();

        // Reset status misi
        foreach ($this->missions as &$mission) {
            $mission['status'] = 'pending';
            $mission['completedDate'] = null;
        }

        // Reset progress misi harian di database
        $user->update([
            'daily_missions_completed' => 0,
            'daily_challenge_progress' => [],
            'completed_all_challenges_today' => false,
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
