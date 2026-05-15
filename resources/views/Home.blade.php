<x-app-layout>
<div class="min-h-screen bg-gradient-to-br from-slate-950 via-slate-900 to-slate-950 relative"
    x-data="{ 
        init() {
            Livewire.on('scroll-to-section', (data) => {
                const element = document.getElementById(data.sectionId);
                if (element) {
                    element.scrollIntoView({ behavior: 'smooth' });
                }
            });
        }
    }">
    <!-- Header -->
    <livewire:components.header />

    <!-- CTA Floating Box -->
    <div class="absolute top-[24rem] lg:top-[26rem] right-8 lg:right-20 z-10 hidden lg:block">
        <div class="bg-white/90 backdrop-blur-lg rounded-2xl shadow-2xl p-6 sm:p-8 max-w-sm text-center font-sans border-b-4 border-r-4 border-emerald-600">
            <h3 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-green-800 mb-4"
                style="font-family: 'Montserrat', sans-serif; line-height:1.2;">
                Join the Global Conservation Movement
            </h3>
            <p class="text-sm sm:text-base lg:text-base text-gray-700 mb-6 leading-relaxed"
                style="font-family: 'Inter', sans-serif;">
                Access environmental data, monitor biodiversity, and take action alongside thousands of advocates worldwide.  
                Every insight you explore helps protect our planet for future generations.
            </p>
            <a href="{{ route('register') }}"
            class="inline-block px-6 sm:px-8 py-3 sm:py-4 bg-gradient-to-r from-green-800 to-emerald-500 hover:from-green-700 hover:to-emerald-600 text-white font-semibold rounded-lg shadow-lg transition-all duration-300 transform hover:-translate-y-1 hover:scale-105"
            style="font-family: 'Inter', sans-serif;">
            🌿 Explore Data & Take Action
            </a>
        </div>
    </div>



    <!-- Purpose Section -->
    <livewire:components.purpose />

    <!-- Divider -->
    <div class="bg-black mt-10 h-[1px] mx-4 sm:mx-10 lg:mx-20"></div>

    <section x-data="{ show: false }" x-init="setTimeout(() => show = true, 200)" id="map-section" class="text-center py-16 sm:py-20 relative overflow-hidden px-4 sm:px-6 lg:px-8">
        <div class="absolute inset-0 bg-gradient-to-br from-green-50 via-white to-blue-50 opacity-70"></div>
        <div class="relative z-10">
            <div class="inline-block px-4 py-1 mb-4 rounded-full bg-cyan-500/20 text-cyan-400 border border-cyan-400/30 text-xs font-mono tracking-wider">
                <i class="fas fa-chart-line mr-2"></i> INDUSTRIAL INTELLIGENCE
            </div>
            <h1 x-show="show" x-transition.duration.800ms 
                class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight mb-4 leading-snug bg-clip-text text-transparent bg-gradient-to-r from-white to-cyan-300">
                Explore Indonesia's <span class="text-cyan-400">Industrial Dashboard</span>
            </h1>
            <p x-show="show" x-transition.duration.1000ms.delay.300ms class="max-w-xl sm:max-w-2xl mx-auto text-sm sm:text-base md:text-lg text-gray-600">
                Discover real-time environmental data, inspiring stories, and concrete actions from across Indonesia — all in one interactive dashboard for a sustainable future. 
            </p>
            <div class="mt-8 flex justify-center gap-4 text-xs text-cyan-400/70 font-mono">
                <span><i class="fas fa-microchip mr-1"></i> 1,200+ sensors</span>
                <span><i class="fas fa-chart-line mr-1"></i> 94% accuracy</span>
                <span><i class="fas fa-bolt mr-1"></i> < 100ms latency</span>
            </div>
        </div>
    </section>

    <!-- Main Grid Section -->
    <div class="mx-auto pb-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8 lg:p-5 bg-slate-900  overflow-hidden">
            <!-- Kolom kiri (konten utama) -->
            <section class="lg:col-span-2 w-full space-y-6" data-aos="slide-right" data-aos-delay="800">
                <livewire:components.map-section />
            </section>

            <!-- Kolom kanan -->
            <aside class="space-y-6" data-aos="slide-left" data-aos-delay="1000">
                <livewire:components.weather-widget />
            </aside>
        </div>

        <div class="bg-black mt-10 h-[1px]"></div>
    </div>

    <div data-aos="fade-up" data-aos-delay="1400">
        <livewire:components.impact-stories />
    </div>
    <div data-aos="fade-up" data-aos-delay="1600">
        <livewire:components.partners />
    </div>
</div>
</x-app-layout>