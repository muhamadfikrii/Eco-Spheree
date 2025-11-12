<x-app-layout>
    <!-- Hero Section Learn More -->
    <section class="relative bg-gradient-to-br from-purple-900 via-purple-800 to-indigo-900 overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-40 h-40 sm:w-56 sm:h-56 lg:w-72 lg:h-72 bg-white rounded-full mix-blend-overlay filter blur-xl opacity-20 animate-pulse"></div>
            <div class="absolute top-10 right-10 w-40 h-40 sm:w-56 sm:h-56 lg:w-72 lg:h-72 bg-white rounded-full mix-blend-overlay filter blur-xl opacity-20 animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-10 left-1/2 w-40 h-40 sm:w-56 sm:h-56 lg:w-72 lg:h-72 bg-white rounded-full mix-blend-overlay filter blur-xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="relative z-10 container mx-auto px-4 sm:px-6 py-16 sm:py-24 lg:py-32">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center px-4 py-2 mb-6 text-sm font-semibold text-purple-100 bg-purple-800/50 backdrop-blur-sm rounded-full border border-purple-700/50">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    Education & Awareness Initiative
                </div>
                
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                    Learn More About 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-300 to-indigo-300">Our Planet</span>
                </h1>
                
                <p class="text-lg sm:text-xl md:text-2xl text-purple-100 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Expand your knowledge about environmental conservation, sustainable practices, and how you can make a difference through our comprehensive educational resources.
                </p>
                
                <div class="flex flex-col sm:flex-row justify-center gap-4 mb-12">
                    <a href="#learning-paths" class="px-6 py-3 bg-white text-purple-700 font-semibold rounded-lg hover:bg-purple-50 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                        Explore Learning Paths
                    </a>
                    <a href="{{ route('register') }}" class="px-6 py-3 bg-transparent text-white font-semibold rounded-lg hover:bg-white/10 transition-all duration-300 border-2 border-white backdrop-blur-sm flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Join Learning Community
                    </a>
                </div>
                
                <!-- Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-2xl mx-auto">
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                        <div class="text-2xl font-bold text-white">15,000+</div>
                        <div class="text-sm text-purple-200">People Educated</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                        <div class="text-2xl font-bold text-white">240+</div>
                        <div class="text-sm text-purple-200">Workshops Conducted</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                        <div class="text-2xl font-bold text-white">500+</div>
                        <div class="text-sm text-purple-200">Educational Resources</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                        <div class="text-2xl font-bold text-white">98%</div>
                        <div class="text-sm text-purple-200">Satisfaction Rate</div>
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

    <!-- Learning Overview -->
    <section class="py-16 sm:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="max-w-4xl mx-auto">
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
    </section>

    <!-- Learning Paths -->
    <section id="learning-paths" class="py-16 sm:py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Learning Paths</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Choose your learning journey with our structured educational programs designed for all knowledge levels
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Beginner Path -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-green-500 to-emerald-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="inline-flex items-center px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-sm mb-2">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                Beginner
                            </div>
                            <h3 class="text-xl font-bold">Environmental Basics</h3>
                            <p class="text-green-100">Foundational knowledge</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Start your conservation journey with fundamental concepts about ecosystems, biodiversity, and basic environmental principles.
                        </p>
                        <div class="mb-4">
                            <div class="flex justify-between text-sm text-gray-500 mb-1">
                                <span>Duration</span>
                                <span>4 weeks</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-500 h-2 rounded-full" style="width: 25%"></div>
                            </div>
                        </div>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Ecosystem fundamentals
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Introduction to biodiversity
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Basic conservation principles
                            </li>
                        </ul>
                        <button class="w-full bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-300">
                            Start Learning
                        </button>
                    </div>
                </div>
                
                <!-- Intermediate Path -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-blue-500 to-indigo-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="inline-flex items-center px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-sm mb-2">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                Intermediate
                            </div>
                            <h3 class="text-xl font-bold">Conservation Strategies</h3>
                            <p class="text-blue-100">Practical applications</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Dive deeper into conservation methodologies, community engagement strategies, and practical approaches to environmental protection.
                        </p>
                        <div class="mb-4">
                            <div class="flex justify-between text-sm text-gray-500 mb-1">
                                <span>Duration</span>
                                <span>6 weeks</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-500 h-2 rounded-full" style="width: 50%"></div>
                            </div>
                        </div>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Conservation planning
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Community engagement
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Sustainable practices
                            </li>
                        </ul>
                        <button class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-300">
                            Continue Learning
                        </button>
                    </div>
                </div>
                
                <!-- Advanced Path -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-purple-500 to-pink-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="inline-flex items-center px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-sm mb-2">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                Advanced
                            </div>
                            <h3 class="text-xl font-bold">Leadership in Conservation</h3>
                            <p class="text-purple-100">Expert level training</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">
                            Master advanced conservation techniques, policy development, and leadership skills to drive meaningful environmental change.
                        </p>
                        <div class="mb-4">
                            <div class="flex justify-between text-sm text-gray-500 mb-1">
                                <span>Duration</span>
                                <span>8 weeks</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-purple-500 h-2 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 text-purple-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Policy & advocacy
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 text-purple-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Advanced research methods
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 text-purple-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Conservation leadership
                            </li>
                        </ul>
                        <button class="w-full bg-purple-500 hover:bg-purple-600 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-300">
                            Advance Skills
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Educational Resources -->
    <section class="py-16 sm:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Educational Resources</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Access our comprehensive library of learning materials, tools, and resources
                </p>
            </div>
            
            <div class="max-w-5xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Online Courses -->
                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-6 border border-blue-100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">Online Courses</h3>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Self-paced courses covering various aspects of environmental conservation, from basic principles to advanced techniques.
                        </p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Interactive video lessons</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Quizzes and assessments</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Downloadable resources</span>
                            </li>
                        </ul>
                        <button class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-300">
                            Browse Courses
                        </button>
                    </div>
                    
                    <!-- Workshops & Training -->
                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-6 border border-green-100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">Workshops & Training</h3>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Hands-on training sessions and workshops led by conservation experts, available both online and in-person.
                        </p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Expert-led sessions</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Practical skill development</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Networking opportunities</span>
                            </li>
                        </ul>
                        <button class="w-full bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-300">
                            View Schedule
                        </button>
                    </div>
                    
                    <!-- Resource Library -->
                    <div class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-2xl p-6 border border-purple-100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">Resource Library</h3>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Comprehensive collection of guides, research papers, case studies, and educational materials for all learning levels.
                        </p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-purple-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Research papers & studies</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-purple-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Educational guides & manuals</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-purple-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Case studies & best practices</span>
                            </li>
                        </ul>
                        <button class="w-full bg-purple-500 hover:bg-purple-600 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-300">
                            Explore Library
                        </button>
                    </div>
                    
                    <!-- Community Learning -->
                    <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl p-6 border border-amber-100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">Community Learning</h3>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Connect with fellow learners, share knowledge, and participate in discussions with conservation enthusiasts worldwide.
                        </p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Discussion forums</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Peer-to-peer learning</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Expert Q&A sessions</span>
                            </li>
                        </ul>
                        <button class="w-full bg-amber-500 hover:bg-amber-600 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-300">
                            Join Community
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section class="py-16 sm:py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Learning Success Stories</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Discover how our educational programs have transformed understanding and inspired action
                </p>
            </div>
            
            <div class="max-w-5xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Story 1 -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                        <div class="flex items-center mb-4">
                            <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">School Education Program</h3>
                                <p class="text-gray-600">Regional Implementation</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Our environmental curriculum reached 5,000+ students across 45 schools, resulting in 80% of participating schools implementing conservation projects and 65% of students reporting behavior changes toward sustainability.
                        </p>
                        <div class="flex justify-between text-sm text-gray-500">
                            <span>2020 - Present</span>
                            <span>5,000+ students reached</span>
                        </div>
                    </div>
                    
                    <!-- Story 2 -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                        <div class="flex items-center mb-4">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Community Workshop Series</h3>
                                <p class="text-gray-600">Urban Communities</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Our urban conservation workshops engaged 1,200+ community members, leading to the creation of 35 community gardens, 12 neighborhood composting programs, and a 40% increase in local recycling rates.
                        </p>
                        <div class="flex justify-between text-sm text-gray-500">
                            <span>2019 - Present</span>
                            <span>1,200+ participants</span>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-12">
                    <a href="#" class="inline-flex items-center text-purple-600 font-semibold hover:text-purple-700 transition-colors">
                        View All Success Stories
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 sm:py-24 bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
        <div class="container mx-auto px-4 sm:px-6 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold mb-6">Ready to Expand Your Knowledge?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
                Join our learning community and access comprehensive resources to deepen your understanding of environmental conservation.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('register') }}" class="px-8 py-3 bg-white text-purple-700 font-semibold rounded-lg hover:bg-purple-50 transition-colors duration-300 shadow-lg flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Join Learning Community
                </a>
                <a href="#learning-paths" class="px-8 py-3 bg-transparent text-white font-semibold rounded-lg hover:bg-white/10 transition-colors duration-300 border-2 border-white flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Explore Learning Paths
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
            background: linear-gradient(135deg, #8b5cf6 0%, #6366f1 100%);
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