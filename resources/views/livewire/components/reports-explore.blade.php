<div
    id="report-section"
    class="bg-grid-pattern from-dark-bg relative overflow-hidden bg-gradient-to-br to-[#0f2b42] py-32 font-['Inter'] text-white"
>
    
    <div class="absolute inset-0 overflow-hidden">
        <div
            class="bg-sunshine-yellow absolute right-1/3 top-1/4 h-72 w-72 rounded-full opacity-5 blur-3xl sm:blur-xl md:blur-3xl"
        ></div>
        <div
            class="bg-light-green absolute bottom-1/4 left-1/3 h-64 w-64 rounded-full opacity-10 blur-3xl sm:blur-xl md:blur-3xl"
        ></div>
    </div>

    
    <div class="container relative z-10 mx-auto px-6">
        <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2">
            
            <div class="translate-y-10 opacity-0" id="report-text">
                <h2 class="mb-6 text-3xl font-bold leading-tight md:text-5xl">
                    Report Environmental Issues with
                    <span class="text-sunshine-yellow">Loca-Report</span>
                </h2>
                <p class="mb-6 max-w-lg text-base text-gray-300 md:text-lg">Use your smartphone to document and report environmental concerns in your community. Your reports help drive local action and awareness.</p>

                <div class="mb-6 space-y-4">
                    <div class="flex items-start space-x-3">
                        <div
                            class="mt-1 flex h-8 w-8 items-center justify-center rounded-full bg-green-700 p-2"
                        >
                            <i class="fas fa-camera text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold md:text-base">
                                Visual Documentation
                            </h4>
                            <p class="text-xs text-gray-400 md:text-sm">Take photos with auto location tagging for accuracy.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div
                            class="mt-1 flex h-8 w-8 items-center justify-center rounded-full bg-green-700 p-2"
                        >
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold md:text-base">
                                Pin on Interactive Map
                            </h4>
                            <p class="text-xs text-gray-400 md:text-sm">Each report appears as a glowing marker for visibility.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div
                            class="mt-1 flex h-8 w-8 items-center justify-center rounded-full bg-green-700 p-2"
                        >
                            <i class="fas fa-users text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold md:text-base">
                                Community Action
                            </h4>
                            <p class="text-xs text-gray-400 md:text-sm">Collaborate with locals to resolve reported issues.</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-4 sm:flex-row">
                    <button
                        class="flex items-center justify-center rounded-full bg-green-600 px-6 py-3 font-medium text-gray-900 shadow-md transition-all duration-300 hover:bg-green-500 hover:shadow-lg"
                    >
                        <i class="fas fa-plus mr-2"></i>
                        <a href="{{ route('report') }}"
                            >explore with the community</a
                        >
                    </button>
                    <button
                        class="flex items-center justify-center rounded-full border border-green-700 bg-transparent px-6 py-3 font-medium shadow-md transition-all duration-300 hover:bg-green-700 hover:text-gray-900 hover:shadow-lg"
                    >
                        <i class="fas fa-exclamation-circle mr-2"></i> Report
                        Issue
                    </button>
                </div>
            </div>

            
            <div
                class="relative mt-12 translate-y-10 opacity-0 lg:mt-0"
                id="report-mockup"
            >
                <div
                    class="float-card mx-auto w-64 rounded-[2rem] bg-gray-800 p-4 shadow-2xl"
                >
                    <div
                        class="relative h-80 overflow-hidden rounded-2xl bg-gray-900 md:h-96"
                    >
                        <div
                            class="from-dark-bg to-card-bg absolute inset-0 bg-gradient-to-b p-4"
                        >
                            <h3 class="mb-3 flex justify-between font-bold">
                                <span>New Report</span>
                                <span class="opacity-60">✕</span>
                            </h3>
                            <div
                                class="mb-4 flex h-40 items-center justify-center rounded-lg bg-black bg-opacity-30 md:h-48"
                            >
                                <i
                                    class="fas fa-camera text-2xl text-white opacity-50"
                                ></i>
                            </div>
                            <div class="space-y-2">
                                <div>
                                    <label class="text-xs text-gray-300"
                                        >Issue Type</label
                                    >
                                    <div class="mt-1 flex space-x-2 text-xs">
                                        <span
                                            class="bg-light-green rounded bg-opacity-20 px-2 py-1 text-white"
                                            >Pollution</span
                                        >
                                        <span
                                            class="rounded bg-gray-700 px-2 py-1 text-gray-300"
                                            >Deforestation</span
                                        >
                                    </div>
                                </div>
                                <div>
                                    <label class="text-xs text-gray-300"
                                        >Description</label
                                    >
                                    <div
                                        class="mt-1 h-14 rounded bg-black bg-opacity-20 md:h-16"
                                    ></div>
                                </div>
                                <button
                                    class="bg-sunshine-yellow mt-2 w-full rounded-lg py-2 font-medium text-gray-900"
                                >
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div
                    class="glass float-card absolute -right-3 -top-3 w-44 rounded-xl bg-slate-700 p-3"
                >
                    <div class="mb-1 flex items-center">
                        <div
                            class="mr-2 h-3 w-3 rounded-full bg-green-500"
                        ></div>
                        <span class="text-sm font-medium"
                            >128 Reports Today</span
                        >
                    </div>
                    <p class="text-xs text-gray-400">Community-driven action</p>
                </div>

                <div
                    class="glass float-card absolute -bottom-3 -left-3 w-44 rounded-xl bg-slate-700 p-3"
                >
                    <div class="mb-1 flex items-center">
                        <div
                            class="bg-sunshine-yellow mr-2 h-3 w-3 rounded-full"
                        ></div>
                        <span class="text-sm font-medium"
                            >64% Issues Resolved</span
                        >
                    </div>
                    <p class="text-xs text-gray-400">Through local efforts</p>
                </div>
            </div>
        </div>
    </div>

    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            gsap.registerPlugin(ScrollTrigger);

            // Text fade in
            gsap.to('#report-text', {
                scrollTrigger: {
                    trigger: '#report-section',
                    start: 'top 90%',
                    once: true,
                },
                opacity: 1,
                y: 0,
                duration: 1.2,
                ease: 'power3.out',
                force3D: true,
                willChange: 'transform, opacity',
            });

            // Enhanced mockup animation with smoother entrance
            gsap.to('#report-mockup', {
                scrollTrigger: {
                    trigger: '#report-section',
                    start: 'top 85%',
                    once: true,
                },
                opacity: 1,
                y: 0,
                duration: 1.4,
                delay: 0.2,
                ease: 'power3.out',
                force3D: true,
                willChange: 'transform, opacity',
            });

            // Enhanced floating animation with better performance
            const floatCards = gsap.utils.toArray('.float-card');

            floatCards.forEach((card, index) => {
                // Stagger the floating animation for each card
                gsap.to(card, {
                    y: 15,
                    duration: 3 + index * 0.5, // Different durations for variety
                    repeat: -1,
                    yoyo: true,
                    ease: 'sine.inOut',
                    force3D: true,
                    willChange: 'transform',
                    transformPerspective: 1000, // Add perspective for better 3D rendering
                    transformOrigin: '50% 50%',
                });
            });

            // Add subtle rotation and scale animation to main phone mockup
            gsap.to('#report-mockup .bg-gray-800', {
                rotation: 2,
                scale: 1.02,
                duration: 4,
                repeat: -1,
                yoyo: true,
                ease: 'sine.inOut',
                force3D: true,
                willChange: 'transform',
                transformPerspective: 1000,
            });
        });
    </script>
</div>
