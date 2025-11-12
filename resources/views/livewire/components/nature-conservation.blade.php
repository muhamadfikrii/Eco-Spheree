<div class="font-inter bg-grid-pattern bg-gradient-to-br from-gray-900 to-gray-800">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        }
        .gradient-bg-teal {
            background: linear-gradient(135deg, #0d9488 0%, #0f766e 100%);
        }
        .gradient-bg-emerald {
            background: linear-gradient(135deg, #059669 0%, #047857 100%);
        }
        .card-hover {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .card-hover:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }
        .floating {
            animation: floating 6s ease-in-out infinite;
        }
        @keyframes floating {
            0% { transform: translate(0, 0px); }
            50% { transform: translate(0, -15px); }
            100% { transform: translate(0, 0px); }
        }
        .text-gradient {
            background: linear-gradient(135deg, #10b981 0%, #0d9488 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;
        }
        .text-gradient-teal {
            background: linear-gradient(135deg, #0d9488 0%, #0f766e 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;
        }
        .nature-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%2310b981' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .eco-badge {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            box-shadow: 0 4px 15px rgba(5, 150, 105, 0.3);
        }
        .conservation-badge {
            background: linear-gradient(135deg, #0d9488 0%, #0f766e 100%);
            box-shadow: 0 4px 15px rgba(13, 148, 136, 0.3);
        }
        .gauge {
            transition: all 0.5s ease-in-out;
        }
        .leaf-float {
            animation: leaf-float 8s ease-in-out infinite;
        }
        @keyframes leaf-float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        .glow {
            box-shadow: 0 0 20px rgba(16, 185, 129, 0.3);
        }
        
        /* Mobile scrollbar styling */
        .custom-scrollbar {
            scrollbar-width: thin;
            scrollbar-color: rgba(16, 185, 129, 0.5) rgba(255, 255, 255, 0.1);
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 3px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(16, 185, 129, 0.5);
            border-radius: 3px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: rgba(16, 185, 129, 0.7);
        }
        
        /* Responsive improvements */
        @media (max-width: 640px) {
            .mobile-scroll-x {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
            .mobile-scroll-x::-webkit-scrollbar {
                height: 4px;
            }
            .mobile-scroll-x::-webkit-scrollbar-track {
                background: rgba(255, 255, 255, 0.1);
            }
            .mobile-scroll-x::-webkit-scrollbar-thumb {
                background: rgba(16, 185, 129, 0.5);
                border-radius: 2px;
            }
            
            /* Dashboard specific mobile styles */
            .dashboard-container {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                min-width: 100%;
            }
            .dashboard-content {
                min-width: 700px; /* Ensure minimum width for proper display */
            }
        }
        
        /* Touch-friendly hover states */
        @media (hover: none) {
            .card-hover:hover {
                transform: none;
            }
        }
        
        /* Enhanced visualization styles */
        .tree {
            position: relative;
            transition: all 0.5s ease;
        }
        .tree-trunk {
            background: linear-gradient(to right, #7d4f2a, #9c6634);
            border-radius: 0 0 2px 2px;
        }
        .tree-crown {
            background: radial-gradient(circle, #10b981, #059669);
            border-radius: 50%;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .tree-crown::before {
            content: '';
            position: absolute;
            top: 20%;
            left: 20%;
            width: 60%;
            height: 60%;
            background: radial-gradient(circle, rgba(255,255,255,0.3), transparent);
            border-radius: 50%;
        }
        .water {
            background: linear-gradient(to bottom, rgba(59, 130, 246, 0.7), rgba(37, 99, 235, 0.9));
            border-radius: 50% 50% 0 0;
            position: relative;
            overflow: hidden;
        }
        .water::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 200%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            animation: water-shimmer 3s infinite;
        }
        @keyframes water-shimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }
        .sun {
            background: radial-gradient(circle, #fbbf24, #f59e0b);
            border-radius: 50%;
            position: absolute;
            box-shadow: 0 0 20px rgba(251, 191, 36, 0.5);
            transition: all 0.5s ease;
        }
        .cloud {
            background: rgba(255, 255, 255, 0.7);
            border-radius: 50%;
            position: absolute;
        }
        .cloud::before, .cloud::after {
            content: '';
            position: absolute;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 50%;
        }
        .cloud::before {
            width: 50px;
            height: 50px;
            top: -25px;
            left: 10px;
        }
        .cloud::after {
            width: 60px;
            height: 60px;
            top: -15px;
            right: 10px;
        }
        .bird {
            position: absolute;
            transition: all 0.5s ease;
        }
        .bird::before {
            content: '';
            position: absolute;
            width: 20px;
            height: 2px;
            background: #333;
            transform-origin: center;
        }
        .bird::after {
            content: '';
            position: absolute;
            width: 10px;
            height: 10px;
            background: #333;
            border-radius: 50%;
            top: -4px;
            left: 5px;
        }
        .bird-wing {
            position: absolute;
            width: 15px;
            height: 2px;
            background: #333;
            top: 0;
            left: 0;
            transform-origin: center right;
            animation: flap 0.5s infinite alternate;
        }
        .bird-wing.right {
            transform-origin: center left;
            left: auto;
            right: 0;
        }
        @keyframes flap {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(30deg); }
        }
    </style>

    <!-- Explore Deeper Section -->
    <section class="relative py-12 sm:py-16 lg:py-20 overflow-hidden nature-pattern" x-data="natureConservation()">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full opacity-10">
            <div class="absolute top-10 left-10 w-40 h-40 sm:w-56 sm:h-56 lg:w-72 lg:h-72 bg-emerald-600 rounded-full mix-blend-multiply filter blur-xl opacity-20 floating"></div>
            <div class="absolute top-10 right-10 w-40 h-40 sm:w-56 sm:h-56 lg:w-72 lg:h-72 bg-teal-600 rounded-full mix-blend-multiply filter blur-xl opacity-20 floating" style="animation-delay: -2s;"></div>
            <div class="absolute bottom-10 left-1/2 w-40 h-40 sm:w-56 sm:h-56 lg:w-72 lg:h-72 bg-green-600 rounded-full mix-blend-multiply filter blur-xl opacity-20 floating" style="animation-delay: -4s;"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="text-center mb-10 sm:mb-12 lg:mb-16" data-aos="fade-up">
                <div class="inline-flex items-center px-3 py-1 sm:px-4 mb-4 text-xs font-semibold text-white eco-badge rounded-full glow">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    NATURE CONSERVATION
                </div>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-4">Explore Our <span class="text-gradient">Natural Heritage</span></h2>
                <p class="text-lg sm:text-xl text-gray-300 max-w-3xl mx-auto px-4">Discover the beauty of our planet and learn how we can work together to preserve it for future generations.</p>
            </div>

            <!-- Interactive Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 mb-12 sm:mb-16">
                <!-- Card 1 - Forest Conservation -->
                <div class="bg-gray-800 rounded-2xl shadow-2xl overflow-hidden card-hover border border-gray-700" 
                     data-aos="fade-up" 
                     data-aos-delay="100"
                     @mouseenter="animateCard(1)"
                     @mouseleave="resetCard(1)">
                    <div class="p-5 sm:p-6">
                        <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center mb-4 glow">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-white mb-2">Forest Conservation</h3>
                        <p class="text-gray-400 mb-4 text-sm sm:text-base">Protect vital ecosystems and biodiversity through sustainable forest management and reforestation efforts.</p>
                        <div class="flex items-center text-emerald-400 font-medium">
                            <span><a href="{{ route('protect') }}">Protect</a></span>
                            <svg class="w-4 h-4 ml-2 transform transition-transform" :class="{'translate-x-1': card1Hover}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="h-1 bg-gradient-to-r from-emerald-400 to-emerald-600 transition-all duration-500" :style="card1Width"></div>
                </div>

                <!-- Card 2 - Wildlife Protection -->
                <div class="bg-gray-800 rounded-2xl shadow-2xl overflow-hidden card-hover border border-gray-700" 
                     data-aos="fade-up" 
                     data-aos-delay="200"
                     @mouseenter="animateCard(2)"
                     @mouseleave="resetCard(2)">
                    <div class="p-5 sm:p-6">
                        <div class="w-12 h-12 gradient-bg-teal rounded-xl flex items-center justify-center mb-4 glow">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-white mb-2">Wildlife Protection</h3>
                        <p class="text-gray-400 mb-4 text-sm sm:text-base">Safeguard endangered species and their habitats through conservation programs and community engagement.</p>
                        <div class="flex items-center text-teal-400 font-medium">
                            <span><a href="{{ route('discover') }}">Discover</a></span>
                            <svg class="w-4 h-4 ml-2 transform transition-transform" :class="{'translate-x-1': card2Hover}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="h-1 bg-gradient-to-r from-teal-400 to-teal-600 transition-all duration-500" :style="card2Width"></div>
                </div>

                <!-- Card 3 - Sustainable Living -->
                <div class="bg-gray-800 rounded-2xl shadow-2xl overflow-hidden card-hover border border-gray-700" 
                     data-aos="fade-up" 
                     data-aos-delay="300"
                     @mouseenter="animateCard(3)"
                     @mouseleave="resetCard(3)">
                    <div class="p-5 sm:p-6">
                        <div class="w-12 h-12 gradient-bg-emerald rounded-xl flex items-center justify-center mb-4 glow">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-white mb-2">Sustainable Living</h3>
                        <p class="text-gray-400 mb-4 text-sm sm:text-base">Embrace eco-friendly practices that reduce your environmental footprint and promote harmony with nature.</p>
                        <div class="flex items-center text-green-400 font-medium">
                            <span></span>
                            <span><a href="{{ route('learn') }}">Learn More</a></span>
                            <svg class="w-4 h-4 ml-2 transform transition-transform" :class="{'translate-x-1': card3Hover}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="h-1 bg-gradient-to-r from-green-400 to-emerald-600 transition-all duration-500" :style="card3Width"></div>
                </div>
            </div>

            <!-- Interactive Nature Dashboard -->
            <div class="bg-gray-800 rounded-2xl shadow-2xl p-6 sm:p-8 mb-12 sm:mb-16 border border-gray-700" data-aos="fade-up">
                <div class="flex flex-col md:flex-row items-center justify-between mb-6 sm:mb-8">
                    <div class="mb-4 md:mb-0 text-center md:text-left">
                        <h3 class="text-xl sm:text-2xl font-bold text-white mb-2">Nature Conservation Dashboard</h3>
                        <p class="text-gray-400 text-sm sm:text-base">Track our progress in preserving natural habitats and promoting biodiversity</p>
                    </div>
                    <button @click="resetDashboard" class="px-3 py-2 sm:px-4 bg-emerald-900 text-emerald-300 rounded-lg font-medium hover:bg-emerald-800 transition-colors flex items-center border border-emerald-700 text-sm">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                        </svg>
                        Reset View
                    </button>
                </div>
                
                <!-- Dashboard Container with Mobile Scroll -->
                <div class="dashboard-container custom-scrollbar overflow-x-auto overflow-y-auto">
                    <div class="dashboard-content flex flex-col xl:flex-row gap-6 lg:gap-8">
                        <!-- Controls -->
                        <div class="xl:w-1/3 space-y-4 sm:space-y-6">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <label class="text-gray-300 font-medium text-sm sm:text-base">Forest Cover</label>
                                    <span class="text-emerald-400 font-semibold text-sm sm:text-base" x-text="forestCover + '%'"></span>
                                </div>
                                <input type="range" min="0" max="100" x-model="forestCover" class="w-full h-2 bg-gray-700 rounded-lg appearance-none cursor-pointer [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:bg-emerald-500">
                                <p class="text-xs text-gray-500 mt-1">Healthy forest cover supports biodiversity and regulates climate</p>
                            </div>
                            
                            <div>
                                <div class="flex justify-between mb-2">
                                    <label class="text-gray-300 font-medium text-sm sm:text-base">Wildlife Population</label>
                                    <span class="text-teal-400 font-semibold text-sm sm:text-base" x-text="wildlifePopulation + '%'"></span>
                                </div>
                                <input type="range" min="0" max="100" x-model="wildlifePopulation" class="w-full h-2 bg-gray-700 rounded-lg appearance-none cursor-pointer [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:bg-teal-500">
                                <p class="text-xs text-gray-500 mt-1">Thriving wildlife indicates healthy ecosystems</p>
                            </div>
                            
                            <div>
                                <div class="flex justify-between mb-2">
                                    <label class="text-gray-300 font-medium text-sm sm:text-base">Community Engagement</label>
                                    <span class="text-green-400 font-semibold text-sm sm:text-base" x-text="communityEngagement + '%'"></span>
                                </div>
                                <input type="range" min="0" max="100" x-model="communityEngagement" class="w-full h-2 bg-gray-700 rounded-lg appearance-none cursor-pointer [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:bg-green-500">
                                <p class="text-xs text-gray-500 mt-1">Local communities are essential for conservation success</p>
                            </div>

                            <!-- Conservation Score -->
                            <div class="bg-gray-700 rounded-lg p-4 mt-6 border border-gray-600">
                                <div class="text-center mb-2">
                                    <span class="text-sm font-medium text-emerald-300">Conservation Health Score</span>
                                </div>
                                <div class="relative h-4 bg-gray-600 rounded-full overflow-hidden">
                                    <div class="absolute top-0 left-0 h-full rounded-full transition-all duration-500 bg-gradient-to-r from-emerald-400 to-teal-500" 
                                         :style="'width: ' + conservationScore + '%'"></div>
                                </div>
                                <div class="flex justify-between mt-1 text-xs text-emerald-300">
                                    <span>Needs Work</span>
                                    <span>Good</span>
                                    <span>Excellent</span>
                                </div>
                                <div class="text-center mt-2">
                                    <span class="text-lg font-bold text-emerald-400" x-text="conservationScore + '%'"></span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Enhanced Visualization -->
                       <div class="xl:w-2/3 bg-gradient-to-br overflow-auto lg:overflow-hidden from-gray-700 to-gray-600 rounded-xl p-4 sm:p-6  border border-gray-600">
                            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 gap-2">
                                <h4 class="font-semibold text-white text-sm sm:text-base">Ecosystem Health Visualization</h4>
                                <span class="text-sm font-medium px-2 py-1 rounded-lg bg-emerald-900/80 backdrop-blur text-emerald-300 border border-emerald-700/50 whitespace-nowrap" 
                                    x-text="getConservationStatus()"></span>
                            </div>
                            
                            <!-- Modern Nature Visualization -->
                            <div class="h-64 sm:h-80 lg:h-96 relative bg-gradient-to-b from-sky-300/20 via-sky-400/10 to-transparent rounded-xl overflow-hidden shadow-inner">
                                <!-- Sky with Dynamic Elements -->
                                <div class="absolute inset-0 bg-gradient-to-b from-sky-400/30 via-blue-300/20 to-transparent rounded-t-xl">
                                    <!-- Enhanced Sun with Glow Effect -->
                                    <div class="absolute top-6 right-8 transition-all duration-700" 
                                        :style="`opacity: ${0.6 + conservationScore / 250}; transform: scale(${0.7 + conservationScore / 150})`">
                                        <div class="relative">
                                            <div class="w-14 h-14 bg-gradient-to-br from-yellow-300 to-orange-400 rounded-full shadow-lg"
                                                :style="`box-shadow: 0 0 ${20 + conservationScore / 5}px rgba(251, 191, 36, ${0.4 + conservationScore / 250})`"></div>
                                            <div class="absolute inset-0 rounded-full bg-gradient-to-br from-yellow-200/40 to-orange-300/20 blur-md"></div>
                                        </div>
                                    </div>
                                    
                                    <!-- Enhanced Clouds with Better Styling -->
                                    <template x-for="i in 4" :key="i">
                                        <div class="absolute transition-all duration-1000" 
                                            :style="`top: ${8 + i * 12}%; left: ${15 + i * 18}%; opacity: ${0.4 + forestCover / 200}; transform: translateX(${Math.sin(Date.now() / 5000 + i) * 10}px)`">
                                            <div class="relative">
                                                <div class="w-16 h-8 bg-white/70 rounded-full backdrop-blur-sm"></div>
                                                <div class="absolute -top-3 left-3 w-10 h-6 bg-white/70 rounded-full backdrop-blur-sm"></div>
                                                <div class="absolute -top-2 right-2 w-8 h-5 bg-white/70 rounded-full backdrop-blur-sm"></div>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                                
                                <!-- Enhanced Forest Area with Depth -->
                                <div class="absolute bottom-0 left-0 right-0 transition-all duration-700" :style="'height: ' + (forestCover * 0.65) + '%;'">
                                    <!-- Forest Background Layers -->
                                    <div class="absolute inset-0 bg-gradient-to-t from-emerald-800 via-emerald-700 to-emerald-600 rounded-t-xl"></div>
                                    
                                    <!-- Forest Foreground with Texture -->
                                    <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/50 via-transparent to-transparent rounded-t-xl"></div>
                                    
                                    <!-- Enhanced Trees with Variety and Depth -->
                                    <template x-for="i in treeCount" :key="i">
                                        <div class="absolute bottom-0 transition-all duration-500" 
                                            :style="`left: ${Math.random() * 90 + 5}%; z-index: ${Math.floor(Math.random() * 10)}`">
                                            <div class="relative">
                                                <!-- Tree Trunk with Gradient -->
                                                <div class="w-2.5 h-10 bg-gradient-to-t from-amber-900 to-amber-700 mx-auto rounded-t-sm"></div>
                                                
                                                <!-- Tree Crown with Multiple Layers for Depth -->
                                                <div class="absolute -top-8 left-1/2 transform -translate-x-1/2">
                                                    <div class="relative">
                                                        <!-- Back Layer -->
                                                        <div class="w-12 h-12 bg-emerald-700 rounded-full opacity-80"></div>
                                                        <!-- Middle Layer -->
                                                        <div class="absolute top-1 left-1 w-10 h-10 bg-emerald-600 rounded-full opacity-90"></div>
                                                        <!-- Front Layer with Highlight -->
                                                        <div class="absolute top-2 left-2 w-8 h-8 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-full shadow-md"></div>
                                                        <!-- Highlight Effect -->
                                                        <div class="absolute top-3 left-3 w-3 h-3 bg-emerald-400/40 rounded-full blur-sm"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                    
                                    <div class="absolute bottom-0 left-0 right-0 h-2 bg-gradient-to-t from-emerald-900/70 to-transparent"></div>
                                </div>
                                
                                <!-- Enhanced Wildlife with Better Icons and Animations -->
                                <div class="absolute inset-0 overflow-auto md:overflow-hidden">
                                    <!-- Birds with Flying Animation -->
                                    <template x-for="i in Math.ceil(wildlifeCount / 2)" :key="`bird-${i}`">
                                        <div class="absolute transition-all duration-1000" 
                                            :style="`left: ${Math.random() * 80 + 10}%; top: ${Math.random() * 30 + 10}%; opacity: ${0.7 + wildlifePopulation / 300}; transform: translateX(${Math.sin(Date.now() / 2000 + i) * 20}px)`">
                                            <div class="relative">
                                                <!-- Detailed Bird Icon -->
                                                <div class="relative w-8 h-6">
                                                    <!-- Bird Body -->
                                                    <div class="absolute top-2 left-2 w-4 h-3 bg-gray-800 rounded-full"></div>
                                                    <!-- Bird Head -->
                                                    <div class="absolute top-1.5 left-5 w-2 h-2 bg-gray-800 rounded-full"></div>
                                                    <!-- Bird Beak -->
                                                    <div class="absolute top-2 left-6.5 w-1 h-0.5 bg-orange-500 transform rotate-45"></div>
                                                    <!-- Animated Wings -->
                                                    <div class="absolute top-1.5 left-1 w-3 h-4 bg-gray-700 rounded-t-full origin-right transition-transform duration-200"
                                                        :style="`transform: rotate(${Math.sin(Date.now() / 200 + i) * 30}deg)`"></div>
                                                    <div class="absolute top-1.5 left-4 w-3 h-4 bg-gray-700 rounded-t-full origin-left transition-transform duration-200"
                                                        :style="`transform: rotate(${Math.sin(Date.now() / 200 + i + Math.PI) * 30}deg)`"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                    
                                    <!-- Land Animals with Clear Visuals -->
                                    <template x-for="i in wildlifeCount" :key="`animal-${i}`">
                                        <div class="absolute transition-all duration-700" 
                                            :style="`left: ${Math.random() * 80 + 10}%; bottom: ${forestCover * 0.65 + 2}%; opacity: ${0.7 + wildlifePopulation / 300}`"
                                            x-show="wildlifePopulation > (i * 10)">
                                            
                                            <!-- Deer Icon -->
                                            <div x-show="i % 3 === 1" class="relative">
                                                <div class="w-10 h-8 relative">
                                                    <!-- Deer Body -->
                                                    <div class="absolute bottom-0 left-1 w-6 h-4 bg-amber-700 rounded-lg"></div>
                                                    <!-- Deer Head -->
                                                    <div class="absolute bottom-3 left-6 w-3 h-3 bg-amber-700 rounded-full"></div>
                                                    <!-- Deer Legs -->
                                                    <div class="absolute bottom-0 left-1.5 w-0.5 h-3 bg-amber-800"></div>
                                                    <div class="absolute bottom-0 left-2.5 w-0.5 h-3 bg-amber-800"></div>
                                                    <div class="absolute bottom-0 left-4.5 w-0.5 h-3 bg-amber-800"></div>
                                                    <div class="absolute bottom-0 left-5.5 w-0.5 h-3 bg-amber-800"></div>
                                                    <!-- Deer Antlers -->
                                                    <div class="absolute bottom-5.5 left-6.5 w-0.5 h-2 bg-amber-900 transform -rotate-12"></div>
                                                    <div class="absolute bottom-5.5 left-7 w-0.5 h-2 bg-amber-900 transform rotate-12"></div>
                                                    <!-- Deer Tail -->
                                                    <div class="absolute bottom-2 left-0 w-1 h-1 bg-white/70 rounded-full"></div>
                                                </div>
                                            </div>
                                            
                                            <!-- Bear Icon -->
                                            <div x-show="i % 3 === 2" class="relative">
                                                <div class="w-9 h-7 relative">
                                                    <!-- Bear Body -->
                                                    <div class="absolute bottom-0 left-1 w-6 h-5 bg-amber-800 rounded-lg"></div>
                                                    <!-- Bear Head -->
                                                    <div class="absolute bottom-3 left-6 w-3 h-3 bg-amber-800 rounded-full"></div>
                                                    <!-- Bear Ears -->
                                                    <div class="absolute bottom-5 left-6 w-1 h-1 bg-amber-900 rounded-full"></div>
                                                    <div class="absolute bottom-5 left-8 w-1 h-1 bg-amber-900 rounded-full"></div>
                                                    <!-- Bear Legs -->
                                                    <div class="absolute bottom-0 left-1.5 w-1 h-2 bg-amber-900 rounded-b"></div>
                                                    <div class="absolute bottom-0 left-3 w-1 h-2 bg-amber-900 rounded-b"></div>
                                                    <div class="absolute bottom-0 left-4.5 w-1 h-2 bg-amber-900 rounded-b"></div>
                                                    <div class="absolute bottom-0 left-6 w-1 h-2 bg-amber-900 rounded-b"></div>
                                                    <!-- Bear Snout -->
                                                    <div class="absolute bottom-3.5 left-8.5 w-1 h-0.5 bg-amber-900 rounded-full"></div>
                                                </div>
                                            </div>
                                            
                                            <!-- Rabbit Icon -->
                                            <div x-show="i % 3 === 0" class="relative">
                                                <div class="w-8 h-8 relative">
                                                    <!-- Rabbit Body -->
                                                    <div class="absolute bottom-0 left-2 w-4 h-3 bg-gray-400 rounded-lg"></div>
                                                    <!-- Rabbit Head -->
                                                    <div class="absolute bottom-2 left-3 w-3 h-3 bg-gray-400 rounded-full"></div>
                                                    <!-- Rabbit Ears -->
                                                    <div class="absolute bottom-4 left-3.5 w-0.5 h-3 bg-gray-400 rounded-t"></div>
                                                    <div class="absolute bottom-4 left-4.5 w-0.5 h-3 bg-gray-400 rounded-t"></div>
                                                    <!-- Rabbit Tail -->
                                                    <div class="absolute bottom-1 left-1 w-1.5 h-1.5 bg-white rounded-full"></div>
                                                    <!-- Rabbit Legs -->
                                                    <div class="absolute bottom-0 left-2.5 w-0.5 h-2 bg-gray-500"></div>
                                                    <div class="absolute bottom-0 left-4 w-0.5 h-2 bg-gray-500"></div>
                                                    <!-- Rabbit Eye -->
                                                    <div class="absolute bottom-3 left-5 w-0.5 h-0.5 bg-black rounded-full"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                                
                                <!-- Enhanced Community Elements -->
                                <div class="absolute top-6 left-6 transition-all duration-700" x-show="communityEngagement > 50">
                                    <div class="bg-teal-900/80 backdrop-blur text-teal-300 px-3 py-2 rounded-lg text-sm border border-teal-700/50 shadow-lg">
                                        <div class="flex items-center">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                            </svg>
                                            <span>Community Active</span>
                                        </div>
                                        <div class="mt-1 text-xs text-teal-200/80" x-text="`${communityEngagement}% Engagement`"></div>
                                    </div>
                                </div>
                                
                                <!-- Enhanced Water Source with Ripple Effect -->
                                <div class="absolute bottom-0 left-1/4 w-1/2 h-12 rounded-t-lg overflow-hidden transition-all duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-blue-600/80 via-blue-500/60 to-blue-400/40"></div>
                                    
                                    <!-- Water Ripples -->
                                    <div class="absolute inset-0 overflow-hidden">
                                        <template x-for="i in 3" :key="i">
                                            <div class="absolute rounded-full border border-blue-300/30"
                                                :style="`width: ${20 + i * 15}px; height: ${10 + i * 7}px; top: ${30 + i * 10}%; left: 50%; transform: translateX(-50%); animation: ripple ${2 + i}s infinite ease-out`"></div>
                                        </template>
                                    </div>
                                    
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <svg class="w-8 h-8 text-blue-300 drop-shadow-md" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1.323l3.954 1.582 1.599-.8a1 1 0 01.894 1.79l-1.233.616 1.738 5.42a1 1 0 01-.285 1.05A3.989 3.989 0 0115 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.715-5.349L11 6.477V16a1 1 0 11-2 0V6.477L6.237 7.582l1.715 5.349a1 1 0 01-.285 1.05A3.989 3.989 0 015 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.738-5.42-1.233-.617a1 1 0 01.894-1.788l1.599.799L9 4.323V3a1 1 0 011-1z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Simplified Legend -->
                            <div class="flex justify-center mt-4 text-xs text-gray-400">
                                <span class="px-2 py-1 bg-gray-700/30 rounded-full mr-2">
                                    🌳 Forest: <span x-text="forestCover + '%'"></span>%
                                </span>
                                <span class="px-2 py-1 bg-gray-700/30 rounded-full mr-2">
                                    🦌 Wildlife: <span x-text="wildlifePopulation + '%'"></span>%
                                </span>
                                <span class="px-2 py-1 bg-gray-700/30 rounded-full mr-2">
                                    💧 Water
                                </span>
                                <span class="px-2 py-1 bg-gray-700/30 rounded-full">
                                    👥 Community: <span x-text="communityEngagement + '%'"></span>%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conservation Statistics -->
            <div class="grid md:grid-cols-3 gap-4 sm:gap-6 mb-12 sm:mb-16">
                <div class="bg-gray-800 rounded-xl p-4 sm:p-6 text-center shadow-2xl border border-gray-700" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-2xl sm:text-3xl font-bold text-gradient mb-2" x-text="animatedStats.forestsProtected" x-init="animateCounter('forestsProtected', 0, 295000, 2000)"></div>
                    <div class="text-gray-400 text-xs sm:text-sm">Forests Protected (km²)</div>
                </div>
                <div class="bg-gray-800 rounded-xl p-4 sm:p-6 text-center shadow-2xl border border-gray-700" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-2xl sm:text-3xl font-bold text-gradient-teal mb-2" x-text="animatedStats.speciesSaved" x-init="animateCounter('speciesSaved', 0, 728, 2000)"></div>
                    <div class="text-gray-400 text-xs sm:text-sm">Species Saved from Extinction</div>
                </div>
                <div class="bg-gray-800 rounded-xl p-4 sm:p-6 text-center shadow-2xl border border-gray-700" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-2xl sm:text-3xl font-bold text-gradient mb-2" x-text="animatedStats.treesPlanted" x-init="animateCounter('treesPlanted', 0, 12500, 2000)"></div>
                    <div class="text-gray-400 text-xs sm:text-sm">Trees Planted This Year</div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="gradient-bg rounded-2xl p-6 sm:p-8 md:p-12 text-center text-white relative overflow-hidden glow" data-aos="fade-up">
                <!-- Background Pattern -->
                <div class="absolute top-0 right-0 w-40 h-40 sm:w-56 sm:h-56 lg:w-64 lg:h-64 -mt-20 sm:-mt-28 lg:-mt-32 -mr-20 sm:-mr-28 lg:-mr-32 bg-white opacity-10 rounded-full"></div>
                <div class="absolute bottom-0 left-0 w-40 h-40 sm:w-56 sm:h-56 lg:w-64 lg:h-64 -mb-20 sm:-mb-28 lg:-mb-32 -ml-20 sm:-ml-28 lg:-ml-32 bg-white opacity-10 rounded-full"></div>
                
                <div class="relative z-10">
                    <h3 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4">Join Our Conservation Mission</h3>
                    <p class="text-lg sm:text-xl opacity-90 mb-6 sm:mb-8 max-w-2xl mx-auto px-4">Together we can protect our natural heritage and create a sustainable future for all living beings.</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4 px-4">
                        <a href="{{ route('register') }}" class="px-6 sm:px-8 py-3 bg-white text-emerald-700 font-semibold rounded-lg hover:bg-gray-100 transition-colors shadow-lg flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Get Involved
                        </a>
                    </div>
                    <p class="text-emerald-100 mt-6 text-sm px-4">Every action counts in preserving our planet's beauty and diversity</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Initialize AOS
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    once: true,
                    offset: 100
                });
            }
            
            // GSAP animations
            if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger);
                
                // Animate cards on scroll
                gsap.utils.toArray('[data-aos]').forEach(element => {
                    gsap.from(element, {
                        scrollTrigger: {
                            trigger: element,
                            start: "top 80%",
                            end: "bottom 20%",
                            toggleActions: "play none none reverse"
                        },
                        opacity: 0,
                        y: 50,
                        duration: 0.8,
                        ease: "power2.out"
                    });
                });
                
                // Animate background elements
                gsap.to('.floating', {
                    y: -20,
                    duration: 2,
                    repeat: -1,
                    yoyo: true,
                    ease: "power1.inOut",
                    stagger: 0.2
                });
            }
        });

        // Alpine.js component
        function natureConservation() {
            return {
                // Card hover states
                card1Hover: false,
                card2Hover: false,
                card3Hover: false,
                card1Width: 'width: 0%',
                card2Width: 'width: 0%',
                card3Width: 'width: 0%',
                
                // Conservation controls
                forestCover: 65,
                wildlifePopulation: 70,
                communityEngagement: 75,
                
                // Visualization elements
                treeCount: 8,
                wildlifeCount: 5,
                
                // Animated stats
                animatedStats: {
                    forestsProtected: 0,
                    speciesSaved: 0,
                    treesPlanted: 0,
                    communitiesEngaged: 0
                },
                
                // Computed properties
                get conservationScore() {
                    // Calculate conservation score based on factors
                    const forestScore = this.forestCover * 0.4;
                    const wildlifeScore = this.wildlifePopulation * 0.3;
                    const communityScore = this.communityEngagement * 0.3;
                    
                    return Math.min(100, Math.round(forestScore + wildlifeScore + communityScore));
                },
                
                // Methods
                animateCard(cardNumber) {
                    this[`card${cardNumber}Hover`] = true;
                    this[`card${cardNumber}Width`] = 'width: 100%';
                },
                
                resetCard(cardNumber) {
                    this[`card${cardNumber}Hover`] = false;
                    this[`card${cardNumber}Width`] = 'width: 0%';
                },
                
                resetDashboard() {
                    this.forestCover = 65;
                    this.wildlifePopulation = 70;
                    this.communityEngagement = 75;
                },
                
                getConservationStatus() {
                    if (this.conservationScore >= 80) return 'Excellent';
                    if (this.conservationScore >= 60) return 'Good';
                    return 'Needs Improvement';
                },
                
                animateCounter(stat, start, end, duration) {
                    let startTimestamp = null;
                    const step = (timestamp) => {
                        if (!startTimestamp) startTimestamp = timestamp;
                        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                        
                        this.animatedStats[stat] = Math.floor(start + progress * (end - start));
                        
                        if (progress < 1) {
                            window.requestAnimationFrame(step);
                        }
                    };
                    window.requestAnimationFrame(step);
                }
            }
        }
    </script>
</div>