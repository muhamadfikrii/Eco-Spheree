<div x-data="onboardingWizard()" class="w-full max-w-2xl mx-auto">
    
    <!-- Onboarding Card -->
    <div class="relative p-8 bg-slate-900/50 backdrop-blur-sm border border-slate-700/50 rounded-2xl shadow-2xl shadow-emerald-500/10 overflow-hidden">
        
        <!-- x-transition untuk animasi masuk dan keluar -->
        <div x-show="showError"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-5"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-5"
             class="absolute top-4 left-4 right-4 z-20 flex items-center justify-between p-4 bg-red-900/80 border border-red-500/50 rounded-lg backdrop-blur-sm"
             role="alert">
            <div class="flex items-center">
                <!-- Icon Error -->
                <svg class="flex-shrink-0 w-5 h-5 mr-3 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                </svg>
                <p class="text-sm font-medium text-red-200">
                    Please select at least one interest to continue.
                </p>
            </div>
            <!-- Tombol Tutup -->
            <button @click="showError = false" class="ml-auto text-red-400 hover:text-red-200 transition-colors">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <!-- Progress Bar -->
        <div class="flex justify-center mb-8 space-x-2">
            <template x-for="i in totalSteps" :key="i">
                <div class="w-3 h-3 rounded-full transition-all duration-500 ease-out"
                     :class="i <= currentStep ? 'bg-emerald-400 w-8' : 'bg-slate-600'">
                </div>
            </template>
        </div>

        <!-- Dynamic Content Based on Step -->
        <div>
            <!-- Step 1: Welcome -->
            <div x-show="currentStep === 1" x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform translate-x-10"
                 x-transition:enter-end="opacity-100 transform translate-x-0">
                <div class="text-center">
                    <div class="mb-6 flex justify-center">
                        <svg class="w-24 h-24 text-emerald-400 animate-grow" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l-5.5 9h11z"/><circle cx="12" cy="13" r="5" fill="none" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-100 mb-4">Start Your Eco-Journey</h2>
                    <p class="text-gray-400 mb-8">Join us in making a positive impact on the planet. Every small step counts.</p>
                </div>
            </div>

            <!-- Step 2: Track Your Impact -->
            <div x-show="currentStep === 2" x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform translate-x-10"
                 x-transition:enter-end="opacity-100 transform translate-x-0">
                <div class="text-center">
                    <div class="mb-6 flex justify-center">
                        <svg class="w-24 h-24 text-sky-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM9.8 8.9L7 23h2.1l1.8-8 2.1 2v6h2v-7.5l-2.1-2 .6-3C14.8 12 16.8 13 19 13v-2c-1.9 0-3.5-1-4.3-2.4l-1-1.6c-.4-.6-1-1-1.7-1-.3 0-.5.1-.8.1L6 8.3V13h2V9.6l1.8-.7"/>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-100 mb-4">Track Your Impact</h2>
                    <p class="text-gray-400 mb-8">Easily monitor and manage your carbon footprint. Get personalized insights for a more sustainable lifestyle.</p>
                </div>
            </div>

            <!-- Step 3: Join the Movement -->
            <div x-show="currentStep === 3" x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform translate-x-10"
                 x-transition:enter-end="opacity-100 transform translate-x-0">
                <div class="text-center">
                    <div class="mb-6 flex justify-center">
                        <svg class="w-24 h-24 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-100 mb-4">Join the Movement</h2>
                    <p class="text-gray-400 mb-8">Connect with a community of environmental enthusiasts. Take on challenges and share your green achievements.</p>
                </div>
            </div>

            <!-- Step 4: Personalize Your Experience -->
            <div x-show="currentStep === 4" x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform translate-x-10"
                 x-transition:enter-end="opacity-100 transform translate-x-0">
                <div class="text-center">
                    <h2 class="text-3xl font-bold text-gray-100 mb-4">Personalize Your Experience</h2>
                    <p class="text-gray-400 mb-6">Select the topics you're most interested in to get tailored recommendations.</p>
                    
                    <!-- Interest Selection -->
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <template x-for="interest in availableInterests" :key="interest.key">
                            <label class="flex items-center justify-center p-4 border-2 rounded-lg cursor-pointer transition-all hover:border-emerald-400 hover:bg-emerald-900/30"
                                   :class="interests.includes(interest.key) ? 'border-emerald-400 bg-emerald-900/30' : 'border-slate-600'">
                                <input type="checkbox" :value="interest.key" x-model="interests" class="hidden">
                                <span class="text-gray-200" x-text="interest.label"></span>
                            </label>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="flex justify-between mt-8">
            <button @click="previousStep"
                    x-show="currentStep > 1"
                    x-transition
                    class="px-6 py-2 font-semibold text-slate-300 transition-colors bg-slate-700 rounded-lg hover:bg-slate-600">
                Previous
            </button>

            <div class="ml-auto">
                <button @click="nextStep"
                        x-show="currentStep < totalSteps"
                        x-transition
                        class="px-6 py-2 font-semibold text-white transition-colors bg-emerald-600 rounded-lg hover:bg-emerald-700">
                    Continue
                </button>

                <!-- Get Started Button -->
                <button @click="completeOnboarding"
                        x-show="currentStep === totalSteps"
                        x-transition
                        class="px-6 py-2 font-semibold text-white transition-colors bg-yellow-500 rounded-lg hover:bg-yellow-600">
                    Get Started
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Alpine.js Logic -->
<script>
    function onboardingWizard() {
        return {
            currentStep: 1,
            totalSteps: 4,
            interests: [],
            // Tambahkan state untuk mengontrol notifikasi error
            showError: false,
            availableInterests: [
                { key: 'renewable-energy', label: 'Renewable Energy' },
                { key: 'water-conservation', label: 'Water Conservation' },
                { key: 'recycling', label: 'Recycling' },
                { key: 'sustainable-farming', label: 'Sustainable Farming' },
            ],
            nextStep() {
                if (this.currentStep < this.totalSteps) {
                    this.currentStep++;
                }
            },
            previousStep() {
                if (this.currentStep > 1) {
                    this.currentStep--;
                }
            },
            completeOnboarding() {
                // Validasi: jika tidak ada minat yang dipilih
                if (this.interests.length === 0) {
                    this.showError = true; // Tampilkan notifikasi
                    
                    // Sembunyikan notifikasi otomatis setelah 4 detik
                    setTimeout(() => {
                        this.showError = false;
                    }, 4000);

                    return; 
                }
                
                window.location.href = '/dashboard';
            }
        }
    }
</script>