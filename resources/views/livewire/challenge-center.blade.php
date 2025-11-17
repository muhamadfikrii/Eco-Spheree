<div class="min-h-screen py-8 relative mt-40">

    @if (session()->has('error'))
        <div class="fixed top-6 mt-16 right-6 z-50 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 px-6 py-4 rounded-lg shadow-lg border-l-4 border-red-500 animate-slide-in">
            <div class="flex items-center space-x-3">
                <div class="bg-red-100 dark:bg-red-900 p-2 rounded-full">
                    <svg class="w-5 h-5 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <span class="font-medium">{{ session('error') }}</span>
            </div>
        </div>
    @endif

    <!-- Hero Section -->
    <div class="relative overflow-hidden">
        <!-- Hero Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="text-center">
                <div class="inline-flex items-center justify-center p-6 bg-gray-100 dark:bg-gray-800 rounded-2xl mb-8 shadow-sm">
                    <span class="text-6xl">🌱</span>
                </div>
                <h1 class="text-5xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                    Eco Challenge
                </h1>
                <p class="text-lg text-gray-100 dark:text-gray-100 max-w-3xl mx-auto leading-relaxed mb-6">
                    Complete eco-friendly missions and climb the leaderboard to become an environmental champion!
                </p>
                
                <!-- Daily Reset Info -->
                <div class="bg-blue-50 dark:bg-gray-800 border border-blue-200 dark:border-gray-700 rounded-lg p-4 mb-8 max-w-2xl mx-auto">
                    <div class="flex items-center justify-center space-x-2">
                        <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-sm text-blue-800 dark:text-blue-200 font-medium">
                            Challenges reset daily at midnight. Complete them to earn points and climb the leaderboard!
                        </span>
                    </div>
                </div>
                
                <!-- Hero CTA Buttons -->
                <div class="flex flex-wrap justify-center gap-4 mb-12">
                    <button wire:click="$set('currentPage', 'challenges')"
                            class="px-8 py-3 bg-gray-900 dark:bg-white text-white dark:text-gray-900 rounded-lg font-medium transition-all duration-200 hover:bg-gray-800 dark:hover:bg-gray-100 flex items-center space-x-2">
                        <span>🎯</span>
                        <span>Start Challenges</span>
                    </button>
                    <button wire:click="$set('currentPage', 'leaderboard')"
                            class="px-8 py-3 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white rounded-lg font-medium transition-all duration-200 hover:bg-gray-50 dark:hover:bg-gray-700 flex items-center space-x-2">
                        <span>🏅</span>
                        <span>View Leaderboard</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- User Stats Card -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-8 mb-12 border border-gray-200 dark:border-gray-700">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
                <!-- User Info -->
                <div class="flex flex-col sm:flex-row items-center sm:space-x-6 space-y-4 sm:space-y-0">
                    <div class="relative">
                        <img src="{{ $userAvatar }}" alt="Avatar" class="w-16 sm:w-20 h-16 sm:h-20 rounded-full border-2 border-gray-200 dark:border-gray-600">
                        <div class="absolute -bottom-2 -right-2 bg-gray-900 dark:bg-white text-white dark:text-gray-900 text-sm rounded-full w-6 sm:w-8 h-6 sm:h-8 flex items-center justify-center font-medium border-2 border-white dark:border-gray-800">
                            <span>{{ $userLevel[0] }}</span>
                        </div>
                    </div>
                    <div class="text-center sm:text-left">
                        <h2 class="text-xl sm:text-2xl font-semibold text-gray-900 dark:text-white mb-2">{{ $userName }}</h2>
                        <div class="flex flex-col sm:flex-row items-center sm:space-x-4 space-y-2 sm:space-y-0">
                            <span class="px-3 sm:px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-white rounded-lg text-sm font-medium">
                                {{ $userLevel }}
                            </span>
                            <span class="text-gray-500 dark:text-gray-400 font-medium">Rank #{{ $currentUserRank }}</span>
                        </div>
                    </div>
                </div>

                <!-- Stats -->
                <div class="flex flex-col sm:flex-row items-center sm:space-x-8 space-y-4 sm:space-y-0">
                    <div class="text-center">
                        <div class="text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white mb-1">{{ $totalPoints }}</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Total Points</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white mb-1">{{ $challengesCompleted }}</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Daily Missions</div>
                    </div>
                    <div>
                        <button wire:click="$toggle('showAchievementsModal')"
                                class="px-4 py-2 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 text-gray-900 dark:text-white rounded-lg font-medium transition-colors flex items-center space-x-2">
                            <span>🏆</span>
                            <span>Achievements</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Progress Section -->
            <div class="mt-8">
                <div class="flex justify-between items-center mb-3">
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Daily Progress</span>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">{{ $challengesCompleted }}/11 missions completed</span>
                </div>
                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-lg h-2">
                    <div class="bg-gray-900 dark:bg-white h-2 rounded-lg transition-all duration-500"
                         style="width: {{ $progressPercentage }}%"></div>
                </div>
            </div>
        </div>

        <!-- Navigation Tabs -->
        <div class="flex flex-col sm:flex-row sm:space-x-2 space-y-2 sm:space-y-0 mb-12 bg-white dark:bg-gray-800 p-2 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
            <button wire:click="$set('currentPage', 'challenges')"
                    class="flex-1 py-3 px-4 sm:px-6 rounded-md font-medium transition-all duration-200 {{ $currentPage === 'challenges' ? 'bg-gray-900 dark:bg-white text-white dark:text-gray-900' : 'text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white' }}">
                <div class="flex items-center justify-center space-x-2">
                    <span>🎯</span>
                    <span class="hidden sm:inline">Challenges</span>
                    <span class="sm:hidden">Challenges</span>
                </div>
            </button>
            <button wire:click="$set('currentPage', 'leaderboard')"
                    class="flex-1 py-3 px-4 sm:px-6 rounded-md font-medium transition-all duration-200 {{ $currentPage === 'leaderboard' ? 'bg-gray-900 dark:bg-white text-white dark:text-gray-900' : 'text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white' }}">
                <div class="flex items-center justify-center space-x-2">
                    <span>🏅</span>
                    <span class="sm:inline">Leaderboard</span>
                </div>
            </button>
            <button wire:click="$set('currentPage', 'review')"
                    class="flex-1 py-3 px-4 sm:px-6 rounded-md font-medium transition-all duration-200 {{ $currentPage === 'review' ? 'bg-gray-900 dark:bg-white text-white dark:text-gray-900' : 'text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white' }}">
                <div class="flex items-center justify-center space-x-2">
                    <span>🔍</span>
                    <span class="hidden sm:inline">Review ({{ count(array_filter($pendingSubmissions, fn($s) => $s['status'] === 'pending')) }})</span>
                    <span class="sm:hidden">Review</span>
                </div>
            </button>
        </div>

        <!-- Challenge Center -->
        @if($currentPage === 'challenges')
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                @foreach($missions as $mission)
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 hover:shadow-md transition-shadow duration-200">
                        @if(isset($mission['image_url']) && $mission['image_url'])
                        <div class="relative h-48 overflow-hidden">
                            <img src="{{ $mission['image_url'] }}" alt="{{ $mission['title'] }}" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute top-4 right-4">
                                <span class="px-3 py-1 bg-white/90 dark:bg-gray-800/90 text-gray-900 dark:text-gray-100 rounded text-sm font-medium">
                                    +{{ $mission['points'] }} pts
                                </span>
                            </div>
                            <div class="absolute bottom-4 left-4">
                                <div class="flex items-center space-x-1">
                                    @for($i = 1; $i <= 5; $i++)
                                        <span class="text-lg {{ $i <= $mission['difficulty'] ? 'text-yellow-500' : 'text-gray-400' }}">⭐</span>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        @endif

                        <div class="p-6">
                            <div class="mb-4">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">
                                    {{ $mission['title'] }}
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">{{ Str::limit($mission['description'], 100) }}</p>

                                @if(isset($mission['requirements']) && $mission['requirements']['photo_required'])
                                <div class="mt-3 p-3 bg-blue-50 dark:bg-gray-700 rounded-md">
                                    <div class="flex items-center gap-2 text-blue-700 dark:text-blue-300 text-sm font-medium">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <span>Photo required</span>
                                    </div>
                                </div>
                                @endif
                            </div>

                            @if($mission['status'] === 'completed')
                                <div class="bg-green-50 dark:bg-gray-700 border border-green-200 dark:border-green-800 rounded-md p-3 mb-4">
                                    <div class="flex items-center space-x-2">
                                        <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-green-800 dark:text-green-200 font-medium">Completed!</span>
                                        <span class="text-green-600 dark:text-green-400 text-sm">{{ $mission['completedDate'] }}</span>
                                    </div>
                                </div>
                            @elseif($mission['status'] === 'submitted')
                                <div class="bg-yellow-50 dark:bg-gray-700 border border-yellow-200 dark:border-yellow-800 rounded-md p-3 mb-4">
                                    <div class="flex items-center space-x-2">
                                        <svg class="w-5 h-5 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-yellow-800 dark:text-yellow-200 font-medium">Submitted - Waiting for Review</span>
                                    </div>
                                </div>
                            @elseif($mission['status'] === 'approved')
                                <div class="bg-green-50 dark:bg-gray-700 border border-green-200 dark:border-green-800 rounded-md p-3 mb-4">
                                    <div class="flex items-center space-x-2">
                                        <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-green-800 dark:text-green-200 font-medium">Mission Success!</span>
                                        <span class="text-green-600 dark:text-green-400 text-sm">{{ $mission['completedDate'] }}</span>
                                    </div>
                                </div>
                            @else
                                <div class="bg-gray-50 dark:bg-gray-700 rounded-md p-3 mb-4">
                                    <div class="flex items-center space-x-2 text-gray-600 dark:text-gray-400">
                                        <span class="text-lg">📋</span>
                                        <span class="text-sm font-medium">Complete to earn points</span>
                                    </div>
                                </div>
                            @endif

                            @if($mission['status'] === 'pending')
                            <button wire:click="openUploadModal({{ $mission['id'] }})"
                                    class="w-full py-2 px-4 bg-gray-900 dark:bg-white hover:bg-gray-800 dark:hover:bg-gray-100 text-white dark:text-gray-900 rounded-lg font-medium transition-colors">
                                Complete Mission
                            </button>
                            @elseif($mission['status'] === 'submitted')
                            <button disabled
                                    class="w-full py-2 px-4 bg-gray-400 dark:bg-gray-600 text-gray-200 dark:text-gray-400 rounded-lg font-medium cursor-not-allowed">
                                Waiting for Review
                            </button>
                            @elseif($mission['status'] === 'approved')
                            <button disabled
                                    class="w-full py-2 px-4 bg-green-600 dark:bg-green-700 text-white rounded-lg font-medium cursor-not-allowed">
                                Mission Success
                            </button>
                            @else
                            <button disabled
                                    class="w-full py-2 px-4 bg-gray-200 dark:bg-gray-700 text-gray-500 dark:text-gray-400 rounded-lg font-medium cursor-not-allowed">
                                Completed
                            </button>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <!-- Leaderboard -->
        @if($currentPage === 'leaderboard')
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                <!-- Header -->
                <div class="p-4 sm:p-6 border-b border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                        <h2 class="text-xl sm:text-2xl font-semibold text-gray-900 dark:text-white flex items-center space-x-2">
                            <span>🏅</span>
                            <span>Leaderboard</span>
                        </h2>
                        <div class="flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-3">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Filter:</span>
                            <select wire:model.live="selectedLocation" class="px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-white dark:bg-gray-700 text-gray-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-gray-500">
                                <option value="all">All Locations</option>
                                @foreach($locations as $location)
                                    <option value="{{ $location }}">{{ $location }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- List -->
                <div class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach($filteredLeaderboard as $index => $user)
                        <div class="p-6 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors {{ $user['id'] == auth()->id() ? 'bg-blue-50 dark:bg-gray-700 border-l-4 border-blue-500' : '' }}">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    <!-- Rank -->
                                    <div class="flex items-center justify-center w-12 h-12 rounded-full {{ $loop->index < 3 ? 'bg-yellow-100 text-yellow-800 font-bold' : 'bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 font-medium' }}">
                                        <span class="text-lg">{{ $index + 1 }}</span>
                                    </div>

                                    <!-- User Info -->
                                    <div class="flex items-center space-x-3">
                                        <img src="{{ $user['avatar'] }}" alt="Avatar" class="w-12 h-12 rounded-full border-2 border-gray-200 dark:border-gray-600">
                                        <div>
                                            <div class="flex items-center space-x-2">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">{{ $user['name'] }}</h3>
                                                @if($user['id'] == auth()->id())
                                                    <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs rounded-full font-medium">You</span>
                                                @endif
                                            </div>
                                            <div class="flex items-center space-x-3 text-sm text-gray-600 dark:text-gray-400">
                                                <span>{{ $user['location'] }}</span>
                                                <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 rounded text-xs font-medium">{{ $user['level'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Stats -->
                                <div class="flex flex-col sm:flex-row items-center sm:space-x-8 space-y-2 sm:space-y-0">
                                    <div class="text-center">
                                        <div class="text-lg sm:text-2xl font-bold text-gray-900 dark:text-white">{{ $user['points'] }}</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">Points</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-sm sm:text-lg font-semibold text-gray-900 dark:text-white">{{ $user['completedMissions'] }}/11</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">Missions</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Review Section -->
        @if($currentPage === 'review')
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                <div class="p-4 sm:p-6 border-b border-gray-200 dark:border-gray-700">
                    <h2 class="text-xl sm:text-2xl font-semibold text-gray-900 dark:text-white flex items-center space-x-2">
                        <span>🔍</span>
                        <span>Review Submissions</span>
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400 mt-1">Review and approve user mission submissions</p>
                </div>

                <div class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach($pendingSubmissions as $submission)
                        <div class="p-4 sm:p-6 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                            <div class="flex flex-col sm:flex-row items-start justify-between">
                                <div class="flex-1 w-full sm:w-auto">
                                    <div class="flex items-center space-x-3 mb-4">
                                        <img src="{{ $submission['user']['avatar'] ?? 'https://cdn-icons-png.flaticon.com/512/219/219983.png' }}" alt="User" class="w-10 h-10 rounded-full">
                                        <div>
                                            <h3 class="font-semibold text-gray-900 dark:text-white">{{ $submission['user']['name'] ?? 'Unknown User' }}</h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ $submission['eco_challenge']['title'] ?? 'Unknown Challenge' }}</p>
                                        </div>
                                    </div>

                                    @if(isset($submission['photo_path']) && $submission['photo_path'])
                                    <div class="mb-4">
                                        <img src="{{ asset('storage/' . $submission['photo_path']) }}" alt="Submission Photo" class="w-32 h-32 object-cover rounded-lg border border-gray-200 dark:border-gray-600">
                                    </div>
                                    @endif

                                    <p class="text-gray-700 dark:text-gray-300 mb-4">{{ $submission['description'] }}</p>

                                    <div class="flex items-center space-x-2 text-sm text-gray-500 dark:text-gray-400">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <span>{{ \Carbon\Carbon::parse($submission['submitted_at'])->diffForHumans() }}</span>
                                    </div>
                                </div>

                                <div class="mt-4 sm:mt-0 sm:ml-4 w-full sm:w-auto">
                                    @if($submission['status'] === 'pending')
                                    <span class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 text-sm rounded-full font-medium">
                                            Pending
                                        </span>
                                    @elseif($submission['status'] === 'approved')
                                    <div class="text-center sm:text-right">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-sm rounded-full font-medium">
                                            Approved
                                        </span>
                                        @if(isset($submission['rating']) && $submission['rating'])
                                        <div class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                                            ⭐ {{ $submission['rating'] }}/5
                                        </div>
                                        @endif
                                    </div>
                                    @else
                                    <div class="text-center sm:text-right">
                                        <span class="px-3 py-1 bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 text-sm rounded-full font-medium">
                                            Rejected
                                        </span>
                                        @if(isset($submission['review_notes']) && $submission['review_notes'])
                                        <div class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                                            Reason provided
                                        </div>
                                        @endif
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @if(count($pendingSubmissions) === 0)
                        <div class="p-8 sm:p-12 text-center">
                            <div class="text-4xl sm:text-6xl mb-4 opacity-50">✅</div>
                            <h3 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white mb-2">All Caught Up!</h3>
                            <p class="text-gray-600 dark:text-gray-400">No pending submissions to review.</p>
                        </div>
                    @endif
                </div>
            </div>
        @endif
    </div>

    <!-- Upload Modal -->
    @if($showUploadModal)
        <div class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg max-w-sm sm:max-w-lg w-full mx-4"
                 wire:click.stop>
                <div class="p-4 sm:p-6 border-b border-gray-200 dark:border-gray-700">
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white flex items-center space-x-2">
                            <span>📤</span>
                            <span>Submit Mission</span>
                        </h2>
                        <button wire:click="$set('showUploadModal', false)"
                                class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <form wire:submit="submitMission" class="p-4 sm:p-6 space-y-4">
                    @if(isset($missions[array_search($selectedMission, array_column($missions, 'id'))]['requirements']['photo_required']) && $missions[array_search($selectedMission, array_column($missions, 'id'))]['requirements']['photo_required'])
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Photo Proof</label>
                        <div class="border-2 border-dashed border-gray-300 dark:border-gray-600 rounded-lg p-4 text-center hover:border-gray-400 dark:hover:border-gray-500 transition-colors">
                            <input type="file" wire:model="uploadedPhotos" accept="image/*" multiple
                                   class="w-full text-gray-900 dark:text-white text-sm">
                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-2">Click to upload images</p>
                        </div>
                        @error('uploadedPhotos.*') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    @endif

                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Description</label>
                        <textarea wire:model="completionDescription" rows="4"
                                  class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-gray-500"
                                  placeholder="Describe how you completed this mission..."></textarea>
                        @error('completionDescription') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3 pt-2">
                        <button type="button" wire:click="$set('showUploadModal', false)"
                                class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg font-medium hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                            Cancel
                        </button>
                        <button type="submit"
                                class="flex-1 px-4 py-2 bg-gray-900 dark:bg-white hover:bg-gray-800 dark:hover:bg-gray-100 text-white dark:text-gray-900 rounded-lg font-medium transition-colors">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif

    <!-- Review Modal -->
    @if($showReviewModal)
        <div class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg max-w-sm sm:max-w-2xl w-full mx-4"
                 wire:click.stop>
                <div class="p-4 sm:p-6 border-b border-gray-200 dark:border-gray-700">
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white flex items-center space-x-2">
                            <span>🔍</span>
                            <span>Review Submission</span>
                        </h2>
                        <button wire:click="closeReviewModal()"
                                class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                @if($reviewSubmission)
                <div class="p-4 sm:p-6">
                    <!-- Submission Details -->
                    <div class="flex items-center space-x-3 mb-4">
                        <img src="{{ $reviewSubmission['user']['avatar'] ?? 'https://cdn-icons-png.flaticon.com/512/219/219983.png' }}" alt="User" class="w-10 h-10 rounded-full">
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">{{ $reviewSubmission['user']['name'] ?? 'Unknown User' }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ $reviewSubmission['eco_challenge']['title'] ?? 'Unknown Challenge' }}</p>
                        </div>
                    </div>

                    @if($reviewSubmission['photo_path'])
                    <div class="mb-4">
                        <img src="{{ asset('storage/' . $reviewSubmission['photo_path']) }}" alt="Submission Photo" class="w-full max-w-md mx-auto object-cover rounded-lg border border-gray-200 dark:border-gray-600">
                    </div>
                    @endif

                    <p class="text-gray-700 dark:text-gray-300 mb-4">{{ $reviewSubmission['description'] }}</p>

                    <!-- Rating -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Rating</label>
                        <div class="flex items-center space-x-2">
                            @for($i = 1; $i <= 5; $i++)
                                <button wire:click="setSubmissionRating({{ $i }})"
                                        class="text-2xl transition-colors {{ $i <= $submissionRating ? 'text-yellow-500' : 'text-gray-300 dark:text-gray-600' }}">
                                    ⭐
                                </button>
                            @endfor
                        </div>
                    </div>

                    <!-- Notes -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Review Notes</label>
                        <textarea wire:model="reviewNotes" rows="3"
                                  class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-gray-500"
                                  placeholder="Add your review notes..."></textarea>
                    </div>

                    <!-- Actions -->
                    <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3">
                        <button wire:click="closeReviewModal()"
                                class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg font-medium hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                            Cancel
                        </button>
                        <button wire:click="submitReview()"
                                class="flex-1 px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg font-medium transition-colors">
                            Approve & Award Points
                        </button>
                    </div>
                </div>
                @endif
            </div>
        </div>
    @endif

    <!-- Achievements Modal -->
    @if($showAchievementsModal)
        <div class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg max-w-sm sm:max-w-2xl w-full mx-4"
                 wire:click.stop>
                <div class="p-4 sm:p-6 border-b border-gray-200 dark:border-gray-700">
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white flex items-center space-x-2">
                            <span>🏆</span>
                            <span>Achievements</span>
                        </h2>
                        <button wire:click="$set('showAchievementsModal', false)"
                                class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="p-4 sm:p-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach($achievements as $achievement)
                            <div class="p-4 rounded-lg border {{ $achievement['unlocked'] ?? false ? 'bg-gray-50 dark:bg-gray-700 border-gray-200 dark:border-gray-600' : 'bg-gray-100 dark:bg-gray-800 border-gray-200 dark:border-gray-700 opacity-60' }}">
                                <div class="flex items-center space-x-3">
                                    <div class="text-2xl">{{ $achievement['icon'] }}</div>
                                    <div class="flex-1">
                                        <h3 class="font-medium text-gray-900 dark:text-white">{{ $achievement['title'] }}</h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ $achievement['description'] }}</p>
                                        @if($achievement['unlocked'] ?? false)
                                            <div class="mt-1 text-xs font-medium text-green-600 dark:text-green-400">✓ Unlocked</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

    <style>
    @keyframes slide-in {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .animate-slide-in {
        animation: slide-in 0.3s ease-out;
    }
</style>
</div>