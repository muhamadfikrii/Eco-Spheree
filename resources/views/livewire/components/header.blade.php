<div>
    <section
        x-data="{
            showText: false,
            features: [
                { icon: 'microchip', title: 'Real-Time Telemetry', description: 'Live machine & sensor data' },
                { icon: 'chart-line', title: 'Predictive Analytics', description: 'AI-driven failure detection' },
                { icon: 'robot', title: 'Automation Control', description: 'Smart factory integration' },
                { icon: 'bolt', title: 'Energy Efficiency', description: 'Optimize power consumption' }
            ],
            activeFeature: 0,
            initScrollAnimations() {
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

                const elements = [
                    this.$refs.badge,
                    this.$refs.heading,
                    this.$refs.subheading,
                    this.$refs.ctaButtons,
                    this.$refs.trustIndicators
                ].filter(el => el);

                elements.forEach(el => observer.observe(el));
            }
        }"
        x-init="setTimeout(() => showText = true, 400); setTimeout(() => $nextTick(() => initScrollAnimations()), 100)"
        style="background-image: linear-gradient(135deg, rgba(2,6,23,0.92) 0%, rgba(15,23,42,0.85) 100%), url('https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=1600&q=80');"
        class="relative flex items-center justify-center bg-cover bg-center px-6 py-24 md:py-32 overflow-hidden min-h-[90vh] bg-fixed">

        <!-- Animated Industrial Geometric Elements (Blue/Cyan Tones) -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-64 h-64 bg-[#38bdf8]/5 rounded-full filter blur-3xl animate-float-slow"></div>
            <div class="absolute bottom-24 right-10 w-80 h-80 bg-[#3b82f6]/5 rounded-full filter blur-3xl animate-float-medium"></div>
            <div class="absolute top-1/2 left-1/3 w-96 h-96 bg-[#0f172a]/40 rounded-full filter blur-3xl animate-float-slow" style="animation-delay: 2s;"></div>
            <div class="absolute top-40 right-1/4 w-48 h-48 bg-[#06b6d4]/5 rounded-full filter blur-3xl animate-float-medium" style="animation-delay: 1s;"></div>
            <!-- Industrial Grid Pattern -->
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgdmlld0JveD0iMCAwIDQwIDQwIj48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjAuNSIgc3Ryb2tlLW9wYWNpdHk9IjAuMDMiIGQ9Ik0wIDQwTDQwIDBNNDAgNDBMMCAwIi8+PC9zdmc+')] opacity-20"></div>
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
                        <div x-ref="badge" class="inline-flex items-center bg-[#0f172a]/80 text-[#38bdf8] px-4 py-2 rounded-full text-sm font-mono font-medium mb-4 border border-[#38bdf8]/40 backdrop-blur-sm opacity-0 translate-y-4 transition-all duration-700 ease-out">
                            <i class="fas fa-microchip mr-2"></i>
                            INDUSTRY 4.0 · REAL-TIME INTELLIGENCE
                        </div>

                        <!-- Main Heading -->
                        <h1 x-ref="heading" class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight opacity-0 translate-y-4 transition-all duration-700 ease-out delay-100 tracking-tight">
                            Industrial
                            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#38bdf8] to-[#818cf8] mt-2">Smart Analytics</span>
                        </h1>

                        <!-- Subheading -->
                        <p x-ref="subheading" class="text-xl text-gray-300 leading-relaxed max-w-2xl opacity-0 translate-y-4 transition-all duration-700 ease-out delay-200 font-light">
                            Transform your factory floor with AI-powered insights, predictive maintenance, and live machine telemetry. Maximize OEE and reduce downtime.
                        </p>

                        <!-- CTA Buttons -->
                        <div x-ref="ctaButtons" class="flex flex-col sm:flex-row gap-4 mt-8 opacity-0 translate-y-4 transition-all duration-700 ease-out delay-300">
                            <a href="#dashboard" class="px-8 py-4 bg-gradient-to-r from-[#2563eb] to-[#1d4ed8] hover:from-[#38bdf8] hover:to-[#2563eb] text-white rounded-lg transition-all duration-300 font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center justify-center group">
                                <i class="fas fa-chart-line mr-3 group-hover:scale-110 transition-transform"></i>
                                Launch Industrial Dashboard
                            </a>
                        </div>

                        <!-- Trust Indicators -->
                        <div x-ref="trustIndicators" class="flex items-center gap-8 pt-6 border-t border-gray-700/50 mt-8 opacity-0 translate-y-4 transition-all duration-700 ease-out delay-500">
                            <div class="flex items-center gap-4">
                                <div class="flex -space-x-2">
                                    <div class="w-8 h-8 bg-[#38bdf8] rounded-full border-2 border-black flex items-center justify-center text-xs font-bold">⚙️</div>
                                    <div class="w-8 h-8 bg-[#818cf8] rounded-full border-2 border-black flex items-center justify-center text-xs font-bold">📊</div>
                                    <div class="w-8 h-8 bg-[#06b6d4] rounded-full border-2 border-black flex items-center justify-center text-xs font-bold">🔧</div>
                                </div>
                                <div class="text-gray-300 text-sm">
                                    <div class="font-semibold text-white">2.5M+</div>
                                    <div>Data points/sec</div>
                                </div>
                            </div>
                            <div class="text-gray-300 text-sm">
                                <div class="font-semibold text-white">1,200+</div>
                                <div>Connected factories</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-5 lg:bottom-20 left-1/2 transform -translate-x-1/2">
            <div class="flex flex-col items-center text-gray-400 animate-bounce">
                <a href="#solutions" class="text-sm mb-2 font-mono tracking-wider">EXPLORE SOLUTIONS
                <i class="fas fa-chevron-down block text-center"></i>
                </a>
            </div>
        </div>

        <style>
            @keyframes float-slow {
                0%, 100% { transform: translateY(0px) rotate(0deg); }
                50% { transform: translateY(-20px) rotate(2deg); }
            }
            @keyframes float-medium {
                0%, 100% { transform: translateX(0px) translateY(0px); }
                33% { transform: translateX(15px) translateY(-15px); }
                66% { transform: translateX(-10px) translateY(10px); }
            }
            .animate-float-slow {
                animation: float-slow 20s ease-in-out infinite;
            }
            .animate-float-medium {
                animation: float-medium 15s ease-in-out infinite;
            }
            .animate-in {
                opacity: 1 !important;
                transform: translateY(0) !important;
            }
            .bg-fixed {
                background-attachment: fixed;
            }
        </style>
    </section>
</div>