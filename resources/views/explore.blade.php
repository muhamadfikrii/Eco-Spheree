<x-app-layout>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                        'gradient': {
                            '1': 'linear-gradient(135deg, #7FB3D5 0%, #85C1E9 100%)',
                            '2': 'linear-gradient(135deg, #82E0AA 0%, #7FB3D5 100%)',
                            '3': 'linear-gradient(135deg, #F7DC6F 0%, #FAD7A0 100%)',
                            '4': 'linear-gradient(135deg, #F8B739 0%, #F1948A 100%)',
                            '5': 'linear-gradient(135deg, #4FB3BF 0%, #82E0AA 100%)',
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'fade-in': 'fadeIn 0.8s ease-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'pulse-glow': 'pulseGlow 3s ease-in-out infinite',
                        'gradient-shift': 'gradientShift 8s ease infinite',
                        'bounce-slow': 'bounceSlow 3s ease-in-out infinite',
                        'rotate-slow': 'rotateSlow 20s linear infinite',
                        'shimmer': 'shimmer 2s infinite',
                        'blob': 'blob 7s ease-in-out infinite',
                        'magnetic': 'magnetic 0.3s ease-out',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                    },
                    keyframes: {
                        float: '0%, 100% { transform: translateY(0px) rotate(0deg); } 50% { transform: translateY(-20px) rotate(2deg); }',
                        fadeIn: '0% { opacity: 0; } 100% { opacity: 1; }',
                        slideUp: '0% { opacity: 0; transform: translateY(30px); } 100% { opacity: 1; transform: translateY(0); }',
                        gradientShift: '0%, 100% { background-position: 0% 50%; } 50% { background-position: 100% 50%; }',
                        pulseGlow: '0%, 100% { box-shadow: 0 0 20px rgba(127, 179, 213, 0.3); transform: scale(1); } 50% { box-shadow: 0 0 40px rgba(127, 179, 213, 0.6); transform: scale(1.05); }',
                        shimmer: '0% { background-position: -1000px 0; } 100% { background-position: 1000px 0; }',
                        bounceSlow: '0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); }',
                        rotateSlow: '0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); }',
                        blob: '0%, 100% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; } 50% { border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%; }',
                        magnetic: '0% { transform: scale(1); } 50% { transform: scale(1.05); } 100% { transform: scale(1); }',
                        glow: '0% { box-shadow: 0 0 5px rgba(127, 179, 213, 0.5); } 50% { box-shadow: 0 0 20px rgba(127, 179, 213, 0.8); } 100% { box-shadow: 0 0 5px rgba(127, 179, 213, 0.5); }',
                    }
                }
            }
    </script>
