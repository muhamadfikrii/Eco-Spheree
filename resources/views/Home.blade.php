<x-app-layout>
<div class="relative z-10"
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
    
    <livewire:components.header />

    <livewire:components.purpose />

    <!-- Divider dengan gaya industrial -->
    <div class="relative mt-10 mx-4 sm:mx-10 lg:mx-20">
        <div class="absolute inset-0 flex items-center">
            <div class="w-full border-t border-slate-800"></div>
        </div>
        <div class="relative flex justify-center">
            <span class="bg-slate-900 px-4 text-xs font-mono text-cyan-400/70">
                <i class="fas fa-microchip mr-1"></i> REAL-TIME TELEMETRY
            </span>
        </div>
    </div>

    <!-- Hero kecil / Map section (diubah industrial) -->
    <section x-data="{ show: false }" x-init="setTimeout(() => show = true, 200)" id="map-section" 
        class="text-center py-16 sm:py-20 relative overflow-hidden px-4 sm:px-6 lg:px-8">
        <!-- Background industrial pattern -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900/90"></div>
        <div class="absolute inset-0 opacity-20 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgdmlld0JveD0iMCAwIDQwIDQwIj48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjAuNSIgc3Ryb2tlLW9wYWNpdHk9IjAuMDMiIGQ9Ik0wIDQwTDQwIDBNNDAgNDBMMCAwIi8+PC9zdmc+')]"></div>
        <div class="absolute top-20 left-10 w-64 h-64 bg-cyan-500/10 rounded-full filter blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-64 h-64 bg-blue-600/10 rounded-full filter blur-3xl animate-pulse delay-1000"></div>
        
        <div class="relative z-10">
            <div class="inline-block px-4 py-1 mb-4 rounded-full bg-cyan-500/20 text-cyan-400 border border-cyan-400/30 text-xs font-mono tracking-wider">
                <i class="fas fa-chart-line mr-2"></i> INDUSTRIAL INTELLIGENCE
            </div>
            <h1 x-show="show" x-transition.duration.800ms 
                class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight mb-4 leading-snug bg-clip-text text-transparent bg-gradient-to-r from-white to-cyan-300">
                Explore Indonesia's <span class="text-cyan-400">Industrial Dashboard</span>
            </h1>
            <p x-show="show" x-transition.duration.1000ms.delay.300ms 
                class="max-w-xl sm:max-w-2xl mx-auto text-sm sm:text-base md:text-lg text-gray-300">
                Real-time machine telemetry, predictive analytics, and operational insights for smart manufacturing — built for Industry 4.0.
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
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8 lg:p-5 bg-slate-900 overflow-hidden">
            <!-- Kolom kiri (konten utama) -->
            <section class="lg:col-span-2 w-full space-y-6">
                <livewire:components.map-section />
            </section>

            <!-- Kolom kanan -->
            <aside class="space-y-6">
                <livewire:components.weather-widget />
            </aside>
        </div>

        <!-- Divider bawah dengan gaya industrial -->
        <div class="relative mt-10 mx-4 sm:mx-10 lg:mx-20">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-slate-800"></div>
            </div>
            <div class="relative flex justify-center">
                <span class="bg-slate-900 px-4 text-xs font-mono text-cyan-400/70">
                    <i class="fas fa-chart-simple mr-1"></i> LIVE OPERATIONAL METRICS
                </span>
            </div>
        </div>
    </div>

    <livewire:components.impact-stories />
    <livewire:components.partners />
</div>

<style>
    @keyframes scroll {
        0% { transform: translateY(0); opacity: 1; }
        100% { transform: translateY(8px); opacity: 0; }
    }
    .animate-scroll { animation: scroll 1.5s ease-in-out infinite; }
</style>
</x-app-layout>