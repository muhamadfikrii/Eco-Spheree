<x-app-layout>
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 relative"
    x-data="{ 
        init() {
            // Mendengarkan event dari Livewire
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
            <a href="#dashboard"
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
            <h1 x-show="show" x-transition.duration.800ms class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 tracking-tight mb-4 leading-snug">
                Explore Indonesia's <span class="text-green-600">Environmental Dashboard</span>
            </h1>
            <p x-show="show" x-transition.duration.1000ms.delay.300ms class="max-w-xl sm:max-w-2xl mx-auto text-sm sm:text-base md:text-lg text-gray-600">
                Discover real-time environmental data, inspiring stories, and concrete actions from across Indonesia — all in one interactive dashboard for a sustainable future. 
            </p>
        </div>
    </section>

    <!-- Main Grid Section -->
    <div class="mx-auto pb-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8 lg:p-5 bg-slate-900  overflow-hidden">
            <!-- Kolom kiri (konten utama) -->
            <section class="lg:col-span-2 w-full space-y-6">
                <livewire:components.map-section />
            </section>

            <!-- Kolom kanan -->
            <aside class="space-y-6">
                <livewire:components.weather-widget />
            </aside>
        </div>

        <div class="bg-black mt-10 h-[1px]"></div>
    </div>

    <livewire:components.impact-stories />
    <livewire:components.partners />
</div>
</x-app-layout>
