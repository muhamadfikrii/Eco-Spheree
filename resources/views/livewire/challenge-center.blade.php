<div class="relative mt-40 min-h-screen py-8">
    @if (session()->has('error'))
        <div
            class="animate-slide-in fixed right-6 top-6 z-50 mt-16 rounded-lg border-l-4 border-red-500 bg-white px-6 py-4 text-gray-900 shadow-lg dark:bg-gray-800 dark:text-gray-100"
        >
            <div class="flex items-center space-x-3">
                <div class="rounded-full bg-red-100 p-2 dark:bg-red-900">
                    <svg class="h-5 w-5 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <span class="font-medium">{{ session('error') }}</span>
            </div>
        </div>
    @endif

    
    <div class="relative overflow-hidden">
        
        <div class="relative z-10 mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
            <div class="text-center">
                <div
                    class="mb-8 inline-flex items-center justify-center rounded-2xl bg-gray-100 p-6 shadow-sm dark:bg-gray-800"
                >
                    <span class="text-6xl">🌱</span>
                </div>
                <h1
                    class="mb-6 text-5xl font-bold leading-tight text-gray-900 dark:text-white"
                >
                    Eco Challenge
                </h1>
                <p class="mx-auto mb-6 max-w-3xl text-lg leading-relaxed text-gray-100 dark:text-gray-100">Complete eco-friendly missions and climb the leaderboard to become an environmental champion!</p>

                
                <div
                    class="mx-auto mb-8 max-w-2xl rounded-lg border border-blue-200 bg-blue-50 p-4 dark:border-gray-700 dark:bg-gray-800"
                >
                    <div class="flex items-center justify-center space-x-2">
                        <svg class="h-5 w-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span
                            class="text-sm font-medium text-blue-800 dark:text-blue-200"
                        >
                            Challenges reset daily at midnight. Complete them to
                            earn points and climb the leaderboard!
                        </span>
                    </div>
                </div>

                
                <div class="mb-12 flex flex-wrap justify-center gap-4">
                    <button
                        wire:click="$set('currentPage', 'challenges')"
                        class="flex items-center space-x-2 rounded-lg bg-gray-900 px-8 py-3 font-medium text-white transition-all duration-200 hover:bg-gray-800 dark:bg-white dark:text-gray-900 dark:hover:bg-gray-100"
                    >
                        <span>🎯</span>
                        <span>Start Challenges</span>
                    </button>
                    <button
                        wire:click="$set('currentPage', 'leaderboard')"
                        class="flex items-center space-x-2 rounded-lg border border-gray-300 bg-white px-8 py-3 font-medium text-gray-900 transition-all duration-200 hover:bg-gray-50 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700"
                    >
                        <span>🏅</span>
                        <span>View Leaderboard</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        
        <div
            class="mb-12 rounded-lg border border-gray-200 bg-white p-8 shadow-sm dark:border-gray-700 dark:bg-gray-800"
        >
            <div
                class="flex flex-col items-center justify-between gap-8 lg:flex-row"
            >
                
                <div
                    class="flex flex-col items-center space-y-4 sm:flex-row sm:space-x-6 sm:space-y-0"
                >
                    <div class="relative">
                        <img
                            src="{{ $userAvatar }}"
                            alt="Avatar"
                            class="h-16 w-16 rounded-full border-2 border-gray-200 sm:h-20 sm:w-20 dark:border-gray-600"
                        />
                        <div
                            class="absolute -bottom-2 -right-2 flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-gray-900 text-sm font-medium text-white sm:h-8 sm:w-8 dark:border-gray-800 dark:bg-white dark:text-gray-900"
                        >
                            <span>{{ $userLevel[0] }}</span>
                        </div>
                    </div>
                    <div class="text-center sm:text-left">
                        <h2
                            class="mb-2 text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white"
                        >
                            {{ $userName }}
                        </h2>
                        <div
                            class="flex flex-col items-center space-y-2 sm:flex-row sm:space-x-4 sm:space-y-0"
                        >
                            <span
                                class="rounded-lg bg-gray-100 px-3 py-2 text-sm font-medium text-gray-900 sm:px-4 dark:bg-gray-700 dark:text-white"
                            >
                                {{ $userLevel }}
                            </span>
                            <span
                                class="font-medium text-gray-500 dark:text-gray-400"
                                >Rank #{{ $currentUserRank }}</span
                            >
                        </div>
                    </div>
                </div>

                
                <div
                    class="flex flex-col items-center space-y-4 sm:flex-row sm:space-x-8 sm:space-y-0"
                >
                    <div class="text-center">
                        <div
                            class="mb-1 text-2xl font-bold text-gray-900 sm:text-3xl dark:text-white"
                        >
                            {{ $totalPoints }}
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                            Total Points
                        </div>
                    </div>
                    <div class="text-center">
                        <div
                            class="mb-1 text-2xl font-bold text-gray-900 sm:text-3xl dark:text-white"
                        >
                            {{ $challengesCompleted }}
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                            Daily Missions
                        </div>
                    </div>
                    <div>
                        <button
                            wire:click="$toggle('showAchievementsModal')"
                            class="flex items-center space-x-2 rounded-lg bg-gray-100 px-4 py-2 font-medium text-gray-900 transition-colors hover:bg-gray-200 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600"
                        >
                            <span>🏆</span>
                            <span>Achievements</span>
                        </button>
                    </div>
                </div>
            </div>

            
            <div class="mt-8">
                <div class="mb-3 flex items-center justify-between">
                    <span
                        class="text-sm font-medium text-gray-700 dark:text-gray-300"
                        >Daily Progress</span
                    >
                    <span
                        class="text-sm font-medium text-gray-900 dark:text-white"
                        >{{ $challengesCompleted }}/11 missions completed</span
                    >
                </div>
                <div class="h-2 w-full rounded-lg bg-gray-200 dark:bg-gray-700">
                    <div
                        class="h-2 rounded-lg bg-gray-900 transition-all duration-500 dark:bg-white"
                        style="width: {{ $progressPercentage }}%"
                    ></div>
                </div>
            </div>
        </div>

        
        <div
            class="mb-12 flex flex-col space-y-2 rounded-lg border border-gray-200 bg-white p-2 shadow-sm sm:flex-row sm:space-x-2 sm:space-y-0 dark:border-gray-700 dark:bg-gray-800"
        >
            <button
                wire:click="$set('currentPage', 'challenges')"
                class="flex-1 py-3 px-4 sm:px-6 rounded-md font-medium transition-all duration-200 {{ $currentPage === 'challenges' ? 'bg-gray-900 dark:bg-white text-white dark:text-gray-900' : 'text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white' }}"
            >
                <div class="flex items-center justify-center space-x-2">
                    <span>🎯</span>
                    <span class="hidden sm:inline">Challenges</span>
                    <span class="sm:hidden">Challenges</span>
                </div>
            </button>
            <button
                wire:click="$set('currentPage', 'leaderboard')"
                class="flex-1 py-3 px-4 sm:px-6 rounded-md font-medium transition-all duration-200 {{ $currentPage === 'leaderboard' ? 'bg-gray-900 dark:bg-white text-white dark:text-gray-900' : 'text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white' }}"
            >
                <div class="flex items-center justify-center space-x-2">
                    <span>🏅</span>
                    <span class="sm:inline">Leaderboard</span>
                </div>
            </button>
            <button
                wire:click="$set('currentPage', 'review')"
                class="flex-1 py-3 px-4 sm:px-6 rounded-md font-medium transition-all duration-200 {{ $currentPage === 'review' ? 'bg-gray-900 dark:bg-white text-white dark:text-gray-900' : 'text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white' }}"
            >
                <div class="flex items-center justify-center space-x-2">
                    <span>🔍</span>
                    <span class="hidden sm:inline"
                        >Review ({{ count(array_filter($pendingSubmissions, fn($s) => $s['status'] === 'pending')) }})</span
                    >
                    <span class="sm:hidden">Review</span>
                </div>
            </button>
        </div>

        
        @if ($currentPage === 'challenges')
            <div
                class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-6 lg:grid-cols-3"
            >
                @foreach ($missions as $mission)
                    <div
                        class="rounded-lg border border-gray-200 bg-white shadow-sm transition-shadow duration-200 hover:shadow-md dark:border-gray-700 dark:bg-gray-800"
                    >
                        @if (isset($mission['image_url']) && $mission['image_url'])
                            <div class="relative h-48 overflow-hidden">
                                <img
                                    src="{{ $mission['image_url'] }}"
                                    alt="{{ $mission['title'] }}"
                                    class="h-full w-full object-cover"
                                />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"
                                ></div>
                                <div class="absolute right-4 top-4">
                                    <span
                                        class="rounded bg-white/90 px-3 py-1 text-sm font-medium text-gray-900 dark:bg-gray-800/90 dark:text-gray-100"
                                    >
                                        +{{ $mission['points'] }} pts
                                    </span>
                                </div>
                                <div class="absolute bottom-4 left-4">
                                    <div class="flex items-center space-x-1">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <span
                                                class="text-lg {{ $i <= $mission['difficulty'] ? 'text-yellow-500' : 'text-gray-400' }}"
                                                >⭐</span
                                            >
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="p-6">
                            <div class="mb-4">
                                <h3
                                    class="mb-2 text-xl font-semibold text-gray-900 dark:text-white"
                                >
                                    {{ $mission['title'] }}
                                </h3>
                                <p class="text-sm leading-relaxed text-gray-600 dark:text-gray-400">{{ Str::limit($mission['description'], 100) }}</p>

                                @if (isset($mission['requirements']) && $mission['requirements']['photo_required'])
                                    <div
                                        class="mt-3 rounded-md bg-blue-50 p-3 dark:bg-gray-700"
                                    >
                                        <div
                                            class="flex items-center gap-2 text-sm font-medium text-blue-700 dark:text-blue-300"
                                        >
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                            <span>Photo required</span>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            @if ($mission['status'] === 'completed')
                                <div
                                    class="mb-4 rounded-md border border-green-200 bg-green-50 p-3 dark:border-green-800 dark:bg-gray-700"
                                >
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-5 w-5 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span
                                            class="font-medium text-green-800 dark:text-green-200"
                                            >Completed!</span
                                        >
                                        <span
                                            class="text-sm text-green-600 dark:text-green-400"
                                            >{{ $mission['completedDate'] }}</span
                                        >
                                    </div>
                                </div>
                            @elseif ($mission['status'] === 'submitted')
                                <div
                                    class="mb-4 rounded-md border border-yellow-200 bg-yellow-50 p-3 dark:border-yellow-800 dark:bg-gray-700"
                                >
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-5 w-5 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span
                                            class="font-medium text-yellow-800 dark:text-yellow-200"
                                            >Submitted - Waiting for
                                            Review</span
                                        >
                                    </div>
                                </div>
                            @elseif ($mission['status'] === 'approved')
                                <div
                                    class="mb-4 rounded-md border border-green-200 bg-green-50 p-3 dark:border-green-800 dark:bg-gray-700"
                                >
                                    <div class="flex items-center space-x-2">
                                        <svg class="h-5 w-5 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span
                                            class="font-medium text-green-800 dark:text-green-200"
                                            >Mission Success!</span
                                        >
                                        <span
                                            class="text-sm text-green-600 dark:text-green-400"
                                            >{{ $mission['completedDate'] }}</span
                                        >
                                    </div>
                                </div>
                            @else
                                <div
                                    class="mb-4 rounded-md bg-gray-50 p-3 dark:bg-gray-700"
                                >
                                    <div
                                        class="flex items-center space-x-2 text-gray-600 dark:text-gray-400"
                                    >
                                        <span class="text-lg">📋</span>
                                        <span class="text-sm font-medium"
                                            >Complete to earn points</span
                                        >
                                    </div>
                                </div>
                            @endif

                            @if ($mission['status'] === 'pending')
                                <button
                                    wire:click="openUploadModal({{ $mission['id'] }})"
                                    class="w-full rounded-lg bg-gray-900 px-4 py-2 font-medium text-white transition-colors hover:bg-gray-800 dark:bg-white dark:text-gray-900 dark:hover:bg-gray-100"
                                >
                                    Complete Mission
                                </button>
                            @elseif ($mission['status'] === 'submitted')
                                <button
                                    disabled
                                    class="w-full cursor-not-allowed rounded-lg bg-gray-400 px-4 py-2 font-medium text-gray-200 dark:bg-gray-600 dark:text-gray-400"
                                >
                                    Waiting for Review
                                </button>
                            @elseif ($mission['status'] === 'approved')
                                <button
                                    disabled
                                    class="w-full cursor-not-allowed rounded-lg bg-green-600 px-4 py-2 font-medium text-white dark:bg-green-700"
                                >
                                    Mission Success
                                </button>
                            @else
                                <button
                                    disabled
                                    class="w-full cursor-not-allowed rounded-lg bg-gray-200 px-4 py-2 font-medium text-gray-500 dark:bg-gray-700 dark:text-gray-400"
                                >
                                    Completed
                                </button>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        
        @if ($currentPage === 'leaderboard')
            <div
                class="rounded-lg border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800"
            >
                
                <div
                    class="border-b border-gray-200 p-4 sm:p-6 dark:border-gray-700"
                >
                    <div
                        class="flex flex-col items-center justify-between gap-4 sm:flex-row"
                    >
                        <h2
                            class="flex items-center space-x-2 text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white"
                        >
                            <span>🏅</span>
                            <span>Leaderboard</span>
                        </h2>
                        <div
                            class="flex flex-col items-center space-y-2 sm:flex-row sm:space-x-3 sm:space-y-0"
                        >
                            <span
                                class="text-sm text-gray-600 dark:text-gray-400"
                                >Filter:</span
                            >
                            <select
                                wire:model.live="selectedLocation"
                                class="rounded-md border border-gray-300 bg-white px-3 py-2 text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                            >
                                <option value="all">All Locations</option>
                                @foreach ($locations as $location)
                                    <option value="{{ $location }}">
                                        {{ $location }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                
                <div class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($filteredLeaderboard as $index => $user)
                        <div
                            class="p-6 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors {{ $user['id'] == auth()->id() ? 'bg-blue-50 dark:bg-gray-700 border-l-4 border-blue-500' : '' }}"
                        >
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    
                                    <div
                                        class="flex items-center justify-center w-12 h-12 rounded-full {{ $loop->index < 3 ? 'bg-yellow-100 text-yellow-800 font-bold' : 'bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 font-medium' }}"
                                    >
                                        <span
                                            class="text-lg"
                                            >{{ $index + 1 }}</span
                                        >
                                    </div>

                                    
                                    <div class="flex items-center space-x-3">
                                        <img
                                            src="{{ $user['avatar'] }}"
                                            alt="Avatar"
                                            class="h-12 w-12 rounded-full border-2 border-gray-200 dark:border-gray-600"
                                        />
                                        <div>
                                            <div
                                                class="flex items-center space-x-2"
                                            >
                                                <h3
                                                    class="font-semibold text-gray-900 dark:text-white"
                                                >
                                                    {{ $user['name'] }}
                                                </h3>
                                                @if ($user['id'] == auth()->id())
                                                    <span
                                                        class="rounded-full bg-blue-100 px-2 py-1 text-xs font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-200"
                                                        >You</span
                                                    >
                                                @endif
                                            </div>
                                            <div
                                                class="flex items-center space-x-3 text-sm text-gray-600 dark:text-gray-400"
                                            >
                                                <span
                                                    >{{ $user['location'] }}</span
                                                >
                                                <span
                                                    class="rounded bg-gray-100 px-2 py-1 text-xs font-medium dark:bg-gray-700"
                                                    >{{ $user['level'] }}</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div
                                    class="flex flex-col items-center space-y-2 sm:flex-row sm:space-x-8 sm:space-y-0"
                                >
                                    <div class="text-center">
                                        <div
                                            class="text-lg font-bold text-gray-900 sm:text-2xl dark:text-white"
                                        >
                                            {{ $user['points'] }}
                                        </div>
                                        <div
                                            class="text-xs text-gray-500 dark:text-gray-400"
                                        >
                                            Points
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="text-sm font-semibold text-gray-900 sm:text-lg dark:text-white"
                                        >
                                            {{ $user['completedMissions'] }}/11
                                        </div>
                                        <div
                                            class="text-xs text-gray-500 dark:text-gray-400"
                                        >
                                            Missions
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        
        @if ($currentPage === 'review')
            <div
                class="rounded-lg border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800"
            >
                <div
                    class="border-b border-gray-200 p-4 sm:p-6 dark:border-gray-700"
                >
                    <h2
                        class="flex items-center space-x-2 text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white"
                    >
                        <span>🔍</span>
                        <span>Review Submissions</span>
                    </h2>
                    <p class="mt-1 text-gray-600 dark:text-gray-400">Review and approve user mission submissions</p>
                </div>

                <div class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($pendingSubmissions as $submission)
                        <div
                            class="p-4 transition-colors hover:bg-gray-50 sm:p-6 dark:hover:bg-gray-700"
                        >
                            <div
                                class="flex flex-col items-start justify-between sm:flex-row"
                            >
                                <div class="w-full flex-1 sm:w-auto">
                                    <div
                                        class="mb-4 flex items-center space-x-3"
                                    >
                                        <img
                                            src="{{ $submission['user']['avatar'] ?? 'https://cdn-icons-png.flaticon.com/512/219/219983.png' }}"
                                            alt="User"
                                            class="h-10 w-10 rounded-full"
                                        />
                                        <div>
                                            <h3
                                                class="font-semibold text-gray-900 dark:text-white"
                                            >
                                                {{ $submission['user']['name'] ?? 'Unknown User' }}
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ $submission['eco_challenge']['title'] ?? 'Unknown Challenge' }}</p>
                                        </div>
                                    </div>

                                    @if (isset($submission['photo_path']) && $submission['photo_path'])
                                        <div class="mb-4">
                                            <img
                                                src="{{ asset('storage/' . $submission['photo_path']) }}"
                                                alt="Submission Photo"
                                                class="h-32 w-32 rounded-lg border border-gray-200 object-cover dark:border-gray-600"
                                            />
                                        </div>
                                    @endif

                                    <p class="mb-4 text-gray-700 dark:text-gray-300">{{ $submission['description'] }}</p>

                                    <div
                                        class="flex items-center space-x-2 text-sm text-gray-500 dark:text-gray-400"
                                    >
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <span
                                            >{{ \Carbon\Carbon::parse($submission['submitted_at'])->diffForHumans() }}</span
                                        >
                                    </div>
                                </div>

                                <div
                                    class="mt-4 w-full sm:ml-4 sm:mt-0 sm:w-auto"
                                >
                                    @if ($submission['status'] === 'pending')
                                        <span
                                            class="rounded-full bg-yellow-100 px-3 py-1 text-sm font-medium text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200"
                                        >
                                            Pending
                                        </span>
                                    @elseif ($submission['status'] === 'approved')
                                        <div class="text-center sm:text-right">
                                            <span
                                                class="rounded-full bg-green-100 px-3 py-1 text-sm font-medium text-green-800 dark:bg-green-900 dark:text-green-200"
                                            >
                                                Approved
                                            </span>
                                            @if (isset($submission['rating']) && $submission['rating'])
                                                <div
                                                    class="mt-1 text-sm text-gray-600 dark:text-gray-400"
                                                >
                                                    ⭐ {{ $submission['rating'] }}/5
                                                </div>
                                            @endif
                                        </div>
                                    @else
                                        <div class="text-center sm:text-right">
                                            <span
                                                class="rounded-full bg-red-100 px-3 py-1 text-sm font-medium text-red-800 dark:bg-red-900 dark:text-red-200"
                                            >
                                                Rejected
                                            </span>
                                            @if (isset($submission['review_notes']) && $submission['review_notes'])
                                                <div
                                                    class="mt-1 text-sm text-gray-600 dark:text-gray-400"
                                                >
                                                    Reason provided
                                                </div>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @if (count($pendingSubmissions) === 0)
                        <div class="p-8 text-center sm:p-12">
                            <div class="mb-4 text-4xl opacity-50 sm:text-6xl">
                                ✅
                            </div>
                            <h3
                                class="mb-2 text-lg font-semibold text-gray-900 sm:text-xl dark:text-white"
                            >
                                All Caught Up!
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400">No pending submissions to review.</p>
                        </div>
                    @endif
                </div>
            </div>
        @endif
    </div>

    
    @if ($showUploadModal)
        <div
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4"
        >
            <div
                class="mx-4 w-full max-w-sm rounded-lg bg-white shadow-lg sm:max-w-lg dark:bg-gray-800"
                wire:click.stop
            >
                <div
                    class="border-b border-gray-200 p-4 sm:p-6 dark:border-gray-700"
                >
                    <div class="flex items-center justify-between">
                        <h2
                            class="flex items-center space-x-2 text-lg font-semibold text-gray-900 sm:text-xl dark:text-white"
                        >
                            <span>📤</span>
                            <span>Submit Mission</span>
                        </h2>
                        <button
                            wire:click="$set('showUploadModal', false)"
                            class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300"
                        >
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <form wire:submit="submitMission" class="space-y-4 p-4 sm:p-6">
                    @if (isset($missions[array_search($selectedMission, array_column($missions, 'id'))]['requirements']['photo_required']) && $missions[array_search($selectedMission, array_column($missions, 'id'))]['requirements']['photo_required'])
                        <div>
                            <label
                                class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300"
                                >Photo Proof</label
                            >
                            <div
                                class="rounded-lg border-2 border-dashed border-gray-300 p-4 text-center transition-colors hover:border-gray-400 dark:border-gray-600 dark:hover:border-gray-500"
                            >
                                <input
                                    type="file"
                                    wire:model="uploadedPhotos"
                                    accept="image/*"
                                    multiple
                                    class="w-full text-sm text-gray-900 dark:text-white"
                                />
                                <p class="mt-2 text-xs text-gray-500 dark:text-gray-400">Click to upload images</p>
                            </div>
                            @error ('uploadedPhotos.*')
                                <span
                                    class="text-sm text-red-500"
                                    >{{ $message }}</span
                                >
                            @enderror
                        </div>
                    @endif

                    <div>
                        <label
                            class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300"
                            >Description</label
                        >
                        <textarea
                            wire:model="completionDescription"
                            rows="4"
                            class="w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                            placeholder="Describe how you completed this mission..."
                        ></textarea>
                        @error ('completionDescription')
                            <span
                                class="text-sm text-red-500"
                                >{{ $message }}</span
                            >
                        @enderror
                    </div>

                    <div
                        class="flex flex-col space-y-2 pt-2 sm:flex-row sm:space-x-3 sm:space-y-0"
                    >
                        <button
                            type="submit"
                            class="flex-1 rounded-lg bg-gray-900 px-4 py-2 font-medium text-white transition-colors hover:bg-gray-800 dark:bg-white dark:text-gray-900 dark:hover:bg-gray-100"
                        >
                            Submit
                        </button>
                        <button
                            type="button"
                            wire:click="$set('showUploadModal', false)"
                            class="flex-1 rounded-lg border border-gray-300 px-4 py-2 font-medium text-gray-700 transition-colors hover:bg-gray-50 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-700"
                        >
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif

    
    @if ($showReviewModal)
        <div
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4"
        >
            <div
                class="mx-4 w-full max-w-sm rounded-lg bg-white shadow-lg sm:max-w-2xl dark:bg-gray-800"
                wire:click.stop
            >
                <div
                    class="border-b border-gray-200 p-4 sm:p-6 dark:border-gray-700"
                >
                    <div class="flex items-center justify-between">
                        <h2
                            class="flex items-center space-x-2 text-lg font-semibold text-gray-900 sm:text-xl dark:text-white"
                        >
                            <span>🔍</span>
                            <span>Review Submission</span>
                        </h2>
                        <button
                            wire:click="closeReviewModal()"
                            class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300"
                        >
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                @if ($reviewSubmission)
                    <div class="p-4 sm:p-6">
                        
                        <div class="mb-4 flex items-center space-x-3">
                            <img
                                src="{{ $reviewSubmission['user']['avatar'] ?? 'https://cdn-icons-png.flaticon.com/512/219/219983.png' }}"
                                alt="User"
                                class="h-10 w-10 rounded-full"
                            />
                            <div>
                                <h3
                                    class="font-semibold text-gray-900 dark:text-white"
                                >
                                    {{ $reviewSubmission['user']['name'] ?? 'Unknown User' }}
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400">{{ $reviewSubmission['eco_challenge']['title'] ?? 'Unknown Challenge' }}</p>
                            </div>
                        </div>

                        @if ($reviewSubmission['photo_path'])
                            <div class="mb-4">
                                <img
                                    src="{{ asset('storage/' . $reviewSubmission['photo_path']) }}"
                                    alt="Submission Photo"
                                    class="mx-auto w-full max-w-md rounded-lg border border-gray-200 object-cover dark:border-gray-600"
                                />
                            </div>
                        @endif

                        <p class="mb-4 text-gray-700 dark:text-gray-300">{{ $reviewSubmission['description'] }}</p>

                        
                        <div class="mb-4">
                            <label
                                class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300"
                                >Rating</label
                            >
                            <div class="flex items-center space-x-2">
                                @for ($i = 1; $i <= 5; $i++)
                                    <button
                                        wire:click="setSubmissionRating({{ $i }})"
                                        class="text-2xl transition-colors {{ $i <= $submissionRating ? 'text-yellow-500' : 'text-gray-300 dark:text-gray-600' }}"
                                    >
                                        ⭐
                                    </button>
                                @endfor
                            </div>
                        </div>

                        
                        <div class="mb-4">
                            <label
                                class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300"
                                >Review Notes</label
                            >
                            <textarea
                                wire:model="reviewNotes"
                                rows="3"
                                class="w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                                placeholder="Add your review notes..."
                            ></textarea>
                        </div>

                        
                        <div
                            class="flex flex-col space-y-2 sm:flex-row sm:space-x-3 sm:space-y-0"
                        >
                            <button
                                wire:click="closeReviewModal()"
                                class="flex-1 rounded-lg border border-gray-300 px-4 py-2 font-medium text-gray-700 transition-colors hover:bg-gray-50 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-700"
                            >
                                Cancel
                            </button>
                            <button
                                wire:click="submitReview()"
                                class="flex-1 rounded-lg bg-green-600 px-4 py-2 font-medium text-white transition-colors hover:bg-green-700"
                            >
                                Approve & Award Points
                            </button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @endif

    
    @if ($showAchievementsModal)
        <div
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4"
        >
            <div
                class="mx-4 w-full max-w-sm rounded-lg bg-white shadow-lg sm:max-w-2xl dark:bg-gray-800"
                wire:click.stop
            >
                <div
                    class="border-b border-gray-200 p-4 sm:p-6 dark:border-gray-700"
                >
                    <div class="flex items-center justify-between">
                        <h2
                            class="flex items-center space-x-2 text-lg font-semibold text-gray-900 sm:text-xl dark:text-white"
                        >
                            <span>🏆</span>
                            <span>Achievements</span>
                        </h2>
                        <button
                            wire:click="$set('showAchievementsModal', false)"
                            class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300"
                        >
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="p-4 sm:p-6">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        @foreach ($achievements as $achievement)
                            <div
                                class="p-4 rounded-lg border {{ $achievement['unlocked'] ?? false ? 'bg-gray-50 dark:bg-gray-700 border-gray-200 dark:border-gray-600' : 'bg-gray-100 dark:bg-gray-800 border-gray-200 dark:border-gray-700 opacity-60' }}"
                            >
                                <div class="flex items-center space-x-3">
                                    <div class="text-2xl">
                                        {{ $achievement['icon'] }}
                                    </div>
                                    <div class="flex-1">
                                        <h3
                                            class="font-medium text-gray-900 dark:text-white"
                                        >
                                            {{ $achievement['title'] }}
                                        </h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ $achievement['description'] }}</p>
                                        @if ($achievement['unlocked'] ?? false)
                                            <div
                                                class="mt-1 text-xs font-medium text-green-600 dark:text-green-400"
                                            >
                                                ✓ Unlocked
                                            </div>
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
