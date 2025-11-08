<div class="bg-[#f0fdf4]" id="purpose">
    <div x-data="ecotrackApp()">
        <!-- Hero Section -->
        <section class="pt-20 pb-16 px-6 lg:px-12 z-0 eco-gradient text-white">
            <div class="max-w-[1300px] mx-auto">
                <div class="flex flex-col lg:flex-row items-center justify-between">
                    <div class="lg:w-1/2 mb-10 lg:mb-0">
                        <h1 class="text-4xl lg:text-6xl font-serif font-bold leading-tight mb-6">
                            See the Earth. <br>Feel the Data. <br>Take Action.
                        </h1>
                        <p class="text-lg lg:text-xl mb-8 opacity-90">
                            EcoTrack turns Indonesia's environmental data into a living digital map — visualizing air quality, biodiversity, and forest health in real time.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <button 
                                @click="showDashboard = true" 
                                class="px-6 py-3 bg-emerald-500 text-white border border-white hover:bg-transparent font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
                            >
                                Explore Dashboard
                            </button>
                        </div>
                    </div>
                    <div class="lg:w-1/2 flex justify-center">
                        <div class="relative">
                            <div class="w-80 h-80 bg-white/20 rounded-full flex items-center justify-center floating">
                                <div class="w-64 h-64 bg-white/30 rounded-full flex items-center justify-center">
                                    <div class="w-48 h-48 bg-white/40 rounded-full flex items-center justify-center">
                                        <i class="fas fa-globe-asia text-white text-6xl"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute -top-4 -right-4 bg-white text-[#166534] px-4 py-2 rounded-lg shadow-lg">
                                <span class="font-bold">500+</span> Monitoring Points
                            </div>
                            <div class="absolute -bottom-4 -left-4 bg-white text-[#166534] px-4 py-2 rounded-lg shadow-lg">
                                <span class="font-bold">10K+</span> Community Members
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-16 px-6 lg:px-12" id="features-section">
            <div class="max-w-[1300px] mx-auto">
                <div class="text-center mb-16">
                    <span class="inline-block eco-badge text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                        Our Solutions
                    </span>
                    <h2 class="text-3xl lg:text-5xl font-serif text-[#14532d] font-bold mb-6">
                        What We Do?
                    </h2>
                    <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                        By connecting communities, scientists, and technology, we inspire collective action toward a cleaner, more resilient planet.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Left Column - Features -->
                    <div class="space-y-6">
                        <!-- Feature 1 -->
                        <div 
                            @click="showFeature(0)"
                            :class="{'ring-2 ring-blue-500': activeFeature === 0}"
                            class="feature-card bg-white rounded-2xl shadow-lg p-6 border-l-8 border-blue-500 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300"
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
                                    <h3 class="text-xl font-bold text-gray-800 mb-2">Real-time Environmental Monitoring</h3>
                                    <p class="text-gray-600 mb-4">
                                        Track air quality, water pollution, and deforestation patterns through a nationwide sensor network that updates data in real time.
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-blue-700 font-semibold text-sm flex items-center gap-1">
                                            <i class="fas fa-chart-bar"></i> 500+ active monitoring points
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
                            :class="{'ring-2 ring-green-500': activeFeature === 1}"
                            class="feature-card bg-white rounded-2xl shadow-lg p-6 border-l-8 border-green-500 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300"
                        >
                            <div class="flex items-start gap-5">
                                <div class="relative">
                                    <div class="w-14 h-14 flex items-center justify-center bg-green-100 rounded-2xl">
                                        <i class="fas fa-users text-green-600 text-2xl"></i>
                                    </div>
                                    <div class="absolute -top-1 -right-1 w-5 h-5 bg-green-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-heart text-white text-xs"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-gray-800 mb-2">Community Engagement</h3>
                                    <p class="text-gray-600 mb-4">
                                        Empower local communities to participate in data collection, share environmental reports, and drive grassroots change.
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-green-700 font-semibold text-sm flex items-center gap-1">
                                            <i class="fas fa-users"></i> 10,000+ community members involved
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
                            :class="{'ring-2 ring-purple-500': activeFeature === 2}"
                            class="feature-card bg-white rounded-2xl shadow-lg p-6 border-l-8 border-purple-500 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300"
                        >
                            <div class="flex items-start gap-5">
                                <div class="relative">
                                    <div class="w-14 h-14 flex items-center justify-center bg-purple-100 rounded-2xl">
                                        <i class="fas fa-graduation-cap text-purple-600 text-2xl"></i>
                                    </div>
                                    <div class="absolute -top-1 -right-1 w-5 h-5 bg-purple-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-star text-white text-xs"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-gray-800 mb-2">Environmental Education & Awareness</h3>
                                    <p class="text-gray-600 mb-4">
                                        Provide digital learning materials, interactive dashboards, and workshops to increase environmental literacy.
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-purple-700 font-semibold text-sm flex items-center gap-1">
                                            <i class="fas fa-user-graduate"></i> 5,000+ students reached
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
                            :class="{'ring-2 ring-orange-500': activeFeature === 3}"
                            class="feature-card bg-white rounded-2xl shadow-lg p-6 border-l-8 border-orange-500 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300"
                        >
                            <div class="flex items-start gap-5">
                                <div class="relative">
                                    <div class="w-14 h-14 flex items-center justify-center bg-orange-100 rounded-2xl">
                                        <i class="fas fa-shield-alt text-orange-600 text-2xl"></i>
                                    </div>
                                    <div class="absolute -top-1 -right-1 w-5 h-5 bg-orange-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-leaf text-white text-xs"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-gray-800 mb-2">Conservation Support & Restoration</h3>
                                    <p class="text-gray-600 mb-4">
                                        Provide actionable data insights for NGOs and government agencies to support reforestation and biodiversity protection.
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-orange-700 font-semibold text-sm flex items-center gap-1">
                                            <i class="fas fa-tree"></i> 1M+ trees monitored
                                        </span>
                                        <button class="text-orange-600 hover:text-orange-800 text-sm font-medium flex items-center gap-1">
                                            View details <i class="fas fa-arrow-right text-xs"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-2xl shadow-lg p-8">
                            <h3 class="text-2xl font-bold text-[#14532d] mb-4 flex items-center gap-2">
                                <i class="fas fa-info-circle text-[#16a34a]"></i> About Us
                            </h3>
                            <p class="text-gray-700 mb-6">
                                Founded in 2023, EcoTrack (Eco-Sphere Project) is Indonesia's leading digital platform for real-time environmental monitoring and awareness.
                            </p>
                            
                            <div class="mb-6">
                                <button 
                                    @click="aboutExpanded = !aboutExpanded"
                                    class="flex items-center gap-2 text-[#15803d] font-semibold hover:text-[#14532d] transition-colors"
                                >
                                    <span>Our Mission & Team</span>
                                    <i 
                                        class="fas fa-chevron-down text-sm transition-transform duration-300" 
                                        :class="{'rotate-180': aboutExpanded}"
                                    ></i>
                                </button>
                                
                                <div x-show="aboutExpanded" class="mt-4 p-4 bg-[#f0fdf4] rounded-xl">
                                    <p class="text-gray-700 mb-4">
                                        Our team of environmental scientists, data analysts, and conservationists work tirelessly to ensure that every Indonesian has access to accurate, actionable environmental data.
                                    </p>
                                    <div class="grid grid-cols-2 gap-4 text-sm">
                                        <div class="flex items-center text-gray-600">
                                            <i class="fas fa-users text-[#16a34a] mr-2"></i> 50+ Experts
                                        </div>
                                        <div class="flex items-center text-gray-600">
                                            <i class="fas fa-globe text-[#16a34a] mr-2"></i> 38 Provinces
                                        </div>
                                        <div class="flex items-center text-gray-600">
                                            <i class="fas fa-map-marker-alt text-[#16a34a] mr-2"></i> Jakarta HQ
                                        </div>
                                        <div class="flex items-center text-gray-600">
                                            <i class="fas fa-award text-[#16a34a] mr-2"></i> ISO Certified
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex flex-wrap gap-3">
                                <span class="px-3 py-1 bg-[#dcfce7] text-[#166534] rounded-full text-sm font-medium">Data Science</span>
                                <span class="px-3 py-1 bg-[#dcfce7] text-[#166534] rounded-full text-sm font-medium">Geospatial Mapping</span>
                                <span class="px-3 py-1 bg-[#dcfce7] text-[#166534] rounded-full text-sm font-medium">Environmental Research</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Dynamic Content -->
                    <div class="space-y-8">
                        <!-- Stats Card (Default) -->
                        <div x-show="!activeFeature && !showDashboard" class="bg-white rounded-2xl shadow-lg p-8">
                            <h3 class="text-2xl font-bold text-[#14532d] mb-6 flex items-center gap-2">
                                <i class="fas fa-chart-pie text-[#16a34a]"></i> Our Impact in Numbers
                            </h3>
                            <div class="grid grid-cols-2 gap-6">
                                <div class="text-center p-4 bg-[#f0fdf4] rounded-xl">
                                    <div class="stats-counter text-3xl font-bold text-[#166534] mb-2">500+</div>
                                    <div class="text-sm text-[#15803d]">Active Sensors</div>
                                </div>
                                <div class="text-center p-4 bg-[#f0fdf4] rounded-xl">
                                    <div class="stats-counter text-3xl font-bold text-[#166534] mb-2">38</div>
                                    <div class="text-sm text-[#15803d]">Provinces Covered</div>
                                </div>
                                <div class="text-center p-4 bg-[#f0fdf4] rounded-xl">
                                    <div class="stats-counter text-3xl font-bold text-[#166534] mb-2">10K+</div>
                                    <div class="text-sm text-[#15803d]">Community Members</div>
                                </div>
                                <div class="text-center p-4 bg-[#f0fdf4] rounded-xl">
                                    <div class="stats-counter text-3xl font-bold text-[#166534] mb-2">1M+</div>
                                    <div class="text-sm text-[#15803d]">Trees Monitored</div>
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
                                <h3 class="text-2xl font-bold text-[#14532d]" x-text="features[activeFeature]?.title"></h3>
                                <button @click="activeFeature = null" class="text-gray-500 hover:text-gray-700">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            
                            <div class="mb-6 p-4 rounded-lg" :class="features[activeFeature]?.colorClass">
                                <i :class="features[activeFeature]?.icon" class="text-4xl mb-3"></i>
                                <p class="text-gray-700" x-text="features[activeFeature]?.fullDescription"></p>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <template x-for="stat in features[activeFeature]?.stats">
                                    <div class="bg-[#f0fdf4] p-4 rounded-lg">
                                        <div class="flex items-center gap-2">
                                            <i :class="stat.icon" class="text-[#16a34a]"></i>
                                            <span class="font-semibold text-[#166534]" x-text="stat.value"></span>
                                        </div>
                                        <p class="text-sm text-[#15803d] mt-1" x-text="stat.label"></p>
                                    </div>
                                </template>
                            </div>
                            
                            <div class="mb-6">
                                <h4 class="font-semibold text-[#14532d] mb-3">Key Benefits:</h4>
                                <ul class="list-disc list-inside space-y-2 text-gray-700">
                                    <template x-for="benefit in features[activeFeature]?.benefits">
                                        <li x-text="benefit"></li>
                                    </template>
                                </ul>
                            </div>
                            
                            <div class="flex gap-3">
                                <button class="px-4 py-2 bg-[#166534] text-white rounded-lg hover:bg-[#14532d] transition-colors">
                                    Learn More
                                </button>
                                <a href="{{ route('login') }}" class="px-4 py-2 border border-[#166534] text-[#166534] rounded-lg hover:bg-[#f0fdf4] transition-colors">
                                    Get Involved
                                </a>
                            </div>
                        </div>

                        <!-- Dashboard Preview -->
                        <div 
                            x-show="showDashboard" 
                            x-transition:enter="feature-detail-enter"
                            x-transition:enter-start="feature-detail-enter"
                            x-transition:enter-end="feature-detail-enter-to"
                            class="bg-white rounded-2xl shadow-lg p-8"
                        >
                            <div class="flex justify-between items-start mb-6">
                                <h3 class="text-2xl font-bold text-[#14532d]">Live Environmental Dashboard</h3>
                                <button @click="showDashboard = false" class="text-gray-500 hover:text-gray-700">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            
                            <div class="mb-6">
                                <div class="flex gap-4 mb-4">
                                    <span class="px-3 py-1 bg-[#dcfce7] text-[#166534] rounded-full text-sm">Air Quality</span>
                                    <span class="px-3 py-1 bg-[#dcfce7] text-[#166534] rounded-full text-sm">Water Quality</span>
                                    <span class="px-3 py-1 bg-[#dcfce7] text-[#166534] rounded-full text-sm">Forest Cover</span>
                                </div>
                                
                                <div class="bg-gray-100 h-48 rounded-lg flex items-center justify-center mb-4">
                                    <div class="text-center">
                                        <i class="fas fa-map-marked-alt text-4xl text-[#16a34a] mb-2"></i>
                                        <p class="text-gray-600">Interactive Map Visualization</p>
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-3 gap-4 text-center">
                                    <div class="p-3 bg-[#f0fdf4] rounded-lg">
                                        <div class="text-lg font-bold text-[#166534]">85%</div>
                                        <div class="text-sm text-[#15803d]">Good Air</div>
                                    </div>
                                    <div class="p-3 bg-[#fef7cd] rounded-lg">
                                        <div class="text-lg font-bold text-[#ca8a04]">12%</div>
                                        <div class="text-sm text-[#a16207]">Moderate</div>
                                    </div>
                                    <div class="p-3 bg-[#fecaca] rounded-lg">
                                        <div class="text-lg font-bold text-[#dc2626]">3%</div>
                                        <div class="text-sm text-[#b91c1c]">Poor</div>
                                    </div>
                                </div>
                            </div>
                            
                            <button class="w-full py-3 bg-[#166534] text-white rounded-lg hover:bg-[#14532d] transition-colors">
                                Access Full Dashboard
                            </button>
                        </div>

                        <!-- CTA Card -->
                        <div class="eco-gradient text-white rounded-2xl shadow-lg p-8 text-center">
                            <h3 class="text-2xl font-bold mb-4">Ready to Make a Difference?</h3>
                            <p class="mb-6 opacity-90">Join our community and help protect Indonesia's environment.</p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <a href="{{ route('register') }}" class="px-6 py-3 bg-white text-[#166534] font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                                    Sign Up Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

    <script>
        function ecotrackApp() {
            return {
                activeFeature: null,
                aboutExpanded: false,
                showDashboard: false,
                features: [
                    {
                        title: "Real-time Environmental Monitoring",
                        icon: "fas fa-chart-line text-blue-600",
                        colorClass: "bg-blue-50 border-l-4 border-blue-500",
                        fullDescription: "Our advanced sensor network provides real-time data on air quality, water pollution, and deforestation patterns across Indonesia. With over 500 monitoring points, we deliver accurate environmental insights that empower informed decision-making.",
                        stats: [
                            { icon: "fas fa-satellite", value: "500+", label: "Active Sensors" },
                            { icon: "fas fa-clock", value: "Real-time", label: "Data Updates" },
                            { icon: "fas fa-map-marker-alt", value: "38", label: "Provinces Covered" },
                            { icon: "fas fa-database", value: "24/7", label: "Monitoring" }
                        ],
                        benefits: [
                            "Immediate detection of environmental changes",
                            "Comprehensive coverage across Indonesia",
                            "Historical data analysis and trend prediction",
                            "Integration with government monitoring systems"
                        ]
                    },
                    {
                        title: "Community Engagement",
                        icon: "fas fa-users text-green-600",
                        colorClass: "bg-green-50 border-l-4 border-green-500",
                        fullDescription: "We empower local communities to actively participate in environmental protection through our citizen science programs. Community members can report environmental issues, participate in data collection, and drive grassroots conservation initiatives.",
                        stats: [
                            { icon: "fas fa-user-friends", value: "10,000+", label: "Community Members" },
                            { icon: "fas fa-mobile-alt", value: "Mobile App", label: "Reporting Tool" },
                            { icon: "fas fa-hand-holding-heart", value: "500+", label: "Local Projects" },
                            { icon: "fas fa-comments", value: "24/7", label: "Support Network" }
                        ],
                        benefits: [
                            "Direct community involvement in conservation",
                            "Local knowledge integration into data systems",
                            "Empowerment through environmental education",
                            "Strengthened community-researcher partnerships"
                        ]
                    },
                    {
                        title: "Environmental Education & Awareness",
                        icon: "fas fa-graduation-cap text-purple-600",
                        colorClass: "bg-purple-50 border-l-4 border-purple-500",
                        fullDescription: "Our comprehensive educational programs and interactive learning platforms increase environmental literacy across all age groups. We provide schools, universities, and communities with the tools to understand and address environmental challenges.",
                        stats: [
                            { icon: "fas fa-graduation-cap", value: "5,000+", label: "Students Reached" },
                            { icon: "fas fa-school", value: "200+", label: "Educational Partners" },
                            { icon: "fas fa-book", value: "50+", label: "Learning Modules" },
                            { icon: "fas fa-chalkboard-teacher", value: "100+", label: "Workshops" }
                        ],
                        benefits: [
                            "Customized curriculum for different age groups",
                            "Interactive digital learning platforms",
                            "Teacher training and support materials",
                            "Community awareness campaigns"
                        ]
                    },
                    {
                        title: "Conservation Support & Restoration",
                        icon: "fas fa-shield-alt text-orange-600",
                        colorClass: "bg-orange-50 border-l-4 border-orange-500",
                        fullDescription: "We provide NGOs and government agencies with actionable data and insights to support reforestation, biodiversity protection, and ecosystem restoration efforts across Indonesia's diverse landscapes.",
                        stats: [
                            { icon: "fas fa-tree", value: "1M+", label: "Trees Monitored" },
                            { icon: "fas fa-seedling", value: "50+", label: "Conservation Projects" },
                            { icon: "fas fa-paw", value: "200+", label: "Species Tracked" },
                            { icon: "fas fa-mountain", value: "100K+", label: "Hectares Protected" }
                        ],
                        benefits: [
                            "Data-driven conservation planning",
                            "Monitoring of reforestation progress",
                            "Biodiversity impact assessments",
                            "Partnership with local conservation groups"
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