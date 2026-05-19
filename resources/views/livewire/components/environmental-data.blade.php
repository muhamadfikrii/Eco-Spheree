<div>
    <section
        id="environmental-data"
        class="bg-grid-pattern relative min-h-screen overflow-hidden py-4 sm:py-8 lg:py-12"
        x-data="modernEcosphere()"
    >
        
        <div class="absolute inset-0">
            <div
                class="absolute inset-0 bg-gradient-to-br from-slate-900 via-emerald-900/10 to-slate-900"
            ></div>
            <div class="bg-grid-pattern absolute inset-0 opacity-5"></div>
            <div class="absolute inset-0" id="particleCanvas"></div>
            <div class="absolute inset-0" id="floatingParticles"></div>
        </div>

        <div class="relative z-10 mx-auto max-w-7xl px-3 sm:px-6 lg:px-8">
            
            <div class="mb-8 animate-fade-in text-center sm:mb-12 lg:mb-16">
                <h1
                    class="mb-4 text-3xl font-bold leading-tight text-slate-100 sm:mb-6 sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl"
                >
                    <span class="bg-emerald-400 bg-clip-text text-transparent"
                        >EcoSpheree</span
                    >
                    <span
                        class="mt-2 block animate-slide-up text-lg font-light text-slate-400 sm:mt-4 sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl"
                        >Indonesian Ecosystem Digital Platform</span
                    >
                </h1>
                <p class="animate-slide-up-delay mx-auto max-w-4xl px-4 text-base leading-relaxed text-slate-400 sm:text-lg lg:text-xl">An advanced monitoring system that tracks Indonesia's biodiversity hotspots with real-time analysis, predictive modelling and conservation insights.</p>
            </div>

            
            <div
                class="mx-auto mb-6 animate-scale-in rounded-3xl border border-emerald-700/30 bg-slate-800/60 p-4 shadow-2xl backdrop-blur-md sm:mb-8 sm:p-6"
            >
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <div class="flex items-center gap-4 sm:gap-6">
                        <div class="flex items-center gap-3">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-emerald-500 to-cyan-500 shadow-lg sm:h-12 sm:w-12"
                            >
                                <svg class="h-5 w-5 text-white sm:h-6 sm:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <h3
                                    class="text-xl font-bold text-slate-100 sm:text-2xl"
                                    x-text="`${connectedNodes} Systems`"
                                ></h3>
                                <p class="text-xs text-slate-400 sm:text-sm">Active Monitoring</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-600 shadow-lg sm:h-12 sm:w-12"
                            >
                                <i
                                    class="fa-solid fa-users-between-lines h-5 w-5 p-[2px] text-center md:h-6 md:w-6"
                                ></i>
                            </div>
                            <div>
                                <h3
                                    class="text-xl font-bold text-slate-100 sm:text-2xl"
                                    x-text="`${totalArea}M ha`"
                                ></h3>
                                <p class="text-xs text-slate-400 sm:text-sm">Total Coverage</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 sm:gap-3">
                        
                        <button
                            @click="toggleViewMode"
                            class="group relative flex items-center gap-2 overflow-hidden rounded-xl border border-slate-600/50 bg-slate-700/50 px-3 py-2 text-xs text-white transition-all duration-200 hover:bg-slate-700 sm:px-4 sm:text-sm"
                            :class="viewMode === '3d'
                                ? 'bg-gradient-to-r from-purple-400/20 to-blue-400/20 text-gray-800'
                                : 'bg-gradient-to-r from-gray-300 to-slate-300 border-gray-200/50 text-gray-700'"
                        >
                            
                            <div
                                class="absolute inset-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100"
                                :class="viewMode === '3d'
                                    ? 'bg-gradient-to-r from-purple-400/20 to-blue-400/20'
                                    : 'bg-gradient-to-r from-gray-400/20 to-slate-400/20'"
                            ></div>

                            <div class="relative flex items-center gap-2">
                                <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7z" />
                                </svg>
                                <span class="font-medium">
                                    <span
                                        x-show="viewMode === '3d'"
                                        x-transition
                                        >3D View</span
                                    >
                                    <span
                                        x-show="viewMode === '2d'"
                                        x-transition
                                        >2D View</span
                                    >
                                </span>
                            </div>

                            <div class="absolute -right-1 -top-1">
                                <div
                                    x-show="viewMode === '3d'"
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 scale-0"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    class="h-2 w-2 animate-pulse rounded-full bg-purple-400 sm:h-3 sm:w-3"
                                ></div>
                                <div
                                    x-show="viewMode === '2d'"
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 scale-0"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    class="h-2 w-2 animate-pulse rounded-full bg-gray-400 sm:h-3 sm:w-3"
                                ></div>
                            </div>
                        </button>

                        <button
                            @click="toggleAutoRotate"
                            class="flex items-center gap-2 rounded-xl border border-slate-600/50 bg-slate-700/50 px-3 py-2 text-xs text-white transition-all duration-200 hover:bg-slate-700 sm:px-4 sm:text-sm"
                            :class="autoRotate
                                ? 'bg-emerald-600/50 border-emerald-500/50'
                                : ''"
                        >
                            <svg x-show="
                                    !autoRotate
                                " class="h-4 w-4 sm:h-5 sm:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                            <i
                                x-show="autoRotate"
                                class="fa-sharp fa-solid fa-stop"
                            ></i>
                            <span
                                x-text="autoRotate ? 'Stop' : 'Auto Rotate'"
                            ></span>
                        </button>
                        <button
                            @click="refreshNetwork"
                            :disabled="refreshing"
                            class="flex transform items-center gap-2 rounded-xl bg-emerald-600 px-4 py-2 text-xs text-white shadow-lg transition-all duration-200 hover:scale-105 hover:from-emerald-500 hover:to-cyan-500 hover:shadow-emerald-500/25 sm:px-6 sm:text-sm"
                        >
                            <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                            <span
                                x-text="refreshing ? 'Syncing...' : 'Refresh'"
                            ></span>
                        </button>
                    </div>
                </div>
            </div>

            
            <div
                class="mx-auto mb-8 animate-scale-in rounded-3xl border border-emerald-700/30 bg-slate-800/60 p-4 shadow-2xl backdrop-blur-md sm:mb-16 sm:p-8"
            >
                <div
                    class="relative h-[500px] overflow-auto rounded-2xl bg-slate-900/50 sm:h-[600px] md:overflow-hidden lg:h-[700px] xl:h-[800px]"
                >
                    
                    <div class="absolute inset-0 opacity-20">
                        <div
                            class="animate-float absolute h-2 w-2 rounded-full bg-emerald-400"
                            style="top: 20%; left: 15%; animation-delay: 0s"
                        ></div>
                        <div
                            class="animate-float absolute h-1 w-1 rounded-full bg-cyan-400"
                            style="top: 60%; left: 80%; animation-delay: 1s"
                        ></div>
                        <div
                            class="animate-float absolute h-1 w-1 rounded-full bg-blue-400"
                            style="top: 80%; left: 30%; animation-delay: 2s"
                        ></div>
                        <div
                            class="animate-float absolute h-2 w-2 rounded-full bg-green-400"
                            style="top: 40%; left: 70%; animation-delay: 3s"
                        ></div>
                        <div
                            class="animate-float absolute h-1 w-1 rounded-full bg-purple-400"
                            style="top: 10%; left: 90%; animation-delay: 4s"
                        ></div>
                        <div
                            class="animate-float absolute h-3 w-3 rounded-full bg-amber-400"
                            style="top: 90%; left: 10%; animation-delay: 5s"
                        ></div>
                    </div>

                    
                    <div
                        class="absolute inset-0 flex items-center justify-center"
                    >
                        <div
                            id="orbitContainer"
                            class="relative"
                            :class="viewMode === '3d'
                                ? 'transform-gpu perspective-1000'
                                : ''"
                            :style="`width: ${getOrbitContainerWidth()}px; height: ${getOrbitContainerHeight()}px;`"
                        >
                            
                            <svg class="pointer-events-none absolute inset-0 h-full w-full" style="
                                    z-index: 1;
                                ">
                                <circle
                                    cx="50%"
                                    cy="50%"
                                    :r="getOrbitRadius(1)"
                                    fill="none"
                                    stroke="url(#gradient1)"
                                    stroke-width="2"
                                    opacity="0.4"
                                    stroke-dasharray="10,5"
                                    :class="viewMode === '3d'
                                        ? 'orbit-ring-3d-1'
                                        : 'orbit-path-1'"
                                />
                                <circle
                                    cx="50%"
                                    cy="50%"
                                    :r="getOrbitRadius(2)"
                                    fill="none"
                                    stroke="url(#gradient2)"
                                    stroke-width="1.5"
                                    opacity="0.3"
                                    stroke-dasharray="15,8"
                                    :class="viewMode === '3d'
                                        ? 'orbit-ring-3d-2'
                                        : 'orbit-path-2'"
                                />
                                <circle
                                    cx="50%"
                                    cy="50%"
                                    :r="getOrbitRadius(3)"
                                    fill="none"
                                    stroke="url(#gradient3)"
                                    stroke-width="1"
                                    opacity="0.2"
                                    stroke-dasharray="20,10"
                                    :class="viewMode === '3d'
                                        ? 'orbit-ring-3d-3'
                                        : 'orbit-path-3'"
                                />

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

                            <div
                                class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transform"
                            >
                                <div class="group relative">
                                    
                                    <div
                                        class="earth-container relative z-10 flex h-24 w-24 items-center justify-center overflow-hidden rounded-full bg-gradient-to-br from-emerald-600 via-cyan-600 to-blue-600 shadow-2xl shadow-emerald-500/40 sm:h-32 sm:w-32 md:h-40 md:w-40 lg:h-48 lg:w-48 xl:h-52 xl:w-52"
                                        :class="viewMode === '3d'
                                            ? 'earth-3d transform-gpu'
                                            : ''"
                                    >
                                        <div
                                            class="earth-texture absolute inset-0 rounded-full bg-gradient-to-br from-blue-900 via-green-900 to-emerald-900"
                                        ></div>
                                        <div
                                            class="absolute inset-0 rounded-full bg-gradient-to-tl from-transparent via-emerald-800/20 to-transparent"
                                        ></div>

                                        
                                        <div
                                            class="absolute inset-0 flex items-center justify-center"
                                        >
                                            <div
                                                class="text-5xl font-bold tracking-wider text-white/30 sm:text-6xl md:text-7xl lg:text-8xl xl:text-9xl"
                                            >
                                                ID
                                            </div>
                                        </div>

                                        <div
                                            class="absolute inset-0 opacity-40"
                                        >
                                            <div
                                                class="cloud-1 absolute h-4 w-8 rounded-full bg-white/50 blur-sm sm:h-5 sm:w-10 md:h-6 md:w-12"
                                                style="top: 30%; left: 20%"
                                            ></div>
                                            <div
                                                class="cloud-2 absolute h-3 w-6 rounded-full bg-white/40 blur-sm sm:h-4 sm:w-8 md:h-5 md:w-10"
                                                style="top: 50%; left: 60%"
                                            ></div>
                                            <div
                                                class="cloud-3 absolute h-5 w-10 rounded-full bg-white/60 blur-sm sm:h-6 sm:w-12 md:h-7 md:w-14"
                                                style="top: 70%; left: 40%"
                                            ></div>
                                            <div
                                                class="cloud-4 absolute h-3 w-6 rounded-full bg-white/30 blur-sm sm:h-4 sm:w-8 md:h-5 md:w-10"
                                                style="top: 20%; left: 70%"
                                            ></div>
                                        </div>

                                        <div
                                            class="earth-shine absolute inset-0 rounded-full bg-gradient-to-tr from-transparent via-white/15 to-transparent"
                                        ></div>

                                        
                                        <div
                                            class="absolute -inset-3 animate-pulse rounded-full bg-gradient-to-r from-emerald-400/30 to-cyan-400/30 blur-xl sm:-inset-4 sm:blur-2xl"
                                            :class="viewMode === '3d'
                                                ? 'atmosphere-3d'
                                                : ''"
                                        ></div>

                                        <div
                                            class="absolute -right-2 -top-2 z-20 flex h-6 w-6 items-center justify-center rounded-full bg-emerald-500 shadow-lg sm:-right-3 sm:-top-3 sm:h-8 sm:w-8"
                                        >
                                            <div
                                                class="h-2 w-2 animate-pulse rounded-full bg-white sm:h-3 sm:w-3"
                                            ></div>
                                        </div>
                                    </div>

                                    <div
                                        class="absolute -bottom-16 left-1/2 z-[99] -translate-x-1/2 transform opacity-0 transition-opacity duration-300 group-hover:opacity-100 sm:-bottom-20"
                                    >
                                        <div
                                            class="rounded-xl border border-emerald-500/30 bg-slate-800/90 px-3 py-2 backdrop-blur-sm sm:px-4"
                                        >
                                            <p class="text-sm font-semibold text-slate-100">Indonesia</p>
                                            <p class="text-xs text-slate-400">17,504 Island ±275 Population</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <template
                                x-for="(node, index) in orbitingNodes"
                                :key="index"
                            >
                                <div
                                    class="orbit-node absolute"
                                    :class="`orbit-${index}`"
                                    style="z-index: 5"
                                >
                                    <div
                                        class="orbit-node-content group relative cursor-pointer"
                                        @click="selectNode(index)"
                                        @mouseenter="hoverNode(index)"
                                        @mouseleave="unhoverNode(index)"
                                    >
                                        
                                        <div
                                            class="node-container flex h-16 w-16 transform flex-col items-center justify-center rounded-2xl border-2 p-3 shadow-xl backdrop-blur-sm transition-all duration-300 sm:h-20 sm:w-20 sm:p-4 md:h-24 md:w-24"
                                            :class="node.active
                                                ? 'scale-110 sm:scale-125 border-emerald-400/80 bg-slate-800/90 shadow-2xl shadow-emerald-500/40 animate-pulse-slow z-20'
                                                : 'scale-100 border-emerald-600/50 bg-slate-800/70 group-hover:scale-105 sm:group-hover:scale-110 group-hover:bg-slate-800/80 group-hover:border-emerald-500/70 group-hover:shadow-2xl'"
                                            :class="viewMode === '3d'
                                                ? 'node-3d transform-gpu'
                                                : ''"
                                        >
                                            <div class="relative">
                                                <span
                                                    class="text-xl drop-shadow-sm filter sm:text-2xl md:text-3xl"
                                                    x-text="node.icon"
                                                ></span>
                                                <div
                                                    class="node-status absolute -right-1.5 -top-1.5 h-3 w-3 animate-pulse rounded-full border-2 border-slate-800 shadow-lg sm:-right-2 sm:-top-2 sm:h-4 sm:w-4"
                                                    :class="node.status ===
                                                    'optimal'
                                                        ? 'bg-emerald-400 shadow-emerald-400/50'
                                                        : node.status ===
                                                            'warning'
                                                          ? 'bg-amber-400 shadow-amber-400/50'
                                                          : 'bg-red-400 shadow-red-400/50'"
                                                ></div>
                                            </div>

                                            
                                            <span
                                                class="mt-1 hidden text-center text-xs font-bold leading-tight text-slate-200 sm:mt-2 sm:block"
                                                x-text="node.title"
                                            ></span>

                                            
                                            <div
                                                class="node-value absolute -bottom-3 left-1/2 -translate-x-1/2 transform rounded-full border border-emerald-500/50 bg-slate-800/90 px-2 py-1 text-xs font-bold text-emerald-400 shadow-lg backdrop-blur-sm sm:-bottom-4 sm:px-3"
                                                x-text="node.value"
                                            ></div>
                                        </div>

                                        
                                        <div
                                            x-show="node.hover"
                                            x-transition:enter="transition ease-out duration-300"
                                            x-transition:enter-start="opacity-0 transform scale-90"
                                            x-transition:enter-end="opacity-100 transform scale-100"
                                            x-transition:leave="transition ease-in duration-200"
                                            x-transition:leave-start="opacity-100 transform scale-100"
                                            x-transition:leave-end="opacity-0 transform scale-90"
                                            class="node-tooltip absolute left-1/2 top-full z-30 mt-4 w-72 -translate-x-1/2 transform rounded-xl border border-emerald-700/50 bg-slate-800/95 p-4 shadow-2xl backdrop-blur-sm sm:mt-6 sm:w-80 sm:rounded-2xl sm:p-6 md:w-96"
                                        >
                                            <div
                                                class="mb-3 flex items-center gap-3 sm:mb-4 sm:gap-4"
                                            >
                                                <div
                                                    class="flex h-12 w-12 items-center justify-center rounded-xl text-lg shadow-xl sm:h-16 sm:w-16 sm:rounded-2xl sm:text-xl md:text-2xl"
                                                    :class="node.color"
                                                >
                                                    <span
                                                        x-text="node.icon"
                                                    ></span>
                                                </div>
                                                <div>
                                                    <h4
                                                        class="text-lg font-bold text-slate-100 sm:text-xl"
                                                        x-text="node.title"
                                                    ></h4>
                                                    <p class="text-sm text-slate-400" x-text="
                                                            node.subtitle
                                                        "></p>
                                                </div>
                                            </div>

                                            <p class="mb-3 text-sm text-slate-300 sm:mb-4" x-text="
                                                    node.description
                                                "></p>

                                            <div
                                                class="grid grid-cols-2 gap-3 text-xs sm:gap-4 sm:text-sm"
                                            >
                                                <div
                                                    class="rounded-xl bg-slate-700/50 p-3 sm:rounded-2xl sm:p-4"
                                                >
                                                    <span
                                                        class="mb-1 block text-slate-400 sm:mb-2"
                                                        >Coverage</span
                                                    >
                                                    <span
                                                        class="text-lg font-bold text-slate-200 sm:text-lg"
                                                        x-text="node.coverage"
                                                    ></span>
                                                </div>
                                                <div
                                                    class="rounded-xl bg-slate-700/50 p-3 sm:rounded-2xl sm:p-4"
                                                >
                                                    <span
                                                        class="mb-1 block text-slate-400 sm:mb-2"
                                                        >Status</span
                                                    >
                                                    <span
                                                        class="text-lg font-bold sm:text-lg"
                                                        :class="node.trend ===
                                                        'stable'
                                                            ? 'text-emerald-400'
                                                            : 'text-amber-400'"
                                                        x-text="
                                                            node.trend ===
                                                            'stable'
                                                                ? 'Stable'
                                                                : 'At Risk'
                                                        "
                                                    ></span>
                                                </div>
                                            </div>

                                            <div
                                                class="mt-3 border-t border-slate-700 pt-3 sm:mt-4 sm:pt-4"
                                            >
                                                <p class="mb-2 text-xs text-slate-400">Key Metrics</p>
                                                <div
                                                    class="flex items-center gap-2"
                                                >
                                                    <div
                                                        class="h-2 flex-1 overflow-hidden rounded-full bg-slate-700 sm:h-3"
                                                    >
                                                        <div
                                                            class="relative h-2 rounded-full bg-gradient-to-r from-emerald-500 to-cyan-500 transition-all duration-1000 sm:h-3"
                                                            :style="`width: ${node.health}%`"
                                                        ></div>
                                                    </div>
                                                    <span
                                                        class="text-xs font-medium text-slate-300"
                                                        x-text="
                                                            `${node.health}%`
                                                        "
                                                    ></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </template>
                    </div>
                </div>

                
                <div
                    class="absolute bottom-4 right-4 z-20 flex flex-col gap-2 sm:bottom-6 sm:right-6 sm:gap-3"
                >
                    <button
                        @click="zoomIn"
                        class="control-btn group flex h-8 w-8 items-center justify-center rounded-lg border border-emerald-600/50 bg-slate-800/80 shadow-lg backdrop-blur-sm transition-all duration-200 hover:scale-110 hover:bg-slate-700/80 sm:h-10 sm:w-10 sm:rounded-xl lg:h-12 lg:w-12"
                    >
                        <span
                            class="text-sm text-slate-200 transition-colors group-hover:text-emerald-400 sm:text-lg"
                            >+</span
                        >
                    </button>
                    <button
                        @click="zoomOut"
                        class="control-btn group flex h-8 w-8 items-center justify-center rounded-lg border border-emerald-600/50 bg-slate-800/80 shadow-lg backdrop-blur-sm transition-all duration-200 hover:scale-110 hover:bg-slate-700/80 sm:h-10 sm:w-10 sm:rounded-xl lg:h-12 lg:w-12"
                    >
                        <span
                            class="text-sm text-slate-200 transition-colors group-hover:text-emerald-400 sm:text-lg"
                            >-</span
                        >
                    </button>
                    <button
                        @click="toggleFullscreen"
                        class="control-btn group flex h-8 w-8 items-center justify-center rounded-lg border border-emerald-600/50 bg-slate-800/80 shadow-lg backdrop-blur-sm transition-all duration-200 hover:scale-110 hover:bg-slate-700/80 sm:h-10 sm:w-10 sm:rounded-xl lg:h-12 lg:w-12"
                    >
                        <i class="fa-solid fa-compress"></i>
                    </button>
                </div>

                
                <div
                    class="data-stream absolute left-4 top-4 z-20 w-52 rounded-xl border border-emerald-700/50 bg-slate-800/80 p-3 shadow-xl backdrop-blur-sm sm:left-6 sm:top-6 sm:w-72 sm:rounded-2xl sm:p-4 lg:w-80 lg:p-6"
                >
                    <div class="mb-3 flex items-center justify-between sm:mb-4">
                        <div class="flex items-center gap-2">
                            <div
                                class="h-2 w-2 animate-pulse rounded-full bg-emerald-400 sm:h-3 sm:w-3"
                            ></div>
                            <span
                                class="text-xs font-semibold text-slate-200 sm:text-sm"
                                >Live Data Stream</span
                            >
                        </div>
                        <div
                            class="text-xs text-slate-400"
                            x-text="new Date().toLocaleTimeString()"
                        ></div>
                    </div>
                    <div
                        class="custom-scrollbar max-h-32 space-y-2 overflow-y-auto sm:max-h-40 sm:space-y-3 lg:max-h-48"
                    >
                        <template
                            x-for="(stream, index) in dataStream"
                            :key="index"
                        >
                            <div
                                class="animate-slide-in flex cursor-pointer items-start gap-2 rounded-lg bg-slate-700/30 p-2 transition-colors hover:bg-slate-700/50 sm:gap-3 sm:rounded-xl sm:p-3"
                            >
                                <span
                                    class="text-base text-emerald-400 sm:text-lg"
                                    x-text="stream.icon"
                                ></span>
                                <div class="flex-1">
                                    <p class="text-xs text-slate-300 sm:text-sm" x-text="
                                            stream.message
                                        "></p>
                                    <p class="mt-1 text-xs text-slate-400" x-text="
                                            stream.time
                                        "></p>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            
            <div
                x-show="selectedNode !== null"
                x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 transform translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform translate-y-4"
                class="analytics-panel mt-6 rounded-2xl border border-emerald-700/50 bg-slate-800/90 p-4 shadow-2xl backdrop-blur-sm sm:mt-8 sm:rounded-3xl sm:p-6 lg:p-8"
            >
                <div
                    class="mb-6 flex flex-col items-start justify-between gap-4 sm:mb-8 sm:flex-row"
                >
                    <div class="flex items-center gap-4">
                        <div
                            class="flex h-16 w-16 items-center justify-center rounded-2xl text-2xl shadow-xl sm:h-20 sm:w-20 sm:text-3xl md:text-4xl"
                            :class="orbitingNodes[selectedNode]?.color"
                        >
                            <span
                                x-text="orbitingNodes[selectedNode]?.icon"
                            ></span>
                        </div>
                        <div>
                            <h3
                                class="text-xl font-bold text-slate-100 sm:text-2xl lg:text-3xl"
                                x-text="orbitingNodes[selectedNode]?.title"
                            ></h3>
                            <p class="text-sm text-slate-400 sm:text-base" x-text="
                                    orbitingNodes[selectedNode]?.subtitle
                                "></p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button
                            @click="exportNodeData"
                            class="flex transform items-center gap-2 rounded-xl bg-gradient-to-r from-emerald-600 to-cyan-600 px-4 py-2 text-xs text-white shadow-lg transition-all duration-200 hover:scale-105 hover:from-emerald-500 hover:to-cyan-500 hover:shadow-emerald-500/25 sm:px-6 sm:py-3 sm:text-sm"
                        >
                            <i
                                class="fa-solid fa-file-export h-4 w-4 md:h-5 md:w-5"
                            ></i>
                            Export
                        </button>
                        <button
                            @click="selectedNode = null"
                            class="group flex h-8 w-8 items-center justify-center rounded-xl bg-slate-700/60 transition-all duration-200 hover:scale-110 hover:bg-slate-700 sm:h-10 sm:w-10 lg:w-12"
                        >
                            <svg class="h-4 w-4 text-slate-400 transition-colors group-hover:text-red-400 sm:h-5 sm:w-5 lg:h-6 lg:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12M6 6l-12-12m0 0h-12-12-12m0 0h-12-12-12z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:gap-8 lg:grid-cols-3">
                    
                    <div class="space-y-4 sm:space-y-6 lg:col-span-1">
                        <h4
                            class="flex items-center gap-3 text-lg font-bold text-slate-100 sm:text-xl"
                        >
                            Ecosystem Metrics
                            <div
                                class="h-2 w-2 animate-pulse rounded-full bg-emerald-400 sm:h-3 sm:w-3"
                            ></div>
                        </h4>
                        <div class="space-y-3 sm:space-y-4">
                            <div
                                class="group rounded-xl border border-slate-600/50 bg-slate-700/50 p-4 transition-colors hover:border-emerald-600/50 sm:rounded-2xl sm:p-6"
                            >
                                <p class="mb-2 text-xs text-slate-400 sm:text-sm">Total Area</p>
                                <p class="text-xl font-bold text-emerald-400 sm:text-2xl lg:text-3xl" x-text="
                                        orbitingNodes[selectedNode]?.area
                                    "></p>
                                <div
                                    class="mt-2 text-xs text-slate-400 sm:text-sm"
                                    x-text="
                                        orbitingNodes[selectedNode]?.percentage
                                    "
                                ></div>
                            </div>
                            <div
                                class="group rounded-xl border border-slate-600/50 bg-slate-700/50 p-4 transition-colors hover:border-emerald-600/50 sm:rounded-2xl sm:p-6"
                            >
                                <p class="mb-2 text-xs text-slate-400 sm:text-sm">Biodiversity Level</p>
                                <p class="text-xl font-bold text-amber-400 sm:text-2xl lg:text-3xl" x-text="
                                        orbitingNodes[selectedNode]
                                            ?.biodiversity
                                    "></p>
                                <div
                                    class="mt-2 text-xs text-slate-400 sm:text-sm"
                                >
                                    Species Richness
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="space-y-4 sm:space-y-6 lg:col-span-1">
                        <h4
                            class="flex items-center gap-3 text-lg font-bold text-slate-100 sm:text-xl"
                        >
                            Conservation Status
                            <div
                                class="h-2 w-2 animate-pulse rounded-full bg-cyan-400 sm:h-3 sm:w-3"
                            ></div>
                        </h4>
                        <div
                            class="rounded-xl border border-slate-600/50 bg-slate-700/50 p-4 transition-colors hover:border-emerald-600/50 sm:rounded-2xl sm:p-6"
                        >
                            <div
                                class="mb-3 flex items-center justify-between sm:mb-4"
                            >
                                <h5 class="font-semibold text-slate-100">
                                    Current Status
                                </h5>
                                <span
                                    class="animate-pulse-slow rounded-full px-2 py-1 text-xs"
                                    :class="orbitingNodes[selectedNode]
                                        ?.trend === 'stable'
                                        ? 'bg-emerald-900/30 text-emerald-400'
                                        : 'bg-amber-900/30 text-amber-400'"
                                    x-text="
                                        orbitingNodes[selectedNode]?.trend ===
                                        'stable'
                                            ? 'Protected'
                                            : 'At Risk'
                                    "
                                ></span>
                            </div>
                            <p class="mb-3 text-xs text-slate-300 sm:mb-4 sm:text-sm" x-text="
                                    orbitingNodes[selectedNode]?.analysis
                                "></p>
                            <div class="space-y-2">
                                <div class="flex items-center justify-between">
                                    <span
                                        class="text-xs text-slate-400 sm:text-sm"
                                        >Health Score</span
                                    >
                                    <span
                                        class="text-xs font-bold text-slate-200 sm:text-sm"
                                        x-text="
                                            `${orbitingNodes[selectedNode]?.health}%`
                                        "
                                    ></span>
                                </div>
                                <div
                                    class="h-2 w-full overflow-hidden rounded-full bg-slate-600 sm:h-3"
                                >
                                    <div
                                        class="relative h-2 rounded-full bg-gradient-to-r from-emerald-500 to-cyan-500 transition-all duration-1000 sm:h-3"
                                    >
                                        <div
                                            class="animate-shimmer absolute inset-0 bg-white/20"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="space-y-4 sm:space-y-6 lg:col-span-1">
                        <h4
                            class="flex items-center gap-3 text-lg font-bold text-slate-100 sm:text-xl"
                        >
                            Quick Actions
                            <div
                                class="h-2 w-2 animate-pulse rounded-full bg-amber-400 sm:h-3 sm:w-3"
                            ></div>
                        </h4>
                        <div class="space-y-3 sm:space-y-4">
                            <div>
                                <h5
                                    class="mb-2 text-xs font-semibold text-slate-100 sm:mb-3 sm:text-sm"
                                >
                                    Connected Ecosystems
                                </h5>
                                <div class="flex flex-wrap gap-2">
                                    <template
                                        x-for="
                                            connection in
                                            orbitingNodes[selectedNode]
                                                ?.connections
                                        "
                                        :key="connection"
                                    >
                                        <span
                                            class="transform cursor-pointer rounded-lg border border-emerald-600/50 bg-slate-700/60 px-2 py-1 text-xs font-medium text-slate-300 transition-all duration-200 hover:scale-105 hover:border-emerald-400/50 hover:bg-emerald-900/20 sm:rounded-xl sm:px-3 sm:text-sm"
                                        >
                                            <span x-text="connection"></span>
                                        </span>
                                    </template>
                                </div>
                            </div>
                            <div>
                                <h5
                                    class="mb-2 text-xs font-semibold text-slate-100 sm:mb-3 sm:text-sm"
                                >
                                    Conservation Actions
                                </h5>
                                <div class="space-y-2 sm:space-y-3">
                                    <template
                                        x-for="
                                            (action, index) in
                                            orbitingNodes[selectedNode]?.actions
                                        "
                                        :key="action"
                                    >
                                        <div
                                            class="animate-slide-in group flex cursor-pointer items-center gap-2 rounded-lg border border-slate-600/50 bg-slate-700/30 p-2 transition-all duration-200 hover:border-emerald-600/50 hover:bg-slate-700/40 sm:gap-3 sm:rounded-xl sm:p-3"
                                            :style="`animation-delay: ${index * 0.1}s`"
                                        >
                                            <div
                                                class="h-2 w-2 rounded-full bg-emerald-400 transition-transform group-hover:scale-150 sm:h-3 sm:w-3"
                                            ></div>
                                            <span
                                                class="text-xs text-slate-300 transition-colors group-hover:text-slate-200 sm:text-sm"
                                                x-text="action"
                                            ></span>
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
        @keyframes
        gradient-shift {
               0%, 100% { background-position: 0% 50%; }
               50% { background-position: 100% 50%; }
           }
        @keyframes
        fade-in {
               from { opacity: 0; transform: translateY(20px); }
               to { opacity: 1; transform: translateY(0); }
           }
        @keyframes
        slide-up {
               from { opacity: 0; transform: translateY(30px); }
               to { opacity: 1; transform: translateY(0); }
           }
        @keyframes
        slide-up-delay {
               from { opacity: 0; transform: translateY(30px); }
               to { opacity: 1; transform: translateY(0); }
           }
        @keyframes
        scale-in {
               from { opacity: 0; transform: scale(0.95); }
               to { opacity: 1; transform: scale(1); }
           }
        @keyframes
        float {
               0%, 100% { transform: translateY(0px) translateX(0px); }
               25% { transform: translateY(-10px) translateX(5px); }
               50% { transform: translateY(5px) translateX(-5px); }
               75% { transform: translateY(-5px) translateX(10px); }
           }
        @keyframes
        pulse-slow {
               0%, 100% { opacity: 1; }
               50% { opacity: 0.7; }
           }
        @keyframes
        shimmer {
               0% { transform: translateX(-100%); }
               100% { transform: translateX(100%); }
           }
        @keyframes
        slide-in {
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
        @keyframes
        earth-3d-rotate {
               from { transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg); }
               to { transform: rotateX(360deg) rotateY(360deg) rotateZ(360deg); }
           }
        @keyframes
        earth-texture-rotate {
               from { transform: rotate(0deg); }
               to { transform: rotate(-360deg); }
           }
        @keyframes
        earth-shine-pulse {
               0%, 100% { opacity: 0; transform: scale(1); }
               50% { opacity: 0.3; transform: scale(1.02); }
           }
        @keyframes
        cloud-drift-1 {
               0%, 100% { transform: translateX(0px) translateY(0px) scale(1); }
               25% { transform: translateX(10px) translateY(-3px) scale(1.05); }
               50% { transform: translateX(5px) translateY(2px) scale(0.95); }
               75% { transform: translateX(-5px) translateY(-1px) scale(1.02); }
           }
        @keyframes
        cloud-drift-2 {
               0%, 100% { transform: translateX(0px) translateY(0px) scale(1); }
               33% { transform: translateX(-8px) translateY(2px) scale(1.03); }
               66% { transform: translateX(4px) translateY(-2px) scale(0.97); }
           }
        @keyframes
        cloud-drift-3 {
               0%, 100% { transform: translateX(0px) translateY(0px) scale(1); }
               20% { transform: translateX(6px) translateY(1px) scale(1.02); }
               40% { transform: translateX(-3px) translateY(-1px) scale(0.98); }
               60% { transform: translateX(-3px) translateY(-1px) scale(1.01); }
               80% { transform: translateX(-4px) translateY(-2px) scale(0.99); }
           }
        @keyframes
        cloud-drift-4 {
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
        @keyframes
        connection-3d-dash {
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
        @supports
        not (backdrop-filter: blur(12px)) {
               .backdrop-blur-md {
                   background-color: rgba(30, 41, 59, 0.95);
               }
           }

           /* Enhanced Responsive Adjustments */
        @media (max-width: 640px)
        {
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
        @media (min-width: 641px)
        and (max-width: 1023px) {
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
        @media (min-width: 1024px)
        {
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
        @media (prefers-reduced-motion: reduce)
        {
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
        @media (min-width: 1024px)
        {
               .orbit-node,
               .earth-container,
               .node-3d {
                   transform: translateZ(0);
               }
           }
    </style>
</div>

@push ('scripts')
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
                        connections: [
                            'Tropical Rainforest',
                            'Mountain Forest',
                            'Mangrove',
                            'Peatland',
                        ],
                        actions: [
                            'Expand protected forest areas',
                            'Implement sustainable logging practices',
                            'Strengthen anti-deforestation measures',
                        ],
                        description:
                            'Total forest coverage across all Indonesian forest types including primary and secondary forests.',
                        analysis:
                            'Forest coverage remains stable with ongoing conservation efforts showing positive results.',
                        hover: false,
                        active: false,
                        orbitRadius: 200,
                        orbitSpeed: 0.8,
                        startAngle: 0,
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
                        connections: [
                            'All Forest Types',
                            'Wildlife Corridors',
                            'Mountain Forest',
                        ],
                        actions: [
                            'Combat illegal logging activities',
                            'Support community-based forest management',
                            'Restore degraded rainforest areas',
                        ],
                        description:
                            'Tropical lowland rainforests with exceptional biodiversity and carbon storage capacity.',
                        analysis:
                            'Rainforest areas face pressure from agricultural expansion and logging activities.',
                        hover: false,
                        active: false,
                        orbitRadius: 250,
                        orbitSpeed: 1.0,
                        startAngle: 40,
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
                        connections: [
                            'All Forest Types',
                            'Tropical Rainforest',
                            'Water Systems',
                        ],
                        actions: [
                            'Protect watershed areas',
                            'Prevent soil erosion on slopes',
                            'Monitor climate change impacts',
                        ],
                        description:
                            'Mountain forest ecosystems critical for water regulation and unique biodiversity.',
                        analysis:
                            'Mountain forests remain relatively stable but face climate change threats.',
                        hover: false,
                        active: false,
                        orbitRadius: 300,
                        orbitSpeed: 0.6,
                        startAngle: 80,
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
                        connections: [
                            'Coastal Systems',
                            'Marine Ecosystems',
                            'Peatland',
                        ],
                        actions: [
                            'Implement mangrove restoration programs',
                            'Control coastal development',
                            'Support sustainable aquaculture',
                        ],
                        description:
                            "Indonesia has world's largest mangrove forests, critical for coastal protection.",
                        analysis:
                            'Mangrove areas are declining due to aquaculture expansion and coastal development.',
                        hover: false,
                        active: false,
                        orbitRadius: 200,
                        orbitSpeed: 1.2,
                        startAngle: 120,
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
                        connections: [
                            'All Forest Types',
                            'Mangrove',
                            'Water Systems',
                        ],
                        actions: [
                            'Prevent peatland drainage and burning',
                            'Restore degraded peatland areas',
                            'Develop sustainable peatland management',
                        ],
                        description:
                            'Tropical peat ecosystems with significant carbon storage and unique biodiversity.',
                        analysis:
                            'Peatlands face threats from drainage, burning, and conversion to agriculture.',
                        hover: false,
                        active: false,
                        orbitRadius: 250,
                        orbitSpeed: 0.9,
                        startAngle: 160,
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
                        connections: [
                            'Wildlife Corridors',
                            'Agricultural Areas',
                            'Forest Systems',
                        ],
                        actions: [
                            'Prevent overgrazing in sensitive areas',
                            'Control invasive species spread',
                            'Maintain traditional land management practices',
                        ],
                        description:
                            'Grassland and savanna ecosystems supporting unique wildlife and traditional livelihoods.',
                        analysis:
                            'Grassland areas remain stable but face pressure from agricultural expansion.',
                        hover: false,
                        active: false,
                        orbitRadius: 300,
                        orbitSpeed: 0.7,
                        startAngle: 200,
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
                        connections: [
                            'Marine Ecosystems',
                            'Coastal Systems',
                            'Seagrass Beds',
                        ],
                        actions: [
                            'Reduce coral bleaching impacts',
                            'Control destructive fishing practices',
                            'Establish marine protected areas',
                        ],
                        description:
                            "Indonesia has 17% of world's coral reefs with exceptional marine biodiversity.",
                        analysis:
                            'Coral reefs face threats from climate change, pollution, and destructive fishing.',
                        hover: false,
                        active: false,
                        orbitRadius: 200,
                        orbitSpeed: 1.1,
                        startAngle: 240,
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
                        connections: [
                            'Marine Ecosystems',
                            'Coral Reef',
                            'Coastal Systems',
                        ],
                        actions: [
                            'Reduce coastal pollution impacts',
                            'Prevent seabed disturbance',
                            'Restore degraded seagrass areas',
                        ],
                        description:
                            "Indonesia has 10% of world's seagrass beds, critical for marine life.",
                        analysis:
                            'Seagrass beds are declining due to coastal development and pollution.',
                        hover: false,
                        active: false,
                        orbitRadius: 250,
                        orbitSpeed: 0.8,
                        startAngle: 280,
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
                        connections: [
                            'Marine Ecosystems',
                            'Coral Reef',
                            'Seagrass Beds',
                        ],
                        actions: [
                            'Prevent overfishing in deep waters',
                            'Control marine pollution',
                            'Develop sustainable marine resource management',
                        ],
                        description:
                            'Deep sea zones including pelagic and benthic areas within Indonesian waters.',
                        analysis:
                            'Deep sea ecosystems remain relatively stable but face pressure from fishing activities.',
                        hover: false,
                        active: false,
                        orbitRadius: 300,
                        orbitSpeed: 0.5,
                        startAngle: 320,
                    },
                ],

                // Enhanced Data Stream
                dataStream: [
                    {
                        icon: '📡',
                        message: 'Satellite data synchronized successfully',
                        time: '2 min ago',
                    },
                    {
                        icon: '🌡️',
                        message: 'Temperature anomaly detected in Kalimantan',
                        time: '5 min ago',
                    },
                    {
                        icon: '💧',
                        message: 'Water quality improving in coral reef areas',
                        time: '12 min ago',
                    },
                    {
                        icon: '🌳',
                        message: 'Reforestation milestone achieved in Sumatra',
                        time: '25 min ago',
                    },
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
                        window.addEventListener(
                            'resize',
                            this.handleResize.bind(this),
                        );

                        // Add keyboard navigation
                        document.addEventListener(
                            'keydown',
                            this.handleKeyboard.bind(this),
                        );
                    });
                },

                handleResize() {
                    this.isMobile = window.innerWidth < 640;
                    this.isTablet =
                        window.innerWidth >= 640 && window.innerWidth < 1024;
                    this.isDesktop = window.innerWidth >= 1024;
                },

                handleKeyboard(event) {
                    switch (event.key) {
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
                        return (
                            baseSize *
                            (tier === 1 ? 0.4 : tier === 2 ? 0.5 : 0.6)
                        );
                    }
                    if (this.isTablet) {
                        return (
                            baseSize *
                            (tier === 1 ? 0.35 : tier === 2 ? 0.45 : 0.55)
                        );
                    }
                    return (
                        baseSize * (tier === 1 ? 0.3 : tier === 2 ? 0.4 : 0.5)
                    );
                },

                initFloatingParticles() {
                    const container =
                        document.getElementById('floatingParticles');
                    const particleCount = this.isMobile
                        ? 3
                        : this.isTablet
                          ? 4
                          : 6;

                    for (let i = 0; i < particleCount; i++) {
                        const particle = document.createElement('div');
                        const size = Math.random() * 3 + 1;
                        const opacity = Math.random() * 0.3 + 0.1;

                        particle.className =
                            'absolute rounded-full animate-float';
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
                    const particleContainer =
                        document.getElementById('particleCanvas');

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
                            opacity: Math.random() * 0.5 + 0.2,
                        });
                    }

                    const animateParticles = () => {
                        ctx.clearRect(0, 0, canvas.width, canvas.height);

                        particles.forEach((particle) => {
                            particle.x += particle.vx;
                            particle.y += particle.vy;

                            if (particle.x < 0 || particle.x > canvas.width)
                                particle.vx *= -1;
                            if (particle.y < 0 || particle.y > canvas.height)
                                particle.vy *= -1;

                            ctx.beginPath();
                            ctx.arc(
                                particle.x,
                                particle.y,
                                particle.size,
                                0,
                                Math.PI * 2,
                            );
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
                            const elapsed =
                                (currentTime - this.startTime) / 1000;
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

                        const angleInRadians =
                            (node.startAngle * Math.PI) / 180 +
                            elapsed * node.orbitSpeed * 0.5;
                        const x =
                            centerX +
                            Math.cos(angleInRadians) * node.orbitRadius;
                        const y =
                            centerY +
                            Math.sin(angleInRadians) * node.orbitRadius;

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

                    const angleInRadians =
                        (node.startAngle * Math.PI) / 180 +
                        elapsed * node.orbitSpeed * 0.5;
                    const x =
                        centerX + Math.cos(angleInRadians) * node.orbitRadius;
                    const y =
                        centerY + Math.sin(angleInRadians) * node.orbitRadius;

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
                        time: 'Just now',
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
                        this.orbitingNodes.forEach((node) => {
                            node.health = Math.floor(Math.random() * 30) + 70;
                        });
                        this.refreshing = false;

                        this.dataStream.unshift({
                            icon: '🔄',
                            message: 'Ecosystem data synchronized successfully',
                            time: 'Just now',
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
                        {
                            icon: '🌪️',
                            message: 'Weather pattern analysis complete',
                        },
                        { icon: '🐠', message: 'Marine life survey updated' },
                        {
                            icon: '🌱',
                            message: 'Soil nutrient levels monitored',
                        },
                        { icon: '🏭', message: 'Industrial emissions tracked' },
                        { icon: '🌍', message: 'Ecosystem health updated' },
                        { icon: '🔬', message: 'Research data collected' },
                    ];

                    const newItem =
                        messages[Math.floor(Math.random() * messages.length)];
                    newItem.time = 'Just now';
                    this.dataStream.unshift(newItem);

                    if (this.dataStream.length > 4) {
                        this.dataStream.pop();
                    }
                },

                updateTime() {
                    setInterval(() => {
                        const times = document.querySelectorAll(
                            '[x-text*="toLocaleTimeString"]',
                        );
                        times.forEach((el) => {
                            if (el.__x) {
                                el.__x.$el.textContent =
                                    new Date().toLocaleTimeString();
                            }
                        });
                    }, 1000);
                },

                exportNodeData() {
                    if (this.selectedNode !== null) {
                        const node = this.orbitingNodes[this.selectedNode];

                        // Create a downloadable JSON file with node data
                        const dataStr = JSON.stringify(node, null, 2);
                        const dataUri =
                            'data:application/json;charset=utf-8,' +
                            encodeURIComponent(dataStr);

                        const exportFileDefaultName = `${node.title.replace(/\s+/g, '_')}_data.json`;

                        const linkElement = document.createElement('a');
                        linkElement.setAttribute('href', dataUri);
                        linkElement.setAttribute(
                            'download',
                            exportFileDefaultName,
                        );
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
            };
        }
    </script>
@endpush
