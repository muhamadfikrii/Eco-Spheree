<x-app-layout>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#0F172A',
                        'secondary': '#1E293B',
                        'accent': '#3B82F6',
                        'accent-light': '#60A5FA',
                        'accent-dark': '#2563EB',
                        'success': '#10B981',
                        'warning': '#F59E0B',
                        'danger': '#EF4444',
                        'light': '#F8FAFC',
                        'dark': '#111827',
                        'gray-50': '#F9FAFB',
                        'gray-100': '#F3F4F6',
                        'gray-200': '#E5E7EB',
                        'gray-300': '#D1D5DB',
                        'gray-400': '#9CA3AF',
                        'gray-500': '#6B7280',
                        'gray-600': '#4B5563',
                        'gray-700': '#374151',
                        'gray-800': '#1F2937',
                        'gray-900': '#111827',
                    },
                    fontFamily: {
                        'display': ['Inter Display', 'sans-serif'],
                    },
                    animation: {
                        'float-slow': 'float 20s ease-in-out infinite',
                        'float-medium': 'float 15s ease-in-out infinite',
                        'fade-in': 'fadeIn 0.8s ease-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'scale-in': 'scaleIn 0.5s ease-out',
                        'gradient-shift': 'gradientShift 8s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        scaleIn: {
                            '0%': { opacity: '0', transform: 'scale(0.9)' },
                            '100%': { opacity: '1', transform: 'scale(1)' },
                        },
                        gradientShift: {
                            '0%, 100%': { backgroundPosition: '0% 50%' },
                            '50%': { backgroundPosition: '100% 50%' },
                        }
                    },
                    backgroundImage: {
                        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                        'gradient-conic': 'conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))',
                    }
                }
            }
        }
    </script>

    <div class="min-h-screen bg-gradient-to-br from-gray-900 via-primary to-secondary text-white" x-data="partnerPage()">
        <!-- Hero Section -->
        <section class="relative overflow-hidden">
            <!-- Background Elements -->
            <div class="absolute inset-0">
                <div class="absolute top-0 left-0 w-96 h-96 bg-accent/10 rounded-full filter blur-3xl animate-float-slow"></div>
                <div class="absolute bottom-0 right-0 w-96 h-96 bg-success/10 rounded-full filter blur-3xl animate-float-medium"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-warning/5 rounded-full filter blur-3xl animate-float-slow"></div>
                
                <!-- Grid Pattern -->
                <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%239CA3AF" fill-opacity="0.05"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
                <div class="text-center">
                    <div class="inline-flex items-center bg-accent/10 backdrop-blur-sm text-accent px-4 py-2 rounded-full text-sm font-medium mb-8 border border-accent/20 animate-scale-in">
                        <i class="fas fa-handshake mr-2"></i>
                        Strategic Partnership Program
                    </div>
                    
                    <h1 class="text-4xl sm:text-5xl lg:text-7xl font-bold mb-6 leading-tight font-display">
                        <span class="block text-white">Partner With</span>
                        <span class="block bg-gradient-to-r from-accent to-accent-light bg-clip-text text-transparent">EcoSphere</span>
                    </h1>
                    
                    <p class="text-xl text-gray-300 mb-12 leading-relaxed max-w-3xl mx-auto">
                        Join our global network of organizations committed to environmental sustainability. 
                        Together, we can amplify our impact and drive meaningful change for our planet.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in" style="animation-delay: 0.3s;">
                        <a href="#options" 
                           @click="smoothScroll('options')"
                           class="group relative overflow-hidden bg-gradient-to-r from-accent to-accent-dark hover:from-accent-dark hover:to-accent text-white px-8 py-4 rounded-xl font-semibold transition-all duration-500 transform hover:-translate-y-1 shadow-xl hover:shadow-2xl">
                            <span class="relative z-10 flex items-center">
                                <i class="fas fa-rocket mr-3 group-hover:scale-110 transition-transform"></i>
                                Explore Partnerships
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                        </a>
                        <a href="#contact" 
                           @click="smoothScroll('contact')"
                           class="group bg-gray-800/50 backdrop-blur-sm border border-gray-700 hover:border-accent hover:bg-gray-800/70 text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 flex items-center">
                            <i class="fas fa-info-circle mr-3 group-hover:scale-110 transition-transform"></i>
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </section>

       <!-- Partners Section -->
        <section class="py-16 bg-gradient-to-b from-transparent to-gray-800/50 border-y border-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Heading -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Major Companies That Have Become Our Partners</h2>
                    <p class="text-gray-400 max-w-3xl mx-auto">
                        We collaborate with industry leaders, academic institutions, and global organizations to drive tangible action for sustainable development across Indonesia.
                    </p>
                </div>

                <!-- Partners Grid -->
                <div class="grid grid-cols-2 md:grid-cols-3 lg:flex lg:flex-wrap lg:items-center lg:justify-center gap-8">
                    <!-- Partner 1: Universitas Indonesia -->
                    <div class="bg-gray-800/40 backdrop-blur-sm rounded-2xl p-6 border border-white/10 h-28 w-full lg:w-40 transition-all duration-300 hover:border-accent hover:scale-105 animate-scale-in flex items-center justify-center" style="animation-delay: 0.1s;">
                        <img src="{{ asset('image/ui.webp') }}" alt="Logo Universitas Indonesia" class="max-h-full w-auto object-contain">
                    </div>
                    <!-- Partner 2: Google -->
                    <div class="bg-gray-800/40 backdrop-blur-sm rounded-2xl p-6 border border-white/10 h-28 w-full lg:w-40 transition-all duration-300 hover:border-accent hover:scale-105 animate-scale-in flex items-center justify-center" style="animation-delay: 0.2s;">
                        <img src="{{ asset('image/google.webp') }}" alt="Logo Google" class="max-h-full w-auto object-contain">
                    </div>
                    <!-- Partner 3: World Bank -->
                    <div class="bg-gray-800/40 backdrop-blur-sm rounded-2xl p-6 border border-white/10 h-28 w-full lg:w-40 transition-all duration-300 hover:border-accent hover:scale-105 animate-scale-in flex items-center justify-center" style="animation-delay: 0.3s;">
                        <img src="{{ asset('image/World-Bank.webp') }}" alt="Logo World Bank" class="max-h-full w-auto object-contain">
                    </div>
                    <!-- Partner 4: UNDP -->
                    <div class="bg-gray-800/40 backdrop-blur-sm rounded-2xl p-6 border border-white/10 h-28 w-full lg:w-40 transition-all duration-300 hover:border-accent hover:scale-105 animate-scale-in flex items-center justify-center" style="animation-delay: 0.4s;">
                        <img src="{{ asset('image/undp.png') }}" alt="Logo UNDP" class="max-h-full w-auto object-contain">
                    </div>
                    <!-- Partner 5: WWF -->
                    <div class="bg-gray-800/40 backdrop-blur-sm rounded-2xl p-6 border border-white/10 h-28 w-full lg:w-40 transition-all duration-300 hover:border-accent hover:scale-105 animate-scale-in flex items-center justify-center" style="animation-delay: 0.5s;">
                        <img src="{{ asset('image/wwf.png') }}" alt="Logo WWF" class="max-h-full w-auto object-contain">
                    </div>
                    <!-- Partner 6: Ministry -->
                    <div class="bg-gray-800/40 backdrop-blur-sm rounded-2xl p-6 border border-white/10 h-28 w-full lg:w-40 transition-all duration-300 hover:border-accent hover:scale-105 animate-scale-in flex items-center justify-center" style="animation-delay: 0.6s;">
                        <img src="{{ asset('image/ministry.png') }}" alt="Logo Ministry" class="max-h-full w-auto object-contain">
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section id="benefits" class="py-20 bg-gray-800/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold mb-4 text-white">Partnership Benefits</h2>
                    <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                        Unlock exclusive benefits designed to amplify your environmental impact
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="group bg-gray-800/40 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-accent/50 transition-all duration-500 hover:transform hover:-translate-y-2 hover:shadow-xl">
                        <div class="w-16 h-16 bg-gradient-to-br from-accent/20 to-accent/10 rounded-2xl flex items-center justify-center mb-6 group-hover:from-accent/40 group-hover:to-accent/20 transition-all duration-500">
                            <i class="fa-solid fa-globe text-accent text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Global Network Access</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Connect with leading environmental organizations, researchers, and policymakers across our global partnership network.
                        </p>
                    </div>

                    <div class="group bg-gray-800/40 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-accent/50 transition-all duration-500 hover:transform hover:-translate-y-2 hover:shadow-xl">
                        <div class="w-16 h-16 bg-gradient-to-br from-accent/20 to-accent/10 rounded-2xl flex items-center justify-center mb-6 group-hover:from-accent/40 group-hover:to-accent/20 transition-all duration-500">
                            <i class="fas fa-database text-accent text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Premium Data Access</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Get exclusive access to our comprehensive environmental datasets, analytics tools, and real-time monitoring capabilities.
                        </p>
                    </div>

                    <div class="group bg-gray-800/40 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-accent/50 transition-all duration-500 hover:transform hover:-translate-y-2 hover:shadow-xl">
                        <div class="w-16 h-16 bg-gradient-to-br from-accent/20 to-accent/10 rounded-2xl flex items-center justify-center mb-6 group-hover:from-accent/40 group-hover:to-accent/20 transition-all duration-500">
                            <i class="fas fa-bullhorn text-accent text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Brand Visibility</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Showcase your commitment to sustainability through featured placement on our platform and joint marketing campaigns.
                        </p>
                    </div>

                    <div class="group bg-gray-800/40 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-accent/50 transition-all duration-500 hover:transform hover:-translate-y-2 hover:shadow-xl">
                        <div class="w-16 h-16 bg-gradient-to-br from-accent/20 to-accent/10 rounded-2xl flex items-center justify-center mb-6 group-hover:from-accent/40 group-hover:to-accent/20 transition-all duration-500">
                            <i class="fas fa-tools text-accent text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Technical Support</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Receive dedicated technical assistance, API access, and custom integration support from our engineering team.
                        </p>
                    </div>

                    <div class="group bg-gray-800/40 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-accent/50 transition-all duration-500 hover:transform hover:-translate-y-2 hover:shadow-xl">
                        <div class="w-16 h-16 bg-gradient-to-br from-accent/20 to-accent/10 rounded-2xl flex items-center justify-center mb-6 group-hover:from-accent/40 group-hover:to-accent/20 transition-all duration-500">
                            <i class="fas fa-graduation-cap text-accent text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Research Collaboration</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Collaborate on cutting-edge environmental research projects and co-author publications with our scientific team.
                        </p>
                    </div>

                    <div class="group bg-gray-800/40 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-accent/50 transition-all duration-500 hover:transform hover:-translate-y-2 hover:shadow-xl">
                        <div class="w-16 h-16 bg-gradient-to-br from-accent/20 to-accent/10 rounded-2xl flex items-center justify-center mb-6 group-hover:from-accent/40 group-hover:to-accent/20 transition-all duration-500">
                            <i class="fas fa-award text-accent text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Recognition</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Receive official EcoSphere partnership certification and be featured in our annual impact reports.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partnership Options -->
        <section id="options" class="py-20 relative overflow-hidden">
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-gradient-to-br from-gray-900 to-blue-900"></div>
                
                <!-- Animated Particles -->
                <div class="particles-container absolute inset-0">
                    <div class="particle particle-1"></div>
                    <div class="particle particle-2"></div>
                    <div class="particle particle-3"></div>
                    <div class="particle particle-4"></div>
                    <div class="particle particle-5"></div>
                    <div class="particle particle-6"></div>
                    <div class="particle particle-7"></div>
                    <div class="particle particle-8"></div>
                </div>
                
                <!-- Grid Pattern -->
                <div class="absolute inset-0 opacity-5">
                    <div class="absolute inset-0" style="background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg"%3E%3Cg' fill='none fill-rule='evenodd'%3E%3Cg fill='%239CA3AF' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                </div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold mb-4 text-white animate-fade-in-up">Partnership Options</h2>
                    <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                        Choose collaboration model that aligns with your organization's goals
                    </p>
                </div>

                <div class="grid lg:grid-cols-3 gap-12">
                    <!-- Corporate Partnerships -->
                    <div class="group partnership-card" data-partnership="corporate">
                        <div class="card-inner bg-gradient-to-br from-gray-800/80 to-gray-900/80 backdrop-blur-xl rounded-3xl p-8 border border-gray-700/50 transform transition-all duration-700 hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/20">
                            <!-- Glow Effect -->
                            <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500/20 to-purple-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                            
                            <div class="relative z-10">
                                <div class="flex items-center mb-6">
                                    <div class="icon-container relative">
                                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mr-6 group-hover:animate-pulse-slow">
                                            <i class="fas fa-building text-white text-2xl"></i>
                                        </div>
                                        <!-- Orbiting Particles -->
                                        <div class="absolute inset-0">
                                            <div class="orbit orbit-1"></div>
                                            <div class="orbit orbit-2"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-white mb-1">Corporate Partnerships</h3>
                                        <p class="text-gray-400">For businesses driving sustainability</p>
                                    </div>
                                </div>
                                
                                <ul class="space-y-4 mb-8">
                                    <li class="feature-item flex items-start text-gray-300 group-hover:text-white transition-colors">
                                        <div class="w-8 h-8 bg-blue-500/20 rounded-lg flex items-center justify-center mr-3 group-hover:bg-blue-500/40 transition-colors">
                                            <i class="fas fa-chart-line text-blue-400 text-sm group-hover:text-white transition-colors"></i>
                                        </div>
                                        <span>ESG reporting and analytics</span>
                                    </li>
                                    <li class="feature-item flex items-start text-gray-300 group-hover:text-white transition-colors">
                                        <div class="w-8 h-8 bg-blue-500/20 rounded-lg flex items-center justify-center mr-3 group-hover:bg-blue-500/40 transition-colors">
                                            <i class="fas fa-link text-blue-400 text-sm group-hover:text-white transition-colors"></i>
                                        </div>
                                        <span>Sustainable supply chain insights</span>
                                    </li>
                                    <li class="feature-item flex items-start text-gray-300 group-hover:text-white transition-colors">
                                        <div class="w-8 h-8 bg-blue-500/20 rounded-lg flex items-center justify-center mr-3 group-hover:bg-blue-500/40 transition-colors">
                                            <i class="fas fa-leaf text-blue-400 text-sm group-hover:text-white transition-colors"></i>
                                        </div>
                                        <span>Carbon footprint monitoring</span>
                                    </li>
                                    <li class="feature-item flex items-start text-gray-300 group-hover:text-white transition-colors">
                                        <div class="w-8 h-8 bg-blue-500/20 rounded-lg flex items-center justify-center mr-3 group-hover:bg-blue-500/40 transition-colors">
                                            <i class="fas fa-award text-blue-400 text-sm group-hover:text-white transition-colors"></i>
                                        </div>
                                        <span>Brand sustainability certification</span>
                                    </li>
                                </ul>
                                
                                <a href="{{ route('contact-partner') }}"
                                        class="w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white py-3 rounded-xl font-semibold transition-all duration-500 transform hover:-translate-y-1 shadow-lg hover:shadow-blue-500/30 flex items-center justify-center">
                                    <span class="button-text">Explore Corporate Partnership</span>
                                    <div class="button-overlay"></div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Research & Academia -->
                    <div class="group partnership-card" data-partnership="research">
                        <div class="card-inner bg-gradient-to-br from-gray-800/80 to-gray-900/80 backdrop-blur-xl rounded-3xl p-8 border border-gray-700/50 transform transition-all duration-700 hover:scale-105 hover:shadow-2xl hover:shadow-green-500/20">
                            <!-- Glow Effect -->
                            <div class="absolute -inset-0.5 bg-gradient-to-r from-green-500/20 to-teal-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                            
                            <div class="relative z-10">
                                <div class="flex items-center mb-6">
                                    <div class="icon-container relative">
                                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-500 rounded-2xl flex items-center justify-center mr-6 group-hover:animate-pulse-slow">
                                            <i class="fas fa-graduation-cap text-white text-2xl"></i>
                                        </div>
                                        <!-- Orbiting Particles -->
                                        <div class="absolute inset-0">
                                            <div class="orbit orbit-1"></div>
                                            <div class="orbit orbit-2"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-white mb-1">Research & Academia</h3>
                                        <p class="text-gray-400">For universities and research institutions</p>
                                    </div>
                                </div>
                                
                                <ul class="space-y-4 mb-8">
                                    <li class="feature-item flex items-start text-gray-300 group-hover:text-white transition-colors">
                                        <div class="w-8 h-8 bg-green-500/20 rounded-lg flex items-center justify-center mr-3 group-hover:bg-green-500/40 transition-colors">
                                            <i class="fas fa-database text-green-400 text-sm group-hover:text-white transition-colors"></i>
                                        </div>
                                        <span>Access to real-time environmental data</span>
                                    </li>
                                    <li class="feature-item flex items-start text-gray-300 group-hover:text-white transition-colors">
                                        <div class="w-8 h-8 bg-green-500/20 rounded-lg flex items-center justify-center mr-3 group-hover:bg-green-500/40 transition-colors">
                                            <i class="fas fa-microscope text-green-400 text-sm group-hover:text-white transition-colors"></i>
                                        </div>
                                        <span>Collaborative research projects</span>
                                    </li>
                                    <li class="feature-item flex items-start text-gray-300 group-hover:text-white transition-colors">
                                        <div class="w-8 h-8 bg-green-500/20 rounded-lg flex items-center justify-center mr-3 group-hover:bg-green-500/40 transition-colors">
                                            <i class="fas fa-book text-green-400 text-sm group-hover:text-white transition-colors"></i>
                                        </div>
                                        <span>Publication opportunities</span>
                                    </li>
                                    <li class="feature-item flex items-start text-gray-300 group-hover:text-white transition-colors">
                                        <div class="w-8 h-8 bg-green-500/20 rounded-lg flex items-center justify-center mr-3 group-hover:bg-green-500/40 transition-colors">
                                            <i class="fas fa-user-graduate text-green-400 text-sm group-hover:text-white transition-colors"></i>
                                        </div>
                                        <span>Student internship programs</span>
                                    </li>
                                </ul>
                                
                                <a href="{{ route('contact-partner') }}"
                                        class="w-full bg-gradient-to-r from-green-500 to-teal-500 hover:from-green-600 hover:to-teal-600 text-white py-3 rounded-xl font-semibold transition-all duration-500 transform hover:-translate-y-1 shadow-lg hover:shadow-green-500/30 flex items-center justify-center">
                                    <span class="button-text">Explore Research Collaboration</span>
                                    <div class="button-overlay"></div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Technology Partners -->
                     <div class="group partnership-card" data-partnership="corporate">
                        <div class="card-inner bg-gradient-to-br from-gray-800/80 to-gray-900/80 backdrop-blur-xl rounded-3xl p-8 border border-gray-700/50 transform transition-all duration-700 hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/20">
                            <!-- Glow Effect -->
                           <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500/20 to-purple-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                            
                            <div class="relative z-10">
                                <div class="flex items-center mb-6">
                                    <div class="icon-container relative">
                                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mr-6 group-hover:animate-pulse-slow">
                                            <i class="fas fa-microchip text-white text-2xl"></i>
                                        </div>
                                        <!-- Orbiting Particles -->
                                        <div class="absolute inset-0">
                                            <div class="orbit orbit-1"></div>
                                            <div class="orbit orbit-2"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-white mb-1">Technology Partners</h3>
                                        <p class="text-gray-400">For tech companies and startups</p>
                                    </div>
                                </div>
                                
                                <ul class="space-y-4 mb-8">
                                    <li class="feature-item flex items-start text-gray-300 group-hover:text-white transition-colors">
                                        <div class="w-8 h-8 bg-blue-500/20 rounded-lg flex items-center justify-center mr-3 group-hover:bg-blue-500/40 transition-colors">
                                            <i class="fas fa-code text-blue-400 text-sm group-hover:text-white transition-colors"></i>
                                        </div>
                                        <span>API integration opportunities</span>
                                    </li>
                                    <li class="feature-item flex items-start text-gray-300 group-hover:text-white transition-colors">
                                        <div class="w-8 h-8 bg-blue-500/20 rounded-lg flex items-center justify-center mr-3 group-hover:bg-blue-500/40 transition-colors">
                                            <i class="fas fa-flask text-blue-400 text-sm group-hover:text-white transition-colors"></i>
                                        </div>
                                        <span>Co-development projects</span>
                                    </li>
                                    <li class="feature-item flex items-start text-gray-300 group-hover:text-white transition-colors">
                                        <div class="w-8 h-8 bg-blue-500/20 rounded-lg flex items-center justify-center mr-3 group-hover:bg-blue-500/40 transition-colors">
                                            <i class="fas fa-exchange-alt text-blue-400 text-sm group-hover:text-white transition-colors"></i>
                                        </div>
                                        <span>Data exchange partnerships</span>
                                    </li>
                                    <li class="feature-item flex items-start text-gray-300 group-hover:text-white transition-colors">
                                        <div class="w-8 h-8 bg-blue-500/20 rounded-lg flex items-center justify-center mr-3 group-hover:bg-blue-500/40 transition-colors">
                                            <i class="fas fa-rocket text-blue-400 text-sm group-hover:text-white transition-colors"></i>
                                        </div>
                                        <span>Innovation lab access</span>
                                    </li>
                                </ul>
                                
                                <a href="{{ route('contact-partner') }}"
                                        class="w-full bg-gradient-to-r from-blue-500 to-blue-500 hover:from-blue-600 hover:to-blue-600 text-white py-3 rounded-xl font-semibold transition-all duration-500 transform hover:-translate-y-1 shadow-lg hover:shadow-blue-500/30 flex items-center justify-center">
                                    <span class="button-text">Explore Tech Partnership</span>
                                    <div class="button-overlay"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <!-- Success Stories -->
        <section id="stories" class="py-20 bg-gray-800/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold mb-4 text-white">Success Stories</h2>
                    <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                        Discover how our partners are making a difference through collaboration
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-gradient-to-br from-gray-800/80 to-gray-900/80 backdrop-blur-sm rounded-2xl p-6 border border-gray-700/50 hover:border-accent/30 transition-all duration-500 animate-scale-in">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-accent rounded-xl flex items-center justify-center text-white font-bold mr-4">
                                WWF
                            </div>
                            <div>
                                <div class="font-semibold text-white">World Wildlife Fund</div>
                                <div class="text-gray-400 text-sm">Strategic Partner since 2022</div>
                            </div>
                        </div>
                        <p class="text-gray-300 italic">
                            "EcoSphere's data platform has revolutionized our conservation efforts. The partnership has enabled us to make data-driven decisions that directly impact wildlife protection."
                        </p>
                        <div class="mt-4 flex items-center">
                            <i class="fas fa-star text-accent"></i>
                            <i class="fas fa-star text-accent"></i>
                            <i class="fas fa-star text-accent"></i>
                            <i class="fas fa-star text-accent"></i>
                            <i class="fas fa-star text-accent"></i>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-gray-800/80 to-gray-900/80 backdrop-blur-sm rounded-2xl p-6 border border-gray-700/50 hover:border-accent/30 transition-all duration-500 animate-scale-in" style="animation-delay: 0.1s;">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-warning rounded-xl flex items-center justify-center text-gray-900 font-bold mr-4">
                                UI
                            </div>
                            <div>
                                <div class="font-semibold text-white">University of Indonesia</div>
                                <div class="text-gray-400 text-sm">Research Partner since 2021</div>
                            </div>
                        </div>
                        <p class="text-gray-300 italic">
                            "The collaboration with EcoSphere has provided our researchers with unprecedented access to environmental data, accelerating our climate change research significantly."
                        </p>
                        <div class="mt-4 flex items-center">
                            <i class="fas fa-star text-accent"></i>
                            <i class="fas fa-star text-accent"></i>
                            <i class="fas fa-star text-accent"></i>
                            <i class="fas fa-star text-accent"></i>
                            <i class="fas fa-star text-accent"></i>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-gray-800/80 to-gray-900/80 backdrop-blur-sm rounded-2xl p-6 border border-gray-700/50 hover:border-accent/30 transition-all duration-500 animate-scale-in" style="animation-delay: 0.2s;">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-success rounded-xl flex items-center justify-center text-white font-bold mr-4">
                                KLHK
                            </div>
                            <div>
                                <div class="font-semibold text-white">Ministry of Environment</div>
                                <div class="text-gray-400 text-sm">Government Partner since 2020</div>
                            </div>
                        </div>
                        <p class="text-gray-300 italic">
                            "EcoSphere's platform has revolutionized our environmental monitoring capabilities and public engagement efforts."
                        </p>
                        <div class="mt-4 flex items-center">
                            <i class="fas fa-star text-accent"></i>
                            <i class="fas fa-star text-accent"></i>
                            <i class="fas fa-star text-accent"></i>
                            <i class="fas fa-star text-accent"></i>
                            <i class="fas fa-star text-accent"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>