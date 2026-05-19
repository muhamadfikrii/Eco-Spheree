<x-app-layout>
    <div
        class="relative z-10"
        x-data="{
            init() {
                Livewire.on('scroll-to-section', (data) => {
                    const element = document.getElementById(data.sectionId);
                    if (element) {
                        element.scrollIntoView({ behavior: 'smooth' });
                    }
                });
            },
        }"
    >
        <livewire:components.header />

        <livewire:components.purpose />

        <div class="relative mx-4 mt-10 sm:mx-10 lg:mx-20">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-cyan-500/30"></div>
            </div>
            <div class="relative flex justify-center">
                <span
                    class="bg-black/40 px-4 font-mono text-xs text-cyan-400 backdrop-blur-sm"
                    ><i class="fas fa-microchip mr-1"></i> REAL-TIME
                    TELEMETRY</span
                >
            </div>
        </div>

        <div class="mx-auto pb-10">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 lg:gap-8 lg:p-5">
                <section class="w-full space-y-6 lg:col-span-2" id="dashboard">
                    <livewire:components.map-section />
                </section>
                <aside class="space-y-6">
                    <livewire:components.weather-widget />
                </aside>
            </div>
            <div class="relative mx-4 mt-10 sm:mx-10 lg:mx-20">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-cyan-500/30"></div>
                </div>
                <div class="relative flex justify-center">
                    <span
                        class="bg-black/40 px-4 font-mono text-xs text-cyan-400 backdrop-blur-sm"
                        ><i class="fas fa-chart-simple mr-1"></i> LIVE
                        OPERATIONAL METRICS</span
                    >
                </div>
            </div>
        </div>

        <livewire:components.core-capabilitie />
        <livewire:components.partners />
    </div>

    <style>
        @keyframes scroll {
            0% {
                transform: translateY(0);
                opacity: 1;
            }
            100% {
                transform: translateY(8px);
                opacity: 0;
            }
        }
        .animate-scroll {
            animation: scroll 1.5s ease-in-out infinite;
        }
    </style>
</x-app-layout>
