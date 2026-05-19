<x-app-layout>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'float-slow': 'float 20s ease-in-out infinite',
                        'float-medium': 'float 15s ease-in-out infinite',
                        'fade-in': 'fadeIn 0.8s ease-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'count-up': 'countUp 2s ease-out',
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
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(30px)',
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)',
                            },
                        },
                        countUp: {
                            '0%': { opacity: '0', transform: 'scale(0.8)' },
                            '50%': { opacity: '1', transform: 'scale(1.1)' },
                            '100%': { opacity: '1', transform: 'scale(1)' },
                        },
                    },
                },
            },
        };
    </script>
    <div
        class="bg-[#0f2a3d] text-[#e8f4f0]"
        x-data="{
            activeFeature: 0,
            stats: {
                reports: 0,
                trees: 0,
                users: 0,
            },
            init() {
                // Animate stats when visible
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            this.animateStats();
                            observer.unobserve(entry.target);
                        }
                    });
                });

                setTimeout(() => {
                    const statsSection =
                        document.getElementById('stats-section');
                    if (statsSection) observer.observe(statsSection);
                }, 1000);
            },
            animateStats() {
                const animateValue = (element, start, end, duration) => {
                    let startTimestamp = null;
                    const step = (timestamp) => {
                        if (!startTimestamp) startTimestamp = timestamp;
                        const progress = Math.min(
                            (timestamp - startTimestamp) / duration,
                            1,
                        );
                        element.innerHTML = Math.floor(
                            progress * (end - start) + start,
                        ).toLocaleString();
                        if (progress < 1) {
                            window.requestAnimationFrame(step);
                        }
                    };
                    window.requestAnimationFrame(step);
                };

                animateValue(this.$refs.reports, 0, 50000, 2000);
                animateValue(this.$refs.trees, 0, 1200000, 2000);
                animateValue(this.$refs.users, 0, 15000, 2000);
            },
            scrollToSection(sectionId) {
                const element = document.getElementById(sectionId);
                if (element) {
                    element.scrollIntoView({ behavior: 'smooth' });
                }
            },
            setActiveFeature(index) {
                this.activeFeature = index;
            },
        }"
    >
        
        <section
            class="relative flex min-h-[70vh] items-center justify-center overflow-hidden bg-gradient-to-br from-[#0f2a3d] to-emerald-700"
        >
            
            <div class="absolute inset-0 overflow-hidden">
                <div
                    class="absolute left-10 top-20 h-60 w-56 animate-float-slow rounded-full bg-[#4a8c6d]/10 blur-3xl filter"
                ></div>
                <div
                    class="absolute bottom-24 right-10 h-72 w-72 animate-float-medium rounded-full bg-[#e6b325]/5 blur-3xl filter"
                ></div>
                <div
                    class="absolute left-1/3 top-1/2 h-96 w-96 animate-float-slow rounded-full bg-[#0f2a3d]/20 blur-3xl filter"
                ></div>
            </div>

            <div
                class="relative z-10 mx-auto mt-16 max-w-6xl px-6 py-16 text-center"
            >
                <div
                    class="mb-6 inline-flex animate-fade-in items-center rounded-full border border-[#4a8c6d]/30 bg-[#4a8c6d]/20 px-4 py-2 text-sm font-medium text-[#e6b325]"
                >
                    <i class="fas fa-leaf mr-2"></i>
                    Digital Innovation for Sustainable Nature
                </div>

                <h1
                    class="mb-6 animate-slide-up text-4xl font-light leading-tight md:text-5xl lg:text-6xl"
                >
                    Transforming Environmental Data
                    <span class="mt-2 block font-normal text-[#e6b325]"
                        >Into Actionable Insights</span
                    >
                </h1>

                <p
                    class="mx-auto mb-10 max-w-3xl animate-slide-up text-xl leading-relaxed text-[#a0b8b0]"
                    style="animation-delay: 0.2s"
                >Eco-Sphere is an innovative platform that transforms complex environmental data into interactive visualizations that are easy to understand, driving real action for nature sustainability.</p>

                <div
                    class="flex animate-slide-up flex-col justify-center gap-4 sm:flex-row"
                    style="animation-delay: 0.4s"
                >
                    <button
                        @click="scrollToSection('features')"
                        class="group flex transform items-center justify-center rounded-lg bg-gradient-to-r from-[#4a8c6d] to-[#3a7a5d] px-8 py-4 font-semibold text-white shadow-lg transition-all duration-300 hover:-translate-y-1 hover:from-[#e6b325] hover:to-[#d4a320] hover:shadow-xl"
                    >
                        <i
                            class="fas fa-feather-alt mr-3 transition-transform group-hover:scale-110"
                        ></i>
                        Explore Features
                    </button>
                    <button
                        @click="scrollToSection('how-it-works')"
                        class="text-text-[#e8f4f0] group flex items-center justify-center rounded-lg border-2 border-[#4a8c6d] bg-transparent px-8 py-4 font-semibold transition-all duration-300 hover:border-[#e6b325] hover:bg-[#4a8c6d]/10"
                    >
                        <i
                            class="fa-solid fa-briefcase mr-3 transition-transform group-hover:scale-110"
                        ></i>
                        How It Works
                    </button>
                </div>
            </div>
        </section>

        
        <section
            x-data="{
                expanded: null,
                activeFeature: 0,
                setActiveFeature(index) {
                    this.activeFeature = index;
                },
            }"
            class="bg-[#0f2a3d]/80 py-12 sm:py-16 lg:py-20"
        >
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="grid items-center gap-8 lg:grid-cols-2 lg:gap-12">
                    
                    <div>
                        <h2 class="mb-6 text-3xl font-bold text-[#e8f4f0]">
                            Our Mission & Vision
                        </h2>
                        <p class="mb-6 text-base leading-relaxed text-[#a0b8b0] sm:text-lg">Eco-Sphere exists to bridge the gap between complex environmental data and the general public who want to contribute to nature conservation.</p>
                        <p class="mb-8 text-base leading-relaxed text-[#a0b8b0] sm:text-lg">We believe that by presenting environmental information in an accessible and engaging format, we can encourage more people to get involved in real actions to protect biodiversity.</p>

                        
                        <div
                            class="flex flex-col items-start space-y-4 sm:flex-row sm:space-x-4 sm:space-y-0"
                        >
                            <div
                                class="flex cursor-pointer items-center text-[#a0b8b0] transition-colors hover:text-[#e6b325]"
                                @click="
                                    expanded =
                                        expanded === 'realtime'
                                            ? null
                                            : 'realtime'
                                "
                            >
                                <i
                                    class="fas fa-check-circle mr-2 text-[#e6b325]"
                                ></i>
                                <span>Real-Time Data</span>
                            </div>
                            <div
                                class="flex cursor-pointer items-center text-[#a0b8b0] transition-colors hover:text-[#e6b325]"
                                @click="
                                    expanded =
                                        expanded === 'access' ? null : 'access'
                                "
                            >
                                <i
                                    class="fas fa-check-circle mr-2 text-[#e6b325]"
                                ></i>
                                <span>Open Access</span>
                            </div>
                            <div
                                class="flex cursor-pointer items-center text-[#a0b8b0] transition-colors hover:text-[#e6b325]"
                                @click="
                                    expanded =
                                        expanded === 'impact' ? null : 'impact'
                                "
                            >
                                <i
                                    class="fas fa-check-circle mr-2 text-[#e6b325]"
                                ></i>
                                <span>Real Impact</span>
                            </div>
                        </div>

                        
                        <div
                            x-show="expanded"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform -translate-y-2"
                            x-transition:enter-end="opacity-100 transform translate-y-0"
                            class="mt-4 rounded-lg border border-[#4a8c6d]/20 bg-[#1a3c34]/50 p-4"
                        >
                            <div
                                x-show="expanded === 'realtime'"
                                class="text-[#a0b8b0]"
                            >
                                <p class="mb-2 font-semibold text-[#e8f4f0]">Real-Time Data</p>
                                <p>Our platform provides up-to-the-minute environmental data from thousands of sensors across Indonesia, ensuring you always have the latest information at your fingertips.</p>
                            </div>
                            <div
                                x-show="expanded === 'access'"
                                class="text-[#a0b8b0]"
                            >
                                <p class="mb-2 font-semibold text-[#e8f4f0]">Open Access</p>
                                <p>We believe environmental data should be accessible to everyone. Our platform is free to use and open to contributions from researchers, communities, and concerned citizens.</p>
                            </div>
                            <div
                                x-show="expanded === 'impact'"
                                class="text-[#a0b8b0]"
                            >
                                <p class="mb-2 font-semibold text-[#e8f4f0]">Real Impact</p>
                                <p>Through our platform, environmental actions have led to measurable improvements in conservation areas, reduced pollution levels, and increased community engagement.</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="rounded-2xl border border-[#4a8c6d]/20 bg-emerald-500 p-4 sm:p-6 lg:p-8"
                    >
                        <div
                            class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-6"
                        >
                            <div
                                class="group cursor-pointer rounded-xl border border-[#4a8c6d]/10 bg-[#0f2a3d]/60 p-4 text-center transition-all duration-300 hover:border-[#e6b325]/30 sm:p-6"
                                @click="setActiveFeature(0)"
                                :class="{
                                    'ring-2 ring-[#e6b325]':
                                        activeFeature === 0,
                                }"
                            >
                                <div
                                    class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-2xl bg-[#4a8c6d]/20 transition-colors group-hover:bg-[#e6b325]/20 sm:h-16 sm:w-16"
                                >
                                    <i
                                        class="fas fa-bullseye text-xl text-[#e6b325] sm:text-2xl"
                                    ></i>
                                </div>
                                <h3 class="mb-2 font-bold text-[#e8f4f0]">
                                    Mission
                                </h3>
                                <p class="text-sm text-gray-300">To democratize access to environmental data through an interactive and user-friendly digital platform.</p>
                            </div>

                            <div
                                class="group cursor-pointer rounded-xl border border-[#4a8c6d]/10 bg-[#0f2a3d]/60 p-4 text-center transition-all duration-300 hover:border-[#e6b325]/30 sm:p-6"
                                @click="setActiveFeature(1)"
                                :class="{
                                    'ring-2 ring-[#e6b325]':
                                        activeFeature === 1,
                                }"
                            >
                                <div
                                    class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-2xl bg-[#4a8c6d]/20 transition-colors group-hover:bg-[#e6b325]/20 sm:h-16 sm:w-16"
                                >
                                    <i
                                        class="fas fa-eye text-xl text-[#e6b325] sm:text-2xl"
                                    ></i>
                                </div>
                                <h3 class="mb-2 font-bold text-[#e8f4f0]">
                                    Vision
                                </h3>
                                <p class="text-sm text-gray-300">To create an environmentally conscious society with tools to monitor and protect biodiversity.</p>
                            </div>

                            <div
                                class="group cursor-pointer rounded-xl border border-[#4a8c6d]/10 bg-[#0f2a3d]/60 p-4 text-center transition-all duration-300 hover:border-[#e6b325]/30 sm:p-6"
                                @click="setActiveFeature(2)"
                                :class="{
                                    'ring-2 ring-[#e6b325]':
                                        activeFeature === 2,
                                }"
                            >
                                <div
                                    class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-2xl bg-[#4a8c6d]/20 transition-colors group-hover:bg-[#e6b325]/20 sm:h-16 sm:w-16"
                                >
                                    <i
                                        class="fas fa-hand-holding-heart text-xl text-[#e6b325] sm:text-2xl"
                                    ></i>
                                </div>
                                <h3 class="mb-2 font-bold text-[#e8f4f0]">
                                    Values
                                </h3>
                                <p class="text-sm text-gray-300">Transparency, collaboration, innovation, and sustainability in every aspect of our platform.</p>
                            </div>

                            <div
                                class="group cursor-pointer rounded-xl border border-[#4a8c6d]/10 bg-[#0f2a3d]/60 p-4 text-center transition-all duration-300 hover:border-[#e6b325]/30 sm:p-6"
                                @click="setActiveFeature(3)"
                                :class="{
                                    'ring-2 ring-[#e6b325]':
                                        activeFeature === 3,
                                }"
                            >
                                <div
                                    class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-2xl bg-[#4a8c6d]/20 transition-colors group-hover:bg-[#e6b325]/20 sm:h-16 sm:w-16"
                                >
                                    <i
                                        class="fas fa-chart-line text-xl text-[#e6b325] sm:text-2xl"
                                    ></i>
                                </div>
                                <h3 class="mb-2 font-bold text-[#e8f4f0]">
                                    Impact
                                </h3>
                                <p class="text-sm text-gray-300">Driving policy changes and community actions based on accurate data.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <section id="features" class="bg-[#1a3c34]/30 py-20">
            <div class="mx-auto max-w-6xl px-6">
                <div class="mb-16 text-center">
                    <h2 class="text-text-[#e8f4f0] mb-4 text-3xl font-bold">
                        Innovative Features
                    </h2>
                    <p class="mx-auto max-w-2xl text-lg text-[#a0b8b0]">The Eco-Sphere platform is equipped with innovative features designed to facilitate environmental monitoring and encourage active participation.</p>
                </div>

                <div class="grid gap-10 md:grid-cols-2">
                    
                    <div
                        class="group rounded-2xl border border-emerald-400 bg-[#0f2a3d]/60 p-8 transition-all duration-300 hover:border-[#e6b325]/90"
                    >
                        <div class="mb-6 flex items-start">
                            <div
                                class="mr-4 flex h-14 w-14 items-center justify-center rounded-xl bg-[#4a8c6d]/20 transition-colors group-hover:bg-[#e6b325]/20"
                            >
                                <i
                                    class="fas fa-globe-americas text-2xl text-[#e6b325]"
                                ></i>
                            </div>
                            <div>
                                <h3
                                    class="text-text-[#e8f4f0] mb-2 text-xl font-bold"
                                >
                                    Real-Time Interactive Map
                                </h3>
                                <p class="text-white">Interactive map with customizable real-time environmental data layers.</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-center text-white">
                                <i
                                    class="fas fa-layer-group mr-3 text-[#4a8c6d]"
                                ></i>
                                <span
                                    >Air Quality, Hotspots, Water Quality</span
                                >
                            </div>
                            <div class="flex items-center text-white">
                                <i
                                    class="fas fa-recycle mr-3 text-[#4a8c6d]"
                                ></i>
                                <span>Waste Bank & Recycling Locations</span>
                            </div>
                            <div class="flex items-center text-white">
                                <i
                                    class="fas fa-satellite mr-3 text-[#4a8c6d]"
                                ></i>
                                <span>Satellite & Direct Sensor Data</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="group rounded-2xl border border-emerald-400 bg-[#0f2a3d]/60 p-8 transition-all duration-300 hover:border-[#e6b325]/90"
                    >
                        <div class="mb-6 flex items-start">
                            <div
                                class="mr-4 flex h-14 w-14 items-center justify-center rounded-xl bg-[#4a8c6d]/20 transition-colors group-hover:bg-[#e6b325]/20"
                            >
                                <i
                                    class="fas fa-flag text-2xl text-[#e6b325]"
                                ></i>
                            </div>
                            <div>
                                <h3
                                    class="text-text-[#e8f4f0] mb-2 text-xl font-bold"
                                >
                                    My Loca-Report
                                </h3>
                                <p class="text-white">Report environmental issues around you with photos and location.</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-center text-white">
                                <i
                                    class="fas fa-camera mr-3 text-[#4a8c6d]"
                                ></i>
                                <span>Visual Reports with Photos</span>
                            </div>
                            <div class="flex items-center text-white">
                                <i
                                    class="fas fa-map-pin mr-3 text-[#4a8c6d]"
                                ></i>
                                <span>Automatic Location Tagging</span>
                            </div>
                            <div class="flex items-center text-white">
                                <i class="fas fa-users mr-3 text-[#4a8c6d]"></i>
                                <span>Crowdsourcing System</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="group rounded-2xl border border-emerald-400 bg-[#0f2a3d]/60 p-8 transition-all duration-300 hover:border-[#e6b325]/90"
                    >
                        <div class="mb-6 flex items-start">
                            <div
                                class="mr-4 flex h-14 w-14 items-center justify-center rounded-xl bg-[#4a8c6d]/20 transition-colors group-hover:bg-[#e6b325]/20"
                            >
                                <i
                                    class="fas fa-chart-line text-2xl text-[#e6b325]"
                                ></i>
                            </div>
                            <div>
                                <h3
                                    class="text-text-[#e8f4f0] mb-2 text-xl font-bold"
                                >
                                    Regional Sustainability Score
                                </h3>
                                <p class="text-white">Sustainability score that compares environmental performance between regions.</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-center text-white">
                                <i
                                    class="fas fa-calculator mr-3 text-[#4a8c6d]"
                                ></i>
                                <span>Multi-Factor Calculation</span>
                            </div>
                            <div class="flex items-center text-white">
                                <i
                                    class="fas fa-trophy mr-3 text-[#4a8c6d]"
                                ></i>
                                <span>Healthy Competition Between Regions</span>
                            </div>
                            <div class="flex items-center text-white">
                                <i
                                    class="fas fa-chart-bar mr-3 text-[#4a8c6d]"
                                ></i>
                                <span>Engaging Data Visualization</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="group rounded-2xl border border-emerald-400 bg-[#0f2a3d]/60 p-8 transition-all duration-300 hover:border-[#e6b325]/90"
                    >
                        <div class="mb-6 flex items-start">
                            <div
                                class="mr-4 flex h-14 w-14 items-center justify-center rounded-xl bg-[#4a8c6d]/20 transition-colors group-hover:bg-[#e6b325]/20"
                            >
                                <i
                                    class="fas fa-book-open text-2xl text-[#e6b325]"
                                ></i>
                            </div>
                            <div>
                                <h3
                                    class="text-text-[#e8f4f0] mb-2 text-xl font-bold"
                                >
                                    Impact Stories
                                </h3>
                                <p class="text-white">Environmental education with immersive scrollytelling techniques.</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-center text-white">
                                <i
                                    class="fas fa-scroll mr-3 text-[#4a8c6d]"
                                ></i>
                                <span
                                    >Interactive Scrollytelling Techniques</span
                                >
                            </div>
                            <div class="flex items-center text-white">
                                <i class="fas fa-image mr-3 text-[#4a8c6d]"></i>
                                <span>Immersive Motion Graphics</span>
                            </div>
                            <div class="flex items-center text-white">
                                <i
                                    class="fas fa-graduation-cap mr-3 text-[#4a8c6d]"
                                ></i>
                                <span>Story-Based Educational Content</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <section id="how-it-works" class="bg-[#0f2a3d]/80 py-20">
            <div class="mx-auto max-w-6xl px-6">
                <div class="mb-16 text-center">
                    <h2 class="text-text-[#e8f4f0] mb-4 text-3xl font-bold">
                        How Eco-Sphere Works
                    </h2>
                    <p class="mx-auto max-w-2xl text-lg text-white">Our platform collects, processes, and visualizes environmental data through an integrated and transparent process.</p>
                </div>

                <div class="relative">
                    <div class="relative z-10 grid gap-8 md:grid-cols-3">
                        
                        <div
                            class="group rounded-2xl border border-emerald-400 bg-[#1a3c34]/40 p-8 text-center transition-all duration-300 hover:border-[#e6b325]/90"
                        >
                            <div
                                class="relative mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-2xl bg-[#4a8c6d]/20 transition-colors group-hover:bg-[#e6b325]/20"
                            >
                                <span class="text-2xl font-bold text-[#e6b325]"
                                    >1</span
                                >
                            </div>
                            <h3 class="mb-4 text-xl font-bold text-[#e8f4f0]">
                                Data Collection
                            </h3>
                            <p class="mb-6 text-[#a0b8b0]">Collecting data from various sources including environmental sensors, satellites, weather APIs, and community reports.</p>
                            <div
                                class="flex justify-center space-x-4 text-white"
                            >
                                <i class="fas fa-satellite-dish"></i>
                                <i class="fas fa-microchip"></i>
                                <i class="fas fa-cloud-download-alt"></i>
                            </div>
                        </div>

                        
                        <div
                            class="group rounded-2xl border border-emerald-400 bg-[#1a3c34]/40 p-8 text-center transition-all duration-300 hover:border-[#e6b325]/90"
                        >
                            <div
                                class="relative mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-2xl bg-[#4a8c6d]/20 transition-colors group-hover:bg-[#e6b325]/20"
                            >
                                <span class="text-2xl font-bold text-[#e6b325]"
                                    >2</span
                                >
                            </div>
                            <h3 class="mb-4 text-xl font-bold text-[#e8f4f0]">
                                Data Processing
                            </h3>
                            <p class="mb-6 text-[#a0b8b0]">Processing and analyzing data using advanced algorithms to generate actionable insights.</p>
                            <div
                                class="flex justify-center space-x-4 text-white"
                            >
                                <i class="fas fa-cogs"></i>
                                <i class="fas fa-brain"></i>
                                <i class="fas fa-filter"></i>
                            </div>
                        </div>

                        <div
                            class="group rounded-2xl border border-emerald-400 bg-[#1a3c34]/40 p-8 text-center transition-all duration-300 hover:border-[#e6b325]/90"
                        >
                            <div
                                class="relative mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-2xl bg-[#4a8c6d]/20 transition-colors group-hover:bg-[#e6b325]/20"
                            >
                                <span class="text-2xl font-bold text-[#e6b325]"
                                    >3</span
                                >
                            </div>
                            <h3 class="mb-4 text-xl font-bold text-[#e8f4f0]">
                                Visualization & Action
                            </h3>
                            <p class="mb-6 text-[#a0b8b0]">Presenting data in an attractive and easy-to-understand visual format, encouraging users to take real action.</p>
                            <div
                                class="flex justify-center space-x-4 text-white"
                            >
                                <i class="fas fa-map"></i>
                                <i class="fas fa-chart-pie"></i>
                                <i class="fas fa-hands-helping"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="mt-16 rounded-2xl border border-emerald-400 bg-[#0f2a3d]/60 p-8"
                >
                    <h3
                        class="text-text-[#e8f4f0] mb-6 text-center text-xl font-bold"
                    >
                        Data Ecosystem Flow
                    </h3>
                    <div
                        class="flex flex-col items-center justify-between space-y-6 md:flex-row md:space-y-0"
                    >
                        <div class="text-center">
                            <div
                                class="mx-auto mb-3 flex h-16 w-16 items-center justify-center rounded-full bg-[#4a8c6d]/20"
                            >
                                <i class="fas fa-database text-[#e6b325]"></i>
                            </div>
                            <p class="text-sm text-[#a0b8b0]">Data Sources</p>
                        </div>

                        <div class="hidden md:block">
                            <i
                                class="fas fa-arrow-right text-xl text-[#4a8c6d]"
                            ></i>
                        </div>
                        <div class="md:hidden">
                            <i
                                class="fas fa-arrow-down text-xl text-[#4a8c6d]"
                            ></i>
                        </div>

                        <div class="text-center">
                            <div
                                class="mx-auto mb-3 flex h-16 w-16 items-center justify-center rounded-full bg-[#4a8c6d]/20"
                            >
                                <i class="fas fa-server text-[#e6b325]"></i>
                            </div>
                            <p class="text-sm text-[#a0b8b0]">Processing</p>
                        </div>

                        <div class="hidden md:block">
                            <i
                                class="fas fa-arrow-right text-xl text-[#4a8c6d]"
                            ></i>
                        </div>
                        <div class="md:hidden">
                            <i
                                class="fas fa-arrow-down text-xl text-[#4a8c6d]"
                            ></i>
                        </div>

                        <div class="text-center">
                            <div
                                class="mx-auto mb-3 flex h-16 w-16 items-center justify-center rounded-full bg-[#4a8c6d]/20"
                            >
                                <i class="fas fa-chart-bar text-[#e6b325]"></i>
                            </div>
                            <p class="text-sm text-[#a0b8b0]">Visualization</p>
                        </div>

                        <div class="hidden md:block">
                            <i
                                class="fas fa-arrow-right text-xl text-[#4a8c6d]"
                            ></i>
                        </div>
                        <div class="md:hidden">
                            <i
                                class="fas fa-arrow-down text-xl text-[#4a8c6d]"
                            ></i>
                        </div>

                        <div class="text-center">
                            <div
                                class="mx-auto mb-3 flex h-16 w-16 items-center justify-center rounded-full bg-[#4a8c6d]/20"
                            >
                                <i class="fas fa-users text-[#e6b325]"></i>
                            </div>
                            <p class="text-sm text-[#a0b8b0]">Community Action</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <section class="bg-gradient-to-br from-[#0f2a3d] to-[#1a3c34] py-20">
            <div class="mx-auto max-w-6xl px-6 text-center">
                <h2 class="text-text-[#e8f4f0] mb-6 text-3xl font-bold">
                    Join the Movement for Sustainable Nature
                </h2>
                <p class="mx-auto mb-10 max-w-2xl text-lg text-[#a0b8b0]">Join thousands of users who have contributed to protecting biodiversity through the Eco-Sphere platform.</p>

                <div id="stats-section" class="mb-12 grid gap-8 md:grid-cols-3">
                    <div
                        class="rounded-xl border border-[#4a8c6d]/20 bg-[#0f2a3d]/40 p-6"
                    >
                        <div
                            class="animate-count-up mb-2 text-3xl font-bold text-[#e6b325]"
                            x-ref="reports"
                        >
                            0
                        </div>
                        <div class="text-[#a0b8b0]">Environmental Reports</div>
                    </div>
                    <div
                        class="rounded-xl border border-[#4a8c6d]/20 bg-[#0f2a3d]/40 p-6"
                    >
                        <div
                            class="animate-count-up mb-2 text-3xl font-bold text-[#e6b325]"
                            x-ref="trees"
                        >
                            0
                        </div>
                        <div class="text-[#a0b8b0]">Trees Monitored</div>
                    </div>
                    <div
                        class="rounded-xl border border-[#4a8c6d]/20 bg-[#0f2a3d]/40 p-6"
                    >
                        <div
                            class="animate-count-up mb-2 text-3xl font-bold text-[#e6b325]"
                            x-ref="users"
                        >
                            0
                        </div>
                        <div class="text-[#a0b8b0]">Active Users</div>
                    </div>
                </div>

                <div class="flex flex-col justify-center gap-4 sm:flex-row">
                    <button
                        class="group flex transform items-center justify-center rounded-lg bg-gradient-to-r from-[#4a8c6d] to-[#3a7a5d] px-8 py-4 font-semibold text-white shadow-lg transition-all duration-300 hover:-translate-y-1 hover:from-[#e6b325] hover:to-[#d4a320] hover:shadow-xl"
                    >
                        <i
                            class="fas fa-user-plus mr-3 transition-transform group-hover:scale-110"
                        ></i>
                        Sign Up Now
                    </button>
                    <button
                        class="text-text-[#e8f4f0] group flex items-center justify-center rounded-lg border-2 border-[#4a8c6d] bg-transparent px-8 py-4 font-semibold transition-all duration-300 hover:border-[#e6b325] hover:bg-[#4a8c6d]/10"
                    >
                        <i
                            class="fas fa-question-circle mr-3 transition-transform group-hover:scale-110"
                        ></i>
                        Contact Us
                    </button>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
