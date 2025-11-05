<!-- Leaderboard -->
<div class="bg-gray-800/50 backdrop-blur-sm p-4 sm:p-6 rounded-lg shadow-lg border-gray-700 hover:shadow-xl transition-all duration-500 transform hover:-translate-y-1">
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
