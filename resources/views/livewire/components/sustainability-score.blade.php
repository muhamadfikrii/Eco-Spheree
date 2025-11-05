<!-- Regional Score -->
<div class="bg-gray-800/50 backdrop-blur-sm p-4 sm:p-6 rounded-lg shadow-lg border-gray-700 hover:shadow-xl transition-all duration-500 transform hover:-translate-y-1">
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
