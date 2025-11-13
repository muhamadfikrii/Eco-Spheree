<div>
    <section 
        x-data="{ 
            showText: false, 
            features: [
                { icon: 'map-marked-alt', title: 'Interactive Map', description: 'Real-time biodiversity visualization' },
                { icon: 'flag', title: 'Local Reports', description: 'Community-driven environmental monitoring' },
                { icon: 'chart-line', title: 'Sustainability Scores', description: 'Regional ecosystem health metrics' },
                { icon: 'database', title: 'Data Analytics', description: 'Advanced environmental insights' }
            ],
            activeFeature: 0
        }" 
        x-init="setTimeout(() => showText = true, 400)"
        style="background-image: linear-gradient(rgba(15, 42, 61, 0.85), rgba(26, 60, 52, 0.2)), url('{{ asset('image/hero.jpg') }}');"
        class="relative flex items-center justify-center bg-cover bg-center px-6 py-24 md:py-32 overflow-hidden min-h-[90vh]">

        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-56 h-56 bg-[#4a8c6d]/10 rounded-full filter blur-3xl animate-float-slow"></div>
            <div class="absolute bottom-24 right-10 w-72 h-72 bg-[#e6b325]/5 rounded-full filter blur-3xl animate-float-medium"></div>
            <div class="absolute top-1/2 left-1/3 w-96 h-96 bg-[#0f2a3d]/20 rounded-full filter blur-3xl animate-float-slow"></div>
        </div>

        <!-- Main Content Container -->
        <div class="relative z-10 max-w-7xl mx-auto w-full">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="text-left">
                    <div 
                        x-show="showText" 
                        x-transition:enter="transition ease-out duration-1000"
                        x-transition:enter-start="opacity-0 transform translate-x-8"
                        x-transition:enter-end="opacity-100 transform translate-x-0"
                        class="space-y-6"
                    >
                        <!-- Badge -->
                        <div class="inline-flex items-center bg-[#4a8c6d]/20 text-[#e6b325] px-4 py-2 rounded-full text-sm font-medium mb-4 border border-[#4a8c6d]/30">
                            <i class="fas fa-leaf mr-2"></i>
                            Digital Innovation for Sustainable Nature
                        </div>

                        <!-- Main Heading -->
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-light text-[#e8f4f0] leading-tight">
                            Real-Time
                            <span class="block font-normal text-[#e6b325] mt-2">Biodiversity Monitoring</span>
                        </h1>

                        <!-- Subheading -->
                        <p class="text-xl text-[#a0b8b0] leading-relaxed max-w-2xl">
                            Transform environmental data into actionable insights with our interactive platform for hyper-local ecosystem monitoring and conservation.
                        </p>

                        <!-- CTA Buttons -->
                        <div class="flex flex-col sm:flex-row gap-4 mt-8">
                            <a href="#map-section" class="px-8 py-4 bg-gradient-to-r from-[#4a8c6d] to-[#3a7a5d] hover:from-[#e6b325] hover:to-[#d4a320] text-white rounded-lg transition-all duration-300 font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center justify-center group">
                                <i class="fas fa-map-marked-alt mr-3 group-hover:scale-110 transition-transform"></i>
                                Explore Interactive Map
                            </a>
                        </div>

                        <!-- Trust Indicators -->
                        <div class="flex items-center gap-8 pt-6 border-t border-[#4a8c6d]/20 mt-8">
                            <div class="flex items-center gap-4">
                                <div class="flex -space-x-2">
                                    <div class="w-8 h-8 bg-[#4a8c6d] rounded-full border-2 border-[#0f2a3d]"></div>
                                    <div class="w-8 h-8 bg-[#e6b325] rounded-full border-2 border-[#0f2a3d]"></div>
                                    <div class="w-8 h-8 bg-[#1a3c34] rounded-full border-2 border-[#0f2a3d]"></div>
                                </div>
                                <div class="text-[#a0b8b0] text-sm">
                                    <div class="font-semibold text-[#e8f4f0]">15K+</div>
                                    <div>Active Users</div>
                                </div>
                            </div>
                            <div class="text-[#a0b8b0] text-sm">
                                <div class="font-semibold text-[#e8f4f0]">50+</div>
                                <div>Partners</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="absolute bottom-5 lg:bottom-20 left-1/2 transform -translate-x-1/2">
            <div class="flex flex-col items-center text-white animate-bounce">
                <a href="#purpose" class="text-sm mb-2">Explore Platform
                <i class="fas fa-chevron-down block text-center"></i>
                </a>
            </div>
        </div>

        <!-- Custom Animation Styles -->
        <style>
            @keyframes float-slow {
                0%, 100% { transform: translateY(0px) rotate(0deg); }
                50% { transform: translateY(-20px) rotate(180deg); }
            }
            @keyframes float-medium {
                0%, 100% { transform: translateX(0px) translateY(0px); }
                33% { transform: translateX(10px) translateY(-15px); }
                66% { transform: translateX(-5px) translateY(10px); }
            }
            .animate-float-slow {
                animation: float-slow 20s ease-in-out infinite;
            }
            .animate-float-medium {
                animation: float-medium 15s ease-in-out infinite;
            }
        </style>
    </section>
</div>