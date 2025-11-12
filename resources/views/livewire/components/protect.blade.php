<x-app-layout>
    <!-- Hero Section Eco-Track -->

    <!-- Card Pages Content -->
    <section class="py-16 sm:py-24 bg-white" x-data="{ activeTab: 'protect' }">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Our Conservation Approach</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Explore our comprehensive approach to environmental conservation through protection, discovery, and education
                </p>
            </div>
            
            <!-- Tab Navigation -->
            <div class="flex flex-wrap justify-center gap-2 mb-12 max-w-3xl mx-auto">
                <button 
                    @click="activeTab = 'protect'" 
                    :class="activeTab === 'protect' ? 'bg-emerald-600 text-white shadow-lg' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'" 
                    class="px-6 py-3 rounded-lg font-medium transition-all duration-300 flex items-center"
                >
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    Protect
                </button>
                <button 
                    @click="activeTab = 'discover'" 
                    :class="activeTab === 'discover' ? 'bg-emerald-600 text-white shadow-lg' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'" 
                    class="px-6 py-3 rounded-lg font-medium transition-all duration-300 flex items-center"
                >
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    Discover
                </button>
                <button 
                    @click="activeTab = 'learn'" 
                    :class="activeTab === 'learn' ? 'bg-emerald-600 text-white shadow-lg' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'" 
                    class="px-6 py-3 rounded-lg font-medium transition-all duration-300 flex items-center"
                >
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    Learn More
                </button>
            </div>
            
            <!-- Tab Content -->
            <div class="max-w-4xl mx-auto">
                <!-- Protect Tab -->
                <div x-show="activeTab === 'protect'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
                    <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-8 shadow-lg border border-emerald-100">
                        <div class="flex flex-col md:flex-row items-start gap-8">
                            <div class="md:w-2/3">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mr-4">
                                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl font-bold text-gray-900">Protect Our Natural Heritage</h3>
                                </div>
                                
                                <p class="text-gray-700 mb-6 text-lg">
                                    Our <span class="font-semibold text-emerald-700">Protect</span> initiative focuses on safeguarding vital ecosystems, endangered species, and natural resources through proactive conservation strategies and community engagement.
                                </p>
                                
                                <div class="space-y-4 mb-8">
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <p class="text-gray-700">
                                            <span class="font-semibold">Habitat Preservation:</span> Establish and maintain protected areas for wildlife and native flora
                                        </p>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <p class="text-gray-700">
                                            <span class="font-semibold">Anti-Poaching Efforts:</span> Implement monitoring systems and community patrols to prevent illegal activities
                                        </p>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <p class="text-gray-700">
                                            <span class="font-semibold">Sustainable Resource Management:</span> Promote practices that balance human needs with environmental protection
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="bg-white rounded-xl p-4 border border-emerald-200">
                                    <h4 class="font-bold text-emerald-800 mb-2">Impact Highlights</h4>
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="text-center">
                                            <div class="text-2xl font-bold text-emerald-700">85%</div>
                                            <div class="text-sm text-gray-600">Species Protection Rate</div>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-2xl font-bold text-emerald-700">120+</div>
                                            <div class="text-sm text-gray-600">Protected Areas</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="md:w-1/3">
                                <div class="bg-white rounded-xl p-6 shadow-md border border-emerald-100">
                                    <h4 class="font-bold text-gray-900 mb-4">Get Involved</h4>
                                    <ul class="space-y-3">
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <span class="text-gray-700">Join conservation patrols</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <span class="text-gray-700">Report environmental threats</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <span class="text-gray-700">Support habitat restoration</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <span class="text-gray-700">Advocate for policy changes</span>
                                        </li>
                                    </ul>
                                    
                                    <a href="{{ route('register') }}" class="mt-6 w-full bg-emerald-600 hover:bg-emerald-700 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-300 flex items-center justify-center">
                                        Join Protection Efforts
                                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Discover Tab -->
                <div x-show="activeTab === 'discover'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
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
                
                <!-- Learn More Tab -->
                <div x-show="activeTab === 'learn'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
                    <div class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-2xl p-8 shadow-lg border border-purple-100">
                        <div class="flex flex-col md:flex-row items-start gap-8">
                            <div class="md:w-2/3">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mr-4">
                                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl font-bold text-gray-900">Learn & Educate</h3>
                                </div>
                                
                                <p class="text-gray-700 mb-6 text-lg">
                                    Our <span class="font-semibold text-purple-700">Learn More</span> initiative provides comprehensive educational resources, training programs, and community workshops to empower individuals and organizations with knowledge about environmental conservation.
                                </p>
                                
                                <div class="space-y-4 mb-8">
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-purple-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <p class="text-gray-700">
                                            <span class="font-semibold">Educational Resources:</span> Access our library of guides, videos, and interactive materials on conservation topics
                                        </p>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-purple-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <p class="text-gray-700">
                                            <span class="font-semibold">Workshops & Training:</span> Participate in hands-on sessions led by conservation experts and practitioners
                                        </p>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-purple-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <p class="text-gray-700">
                                            <span class="font-semibold">Community Outreach:</span> Engage with schools, organizations, and communities to spread conservation awareness
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="bg-white rounded-xl p-4 border border-purple-200">
                                    <h4 class="font-bold text-purple-800 mb-2">Education Impact</h4>
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="text-center">
                                            <div class="text-2xl font-bold text-purple-700">15,000+</div>
                                            <div class="text-sm text-gray-600">People Educated</div>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-2xl font-bold text-purple-700">240</div>
                                            <div class="text-sm text-gray-600">Workshops Conducted</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="md:w-1/3">
                                <div class="bg-white rounded-xl p-6 shadow-md border border-purple-100">
                                    <h4 class="font-bold text-gray-900 mb-4">Learning Paths</h4>
                                    <ul class="space-y-3">
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-purple-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <span class="text-gray-700">Online conservation courses</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-purple-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <span class="text-gray-700">Field training programs</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-purple-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <span class="text-gray-700">Educational materials library</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-purple-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <span class="text-gray-700">Teacher & educator resources</span>
                                        </li>
                                    </ul>
                                    
                                    <a href="{{ route('register') }}" class="mt-6 w-full bg-purple-600 hover:bg-purple-700 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-300 flex items-center justify-center">
                                        Start Learning
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
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 sm:py-24 bg-gradient-to-r from-emerald-600 to-teal-600 text-white">
        <div class="container mx-auto px-4 sm:px-6 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold mb-6">Ready to Make a Difference?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
                Join Eco-Track today and become part of a global community dedicated to protecting our planet's natural heritage.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('explore') }}" class="px-8 py-3 bg-white text-emerald-700 font-semibold rounded-lg hover:bg-emerald-50 transition-colors duration-300 shadow-lg flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Get Started Today
                </a>
                <a href="#features" class="px-8 py-3 bg-transparent text-white font-semibold rounded-lg hover:bg-white/10 transition-colors duration-300 border-2 border-white flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Learn More
                </a>
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
            background: linear-gradient(135deg, #10b981 0%, #0d9488 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>

    <script>
        // Simple Alpine.js component for tab functionality
        document.addEventListener('alpine:init', () => {
            // Tab functionality is already implemented in the HTML
        });
        
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
            const statsSection = document.querySelector('#features');
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