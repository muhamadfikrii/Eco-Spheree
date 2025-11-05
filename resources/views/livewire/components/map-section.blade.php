<!-- Map Section -->
<div class="bg-gray-800/50 backdrop-blur-sm overflow-hidden shadow-xl rounded-xl border border-gray-700 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1">
    <div class="p-4 sm:p-6">
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
                    class="bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white px-3 sm:px-4 py-2 rounded-lg flex items-center transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <i class="fas fa-camera mr-2" aria-hidden="true"></i>
                    <span class="hidden sm:inline">Report Issue</span>
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