<div class="font-sans bg-[#F8F9F9] text-[#2C3E50]" x-data="ecoSphere()">

    <!-- Hero Section -->
   <section id="explore" class="relative min-h-screen flex items-center justify-center overflow-hidden bg-white/90 py-24 px-6">
        <!-- Background Image & Overlay -->
        <div class="absolute inset-0 bg-cover bg-center opacity-40" 
            style="background-image: url('https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=2070&q=80');">
        </div>
        <div class="absolute inset-0 backdrop-blur-xs"></div>

        <!-- Floating Elements -->
        <div class="absolute top-10 left-10 w-40 h-40 bg-emerald-200/90 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-20 right-10 w-32 h-32 bg-lime-200/90 rounded-full blur-2xl animate-float" style="animation-delay: 2s;"></div>

        <div class="relative z-10 max-w-6xl mx-auto text-center">
            <!-- Heading -->
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-6 drop-shadow-md">
                Begin Your <span class="text-emerald-600">Eco Exploration</span>
            </h2>
            <p class="text-lg text-gray-900 font-semibold max-w-2xl mx-auto mb-16 drop-shadow-sm">
                Discover the pulse of our planet — explore nature through live data, stories, and actions that protect our Earth for generations to come.
            </p>

            <div class="space-y-20">
                <!-- Step 1: Live Map -->
                <div class="flex flex-col md:flex-row md:items-center gap-10 flex-wrap scroll-reveal" data-aos="fade-up">
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1000&q=80"
                        alt="Eco Map"
                        class="w-full md:w-1/2 flex-shrink-0 rounded-2xl shadow-lg object-cover min-h-[300px] mb-8 md:mb-0">
                    <div class="md:w-1/2 text-left">
                        <h3 class="text-2xl font-bold text-emerald-800 mb-3 drop-shadow-sm">Interactive Eco Map</h3>
                        <p class="text-gray-900 mb-4 font-semibold leading-relaxed drop-shadow-sm">
                            Navigate an interactive map filled with real-time data on air quality, forest coverage, and sustainable initiatives across the globe.
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 text-emerald-800 font-semibold hover:underline">
                            Open Map <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Step 2: Biodiversity -->
                <div class="flex flex-col md:flex-row-reverse md:items-center gap-10 flex-wrap scroll-reveal" data-aos="fade-up" data-aos-delay="400"  data-aos-offset="700">
                    <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=1000&q=80"
                        alt="Biodiversity"
                        class="w-full md:w-1/2 flex-shrink-0 rounded-2xl shadow-lg object-cover min-h-[300px] mb-8 md:mb-0">
                    <div class="md:w-1/2 text-left">
                        <h3 class="text-2xl font-bold text-blue-900 mb-3 drop-shadow-sm">Biodiversity & Conservation</h3>
                        <p class="text-gray-900 mb-4 font-semibold leading-relaxed drop-shadow-sm">
                            Dive into stories of unique species, conservation zones, and restoration efforts that are keeping ecosystems alive and thriving.
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 text-blue-900 font-semibold hover:underline">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Step 3: Sustainable Living -->
                <div class="flex flex-col md:flex-row md:items-center gap-10 flex-wrap scroll-reveal" data-aos="fade-up" data-aos-delay="600"  data-aos-offset="700">
                    <img src="https://images.unsplash.com/photo-1635689422267-6ea44c62ab6e?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1112"
                        alt="Sustainable Living"
                        class="w-full md:w-1/2 flex-shrink-0 rounded-2xl shadow-lg object-cover min-h-[300px] mb-8 md:mb-0">
                    <div class="md:w-1/2 text-left">
                        <h3 class="text-2xl font-bold text-amber-800 mb-3 drop-shadow-sm">Sustainable Living</h3>
                        <p class="text-gray-900 mb-4 font-semibold leading-relaxed drop-shadow-sm">
                            Get simple yet impactful daily tips to live greener — from energy-saving habits to eco-friendly home choices.
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 text-amber-700 font-semibold hover:underline">
                            Explore Tips <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Dashboard Section -->
    <section id="dashboard" class="py-20 bg-[#F8F9F9]">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 scroll-reveal">
                <h2 class="text-3xl lg:text-4xl font-bold text-[#2C3E50] mb-4">
                    Environmental Data
                    <span class="bg-gradient-to-r from-[#primary] to-[#85C1E9] bg-clip-text text-transparent">Dashboard</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Real-time monitoring and analysis of environmental metrics
                </p>
            </div>
            
            <!-- Data Layer Selector -->
            <div class="flex flex-wrap justify-center gap-4 mb-12 scroll-reveal">
                <template x-for="layer in ['air', 'water', 'forest', 'wildlife']" :key="layer">
                    <button 
                        @click="activeLayer = layer"
                        :class="activeLayer === layer ? 'bg-gradient-to-r from-[#primary] to-[#85C1E9] text-white shadow-lg' : 'bg-white text-gray-700 hover:bg-gray-50'"
                        class="px-6 py-3 rounded-xl font-medium transition-all duration-300 flex items-center space-x-2 shadow-md">
                        <i class="fas text-sm" :class="{
                            'fa-wind': layer === 'air',
                            'fa-tint': layer === 'water',
                            'fa-tree': layer === 'forest',
                            'fa-paw': layer === 'wildlife'
                        }"></i>
                        <span x-text="getLayerName(layer)"></span>
                    </button>
                </template>
            </div>
            
            <!-- Main Dashboard -->
            <div class="grid lg:grid-cols-3 gap-8 mb-12">
                <div class="lg:col-span-2 scroll-reveal">
                    <div class="bg-white rounded-2xl shadow-xl p-6">
                        <h3 class="text-xl font-semibold text-[#2C3E50] mb-6">
                            <span x-text="getLayerName(activeLayer)"></span> Analytics
                        </h3>
                        
                        <div class="h-64 bg-gradient-to-br from-[#primary]/10 to-[#85C1E9]/10 rounded-xl flex items-center justify-center mb-6">
                            <div class="text-center">
                                <i class="fas fa-chart-line text-5xl text-[#85C1E9] mb-3 animate-pulse"></i>
                                <p class="text-gray-600">Interactive Chart Visualization</p>
                                <p class="text-sm text-gray-500 mt-1">Real-time data updates</p>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-3 gap-4">
                            <div class="text-center p-4 bg-[#primary]/10 rounded-xl hover:bg-[#primary]/20 transition-colors">
                                <div class="text-2xl font-bold text-[#85C1E9]" x-text="getCurrentData(activeLayer).quality + '%'"></div>
                                <div class="text-sm text-gray-600">Quality</div>
                            </div>
                            <div class="text-center p-4 bg-[#85C1E9]/10 rounded-xl hover:bg-[#85C1E9]/20 transition-colors">
                                <div class="text-2xl font-bold text-[#85C1E9]" x-text="getCurrentData(activeLayer).coverage + '%'"></div>
                                <div class="text-sm text-gray-600">Coverage</div>
                            </div>
                            <div class="text-center p-4 bg-[#F7DC6F]/10 rounded-xl hover:bg-[#F7DC6F]/20 transition-colors">
                                <div class="text-2xl font-bold text-[#85C1E9]">+12%</div>
                                <div class="text-sm text-gray-600">Trend</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="scroll-reveal">
                    <div class="bg-gradient-to-br from-[#primary] to-[#85C1E9] rounded-2xl p-6 text-white shadow-xl">
                        <h3 class="text-xl font-semibold mb-6">Quick Stats</h3>
                        
                        <div class="space-y-6">
                            <div>
                                <div class="flex justify-between mb-2 text-sm">
                                    <span>Overall Quality</span>
                                    <span x-text="getCurrentData(activeLayer).quality + '%'"></span>
                                </div>
                                <div class="w-full bg-white/30 rounded-full h-2">
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-12px); }
    }
    
    @keyframes blob {
        0%, 100% { transform: translate(0px, 0px) scale(1); }
        25% { transform: translate(20px, -20px) scale(1.05); }
        50% { transform: translate(0px, 20px) scale(1.1); }
        75% { transform: translate(-20px, -10px) scale(1.05); }
    }
    
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    
    .animate-blob {
        animation: blob 10s ease-in-out infinite;
    }
    
    .scroll-reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease-out;
    }
    
    .scroll-reveal.active {
        opacity: 1;
        transform: translateY(0);
    }
    
    .hover\\:shadow-3xl:hover {
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
    }
