<div x-data="onboardingWizard()" class="mx-auto w-full max-w-5xl">
    
    <div
        class="relative h-[40rem] overflow-hidden rounded-3xl border border-slate-700/50 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900/90 p-12 shadow-2xl shadow-emerald-500/20 backdrop-blur-sm"
    >
        
        <div class="absolute inset-0 overflow-hidden">
            <div
                class="absolute -left-10 -top-10 h-40 w-40 animate-pulse rounded-full bg-emerald-500/10 blur-3xl"
            ></div>
            <div
                class="absolute -bottom-10 -right-10 h-60 w-60 animate-pulse rounded-full bg-sky-500/10 blur-3xl"
                style="animation-delay: 2s"
            ></div>
            <div
                class="absolute left-1/2 top-1/2 h-80 w-80 -translate-x-1/2 -translate-y-1/2 transform animate-pulse rounded-full bg-purple-500/5 blur-3xl"
                style="animation-delay: 4s"
            ></div>
        </div>

        
        <div
            x-show="showError"
            x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="opacity-0 -translate-y-5 scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 translate-y-0 scale-100"
            x-transition:leave-end="opacity-0 -translate-y-5 scale-95"
            class="absolute left-4 right-4 top-4 z-20 flex items-center justify-between rounded-xl border border-red-500/50 bg-gradient-to-r from-red-900/90 to-red-800/90 p-4 shadow-lg shadow-red-500/20 backdrop-blur-sm"
            role="alert"
        >
            <div class="flex items-center">
                
                <div
                    class="mr-3 flex h-10 w-10 flex-shrink-0 animate-pulse items-center justify-center rounded-full bg-red-500/20"
                >
                    <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <p class="text-sm font-medium text-red-200">Please select at least one option to continue.</p>
            </div>
            
            <button
                @click="showError = false"
                class="ml-auto rounded-full p-1 text-red-400 transition-all hover:bg-red-500/20 hover:text-red-200"
            >
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        
        <div class="mb-12 flex justify-center space-x-2">
            <template x-for="i in totalSteps" :key="i">
                <div class="relative">
                    <div
                        class="h-4 w-4 rounded-full transition-all duration-700 ease-out"
                        :class="i < currentStep
                            ? 'bg-emerald-400 w-12 shadow-lg shadow-emerald-400/50'
                            : i === currentStep
                              ? 'bg-emerald-400 w-12 shadow-lg shadow-emerald-400/50 animate-pulse'
                              : 'bg-slate-600'"
                    ></div>
                    <div
                        x-show="i === currentStep"
                        class="absolute -inset-1 animate-ping rounded-full bg-emerald-400/30"
                    ></div>
                </div>
            </template>
        </div>

        
        <div
            class="relative z-10 flex h-[calc(100%-10rem)] flex-col justify-center"
        >
            
            <div
                x-show="currentStep === 1"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 transform translate-x-10 scale-95"
                x-transition:enter-end="opacity-100 transform translate-x-0 scale-100"
                class="flex h-full flex-col items-center justify-center"
            >
                <div class="text-center">
                    <div class="mb-6 flex justify-center">
                        <div class="relative">
                            <div
                                class="absolute inset-0 animate-pulse rounded-full bg-emerald-400/30 blur-xl"
                            ></div>
                            <svg class="relative h-24 w-24 animate-bounce text-emerald-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l-5.5 9h11z" />
                                <circle cx="12" cy="13" r="5" fill="none" stroke="currentColor" stroke-width="2" />
                            </svg>
                        </div>
                    </div>
                    <h2
                        class="mb-6 bg-gradient-to-r from-gray-100 to-gray-300 bg-clip-text text-4xl font-bold text-transparent"
                    >
                        Start Your Eco-Journey
                    </h2>
                    <p class="mx-auto mb-10 max-w-lg text-lg text-gray-400">Join us in making a positive impact on the planet. Every small step counts towards a greener future.</p>
                    <div class="flex justify-center space-x-2">
                        <div
                            class="h-2 w-2 animate-pulse rounded-full bg-emerald-400"
                        ></div>
                        <div
                            class="h-2 w-2 animate-pulse rounded-full bg-emerald-400"
                            style="animation-delay: 0.2s"
                        ></div>
                        <div
                            class="h-2 w-2 animate-pulse rounded-full bg-emerald-400"
                            style="animation-delay: 0.4s"
                        ></div>
                    </div>
                </div>
            </div>

            
            <div
                x-show="currentStep === 2"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 transform translate-x-10 scale-95"
                x-transition:enter-end="opacity-100 transform translate-x-0 scale-100"
                class="flex h-full flex-col items-center justify-center"
            >
                <div class="text-center">
                    <div class="mb-6 flex justify-center">
                        <div class="relative">
                            <div
                                class="absolute inset-0 animate-pulse rounded-full bg-sky-400/30 blur-xl"
                            ></div>
                            <svg class="relative h-24 w-24 animate-pulse text-sky-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM9.8 8.9L7 23h2.1l1.8-8 2.1 2v6h2v-7.5l-2.1-2 .6-3C14.8 12 16.8 13 19 13v-2c-1.9 0-3.5-1-4.3-2.4l-1-1.6c-.4-.6-1-1-1.7-1-.3 0-.5.1-.8.1L6 8.3V13h2V9.6l1.8-.7" />
                            </svg>
                        </div>
                    </div>
                    <h2
                        class="mb-6 bg-gradient-to-r from-gray-100 to-gray-300 bg-clip-text text-4xl font-bold text-transparent"
                    >
                        Track Your Impact
                    </h2>
                    <p class="mx-auto mb-10 max-w-lg text-lg text-gray-400">Easily monitor and manage your carbon footprint. Get personalized insights for a more sustainable lifestyle.</p>
                    <div class="flex justify-center space-x-4">
                        <div class="flex items-center">
                            <div
                                class="mr-2 h-3 w-3 animate-pulse rounded-full bg-sky-400"
                            ></div>
                            <span class="text-sm text-gray-400"
                                >Real-time tracking</span
                            >
                        </div>
                        <div class="flex items-center">
                            <div
                                class="mr-2 h-3 w-3 animate-pulse rounded-full bg-sky-400"
                                style="animation-delay: 0.5s"
                            ></div>
                            <span class="text-sm text-gray-400"
                                >Personalized insights</span
                            >
                        </div>
                    </div>
                </div>
            </div>

            
            <div
                x-show="currentStep === 3"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 transform translate-x-10 scale-95"
                x-transition:enter-end="opacity-100 transform translate-x-0 scale-100"
                class="flex h-full flex-col items-center justify-center"
            >
                <div class="text-center">
                    <div class="mb-6 flex justify-center">
                        <div class="relative">
                            <div
                                class="absolute inset-0 animate-pulse rounded-full bg-yellow-300/30 blur-xl"
                            ></div>
                            <svg class="relative h-24 w-24 animate-pulse text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                            </svg>
                        </div>
                    </div>
                    <h2
                        class="mb-6 bg-gradient-to-r from-gray-100 to-gray-300 bg-clip-text text-4xl font-bold text-transparent"
                    >
                        Join the Movement
                    </h2>
                    <p class="mx-auto mb-10 max-w-lg text-lg text-gray-400">Connect with a community of environmental enthusiasts. Take on challenges and share your green achievements.</p>
                    <div class="flex justify-center space-x-4">
                        <div class="flex items-center">
                            <div
                                class="mr-2 h-3 w-3 animate-pulse rounded-full bg-yellow-300"
                            ></div>
                            <span class="text-sm text-gray-400"
                                >Community challenges</span
                            >
                        </div>
                        <div class="flex items-center">
                            <div
                                class="mr-2 h-3 w-3 animate-pulse rounded-full bg-yellow-300"
                                style="animation-delay: 0.5s"
                            ></div>
                            <span class="text-sm text-gray-400"
                                >Share achievements</span
                            >
                        </div>
                    </div>
                </div>
            </div>

            
            <div
                x-show="currentStep === 4"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 transform translate-x-10 scale-95"
                x-transition:enter-end="opacity-100 transform translate-x-0 scale-100"
                class="flex h-full flex-col items-center justify-center"
            >
                <div class="w-full max-w-2xl text-center">
                    <h2
                        class="mb-6 bg-gradient-to-r from-gray-100 to-gray-300 bg-clip-text text-4xl font-bold text-transparent"
                    >
                        Personalize Your Experience
                    </h2>
                    <p class="mb-8 text-lg text-gray-400">Select the topics you're most interested in to get tailored recommendations.</p>

                    
                    <div class="mb-8 grid grid-cols-2 gap-4 md:grid-cols-4">
                        <template
                            x-for="(interest, index) in availableInterests"
                            :key="interest.key"
                        >
                            <label
                                class="flex cursor-pointer flex-col items-center justify-center rounded-xl border-2 p-6 transition-all duration-300 hover:scale-105 hover:border-emerald-400 hover:bg-emerald-900/30 hover:shadow-lg hover:shadow-emerald-400/20"
                                :class="interests.includes(interest.key)
                                    ? 'border-emerald-400 bg-emerald-900/30 scale-105 shadow-lg shadow-emerald-400/20'
                                    : 'border-slate-600'"
                                :style="`animation-delay: ${index * 0.1}s`"
                            >
                                <input
                                    type="checkbox"
                                    :value="interest.key"
                                    x-model="interests"
                                    class="hidden"
                                />
                                <div
                                    class="mb-3 flex h-12 w-12 items-center justify-center rounded-full bg-emerald-500/20 transition-all duration-300"
                                    :class="interests.includes(interest.key)
                                        ? 'bg-emerald-500/30 animate-pulse'
                                        : ''"
                                >
                                    <svg class="h-6 w-6 text-emerald-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                    </svg>
                                </div>
                                <span
                                    class="text-center text-sm font-medium text-gray-200"
                                    x-text="interest.label"
                                ></span>
                            </label>
                        </template>
                    </div>
                </div>
            </div>

            
            <div
                x-show="currentStep === 5"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 transform translate-x-10 scale-95"
                x-transition:enter-end="opacity-100 transform translate-x-0 scale-100"
                class="flex h-full flex-col items-center justify-center"
            >
                <div class="w-full max-w-2xl text-center">
                    <h2
                        class="mb-6 bg-gradient-to-r from-gray-100 to-gray-300 bg-clip-text text-4xl font-bold text-transparent"
                    >
                        Your Lifestyle
                    </h2>
                    <p class="mb-8 text-lg text-gray-400">Tell us about your daily habits to help us provide better suggestions.</p>

                    
                    <div class="mb-8 grid grid-cols-2 gap-4 md:grid-cols-4">
                        <template
                            x-for="(lifestyle, index) in availableLifestyles"
                            :key="lifestyle.key"
                        >
                            <label
                                class="flex cursor-pointer flex-col items-center justify-center rounded-xl border-2 p-6 transition-all duration-300 hover:scale-105 hover:border-sky-400 hover:bg-sky-900/30 hover:shadow-lg hover:shadow-sky-400/20"
                                :class="lifestyles.includes(lifestyle.key)
                                    ? 'border-sky-400 bg-sky-900/30 scale-105 shadow-lg shadow-sky-400/20'
                                    : 'border-slate-600'"
                                :style="`animation-delay: ${index * 0.1}s`"
                            >
                                <input
                                    type="checkbox"
                                    :value="lifestyle.key"
                                    x-model="lifestyles"
                                    class="hidden"
                                />
                                <div
                                    class="mb-3 flex h-12 w-12 items-center justify-center rounded-full bg-sky-500/20 transition-all duration-300"
                                    :class="lifestyles.includes(lifestyle.key)
                                        ? 'bg-sky-500/30 animate-pulse'
                                        : ''"
                                >
                                    <svg class="h-6 w-6 text-sky-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                    </svg>
                                </div>
                                <span
                                    class="text-center text-sm font-medium text-gray-200"
                                    x-text="lifestyle.label"
                                ></span>
                            </label>
                        </template>
                    </div>
                </div>
            </div>

            
            <div
                x-show="currentStep === 6"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 transform translate-x-10 scale-95"
                x-transition:enter-end="opacity-100 transform translate-x-0 scale-100"
                class="flex h-full flex-col items-center justify-center"
            >
                <div class="w-full max-w-2xl text-center">
                    <h2
                        class="mb-6 bg-gradient-to-r from-gray-100 to-gray-300 bg-clip-text text-4xl font-bold text-transparent"
                    >
                        Your Commitment
                    </h2>
                    <p class="mb-8 text-lg text-gray-400">Choose the level of commitment you're ready to make towards sustainability.</p>

                    
                    <div class="mb-8 grid grid-cols-2 gap-4 md:grid-cols-4">
                        <template
                            x-for="(commitment, index) in availableCommitments"
                            :key="commitment.key"
                        >
                            <label
                                class="flex cursor-pointer flex-col items-center justify-center rounded-xl border-2 p-6 transition-all duration-300 hover:scale-105 hover:border-yellow-400 hover:bg-yellow-900/30 hover:shadow-lg hover:shadow-yellow-400/20"
                                :class="commitments.includes(commitment.key)
                                    ? 'border-yellow-400 bg-yellow-900/30 scale-105 shadow-lg shadow-yellow-400/20'
                                    : 'border-slate-600'"
                                :style="`animation-delay: ${index * 0.1}s`"
                            >
                                <input
                                    type="checkbox"
                                    :value="commitment.key"
                                    x-model="commitments"
                                    class="hidden"
                                />
                                <div
                                    class="mb-3 flex h-12 w-12 items-center justify-center rounded-full bg-yellow-500/20 transition-all duration-300"
                                    :class="commitments.includes(commitment.key)
                                        ? 'bg-yellow-500/30 animate-pulse'
                                        : ''"
                                >
                                    <svg class="h-6 w-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                    </svg>
                                </div>
                                <span
                                    class="text-center text-sm font-medium text-gray-200"
                                    x-text="commitment.label"
                                ></span>
                            </label>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="relative z-10 mt-8 flex justify-between">
            <button
                @click="previousStep"
                x-show="currentStep > 1"
                x-transition
                class="group transform rounded-lg bg-gradient-to-r from-slate-700 to-slate-600 px-6 py-3 font-semibold text-slate-300 transition-all duration-300 hover:-translate-y-1 hover:from-slate-600 hover:to-slate-500 hover:shadow-lg hover:shadow-slate-500/20"
            >
                <span class="flex items-center">
                    <svg class="mr-2 h-5 w-5 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Previous
                </span>
            </button>

            <div class="ml-auto">
                <button
                    @click="nextStep"
                    x-show="currentStep < totalSteps"
                    x-transition
                    class="group transform rounded-lg bg-gradient-to-r from-emerald-600 to-emerald-500 px-6 py-3 font-semibold text-white transition-all duration-300 hover:-translate-y-1 hover:from-emerald-500 hover:to-emerald-400 hover:shadow-lg hover:shadow-emerald-500/20"
                >
                    <span class="flex items-center">
                        Continue
                        <svg class="ml-2 h-5 w-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </span>
                </button>

                
                <button
                    @click="completeOnboarding"
                    x-show="currentStep === totalSteps"
                    x-transition
                    class="group relative transform overflow-hidden rounded-lg bg-gradient-to-r from-yellow-500 to-yellow-400 px-6 py-3 font-semibold text-white transition-all duration-300 hover:-translate-y-1 hover:from-yellow-400 hover:to-yellow-300 hover:shadow-lg hover:shadow-yellow-400/20"
                >
                    <span class="relative z-10 flex items-center">
                        Get Started
                        <svg class="ml-2 h-5 w-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </span>
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-yellow-300 opacity-0 transition-opacity duration-300 group-hover:opacity-100"
                    ></div>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function onboardingWizard() {
        return {
            currentStep: 1,
            totalSteps: 6,
            interests: [],
            lifestyles: [],
            commitments: [],
            showError: false,
            availableInterests: [
                { key: 'renewable-energy', label: 'Renewable Energy' },
                { key: 'water-conservation', label: 'Water Conservation' },
                { key: 'recycling', label: 'Recycling' },
                { key: 'sustainable-farming', label: 'Sustainable Farming' },
            ],
            availableLifestyles: [
                { key: 'urban-living', label: 'Urban Living' },
                { key: 'rural-living', label: 'Rural Living' },
                { key: 'minimalist', label: 'Minimalist Lifestyle' },
                { key: 'eco-friendly', label: 'Eco-Friendly Habits' },
            ],
            availableCommitments: [
                { key: 'beginner', label: 'Beginner' },
                { key: 'intermediate', label: 'Intermediate' },
                { key: 'advanced', label: 'Advanced' },
                { key: 'expert', label: 'Expert' },
            ],
            nextStep() {
                // Check if user has selected at least one option for steps 4-6
                if (this.currentStep >= 4) {
                    let hasSelection = false;

                    if (this.currentStep === 4 && this.interests.length > 0) {
                        hasSelection = true;
                    } else if (
                        this.currentStep === 5 &&
                        this.lifestyles.length > 0
                    ) {
                        hasSelection = true;
                    } else if (
                        this.currentStep === 6 &&
                        this.commitments.length > 0
                    ) {
                        hasSelection = true;
                    }

                    if (!hasSelection) {
                        this.showError = true;
                        // Auto hide error after 3 seconds
                        setTimeout(() => {
                            this.showError = false;
                        }, 3000);
                        return;
                    }
                }

                if (this.currentStep < this.totalSteps) {
                    this.currentStep++;
                }
            },
            previousStep() {
                if (this.currentStep > 1) {
                    this.currentStep--;
                    // Hide error when going back
                    this.showError = false;
                }
            },
            completeOnboarding() {
                // Check if user has selected at least one option for the final step
                if (this.commitments.length === 0) {
                    this.showError = true;
                    // Auto hide error after 3 seconds
                    setTimeout(() => {
                        this.showError = false;
                    }, 3000);
                    return;
                }

                // Show loading state
                const button = event.target.closest('button');
                const originalContent = button.innerHTML;
                button.innerHTML = `
                    <span class="relative z-10 flex items-center">
                        <svg class="animate-spin h-5 w-5 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Processing...
                    </span>
                `;
                button.disabled = true;

                // Simulate processing time
                setTimeout(() => {
                    // Save onboarding data to localStorage
                    localStorage.setItem('onboardingCompleted', 'true');
                    localStorage.setItem(
                        'userPreferences',
                        JSON.stringify({
                            interests: this.interests,
                            lifestyles: this.lifestyles,
                            commitments: this.commitments,
                        }),
                    );

                    // Redirect to dashboard
                    window.location.href = '/';
                }, 1500);
            },
        };
    }
</script>
