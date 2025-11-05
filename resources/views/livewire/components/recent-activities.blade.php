<!-- Recent Activity Log -->
<div class="bg-gray-800/50 backdrop-blur-sm p-4 sm:p-6 rounded-lg shadow-lg border-gray-700 hover:shadow-xl transition-all duration-500 transform hover:-translate-y-1">
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
