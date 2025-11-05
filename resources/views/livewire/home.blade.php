<div x-data="dashboardAlpine" x-init="init()" class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">
    <!-- Header Section -->
    <div class="text-center mb-10 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-green-600/20 to-blue-600/20 blur-3xl"></div>
        <div class="relative z-10">
            <h1 class="text-5xl font-extrabold text-white mb-3 tracking-tight">
                🌍 Eco-Sphere
                <span class="inline-flex items-center justify-center px-2 py-1 ml-3 text-xs font-bold leading-none text-green-100 bg-green-600 rounded-full animate-pulse">
                    LIVE
                </span>
            </h1>
            <p class="text-lg text-gray-400">The Real-Time Biodiversity Map</p>
            <p class="mt-3 text-gray-300 max-w-2xl mx-auto">
                Monitor environmental data, report issues, and take action for a sustainable future.
            </p>
        </div>
    </div>

    <!-- Main Grid Layout -->
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8 sm:gap-10">

        <!-- Left Column (Map + Stories + Activities) -->
        <div class="lg:col-span-2 space-y-6">

            <!-- Map Section -->
            <div class="bg-gray-800/50 backdrop-blur-sm overflow-hidden shadow-xl sm:rounded-lg border border-gray-700 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-3">
                        <h2 class="text-xl font-semibold text-teal-400 flex items-center">
                            <i class="fas fa-map-marked-alt mr-2"></i>
                            Environmental Data Map
                        </h2>
                        <div class="flex items-center gap-3">
                            <div class="flex items-center space-x-2 bg-gray-700/50 px-3 py-1 rounded-full">
                                <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                                <span class="text-xs text-gray-300">Live Data</span>
                            </div>
                            <button wire:click="refreshData"
                                class="text-gray-400 hover:text-white transition-colors transform hover:rotate-180 duration-500"
                                title="Refresh Map Data">
                                <i class="fas fa-sync-alt" wire:loading.attr="class='animate-spin'"></i>
                            </button>
                            <button @click="showReportModal = true"
                                class="bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white px-4 py-2 rounded-lg flex items-center transition-all duration-300 transform hover:scale-105 shadow-lg">
                                <i class="fas fa-camera mr-2" aria-hidden="true"></i>
                                Report Issue
                            </button>
                        </div>
                    </div>

                    <!-- Map Container -->
                    <div id="eco-map"
                        x-init="initMap($el)"
                        class="bg-gray-700 rounded-2xl relative w-full overflow-hidden shadow-lg"
                        style="height: 450px;">

                        <!-- Layer Controls -->
                        <div class="absolute top-4 right-4 z-[1000] bg-gray-900/90 backdrop-blur-md p-3 rounded-xl shadow-xl">
                            <h3 class="text-white text-sm font-semibold mb-2 flex items-center">
                                <i class="fas fa-layer-group mr-2"></i>
                                Map Layers
                            </h3>
                            <div class="space-y-2">
                                @foreach($layers as $layer)
                                    <div class="flex items-center gap-2 p-1 rounded hover:bg-gray-800/50 transition-colors">
                                        <input type="checkbox"
                                            id="{{ $layer['id'] }}"
                                            class="layer-checkbox w-4 h-4 text-green-600 bg-gray-700 border-gray-600 rounded focus:ring-green-500"
                                            wire:model="layers.{{ $loop->index }}.visible"
                                            @change="$wire.call('toggleLayer', '{{ $layer['id'] }}')">
                                        <label for="{{ $layer['id'] }}" class="text-white text-sm flex items-center cursor-pointer">
                                            <span class="w-3 h-3 rounded-full mr-2" style="background-color: {{ $layer['color'] }}"></span>
                                            {{ $layer['name'] }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Real-time Data Indicator -->
                        <div class="absolute top-4 left-4 z-[1000] bg-green-600/90 backdrop-blur-md px-3 py-1 rounded-full flex items-center shadow-lg">
                            <span class="w-2 h-2 bg-white rounded-full mr-2 animate-pulse"></span>
                            <span class="text-white text-xs font-medium">Live Data</span>
                        </div>

                        <!-- Map Legend -->
                        <div class="absolute bottom-4 left-4 bg-gray-900/90 backdrop-blur-md p-3 rounded-lg text-xs text-white space-y-2 z-[1000] shadow-xl">
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 bg-green-500 rounded-full"></span>
                                <span>Good Air Quality</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 bg-yellow-500 rounded-full"></span>
                                <span>Moderate Air Quality</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 bg-red-500 rounded-full"></span>
                                <span>Poor Air Quality</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 bg-orange-500 rounded-full animate-pulse"></span>
                                <span>Fire Hotspot</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 bg-blue-500 rounded-full"></span>
                                <span>Water Quality Point</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-recycle text-green-400"></i>
                                <span>Recycling Center</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-exclamation-triangle text-yellow-400"></i>
                                <span>User Report</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Impact Stories -->
            <div class="bg-gray-800/50 backdrop-blur-sm overflow-hidden shadow-xl sm:rounded-lg border border-gray-700 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-semibold text-teal-400 flex items-center">
                            <i class="fas fa-book-open mr-2"></i>
                            Impact Stories
                        </h2>
                        <button class="text-teal-400 hover:text-teal-300 text-sm flex items-center transition-colors">
                            View All <i class="fas fa-arrow-right ml-1"></i>
                        </button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @foreach($impactStories as $story)
                            <div class="rounded-lg overflow-hidden cursor-pointer group hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                                <div class="relative h-40 w-full overflow-hidden">
                                    <img src="{{ $story['image'] }}" alt="{{ $story['title'] }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                                    <div class="absolute bottom-0 left-0 p-3">
                                        @if($story['featured'] ?? false)
                                            <span class="inline-block px-2 py-1 text-xs font-semibold bg-gradient-to-r from-teal-600 to-green-600 text-white rounded-full animate-pulse">
                                                <i class="fas fa-star mr-1"></i> Featured
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="p-3 bg-gray-800">
                                    <h3 class="text-white font-semibold">{{ $story['title'] }}</h3>
                                    <p class="text-gray-300 text-sm mt-1">{{ $story['description'] }}</p>
                                    <div class="flex items-center justify-between mt-2">
                                        <span class="text-xs text-gray-400">{{ $story['reading_time'] ?? '5 min read' }}</span>
                                        <div class="flex items-center space-x-2">
                                            <button wire:click="likeStory({{ $story['id'] }})" class="text-gray-400 hover:text-red-400 transition-colors transform hover:scale-110">
                                                <i class="far fa-heart"></i>
                                            </button>
                                            <button wire:click="shareStory({{ $story['id'] }})" class="text-gray-400 hover:text-blue-400 transition-colors transform hover:scale-110">
                                                <i class="fas fa-share"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Recent Activity Log -->
            <div class="bg-gray-800/50 backdrop-blur-sm p-6 rounded-lg shadow-lg border-gray-700 hover:shadow-xl transition-all duration-500 transform hover:-translate-y-1">
                <div class="flex justify-between items-center mb-3">
                    <h3 class="text-lg font-semibold text-green-400 flex items-center">
                        <i class="fas fa-history mr-2"></i>
                        Recent Environmental Activities
                    </h3>
                    <div class="flex items-center text-xs text-gray-400">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-1 animate-pulse"></span>
                        <span>Live</span>
                    </div>
                </div>
                <ul class="space-y-3 text-sm text-gray-300">
                    @foreach($activities as $activity)
                        <li class="flex justify-between items-center hover:bg-gray-700/50 p-2 rounded transition-all duration-300 transform hover:translate-x-1">
                            <div class="flex items-center">
                                <span class="text-2xl mr-3">{{ $activity['icon'] }}</span>
                                <div>
                                    <span>{{ $activity['description'] }}</span>
                                    <div class="text-xs text-gray-500 mt-1">{{ $activity['activity_date'] }} • {{ $activity['location'] ?? 'Unknown location' }}</div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span class="{{ $activity['impact_class'] }} mr-2">{{ $activity['co2_impact'] }}</span>
                                <span class="text-xs bg-gray-700 px-2 py-1 rounded-full text-green-400">+{{ $activity['points_earned'] }} pts</span>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="flex justify-between items-center mt-4">
                    <button wire:click="showActivityForm" class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded-lg text-sm transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-plus mr-1"></i> Log Activity
                    </button>
                    <button class="text-green-400 hover:text-green-300 text-sm transition-colors">
                        View All Activities <i class="fas fa-arrow-right ml-1"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="space-y-6">
            <!-- User Stats Card -->
            @if(auth()->check())
            <div class="bg-gradient-to-br from-gray-800/50 to-gray-900/50 backdrop-blur-sm p-6 rounded-lg shadow-lg border-gray-700 hover:shadow-xl transition-all duration-500 transform hover:-translate-y-1">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-white flex items-center">
                        <i class="fas fa-user-circle mr-2"></i>
                        Your Eco Profile
                    </h3>
                    <div class="flex items-center">
                        <span class="text-xs text-gray-400 mr-2">Level {{ $userStats['level']['level'] }}</span>
                        <div class="w-8 h-8 rounded-full flex items-center justify-center" style="background-color: {{ $userStats['level']['color'] }}20">
                            <span class="text-sm font-bold" style="color: {{ $userStats['level']['color'] }}">{{ $userStats['level']['level'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="text-center mb-4">
                    <h4 class="text-white font-medium">{{ $userStats['level']['title'] }}</h4>
                    <div class="flex items-center justify-center mt-2">
                        <i class="fas fa-fire text-orange-500 mr-1"></i>
                        <span class="text-gray-300 text-sm">{{ $userStats['streak'] ?? 0 }} day streak</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 text-center">
                    <div class="bg-gray-700/30 p-3 rounded-lg">
                        <div class="text-2xl font-bold text-green-400">{{ $userStats['total_co2_saved'] }}</div>
                        <div class="text-xs text-gray-400">CO₂ Saved</div>
                    </div>
                    <div class="bg-gray-700/30 p-3 rounded-lg">
                        <div class="text-2xl font-bold text-blue-400">{{ $userStats['total_points'] }}</div>
                        <div class="text-xs text-gray-400">Points</div>
                    </div>
                    <div class="bg-gray-700/30 p-3 rounded-lg">
                        <div class="text-2xl font-bold text-purple-400">{{ $userStats['active_challenges'] }}</div>
                        <div class="text-xs text-gray-400">Active Challenges</div>
                    </div>
                    <div class="bg-gray-700/30 p-3 rounded-lg">
                        <div class="text-2xl font-bold text-yellow-400">#{{ $userStats['rank'] }}</div>
                        <div class="text-xs text-gray-400">Rank</div>
                    </div>
                </div>
            </div>
            @endif

            <!-- Regional Score -->
            <div class="bg-gray-800/50 backdrop-blur-sm p-6 rounded-lg shadow-lg border-gray-700 hover:shadow-xl transition-all duration-500 transform hover:-translate-y-1">
                <h3 class="text-lg font-semibold text-teal-400 mb-3 flex items-center">
                    <i class="fas fa-chart-line mr-2"></i>
                    Regional Sustainability Score
                </h3>
                <div class="flex items-center justify-center my-4">
                    <div class="relative">
                        <div class="text-4xl font-bold text-white">{{ $sustainabilityScore }}</div>
                        <div class="absolute -top-2 -right-2">
                            <span class="inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-green-500 rounded-full animate-pulse">
                                <i class="fas fa-arrow-up"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="text-center text-gray-300 mb-4">
                    <p class="text-sm">{{ $region }}</p>
                    <p class="text-xs text-gray-400 mt-1">Ranked #42 out of 100 cities</p>
                </div>
                <div class="space-y-3">
                    @foreach($sustainabilityMetrics as $metric)
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <span class="text-lg mr-2">{{ $metric['icon'] }}</span>
                            <span class="text-sm text-gray-400">{{ $metric['name'] }}</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-20 bg-gray-700 rounded-full h-2 mr-2">
                                <div class="h-2 rounded-full transition-all duration-500"
                                    style="width: {{ $metric['percentage'] }}%; background-color: {{ $metric['color'] }}"></div>
                            </div>
                            <span class="text-sm text-gray-300 w-8 text-right">{{ $metric['score'] }}</span>
                            <i class="fas fa-arrow-{{ $metric['trend'] === 'up' ? 'up text-green-400' : ($metric['trend'] === 'down' ? 'down text-red-400' : 'right text-gray-400') }} text-xs ml-1"></i>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Recent Reports -->
            <div class="bg-gray-800/50 backdrop-blur-sm p-6 rounded-lg shadow-lg border-gray-700 hover:shadow-xl transition-all duration-500 transform hover:-translate-y-1">
                <div class="flex justify-between items-center mb-3">
                    <h3 class="text-lg font-semibold text-teal-400 flex items-center">
                        <i class="fas fa-exclamation-circle mr-2"></i>
                        Recent Community Reports
                    </h3>
                    <div class="flex items-center text-xs text-gray-400">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-1 animate-pulse"></span>
                        <span>Live</span>
                    </div>
                </div>
                <ul class="space-y-3">
                    @foreach($recentReports as $report)
                    <li class="flex items-start hover:bg-gray-700/50 p-2 rounded transition-all duration-300 transform hover:translate-x-1 cursor-pointer">
                        <i class="{{ $report['icon_class'] }} mt-1 mr-3"></i>
                        <div class="flex-1">
                            <div class="flex items-center">
                                <p class="text-white text-sm">{{ $report['title'] }}</p>
                                @if($report['verified'] ?? false)
                                    <i class="fas fa-check-circle text-blue-400 text-xs ml-2"></i>
                                @endif
                            </div>
                            <p class="text-gray-400 text-xs">{{ $report['created_at'] }} • {{ $report['upvotes'] }} upvotes</p>
                        </div>
                        <button wire:click="upvoteReport({{ $report['id'] }})" class="text-gray-400 hover:text-yellow-400 transition-colors transform hover:scale-110">
                            <i class="fas fa-arrow-up"></i>
                        </button>
                    </li>
                    @endforeach
                </ul>
                <button class="text-teal-400 hover:text-teal-300 text-sm mt-3 transition-colors">
                    View All Reports <i class="fas fa-arrow-right ml-1"></i>
                </button>
            </div>

            <!-- Challenges -->
            <div class="bg-gray-800/50 backdrop-blur-sm p-6 rounded-lg shadow-lg border-gray-700 hover:shadow-xl transition-all duration-500 transform hover:-translate-y-1">
                <div class="flex justify-between items-center mb-3">
                    <h3 class="text-lg font-semibold text-blue-400 flex items-center">
                        <i class="fas fa-trophy mr-2"></i>
                        Active Eco-Challenges
                    </h3>
                    <div class="flex items-center text-xs text-gray-400">
                        <span class="w-2 h-2 bg-blue-500 rounded-full mr-1 animate-pulse"></span>
                        <span>Live</span>
                    </div>
                </div>
                <div class="space-y-4">
                    @foreach($challenges as $challenge)
                    <div class="border border-gray-700 rounded-lg p-3 hover:bg-gray-700/30 transition-all duration-300">
                        <div class="flex justify-between items-center mb-1">
                            <p class="text-white text-sm font-medium">{{ $challenge['title'] }}</p>
                            <span class="text-xs text-gray-400">{{ $challenge['time_left'] }}</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-2 mb-1">
                            <div class="bg-gradient-to-r from-blue-500 to-teal-500 h-2 rounded-full transition-all duration-500"
                                style="width: {{ $challenge['progress'] }}%"></div>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="text-xs text-gray-400">{{ $challenge['participants_count'] }} participants</p>
                            <div class="flex items-center">
                                <span class="text-xs text-gray-400 mr-2">{{ $challenge['points_reward'] }} pts</span>
                                <span class="text-xs px-2 py-0.5 rounded-full"
                                    :class="{
                                        'bg-green-900/30 text-green-400': '{{ $challenge['difficulty'] }}' === 'easy',
                                        'bg-yellow-900/30 text-yellow-400': '{{ $challenge['difficulty'] }}' === 'medium',
                                        'bg-red-900/30 text-red-400': '{{ $challenge['difficulty'] }}' === 'hard'
                                    }">
                                    {{ $challenge['difficulty'] }}
                                </span>
                            </div>
                        </div>
                        @if($challenge['is_joined'])
                            <div class="mt-2">
                                <div class="w-full bg-gray-700 rounded-full h-1.5">
                                    <div class="bg-green-500 h-1.5 rounded-full transition-all duration-500"
                                        style="width: {{ $challenge['user_progress'] }}%"></div>
                                </div>
                                <p class="text-xs text-gray-400 mt-1">Your progress: {{ $challenge['user_progress'] }}%</p>
                            </div>
                        @endif
                        <div class="mt-2 flex justify-end">
                            @if($challenge['is_joined'])
                                <button wire:click="viewChallengeDetails({{ $challenge['id'] }})"
                                    class="text-xs bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded transition-colors">
                                    View Details
                                </button>
                            @else
                                <button wire:click="joinChallenge({{ $challenge['id'] }})"
                                    class="text-xs bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded transition-colors">
                                    Join Challenge
                                </button>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-4 py-2 rounded-lg w-full mt-4 transition-all duration-300 transform hover:scale-105 shadow-lg">
                    View All Challenges
                </button>
            </div>

            <!-- Leaderboard -->
            <div class="bg-gray-800/50 backdrop-blur-sm p-6 rounded-lg shadow-lg border-gray-700 hover:shadow-xl transition-all duration-500 transform hover:-translate-y-1">
                <div class="flex justify-between items-center mb-3">
                    <h3 class="text-lg font-semibold text-yellow-400 flex items-center">
                        <i class="fas fa-medal mr-2"></i>
                        Eco Leaderboard
                    </h3>
                    <button class="text-yellow-400 hover:text-yellow-300 text-sm transition-colors">
                        View All
                    </button>
                </div>
                <div class="space-y-2">
                    @foreach($leaderboard as $user)
                    <div class="flex items-center justify-between p-2 rounded hover:bg-gray-700/30 transition-colors">
                        <div class="flex items-center">
                            <span class="text-lg mr-3">{{ $user['badge'] }}</span>
                            <div>
                                <p class="text-white text-sm font-medium">{{ $user['name'] }}</p>
                                <p class="text-gray-400 text-xs">{{ $user['points'] }} points</p>
                            </div>
                        </div>
                        <span class="text-gray-400 text-sm">#{{ $user['rank'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Eco Tips -->
            <div class="bg-gray-800/50 backdrop-blur-sm p-6 rounded-lg shadow-lg border-gray-700 hover:shadow-xl transition-all duration-500 transform hover:-translate-y-1">
                <div class="flex justify-between items-center mb-3">
                    <h3 class="text-lg font-semibold text-teal-400 flex items-center">
                        <i class="fas fa-lightbulb mr-2"></i>
                        Eco-Tips
                    </h3>
                    <button wire:click="refreshTips" class="text-gray-400 hover:text-white transition-colors transform hover:rotate-180 duration-500">
                        <i class="fas fa-sync-alt"></i>
                    </button>
                </div>
                <ul class="mt-4 space-y-3 text-sm text-gray-300">
                    @foreach($ecoTips as $tip)
                    <li class="flex items-start p-2 rounded hover:bg-gray-700/30 transition-all duration-300 transform hover:translate-x-1">
                        <span class="text-xl mr-3">{{ $tip['icon'] }}</span>
                        <span>{{ $tip['text'] }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!-- Report Modal -->
    <div x-show="showReportModal"
        x-cloak
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-black bg-opacity-60 z-50 flex items-center justify-center p-4"
        @click.self="showReportModal = false">
        <div class="bg-gray-800 w-full max-w-lg rounded-2xl shadow-2xl p-6 border border-gray-700 transform transition-all"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-white flex items-center">
                    <i class="fas fa-exclamation-triangle text-yellow-400 mr-2"></i>
                    Report Environmental Issue
                </h3>
                <button class="text-gray-400 hover:text-white transition-colors" @click="showReportModal = false">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <form wire:submit.prevent="submitReport" class="space-y-4">
                <div>
                    <label class="block text-gray-300 text-sm mb-2">Issue Type</label>
                    <select wire:model="reportForm.issueType" class="w-full bg-gray-700 text-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none">
                        <option>Air Pollution</option>
                        <option>Water Pollution</option>
                        <option>Illegal Dumping</option>
                        <option>Deforestation</option>
                        <option>Wildlife Concern</option>
                        <option>Other</option>
                    </select>
                    @error('reportForm.issueType') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-gray-300 text-sm mb-2">Description</label>
                    <textarea wire:model="reportForm.description" class="w-full bg-gray-700 text-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none" rows="3" placeholder="Describe the issue..."></textarea>
                    @error('reportForm.description') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-gray-300 text-sm mb-2">Location</label>
                    <div class="flex items-center gap-2">
                        <input wire:model="reportForm.location" type="text" class="flex-1 bg-gray-700 text-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none" placeholder="Current location">
                        <button type="button" class="bg-green-600 hover:bg-green-700 text-white px-3 py-2 rounded-lg transition-colors transform hover:scale-105" @click="getCurrentLocation">
                            <i class="fas fa-map-marker-alt"></i>
                        </button>
                    </div>
                    @error('reportForm.location') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white px-4 py-2 rounded-lg w-full transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <span wire:loading.remove>Submit Report</span>
                    <span wire:loading class="flex items-center justify-center">
                        <i class="fas fa-spinner fa-spin mr-2"></i> Submitting...
                    </span>
                </button>
            </form>
        </div>
    </div>

    <!-- Activity Modal -->
    <div x-show="showActivityModal"
        x-cloak
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-black bg-opacity-60 z-50 flex items-center justify-center p-4"
        @click.self="showActivityModal = false">
        <div class="bg-gray-800 w-full max-w-lg rounded-2xl shadow-2xl p-6 border border-gray-700 transform transition-all"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-white flex items-center">
                    <i class="fas fa-leaf text-green-400 mr-2"></i>
                    Log Environmental Activity
                </h3>
                <button class="text-gray-400 hover:text-white transition-colors" @click="showActivityModal = false">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <form wire:submit.prevent="submitActivity" class="space-y-4">
                <div>
                    <label class="block text-gray-300 text-sm mb-2">Activity Type</label>
                    <div class="grid grid-cols-3 gap-2">
                        <button type="button"
                            @click="activityForm.type = 'transport'"
                            :class="activityForm.type === 'transport' ? 'bg-green-600 text-white' : 'bg-gray-700 text-gray-300'"
                            class="p-2 rounded-lg text-sm transition-all">
                            🚶 Transport
                        </button>
                        <button type="button"
                            @click="activityForm.type = 'food'"
                            :class="activityForm.type === 'food' ? 'bg-green-600 text-white' : 'bg-gray-700 text-gray-300'"
                            class="p-2 rounded-lg text-sm transition-all">
                            🍛 Food
                        </button>
                        <button type="button"
                            @click="activityForm.type = 'energy'"
                            :class="activityForm.type === 'energy' ? 'bg-green-600 text-white' : 'bg-gray-700 text-gray-300'"
                            class="p-2 rounded-lg text-sm transition-all">
                            💡 Energy
                        </button>
                        <button type="button"
                            @click="activityForm.type = 'waste'"
                            :class="activityForm.type === 'waste' ? 'bg-green-600 text-white' : 'bg-gray-700 text-gray-300'"
                            class="p-2 rounded-lg text-sm transition-all">
                            ♻️ Waste
                        </button>
                        <button type="button"
                            @click="activityForm.type = 'water'"
                            :class="activityForm.type === 'water' ? 'bg-green-600 text-white' : 'bg-gray-700 text-gray-300'"
                            class="p-2 rounded-lg text-sm transition-all">
                            💧 Water
                        </button>
                        <button type="button"
                            @click="activityForm.type = 'other'"
                            :class="activityForm.type === 'other' ? 'bg-green-600 text-white' : 'bg-gray-700 text-gray-300'"
                            class="p-2 rounded-lg text-sm transition-all">
                            🌱 Other
                        </button>
                    </div>
                    @error('activityForm.type') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-gray-300 text-sm mb-2">Description</label>
                    <textarea wire:model="activityForm.description" class="w-full bg-gray-700 text-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none" rows="3" placeholder="Describe your activity..."></textarea>
                    @error('activityForm.description') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-gray-300 text-sm mb-2">CO₂ Impact (kg)</label>
                    <div class="flex items-center">
                        <input wire:model="activityForm.co2_impact" type="range" min="-10" max="10" step="0.1" class="flex-1">
                        <span class="ml-3 text-white w-12 text-right" x-text="activityForm.co2_impact"></span>
                    </div>
                    <p class="text-xs text-gray-400 mt-1">Negative values = CO₂ saved, Positive values = CO₂ emitted</p>
                </div>

                <button type="submit" class="bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white px-4 py-2 rounded-lg w-full transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <span wire:loading.remove>Log Activity</span>
                    <span wire:loading class="flex items-center justify-center">
                        <i class="fas fa-spinner fa-spin mr-2"></i> Logging...
                    </span>
                </button>
            </form>
        </div>
    </div>

    <!-- Challenge Details Modal -->
    <div x-show="showChallengeModal"
        x-cloak
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-black bg-opacity-60 z-50 flex items-center justify-center p-4"
        @click.self="showChallengeModal = false">
        <div class="bg-gray-800 w-full max-w-2xl rounded-2xl shadow-2xl p-6 border border-gray-700 transform transition-all"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-
90">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-white flex items-center">
                    <i class="fas fa-trophy text-blue-400 mr-2"></i>
                    Challenge Details
                </h3>
                <button class="text-gray-400 hover:text-white transition-colors" @click="showChallengeModal = false">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            @if($selectedChallenge)
            <div class="space-y-4">
                <div class="relative h-48 w-full overflow-hidden rounded-lg">
                    <img src="{{ $selectedChallenge["image_url"] }}" alt="{{ $selectedChallenge["title"] }}" 
                        class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-4">
                        <h4 class="text-2xl font-bold text-white">{{ $selectedChallenge["title"] }}</h4>
                        <div class="flex items-center mt-2">
                            <span class="text-xs px-2 py-1 rounded-full" 
                                :class="{
                                    "bg-green-900/30 text-green-400": "{{ $selectedChallenge["difficulty"] }}" === "easy",
                                    "bg-yellow-900/30 text-yellow-400": "{{ $selectedChallenge["difficulty"] }}" === "medium",
                                    "bg-red-900/30 text-red-400": "{{ $selectedChallenge["difficulty"] }}" === "hard"
                                }">
                                {{ $selectedChallenge["difficulty"] }}
                            </span>
                            <span class="text-xs text-gray-300 ml-2">{{ $selectedChallenge["category"] }}</span>
                        </div>
                    </div>
                </div>

                <div>
                    <p class="text-gray-300">{{ $selectedChallenge["description"] }}</p>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-gray-700/30 p-3 rounded-lg">
                        <div class="flex items-center text-gray-400 text-sm mb-1">
                            <i class="fas fa-users mr-2"></i>
                            Participants
                        </div>
                        <div class="text-xl font-semibold text-white">{{ $selectedChallenge["participants_count"] }} / {{ $selectedChallenge["target_participants"] }}</div>
                    </div>
                    <div class="bg-gray-700/30 p-3 rounded-lg">
                        <div class="flex items-center text-gray-400 text-sm mb-1">
                            <i class="fas fa-clock mr-2"></i>
                            Time Left
                        </div>
                        <div class="text-xl font-semibold text-white">{{ $selectedChallenge["time_left"] }}</div>
                    </div>
                    <div class="bg-gray-700/30 p-3 rounded-lg">
                        <div class="flex items-center text-gray-400 text-sm mb-1">
                            <i class="fas fa-coins mr-2"></i>
                            Reward
                        </div>
                        <div class="text-xl font-semibold text-white">{{ $selectedChallenge["points_reward"] }} pts</div>
                    </div>
                    <div class="bg-gray-700/30 p-3 rounded-lg">
                        <div class="flex items-center text-gray-400 text-sm mb-1">
                            <i class="fas fa-medal mr-2"></i>
                            Badge
                        </div>
                        <div class="text-xl font-semibold text-white">{{ $selectedChallenge["badge_reward"] }}</div>
                    </div>
                </div>

                @if($selectedChallenge["is_joined"])
                <div>
                    <div class="flex justify-between items-center mb-1">
                        <span class="text-sm text-gray-400">Your Progress</span>
                        <span class="text-sm text-white">{{ $selectedChallenge["user_progress"] }}%</span>
                    </div>
                    <div class="w-full bg-gray-700 rounded-full h-2">
                        <div class="bg-green-500 h-2 rounded-full transition-all duration-500" 
                            style="width: {{ $selectedChallenge["user_progress"] }}%"></div>
                    </div>
                </div>
                @endif

                <div class="flex justify-end space-x-3">
                    <button class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition-colors" @click="showChallengeModal = false">
                        Close
                    </button>
                    @if(!$selectedChallenge["is_joined"])
                    <button wire:click="joinChallenge({{ $selectedChallenge["id"] }})" 
                        class="bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white px-4 py-2 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Join Challenge
                    </button>
                    @endif
                </div>
            </div>
            @endif
        </div>
    </div>

    <!-- Notification -->
    <div x-show="showNotification"
        x-cloak
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-y-full"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform translate-y-full"
        class="fixed bottom-6 right-6 z-[1200]">
        <div class="flex items-center p-4 bg-gray-800 rounded-lg shadow-lg border-l-4 transform transition-all duration-300 hover:scale-105"
            :class="{
            "border-green-500": notificationType === "success",
            "border-yellow-500": notificationType === "warning",
            "border-red-500": notificationType === "error",
            "border-blue-500": notificationType === "info"
            }">
            <div class="flex-shrink-0">
                <i class="fas fa-check-circle text-green-400" x-show="notificationType === "success""></i>
                <i class="fas fa-exclamation-triangle text-yellow-400" x-show="notificationType === "warning""></i>
                <i class="fas fa-times-circle text-red-400" x-show="notificationType === "error""></i>
                <i class="fas fa-info-circle text-blue-400" x-show="notificationType === "info""></i>
            </div>
            <div class="ml-3">
                <p class="text-sm text-white" x-text="notificationMessage"></p>
            </div>
            <div class="ml-auto pl-3">
                <div class="-mx-1.5 -my-1.5">
                    <button type="button" @click="showNotification = false" class="inline-flex text-gray-400 hover:text-gray-300 rounded-md p-1.5 focus:outline-none">
                        <span class="sr-only">Dismiss</span>
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@push("scripts")
<script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("dashboardAlpine", () => ({
            showNotification: false,
            notificationMessage: "",
            notificationType: "success",
            showReportModal: false,
            showChallengeModal: false,
            showActivityModal: false,
            map: null,
            layerGroups: {},
            activeFilter: "all",
            activityForm: {
                type: "transport",
                description: "",
                co2_impact: 0
            },

            init() {
                // --- Integrasi event Livewire ---
                Livewire.on("report-submitted", (data) => {
                    this.showNotificationMessage(data.message, data.type);
                    this.showReportModal = false;
                });

                Livewire.on("layer-toggled", (data) => {
                    this.toggleLayerOnMap(data.layerId, data.visible, data.color);
                });

                Livewire.on("locationUpdated", (data) => {
                    this.reportForm.location = data.location;
                });

                // Inisialisasi map hanya sekali
                this.$nextTick(() => this.initMap());
            },

            initMap() {
                if (this.map) return;

                this.map = L.map("eco-map").setView([-6.2088, 106.8456], 12);

               L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
    maxZoom: 19,
}).addTo(this.map);


                this.layerGroups = {
                    "air-quality": L.layerGroup().addTo(this.map),
                    "hotspots": L.layerGroup(),
                    "water-quality": L.layerGroup(),
                    "recycling": L.layerGroup(),
                    "user-reports": L.layerGroup().addTo(this.map),
                };

                this.addMarkers();
                
                // Add animated markers
                this.animateMarkers();
            },

            addMarkers() {
                // --- Contoh icon reusable ---
                const icon = (html, size = 20) =>
                    L.divIcon({
                        html,
                        iconSize: [size, size],
                        className: "custom-div-icon",
                    });

                // Lokasi pengguna
                L.marker([-6.2088, 106.8456], {
                    icon: icon('<i class=\'fas fa-map-marker-alt\' style=\'color:#10b981;font-size:24px;\'></i>', 24),
                })
                    .addTo(this.layerGroups["user-reports"])
                    .bindPopup("Your Current Location");

                // Contoh lain: Air Quality
                const airData = [
                    { coord: [-6.1751, 106.865], color: "#10b981", label: "Good (AQI: 45)" },
                    { coord: [-6.2297, 106.8295], color: "#eab308", label: "Moderate (AQI: 85)" },
                    { coord: [-6.2607, 106.7816], color: "#ef4444", label: "Poor (AQI: 150)" },
                ];
                airData.forEach((a) =>
                    L.marker(a.coord, { icon: icon(`<i class="fas fa-circle" style="color:${a.color};font-size:16px;"></i>`, 16) })
                        .addTo(this.layerGroups["air-quality"])
                        .bindPopup(`Air Quality: ${a.label}`)
                );

                // Fire Hotspots
                const hotspotIcon = icon('<i class=\'fas fa-fire\' style=\'color:#f97316;font-size:20px;\'></i>', 20);
                L.marker([-6.3024, 106.8951], { icon: hotspotIcon }).addTo(this.layerGroups["hotspots"]).bindPopup("Fire Hotspot: Medium");
                L.marker([-6.1500, 106.7500], { icon: hotspotIcon }).addTo(this.layerGroups["hotspots"]).bindPopup("Fire Hotspot: Low");

                // Water Quality
                const waterIcon = icon('<i class=\'fas fa-tint\' style=\'color:#3b82f6;font-size:18px;\'></i>', 18);
                L.marker([-6.2382, 106.8036], { icon: waterIcon }).addTo(this.layerGroups["water-quality"]).bindPopup("Water Quality: Good");
                L.marker([-6.1944, 106.8229], { icon: waterIcon }).addTo(this.layerGroups["water-quality"]).bindPopup("Water Quality: Moderate");

                // Recycling Centers
                const recycleIcon = icon('<i class=\'fas fa-recycle\' style=\'color:#10b981;font-size:20px;\'></i>', 20);
                L.marker([-6.1244, 106.8235], { icon: recycleIcon }).addTo(this.layerGroups["recycling"]).bindPopup("Recycling Center: Plastics & Paper");
                L.marker([-6.1862, 106.8340], { icon: recycleIcon }).addTo(this.layerGroups["recycling"]).bindPopup("Recycling Center: E-Waste");

                // User Reports
                const reportIcon = icon('<i class=\'fas fa-exclamation-triangle\' style=\'color:#eab308;font-size:18px;\'></i>', 18);
                L.marker([-6.2297, 106.6826], { icon: reportIcon }).addTo(this.layerGroups["user-reports"]).bindPopup("User Report: Illegal dumping");
                L.marker([-6.1751, 106.9500], { icon: reportIcon }).addTo(this.layerGroups["user-reports"]).bindPopup("User Report: Air pollution complaint");
            },

            animateMarkers() {
                // Add pulsing animation to markers
                setTimeout(() => {
                    Object.values(this.layerGroups).forEach(layer => {
                        layer.eachLayer(marker => {
                            if (marker._icon) {
                                marker._icon.classList.add("animate-pulse");
                            }
                        });
                    });
                }, 1000);
            },

            toggleLayerOnMap(layerId, visible, color) {
                const layer = this.layerGroups[layerId];
                if (!layer) return;
                visible ? this.map.addLayer(layer) : this.map.removeLayer(layer);
                
                // Add animation when toggling
                if (visible) {
                    layer.eachLayer(marker => {
                        if (marker._icon) {
                            marker._icon.style.animation = "pulse 2s infinite";
                        }
                    });
                }
            },

            getCurrentLocation() {
                if (!navigator.geolocation) {
                    this.showNotificationMessage("Geolocation not supported", "error");
                    return;
                }

                navigator.geolocation.getCurrentPosition(
                    (pos) => {
                        const location = `${pos.coords.latitude.toFixed(6)}, ${pos.coords.longitude.toFixed(6)}`;
                        Livewire.dispatch("update-location", { location });
                        this.showNotificationMessage("Location detected successfully", "success");
                        
                        // Add marker for current location
                        const currentLocationIcon = L.divIcon({
                            html: '<i class=\'fas fa-map-marker-alt\' style=\'color:#10b981;font-size:24px;\'></i>',
                            iconSize: [24, 24],
                            className: "current-location-marker",
                        });
                        
                        L.marker([pos.coords.latitude, pos.coords.longitude], { icon: currentLocationIcon })
                            .addTo(this.layerGroups["user-reports"])
                            .bindPopup("Your Current Location")
                            .openPopup();
                            
                        // Center map on current location
                        this.map.setView([pos.coords.latitude, pos.coords.longitude], 14);
                    },
                    () => this.showNotificationMessage("Unable to detect your location", "error")
                );
            },

            showNotificationMessage(message, type = "success") {
                this.notificationMessage = message;
                this.notificationType = type;
                this.showNotification = true;
                setTimeout(() => (this.showNotification = false), 5000);
            },
            
            setFilter(filter) {
                this.activeFilter = filter;
                Livewire.dispatch("setFilter", { filter });
            },
            
            showActivityForm() {
                this.showActivityModal = true;
            }
        }));
    });
</script>

<style>
    .custom-div-icon {
        background: transparent;
        border: none;
    }
    
    .current-location-marker {
        animation: pulse 2s infinite;
    }
    
    .animate-fade-in {
        animation: fadeIn 0.8s ease-in-out;
    }
    
    .animate-slide-up {
        animation: slideUp 0.6s ease-out;
    }
    
    .animate-slide-up-delay {
        animation: slideUp 0.6s ease-out 0.2s both;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    @keyframes slideUp {
        from { 
            opacity: 0;
            transform: translateY(20px);
        }
        to { 
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
@endpush
