<!-- User Stats Card -->
@if(auth()->check())
<div class="bg-gradient-to-br from-gray-800/50 to-gray-900/50 backdrop-blur-sm p-4 sm:p-6 rounded-lg shadow-lg border-gray-700 hover:shadow-xl transition-all duration-500 transform hover:-translate-y-1">
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
