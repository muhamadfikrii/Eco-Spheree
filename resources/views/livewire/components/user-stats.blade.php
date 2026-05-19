
@if (auth()->check())
    <div
        class="transform rounded-lg border-gray-700 bg-gradient-to-br from-gray-800/50 to-gray-900/50 p-4 shadow-lg backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:shadow-xl sm:p-6"
    >
        <div class="mb-4 flex items-center justify-between">
            <h3 class="flex items-center text-lg font-semibold text-white">
                <i class="fas fa-user-circle mr-2"></i>
                Your Eco Profile
            </h3>
            <div class="flex items-center">
                <span class="mr-2 text-xs text-gray-400"
                    >Level {{ $userStats['level']['level'] }}</span
                >
                <div
                    class="flex h-8 w-8 items-center justify-center rounded-full"
                    style="background-color: {{ $userStats['level']['color'] }}20"
                >
                    <span
                        class="text-sm font-bold"
                        style="color: {{ $userStats['level']['color'] }}"
                        >{{ $userStats['level']['level'] }}</span
                    >
                </div>
            </div>
        </div>
        <div class="mb-4 text-center">
            <h4 class="font-medium text-white">
                {{ $userStats['level']['title'] }}
            </h4>
            <div class="mt-2 flex items-center justify-center">
                <i class="fas fa-fire mr-1 text-orange-500"></i>
                <span class="text-sm text-gray-300"
                    >{{ $userStats['streak'] ?? 0 }} day streak</span
                >
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4 text-center">
            <div class="rounded-lg bg-gray-700/30 p-3">
                <div class="text-2xl font-bold text-green-400">
                    {{ $userStats['total_co2_saved'] }}
                </div>
                <div class="text-xs text-gray-400">CO₂ Saved</div>
            </div>
            <div class="rounded-lg bg-gray-700/30 p-3">
                <div class="text-2xl font-bold text-blue-400">
                    {{ $userStats['total_points'] }}
                </div>
                <div class="text-xs text-gray-400">Points</div>
            </div>
            <div class="rounded-lg bg-gray-700/30 p-3">
                <div class="text-2xl font-bold text-purple-400">
                    {{ $userStats['active_challenges'] }}
                </div>
                <div class="text-xs text-gray-400">Active Challenges</div>
            </div>
            <div class="rounded-lg bg-gray-700/30 p-3">
                <div class="text-2xl font-bold text-yellow-400">
                    #{{ $userStats['rank'] }}
                </div>
                <div class="text-xs text-gray-400">Rank</div>
            </div>
        </div>
    </div>
@endif
