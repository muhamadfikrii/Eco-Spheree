<x-app-layout>
    <div
        class="bg-grid-pattern min-h-screen bg-gradient-to-br dark:from-gray-900 dark:via-blue-900"
    >
        
        <div
            x-data="loadingOverlay()"
            x-show="isLoading"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-50 flex items-center justify-center bg-white dark:bg-gray-900"
        >
            <div class="text-center">
                
                <div class="relative mb-8">
                    <div
                        class="h-20 w-20 animate-spin rounded-full border-4 border-blue-200"
                    ></div>
                    <div
                        class="absolute left-1/2 top-1/2 h-12 w-12 -translate-x-1/2 -translate-y-1/2 transform animate-ping rounded-full border-4 border-emerald-500"
                    ></div>
                    <div
                        class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transform"
                    >
                        <div
                            class="h-8 w-8 animate-pulse rounded-full bg-gradient-to-r from-blue-600 to-emerald-600"
                        ></div>
                    </div>
                </div>

                
                <h3
                    class="mb-4 text-2xl font-bold text-slate-800 dark:text-slate-100"
                >
                    Preparing Your Challenge
                </h3>
                <p class="mb-2 text-slate-600 dark:text-slate-400">Getting everything ready for your eco-journey...</p>
                <div class="text-sm text-slate-500 dark:text-slate-500">
                    Redirecting in
                    <span
                        x-text="countdown"
                        class="font-bold text-blue-600 dark:text-blue-400"
                    ></span>
                    seconds
                </div>

                
                <div
                    class="mx-auto mt-6 h-2 w-64 overflow-hidden rounded-full bg-slate-200 dark:bg-slate-700"
                >
                    <div
                        class="h-full rounded-full bg-gradient-to-r from-blue-600 to-emerald-600 transition-all duration-100"
                        :style="`width: ${progress}%`"
                    ></div>
                </div>
            </div>
        </div>

        <section
            x-data="challengeHero()"
            class="mx-auto w-full max-w-7xl px-4 pb-20 pt-24 sm:px-6 lg:px-8"
        >
            <div class="pointer-events-none absolute inset-0 overflow-hidden">
                
                <template x-for="(particle, index) in particles" :key="index">
                    <div
                        class="animate-float absolute rounded-full bg-gradient-to-r from-blue-400/20 to-emerald-400/20"
                        :class="particle.size"
                        :style="`left: ${particle.x}%; top: ${particle.y}%; animation-delay: ${particle.delay}s;`"
                    ></div>
                </template>

                
                <div
                    class="absolute bottom-0 left-0 right-0 h-32 overflow-hidden"
                >
                    <div
                        class="animate-wave absolute -bottom-10 left-0 right-0 h-40 rounded-t-[50%] bg-gradient-to-t from-blue-500/5 to-transparent"
                    ></div>
                    <div
                        class="animate-wave absolute -bottom-5 left-0 right-0 h-32 rounded-t-[50%] bg-gradient-to-t from-emerald-500/5 to-transparent"
                        style="animation-delay: 0.5s"
                    ></div>
                </div>
            </div>

            <div class="relative z-10">
                
                <div class="mb-16 text-center">
                    
                    <div
                        class="relative mb-8 flex h-24 items-center justify-center md:h-32"
                    >
                        <h1
                            class="absolute left-0 right-0 top-0 transform text-4xl font-bold transition-all duration-500 md:text-6xl"
                            :class="{
                                'opacity-100 translate-y-0':
                                    currentTextIndex === 0,
                                'opacity-0 -translate-y-10':
                                    currentTextIndex !== 0,
                            }"
                        >
                            <span class="text-slate-800 dark:text-slate-100"
                                >Ready for a</span
                            >
                            <span
                                class="block bg-gradient-to-r from-blue-600 to-emerald-600 bg-clip-text text-transparent dark:from-blue-400 dark:to-emerald-400"
                                >Daily Challenge?</span
                            >
                        </h1>

                        <h1
                            class="absolute left-0 right-0 top-0 transform text-4xl font-bold transition-all duration-500 md:text-6xl"
                            :class="{
                                'opacity-100 translate-y-0':
                                    currentTextIndex === 1,
                                'opacity-0 translate-y-10':
                                    currentTextIndex !== 1,
                            }"
                        >
                            <span class="text-slate-800 dark:text-slate-100"
                                >Make an</span
                            >
                            <span
                                class="block bg-gradient-to-r from-emerald-600 to-blue-600 bg-clip-text text-transparent dark:from-emerald-400 dark:to-blue-400"
                                >Environmental Impact</span
                            >
                        </h1>

                        <h1
                            class="absolute left-0 right-0 top-0 transform text-4xl font-bold transition-all duration-500 md:text-6xl"
                            :class="{
                                'opacity-100 translate-y-0':
                                    currentTextIndex === 2,
                                'opacity-0 -translate-y-10':
                                    currentTextIndex !== 2,
                            }"
                        >
                            <span class="text-slate-800 dark:text-slate-100"
                                >Join the</span
                            >
                            <span
                                class="block bg-gradient-to-r from-blue-600 to-emerald-600 bg-clip-text text-transparent dark:from-blue-400 dark:to-emerald-400"
                                >Eco Revolution</span
                            >
                        </h1>
                    </div>

                    
                    <div class="mb-8 flex justify-center">
                        <div class="flex space-x-2">
                            <template x-for="i in 3" :key="i">
                                <div
                                    class="h-1 w-8 rounded-full transition-all duration-500"
                                    :class="currentTextIndex === i - 1
                                        ? 'bg-blue-600 w-12'
                                        : 'bg-slate-300'"
                                ></div>
                            </template>
                        </div>
                    </div>

                    
                    <div class="mx-auto mb-12 max-w-2xl">
                        <div
                            class="transform rounded-2xl border border-slate-200/50 bg-white/80 p-8 shadow-lg backdrop-blur-lg transition-all duration-500 hover:-translate-y-2 hover:shadow-xl dark:border-slate-700/50 dark:bg-slate-800/80"
                        >
                            <div class="mb-6 flex items-center justify-between">
                                <h3
                                    class="text-xl font-semibold text-slate-800 dark:text-slate-100"
                                >
                                    Today's Featured Challenge
                                </h3>
                                <div
                                    class="flex items-center text-sm font-medium text-emerald-600 dark:text-emerald-400"
                                >
                                    <svg class="mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>15 min</span>
                                </div>
                            </div>

                            <div class="mb-6">
                                <h4
                                    class="mb-3 text-2xl font-bold text-slate-900 dark:text-white"
                                >
                                    Reduce Single-Use Plastics
                                </h4>
                                <p class="mb-4 text-slate-600 dark:text-slate-300">Commit to avoiding single-use plastics for one day. Bring your own containers, use reusable bags, and choose products with minimal packaging.</p>

                                <div
                                    class="flex items-center justify-between rounded-lg bg-slate-100 p-4 dark:bg-slate-700/50"
                                >
                                    <div>
                                        <div
                                            class="mb-1 text-sm text-slate-500 dark:text-slate-400"
                                        >
                                            Challenge Reward
                                        </div>
                                        <div class="flex items-center">
                                            <div
                                                class="mr-2 flex h-6 w-6 items-center justify-center rounded-full bg-amber-500"
                                            >
                                                <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M10 15a5 5 0 110-10 5 5 0 010 10z"></path>
                                                </svg>
                                            </div>
                                            <span
                                                class="font-bold text-slate-800 dark:text-slate-100"
                                                >150 Points</span
                                            >
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div
                                            class="mb-1 text-sm text-slate-500 dark:text-slate-400"
                                        >
                                            Participants Today
                                        </div>
                                        <div
                                            class="font-bold text-slate-800 dark:text-slate-100"
                                        >
                                            3,247
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @auth
                                
                                <button
                                    @click="startChallengeJourney()"
                                    :disabled="isLoading"
                                    class="group relative flex w-full transform items-center justify-center gap-3 overflow-hidden rounded-xl bg-gradient-to-r from-blue-600 to-emerald-600 py-4 text-lg font-bold text-white shadow-lg transition-all duration-300 hover:-translate-y-1 hover:from-blue-700 hover:to-emerald-700 hover:shadow-xl disabled:cursor-not-allowed disabled:opacity-50"
                                >
                                    <div
                                        class="absolute inset-0 -translate-x-full -skew-x-12 transform bg-white/20 transition-transform duration-700 group-hover:translate-x-full"
                                        :class="{
                                            'translate-x-full': isLoading,
                                        }"
                                    ></div>
                                    <template x-if="!isLoading">
                                        <span>Join This Challenge Now</span>
                                    </template>
                                    <template x-if="isLoading">
                                        <span>Preparing Your Journey...</span>
                                    </template>
                                    <svg class="h-5 w-5 transition-transform group-hover:translate-x-1" :class="{
                                            'translate-x-1': isLoading,
                                        }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </button>
                            @else
                                <button
                                    @click="startChallengeJourney()"
                                    :disabled="isLoading"
                                    class="group relative flex w-full transform items-center justify-center gap-3 overflow-hidden rounded-xl bg-gradient-to-r from-blue-600 to-emerald-600 py-4 text-lg font-bold text-white shadow-lg transition-all duration-300 hover:-translate-y-1 hover:from-blue-700 hover:to-emerald-700 hover:shadow-xl disabled:cursor-not-allowed disabled:opacity-50"
                                >
                                    <div
                                        class="absolute inset-0 -translate-x-full -skew-x-12 transform bg-white/20 transition-transform duration-700 group-hover:translate-x-full"
                                        :class="{
                                            'translate-x-full': isLoading,
                                        }"
                                    ></div>
                                    <template x-if="!isLoading">
                                        <span>Join This Challenge Now</span>
                                    </template>
                                    <template x-if="isLoading">
                                        <span>Preparing Your Journey...</span>
                                    </template>
                                    <svg class="h-5 w-5 transition-transform group-hover:translate-x-1" :class="{
                                            'translate-x-1': isLoading,
                                        }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </button>
                            @endauth
                        </div>
                    </div>

                    
                    <div class="mx-auto max-w-3xl">
                        <div
                            class="rounded-2xl border border-slate-200/50 bg-white/60 p-6 backdrop-blur-md dark:border-slate-700/50 dark:bg-slate-800/60"
                        >
                            <div class="grid grid-cols-2 gap-6 md:grid-cols-4">
                                <div class="text-center">
                                    <div
                                        class="mb-1 text-2xl font-bold text-blue-600 md:text-3xl dark:text-blue-400"
                                    >
                                        12
                                    </div>
                                    <div
                                        class="text-sm text-slate-500 dark:text-slate-400"
                                    >
                                        Active Challenges
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div
                                        class="mb-1 text-2xl font-bold text-emerald-600 md:text-3xl dark:text-emerald-400"
                                    >
                                        28,456
                                    </div>
                                    <div
                                        class="text-sm text-slate-500 dark:text-slate-400"
                                    >
                                        Community Members
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div
                                        class="mb-1 text-2xl font-bold text-amber-600 md:text-3xl dark:text-amber-400"
                                    >
                                        1,248,509
                                    </div>
                                    <div
                                        class="text-sm text-slate-500 dark:text-slate-400"
                                    >
                                        Points Earned
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div
                                        class="mb-1 text-2xl font-bold text-slate-700 md:text-3xl dark:text-slate-300"
                                    >
                                        342t
                                    </div>
                                    <div
                                        class="text-sm text-slate-500 dark:text-slate-400"
                                    >
                                        CO₂ Reduced
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <livewire:sustainable-living />

    <script>
        // Single Alpine.js component to handle both loading and challenge
        document.addEventListener('alpine:init', () => {
            Alpine.data('loadingOverlay', () => ({
                isLoading: false,
                countdown: 3,
                progress: 0,
                interval: null,

                startLoading() {
                    this.isLoading = true;
                    this.countdown = 3;
                    this.progress = 0;

                    // Update countdown every second
                    this.interval = setInterval(() => {
                        this.countdown--;
                        this.progress = ((3 - this.countdown) / 3) * 100;

                        if (this.countdown <= 0) {
                            clearInterval(this.interval);
                            // Use Laravel route or direct URL
                            window.location.href = '{{ route('challenge.center') }}';
                        }
                    }, 1000);
                },

                stopLoading() {
                    this.isLoading = false;
                    if (this.interval) {
                        clearInterval(this.interval);
                    }
                },
            }));

            Alpine.data('challengeHero', () => ({
                currentTextIndex: 0,
                textInterval: null,
                particles: [],
                isLoading: false,

                init() {
                    // Initialize text rotation
                    this.startTextRotation();

                    // Initialize floating particles
                    this.generateParticles();
                },

                startTextRotation() {
                    this.textInterval = setInterval(() => {
                        this.currentTextIndex = (this.currentTextIndex + 1) % 3;
                    }, 4000);
                },

                generateParticles() {
                    for (let i = 0; i < 15; i++) {
                        this.particles.push({
                            x: Math.random() * 100,
                            y: Math.random() * 100,
                            size: `w-${Math.floor(Math.random() * 4) + 2} h-${Math.floor(Math.random() * 4) + 2}`,
                            delay: Math.random() * 5,
                        });
                    }
                },

                startChallengeJourney() {
                    this.isLoading = true;

                    // Get the loading overlay component directly
                    const loadingElements = document.querySelectorAll(
                        '[x-data="loadingOverlay()"]',
                    );
                    if (loadingElements.length > 0) {
                        const loadingComponent = Alpine.$data(loadingElements[0]);
                        loadingComponent.startLoading();
                    } else {
                        // Fallback: redirect after 3 seconds
                        setTimeout(() => {
                            window.location.href = '{{ route('challenge.center') }}';
                        }, 3000);
                    }
                },

                // Clean up interval when component is destroyed
                destroy() {
                    if (this.textInterval) {
                        clearInterval(this.textInterval);
                    }
                },
            }));
        });
    </script>

    <style>
        @keyframes wave {
            0% {
                transform: translateX(0) scaleY(1);
            }
            50% {
                transform: translateX(-10%) scaleY(0.95);
            }
            100% {
                transform: translateX(0) scaleY(1);
            }
        }

        @keyframes float {
            0%,
            100% {
                transform: translateY(0) rotate(0deg);
                opacity: 0.7;
            }
            50% {
                transform: translateY(-20px) rotate(10deg);
                opacity: 1;
            }
        }

        .animate-wave {
            animation: wave 8s ease-in-out infinite;
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
    </style>
</x-app-layout>
