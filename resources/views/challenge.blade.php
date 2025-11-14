<x-app-layout>
    <div class="bg-grid-pattern bg-gradient-to-br dark:from-gray-900 dark:via-blue-900 min-h-screen">
        <!-- Loading Overlay -->
        <div x-data="loadingOverlay()"
             x-show="isLoading"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-white dark:bg-gray-900 z-50 flex items-center justify-center">
            <div class="text-center">
                <!-- Animated Loading Icon -->
                <div class="relative mb-8">
                    <div class="w-20 h-20 border-4 border-blue-200 rounded-full animate-spin"></div>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-12 h-12 border-4 border-emerald-500 rounded-full animate-ping"></div>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-emerald-600 rounded-full animate-pulse"></div>
                    </div>
                </div>

                <!-- Loading Text with Countdown -->
                <h3 class="text-2xl font-bold text-slate-800 dark:text-slate-100 mb-4">Preparing Your Challenge</h3>
                <p class="text-slate-600 dark:text-slate-400 mb-2">Getting everything ready for your eco-journey...</p>
                <div class="text-sm text-slate-500 dark:text-slate-500">
                    Redirecting in <span x-text="countdown" class="font-bold text-blue-600 dark:text-blue-400"></span> seconds
                </div>

                <!-- Progress Bar -->
                <div class="w-64 h-2 bg-slate-200 dark:bg-slate-700 rounded-full overflow-hidden mt-6 mx-auto">
                    <div class="h-full bg-gradient-to-r from-blue-600 to-emerald-600 rounded-full transition-all duration-100"
                         :style="`width: ${progress}%`"></div>
                </div>
            </div>
        </div>

        <section x-data="challengeHero()"
                 class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-20">
            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <!-- Floating particles -->
                <template x-for="(particle, index) in particles" :key="index">
                    <div
                        class="absolute rounded-full bg-gradient-to-r from-blue-400/20 to-emerald-400/20 animate-float"
                        :class="particle.size"
                        :style="`left: ${particle.x}%; top: ${particle.y}%; animation-delay: ${particle.delay}s;`"
                    ></div>
                </template>

                <!-- Animated waves -->
                <div class="absolute bottom-0 left-0 right-0 h-32 overflow-hidden">
                    <div class="absolute -bottom-10 left-0 right-0 h-40 bg-gradient-to-t from-blue-500/5 to-transparent rounded-t-[50%] animate-wave"></div>
                    <div class="absolute -bottom-5 left-0 right-0 h-32 bg-gradient-to-t from-emerald-500/5 to-transparent rounded-t-[50%] animate-wave" style="animation-delay: 0.5s;"></div>
                </div>
            </div>

            <div class="relative z-10">
                <!-- Main Content -->
                <div class="text-center mb-16">
                    <!-- Animated Challenge Text -->
                    <div class="mb-8 relative h-24 md:h-32 flex items-center justify-center">
                        <h1 class="text-4xl md:text-6xl font-bold absolute top-0 left-0 right-0 transition-all duration-500 transform"
                            :class="{
                                'opacity-100 translate-y-0': currentTextIndex === 0,
                                'opacity-0 -translate-y-10': currentTextIndex !== 0
                            }">
                            <span class="text-slate-800 dark:text-slate-100">Ready for a</span>
                            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-emerald-600 dark:from-blue-400 dark:to-emerald-400">Daily Challenge?</span>
                        </h1>

                        <h1 class="text-4xl md:text-6xl font-bold absolute top-0 left-0 right-0 transition-all duration-500 transform"
                            :class="{
                                'opacity-100 translate-y-0': currentTextIndex === 1,
                                'opacity-0 translate-y-10': currentTextIndex !== 1
                            }">
                            <span class="text-slate-800 dark:text-slate-100">Make an</span>
                            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-blue-600 dark:from-emerald-400 dark:to-blue-400">Environmental Impact</span>
                        </h1>

                        <h1 class="text-4xl md:text-6xl font-bold absolute top-0 left-0 right-0 transition-all duration-500 transform"
                            :class="{
                                'opacity-100 translate-y-0': currentTextIndex === 2,
                                'opacity-0 -translate-y-10': currentTextIndex !== 2
                            }">
                            <span class="text-slate-800 dark:text-slate-100">Join the</span>
                            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-emerald-600 dark:from-blue-400 dark:to-emerald-400">Eco Revolution</span>
                        </h1>
                    </div>
                    
                    <!-- Challenge Progress Indicator -->
                    <div class="flex justify-center mb-8">
                        <div class="flex space-x-2">
                            <template x-for="i in 3" :key="i">
                                <div
                                    class="h-1 w-8 rounded-full transition-all duration-500"
                                    :class="currentTextIndex === i-1 ? 'bg-blue-600 w-12' : 'bg-slate-300'"
                                ></div>
                            </template>
                        </div>
                    </div>
                    
                    <!-- Interactive Challenge Card -->
                    <div class="max-w-2xl mx-auto mb-12">
                        <div class="bg-white/80 dark:bg-slate-800/80 backdrop-blur-lg rounded-2xl p-8 border border-slate-200/50 dark:border-slate-700/50 shadow-lg hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-xl font-semibold text-slate-800 dark:text-slate-100">Today's Featured Challenge</h3>
                                <div class="flex items-center text-sm text-emerald-600 dark:text-emerald-400 font-medium">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>15 min</span>
                                </div>
                            </div>

                            <div class="mb-6">
                                <h4 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">Reduce Single-Use Plastics</h4>
                                <p class="text-slate-600 dark:text-slate-300 mb-4">Commit to avoiding single-use plastics for one day. Bring your own containers, use reusable bags, and choose products with minimal packaging.</p>

                                <div class="flex items-center justify-between bg-slate-100 dark:bg-slate-700/50 rounded-lg p-4">
                                    <div>
                                        <div class="text-sm text-slate-500 dark:text-slate-400 mb-1">Challenge Reward</div>
                                        <div class="flex items-center">
                                            <div class="w-6 h-6 bg-amber-500 rounded-full flex items-center justify-center mr-2">
                                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M10 15a5 5 0 110-10 5 5 0 010 10z"></path>
                                                </svg>
                                            </div>
                                            <span class="font-bold text-slate-800 dark:text-slate-100">150 Points</span>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-sm text-slate-500 dark:text-slate-400 mb-1">Participants Today</div>
                                        <div class="font-bold text-slate-800 dark:text-slate-100">3,247</div>
                                    </div>
                                </div>
                            </div>
                            @auth
                            <!-- Action Button with Animation -->
                            <button
                                @click="startChallengeJourney()"
                                :disabled="isLoading"
                                class="w-full py-4 bg-gradient-to-r from-blue-600 to-emerald-600 hover:from-blue-700 hover:to-emerald-700 text-white rounded-xl font-bold text-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center justify-center gap-3 group relative overflow-hidden disabled:opacity-50 disabled:cursor-not-allowed"
                            >
                                <div class="absolute inset-0 bg-white/20 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700" :class="{'translate-x-full': isLoading}"></div>
                                <template x-if="!isLoading">
                                    <span>Join This Challenge Now</span>
                                </template>
                                <template x-if="isLoading">
                                    <span>Preparing Your Journey...</span>
                                </template>
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" :class="{'translate-x-1': isLoading}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </button>
                            @else
                            <button
                                @click="startChallengeJourney()"
                                :disabled="isLoading"
                                class="w-full py-4 bg-gradient-to-r from-blue-600 to-emerald-600 hover:from-blue-700 hover:to-emerald-700 text-white rounded-xl font-bold text-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center justify-center gap-3 group relative overflow-hidden disabled:opacity-50 disabled:cursor-not-allowed"
                            >
                                <div class="absolute inset-0 bg-white/20 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700" :class="{'translate-x-full': isLoading}"></div>
                                <template x-if="!isLoading">
                                    <span>Join This Challenge Now</span>
                                </template>
                                <template x-if="isLoading">
                                    <span>Preparing Your Journey...</span>
                                </template>
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" :class="{'translate-x-1': isLoading}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </button>
                            @endauth
                        </div>
                    </div>

                    <!-- Community Stats -->
                    <div class="max-w-3xl mx-auto">
                        <div class="bg-white/60 dark:bg-slate-800/60 backdrop-blur-md rounded-2xl p-6 border border-slate-200/50 dark:border-slate-700/50">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                                <div class="text-center">
                                    <div class="text-2xl md:text-3xl font-bold text-blue-600 dark:text-blue-400 mb-1">12</div>
                                    <div class="text-sm text-slate-500 dark:text-slate-400">Active Challenges</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl md:text-3xl font-bold text-emerald-600 dark:text-emerald-400 mb-1">28,456</div>
                                    <div class="text-sm text-slate-500 dark:text-slate-400">Community Members</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl md:text-3xl font-bold text-amber-600 dark:text-amber-400 mb-1">1,248,509</div>
                                    <div class="text-sm text-slate-500 dark:text-slate-400">Points Earned</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl md:text-3xl font-bold text-slate-700 dark:text-slate-300 mb-1">342t</div>
                                    <div class="text-sm text-slate-500 dark:text-slate-400">CO₂ Reduced</div>
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
                            window.location.href = "{{ route('challenge.center') }}";
                        }
                    }, 1000);
                },

                stopLoading() {
                    this.isLoading = false;
                    if (this.interval) {
                        clearInterval(this.interval);
                    }
                }
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
                            delay: Math.random() * 5
                        });
                    }
                },

                startChallengeJourney() {
                    this.isLoading = true;

                    // Get the loading overlay component directly
                    const loadingElements = document.querySelectorAll('[x-data="loadingOverlay()"]');
                    if (loadingElements.length > 0) {
                        const loadingComponent = Alpine.$data(loadingElements[0]);
                        loadingComponent.startLoading();
                    } else {
                        // Fallback: redirect after 3 seconds
                        setTimeout(() => {
                            window.location.href = "{{ route('challenge.center') }}";
                        }, 3000);
                    }
                },

                // Clean up interval when component is destroyed
                destroy() {
                    if (this.textInterval) {
                        clearInterval(this.textInterval);
                    }
                }
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
            0%, 100% {
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