</style>

<script>
    // Initialize scroll reveal animations
    document.addEventListener('DOMContentLoaded', function() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);
        
        document.querySelectorAll('.scroll-reveal').forEach(el => {
            observer.observe(el);
        });
    });
</script>                                    <div class="h-full bg-white rounded-full" :style="'width: ' + getCurrentData(activeLayer).quality + '%'"></div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="flex justify-between mb-2 text-sm">
                                    <span>Regional Coverage</span>
                                    <span x-text="getCurrentData(activeLayer).coverage + '%'"></span>
                                </div>
                                <div class="w-full bg-white/30 rounded-full h-2">
                                    <div class="h-full bg-white rounded-full" :style="'width: ' + getCurrentData(activeLayer).coverage + '%'"></div>
                                </div>
                            </div>
                            
                            <div class="pt-4 border-t border-white/20">
                                <p class="text-sm opacity-90" x-text="getCurrentData(activeLayer).description"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Regional Data Cards -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 scroll-reveal">
                <template x-for="region in regions" :key="region.id">
                    <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 group">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h4 class="font-semibold text-[#2C3E50]" x-text="region.name"></h4>
                                <span class="inline-block px-2 py-1 bg-[#primary]/20 text-[#primary] rounded-full text-xs font-semibold" x-text="'Score: ' + region.score"></span>
                            </div>
                            <div class="text-2xl font-bold bg-gradient-to-r from-[#primary] to-[#85C1E9] bg-clip-text text-transparent" x-text="region.score"></div>
                        </div>
                        
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-gray-600">Air Quality</span>
                                    <span class="font-medium" x-text="region.airQuality + '%'"></span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="h-full bg-gradient-to-r from-[#primary] to-[#85C1E9] rounded-full" :style="'width: ' + region.airQuality + '%'"></div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-gray-600">Water Quality</span>
                                    <span class="font-medium" x-text="region.waterQuality + '%'"></span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="h-full bg-gradient-to-r from-[#85C1E9] to-[#4FB3BF] rounded-full" :style="'width: ' + region.waterQuality + '%'"></div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-gray-600">Forest Cover</span>
                                    <span class="font-medium" x-text="region.forestCover + '%'"></span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="h-full bg-gradient-to-r from-[#82E0AA] to-[#A2D2C5] rounded-full" :style="'width: ' + region.forestCover + '%'"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </section>

    <!-- Initiatives Section -->
    <section id="initiatives" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 scroll-reveal">
                <h2 class="text-3xl lg:text-4xl font-bold text-[#2C3E50] mb-4">
                    Eco
                    <span class="bg-gradient-to-r from-[#primary] to-[#85C1E9] bg-clip-text text-transparent">Initiatives</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Join our community-driven environmental projects
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <template x-for="(initiative, index) in initiatives" :key="index">
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 group scroll-reveal" :style="'animation-delay: ' + (index * 0.1) + 's'">
                        <div class="relative h-56 overflow-hidden">
                            <img :src="initiative.image" :alt="initiative.title" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-[#primary] to-[#85C1E9] rounded-xl flex items-center justify-center mr-3 group-hover:rotate-12 transition-transform duration-300">
                                    <i class="fas text-white text-lg" :class="initiative.icon"></i>
                                </div>
                                <h3 class="text-lg font-semibold text-[#2C3E50]" x-text="initiative.title"></h3>
                            </div>
                            
                            <p class="text-gray-600 mb-4 text-sm" x-text="initiative.description"></p>
                            
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="fas fa-users mr-2"></i>
                                    <span x-text="initiative.participants + ' participants'"></span>
                                </div>
                                <span class="inline-block px-2 py-1 bg-[#82E0AA]/20 text-[#82E0AA] rounded-full text-xs font-semibold" x-text="initiative.category"></span>
                            </div>
                            
                            <button class="w-full bg-gradient-to-r from-[#primary] to-[#85C1E9] text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transition-all duration-300 flex items-center justify-center gap-2 group-hover:scale-105">
                                <span>Join Initiative</span>
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                            </button>
                        </div>
                    </div>
                </template>
            </div>
            
            <!-- Impact Statistics -->
            <div class="bg-gradient-to-r from-[#primary] to-[#85C1E9] rounded-2xl p-8 text-white text-center scroll-reveal shadow-xl">
                <h3 class="text-2xl font-semibold mb-8">Community Impact</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="group cursor-pointer">
                        <div class="text-3xl font-bold mb-2 group-hover:scale-110 transition-transform" x-text="communityStats.reports"></div>
                        <p class="opacity-90 text-sm">Reports Filed</p>
                    </div>
                    <div class="group cursor-pointer">
                        <div class="text-3xl font-bold mb-2 group-hover:scale-110 transition-transform" x-text="communityStats.participants"></div>
                        <p class="opacity-90 text-sm">Active Members</p>
                    </div>
                    <div class="group cursor-pointer">
                        <div class="text-3xl font-bold mb-2 group-hover:scale-110 transition-transform" x-text="communityStats.initiatives"></div>
                        <p class="opacity-90 text-sm">Projects</p>
                    </div>
                    <div class="group cursor-pointer">
                        <div class="text-3xl font-bold mb-2 group-hover:scale-110 transition-transform" x-text="communityStats.impact + ' tons'"></div>
                        <p class="opacity-90 text-sm">CO₂ Reduced</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stories Section -->
    <section id="stories" class="py-20 bg-[#F8F9F9]">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 scroll-reveal">
                <h2 class="text-3xl lg:text-4xl font-bold text-[#2C3E50] mb-4">
                    Impact
                    <span class="bg-gradient-to-r from-[#primary] to-[#85C1E9] bg-clip-text text-transparent">Stories</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Real stories of environmental change
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto space-y-6">
                <template x-for="(story, index) in stories" :key="index">
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 scroll-reveal" :style="'animation-delay: ' + (index * 0.1) + 's'">
                        <div class="md:flex">
                            <div class="md:w-2/5">
                                <img :src="story.image" :alt="story.title" class="w-full h-48 md:h-full object-cover">
                            </div>
                            <div class="p-6 md:w-3/5">
                                <div class="flex items-center space-x-3 mb-3">
                                    <span class="inline-block px-2 py-1 bg-[#primary]/20 text-[#primary] rounded-full text-xs font-semibold">Success Story</span>
                                    <span class="text-sm text-gray-500" x-text="story.date"></span>
                                </div>
                                
                                <h3 class="text-xl font-semibold text-[#2C3E50] mb-3" x-text="story.title"></h3>
                                <p class="text-gray-600 mb-4 text-sm" x-text="story.description"></p>
                                
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center text-sm text-gray-500">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        <span x-text="story.location"></span>
                                    </div>
                                    <button class="text-[#85C1E9] font-medium hover:text-[#primary] transition-colors text-sm flex items-center gap-1 group">
                                        <span>Read More</span>
                                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section id="timeline" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 scroll-reveal">
                <h2 class="text-3xl lg:text-4xl font-bold text-[#2C3E50] mb-4">
                    Our
                    <span class="bg-gradient-to-r from-[#primary] to-[#85C1E9] bg-clip-text text-transparent">Journey</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Key milestones in our conservation efforts
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="space-y-12">
                    <template x-for="(milestone, index) in milestones" :key="index">
                        <div class="flex items-center scroll-reveal" :class="index % 2 === 0 ? 'md:flex-row-reverse' : 'md:flex-row'">
                            <div class="md:w-1/2 md:px-8">
                                <div class="bg-white rounded-2xl p-6 shadow-lg border-l-4 border-[#primary]">
                                    <h3 class="text-xl font-semibold text-[#2C3E50] mb-2" x-text="milestone.title"></h3>
                                    <p class="text-gray-600 mb-4" x-text="milestone.description"></p>
                                    <span class="text-sm text-[#primary] font-medium" x-text="milestone.date"></span>
                                </div>
                            </div>
                            <div class="md:w-1/2 flex items-center justify-center">
                                <div class="w-16 h-16 bg-gradient-to-r from-[#primary] to-[#85C1E9] rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                    <span x-text="index + 1"></span>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gradient-to-br from-[#primary] to-[#85C1E9]">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 scroll-reveal">
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">
                    Get In
                    <span class="text-[#F7DC6F]">Touch</span>
                </h2>
                <p class="text-lg text-white/90 max-w-3xl mx-auto">
                    Join us in our mission to create a sustainable future
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 shadow-2xl scroll-reveal">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-xl font-semibold mb-6 text-white">Contact Information</h3>
                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-lg mr-4 text-white"></i>
                                    <div>
                                        <div class="font-medium text-white">Address</div>
                                        <div class="text-white/80 text-sm">123 [#82E0AA] Street, Eco City</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-phone text-lg mr-4 text-white"></i>
                                    <div>
                                        <div class="font-medium text-white">Phone</div>
                                        <div class="text-white/80 text-sm">+1 (555) 123-4567</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-envelope text-lg mr-4 text-white"></i>
                                    <div>
                                        <div class="font-medium text-white">Email</div>
                                        <div class="text-white/80 text-sm">info@ecosphere.org</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-8">
                                <h4 class="font-semibold mb-4 text-white">Follow Us</h4>
                                <div class="flex space-x-3">
                                    <a href="#" class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center hover:bg-white/30 transition-colors hover:scale-110">
                                        <i class="fab fa-facebook-f text-sm text-white"></i>
                                    </a>
                                    <a href="#" class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center hover:bg-white/30 transition-colors hover:scale-110">
                                        <i class="fab fa-twitter text-sm text-white"></i>
                                    </a>
                                    <a href="#" class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center hover:bg-white/30 transition-colors hover:scale-110">
                                        <i class="fab fa-instagram text-sm text-white"></i>
                                    </a>
                                    <a href="#" class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center hover:bg-white/30 transition-colors hover:scale-110">
                                        <i class="fab fa-linkedin-in text-sm text-white"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <h3 class="text-xl font-semibold mb-6 text-white">Send Message</h3>
                            <form class="space-y-4" @submit.prevent="submitForm">
                                <input type="text" placeholder="Your Name" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-xl placeholder-white/70 text-white focus:outline-none focus:border-white text-sm">
                                <input type="email" placeholder="Your Email" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-xl placeholder-white/70 text-white focus:outline-none focus:border-white text-sm">
                                <textarea placeholder="Your Message" rows="4" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-xl placeholder-white/70 text-white focus:outline-none focus:border-white text-sm"></textarea>
                                <button type="submit" class="w-full bg-white text-[#primary] px-6 py-3 rounded-xl font-medium hover:bg-gray-100 transition-colors text-sm hover:scale-105">
                                    Send Message
                                    <i class="fas fa-paper-plane ml-2 text-xs"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section id="newsletter" class="py-20 bg-[#F8F9F9]">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-2xl p-8 shadow-xl scroll-reveal">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-[#2C3E50] mb-4">Stay Updated</h3>
                        <p class="text-gray-600 mb-6">Subscribe to our newsletter for the latest updates</p>
                        <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto" @submit.prevent="subscribeNewsletter">
                            <input type="email" placeholder="Your email address" class="flex-1 px-4 py-3 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#primary]">
                            <button type="submit" class="bg-gradient-to-r from-[#primary] to-[#85C1E9] text-white px-6 py-3 rounded-lg font-semibold hover:shadow-lg transition-all duration-300 flex items-center justify-center gap-2 hover:scale-105">
                                Subscribe
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Back to Top Button -->
    <button @click="scrollToTop()" x-show="showBackToTop" x-transition class="fixed bottom-8 right-8 w-12 h-12 bg-[#primary] text-white rounded-full shadow-lg flex items-center justify-center hover:bg-[#85C1E9] transition-all duration-300 z-40 hover:scale-110">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Notification Toast -->
    <div x-show="notification.show" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform translate-x-full"
         x-transition:enter-end="opacity-100 transform translate-x-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 transform translate-x-0"
         x-transition:leave-end="opacity-0 transform translate-x-full"
         class="fixed top-4 right-4 bg-[#primary] text-white px-6 py-3 rounded-lg shadow-lg z-50">
        <div class="flex items-center space-x-2">
            <i class="fas fa-check-circle"></i>
            <span x-text="notification.message"></span>
        </div>
    </div>

        <style>
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-12px); }
    }
    
    @keyframes blob {
        0%, 100% { transform: translate(0px, 0px) scale(1); }
        25% { transform: translate(20px, -20px) scale(1.05); }
        50% { transform: translate(0px, 20px) scale(1.1); }
        75% { transform: translate(-20px, -10px) scale(1.05); }
    }
    
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    
    .animate-blob {
        animation: blob 10s ease-in-out infinite;
    }
    
    .scroll-reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease-out;
    }
    
    .scroll-reveal.active {
        opacity: 1;
        transform: translateY(0);
    }
    
    .hover\\:shadow-3xl:hover {
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
    }
</style>

<script>
    // Initialize scroll reveal animations
    document.addEventListener('DOMContentLoaded', function() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);
        
        document.querySelectorAll('.scroll-reveal').forEach(el => {
            observer.observe(el);
        });
    });
</script>
</div>
</x-app-layout>