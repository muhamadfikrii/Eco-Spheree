<x-app-layout>
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 relative">
    <!-- Header -->
    <livewire:components.header />

    <!-- CTA hanya muncul di desktop & tablet -->
    <div class="absolute top-[25em] md:top-[30em] right-4 md:right-36 z-10 hidden sm:block">
        <div class="bg-white/90 backdrop-blur-lg rounded-2xl shadow-2xl p-6 sm:p-8 max-w-lg text-center font-sans border-b-4 border-r-4 border-emerald-600">
            <h3 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-green-800 mb-4" style="font-family: 'Montserrat', sans-serif; line-height:1.2;">
                Join the Global Conservation Movement
            </h3>
            <p class="text-sm sm:text-base md:text-base text-gray-700 mb-6 leading-relaxed" style="font-family: 'Inter', sans-serif;">
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

    <!-- Hero Section -->
    <section x-data="{ show: false }" x-init="setTimeout(() => show = true, 200)" class="text-center py-16 sm:py-20 relative overflow-hidden px-4 sm:px-6 lg:px-8">
        <div class="absolute inset-0 bg-gradient-to-br from-green-50 via-white to-blue-50 opacity-70"></div>
        <div class="relative z-10">
            <h1 x-show="show" x-transition.duration.800ms class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 tracking-tight mb-4 leading-snug">
                Explore Indonesia's <span class="text-green-600">Environmental Dashboard</span>
            </h1>
            <p x-show="show" x-transition.duration.1000ms.delay.300ms class="max-w-xl sm:max-w-2xl mx-auto text-sm sm:text-base md:text-lg text-gray-600">
                Temukan data lingkungan real-time, kisah inspiratif, dan aksi nyata dari seluruh Indonesia — semuanya dalam satu dasbor interaktif untuk masa depan yang berkelanjutan.
            </p>
        </div>
    </section>

    <!-- Main Grid Section -->
    <div class="mx-auto pb-10 px-8 sm:px-6 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8 lg:p-5 bg-slate-900 rounded-xl overflow-hidden">
            <!-- Kolom kiri (konten utama) -->
            <section class="lg:col-span-2 space-y-6">
                <livewire:components.map-section />
                {{-- <livewire:components.activity-feed /> --}}
            </section>

            <!-- Kolom kanan -->
            <aside class="space-y-6">
                <livewire:components.weather-widget />
            </aside>
        </div>

        <div class="bg-black mt-10 h-[1px]"></div>
    </div>

    <!-- Impact Stories Section -->
    <div class="py-16 bg-white px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 text-center mb-12">Impact Stories</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Story cards here -->
            </div>
        </div>
    </div>
</div>
</x-app-layout>
