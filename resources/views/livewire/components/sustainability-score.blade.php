
<div
    class="transform rounded-lg border-gray-700 bg-gray-800/50 p-4 shadow-lg backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:shadow-xl sm:p-6"
>
    <h3 class="mb-3 flex items-center text-lg font-semibold text-teal-400">
        <i class="fas fa-chart-line mr-2"></i>
        Regional Sustainability Score
    </h3>
    <div class="my-4 flex items-center justify-center">
        <div class="relative">
            <div class="text-4xl font-bold text-white">
                {{ $sustainabilityScore }}
            </div>
            <div class="absolute -right-2 -top-2">
                <span
                    class="inline-flex h-6 w-6 animate-pulse items-center justify-center rounded-full bg-green-500 text-xs font-bold text-white"
                >
                    <i class="fas fa-arrow-up"></i>
                </span>
            </div>
        </div>
    </div>
    <div class="mb-4 text-center text-gray-300">
        <p class="text-sm">{{ $region }}</p>
        <p class="mt-1 text-xs text-gray-400">Ranked #42 out of 100 cities</p>
    </div>
    <div class="space-y-3">
        @foreach ($sustainabilityMetrics as $metric)
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <span class="mr-2 text-lg">{{ $metric['icon'] }}</span>
                    <span
                        class="text-sm text-gray-400"
                        >{{ $metric['name'] }}</span
                    >
                </div>
                <div class="flex items-center">
                    <div class="mr-2 h-2 w-20 rounded-full bg-gray-700">
                        <div
                            class="h-2 rounded-full transition-all duration-500"
                            style="width: {{ $metric['percentage'] }}%; background-color: {{ $metric['color'] }}"
                        ></div>
                    </div>
                    <span
                        class="w-8 text-right text-sm text-gray-300"
                        >{{ $metric['score'] }}</span
                    >
                    <i
                        class="fas fa-arrow-{{ $metric['trend'] === 'up' ? 'up text-green-400' : ($metric['trend'] === 'down' ? 'down text-red-400' : 'right text-gray-400') }} text-xs ml-1"
                    ></i>
                </div>
            </div>
        @endforeach
    </div>
</div>
