<div class="bg-white/5 max-w-6xl backdrop-blur-sm overflow-hidden shadow-xl rounded-2xl border border-white/10 hover:shadow-2xl transition-all duration-500 transform ">
    <div class="p-6">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-6 gap-4">
            <div class="flex items-center">
                <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center mr-3 shadow-lg">
                    <i class="fas fa-map-marked-alt text-white"></i>
                </div>
                <div>
                    <h2 class="text-xl font-semibold text-white">Environmental Data Map</h2>
                    <p class="text-sm text-gray-400">Real-time monitoring of ecological indicators</p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <div class="flex items-center space-x-2 bg-green-900/30 px-3 py-1.5 rounded-full border border-green-800/50">
                    <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                    <span class="text-xs text-green-300 font-medium">Live Data</span>
                </div>
                <button wire:click="refreshData"
                    class="w-10 h-10 bg-white/10 hover:bg-white/20 text-white rounded-lg flex items-center justify-center transition-all duration-300 transform hover:rotate-180"
                    title="Refresh Map Data">
                    <i class="fas fa-sync-alt" wire:loading.attr="class='animate-spin'"></i>
                </button>
                <button @click="showReportModal = true"
                    class="bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white px-4 py-2.5 rounded-lg flex items-center transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <i class="fas fa-camera mr-2" aria-hidden="true"></i>
                    <span class="hidden sm:inline font-medium">Report Issue</span>
                </button>
            </div>
        </div>

        <!-- Map Container -->
        <div id="eco-map"
            x-init="initMap($el)"
            class="bg-gray-800/50 rounded-2xl relative w-full overflow-hidden shadow-inner border border-gray-700/50"
            style="height: 500px;">

            <!-- Map Controls Panel -->
            <div class="absolute top-4 right-4 z-[1000] bg-gray-900/90 backdrop-blur-md p-4 rounded-xl shadow-xl border border-gray-700/50">
                <h3 class="text-white text-sm font-semibold mb-3 flex items-center">
                    <i class="fas fa-layer-group mr-2 text-green-400"></i>
                    Map Layers
                </h3>
                <div class="space-y-3">
                    @foreach($layers as $layer)
                        <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-800/50 transition-colors">
                            <label for="{{ $layer['id'] }}" class="flex items-center cursor-pointer">
                                <input type="checkbox"
                                    id="{{ $layer['id'] }}"
                                    class="w-4 h-4 text-green-600 bg-gray-700 border-gray-600 rounded focus:ring-green-500 focus:ring-2 mr-3"
                                    wire:model="layers.{{ $loop->index }}.visible"
                                    @change="$wire.call('toggleLayer', '{{ $layer['id'] }}')">
                                <span class="w-3 h-3 rounded-full mr-2" style="background-color: {{ $layer['color'] }}"></span>
                                <span class="text-white text-sm">{{ $layer['name'] }}</span>
                            </label>
                            <div class="w-2 h-2 rounded-full" :class="layers.{{ $loop->index }}.visible ? 'bg-green-400' : 'bg-gray-600'"></div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Status Indicator -->
            <div class="absolute top-4 left-4 z-[1000] bg-gray-900/90 backdrop-blur-md px-4 py-2 rounded-full flex items-center shadow-lg border border-gray-700/50">
                <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                <span class="text-white text-sm font-medium">Live Environmental Data</span>
            </div>

            <!-- Map Legend -->
            <div class="absolute bottom-4 left-4 bg-gray-900/90 backdrop-blur-md p-4 rounded-xl text-xs text-white space-y-2 z-[1000] shadow-xl border border-gray-700/50">
                <h4 class="text-sm font-semibold mb-2 text-green-400">Environmental Indicators</h4>
                <div class="grid grid-cols-2 gap-2">
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
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-tree text-green-500"></i>
                        <span>Forest Coverage</span>
                    </div>
                </div>
            </div>

            <!-- Map Info Card -->
            <div class="absolute bottom-4 right-4 bg-gray-900/90 backdrop-blur-md p-3 rounded-xl z-[1000] shadow-xl border border-gray-700/50">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-xs text-gray-400">Coverage Area</span>
                    <span class="text-xs text-green-400 font-medium">Jakarta, Indonesia</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-400">Last Updated</span>
                    <span class="text-xs text-green-400 font-medium">Just now</span>
                </div>
            </div>
        </div>
    </div>
</div>