<div>
    <section id="environmental-data" class="min-h-screen bg-grid-pattern py-4 sm:py-8 lg:py-12 relative overflow-hidden" x-data="modernEcosphere()">
        <!-- Enhanced Animated Background -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-emerald-900/10 to-slate-900"></div>
            <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
            <div class="absolute inset-0" id="particleCanvas"></div>
            <div class="absolute inset-0" id="floatingParticles"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 relative z-10">
            
            <!-- Premium Header dengan Enhanced Animasi -->
            <div class="text-center mb-8 sm:mb-12 lg:mb-16 animate-fade-in">
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold text-slate-100 mb-4 sm:mb-6 leading-tight">
                    <span class="text-transparent bg-clip-text bg-emerald-400">EcoSpheree</span> 
                    <span class="block text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl text-slate-400 mt-2 sm:mt-4 animate-slide-up font-light">Indonesian Ecosystem Digital Platform</span>
                </h1>
                <p class="text-base sm:text-lg lg:text-xl text-slate-400 max-w-4xl mx-auto leading-relaxed animate-slide-up-delay px-4">
                    An advanced monitoring system that tracks Indonesia's biodiversity hotspots with real-time analysis, predictive modelling and conservation insights. 
                </p>
            </div>
            
            <!-- Advanced Control Panel -->
            <div class="bg-slate-800/60 backdrop-blur-md rounded-3xl shadow-2xl p-4 sm:p-6 mb-6 sm:mb-8 mx-auto border border-emerald-700/30 animate-scale-in">
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <div class="flex items-center gap-4 sm:gap-6">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-br from-emerald-500 to-cyan-500 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl sm:text-2xl font-bold text-slate-100" x-text="`${connectedNodes} Systems`"></h3>
                                <p class="text-xs sm:text-sm text-slate-400">Active Monitoring</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-green-600 rounded-xl flex items-center justify-center shadow-lg">
                                <i class="fa-solid fa-users-between-lines w-5 h-5 md:w-6 md:h-6 text-center p-[2px]"></i>
                            </div>
                            <div>
                                <h3 class="text-xl sm:text-2xl font-bold text-slate-100" x-text="`${totalArea}M ha`"></h3>
                                <p class="text-xs sm:text-sm text-slate-400">Total Coverage</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-2 sm:gap-3">
                        <!-- Enhanced 3D/2D Toggle Button -->
                        <button @click="toggleViewMode"
                                class="px-3 sm:px-4 py-2 bg-slate-700/50 hover:bg-slate-700 text-white rounded-xl transition-all duration-200 flex items-center gap-2 border border-slate-600/50 text-xs sm:text-sm relative overflow-hidden group"
                                :class="viewMode === '3d'
                                ? 'bg-gradient-to-r from-purple-400/20 to-blue-400/20 text-slate-100'
                                : 'bg-gradient-to-r from-slate-300 to-slate-400 border-slate-200/50 text-slate-700'">
                            
                            <!-- Animated Background Effect -->
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                :class="viewMode === '3d' ? 'bg-gradient-to-r from-purple-400/20 to-blue-400/20' : 'bg-gradient-to-r from-gray-400/20 to-slate-400/20'"></div>
                            
                            <div class="relative flex items-center gap-2">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7z" />
                                </svg>
                                <span class="font-medium">
                                    <span x-show="viewMode === '3d'" x-transition>3D View</span>
                                    <span x-show="viewMode === '2d'" x-transition>2D View</span>
                                </span>
                            </div>
                            
                            <div class="absolute -top-1 -right-1">
                                <div x-show="viewMode === '3d'" x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 scale-0"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    class="w-2 h-2 sm:w-3 sm:h-3 bg-purple-400 rounded-full animate-pulse"></div>
                                <div x-show="viewMode === '2d'" x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 scale-0"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    class="w-2 h-2 sm:w-3 sm:h-3 bg-gray-400 rounded-full animate-pulse"></div>
                            </div>
                        </button>
                        
                        <button @click="toggleAutoRotate" 
                                class="px-3 sm:px-4 py-2 bg-slate-700/50 hover:bg-slate-700 text-white rounded-xl transition-all duration-200 flex items-center gap-2 border border-slate-600/50 text-xs sm:text-sm"
                                :class="autoRotate ? 'bg-emerald-600/50 border-emerald-500/50' : ''">
                            <svg x-show="!autoRotate" class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                            <i x-show="autoRotate" class="fa-sharp fa-solid fa-stop"></i>
                            <span x-text="autoRotate ? 'Stop' : 'Auto Rotate'"></span>
                        </button>
                        <button @click="refreshNetwork" 
                                :disabled="refreshing"
                                class="px-4 sm:px-6 py-2 bg-emerald-600 hover:from-emerald-500 hover:to-cyan-500 text-white rounded-xl transition-all duration-200 flex items-center gap-2 shadow-lg hover:shadow-emerald-500/25 transform hover:scale-105 text-xs sm:text-sm">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                            <span x-text="refreshing ? 'Syncing...' : 'Refresh'"></span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Advanced Ecosystem Network -->
            <div class="bg-slate-800/60 backdrop-blur-md rounded-3xl shadow-2xl p-4 sm:p-8 mb-8 sm:mb-16 mx-auto border border-emerald-700/30 animate-scale-in">
                <div class="relative h-[500px] sm:h-[600px] lg:h-[700px] xl:h-[800px] bg-slate-900/50 rounded-2xl overflow-auto md:overflow-hidden">
                    
                    <!-- Enhanced Background Effects -->
                    <div class="absolute inset-0 opacity-20">
                        <div class="absolute w-2 h-2 bg-emerald-400 rounded-full animate-float" style="top: 20%; left: 15%; animation-delay: 0s;"></div>
                        <div class="absolute w-1 h-1 bg-cyan-400 rounded-full animate-float" style="top: 60%; left: 80%; animation-delay: 1s;"></div>
                        <div class="absolute w-1 h-1 bg-blue-400 rounded-full animate-float" style="top: 80%; left: 30%; animation-delay: 2s;"></div>
                        <div class="absolute w-2 h-2 bg-green-400 rounded-full animate-float" style="top: 40%; left: 70%; animation-delay: 3s;"></div>
                        <div class="absolute w-1 h-1 bg-purple-400 rounded-full animate-float" style="top: 10%; left: 90%; animation-delay: 4s;"></div>
                        <div class="absolute w-3 h-3 bg-amber-400 rounded-full animate-float" style="top: 90%; left: 10%; animation-delay: 5s;"></div>
                    </div>

                    <!-- Advanced Orbital System -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div id="orbitContainer" class="relative" :class="viewMode === '3d' ? 'transform-gpu perspective-1000' : ''" :style="`width: ${getOrbitContainerWidth()}px; height: ${getOrbitContainerHeight()}px;`">
                            
                            <!-- Enhanced Orbital Rings with 3D Effects -->
                            <svg class="absolute inset-0 w-full h-full pointer-events-none" style="z-index: 1;">
                                <circle cx="50%" cy="50%" :r="getOrbitRadius(1)" fill="none" stroke="url(#gradient1)" stroke-width="2" opacity="0.4" stroke-dasharray="10,5" 
                                        :class="viewMode === '3d' ? 'orbit-ring-3d-1' : 'orbit-path-1'"/>
                                <circle cx="50%" cy="50%" :r="getOrbitRadius(2)" fill="none" stroke="url(#gradient2)" stroke-width="1.5" opacity="0.3" stroke-dasharray="15,8" 
                                        :class="viewMode === '3d' ? 'orbit-ring-3d-2' : 'orbit-path-2'"/>
                                <circle cx="50%" cy="50%" :r="getOrbitRadius(3)" fill="none" stroke="url(#gradient3)" stroke-width="1" opacity="0.2" stroke-dasharray="20,10" 
                                        :class="viewMode === '3d' ? 'orbit-ring-3d-3' : 'orbit-path-3'"/>
                                

                                
                                <defs>
                                    <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" style="stop-color:#10b981;stop-opacity:0.8" />
                                        <stop offset="100%" style="stop-color:#06b6d4;stop-opacity:0.4" />
                                    </linearGradient>
                                    <linearGradient id="gradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" style="stop-color:#06b6d4;stop-opacity:0.6" />
                                        <stop offset="100%" style="stop-color:#3b82f6;stop-opacity:0.3" />
                                    </linearGradient>
                                    <linearGradient id="gradient3" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:0.5" />
                                        <stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:0.2" />
                                    </linearGradient>
                                    <linearGradient id="trusted " x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" style="stop-color:#10b981;stop-opacity:0.8" />
                                        <stop offset="100%" style="stop-color:#06b6d4;stop-opacity:0.4" />
                                    </linearGradient>
                                    <linearGradient id="gradient-warning" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" style="stop-color:#f59e0b;stop-opacity:0.8" />
                                        <stop offset="100%" style="stop-color:#ef4444;stop-opacity:0.4" />
                                    </linearGradient>
                                </defs>
                            </svg>

                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <div class="relative group">
                                    <!-- Main Earth Container with 3D Effects -->
                                    <div class="w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40 lg:w-48 lg:h-48 xl:w-52 xl:h-52 bg-gradient-to-br from-emerald-600 via-cyan-600 to-blue-600 rounded-full flex items-center justify-center shadow-2xl shadow-emerald-500/40 relative overflow-hidden earth-container z-10"
                                        :class="viewMode === '3d' ? 'earth-3d transform-gpu' : ''">
                                        <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-green-900 to-emerald-900 rounded-full earth-texture"></div>
                                        <div class="absolute inset-0 bg-gradient-to-tl from-transparent via-emerald-800/20 to-transparent rounded-full"></div>
                                        
                                        <!-- Indonesia Map Overlay -->
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="text-white/30 text-5xl sm:text-6xl md:text-7xl lg:text-8xl xl:text-9xl font-bold tracking-wider">ID</div>
                                        </div>
                                        
                                        <div class="absolute inset-0 opacity-40">
                                            <div class="absolute w-8 h-4 sm:w-10 sm:h-5 md:w-12 md:h-6 bg-white/50 rounded-full blur-sm cloud-1" style="top: 30%; left: 20%;"></div>
                                            <div class="absolute w-6 h-3 sm:w-8 sm:h-4 md:w-10 md:h-5 bg-white/40 rounded-full blur-sm cloud-2" style="top: 50%; left: 60%;"></div>
                                            <div class="absolute w-10 h-5 sm:w-12 sm:h-6 md:w-14 md:h-7 bg-white/60 rounded-full blur-sm cloud-3" style="top: 70%; left: 40%;"></div>
                                            <div class="absolute w-6 h-3 sm:w-8 sm:h-4 md:w-10 md:h-5 bg-white/30 rounded-full blur-sm cloud-4" style="top: 20%; left: 70%;"></div>
                                        </div>

                                        <div class="absolute inset-0 bg-gradient-to-tr from-transparent via-white/15 to-transparent rounded-full earth-shine"></div>
                                        
                                        <!-- Atmosphere Glow with 3D Effects -->
                                        <div class="absolute -inset-3 sm:-inset-4 bg-gradient-to-r from-emerald-400/30 to-cyan-400/30 rounded-full blur-xl sm:blur-2xl animate-pulse"
                                            :class="viewMode === '3d' ? 'atmosphere-3d' : ''"></div>
                                        
                                        <div class="absolute -top-2 -right-2 sm:-top-3 sm:-right-3 w-6 h-6 sm:w-8 sm:h-8 bg-emerald-500 rounded-full flex items-center justify-center shadow-lg z-20">
                                            <div class="w-2 h-2 sm:w-3 sm:h-3 bg-white rounded-full animate-pulse"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="absolute -bottom-16 sm:-bottom-20 left-1/2 z-[99] transform -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <div class="bg-slate-800/90 backdrop-blur-sm rounded-xl px-3 py-2 sm:px-4 border border-emerald-500/30">
                                            <p class="text-sm font-semibold text-slate-100">Indonesia</p>
                                            <p class="text-xs text-slate-400">17,504 Island ±275 Population</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Enhanced Orbiting Nodes with 3D Effects -->
                            <template x-for="(node, index) in orbitingNodes" :key="index">
                                <div class="absolute orbit-node" :class="`orbit-${index}`" style="z-index: 5;">
                                    <div class="relative group cursor-pointer orbit-node-content"
                                        @click="selectNode(index)"
                                        @mouseenter="hoverNode(index)"
                                        @mouseleave="unhoverNode(index)">

                                        <!-- Enhanced Node Container with 3D Effects -->
                                        <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 rounded-2xl flex flex-col items-center justify-center p-3 sm:p-4 transition-all duration-300 transform backdrop-blur-sm border-2 shadow-xl node-container"
                                            :class="node.active ?
                                                    'scale-110 sm:scale-125 border-emerald-400/80 bg-slate-800/90 shadow-2xl shadow-emerald-500/40 animate-pulse-slow z-20' :
                                                    'scale-100 border-emerald-600/50 bg-slate-800/70 group-hover:scale-105 sm:group-hover:scale-110 group-hover:bg-slate-800/80 group-hover:border-emerald-500/70 group-hover:shadow-2xl'"
                                            :class="viewMode === '3d' ? 'node-3d transform-gpu' : ''">

                                            <div class="relative">
                                                <span class="text-xl sm:text-2xl md:text-3xl filter drop-shadow-sm" x-text="node.icon"></span>
                                                <div class="absolute -top-1.5 -right-1.5 sm:-top-2 sm:-right-2 w-3 h-3 sm:w-4 sm:h-4 rounded-full border-2 border-slate-800 node-status animate-pulse shadow-lg"
                                                    :class="node.status === 'optimal' ? 'bg-emerald-400 shadow-emerald-400/50' :
                                                            node.status === 'warning' ? 'bg-amber-400 shadow-amber-400/50' : 'bg-red-400 shadow-red-400/50'"></div>
                                            </div>

                                            <!-- Node Title -->
                                            <span class="text-xs font-bold text-slate-200 text-center leading-tight mt-1 sm:mt-2 hidden sm:block"
                                                x-text="node.title"></span>

                                            <!-- Enhanced Real-time Value -->
                                            <div class="absolute -bottom-3 sm:-bottom-4 left-1/2 transform -translate-x-1/2 bg-slate-800/90 border border-emerald-500/50 rounded-full px-2 py-1 sm:px-3 text-xs font-bold text-emerald-400 shadow-lg node-value backdrop-blur-sm"
                                                x-text="node.value"></div>
                                        </div>

                                        <!-- Enhanced Advanced Tooltip -->
                                        <div x-show="node.hover" x-transition:enter="transition ease-out duration-300"
                                            x-transition:enter-start="opacity-0 transform scale-90"
                                            x-transition:enter-end="opacity-100 transform scale-100"
                                            x-transition:leave="transition ease-in duration-200"
                                            x-transition:leave-start="opacity-100 transform scale-100"
                                            x-transition:leave-end="opacity-0 transform scale-90"
                                            class="absolute top-full left-1/2 transform -translate-x-1/2 mt-4 sm:mt-6 w-72 sm:w-80 md:w-96 bg-slate-800/95 backdrop-blur-sm rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-2xl border border-emerald-700/50 z-30 node-tooltip">
                                            <div class="flex items-center gap-3 sm:gap-4 mb-3 sm:mb-4">
                                                <div class="w-12 h-12 sm:w-16 sm:h-16 rounded-xl sm:rounded-2xl flex items-center justify-center text-lg sm:text-xl md:text-2xl shadow-xl"
                                                    :class="node.color">
                                                    <span x-text="node.icon"></span>
                                                </div>
                                                <div>
                                                    <h4 class="text-lg sm:text-xl font-bold text-slate-100" x-text="node.title"></h4>
                                                    <p class="text-sm text-slate-400" x-text="node.subtitle"></p>
                                                </div>
                                            </div>

                                            <p class="text-sm text-slate-300 mb-3 sm:mb-4" x-text="node.description"></p>

                                            <div class="grid grid-cols-2 gap-3 sm:gap-4 text-xs sm:text-sm">
                                                <div class="bg-slate-700/50 rounded-xl sm:rounded-2xl p-3 sm:p-4">
                                                    <span class="text-slate-400 block mb-1 sm:mb-2">Coverage</span>
                                                    <span class="text-slate-200 font-bold text-lg sm:text-lg" x-text="node.coverage"></span>
                                                </div>
                                                <div class="bg-slate-700/50 rounded-xl sm:rounded-2xl p-3 sm:p-4">
                                                    <span class="text-slate-400 block mb-1 sm:mb-2">Status</span>
                                                    <span class="font-bold text-lg sm:text-lg"
                                                        :class="node.trend === 'stable' ? 'text-emerald-400' : 'text-amber-400'"
                                                        x-text="node.trend === 'stable' ? 'Stable' : 'At Risk'"></span>
                                                </div>
                                            </div>

                                            <div class="mt-3 sm:mt-4 pt-3 sm:pt-4 border-t border-slate-700">
                                                <p class="text-xs text-slate-400 mb-2">Key Metrics</p>
                                                <div class="flex items-center gap-2">
                                                    <div class="flex-1 bg-slate-700 rounded-full h-2 sm:h-3 overflow-hidden">
                                                        <div class="bg-gradient-to-r from-emerald-500 to-cyan-500 h-2 sm:h-3 rounded-full transition-all duration-1000 relative"
                                                            :style="`width: ${node.health}%`"></div>
                                                    </div>
                                                    <span class="text-xs text-slate-300 font-medium" x-text="`${node.health}%`"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>

                <!-- Enhanced Control Panel -->
                <div class="absolute bottom-4 sm:bottom-6 right-4 sm:right-6 flex flex-col gap-2 sm:gap-3 z-20">
                    <button @click="zoomIn" class="w-8 h-8 sm:w-10 sm:h-10 lg:w-12 lg:h-12 bg-slate-800/80 backdrop-blur-sm rounded-lg sm:rounded-xl flex items-center justify-center shadow-lg border border-emerald-600/50 hover:bg-slate-700/80 transition-all duration-200 hover:scale-110 control-btn group">
                        <span class="text-sm sm:text-lg text-slate-200 group-hover:text-emerald-400 transition-colors">+</span>
                    </button>
                    <button @click="zoomOut" class="w-8 h-8 sm:w-10 sm:h-10 lg:w-12 lg:h-12 bg-slate-800/80 backdrop-blur-sm rounded-lg sm:rounded-xl flex items-center justify-center shadow-lg border border-emerald-600/50 hover:bg-slate-700/80 transition-all duration-200 hover:scale-110 control-btn group">
                        <span class="text-sm sm:text-lg text-slate-200 group-hover:text-emerald-400 transition-colors">-</span>
                    </button>
                    <button @click="toggleFullscreen" class="w-8 h-8 sm:w-10 sm:h-10 lg:w-12 lg:h-12 bg-slate-800/80 backdrop-blur-sm rounded-lg sm:rounded-xl flex items-center justify-center shadow-lg border border-emerald-600/50 hover:bg-slate-700/80 transition-all duration-200 hover:scale-110 control-btn group">
                        <i class="fa-solid fa-compress"></i>
                    </button>
                </div>

                    <!-- Enhanced Data Stream -->
                <div class="absolute top-4 sm:top-6 left-4 sm:left-6 bg-slate-800/80 backdrop-blur-sm rounded-xl sm:rounded-2xl p-3 sm:p-4 lg:p-6 border border-emerald-700/50 data-stream shadow-xl z-20 w-52 sm:w-72 lg:w-80">
                    <div class="flex items-center justify-between mb-3 sm:mb-4">
                        <div class="flex items-center gap-2">
                            <div class="w-2 h-2 sm:w-3 sm:h-3 bg-emerald-400 rounded-full animate-pulse"></div>
                            <span class="text-xs sm:text-sm font-semibold text-slate-200">Live Data Stream</span>
                        </div>
                        <div class="text-xs text-slate-400" x-text="new Date().toLocaleTimeString()"></div>
                    </div>
                    <div class="space-y-2 sm:space-y-3 max-h-32 sm:max-h-40 lg:max-h-48 overflow-y-auto custom-scrollbar">
                        <template x-for="(stream, index) in dataStream" :key="index">
                            <div class="flex items-start gap-2 sm:gap-3 p-2 sm:p-3 bg-slate-700/30 rounded-lg sm:rounded-xl hover:bg-slate-700/50 transition-colors cursor-pointer animate-slide-in">
                                <span class="text-emerald-400 text-base sm:text-lg" x-text="stream.icon"></span>
                                <div class="flex-1">
                                    <p class="text-xs sm:text-sm text-slate-300" x-text="stream.message"></p>
                                    <p class="text-xs text-slate-400 mt-1" x-text="stream.time"></p>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

                <!-- Enhanced Node Analytics Panel -->
            <div x-show="selectedNode !== null" x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 transform translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform translate-y-4"
                class="mt-6 sm:mt-8 bg-slate-800/90 backdrop-blur-sm rounded-2xl sm:rounded-3xl p-4 sm:p-6 lg:p-8 shadow-2xl border border-emerald-700/50 analytics-panel">
                <div class="flex flex-col sm:flex-row items-start justify-between mb-6 sm:mb-8 gap-4">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl flex items-center justify-center text-2xl sm:text-3xl md:text-4xl shadow-xl"
                            :class="orbitingNodes[selectedNode]?.color">
                            <span x-text="orbitingNodes[selectedNode]?.icon"></span>
                        </div>
                        <div>
                            <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-slate-100" x-text="orbitingNodes[selectedNode]?.title"></h3>
                            <p class="text-sm sm:text-base text-slate-400" x-text="orbitingNodes[selectedNode]?.subtitle"></p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button @click="exportNodeData" 
                                class="px-4 sm:px-6 py-2 sm:py-3 bg-gradient-to-r from-emerald-600 to-cyan-600 hover:from-emerald-500 hover:to-cyan-500 text-white rounded-xl transition-all duration-200 flex items-center gap-2 shadow-lg hover:shadow-emerald-500/25 transform hover:scale-105 text-xs sm:text-sm">
                            <i class="fa-solid fa-file-export w-4 h-4 md:w-5 md:h-5"></i>
                            Export
                        </button>
                        <button @click="selectedNode = null" 
                                class="w-8 h-8 sm:w-10 sm:h-10 lg:w-12 bg-slate-700/60 hover:bg-slate-700 rounded-xl flex items-center justify-center transition-all duration-200 hover:scale-110 group">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6 text-slate-400 group-hover:text-red-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12M6 6l-12-12m0 0h-12-12-12m0 0h-12-12-12z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 sm:gap-8">
                    <!-- Enhanced Metrics Overview -->
                    <div class="lg:col-span-1 space-y-4 sm:space-y-6">
                        <h4 class="text-lg sm:text-xl font-bold text-slate-100 flex items-center gap-3">
                            Ecosystem Metrics
                            <div class="w-2 h-2 sm:w-3 sm:h-3 bg-emerald-400 rounded-full animate-pulse"></div>
                        </h4>
                        <div class="space-y-3 sm:space-y-4">
                            <div class="bg-slate-700/50 rounded-xl sm:rounded-2xl p-4 sm:p-6 border border-slate-600/50 hover:border-emerald-600/50 transition-colors group">
                                <p class="text-xs sm:text-sm text-slate-400 mb-2">Total Area</p>
                                <p class="text-xl sm:text-2xl lg:text-3xl font-bold text-emerald-400" x-text="orbitingNodes[selectedNode]?.area"></p>
                                <div class="text-xs sm:text-sm text-slate-400 mt-2" x-text="orbitingNodes[selectedNode]?.percentage"></div>
                            </div>
                            <div class="bg-slate-700/50 rounded-xl sm:rounded-2xl p-4 sm:p-6 border border-slate-600/50 hover:border-emerald-600/50 transition-colors group">
                                <p class="text-xs sm:text-sm text-slate-400 mb-2">Biodiversity Level</p>
                                <p class="text-xl sm:text-2xl lg:text-3xl font-bold text-amber-400" x-text="orbitingNodes[selectedNode]?.biodiversity"></p>
                                <div class="text-xs sm:text-sm text-slate-400 mt-2">Species Richness</div>
                            </div>
                        </div>
                    </div>

                    <!-- Enhanced Trend Analysis -->
                    <div class="lg:col-span-1 space-y-4 sm:space-y-6">
                        <h4 class="text-lg sm:text-xl font-bold text-slate-100 flex items-center gap-3">
                            Conservation Status
                            <div class="w-2 h-2 sm:w-3 sm:h-3 bg-cyan-400 rounded-full animate-pulse"></div>
                        </h4>
                        <div class="bg-slate-700/50 rounded-xl sm:rounded-2xl p-4 sm:p-6 border border-slate-600/50 hover:border-emerald-600/50 transition-colors">
                            <div class="flex items-center justify-between mb-3 sm:mb-4">
                                <h5 class="font-semibold text-slate-100">Current Status</h5>
                                <span class="text-xs px-2 py-1 rounded-full animate-pulse-slow" 
                                    :class="orbitingNodes[selectedNode]?.trend === 'stable' ? 'bg-emerald-900/30 text-emerald-400' : 'bg-amber-900/30 text-amber-400'"
                                    x-text="orbitingNodes[selectedNode]?.trend === 'stable' ? 'Protected' : 'At Risk'"></span>
                            </div>
                            <p class="text-xs sm:text-sm text-slate-300 mb-3 sm:mb-4" x-text="orbitingNodes[selectedNode]?.analysis"></p>
                            <div class="space-y-2">
                                <div class="flex items-center justify-between">
                                    <span class="text-xs sm:text-sm text-slate-400">Health Score</span>
                                    <span class="text-xs sm:text-sm font-bold text-slate-200" x-text="`${orbitingNodes[selectedNode]?.health}%`"></span>
                                </div>
                                <div class="w-full bg-slate-600 rounded-full h-2 sm:h-3 overflow-hidden">
                                    <div class="bg-gradient-to-r from-emerald-500 to-cyan-500 h-2 sm:h-3 rounded-full transition-all duration-1000 relative">
                                        <div class="absolute inset-0 bg-white/20 animate-shimmer"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Enhanced Connected Systems & Actions -->
                    <div class="lg:col-span-1 space-y-4 sm:space-y-6">
                        <h4 class="text-lg sm:text-xl font-bold text-slate-100 flex items-center gap-3">
                            Quick Actions
                            <div class="w-2 h-2 sm:w-3 sm:h-3 bg-amber-400 rounded-full animate-pulse"></div>
                        </h4>
                        <div class="space-y-3 sm:space-y-4">
                            <div>
                                <h5 class="text-xs sm:text-sm font-semibold text-slate-100 mb-2 sm:mb-3">Connected Ecosystems</h5>
                                <div class="flex flex-wrap gap-2">
                                    <template x-for="connection in orbitingNodes[selectedNode]?.connections" :key="connection">
                                        <span class="px-2 py-1 sm:px-3 bg-slate-700/60 text-slate-300 rounded-lg sm:rounded-xl text-xs sm:text-sm font-medium border border-emerald-600/50 hover:border-emerald-400/50 hover:bg-emerald-900/20 transition-all duration-200 cursor-pointer transform hover:scale-105">
                                            <span x-text="connection"></span>
                                        </span>
                                    </template>
                                </div>
                            </div>
                            <div>
                                <h5 class="text-xs sm:text-sm font-semibold text-slate-100 mb-2 sm:mb-3">Conservation Actions</h5>
                                <div class="space-y-2 sm:space-y-3">
                                    <template x-for="(action, index) in orbitingNodes[selectedNode]?.actions" :key="action">
                                        <div class="flex items-center gap-2 sm:gap-3 p-2 sm:p-3 bg-slate-700/30 rounded-lg sm:rounded-xl border border-slate-600/50 hover:border-emerald-600/50 hover:bg-slate-700/40 transition-all duration-200 cursor-pointer group animate-slide-in"
                                            :style="`animation-delay: ${index * 0.1}s`">
                                            <div class="w-2 h-2 sm:w-3 sm:h-3 bg-emerald-400 rounded-full group-hover:scale-150 transition-transform"></div>
                                            <span class="text-xs sm:text-sm text-slate-300 group-hover:text-slate-200 transition-colors" x-text="action"></span>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<style>
    .bg-grid-pattern {
        background-image: 
            linear-gradient(rgba(16, 185, 129, 0.1) 1px, transparent 1px),
            linear-gradient(90deg, rgba(16, 185, 129, 0.1) 1px, transparent 1px);
        background-size: 50px 50px;
    }

    /* Enhanced Animations */
    @keyframes gradient-shift {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }

    @keyframes fade-in {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes slide-up {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes slide-up-delay {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes scale-in {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px) translateX(0px); }
        25% { transform: translateY(-10px) translateX(5px); }
        50% { transform: translateY(5px) translateX(-5px); }
        75% { transform: translateY(-5px) translateX(10px); }
    }

    @keyframes pulse-slow {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.7; }
    }

    @keyframes shimmer {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }

    @keyframes slide-in {
        from { opacity: 0; transform: translateX(-20px); }
        to { opacity: 1; transform: translateX(0); }
    }

    /* Animation Classes */
    .animate-gradient-shift {
        background-size: 200% 200%;
        animation: gradient-shift 3s ease infinite;
    }

    .animate-fade-in {
        animation: fade-in 0.8s ease-out;
    }

    .animate-slide-up {
        animation: slide-up 0.8s ease-out 0.2s both;
    }

    .animate-slide-up-delay {
        animation: slide-up-delay 0.8s ease-out 0.4s both;
    }

    .animate-scale-in {
        animation: scale-in 0.6s ease-out 0.3s both;
    }

    .animate-float {
        animation: float 4s ease-in-out infinite;
    }

    .animate-pulse-slow {
        animation: pulse-slow 2s ease-in-out infinite;
    }

    .animate-shimmer {
        animation: shimmer 2s infinite;
    }

    .animate-slide-in {
        animation: slide-in 0.5s ease-out both;
    }

    /* Enhanced 3D Effects */
    .earth-3d {
        transform-style: preserve-3d;
        animation: earth-3d-rotate 40s linear infinite;
    }

    .node-3d {
        transform-style: preserve-3d;
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .node-3d:hover {
        transform: scale(1.1) translateZ(50px);
    }

    .orbit-ring-3d-1 {
        transform-style: preserve-3d;
        animation: orbit-ring-3d-rotate 60s linear infinite;
    }

    .orbit-ring-3d-2 {
        transform-style: preserve-3d;
        animation: orbit-ring-3d-rotate 80s linear infinite reverse;
    }

    .orbit-ring-3d-3 {
        transform-style: preserve-3d;
        animation: orbit-ring-3d-rotate 100s linear infinite;
    }

    .connection-line-3d {
        stroke-dasharray: 5, 5;
        animation: connection-3d-dash 20s linear infinite;
    }

    .atmosphere-3d {
        background: radial-gradient(circle at 30% 30%, rgba(16, 185, 129, 0.4), transparent 70%);
        animation: atmosphere-3d-pulse 8s ease-in-out infinite;
    }

    /* Enhanced Cloud Animations */
    .cloud-1 {
        animation: cloud-drift-1 25s ease-in-out infinite;
        will-change: transform;
    }

    .cloud-2 {
        animation: cloud-drift-2 30s ease-in-out infinite;
        will-change: transform;
    }

    .cloud-3 {
        animation: cloud-drift-3 35s ease-in-out infinite;
        will-change: transform;
    }

    .cloud-4 {
        animation: cloud-drift-4 20s ease-in-out infinite;
        will-change: transform;
    }

    /* Enhanced Keyframes */
    @keyframes earth-3d-rotate {
        from { transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg); }
        to { transform: rotateX(360deg) rotateY(360deg) rotateZ(360deg); }
    }

    @keyframes earth-texture-rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(-360deg); }
    }

    @keyframes earth-shine-pulse {
        0%, 100% { opacity: 0; transform: scale(1); }
        50% { opacity: 0.3; transform: scale(1.02); }
    }

    @keyframes cloud-drift-1 {
        0%, 100% { transform: translateX(0px) translateY(0px) scale(1); }
        25% { transform: translateX(10px) translateY(-3px) scale(1.05); }
        50% { transform: translateX(5px) translateY(2px) scale(0.95); }
        75% { transform: translateX(-5px) translateY(-1px) scale(1.02); }
    }

    @keyframes cloud-drift-2 {
        0%, 100% { transform: translateX(0px) translateY(0px) scale(1); }
        33% { transform: translateX(-8px) translateY(2px) scale(1.03); }
        66% { transform: translateX(4px) translateY(-2px) scale(0.97); }
    }

    @keyframes cloud-drift-3 {
        0%, 100% { transform: translateX(0px) translateY(0px) scale(1); }
        20% { transform: translateX(6px) translateY(1px) scale(1.02); }
        40% { transform: translateX(-3px) translateY(-1px) scale(0.98); }
        60% { transform: translateX(-3px) translateY(-1px) scale(1.01); }
        80% { transform: translateX(-4px) translateY(-2px) scale(0.99); }
    }

    @keyframes cloud-drift-4 {
        0%, 100% { transform: translateX(0px) translateY(0px) scale(1); }
        50% { transform: translateX(-6px) translateY(3px) scale(1.04); }
    }

    /* Enhanced Node Positioning */
    .orbit-node {
        position: absolute;
        top: 50%;
        left: 50%;
        will-change: transform;
        transform-origin: center;
        backface-visibility: hidden;
        z-index: 5;
        contain: layout style paint;
    }

    /* Enhanced Connection Line Animation */
    .connection-line-3d {
        stroke-dasharray: 5, 5;
        animation: connection-3d-dash 20s linear infinite;
    }

    @keyframes connection-3d-dash {
        to {
            stroke-dashoffset: -100;
        }
    }

    /* Enhanced Performance Optimizations */
    .orbit-node, .earth-container, .node-3d {
        will-change: transform;
        transform-style: preserve-3d;
        backface-visibility: hidden;
        contain: layout style paint;
    }

    /* Enhanced Smooth Transitions */
    .node-container, .control-btn, .stream-item, .data-stream, .analytics-panel {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Enhanced Hover Effects */
    .node-container:hover {
        transform: scale(1.1) translateZ(10px);
        filter: drop-shadow(0 10px 20px rgba(16, 185, 129, 0.3));
    }

    .control-btn:hover {
        transform: scale(1.1) rotate(5deg);
    }

    /* Enhanced Custom Scrollbar */
    .custom-scrollbar::-webkit-scrollbar {
        width: 4px;
    }

    .custom-scrollbar::-webkit-scrollbar-track {
        background: rgba(30, 41, 59, 0.5);
        border-radius: 2px;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: rgba(71, 85, 105, 0.5);
        border-radius: 2px;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background: rgba(71, 85, 105, 0.7);
    }

    /* Backdrop Blur Support */
    @supports not (backdrop-filter: blur(12px)) {
        .backdrop-blur-md {
            background-color: rgba(30, 41, 59, 0.95);
        }
    }

    /* Enhanced Responsive Adjustments */
    @media (max-width: 640px) {
        .earth-container {
            animation-duration: 35s;
        }
        
        .orbit-path-1 {
            animation-duration: 40s;
        }
        
        .orbit-path-2 {
            animation-duration: 50s;
        }
        
        .orbit-path-3 {
            animation-duration: 60s;
        }
    }

    @media (min-width: 641px) and (max-width: 1023px) {
        .earth-container {
            animation-duration: 37s;
        }
        
        .orbit-path-1 {
            animation-duration: 50s;
        }
        
        .orbit-path-2 {
            animation-duration: 65s;
        }
    }

    @media (min-width: 1024px) {
        .earth-container {
            animation-duration: 40s;
        }
        
        .orbit-path-1 {
            animation-duration: 50s;
        }
        
        .orbit-path-2 {
            animation-duration: 80s;
        }
    }

    /* Enhanced Performance for Animation */
    @media (prefers-reduced-motion: reduce) {
        .animate-gradient-shift,
        .animate-float,
        .animate-pulse-slow,
        .animate-shimmer,
        .orbit-path-1,
        .orbit-path-2,
        .orbit-path-3,
        .earth-container,
        .earth-texture,
        .earth-shine,
        .cloud-1,
        .cloud-2,
        .cloud-3,
        .cloud-4,
        .earth-3d,
        .orbit-ring-3d-1,
        .orbit-ring-3d-2,
        .orbit-ring-3d-3 {
            animation: none !important;
        }
    }

    /* Enhanced GPU Acceleration */
    @media (min-width: 1024px) {
        .orbit-node,
        .earth-container,
        .node-3d {
            transform: translateZ(0);
        }
    }
</style>
</div>

@push('scripts')
<script>
    function modernEcosphere() {
        return {
            // Enhanced State Management
            selectedNode: null,
            refreshing: false,
            connectedNodes: 9,
            totalArea: 189.7,
            zoomLevel: 1,
            viewMode: '3d',
            autoRotate: true,
            animationFrame: null,
            startTime: Date.now(),
            isMobile: window.innerWidth < 640,
            isTablet: window.innerWidth >= 640 && window.innerWidth < 1024,
            isDesktop: window.innerWidth >= 1024,

            // Indonesian Ecosystem Data
            orbitingNodes: [
                {
                    icon: '🌳',
                    title: 'All Forest Types',
                    subtitle: 'Indonesian Forest Coverage',
                    value: '94M ha',
                    area: '94M ha',
                    percentage: '~49% of land area',
                    coverage: '49%',
                    biodiversity: 'High',
                    health: 88,
                    status: 'optimal',
                    trend: 'stable',
                    color: 'bg-emerald-900/30 text-emerald-400 border border-emerald-500/20',
                    connections: ['Tropical Rainforest', 'Mountain Forest', 'Mangrove', 'Peatland'],
                    actions: [
                        'Expand protected forest areas',
                        'Implement sustainable logging practices',
                        'Strengthen anti-deforestation measures'
                    ],
                    description: 'Total forest coverage across all Indonesian forest types including primary and secondary forests.',
                    analysis: 'Forest coverage remains stable with ongoing conservation efforts showing positive results.',
                    hover: false,
                    active: false,
                    orbitRadius: 200,
                    orbitSpeed: 0.8,
                    startAngle: 0
                },
                {
                    icon: '🌴',
                    title: 'Tropical Rainforest',
                    subtitle: 'Lowland Rainforest Systems',
                    value: '45M ha',
                    area: '45M ha',
                    percentage: '~23% of land area',
                    coverage: '23%',
                    biodiversity: 'Very High',
                    health: 72,
                    status: 'warning',
                    trend: 'at-risk',
                    color: 'bg-green-900/30 text-green-400 border border-green-500/20',
                    connections: ['All Forest Types', 'Wildlife Corridors', 'Mountain Forest'],
                    actions: [
                        'Combat illegal logging activities',
                        'Support community-based forest management',
                        'Restore degraded rainforest areas'
                    ],
                    description: 'Tropical lowland rainforests with exceptional biodiversity and carbon storage capacity.',
                    analysis: 'Rainforest areas face pressure from agricultural expansion and logging activities.',
                    hover: false,
                    active: false,
                    orbitRadius: 250,
                    orbitSpeed: 1.0,
                    startAngle: 40
                },
                {
                    icon: '⛰️',
                    title: 'Mountain Forest',
                    subtitle: 'Highland Forest Ecosystems',
                    value: '20M ha',
                    area: '20M ha',
                    percentage: '~10% of land area',
                    coverage: '10%',
                    biodiversity: 'High',
                    health: 85,
                    status: 'optimal',
                    trend: 'stable',
                    color: 'bg-slate-900/30 text-slate-400 border border-slate-500/20',
                    connections: ['All Forest Types', 'Tropical Rainforest', 'Water Systems'],
                    actions: [
                        'Protect watershed areas',
                        'Prevent soil erosion on slopes',
                        'Monitor climate change impacts'
                    ],
                    description: 'Mountain forest ecosystems critical for water regulation and unique biodiversity.',
                    analysis: 'Mountain forests remain relatively stable but face climate change threats.',
                    hover: false,
                    active: false,
                    orbitRadius: 300,
                    orbitSpeed: 0.6,
                    startAngle: 80
                },
                {
                    icon: '🏝️',
                    title: 'Mangrove',
                    subtitle: 'Coastal Mangrove Forests',
                    value: '3.3M ha',
                    area: '3.3M ha',
                    percentage: '~1.7% of land area',
                    coverage: '1.7%',
                    biodiversity: 'High',
                    health: 68,
                    status: 'warning',
                    trend: 'at-risk',
                    color: 'bg-cyan-900/30 text-cyan-400 border-cyan-500/20',
                    connections: ['Coastal Systems', 'Marine Ecosystems', 'Peatland'],
                    actions: [
                        'Implement mangrove restoration programs',
                        'Control coastal development',
                        'Support sustainable aquaculture'
                    ],
                    description: 'Indonesia has world\'s largest mangrove forests, critical for coastal protection.',
                    analysis: 'Mangrove areas are declining due to aquaculture expansion and coastal development.',
                    hover: false,
                    active: false,
                    orbitRadius: 200,
                    orbitSpeed: 1.2,
                    startAngle: 120
                },
                {
                    icon: '🌱',
                    title: 'Peatland',
                    subtitle: 'Tropical Peat Ecosystems',
                    value: '13.4M ha',
                    area: '13.4M ha',
                    percentage: '~7% of land area',
                    coverage: '7%',
                    biodiversity: 'Medium',
                    health: 65,
                    status: 'warning',
                    trend: 'at-risk',
                    color: 'bg-amber-900/30 text-amber-400 border-amber-500/20',
                    connections: ['All Forest Types', 'Mangrove', 'Water Systems'],
                    actions: [
                        'Prevent peatland drainage and burning',
                        'Restore degraded peatland areas',
                        'Develop sustainable peatland management'
                    ],
                    description: 'Tropical peat ecosystems with significant carbon storage and unique biodiversity.',
                    analysis: 'Peatlands face threats from drainage, burning, and conversion to agriculture.',
                    hover: false,
                    active: false,
                    orbitRadius: 250,
                    orbitSpeed: 0.9,
                    startAngle: 160
                },
                {
                    icon: '🌾',
                    title: 'Grassland/Savanna',
                    subtitle: 'Indonesian Savanna Ecosystems',
                    value: '5M ha',
                    area: '5M ha',
                    percentage: '~2.6% of land area',
                    coverage: '2.6%',
                    biodiversity: 'Medium',
                    health: 78,
                    status: 'optimal',
                    trend: 'stable',
                    color: 'bg-lime-900/30 text-lime-400 border-lime-500/20',
                    connections: ['Wildlife Corridors', 'Agricultural Areas', 'Forest Systems'],
                    actions: [
                        'Prevent overgrazing in sensitive areas',
                        'Control invasive species spread',
                        'Maintain traditional land management practices'
                    ],
                    description: 'Grassland and savanna ecosystems supporting unique wildlife and traditional livelihoods.',
                    analysis: 'Grassland areas remain stable but face pressure from agricultural expansion.',
                    hover: false,
                    active: false,
                    orbitRadius: 300,
                    orbitSpeed: 0.7,
                    startAngle: 200
                },
                {
                    icon: '🪸',
                    title: 'Coral Reef',
                    subtitle: 'Marine Coral Ecosystems',
                    value: '2.5M ha',
                    area: '2.5M ha',
                    percentage: '17% of world coral reefs',
                    coverage: '17%',
                    biodiversity: 'Very High',
                    health: 62,
                    status: 'warning',
                    trend: 'at-risk',
                    color: 'bg-pink-900/30 text-pink-400 border-pink-500/20',
                    connections: ['Marine Ecosystems', 'Coastal Systems', 'Seagrass Beds'],
                    actions: [
                        'Reduce coral bleaching impacts',
                        'Control destructive fishing practices',
                        'Establish marine protected areas'
                    ],
                    description: 'Indonesia has 17% of world\'s coral reefs with exceptional marine biodiversity.',
                    analysis: 'Coral reefs face threats from climate change, pollution, and destructive fishing.',
                    hover: false,
                    active: false,
                    orbitRadius: 200,
                    orbitSpeed: 1.1,
                    startAngle: 240
                },
                {
                    icon: '🌿',
                    title: 'Seagrass Beds',
                    subtitle: 'Coastal Seagrass Ecosystems',
                    value: '3M ha',
                    area: '3M ha',
                    percentage: '10% of world seagrass',
                    coverage: '10%',
                    biodiversity: 'High',
                    health: 70,
                    status: 'warning',
                    trend: 'at-risk',
                    color: 'bg-teal-900/30 text-teal-400 border-teal-500/20',
                    connections: ['Marine Ecosystems', 'Coral Reef', 'Coastal Systems'],
                    actions: [
                        'Reduce coastal pollution impacts',
                        'Prevent seabed disturbance',
                        'Restore degraded seagrass areas'
                    ],
                    description: 'Indonesia has 10% of world\'s seagrass beds, critical for marine life.',
                    analysis: 'Seagrass beds are declining due to coastal development and pollution.',
                    hover: false,
                    active: false,
                    orbitRadius: 250,
                    orbitSpeed: 0.8,
                    startAngle: 280
                },
                {
                    icon: '🌊',
                    title: 'Deep Sea',
                    subtitle: 'Pelagic & Benthic Zones',
                    value: '6M km²',
                    area: '6M km²',
                    percentage: 'Indonesian EEZ waters',
                    coverage: 'EEZ',
                    biodiversity: 'High',
                    health: 82,
                    status: 'optimal',
                    trend: 'stable',
                    color: 'bg-blue-900/30 text-blue-400 border-blue-500/20',
                    connections: ['Marine Ecosystems', 'Coral Reef', 'Seagrass Beds'],
                    actions: [
                        'Prevent overfishing in deep waters',
                        'Control marine pollution',
                        'Develop sustainable marine resource management'
                    ],
                    description: 'Deep sea zones including pelagic and benthic areas within Indonesian waters.',
                    analysis: 'Deep sea ecosystems remain relatively stable but face pressure from fishing activities.',
                    hover: false,
                    active: false,
                    orbitRadius: 300,
                    orbitSpeed: 0.5,
                    startAngle: 320
                }
            ],

            // Enhanced Data Stream
            dataStream: [
                { icon: '📡', message: 'Satellite data synchronized successfully', time: '2 min ago' },
                { icon: '🌡️', message: 'Temperature anomaly detected in Kalimantan', time: '5 min ago' },
                { icon: '💧', message: 'Water quality improving in coral reef areas', time: '12 min ago' },
                { icon: '🌳', message: 'Reforestation milestone achieved in Sumatra', time: '25 min ago' }
            ],

            // Enhanced Methods
            init() {
                // Wait for DOM to be ready
                this.$nextTick(() => {
                    this.startDataStream();
                    this.startPerfectOrbit();
                    this.updateTime();
                    this.initParticles();
                    this.initFloatingParticles();

                    // Add resize listener for responsive adjustments
                    window.addEventListener('resize', this.handleResize.bind(this));

                    // Add keyboard navigation
                    document.addEventListener('keydown', this.handleKeyboard.bind(this));
                });
            },

            handleResize() {
                this.isMobile = window.innerWidth < 640;
                this.isTablet = window.innerWidth >= 640 && window.innerWidth < 1024;
                this.isDesktop = window.innerWidth >= 1024;
            },

            handleKeyboard(event) {
                switch(event.key) {
                    case 'Escape':
                        this.selectedNode = null;
                        break;
                    case ' ':
                        event.preventDefault();
                        this.toggleAutoRotate();
                        break;
                    case 'r':
                    case 'R':
                        if (event.ctrlKey || event.metaKey) {
                            event.preventDefault();
                            this.refreshNetwork();
                        }
                        break;
                    case '+':
                    case '=':
                        this.zoomIn();
                        break;
                    case '-':
                    case '_':
                        this.zoomOut();
                        break;
                }
            },

            getOrbitContainerWidth() {
                if (this.isMobile) return 300;
                if (this.isTablet) return 500;
                return 700;
            },

            getOrbitContainerHeight() {
                if (this.isMobile) return 300;
                if (this.isTablet) return 500;
                return 700;
            },

            getOrbitRadius(tier) {
                const baseSize = this.getOrbitContainerWidth();
                if (this.isMobile) {
                    return baseSize * (tier === 1 ? 0.4 : tier === 2 ? 0.5 : 0.6);
                }
                if (this.isTablet) {
                    return baseSize * (tier === 1 ? 0.35 : tier === 2 ? 0.45 : 0.55);
                }
                return baseSize * (tier === 1 ? 0.3 : tier === 2 ? 0.4 : 0.5);
            },

            initFloatingParticles() {
                const container = document.getElementById('floatingParticles');
                const particleCount = this.isMobile ? 3 : this.isTablet ? 4 : 6;
                
                for (let i = 0; i < particleCount; i++) {
                    const particle = document.createElement('div');
                    const size = Math.random() * 3 + 1;
                    const opacity = Math.random() * 0.3 + 0.1;
                    
                    particle.className = 'absolute rounded-full animate-float';
                    particle.style.width = `${size}px`;
                    particle.style.height = `${size}px`;
                    particle.style.backgroundColor = `rgba(16, 185, 129, ${opacity})`;
                    particle.style.top = `${Math.random() * 100}%`;
                    particle.style.left = `${Math.random() * 100}%`;
                    particle.style.animationDelay = `${Math.random() * 5}s`;
                    
                    container.appendChild(particle);
                }
            },

            initParticles() {
                // Skip canvas particles on mobile for performance
                if (this.isMobile) return;
                
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                const particleContainer = document.getElementById('particleCanvas');
                
                canvas.style.position = 'absolute';
                canvas.style.top = '0';
                canvas.style.left = '0';
                canvas.style.width = '100%';
                canvas.style.height = '100%';
                canvas.style.pointerEvents = 'none';
                
                particleContainer.appendChild(canvas);
                
                const particles = [];
                const particleCount = this.isTablet ? 30 : 50;
                
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
                
                for (let i = 0; i < particleCount; i++) {
                    particles.push({
                        x: Math.random() * canvas.width,
                        y: Math.random() * canvas.height,
                        vx: (Math.random() - 0.5) * 0.5,
                        vy: (Math.random() - 0.5) * 0.5,
                        size: Math.random() * 2 + 1,
                        opacity: Math.random() * 0.5 + 0.2
                    });
                }
                
                const animateParticles = () => {
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                    
                    particles.forEach(particle => {
                        particle.x += particle.vx;
                        particle.y += particle.vy;
                        
                        if (particle.x < 0 || particle.x > canvas.width) particle.vx *= -1;
                        if (particle.y < 0 || particle.y > canvas.height) particle.vy *= -1;
                        
                        ctx.beginPath();
                        ctx.arc(particle.x, particle.y, particle.size, 0, Math.PI * 2);
                        ctx.fillStyle = `rgba(16, 185, 129, ${particle.opacity})`;
                        ctx.fill();
                    });
                    
                    requestAnimationFrame(animateParticles);
                };
                
                animateParticles();
            },

            startPerfectOrbit() {
                const animate = () => {
                    if (this.autoRotate) {
                        const currentTime = Date.now();
                        const elapsed = (currentTime - this.startTime) / 1000;
                        this.updatePerfectOrbitPositions(elapsed);
                    }
                    this.animationFrame = requestAnimationFrame(animate);
                };
                this.animationFrame = requestAnimationFrame(animate);
            },

            updatePerfectOrbitPositions(elapsed) {
                const nodes = document.querySelectorAll('.orbit-node');
                const containerWidth = this.getOrbitContainerWidth();
                const containerHeight = this.getOrbitContainerHeight();
                const centerX = containerWidth / 2;
                const centerY = containerHeight / 2;

                this.orbitingNodes.forEach((node, index) => {
                    const nodeElement = nodes[index];
                    if (!nodeElement) return;

                    const angleInRadians = (node.startAngle * Math.PI / 180) + (elapsed * node.orbitSpeed * 0.5);
                    const x = centerX + Math.cos(angleInRadians) * node.orbitRadius;
                    const y = centerY + Math.sin(angleInRadians) * node.orbitRadius;
                    
                    nodeElement.style.transform = `translate(${x - centerX}px, ${y - centerY}px) translate(-50%, -50%)`;
                });
            },

            getNodePosition(index) {
                const containerWidth = this.getOrbitContainerWidth();
                const containerHeight = this.getOrbitContainerHeight();
                const centerX = containerWidth / 2;
                const centerY = containerHeight / 2;
                const elapsed = (Date.now() - this.startTime) / 1000;
                const node = this.orbitingNodes[index];
                
                const angleInRadians = (node.startAngle * Math.PI / 180) + (elapsed * node.orbitSpeed * 0.5);
                const x = centerX + Math.cos(angleInRadians) * node.orbitRadius;
                const y = centerY + Math.sin(angleInRadians) * node.orbitRadius;
                
                return { x: `${x}px`, y: `${y}px` };
            },

            toggleViewMode() {
                this.viewMode = this.viewMode === '3d' ? '2d' : '3d';
                
                // Add visual feedback
                const button = event.currentTarget;
                button.classList.add('scale-95');
                setTimeout(() => {
                    button.classList.remove('scale-95');
                }, 100);
                
                // Add notification
                this.dataStream.unshift({
                    icon: this.viewMode === '3d' ? '🎯' : '📊',
                    message: `Switched to ${this.viewMode.toUpperCase()} view mode`,
                    time: 'Just now'
                });
                
                if (this.dataStream.length > 4) {
                    this.dataStream.pop();
                }
            },

            toggleAutoRotate() {
                this.autoRotate = !this.autoRotate;
            },

            toggleFullscreen() {
                if (!document.fullscreenElement) {
                    document.documentElement.requestFullscreen();
                } else {
                    document.exitFullscreen();
                }
            },

            selectNode(index) {
                this.orbitingNodes.forEach((node, i) => {
                    node.active = i === index;
                });
                this.selectedNode = index;
            },

            hoverNode(index) {
                this.orbitingNodes[index].hover = true;
            },

            unhoverNode(index) {
                this.orbitingNodes[index].hover = false;
            },

            refreshNetwork() {
                this.refreshing = true;
                setTimeout(() => {
                    this.orbitingNodes.forEach(node => {
                        node.health = Math.floor(Math.random() * 30) + 70;
                    });
                    this.refreshing = false;
                    
                    this.dataStream.unshift({
                        icon: '🔄',
                        message: 'Ecosystem data synchronized successfully',
                        time: 'Just now'
                    });
                    
                    if (this.dataStream.length > 4) {
                        this.dataStream.pop();
                    }
                }, 2000);
            },

            startDataStream() {
                setInterval(() => {
                    this.addDataStreamItem();
                }, 10000);
            },

            addDataStreamItem() {
                const messages = [
                    { icon: '🌪️', message: 'Weather pattern analysis complete' },
                    { icon: '🐠', message: 'Marine life survey updated' },
                    { icon: '🌱', message: 'Soil nutrient levels monitored' },
                    { icon: '🏭', message: 'Industrial emissions tracked' },
                    { icon: '🌍', message: 'Ecosystem health updated' },
                    { icon: '🔬', message: 'Research data collected' }
                ];
                
                const newItem = messages[Math.floor(Math.random() * messages.length)];
                newItem.time = 'Just now';
                this.dataStream.unshift(newItem);
                
                if (this.dataStream.length > 4) {
                    this.dataStream.pop();
                }
            },

            updateTime() {
                setInterval(() => {
                    const times = document.querySelectorAll('[x-text*="toLocaleTimeString"]');
                    times.forEach(el => {
                        if (el.__x) {
                            el.__x.$el.textContent = new Date().toLocaleTimeString();
                        }
                    });
                }, 1000);
            },

            exportNodeData() {
                if (this.selectedNode !== null) {
                    const node = this.orbitingNodes[this.selectedNode];
                    
                    // Create a downloadable JSON file with node data
                    const dataStr = JSON.stringify(node, null, 2);
                    const dataUri = 'data:application/json;charset=utf-8,'+ encodeURIComponent(dataStr);
                    
                    const exportFileDefaultName = `${node.title.replace(/\s+/g, '_')}_data.json`;
                    
                    const linkElement = document.createElement('a');
                    linkElement.setAttribute('href', dataUri);
                    linkElement.setAttribute('download', exportFileDefaultName);
                    linkElement.click();
                }
            },

            zoomIn() {
                this.zoomLevel = Math.min(this.zoomLevel + 0.1, 1.5);
                const container = document.getElementById('orbitContainer');
                container.style.transform = `scale(${this.zoomLevel})`;
            },

            zoomOut() {
                this.zoomLevel = Math.max(this.zoomLevel - 0.1, 0.5);
                const container = document.getElementById('orbitContainer');
                container.style.transform = `scale(${this.zoomLevel})`;
            },
        }
    }
</script>
@endpush