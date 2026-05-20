<x-app-layout>
    <div
        class="relative z-10 overflow-x-hidden"
        x-data="{
            init() {
                Livewire.on('scroll-to-section', (data) => {
                    const element = document.getElementById(data.sectionId);

                    if (element) {
                        element.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start',
                        });
                    }
                });
            },
        }"
    >
        <livewire:components.header />

        <div class="px-4 sm:px-6 lg:px-8">
            <livewire:components.purpose />
        </div>

        <!-- Divider -->
        <div class="relative mx-4 mt-10 sm:mx-8 lg:mx-20">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-cyan-500/30"></div>
            </div>

            <div class="relative flex justify-center">
                <span
                    class="bg-black/40 px-4 py-1 font-mono text-[10px] tracking-wide text-cyan-400 backdrop-blur-sm sm:text-xs"
                >
                    <i class="fas fa-microchip mr-1"></i>
                    REAL-TIME TELEMETRY
                </span>
            </div>
        </div>

        <!-- Main Content -->
        <div class="mx-auto mt-6 w-full max-w-7xl px-4 pb-10 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 lg:gap-8">
                <!-- Main Section -->
                <section class="min-w-0 space-y-6 lg:col-span-2" id="dashboard">
                    <livewire:components.map-section />
                </section>

                <!-- Sidebar -->
                <aside class="min-w-0 space-y-6">
                    <livewire:components.weather-widget />
                </aside>
            </div>

            <!-- Divider -->
            <div class="relative mt-12">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-cyan-500/30"></div>
                </div>

                <div class="relative flex justify-center">
                    <span
                        class="bg-black/40 px-4 py-1 font-mono text-[10px] tracking-wide text-cyan-400 backdrop-blur-sm sm:text-xs"
                    >
                        <i class="fas fa-chart-simple mr-1"></i>
                        LIVE OPERATIONAL METRICS
                    </span>
                </div>
            </div>
        </div>

        <!-- Bottom Sections -->
        <div class="space-y-10 px-4 pb-10 sm:px-6 lg:px-8">
            <livewire:components.core-capabilitie />
            <livewire:components.partners />
        </div>
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

        html,
        body {
            overflow-x: hidden;
        }
    </style>
</x-app-layout>
