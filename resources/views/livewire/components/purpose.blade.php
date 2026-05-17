<div class="bg-slate-50" id="purpose">
    <div x-data="industrialApp()">
        <section class="pt-20 pb-16 px-6 lg:px-12 z-0 industrial-hero-gradient text-white">
            <div class="max-w-[1300px] mx-auto">
                <div class="flex flex-col lg:flex-row items-center justify-between">
                    <div class="lg:w-1/2 mb-10 lg:mb-0">
                        <h1 class="text-4xl lg:text-6xl font-mono font-bold leading-tight mb-6">
                            See the Factory. <br>Analyze the Data. <br>Optimize in Real Time.
                        </h1>
                        <p class="text-lg lg:text-xl mb-8 opacity-90">
                            IndustrialTrack transforms manufacturing data into a living digital twin — visualizing machine telemetry, energy efficiency, and supply chain health in real time.
                        </p>
                        <div class="flex flex-wrap gap-4">
                        <a href="{{ route('insights') }}" 
                                class="px-6 py-3 bg-[#2563eb] text-white border border-white hover:bg-transparent font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                                Open Industrial Dashboard
                            </a>
                        </div>
                    </div>
                    <div class="lg:w-1/2 flex justify-center">
                        <div class="relative">
                            <div class="w-80 h-80 bg-white/10 rounded-full flex items-center justify-center floating">
                                <div class="w-64 h-64 bg-white/20 rounded-full flex items-center justify-center">
                                    <div class="w-48 h-48 bg-white/30 rounded-full flex items-center justify-center backdrop-blur-sm">
                                        <i class="fas fa-microchip text-white text-6xl"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute -top-4 -right-4 bg-white text-[#1e40af] px-4 py-2 rounded-lg shadow-lg">
                                <span class="font-bold">1,200+</span> Connected Sensors
                            </div>
                            <div class="absolute -bottom-4 -left-4 bg-white text-[#1e40af] px-4 py-2 rounded-lg shadow-lg">
                                <span class="font-bold">98%</span> Uptime SLA
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-16 px-6 lg:px-12" id="features">
            <div class="max-w-[1300px] mx-auto">
                <div class="text-center mb-16">
                    <span class="inline-block industrial-badge text-white px-4 py-2 rounded-full text-sm font-mono font-semibold mb-4">
                        INDUSTRY 4.0 SOLUTIONS
                    </span>
                    <h2 class="text-3xl lg:text-5xl font-mono text-[#0f172a] font-bold leading-tight mb-6">
                        What We Deliver?
                    </h2>
                    <p class="text-slate-600 max-w-2xl mx-auto text-lg">
                        By integrating IoT, AI, and edge analytics, we help manufacturers achieve zero downtime, optimize OEE, and drive sustainable production.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Left Column - Features -->
                    <div class="space-y-6">
                        <!-- Feature 1 -->
                        <div 
                            @click="showFeature(0)"
                            :class="{'ring-2 ring-[#38bdf8]': activeFeature === 0}"
                            class="feature-card bg-white rounded-2xl shadow-lg p-6 border-l-8 border-[#2563eb] hover:shadow-2xl hover:-translate-y-1 transition-all duration-300"
                        >
                            <div class="flex items-start gap-5">
                                <div class="relative">
                                    <div class="w-14 h-14 flex items-center justify-center bg-blue-100 rounded-2xl">
                                        <i class="fas fa-chart-line text-blue-600 text-2xl"></i>
                                    </div>
                                    <div class="absolute -top-1 -right-1 w-5 h-5 bg-blue-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-bolt text-white text-xs"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-slate-800 mb-2">Real-Time Machine Telemetry</h3>
                                    <p class="text-slate-600 mb-4">
                                        Monitor vibration, temperature, and power consumption from thousands of IoT sensors across your production lines with sub-second latency.
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-blue-700 font-semibold text-sm flex items-center gap-1">
                                            <i class="fas fa-microchip"></i> 1,200+ active sensors
                                        </span>
                                        <button class="text-blue-600 hover:text-blue-800 text-sm font-medium flex items-center gap-1">
                                            View details <i class="fas fa-arrow-right text-xs"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div 
                            @click="showFeature(1)"
                            :class="{'ring-2 ring-[#10b981]': activeFeature === 1}"
                            class="feature-card bg-white rounded-2xl shadow-lg p-6 border-l-8 border-[#10b981] hover:shadow-2xl hover:-translate-y-1 transition-all duration-300"
                        >
                            <div class="flex items-start gap-5">
                                <div class="relative">
                                    <div class="w-14 h-14 flex items-center justify-center bg-green-100 rounded-2xl">
                                        <i class="fas fa-charging-station text-green-600 text-2xl"></i>
                                    </div>
                                    <div class="absolute -top-1 -right-1 w-5 h-5 bg-green-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-leaf text-white text-xs"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-slate-800 mb-2">Energy & Emissions Optimization</h3>
                                    <p class="text-slate-600 mb-4">
                                        AI-powered analytics reduce energy waste, lower carbon footprint, and help achieve ESG targets without compromising throughput.
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-green-700 font-semibold text-sm flex items-center gap-1">
                                            <i class="fas fa-leaf"></i> -23% avg. energy reduction
                                        </span>
                                        <button class="text-green-600 hover:text-green-800 text-sm font-medium flex items-center gap-1">
                                            View details <i class="fas fa-arrow-right text-xs"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div 
                            @click="showFeature(2)"
                            :class="{'ring-2 ring-[#8b5cf6]': activeFeature === 2}"
                            class="feature-card bg-white rounded-2xl shadow-lg p-6 border-l-8 border-[#8b5cf6] hover:shadow-2xl hover:-translate-y-1 transition-all duration-300"
                        >
                            <div class="flex items-start gap-5">
                                <div class="relative">
                                    <div class="w-14 h-14 flex items-center justify-center bg-purple-100 rounded-2xl">
                                        <i class="fas fa-brain text-purple-600 text-2xl"></i>
                                    </div>
                                    <div class="absolute -top-1 -right-1 w-5 h-5 bg-purple-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-robot text-white text-xs"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-slate-800 mb-2">Predictive Maintenance & AI</h3>
                                    <p class="text-slate-600 mb-4">
                                        Machine learning models predict failures 48 hours in advance, reducing unplanned downtime by up to 45% and extending asset life.
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-purple-700 font-semibold text-sm flex items-center gap-1">
                                            <i class="fas fa-chart-simple"></i> 94% prediction accuracy
                                        </span>
                                        <button class="text-purple-600 hover:text-purple-800 text-sm font-medium flex items-center gap-1">
                                            View details <i class="fas fa-arrow-right text-xs"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 4 -->
                        <div 
                            @click="showFeature(3)"
                            :class="{'ring-2 ring-[#f59e0b]': activeFeature === 3}"
                            class="feature-card bg-white rounded-2xl shadow-lg p-6 border-l-8 border-[#f59e0b] hover:shadow-2xl hover:-translate-y-1 transition-all duration-300"
                        >
                            <div class="flex items-start gap-5">
                                <div class="relative">
                                    <div class="w-14 h-14 flex items-center justify-center bg-amber-100 rounded-2xl">
                                        <i class="fas fa-truck-fast text-amber-600 text-2xl"></i>
                                    </div>
                                    <div class="absolute -top-1 -right-1 w-5 h-5 bg-amber-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-boxes text-white text-xs"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-slate-800 mb-2">Supply Chain Digital Twin</h3>
                                    <p class="text-slate-600 mb-4">
                                        End-to-end visibility from raw material to finished goods, with predictive logistics and inventory optimization.
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-amber-700 font-semibold text-sm flex items-center gap-1">
                                            <i class="fas fa-chart-line"></i> 99.5% on-time delivery
                                        </span>
                                        <button class="text-amber-600 hover:text-amber-800 text-sm font-medium flex items-center gap-1">
                                            View details <i class="fas fa-arrow-right text-xs"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-2xl shadow-lg p-8">
                            <h3 class="text-2xl font-bold text-[#0f172a] mb-4 flex items-center gap-2">
                                <i class="fas fa-industry text-[#2563eb]"></i> About Us
                            </h3>
                            <p class="text-slate-700 mb-6">
                                Founded in 2022, IndustrialTrack is the leading industrial IoT platform for smart manufacturing, connecting over 1,200 factories across Southeast Asia.
                            </p>
                            
                            <div class="mb-6">
                                <button 
                                    @click="aboutExpanded = !aboutExpanded"
                                    class="flex items-center gap-2 text-[#2563eb] font-semibold hover:text-[#1e40af] transition-colors"
                                >
                                    <span>Our Mission & Team</span>
                                    <i 
                                        class="fas fa-chevron-down text-sm transition-transform duration-300" 
                                        :class="{'rotate-180': aboutExpanded}"
                                    ></i>
                                </button>
                                
                                <div x-show="aboutExpanded" class="mt-4 p-4 bg-slate-50 rounded-xl">
                                    <p class="text-slate-700 mb-4">
                                        Our team of industrial engineers, data scientists, and AI specialists work 24/7 to ensure every factory achieves operational excellence and sustainable growth.
                                    </p>
                                    <div class="grid grid-cols-2 gap-4 text-sm">
                                        <div class="flex items-center text-slate-600">
                                            <i class="fas fa-users text-[#2563eb] mr-2"></i> 80+ Experts
                                        </div>
                                        <div class="flex items-center text-slate-600">
                                            <i class="fas fa-globe text-[#2563eb] mr-2"></i> 7 Countries
                                        </div>
                                        <div class="flex items-center text-slate-600">
                                            <i class="fas fa-building text-[#2563eb] mr-2"></i> Singapore HQ
                                        </div>
                                        <div class="flex items-center text-slate-600">
                                            <i class="fas fa-shield-alt text-[#2563eb] mr-2"></i> ISO 27001 Certified
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex flex-wrap gap-3">
                                <span class="px-3 py-1 bg-slate-100 text-slate-700 rounded-full text-sm font-mono">IIoT</span>
                                <span class="px-3 py-1 bg-slate-100 text-slate-700 rounded-full text-sm font-mono">Edge Computing</span>
                                <span class="px-3 py-1 bg-slate-100 text-slate-700 rounded-full text-sm font-mono">Digital Twin</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Dynamic Content -->
                    <div class="space-y-8">
                        <!-- Stats Card (Default) -->
                        <div x-show="!activeFeature && !showDashboard" class="bg-white rounded-2xl shadow-lg p-8">
                            <h3 class="text-2xl font-bold text-[#0f172a] mb-6 flex items-center gap-2">
                                <i class="fas fa-chart-pie text-[#2563eb]"></i> Industrial Impact
                            </h3>
                            <div class="grid grid-cols-2 gap-6">
                                <div class="text-center p-4 bg-slate-50 rounded-xl">
                                    <div class="stats-counter text-3xl font-bold text-[#2563eb] mb-2">1,200+</div>
                                    <div class="text-sm text-slate-600">Connected Factories</div>
                                </div>
                                <div class="text-center p-4 bg-slate-50 rounded-xl">
                                    <div class="stats-counter text-3xl font-bold text-[#2563eb] mb-2">45%</div>
                                    <div class="text-sm text-slate-600">Less Downtime</div>
                                </div>
                                <div class="text-center p-4 bg-slate-50 rounded-xl">
                                    <div class="stats-counter text-3xl font-bold text-[#2563eb] mb-2">2.5M</div>
                                    <div class="text-sm text-slate-600">Data points/sec</div>
                                </div>
                                <div class="text-center p-4 bg-slate-50 rounded-xl">
                                    <div class="stats-counter text-3xl font-bold text-[#2563eb] mb-2">23%</div>
                                    <div class="text-sm text-slate-600">Energy Saved</div>
                                </div>
                            </div>
                        </div>

                        <!-- Feature Detail Card -->
                        <div 
                            x-show="activeFeature !== null" 
                            x-transition:enter="feature-detail-enter"
                            x-transition:enter-start="feature-detail-enter"
                            x-transition:enter-end="feature-detail-enter-to"
                            class="bg-white rounded-2xl shadow-lg p-8"
                        >
                            <div class="flex justify-between items-start mb-6">
                                <h3 class="text-2xl font-bold text-[#0f172a]" x-text="features[activeFeature]?.title"></h3>
                                <button @click="activeFeature = null" class="text-slate-500 hover:text-slate-700">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            
                            <div class="mb-6 p-4 rounded-lg" :class="features[activeFeature]?.colorClass">
                                <i :class="features[activeFeature]?.icon" class="text-4xl mb-3"></i>
                                <p class="text-slate-700" x-text="features[activeFeature]?.fullDescription"></p>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <template x-for="stat in features[activeFeature]?.stats">
                                    <div class="bg-slate-50 p-4 rounded-lg">
                                        <div class="flex items-center gap-2">
                                            <i :class="stat.icon" class="text-[#2563eb]"></i>
                                            <span class="font-semibold text-slate-800" x-text="stat.value"></span>
                                        </div>
                                        <p class="text-sm text-slate-600 mt-1" x-text="stat.label"></p>
                                    </div>
                                </template>
                            </div>
                            
                            <div class="mb-6">
                                <h4 class="font-semibold text-[#0f172a] mb-3">Key Benefits:</h4>
                                <ul class="list-disc list-inside space-y-2 text-slate-700">
                                    <template x-for="benefit in features[activeFeature]?.benefits">
                                        <li x-text="benefit"></li>
                                    </template>
                                </ul>
                            </div>
                            
                            <div class="flex gap-3">
                                <a href="{{ route('learn_more') }}" class="px-4 py-2 bg-[#2563eb] text-white rounded-lg hover:bg-[#1d4ed8] transition-colors">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
    .industrial-hero-gradient {
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);
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
        0% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
        100% { transform: translateY(0px); }
    }
    .stats-counter {
        font-feature-settings: "tnum";
        font-variant-numeric: tabular-nums;
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
                        title: "Real-Time Machine Telemetry",
                        icon: "fas fa-chart-line text-blue-600",
                        colorClass: "bg-blue-50 border-l-4 border-blue-500",
                        fullDescription: "Our IIoT platform captures vibration, temperature, pressure, and power consumption data from over 1,200 industrial sensors with sub-second latency. Gain real-time visibility into every asset on your factory floor.",
                        stats: [
                            { icon: "fas fa-microchip", value: "1,200+", label: "Active Sensors" },
                            { icon: "fas fa-clock", value: "< 100ms", label: "Latency" },
                            { icon: "fas fa-chart-line", value: "24/7", label: "Streaming" },
                            { icon: "fas fa-database", value: "PB-scale", label: "Data Historian" }
                        ],
                        benefits: [
                            "Instant anomaly detection and alerts",
                            "Centralized dashboard for all assets",
                            "Seamless integration with existing SCADA",
                            "Mobile access for floor managers"
                        ]
                    },
                    {
                        title: "Energy & Emissions Optimization",
                        icon: "fas fa-charging-station text-green-600",
                        colorClass: "bg-green-50 border-l-4 border-green-500",
                        fullDescription: "AI-driven analytics identify energy waste patterns, optimize HVAC and motor usage, and help you meet carbon reduction targets without sacrificing production output.",
                        stats: [
                            { icon: "fas fa-leaf", value: "-23%", label: "Avg. Energy Reduction" },
                            { icon: "fas fa-cloud-sun", value: "1,200 tCO2", label: "Saved Annually" },
                            { icon: "fas fa-chart-simple", value: "15%", label: "Peak Demand Cut" },
                            { icon: "fas fa-solar-panel", value: "40+", label: "Green Projects" }
                        ],
                        benefits: [
                            "Automated energy audits",
                            "Real-time carbon footprint tracking",
                            "ROI-focused recommendations",
                            "Support for ESG reporting"
                        ]
                    },
                    {
                        title: "Predictive Maintenance & AI",
                        icon: "fas fa-brain text-purple-600",
                        colorClass: "bg-purple-50 border-l-4 border-purple-500",
                        fullDescription: "Machine learning models trained on historical failure patterns predict breakdowns up to 48 hours in advance, reducing unplanned downtime by up to 45% and extending equipment lifespan by 30%.",
                        stats: [
                            { icon: "fas fa-chart-simple", value: "94%", label: "Prediction Accuracy" },
                            { icon: "fas fa-tools", value: "45%", label: "Less Downtime" },
                            { icon: "fas fa-calendar-week", value: "48h", label: "Advance Warning" },
                            { icon: "fas fa-clock", value: "30%", label: "Longer Asset Life" }
                        ],
                        benefits: [
                            "Reduced maintenance costs",
                            "Optimized spare parts inventory",
                            "Condition-based maintenance scheduling",
                            "Integration with CMMS"
                        ]
                    },
                    {
                        title: "Supply Chain Digital Twin",
                        icon: "fas fa-truck-fast text-amber-600",
                        colorClass: "bg-amber-50 border-l-4 border-amber-500",
                        fullDescription: "Create a virtual replica of your entire supply chain — from raw material to customer delivery. Simulate disruptions, optimize routes, and maintain 99.5% on-time delivery even during volatility.",
                        stats: [
                            { icon: "fas fa-chart-line", value: "99.5%", label: "On-Time Delivery" },
                            { icon: "fas fa-boxes", value: "-18%", label: "Inventory Cost" },
                            { icon: "fas fa-route", value: "22%", label: "Logistics Efficiency" },
                            { icon: "fas fa-chart-pie", value: "100%", label: "Visibility" }
                        ],
                        benefits: [
                            "End-to-end real-time tracking",
                            "What-if scenario simulation",
                            "Automated replenishment",
                            "Risk mitigation dashboards"
                        ]
                    }
                ],
                showFeature(index) {
                    this.activeFeature = index;
                    this.showDashboard = false;
                },
                scrollToFeatures() {
                    document.getElementById('features-section').scrollIntoView({ 
                        behavior: 'smooth' 
                    });
                }
            }
        }
    </script>
</div>
