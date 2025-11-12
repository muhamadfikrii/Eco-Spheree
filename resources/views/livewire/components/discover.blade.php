<x-app-layout>
    <!-- Hero Section Discover -->
    <section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-cyan-900 overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-40 h-40 sm:w-56 sm:h-56 lg:w-72 lg:h-72 bg-white rounded-full mix-blend-overlay filter blur-xl opacity-20 animate-pulse"></div>
            <div class="absolute top-10 right-10 w-40 h-40 sm:w-56 sm:h-56 lg:w-72 lg:h-72 bg-white rounded-full mix-blend-overlay filter blur-xl opacity-20 animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-10 left-1/2 w-40 h-40 sm:w-56 sm:h-56 lg:w-72 lg:h-72 bg-white rounded-full mix-blend-overlay filter blur-xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="relative z-10 container mx-auto px-4 sm:px-6 py-16 sm:py-24 lg:py-32">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center px-4 py-2 mb-6 text-sm font-semibold text-blue-100 bg-blue-800/50 backdrop-blur-sm rounded-full border border-blue-700/50">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    Exploration & Discovery Initiative
                </div>
                
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                    Discover Our Planet's 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-cyan-300">Biodiversity</span>
                </h1>
                
                <p class="text-lg sm:text-xl md:text-2xl text-blue-100 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Join our exploration missions to document, research, and understand the incredible diversity of life on Earth through cutting-edge technology and citizen science.
                </p>
                
                <div class="flex flex-col sm:flex-row justify-center gap-4 mb-12">
                    <a href="#exploration-areas" class="px-6 py-3 bg-white text-blue-700 font-semibold rounded-lg hover:bg-blue-50 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        Explore Biodiversity
                    </a>
                    <a href="{{ route('register') }}" class="px-6 py-3 bg-transparent text-white font-semibold rounded-lg hover:bg-white/10 transition-all duration-300 border-2 border-white backdrop-blur-sm flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Join Discovery Missions
                    </a>
                </div>
                
                <!-- Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-2xl mx-auto">
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                        <div class="text-2xl font-bold text-white">5,200+</div>
                        <div class="text-sm text-blue-200">Species Documented</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                        <div class="text-2xl font-bold text-white">45</div>
                        <div class="text-sm text-blue-200">New Species Found</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                        <div class="text-2xl font-bold text-white">120+</div>
                        <div class="text-sm text-blue-200">Research Expeditions</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                        <div class="text-2xl font-bold text-white">3,500+</div>
                        <div class="text-sm text-blue-200">Citizen Scientists</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
            <div class="animate-bounce">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </section>

    <!-- Discovery Overview -->
    <section class="py-16 sm:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="max-w-4xl mx-auto">
                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-8 shadow-lg border border-blue-100">
                    <div class="flex flex-col md:flex-row items-start gap-8">
                        <div class="md:w-2/3">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900">Discover Biodiversity</h3>
                            </div>
                            
                            <p class="text-gray-700 mb-6 text-lg">
                                Our <span class="font-semibold text-blue-700">Discover</span> program enables researchers, citizen scientists, and nature enthusiasts to explore and document the rich biodiversity of our planet through advanced tools and collaborative platforms.
                            </p>
                            
                            <div class="space-y-4 mb-8">
                                <div class="flex items-start">
                                    <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <p class="text-gray-700">
                                        <span class="font-semibold">Species Documentation:</span> Catalog and track flora and fauna using our mobile app and database
                                    </p>
                                </div>
                                <div class="flex items-start">
                                    <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <p class="text-gray-700">
                                        <span class="font-semibold">Ecosystem Mapping:</span> Create detailed maps of habitats, migration patterns, and ecological corridors
                                    </p>
                                </div>
                                <div class="flex items-start">
                                    <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <p class="text-gray-700">
                                        <span class="font-semibold">Research Collaboration:</span> Connect with scientists and institutions worldwide to share findings
                                    </p>
                                </div>
                            </div>
                            
                            <div class="bg-white rounded-xl p-4 border border-blue-200">
                                <h4 class="font-bold text-blue-800 mb-2">Discovery Highlights</h4>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-blue-700">5,200+</div>
                                        <div class="text-sm text-gray-600">Species Documented</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-blue-700">45</div>
                                        <div class="text-sm text-gray-600">New Species Found</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="md:w-1/3">
                            <div class="bg-white rounded-xl p-6 shadow-md border border-blue-100">
                                <h4 class="font-bold text-gray-900 mb-4">Explore Opportunities</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        <span class="text-gray-700">Join biodiversity surveys</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        <span class="text-gray-700">Contribute to research projects</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        <span class="text-gray-700">Access our species database</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        <span class="text-gray-700">Participate in discovery expeditions</span>
                                    </li>
                                </ul>
                                
                                <a href="{{ route('register') }}" class="mt-6 w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-300 flex items-center justify-center">
                                    Start Discovering
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Exploration Areas -->
    <section id="exploration-areas" class="py-16 sm:py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Exploration Areas</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Discover the diverse ecosystems and habitats we're actively researching and documenting
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Tropical Rainforests -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-green-500 to-emerald-700 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-xl font-bold">Tropical Rainforests</h3>
                            <p class="text-green-100">Biodiversity hotspots</p>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="inline-flex items-center px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-sm text-white">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                High Priority
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Exploring the world's most biodiverse ecosystems, home to millions of species, many yet to be discovered and documented.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-500">
                                <span class="font-medium text-blue-600">1,850+ species documented</span>
                            </div>
                            <div class="flex items-center text-blue-600 font-medium">
                                <span>Explore</span>
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Marine Ecosystems -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-blue-500 to-teal-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-xl font-bold">Marine Ecosystems</h3>
                            <p class="text-blue-100">Ocean exploration</p>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="inline-flex items-center px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-sm text-white">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                Ongoing Research
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Documenting coral reefs, deep-sea habitats, and marine biodiversity through advanced diving technology and remote sensing.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-500">
                                <span class="font-medium text-blue-600">2,300+ species documented</span>
                            </div>
                            <div class="flex items-center text-blue-600 font-medium">
                                <span>Explore</span>
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Mountain Regions -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-gray-500 to-gray-700 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-xl font-bold">Mountain Regions</h3>
                            <p class="text-gray-100">Alpine biodiversity</p>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="inline-flex items-center px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-sm text-white">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                New Frontiers
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Researching high-altitude ecosystems and endemic species adapted to extreme conditions in mountain ranges worldwide.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-500">
                                <span class="font-medium text-blue-600">850+ species documented</span>
                            </div>
                            <div class="flex items-center text-blue-600 font-medium">
                                <span>Explore</span>
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Discovery Methods -->
    <section class="py-16 sm:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Our Discovery Methods</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Combining traditional field research with cutting-edge technology for comprehensive biodiversity documentation
                </p>
            </div>
            
            <div class="max-w-5xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Field Research -->
                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-6 border border-green-100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">Field Research Expeditions</h3>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Conducting hands-on fieldwork in remote locations to directly observe, document, and collect data on species and ecosystems.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Species identification and collection</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Habitat assessment and mapping</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Behavioral observation studies</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Technology & Innovation -->
                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-6 border border-blue-100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">Technology & Innovation</h3>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Utilizing advanced technologies to enhance discovery capabilities and reach previously inaccessible areas for research.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">DNA barcoding and genetic analysis</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Remote sensing and drones</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Camera traps and acoustic monitoring</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Citizen Science -->
                    <div class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-2xl p-6 border border-purple-100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">Citizen Science Programs</h3>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Engaging the public in scientific discovery through community-based monitoring, data collection, and species documentation.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-purple-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Community biodiversity monitoring</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-purple-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Mobile app data collection</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-purple-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Public participation in research</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Data Analysis -->
                    <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl p-6 border border-amber-100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">Data Analysis & Modeling</h3>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Applying statistical analysis, machine learning, and ecological modeling to understand patterns and predict biodiversity changes.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Species distribution modeling</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Population trend analysis</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Ecological forecasting</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Discovery Map -->
    <section class="py-16 sm:py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Interactive Discovery Map</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Explore our global research sites and recent discoveries through our interactive mapping platform
                </p>
            </div>
            
            <div class="max-w-6xl mx-auto">
                <div class="bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden">
                    <div class="h-96 bg-gradient-to-br from-blue-100 to-cyan-100 relative flex items-center justify-center">
                        <!-- Simplified Map Visualization -->
                        <div class="absolute inset-0 opacity-30">
                            <div class="absolute top-1/4 left-1/4 w-32 h-32 bg-green-500 rounded-full opacity-20"></div>
                            <div class="absolute top-1/3 right-1/3 w-24 h-24 bg-blue-500 rounded-full opacity-20"></div>
                            <div class="absolute bottom-1/4 left-1/3 w-28 h-28 bg-emerald-500 rounded-full opacity-20"></div>
                            <div class="absolute bottom-1/3 right-1/4 w-20 h-20 bg-teal-500 rounded-full opacity-20"></div>
                        </div>
                        
                        <!-- Map Content -->
                        <div class="relative z-10 text-center p-8">
                            <div class="inline-flex items-center px-4 py-2 bg-white/80 backdrop-blur-sm rounded-lg shadow-md mb-6">
                                <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                                </svg>
                                <span class="font-semibold text-gray-700">Global Discovery Network</span>
                            </div>
                            
                            <h3 class="text-2xl font-bold text-gray-800 mb-4">Explore Our Research Sites</h3>
                            <p class="text-gray-600 max-w-md mx-auto mb-6">
                                Access our interactive map to discover research locations, documented species, and ongoing exploration projects around the world.
                            </p>
                            
                            <div class="flex flex-col sm:flex-row justify-center gap-4">
                                <button class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors duration-300 flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                    Open Interactive Map
                                </button>
                                <button class="px-6 py-3 bg-white hover:bg-gray-50 text-blue-600 font-medium rounded-lg border border-blue-200 transition-colors duration-300 flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                                    </svg>
                                    Download Data
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-6 bg-gray-50 border-t border-gray-200">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                            <div>
                                <div class="text-xl font-bold text-blue-600">42</div>
                                <div class="text-sm text-gray-600">Active Research Sites</div>
                            </div>
                            <div>
                                <div class="text-xl font-bold text-green-600">18</div>
                                <div class="text-sm text-gray-600">Countries</div>
                            </div>
                            <div>
                                <div class="text-xl font-bold text-purple-600">127</div>
                                <div class="text-sm text-gray-600">Ongoing Projects</div>
                            </div>
                            <div>
                                <div class="text-xl font-bold text-amber-600">3.2M+</div>
                                <div class="text-sm text-gray-600">Data Points</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Discoveries -->
    <section class="py-16 sm:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Recent Discoveries</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Explore our latest findings and newly documented species from recent research expeditions
                </p>
            </div>
            
            <div class="max-w-5xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Discovery 1 -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                        <div class="flex items-center mb-4">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Amazon Canopy Research</h3>
                                <p class="text-gray-600">Brazil, 2023</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Our canopy access team discovered 12 potentially new insect species and documented previously unknown pollination relationships between canopy flowers and specialized pollinators.
                        </p>
                        <div class="flex justify-between text-sm text-gray-500">
                            <span>Expedition: 45 days</span>
                            <span>12 new species</span>
                        </div>
                    </div>
                    
                    <!-- Discovery 2 -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                        <div class="flex items-center mb-4">
                            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Deep Sea Exploration</h3>
                                <p class="text-gray-600">Pacific Ocean, 2023</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Using advanced ROV technology, we documented 8 new deep-sea species and observed unique behavioral adaptations to extreme pressure and darkness at 3,000m depth.
                        </p>
                        <div class="flex justify-between text-sm text-gray-500">
                            <span>Expedition: 28 days</span>
                            <span>8 new species</span>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-12">
                    <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition-colors">
                        View All Discoveries
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 sm:py-24 bg-gradient-to-r from-blue-600 to-cyan-600 text-white">
        <div class="container mx-auto px-4 sm:px-6 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold mb-6">Ready to Explore and Discover?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
                Join our discovery community and contribute to documenting Earth's incredible biodiversity through research and exploration.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">                        
                    <a href="#exploration-areas" class="px-8 py-3 bg-transparent text-white font-semibold rounded-lg hover:bg-white/10 transition-colors duration-300 border-2 border-white flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Explore Research Areas
                    </a>
                @if (Auth::check())                    
                    <a href="{{ route('register') }}" class="px-8 py-3 bg-white text-blue-700 font-semibold rounded-lg hover:bg-blue-50 transition-colors duration-300 shadow-lg flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Join Discovery Missions
                    </a>
                @endif
            </div>
        </div>
    </section>

    <style>
        /* Custom scroll behavior for smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Animation for stats counters */
        @keyframes countUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .count-up {
            animation: countUp 1s ease-out forwards;
        }
        
        /* Custom gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #3b82f6 0%, #06b6d4 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>

    <script>
        // Add scroll-triggered animations for stats
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS if available
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    once: true,
                    offset: 100
                });
            }
            
            // Add intersection observer for stats animation
            const statsSection = document.querySelector('.relative.bg-gradient-to-br');
            if (statsSection && 'IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            // Animate stats counters
                            const stats = document.querySelectorAll('.stats-counter');
                            stats.forEach(stat => {
                                const target = parseInt(stat.getAttribute('data-target'));
                                animateCounter(stat, 0, target, 2000);
                            });
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.5 });
                
                observer.observe(statsSection);
            }
            
            // Counter animation function
            function animateCounter(element, start, end, duration) {
                let startTimestamp = null;
                const step = (timestamp) => {
                    if (!startTimestamp) startTimestamp = timestamp;
                    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                    element.textContent = Math.floor(progress * (end - start) + start);
                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    }
                };
                window.requestAnimationFrame(step);
            }
        });
    </script>
</x-app-layout>