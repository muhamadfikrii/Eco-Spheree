<?php

namespace App\Livewire;

use App\Models\EcoChallenge;
use App\Models\EnvironmentalReport;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;
    
    // Data Properties
    public $challenges = [];
    public $activities = [];
    public $recentReports = [];
    public $userStats = [];
    public $sustainabilityScore = 7.8;
    public $region = 'Jakarta, Indonesia';
    
    // Modal Properties
    public $showReportModal = false;
    public $showChallengeModal = false;
    public $showActivityModal = false;
    public $selectedChallenge = null;
    public $selectedActivity = null;

    public $impactStories = [];
    public $ecoTips = [];
    public $sustainabilityMetrics = [];
    public $leaderboard = [];

    public $layers = [
        ['id' => 'air-quality', 'name' => 'Air Quality', 'visible' => true, 'color' => '#10b981'],
        ['id' => 'hotspots', 'name' => 'Fire Hotspots', 'visible' => false, 'color' => '#f97316'],
        ['id' => 'water-quality', 'name' => 'Water Quality', 'visible' => false, 'color' => '#3b82f6'],
        ['id' => 'recycling', 'name' => 'Recycling Centers', 'visible' => false, 'color' => '#8b5cf6'],
        ['id' => 'user-reports', 'name' => 'User Reports', 'visible' => true, 'color' => '#eab308']
    ];
    
    // Form Properties
    public $reportForm = [
        'issueType' => 'Air Pollution',
        'description' => '',
        'location' => '',
        'photo' => null
    ];
    
    public $activityForm = [
        'type' => 'transport',
        'description' => '',
        'co2_impact' => 0
    ];
    
    // Loading States
    public $isLoading = false;
    public $notificationMessage = '';
    public $notificationType = 'success';
    
    // Filter Properties
    public $activeFilter = 'all';
    public $timeRange = 'week';
    
    protected $listeners = [
        'refreshData' => '$refresh',
        'challengeJoined' => '$refresh',
        'activityLogged' => '$refresh',
        'locationUpdated' => 'updateLocation'
    ];
    
    public function mount()
    {
        $this->loadData();
    }
    
    public function loadData()
    {
        $this->isLoading = true;
        
        $this->loadChallenges();
        $this->loadActivities();
        $this->loadRecentReports();
        $this->loadImpactStories();  
        $this->loadEcoTips();         
        $this->loadSustainabilityMetrics(); 
        $this->loadLeaderboard();
        $this->calculateUserStats();
        
        $this->isLoading = false;
    }
    
    private function loadChallenges()
    {
        // Load active challenges
        $this->challenges = EcoChallenge::active()
            ->withCount('participants')
            ->get()
            ->map(function ($challenge) {
                return [
                    'id' => $challenge->id,
                    'title' => $challenge->title,
                    'description' => $challenge->description,
                    'category' => $challenge->category,
                    'progress' => $challenge->getProgressPercentage(),
                    'participants_count' => $challenge->participants_count,
                    'target_participants' => $challenge->target_participants,
                    'time_left' => $challenge->getTimeLeft(),
                    'points_reward' => $challenge->points_reward,
                    'badge_reward' => $challenge->badge_reward,
                    'image_url' => $challenge->image_url,
                    'difficulty' => $challenge->difficulty ?? 'medium',
                    'is_joined' => auth()->check() ? auth()->user()->challengeParticipations()
                        ->where('eco_challenge_id', $challenge->id)
                        ->exists() : false,
                    'user_progress' => auth()->check() ? auth()->user()->challengeParticipations()
                        ->where('eco_challenge_id', $challenge->id)
                        ->value('progress') ?? 0 : 0
                ];
            })->toArray();
            
        // Jika tidak ada data di database, gunakan dummy data
        if (empty($this->challenges)) {
            $this->challenges = $this->getDummyChallenges();
        }
    }
    
    private function loadActivities()
    {
        // Load user activities
        if (auth()->check()) {
            $user = auth()->user();
            $this->activities = $user
                ->activities()
                ->latest()
                ->take(5)
                ->get()
                ->map(function ($activity) {
                    return [
                        'id' => $activity->id,
                        'description' => $activity->description,
                        'icon' => $activity->icon,
                        'co2_impact' => $activity->getFormattedCo2Impact(),
                        'impact_class' => $activity->isEcoFriendly() ? 'text-green-400' : 'text-red-400',
                        'activity_date' => $activity->activity_date->format('M j, Y H:i'),
                        'points_earned' => $activity->points_earned,
                        'type' => $activity->type,
                        'location' => $activity->location ?? null
                    ];
                })->toArray();
        } else {
            $this->activities = [];
        }
            
        // Jika tidak ada data, gunakan dummy data
        if (empty($this->activities)) {
            $this->activities = $this->getDummyActivities();
        }
    }
    
    private function loadRecentReports()
    {
        $this->recentReports = EnvironmentalReport::with('user')
            ->latest()
            ->take(5)
            ->get()
            ->map(function ($report) {
                return [
                    'id' => $report->id,
                    'title' => $report->title,
                    'description' => $report->description,
                    'type' => $report->type,
                    'location' => $report->location,
                    'status' => $report->status,
                    'upvotes' => $report->upvotes,
                    'created_at' => $report->created_at->diffForHumans(),
                    'icon_class' => $this->getIconClass($report->type),
                    'user' => [
                        'name' => $report->user->name,
                        'avatar' => $report->user->avatar_url ?? null
                    ],
                    'verified' => $report->verified ?? false
                ];
            })->toArray();
            
        // Dummy data jika kosong
        if (empty($this->recentReports)) {
            $this->recentReports = $this->getDummyReports();
        }
    }

    private function loadLeaderboard()
    {
        // Load top users leaderboard
        $this->leaderboard = [
            ['rank' => 1, 'name' => 'EcoWarrior', 'points' => 2850, 'badge' => '🏆'],
            ['rank' => 2, 'name' => 'GreenThumb', 'points' => 2420, 'badge' => '🥈'],
            ['rank' => 3, 'name' => 'NatureLover', 'points' => 2100, 'badge' => '🥉'],
            ['rank' => 4, 'name' => 'EarthSaver', 'points' => 1850, 'badge' => '🌟'],
            ['rank' => 5, 'name' => 'PlanetHero', 'points' => 1620, 'badge' => '⭐'],
        ];
    }

    public function toggleLayer($layerId)
    {
        $layerIndex = collect($this->layers)->search(function($layer) use ($layerId) {
            return $layer['id'] === $layerId;
        });
        
        if ($layerIndex !== false) {
            $this->layers[$layerIndex]['visible'] = !$this->layers[$layerIndex]['visible'];
            
            $this->dispatchBrowserEvent('layer-toggled', [
                'layerId' => $layerId,
                'visible' => $this->layers[$layerIndex]['visible'],
                'color' => $this->layers[$layerIndex]['color']
            ]);
        }
    }
    
    
    // Challenge Methods
    public function joinChallenge($challengeId)
    {
        $challenge = EcoChallenge::find($challengeId);
        
        if (!$challenge) {
            $this->showNotification('Challenge not found', 'error');
            return;
        }
        
        if (!$challenge->isActive()) {
            $this->showNotification('This challenge is no longer active', 'warning');
            return;
        }
        
        if (auth()->check()) {
            $participation = auth()->user()->joinChallenge($challenge);
        } else {
            $this->showNotification('You must be logged in to join challenges', 'error');
            return;
        }
        
        if ($participation) {
            $this->showNotification('Successfully joined the challenge!', 'success');
            $this->dispatch('challengeJoined');
            $this->loadChallenges(); // Refresh challenges data
        } else {
            $this->showNotification('You have already joined this challenge', 'info');
        }
    }
    
    public function viewChallengeDetails($challengeId)
    {
        $this->selectedChallenge = collect($this->challenges)->firstWhere('id', $challengeId);
        $this->showChallengeModal = true;
    }
    
    // Activity Methods
    public function logActivity($activityData)
    {
        if (!auth()->check()) {
            $this->showNotification('You must be logged in to log activities', 'error');
            return;
        }

        $activity = auth()->user()->logActivity([
            'type' => $activityData['type'],
            'description' => $activityData['description'],
            'icon' => $activityData['icon'] ?? null,
            'co2_impact' => $activityData['co2_impact'] ?? 0,
            'points_earned' => $activityData['points_earned'] ?? 0,
            'metadata' => $activityData['metadata'] ?? []
        ]);

        $this->showNotification('Activity logged successfully!', 'success');
        $this->dispatch('activityLogged');
        $this->loadActivities();
        $this->calculateUserStats();
    }
    
    public function showActivityForm()
    {
        $this->showActivityModal = true;
    }
    
    public function submitActivity()
    {
        $this->validate([
            'activityForm.type' => 'required',
            'activityForm.description' => 'required|min:5',
        ]);
        
        if (!auth()->check()) {
            $this->showNotification('You must be logged in to log activities', 'error');
            return;
        }

        $activityData = [
            'type' => $this->activityForm['type'],
            'description' => $this->activityForm['description'],
            'co2_impact' => $this->activityForm['co2_impact'],
            'points_earned' => $this->calculateActivityPoints($this->activityForm['type'], $this->activityForm['co2_impact']),
            'icon' => $this->getActivityIcon($this->activityForm['type'])
        ];
        
        $this->logActivity($activityData);
        
        $this->resetActivityForm();
        $this->showActivityModal = false;
    }
    
    // Report Methods
    public function submitReport()
    {
        $this->validate([
            'reportForm.issueType' => 'required',
            'reportForm.description' => 'required|min:10',
            'reportForm.location' => 'required'
        ]);
        
        if (!auth()->check()) {
            $this->showNotification('You must be logged in to submit reports', 'error');
            return;
        }

        $report = EnvironmentalReport::create([
            'title' => substr($this->reportForm['description'], 0, 100),
            'description' => $this->reportForm['description'],
            'type' => str_replace(' ', '_', strtolower($this->reportForm['issueType'])),
            'location' => $this->reportForm['location'],
            'user_id' => auth()->id(),
            'status' => 'pending',
            'verified' => false
        ]);
        
        $this->resetReportForm();
        $this->showReportModal = false;
        $this->showNotification('Report submitted successfully!', 'success');
        $this->loadRecentReports();
    }
    
    public function upvoteReport($reportId)
    {
        $report = EnvironmentalReport::find($reportId);
        if ($report) {
            $report->increment('upvotes');
            $this->showNotification('Report upvoted!', 'success');
            $this->loadRecentReports();
        }
    }
    
    public function updateLocation($location)
    {
        $this->reportForm['location'] = $location;
    }
    
    // Utility Methods
    private function showNotification($message, $type = 'success')
    {
        $this->notificationMessage = $message;
        $this->notificationType = $type;
        $this->dispatchBrowserEvent('showNotification', [
            'message' => $message,
            'type' => $type
        ]);
    }
    
    private function resetReportForm()
    {
        $this->reportForm = [
            'issueType' => 'Air Pollution',
            'description' => '',
            'location' => '',
            'photo' => null
        ];
    }
    
    private function resetActivityForm()
    {
        $this->activityForm = [
            'type' => 'transport',
            'description' => '',
            'co2_impact' => 0
        ];
    }
    
    private function getIconClass($type)
    {
        $icons = [
            'air_pollution' => 'fas fa-exclamation-triangle text-yellow-400',
            'water_pollution' => 'fas fa-water text-blue-400',
            'illegal_dumping' => 'fas fa-trash text-red-400',
            'deforestation' => 'fas fa-tree text-green-400',
            'wildlife' => 'fas fa-paw text-yellow-600',
        ];
        
        return $icons[$type] ?? 'fas fa-exclamation-circle text-gray-400';
    }
    
    private function getActivityIcon($type)
    {
        $icons = [
            'transport' => '🚶',
            'food' => '🍛',
            'energy' => '💡',
            'waste' => '♻️',
            'water' => '💧',
        ];
        
        return $icons[$type] ?? '🌱';
    }
    
    private function calculateActivityPoints($type, $co2Impact)
    {
        $basePoints = [
            'transport' => 10,
            'food' => 5,
            'energy' => 7,
            'waste' => 8,
            'water' => 6,
        ];
        
        $points = $basePoints[$type] ?? 5;
        
        // Bonus points for positive CO2 impact
        if ($co2Impact < 0) {
            $points += abs($co2Impact) * 2;
        }
        
        return $points;
    }
    
    private function calculateUserLevel($points)
    {
        if ($points < 100) return ['level' => 1, 'title' => 'Eco Beginner', 'color' => '#10b981'];
        if ($points < 500) return ['level' => 2, 'title' => 'Eco Enthusiast', 'color' => '#3b82f6'];
        if ($points < 1000) return ['level' => 3, 'title' => 'Eco Warrior', 'color' => '#8b5cf6'];
        if ($points < 2000) return ['level' => 4, 'title' => 'Eco Champion', 'color' => '#f59e0b'];
        return ['level' => 5, 'title' => 'Eco Master', 'color' => '#ef4444'];
    }
    
    // Dummy Data Methods (untuk testing)
    private function getDummyChallenges()
    {
        return [
            [
                'id' => 1,
                'title' => 'Plastic-Free Week',
                'description' => 'Avoid single-use plastics for one week',
                'category' => 'weekly',
                'progress' => 65,
                'participants_count' => 234,
                'target_participants' => 500,
                'time_left' => '3 days left',
                'points_reward' => 100,
                'badge_reward' => 'plastic_warrior',
                'image_url' => 'https://picsum.photos/seed/plastic/400/300.jpg',
                'is_joined' => true,
                'user_progress' => 40,
                'difficulty' => 'medium'
            ],
            [
                'id' => 2,
                'title' => 'Bike to Work Challenge',
                'description' => 'Use bicycle for commuting',
                'category' => 'monthly',
                'progress' => 40,
                'participants_count' => 156,
                'target_participants' => 1000,
                'time_left' => '1 week left',
                'points_reward' => 200,
                'badge_reward' => 'eco_commuter',
                'image_url' => 'https://picsum.photos/seed/bike/400/300.jpg',
                'is_joined' => false,
                'user_progress' => 0,
                'difficulty' => 'hard'
            ],
            [
                'id' => 3,
                'title' => 'Meatless Mondays',
                'description' => 'Go vegetarian every Monday',
                'category' => 'monthly',
                'progress' => 80,
                'participants_count' => 412,
                'target_participants' => 750,
                'time_left' => '2 weeks left',
                'points_reward' => 150,
                'badge_reward' => 'plant_based_hero',
                'image_url' => 'https://picsum.photos/seed/meatless/400/300.jpg',
                'is_joined' => true,
                'user_progress' => 60,
                'difficulty' => 'easy'
            ]
        ];
    }
    
    private function getDummyActivities()
    {
        return [
            [
                'id' => 1,
                'description' => 'Walked to work instead of driving',
                'icon' => '🚶',
                'co2_impact' => '-2.5 kg CO₂e',
                'impact_class' => 'text-green-400',
                'activity_date' => 'Dec 15, 2023 09:30',
                'points_earned' => 10,
                'type' => 'transport',
                'location' => 'Jakarta, Indonesia'
            ],
            [
                'id' => 2,
                'description' => 'Had vegetarian lunch',
                'icon' => '🍛',
                'co2_impact' => '-1.2 kg CO₂e',
                'impact_class' => 'text-green-400',
                'activity_date' => 'Dec 15, 2023 12:45',
                'points_earned' => 5,
                'type' => 'food',
                'location' => 'Jakarta, Indonesia'
            ],
            [
                'id' => 3,
                'description' => 'Used car for 10 km trip',
                'icon' => '🚗',
                'co2_impact' => '+2.1 kg CO₂e',
                'impact_class' => 'text-red-400',
                'activity_date' => 'Dec 14, 2023 18:20',
                'points_earned' => 0,
                'type' => 'transport',
                'location' => 'Jakarta, Indonesia'
            ]
        ];
    }
    
    private function getDummyReports()
    {
        return [
            [
                'id' => 1,
                'title' => 'Illegal dumping in Manggarai',
                'description' => 'Large pile of construction waste dumped near riverbank',
                'type' => 'illegal_dumping',
                'location' => 'Manggarai, South Jakarta',
                'status' => 'pending',
                'upvotes' => 5,
                'created_at' => '2 hours ago',
                'icon_class' => 'fas fa-exclamation-triangle text-yellow-400',
                'user' => ['name' => 'John Doe', 'avatar' => null],
                'verified' => false
            ],
            [
                'id' => 2,
                'title' => 'New community garden in Kemang',
                'description' => 'Residents started a community garden on vacant land',
                'type' => 'deforestation',
                'location' => 'Kemang, South Jakarta',
                'status' => 'resolved',
                'upvotes' => 12,
                'created_at' => '5 hours ago',
                'icon_class' => 'fas fa-tree text-green-400',
                'user' => ['name' => 'Jane Smith', 'avatar' => null],
                'verified' => true
            ]
        ];
    }

    private function loadImpactStories()
    {
        $this->impactStories = [
            [
                'id' => 1,
                'title' => 'The Ocean Plastic Crisis',
                'description' => 'How microplastics are affecting marine ecosystems',
                'image' => 'https://picsum.photos/seed/ocean-plastic/600/300.jpg',
                'author' => 'Marine Biology Institute',
                'reading_time' => '5 min read',
                'likes' => 234,
                'shares' => 56,
                'published_at' => '2 days ago',
                'featured' => true
            ],
            [
                'id' => 2,
                'title' => 'Rainforest Deforestation',
                'description' => 'The impact of losing our world\'s lungs',
                'image' => 'https://picsum.photos/seed/deforestation/600/300.jpg',
                'author' => 'Environmental Watch',
                'reading_time' => '7 min read',
                'likes' => 189,
                'shares' => 42,
                'published_at' => '1 week ago',
                'featured' => false
            ]
        ];
    }

     private function loadEcoTips()
    {
        // Untuk sekarang, gunakan dummy data
        // Nanti bisa diganti dengan data dari database atau API
        $this->ecoTips = [
            [
                'id' => 1,
                'text' => 'Try a meat-free menu for dinner tonight.',
                'category' => 'food',
                'icon' => '🥗'
            ],
            [
                'id' => 2,
                'text' => 'Unplug chargers for unused electronic devices.',
                'category' => 'energy',
                'icon' => '🔌'
            ],
            [
                'id' => 3,
                'text' => 'Use cloth bags for shopping.',
                'category' => 'waste',
                'icon' => '🛍️'
            ]
        ];
    }
    
    private function loadSustainabilityMetrics()
    {
        // Untuk sekarang, gunakan dummy data
        // Nanti bisa dihitung dari database
        $this->sustainabilityMetrics = [
            [
                'id' => 1,
                'name' => 'Air Quality',
                'score' => '6.5',
                'percentage' => 65,
                'trend' => 'up', // up, down, stable
                'icon' => '💨',
                'color' => '#10b981'
            ],
            [
                'id' => 2,
                'name' => 'Green Spaces',
                'score' => '4.5',
                'percentage' => 45,
                'trend' => 'up',
                'icon' => '🌳',
                'color' => '#3b82f6'
            ],
            [
                'id' => 3,
                'name' => 'Waste Management',
                'score' => '8.0',
                'percentage' => 80,
                'trend' => 'stable',
                'icon' => '♻️',
                'color' => '#8b5cf6'
            ],
            [
                'id' => 4,
                'name' => 'Water Quality',
                'score' => '7.0',
                'percentage' => 70,
                'trend' => 'down',
                'icon' => '💧',
                'color' => '#06b6d4'
            ]
        ];
    }
    
    public function refreshTips()
    {
        // Refresh eco tips
        $this->loadEcoTips();
        $this->showNotification('Tips refreshed!', 'success');
    }

    public function refreshData()
    {
        $this->loadData();
        $this->showNotification('Data refreshed!', 'success');
    }

    public function likeStory($storyId)
    {
        // Handle story like
        $this->showNotification('Story liked!', 'success');
    }

    public function shareStory($storyId)
    {
        // Handle story share
        $this->showNotification('Story shared!', 'success');
    }
    
    public function setFilter($filter)
    {
        $this->activeFilter = $filter;
        $this->loadData();
    }
    
    public function setTimeRange($range)
    {
        $this->timeRange = $range;
        $this->loadData();
    }

    public function render()
    {
        return view('livewire.home');
    }

    private function calculateUserStats()
{
    if (auth()->check()) {
        $user = auth()->user();

        // Gunakan null coalescing operator untuk metode yang mungkin tidak ada
        $this->userStats = [
            'total_co2_saved' => method_exists($user, 'getTotalCo2Impact') ? abs($user->getTotalCo2Impact()) : 12.5,
            'total_points' => method_exists($user, 'getTotalPoints') ? $user->getTotalPoints() : 450,
            'active_challenges' => $user->challengeParticipations()
                ->whereHas('challenge', function($query) {
                    $query->active();
                })->count(),
            'completed_challenges' => $user->challengeParticipations()
                ->whereNotNull('completed_at')->count(),
            'activities_this_week' => $user->activities()
                ->whereBetween('activity_date', [now()->startOfWeek(), now()->endOfWeek()])->count(),
            'rank' => 42, // Ini bisa dihitung dari database
            'level' => $this->calculateUserLevel(
                method_exists($user, 'getTotalPoints') ? $user->getTotalPoints() : 450
            ),
            'streak' => method_exists($user, 'getActivityStreak') ? $user->getActivityStreak() : $this->calculateStreak($user),
            'badges' => method_exists($user, 'getBadges') ? $user->getBadges() : $this->getDefaultBadges()
        ];
    } else {
        $this->userStats = [
            'total_co2_saved' => 0,
            'total_points' => 0,
            'active_challenges' => 0,
            'completed_challenges' => 0,
            'activities_this_week' => 0,
            'rank' => 0,
            'level' => ['level' => 1, 'title' => 'Eco Beginner', 'color' => '#10b981'],
            'streak' => 0,
            'badges' => []
        ];
    }
}

// Metode helper untuk menghitung streak jika metode tidak ada di model
private function calculateStreak($user)
{
    // Hitung streak berdasarkan aktivitas harian
    $streak = 0;
    $currentDate = now();
    
    // Cek 30 hari terakhir
    for ($i = 0; $i < 30; $i++) {
        $date = $currentDate->copy()->subDays($i);
        $hasActivity = $user->activities()
            ->whereDate('activity_date', $date->toDateString())
            ->exists();
            
        if ($hasActivity) {
            $streak++;
        } else if ($i > 0) {
            // Hanya break jika bukan hari ini
            break;
        }
    }
    
    return $streak;
}

// Metode helper untuk badge default
private function getDefaultBadges()
{
    return [
        ['name' => 'Eco Starter', 'icon' => '🌱', 'earned' => true],
        ['name' => 'First Week', 'icon' => '🗓️', 'earned' => true],
        ['name' => 'Tree Hugger', 'icon' => '🌳', 'earned' => false],
        ['name' => 'Water Saver', 'icon' => '💧', 'earned' => false],
    ];
}
}