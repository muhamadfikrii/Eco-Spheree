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