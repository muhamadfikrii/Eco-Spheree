<x-app-layout>
<div
     x-data="{
         initLearnMoreAnimations() {
             const observerOptions = {
                 threshold: 0.1,
                 rootMargin: '0px 0px -50px 0px'
             };
             const observer = new IntersectionObserver((entries) => {
                 entries.forEach(entry => {
                     if (entry.isIntersecting) {
                         entry.target.classList.add('animate-in');
                         observer.unobserve(entry.target);
                     }
                 });
             }, observerOptions);
             // Observe learn-more section elements
             const elements = [
                 this.$refs.heroSection,
                 this.$refs.aboutSection,
                 this.$refs.sustainableSection,
                 this.$refs.platformSection,
                 this.$refs.storiesSection,
                 this.$refs.ctaSection
             ].filter(el => el);
             elements.forEach(el => observer.observe(el));
         }
     }"
     x-init="setTimeout(() => $nextTick(() => initLearnMoreAnimations()), 100)">
    <!-- Hero Section Learn More -->
    <section x-ref="heroSection" class="relative bg-gradient-to-br from-emerald-900 via-emerald-800 to-teal-900 overflow-hidden opacity-0 translate-y-4 transition-all duration-700 ease-out">
        <!-- Background Elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-40 h-40 sm:w-56 sm:h-56 lg:w-72 lg:h-72 bg-white rounded-full mix-blend-overlay filter blur-xl opacity-20 animate-pulse"></div>
            <div class="absolute top-10 right-10 w-40 h-40 sm:w-56 sm:h-56 lg:w-72 lg:h-72 bg-white rounded-full mix-blend-overlay filter blur-xl opacity-20 animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-10 left-1/2 w-40 h-40 sm:w-56 sm:h-56 lg:w-72 lg:h-72 bg-white rounded-full mix-blend-overlay filter blur-xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>
        </div>
        <div class="relative z-10 container mx-auto px-4 sm:px-6 py-16 sm:py-24 lg:py-32">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center px-4 py-2 mb-6 text-sm font-semibold text-emerald-100 bg-emerald-800/50 backdrop-blur-sm rounded-full border border-emerald-700/50">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    About Our Platform & Sustainable Living
                </div>
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                    Learn More About
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-300 to-teal-300">Our Mission</span>
                </h1>
                <p class="text-lg sm:text-xl md:text-2xl text-emerald-100 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Discover how our platform empowers communities to embrace eco-friendly practices that reduce environmental footprint and promote harmony with nature.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4 mb-12">
                    <a href="#sustainable-living" class="px-6 py-3 bg-white text-emerald-700 font-semibold rounded-lg hover:bg-emerald-50 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                        Explore Sustainable Living
                    </a>
                    <a href="{{ route('register') }}" class="px-6 py-3 bg-transparent text-white font-semibold rounded-lg hover:bg-white/10 transition-all duration-300 border-2 border-white backdrop-blur-sm flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Join Our Community
                    </a>
                </div>
                <!-- Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-2xl mx-auto">
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                        <div class="text-2xl font-bold text-white">50,000+</div>
                        <div class="text-sm text-emerald-200">Community Members</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                        <div class="text-2xl font-bold text-white">120+</div>
                        <div class="text-sm text-emerald-200">Countries Reached</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                        <div class="text-2xl font-bold text-white">1.2M+</div>
                        <div class="text-sm text-emerald-200">Sustainable Actions</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                        <div class="text-2xl font-bold text-white">95%</div>
                        <div class="text-sm text-emerald-200">User Satisfaction</div>
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
    <!-- About Our Platform -->
    <section x-ref="aboutSection" class="py-16 sm:py-24 bg-white opacity-0 translate-y-4 transition-all duration-700 ease-out delay-200">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="max-w-4xl mx-auto">
                <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-8 shadow-lg border border-emerald-100">
                    <div class="flex flex-col md:flex-row items-start gap-8">
                        <div class="md:w-2/3">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900">About Our Platform</h3>
                            </div>
                            <p class="text-gray-700 mb-6 text-lg">
                                Our platform is designed to empower individuals and communities to make meaningful changes toward sustainable living. We provide the tools, resources, and community support needed to reduce environmental impact and create harmony between human activities and nature.
                            </p>
                            <div class="space-y-4 mb-8">
                                <div class="flex items-start">
                                    <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <p class="text-gray-700">
                                        <span class="font-semibold">Community-Driven:</span> Built by and for people passionate about environmental conservation
                                    </p>
                                </div>
                                <div class="flex items-start">
                                    <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <p class="text-gray-700">
                                        <span class="font-semibold">Action-Oriented:</span> Practical solutions and measurable impact tracking
                                    </p>
                                </div>
                                <div class="flex items-start">
                                    <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <p class="text-gray-700">
                                        <span class="font-semibold">Educational Focus:</span> Comprehensive learning resources for all knowledge levels
                                    </p>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-4 border border-emerald-200">
                                <h4 class="font-bold text-emerald-800 mb-2">Platform Impact</h4>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-emerald-700">50,000+</div>
                                        <div class="text-sm text-gray-600">Active Members</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-emerald-700">1.2M+</div>
                                        <div class="text-sm text-gray-600">Sustainable Actions</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md:w-1/3">
                            <div class="bg-white rounded-xl p-6 shadow-md border border-emerald-100">
                                <h4 class="font-bold text-gray-900 mb-4">Platform Features</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        <span class="text-gray-700">Carbon footprint calculator</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        <span class="text-gray-700">Sustainable practice guides</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        <span class="text-gray-700">Community challenges</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        <span class="text-gray-700">Progress tracking</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sustainable Living Section -->
    <section id="sustainable-living" class="py-16 sm:py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Sustainable Living</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Embrace eco-friendly practices that reduce your environmental footprint and promote harmony with nature
                </p>
            </div>
            <div class="max-w-6xl mx-auto">
                <!-- Main Sustainable Living Card -->
                <div class="bg-white rounded-2xl shadow-2xl overflow-hidden border border-emerald-100 mb-12">
                    <div class="md:flex">
                        <div class="md:w-1/2 bg-gradient-to-br from-emerald-500 to-teal-600 p-8 text-white">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mr-4">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold">Sustainable Living</h3>
                                    <p class="text-emerald-100">Our Core Philosophy</p>
                                </div>
                            </div>
                            <p class="text-lg mb-6 leading-relaxed">
                                Sustainable living means making conscious choices that reduce our environmental impact while promoting harmony with nature. It's about creating a balance between meeting our needs and preserving the planet for future generations.
                            </p>
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-4">
                                <h4 class="font-bold mb-2">Key Principles</h4>
                                <ul class="space-y-2 text-sm">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Reduce consumption and waste
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Choose renewable resources
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Support local ecosystems
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="md:w-1/2 p-8">
                            <h4 class="text-xl font-bold text-gray-900 mb-4">Why Sustainable Living Matters</h4>
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold text-gray-900">Environmental Protection</h5>
                                        <p class="text-gray-600 text-sm">Reduces pollution, conserves resources, and protects biodiversity for future generations.</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold text-gray-900">Economic Benefits</h5>
                                        <p class="text-gray-600 text-sm">Saves money through reduced consumption and supports sustainable local economies.</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold text-gray-900">Health & Wellbeing</h5>
                                        <p class="text-gray-600 text-sm">Promotes healthier lifestyles through cleaner environments and mindful consumption.</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold text-gray-900">Community Resilience</h5>
                                        <p class="text-gray-600 text-sm">Builds stronger, more self-sufficient communities that can withstand environmental challenges.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sustainable Practices Grid -->
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Practice 1 -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-emerald-100 hover:shadow-xl transition-all duration-300">
                        <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Reduce Waste</h3>
                        <p class="text-gray-600 mb-4">
                            Minimize your environmental footprint by reducing consumption, reusing materials, and properly recycling waste.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Use reusable containers
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Compost organic waste
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Avoid single-use plastics
                            </li>
                        </ul>
                    </div>
                    <!-- Practice 2 -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-emerald-100 hover:shadow-xl transition-all duration-300">
                        <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Energy Conservation</h3>
                        <p class="text-gray-600 mb-4">
                            Reduce energy consumption through efficient practices and transition to renewable energy sources.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Use LED lighting
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Install solar panels
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Optimize home insulation
                            </li>
                        </ul>
                    </div>
                    <!-- Practice 3 -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-emerald-100 hover:shadow-xl transition-all duration-300">
                        <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Sustainable Food</h3>
                        <p class="text-gray-600 mb-4">
                            Make food choices that support local producers and reduce environmental impact from production and transportation.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Buy local and seasonal
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Reduce meat consumption
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-emerald-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Grow your own food
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How Our Platform Helps -->
    <section x-ref="platformSection" class="py-16 sm:py-24 bg-white opacity-0 translate-y-4 transition-all duration-700 ease-out delay-400">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">How Our Platform Supports Sustainable Living</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    We provide the tools, community, and resources to make sustainable living accessible and achievable for everyone
                </p>
            </div>
            <div class="max-w-5xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Feature 1 -->
                    <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-6 border border-emerald-100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">Track Your Impact</h3>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Monitor your environmental footprint with our easy-to-use tracking tools and see the real difference your sustainable choices make.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Carbon footprint calculator</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Waste reduction metrics</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Energy savings dashboard</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Feature 2 -->
                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-6 border border-blue-100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">Join a Supportive Community</h3>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Connect with like-minded individuals, share experiences, and learn from others on the same sustainable living journey.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Local sustainability groups</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Expert Q&A sessions</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Success story sharing</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Feature 3 -->
                    <div class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-2xl p-6 border border-purple-100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">Access Educational Resources</h3>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Learn from comprehensive guides, tutorials, and expert content designed to help you adopt sustainable practices effectively.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-purple-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Step-by-step guides</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-purple-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Video tutorials</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-purple-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Latest research summaries</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Feature 4 -->
                    <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl p-6 border border-amber-100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">Participate in Challenges</h3>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Join community challenges that make sustainable living fun, engaging, and rewarding while creating real environmental impact.
                        </p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Monthly sustainability goals</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Friendly competitions</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Achievement badges</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Success Stories -->
    <section x-ref="storiesSection" class="py-16 sm:py-24 bg-gradient-to-b from-gray-50 to-white opacity-0 translate-y-4 transition-all duration-700 ease-out delay-500">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Sustainable Living Success Stories</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Discover how our community members have transformed their lives through sustainable practices
                </p>
            </div>
            <div class="max-w-5xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Story 1 -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                        <div class="flex items-center mb-4">
                            <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Urban Gardening Transformation</h3>
                                <p class="text-gray-600">Sarah, Urban Resident</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">
                            "Using the platform's resources, I transformed my small balcony into a productive vegetable garden. I now grow 40% of my vegetables, reduced my grocery bill by 30%, and connected with local gardeners to share tips and surplus produce."
                        </p>
                        <div class="flex justify-between text-sm text-gray-500">
                            <span>6 months progress</span>
                            <span>40% food self-sufficiency</span>
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
                                <h3 class="text-xl font-bold text-gray-900">Zero-Waste Journey</h3>
                                <p class="text-gray-600">Mark & Family</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">
                            "Our family reduced household waste by 85% in one year by following the platform's zero-waste challenges. We saved over $2,000 annually by reducing consumption and learned creative ways to repurpose items instead of discarding them."
                        </p>
                        <div class="flex justify-between text-sm text-gray-500">
                            <span>1 year journey</span>
                            <span>85% waste reduction</span>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-12">
                    <a href="#" class="inline-flex items-center text-emerald-600 font-semibold hover:text-emerald-700 transition-colors">
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
    <section x-ref="ctaSection" class="py-16 sm:py-24 bg-gradient-to-r from-emerald-600 to-teal-600 text-white opacity-0 translate-y-4 transition-all duration-700 ease-out delay-600">
        <div class="container mx-auto px-4 sm:px-6 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold mb-6">Ready to Embrace Sustainable Living?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
                Join our community today and start your journey toward reducing your environmental footprint while promoting harmony with nature.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('register') }}" class="px-8 py-3 bg-white text-emerald-700 font-semibold rounded-lg hover:bg-emerald-50 transition-colors duration-300 shadow-lg flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Start Your Journey
                </a>
                <a href="#sustainable-living" class="px-8 py-3 bg-transparent text-white font-semibold rounded-lg hover:bg-white/10 transition-colors duration-300 border-2 border-white flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Learn More First
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
        /* Scroll-triggered animations */
        .animate-in {
            opacity: 1 !important;
            transform: translateY(0) !important;
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
</div>
</x-app-layout>
