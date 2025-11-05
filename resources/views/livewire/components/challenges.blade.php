<!-- Challenges -->
<div class="bg-gray-800/50 backdrop-blur-sm p-4 sm:p-6 rounded-lg shadow-lg border-gray-700 hover:shadow-xl transition-all duration-500 transform hover:-translate-y-1">
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
