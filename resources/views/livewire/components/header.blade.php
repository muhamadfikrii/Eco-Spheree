<section 
    x-data="{ 
        showText: false,
        statsVisible: false
    }" 
    x-init="setTimeout(() => showText = true, 400); setTimeout(() => statsVisible = true, 1200)"
    style="background-image: url('{{ asset('image/hero.jpg') }}');"
    class="relative flex items-center justify-center bg-cover bg-center px-6 py-24 md:py-36 overflow-hidden min-h-screen">

    <!-- Natural Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-green-900/20 via-emerald-900/40 to-green-950/80"></div>
    
    <!-- Organic Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-32 left-16 w-64 h-64 bg-green-400/5 rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-32 right-16 w-80 h-80 bg-emerald-400/5 rounded-full filter blur-3xl"></div>
        <div class="absolute top-1/2 left-1/3 w-96 h-96 bg-teal-400/3 rounded-full filter blur-3xl"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 max-w-5xl mx-auto text-center">
        <!-- Nature Logo -->
        <div class="mb-10">
            
            
        </div>

        <!-- Main Headline -->
        <h2 
            x-show="showText" 
            x-transition:enter="transition ease-out duration-1000"
            x-transition:enter-start="opacity-0 transform translate-y-8"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            class="text-3xl md:text-4xl font-light text-white mb-6 max-w-3xl mx-auto leading-relaxed">
            Protecting Our Planet Through
            <span class="block font-normal text-green-300 mt-2">Data-Driven Conservation</span>
        </h2>

        <!-- Description -->
        <p 
            x-show="showText" 
            x-transition:enter="transition ease-out duration-1000"
            x-transition:enter-start="opacity-0 transform translate-y-8"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:enter-delay="100"
            class="text-lg text-gray-200 mb-12 max-w-2xl mx-auto leading-relaxed">
            Join thousands of environmental advocates monitoring ecosystems, tracking biodiversity, and taking action for a sustainable future.
        </p>

        <!-- Clean Call To Actions -->
        <div 
            x-show="showText" 
            x-transition:enter="transition ease-out duration-1000"
            x-transition:enter-start="opacity-0 transform translate-y-8"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:enter-delay="200"
            class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16">
            
            <!-- Primary Action -->
            <a href="#dashboard" 
                class="w-full sm:w-auto px-8 py-3 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg transition-all duration-300 shadow-md hover:shadow-lg">
                <i class="fas fa-chart-line mr-2"></i>
                View Environmental Data
            </a>
            
            <!-- Secondary Action -->
            <a href="#report" 
                class="w-full sm:w-auto px-8 py-3 bg-white/10 hover:bg-white/20 text-white font-medium rounded-lg transition-all duration-300 backdrop-blur-sm border border-white/20">
                <i class="fas fa-camera mr-2"></i>
                Explore Track
            </a>
        </div>

        <!-- Environmental Impact Stats -->
        <div 
            x-show="statsVisible"
            x-transition:enter="transition ease-out duration-1000"
            x-transition:enter-start="opacity-0 transform translate-y-8"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            class="grid grid-cols-1 md:grid-cols-4 gap-6 max-w-4xl mx-auto">
            
            <div class="text-center p-4">
                <div class="text-3xl font-light text-green-300 mb-1">1.2M</div>
                <div class="text-sm text-gray-300">Trees Tracked</div>
            </div>
            
            <div class="text-center p-4">
                <div class="text-3xl font-light text-emerald-300 mb-1">847K</div>
                <div class="text-sm text-gray-300">Species Monitored</div>
            </div>
            
            <div class="text-center p-4">
                <div class="text-3xl font-light text-teal-300 mb-1">3.5M</div>
                <div class="text-sm text-gray-300">CO₂ Reduced (tons)</div>
            </div>
            
            <div class="text-center p-4">
                <div class="text-3xl font-light text-green-300 mb-1">92</div>
                <div class="text-sm text-gray-300">Countries Active</div>
            </div>
        </div>
    </div>

    <!-- Simple Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
        <div class="flex flex-col items-center text-gray-300">
            <span class="text-xs uppercase tracking-wider mb-2">Scroll to explore</span>
            <div class="w-0.5 h-12 bg-gradient-to-b from-gray-300 to-transparent"></div>
        </div>
    </div>
</section>

<style>
    @keyframes gentle-float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    .animate-gentle-float {
        animation: gentle-float 6s ease-in-out infinite;
    }
</style>