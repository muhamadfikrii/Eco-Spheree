<div class="bg-slate-50" id="purpose">
    <div x-data="industrialApp()">
        <section
            class="industrial-hero-gradient z-0 px-6 pb-16 pt-20 text-white lg:px-12"
        >
            <div class="mx-auto max-w-[1300px]">
                <div
                    class="flex flex-col items-center justify-between lg:flex-row"
                >
                    <div class="mb-10 lg:mb-0 lg:w-1/2">
                        <h1
                            class="mb-6 font-mono text-3xl font-bold leading-tight sm:text-4xl lg:text-6xl"
                        >
                            See the Factory. <br />Analyze the Data.
                            <br />Optimize in Real Time.
                        </h1>
                        <p
                            class="mb-8 text-base leading-relaxed opacity-90 sm:text-lg lg:text-xl"
                            data-aos="fade-up"
                            data-aos-delay="400"
                        >IndustrialTrack transforms manufacturing data into a living digital twin — visualizing machine telemetry, energy efficiency, and supply chain health in real time.</p>
                        <div
                            class="flex flex-wrap gap-4"
                            data-aos="fade-up"
                            data-aos-delay="500"
                        >
                            <a
                                href="{{ route('insights') }}"
                                class="transform rounded-lg border border-white bg-[#2563eb] px-6 py-3 font-semibold text-white shadow-lg transition-all duration-300 hover:-translate-y-1 hover:bg-transparent hover:shadow-xl"
                            >
                                Open Industrial Dashboard
                            </a>
                        </div>
                    </div>
                    <div
                        class="flex justify-center lg:w-1/2"
                        data-aos="fade-left"
                        data-aos-delay="300"
                    >
                        <div class="relative">
                            <div
                                class="floating flex h-80 w-80 items-center justify-center rounded-full bg-white/10"
                            >
                                <div
                                    class="flex h-64 w-64 items-center justify-center rounded-full bg-white/20"
                                >
                                    <div
                                        class="flex h-48 w-48 items-center justify-center rounded-full bg-white/30 backdrop-blur-sm"
                                    >
                                        <i
                                            class="fas fa-microchip text-6xl text-white"
                                        ></i>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="absolute -right-4 -top-4 rounded-lg bg-white px-4 py-2 text-[#1e40af] shadow-lg"
                                data-aos="zoom-in"
                                data-aos-delay="500"
                            >
                                <span class="font-bold">1,200+</span> Connected
                                Sensors
                            </div>
                            <div
                                class="absolute -bottom-4 -left-4 rounded-lg bg-white px-4 py-2 text-[#1e40af] shadow-lg"
                                data-aos="zoom-in"
                                data-aos-delay="600"
                            >
                                <span class="font-bold">98%</span> Uptime SLA
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features section dengan animasi fade-up pada setiap kartu -->
        <section class="px-6 py-16 lg:px-12" id="features">
            <div class="mx-auto max-w-[1300px]">
                <div
                    class="mb-16 text-center"
                    data-aos="fade-up"
                    data-aos-duration="800"
                >
                    <span
                        class="industrial-badge mb-4 inline-block rounded-full px-4 py-2 font-mono text-sm font-semibold text-white"
                    >
                        INDUSTRY 4.0 SOLUTIONS
                    </span>
                    <h2
                        class="mb-6 font-mono text-3xl font-bold leading-tight text-[#0f172a] lg:text-5xl"
                        data-aos="fade-up"
                        data-aos-delay="200"
                    >
                        What We Deliver?
                    </h2>
                    <p
                        class="mx-auto max-w-2xl text-lg text-slate-600"
                        data-aos="fade-up"
                        data-aos-delay="300"
                    >By integrating IoT, AI, and edge analytics, we help manufacturers achieve zero downtime, optimize OEE, and drive sustainable production.</p>
                </div>

                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                    <div class="space-y-6">
                        <!-- Feature 1 -->
                        <div
                            data-aos="fade-up"
                            data-aos-delay="100"
                            @click="showFeature(0)"
                            :class="{
                                'ring-2 ring-[#38bdf8]': activeFeature === 0,
                            }"
                            class="feature-card rounded-2xl border-l-8 border-[#2563eb] bg-white p-6 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl"
                        >
                            <div class="flex items-start gap-5">
                                <div class="relative">
                                    <div
                                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-100"
                                    >
                                        <i
                                            class="fas fa-chart-line text-2xl text-blue-600"
                                        ></i>
                                    </div>
                                    <div
                                        class="absolute -right-1 -top-1 flex h-5 w-5 items-center justify-center rounded-full bg-blue-500"
                                    >
                                        <i
                                            class="fas fa-bolt text-xs text-white"
                                        ></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3
                                        class="mb-2 text-xl font-bold text-slate-800"
                                    >
                                        Real-Time Machine Telemetry
                                    </h3>
                                    <p class="mb-4 text-slate-600">Monitor vibration, temperature, and power consumption from thousands of IoT sensors across your production lines with sub-second latency.</p>
                                    <div
                                        class="flex items-center justify-between"
                                    >
                                        <span
                                            class="flex items-center gap-1 text-sm font-semibold text-blue-700"
                                            ><i class="fas fa-microchip"></i>
                                            1,200+ active sensors</span
                                        >
                                        <button
                                            class="flex items-center gap-1 text-sm font-medium text-blue-600 hover:text-blue-800"
                                        >
                                            View details
                                            <i
                                                class="fas fa-arrow-right text-xs"
                                            ></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div
                            data-aos="fade-up"
                            data-aos-delay="200"
                            @click="showFeature(1)"
                            :class="{
                                'ring-2 ring-[#10b981]': activeFeature === 1,
                            }"
                            class="feature-card rounded-2xl border-l-8 border-[#10b981] bg-white p-6 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl"
                        >
                            <div class="flex items-start gap-5">
                                <div class="relative">
                                    <div
                                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-green-100"
                                    >
                                        <i
                                            class="fas fa-charging-station text-2xl text-green-600"
                                        ></i>
                                    </div>
                                    <div
                                        class="absolute -right-1 -top-1 flex h-5 w-5 items-center justify-center rounded-full bg-green-500"
                                    >
                                        <i
                                            class="fas fa-leaf text-xs text-white"
                                        ></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3
                                        class="mb-2 text-xl font-bold text-slate-800"
                                    >
                                        Energy & Emissions Optimization
                                    </h3>
                                    <p class="mb-4 text-slate-600">AI-powered analytics reduce energy waste, lower carbon footprint, and help achieve ESG targets without compromising throughput.</p>
                                    <div
                                        class="flex items-center justify-between"
                                    >
                                        <span
                                            class="flex items-center gap-1 text-sm font-semibold text-green-700"
                                            ><i class="fas fa-leaf"></i> -23%
                                            avg. energy reduction</span
                                        >
                                        <button
                                            class="flex items-center gap-1 text-sm font-medium text-green-600 hover:text-green-800"
                                        >
                                            View details
                                            <i
                                                class="fas fa-arrow-right text-xs"
                                            ></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div
                            data-aos="fade-up"
                            data-aos-delay="300"
                            @click="showFeature(2)"
                            :class="{
                                'ring-2 ring-[#8b5cf6]': activeFeature === 2,
                            }"
                            class="feature-card rounded-2xl border-l-8 border-[#8b5cf6] bg-white p-6 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl"
                        >
                            <div class="flex items-start gap-5">
                                <div class="relative">
                                    <div
                                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-purple-100"
                                    >
                                        <i
                                            class="fas fa-brain text-2xl text-purple-600"
                                        ></i>
                                    </div>
                                    <div
                                        class="absolute -right-1 -top-1 flex h-5 w-5 items-center justify-center rounded-full bg-purple-500"
                                    >
                                        <i
                                            class="fas fa-robot text-xs text-white"
                                        ></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3
                                        class="mb-2 text-xl font-bold text-slate-800"
                                    >
                                        Predictive Maintenance & AI
                                    </h3>
                                    <p class="mb-4 text-slate-600">Machine learning models predict failures 48 hours in advance, reducing unplanned downtime by up to 45% and extending asset life.</p>
                                    <div
                                        class="flex items-center justify-between"
                                    >
                                        <span
                                            class="flex items-center gap-1 text-sm font-semibold text-purple-700"
                                            ><i class="fas fa-chart-simple"></i>
                                            94% prediction accuracy</span
                                        >
                                        <button
                                            class="flex items-center gap-1 text-sm font-medium text-purple-600 hover:text-purple-800"
                                        >
                                            View details
                                            <i
                                                class="fas fa-arrow-right text-xs"
                                            ></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 4 -->
                        <div
                            data-aos="fade-up"
                            data-aos-delay="400"
                            @click="showFeature(3)"
                            :class="{
                                'ring-2 ring-[#f59e0b]': activeFeature === 3,
                            }"
                            class="feature-card rounded-2xl border-l-8 border-[#f59e0b] bg-white p-6 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl"
                        >
                            <div class="flex items-start gap-5">
                                <div class="relative">
                                    <div
                                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-amber-100"
                                    >
                                        <i
                                            class="fas fa-truck-fast text-2xl text-amber-600"
                                        ></i>
                                    </div>
                                    <div
                                        class="absolute -right-1 -top-1 flex h-5 w-5 items-center justify-center rounded-full bg-amber-500"
                                    >
                                        <i
                                            class="fas fa-boxes text-xs text-white"
                                        ></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3
                                        class="mb-2 text-xl font-bold text-slate-800"
                                    >
                                        Supply Chain Digital Twin
                                    </h3>
                                    <p class="mb-4 text-slate-600">End-to-end visibility from raw material to finished goods, with predictive logistics and inventory optimization.</p>
                                    <div
                                        class="flex items-center justify-between"
                                    >
                                        <span
                                            class="flex items-center gap-1 text-sm font-semibold text-amber-700"
                                            ><i class="fas fa-chart-line"></i>
                                            99.5% on-time delivery</span
                                        >
                                        <button
                                            class="flex items-center gap-1 text-sm font-medium text-amber-600 hover:text-amber-800"
                                        >
                                            View details
                                            <i
                                                class="fas fa-arrow-right text-xs"
                                            ></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- About Us -->
                        <div
                            class="rounded-2xl bg-white p-8 shadow-lg"
                            data-aos="fade-up"
                            data-aos-delay="500"
                        >
                            <h3
                                class="mb-4 flex items-center gap-2 text-2xl font-bold text-[#0f172a]"
                            >
                                <i class="fas fa-industry text-[#2563eb]"></i>
                                About Us
                            </h3>
                            <p class="mb-6 text-slate-700">Founded in 2022, IndustrialTrack is the leading industrial IoT platform for smart manufacturing, connecting over 1,200 factories across Southeast Asia.</p>

                            <div class="mb-6">
                                <button
                                    @click="aboutExpanded = !aboutExpanded"
                                    class="flex items-center gap-2 font-semibold text-[#2563eb] transition-colors hover:text-[#1e40af]"
                                >
                                    <span>Our Mission & Team</span>
                                    <i
                                        class="fas fa-chevron-down text-sm transition-transform duration-300"
                                        :class="{ 'rotate-180': aboutExpanded }"
                                    ></i>
                                </button>
                                <div
                                    x-show="aboutExpanded"
                                    class="mt-4 rounded-xl bg-slate-50 p-4"
                                >
                                    <p class="mb-4 text-slate-700">Our team of industrial engineers, data scientists, and AI specialists work 24/7 to ensure every factory achieves operational excellence and sustainable growth.</p>
                                    <div class="grid grid-cols-2 gap-4 text-sm">
                                        <div
                                            class="flex items-center text-slate-600"
                                        >
                                            <i
                                                class="fas fa-users mr-2 text-[#2563eb]"
                                            ></i>
                                            80+ Experts
                                        </div>
                                        <div
                                            class="flex items-center text-slate-600"
                                        >
                                            <i
                                                class="fas fa-globe mr-2 text-[#2563eb]"
                                            ></i>
                                            7 Countries
                                        </div>
                                        <div
                                            class="flex items-center text-slate-600"
                                        >
                                            <i
                                                class="fas fa-building mr-2 text-[#2563eb]"
                                            ></i>
                                            Singapore HQ
                                        </div>
                                        <div
                                            class="flex items-center text-slate-600"
                                        >
                                            <i
                                                class="fas fa-shield-alt mr-2 text-[#2563eb]"
                                            ></i>
                                            ISO 27001 Certified
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-3">
                                <span
                                    class="rounded-full bg-slate-100 px-3 py-1 font-mono text-sm text-slate-700"
                                    >IIoT</span
                                >
                                <span
                                    class="rounded-full bg-slate-100 px-3 py-1 font-mono text-sm text-slate-700"
                                    >Edge Computing</span
                                >
                                <span
                                    class="rounded-full bg-slate-100 px-3 py-1 font-mono text-sm text-slate-700"
                                    >Digital Twin</span
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Right column (stats & detail) -->
                    <div class="space-y-8">
                        <div
                            x-show="!activeFeature && !showDashboard"
                            class="rounded-2xl bg-white p-8 shadow-lg"
                            data-aos="fade-left"
                            data-aos-delay="200"
                        >
                            <h3
                                class="mb-6 flex items-center gap-2 text-2xl font-bold text-[#0f172a]"
                            >
                                <i class="fas fa-chart-pie text-[#2563eb]"></i>
                                Industrial Impact
                            </h3>
                            <div class="grid grid-cols-2 gap-6">
                                <div
                                    class="rounded-xl bg-slate-50 p-4 text-center"
                                    data-aos="zoom-in"
                                    data-aos-delay="300"
                                >
                                    <div
                                        class="stats-counter mb-2 text-3xl font-bold text-[#2563eb]"
                                    >
                                        1,200+
                                    </div>
                                    <div class="text-sm text-slate-600">
                                        Connected Factories
                                    </div>
                                </div>
                                <div
                                    class="rounded-xl bg-slate-50 p-4 text-center"
                                    data-aos="zoom-in"
                                    data-aos-delay="400"
                                >
                                    <div
                                        class="stats-counter mb-2 text-3xl font-bold text-[#2563eb]"
                                    >
                                        45%
                                    </div>
                                    <div class="text-sm text-slate-600">
                                        Less Downtime
                                    </div>
                                </div>
                                <div
                                    class="rounded-xl bg-slate-50 p-4 text-center"
                                    data-aos="zoom-in"
                                    data-aos-delay="500"
                                >
                                    <div
                                        class="stats-counter mb-2 text-3xl font-bold text-[#2563eb]"
                                    >
                                        2.5M
                                    </div>
                                    <div class="text-sm text-slate-600">
                                        Data points/sec
                                    </div>
                                </div>
                                <div
                                    class="rounded-xl bg-slate-50 p-4 text-center"
                                    data-aos="zoom-in"
                                    data-aos-delay="600"
                                >
                                    <div
                                        class="stats-counter mb-2 text-3xl font-bold text-[#2563eb]"
                                    >
                                        23%
                                    </div>
                                    <div class="text-sm text-slate-600">
                                        Energy Saved
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Dynamic feature detail -->
                        <div
                            x-show="activeFeature !== null"
                            x-transition:enter="feature-detail-enter"
                            x-transition:enter-start="feature-detail-enter"
                            x-transition:enter-end="feature-detail-enter-to"
                            class="rounded-2xl bg-white p-8 shadow-lg"
                            data-aos="fade-up"
                            data-aos-duration="800"
                        >
                            <div class="mb-6 flex items-start justify-between">
                                <h3
                                    class="text-2xl font-bold text-[#0f172a]"
                                    x-text="features[activeFeature]?.title"
                                ></h3>
                                <button
                                    @click="activeFeature = null"
                                    class="text-slate-500 hover:text-slate-700"
                                >
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>

                            <div
                                class="mb-6 rounded-lg p-4"
                                :class="features[activeFeature]?.colorClass"
                            >
                                <i
                                    :class="features[activeFeature]?.icon"
                                    class="mb-3 text-4xl"
                                ></i>
                                <p class="text-slate-700" x-text="
                                        features[activeFeature]?.fullDescription
                                    "></p>
                            </div>

                            <div
                                class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2"
                            >
                                <template
                                    x-for="
                                        stat in features[activeFeature]?.stats
                                    "
                                >
                                    <div class="rounded-lg bg-slate-50 p-4">
                                        <div class="flex items-center gap-2">
                                            <i
                                                :class="stat.icon"
                                                class="text-[#2563eb]"
                                            ></i>
                                            <span
                                                class="font-semibold text-slate-800"
                                                x-text="stat.value"
                                            ></span>
                                        </div>
                                        <p class="mt-1 text-sm text-slate-600" x-text="
                                                stat.label
                                            "></p>
                                    </div>
                                </template>
                            </div>

                            <div class="mb-6">
                                <h4 class="mb-3 font-semibold text-[#0f172a]">
                                    Key Benefits:
                                </h4>
                                <ul
                                    class="list-inside list-disc space-y-2 text-slate-700"
                                >
                                    <template
                                        x-for="
                                            benefit in
                                            features[activeFeature]?.benefits
                                        "
                                    >
                                        <li x-text="benefit"></li>
                                    </template>
                                </ul>
                            </div>

                            <div class="flex gap-3">
                                <a
                                    href="{{ route('learn_more') }}"
                                    class="rounded-lg bg-[#2563eb] px-4 py-2 text-white transition-colors hover:bg-[#1d4ed8]"
                                    >Learn More</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100,
                easing: 'ease-out-quad',
            });
        });
        document.addEventListener('livewire:load', function () {
            AOS.refresh();
        });
    </script>

    <style>
        .industrial-hero-gradient {
            background: linear-gradient(
                135deg,
                #0f172a 0%,
                #1e293b 50%,
                #0f172a 100%
            );
            position: relative;
            overflow: hidden;
        }
        .industrial-hero-gradient::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3E%3Cpath fill='%233b82f6' fill-opacity='0.1' d='M1 3h1v1H1V3zm2-2h1v1H3V1z'%3E%3C/path%3E%3C/svg%3E");
            pointer-events: none;
        }
        .industrial-badge {
            background: #2563eb;
            font-family: monospace;
            letter-spacing: 1px;
        }
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0px);
            }
        }
        .stats-counter {
            font-feature-settings: 'tnum';
            font-variant-numeric: tabular-nums;
        }
        /* Animasi tambahan untuk AOS */
        [data-aos] {
            transition-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
    </style>

    <script>
        function industrialApp() {
            return {
                activeFeature: null,
                aboutExpanded: false,
                showDashboard: false,
                features: [
                    {
                        title: 'Real-Time Machine Telemetry',
                        icon: 'fas fa-chart-line text-blue-600',
                        colorClass: 'bg-blue-50',
                        fullDescription:
                            'Monitor industrial assets in real time using advanced IoT telemetry systems. Collect vibration, temperature, pressure, and energy data instantly across production lines with ultra-low latency analytics.',

                        stats: [
                            {
                                icon: 'fas fa-microchip',
                                value: '1,200+',
                                label: 'Connected Sensors',
                            },
                            {
                                icon: 'fas fa-clock',
                                value: '<1s',
                                label: 'Latency',
                            },
                        ],

                        benefits: [
                            'Instant anomaly detection',
                            'Centralized monitoring dashboard',
                            'Reduce manual inspections',
                            'Improve production visibility',
                        ],
                    },

                    {
                        title: 'Energy & Emissions Optimization',
                        icon: 'fas fa-charging-station text-green-600',
                        colorClass: 'bg-green-50',
                        fullDescription:
                            'AI-powered sustainability analytics help reduce energy consumption and carbon emissions while maximizing operational efficiency.',

                        stats: [
                            {
                                icon: 'fas fa-leaf',
                                value: '-23%',
                                label: 'Energy Reduction',
                            },
                            {
                                icon: 'fas fa-earth-asia',
                                value: '18%',
                                label: 'Lower Emissions',
                            },
                        ],

                        benefits: [
                            'Lower electricity costs',
                            'ESG compliance support',
                            'Carbon footprint monitoring',
                            'Sustainable manufacturing',
                        ],
                    },

                    {
                        title: 'Predictive Maintenance & AI',
                        icon: 'fas fa-brain text-purple-600',
                        colorClass: 'bg-purple-50',
                        fullDescription:
                            'Machine learning models predict failures before they happen, helping industries reduce downtime and extend equipment lifespan.',

                        stats: [
                            {
                                icon: 'fas fa-chart-simple',
                                value: '94%',
                                label: 'Prediction Accuracy',
                            },
                            {
                                icon: 'fas fa-screwdriver-wrench',
                                value: '-45%',
                                label: 'Downtime',
                            },
                        ],

                        benefits: [
                            'Prevent machine failures',
                            'Reduce maintenance cost',
                            'Extend equipment lifespan',
                            'Increase operational reliability',
                        ],
                    },

                    {
                        title: 'Supply Chain Digital Twin',
                        icon: 'fas fa-truck-fast text-amber-600',
                        colorClass: 'bg-amber-50',
                        fullDescription:
                            'Visualize the entire supply chain ecosystem digitally, from raw materials to product delivery with predictive logistics insights.',

                        stats: [
                            {
                                icon: 'fas fa-boxes',
                                value: '99.5%',
                                label: 'On-Time Delivery',
                            },
                            {
                                icon: 'fas fa-warehouse',
                                value: '30%',
                                label: 'Inventory Optimization',
                            },
                        ],

                        benefits: [
                            'Real-time supply tracking',
                            'Inventory optimization',
                            'Faster logistics planning',
                            'Better demand forecasting',
                        ],
                    },
                ],
                showFeature(index) {
                    this.activeFeature = index;
                    this.showDashboard = false;
                },
                scrollToFeatures() {
                    document
                        .getElementById('features-section')
                        .scrollIntoView({ behavior: 'smooth' });
                },
            };
        }
    </script>
</div>
