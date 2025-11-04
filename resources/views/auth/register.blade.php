<x-guest-layout>
    <div class="min-h-screen flex">
        <!-- Left Side - Register Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900">
            <div class="w-full max-w-md">
                <!-- Logo/Brand -->
                <div class="flex justify-center mb-8">
                    <div class="relative">
                        <div class="absolute inset-0 bg-emerald-400/30 rounded-full blur-xl animate-pulse"></div>
                        <div class="relative bg-slate-800 p-3 rounded-full border border-emerald-500/30">
                            <svg class="w-10 h-10 text-emerald-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l-5.5 9h11z"/><circle cx="12" cy="13" r="5" fill="none" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Welcome Message -->
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-white mb-2">Join EcoTrack</h1>
                    <p class="text-gray-400">Create your account to start your eco-journey</p>
                </div>

                <form method="POST" action="{{ route('register') }}" x-data="registerForm()">
                    @csrf

                    <!-- Name -->
                    <div class="mb-4" x-data="{ focused: false }">
                        <x-input-label for="name" :value="__('Full Name')" class="text-gray-300 mb-2 block" />
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 transition-colors" :class="focused ? 'text-emerald-400' : 'text-gray-500'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <input 
                                id="name" 
                                class="block mt-1 w-full pl-10 
                                bg-slate-800/50 
                                border border-slate-700 rounded-lg 
                                text-white placeholder-gray-500 
                                focus:outline-none focus:border-emerald-500 focus:ring-0
                                transition-all duration-200"
                                type="text" 
                                name="name" 
                                value="{{ old('name') }}" 
                                required 
                                autocomplete="name"
                                @focus="focused = true"
                                @blur="focused = false"
                                placeholder="Enter your full name" 
                            />
                        </div>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Username -->
                    <div class="mb-4" x-data="{ focused: false }">
                        <x-input-label for="username" :value="__('Username')" class="text-gray-300 mb-2 block" />
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 transition-colors" :class="focused ? 'text-emerald-400' : 'text-gray-500'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                                </svg>
                            </div>
                            <input 
                                id="username" 
                                class="block mt-1 w-full pl-10 
                                bg-slate-800/50 
                                border border-slate-700 rounded-lg 
                                text-white placeholder-gray-500 
                                focus:outline-none focus:border-emerald-500 focus:ring-0
                                transition-all duration-200" 
                                type="text" 
                                name="username" 
                                value="{{ old('username') }}" 
                                required 
                                autocomplete="username"
                                @focus="focused = true"
                                @blur="focused = false"
                                placeholder="Choose a unique username" 
                            />
                        </div>
                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mb-4" x-data="{ focused: false }">
                        <x-input-label for="email" :value="__('Email Address')" class="text-gray-300 mb-2 block" />
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 transition-colors" :class="focused ? 'text-emerald-400' : 'text-gray-500'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <input 
                                id="email" 
                                class="block mt-1 w-full pl-10 
                                bg-slate-800/50 
                                border border-slate-700 rounded-lg 
                                text-white placeholder-gray-500 
                                focus:outline-none focus:border-emerald-500 focus:ring-0
                                transition-all duration-200" 
                                type="email" 
                                name="email" 
                                value="{{ old('email') }}" 
                                required 
                                autocomplete="email"
                                @focus="focused = true"
                                @blur="focused = false"
                                placeholder="your@email.com" 
                            />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mb-4" x-data="{ focused: false, showPassword: false }">
                        <x-input-label for="password" :value="__('Password')" class="text-gray-300 mb-2 block" />
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 transition-colors" :class="focused ? 'text-emerald-400' : 'text-gray-500'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <input 
                                id="password" 
                                x-bind:type="showPassword ? 'text' : 'password'"
                                class="block mt-1 w-full pl-10 pr-10 
                                bg-slate-800/50 
                                border border-slate-700 rounded-lg 
                                text-white placeholder-gray-500 
                                focus:outline-none focus:border-emerald-500 focus:ring-0
                                transition-all duration-200"
                                name="password"
                                required
                                autocomplete="new-password"
                                @focus="focused = true"
                                @blur="focused = false"
                                placeholder="Create a strong password"
                            />
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button type="button" @click="showPassword = !showPassword" class="text-gray-500 hover:text-emerald-400 focus:outline-none transition-colors">
                                    <svg x-show="!showPassword" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    <svg x-show="showPassword" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-6" x-data="{ focused: false, showConfirmPassword: false }">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-300 mb-2 block" />
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 transition-colors" :class="focused ? 'text-emerald-400' : 'text-gray-500'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <input 
                                id="password_confirmation" 
                                x-bind:type="showConfirmPassword ? 'text' : 'password'"
                                class="block mt-1 w-full pl-10 pr-10 
                                bg-slate-800/50 
                                border border-slate-700 rounded-lg 
                                text-white placeholder-gray-500 
                                focus:outline-none focus:border-emerald-500 focus:ring-0
                                transition-all duration-200"
                                name="password_confirmation"
                                required
                                autocomplete="new-password"
                                @focus="focused = true"
                                @blur="focused = false"
                                placeholder="Confirm your password"
                            />
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button type="button" @click="showConfirmPassword = !showConfirmPassword" class="text-gray-500 hover:text-emerald-400 focus:outline-none transition-colors">
                                    <svg x-show="!showConfirmPassword" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    <svg x-show="showConfirmPassword" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <!-- Terms & Conditions -->
                    <div class="mb-6">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" name="terms" type="checkbox" class="h-4 w-4 bg-slate-800 border-slate-600 rounded text-emerald-500 focus:ring-emerald-500 focus:border-emerald-500">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="text-gray-400">
                                    I agree to the 
                                    <button type="button" @click="showTermsModal = true" class="text-emerald-400 hover:text-emerald-300 transition-colors underline">Terms of Service</button> 
                                    and 
                                    <button type="button" @click="showPrivacyModal = true" class="text-emerald-400 hover:text-emerald-300 transition-colors underline">Privacy Policy</button>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div x-show="showTermsModal" 
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="fixed inset-0 z-50 overflow-y-auto" 
                        style="display: none;">
                        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                            <div x-show="showTermsModal" 
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0"
                                class="fixed inset-0 transition-opacity" 
                                @click="showTermsModal = false">
                                <div class="absolute inset-0 bg-gray-900 opacity-75"></div>
                            </div>

                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>

                            <div x-show="showTermsModal" 
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                class="inline-block align-bottom bg-slate-800 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                <div class="bg-slate-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                    <div class="sm:flex sm:items-start">
                                        <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">
                                            <h3 class="text-lg leading-6 font-medium text-white mb-4">
                                                Terms of Service
                                            </h3>
                                            <div class="mt-2 max-h-96 overflow-y-auto text-gray-300 text-sm">
                                                <h4 class="font-semibold text-emerald-400 mb-2">1. Acceptance of Terms</h4>
                                                <p class="mb-4">By accessing and using EcoTrack, you accept and agree to be bound by the terms and provision of this agreement.</p>
                                                
                                                <h4 class="font-semibold text-emerald-400 mb-2">2. Use License</h4>
                                                <p class="mb-4">Permission is granted to temporarily download one copy of the materials on EcoTrack for personal, non-commercial transitory viewing only.</p>
                                                
                                                <h4 class="font-semibold text-emerald-400 mb-2">3. Disclaimer</h4>
                                                <p class="mb-4">The materials on EcoTrack are provided on an 'as is' basis. EcoTrack makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</p>
                                                
                                                <h4 class="font-semibold text-emerald-400 mb-2">4. Limitations</h4>
                                                <p class="mb-4">In no event shall EcoTrack or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on EcoTrack.</p>
                                                
                                                <h4 class="font-semibold text-emerald-400 mb-2">5. Privacy Policy</h4>
                                                <p class="mb-4">Your Privacy is important to EcoTrack. Please refer to our Privacy Policy for information on how we collect, use and disclose your personal information.</p>
                                                
                                                <h4 class="font-semibold text-emerald-400 mb-2">6. Revisions and Errata</h4>
                                                <p class="mb-4">The materials appearing on EcoTrack could include technical, typographical, or photographic errors. EcoTrack does not promise that any of the materials on its website are accurate, complete, or current.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-slate-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                    <button type="button" @click="showTermsModal = false" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-emerald-600 text-base font-medium text-white hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 sm:ml-3 sm:w-auto sm:text-sm">
                                        I Understand
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div x-show="showPrivacyModal" 
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="fixed inset-0 z-50 overflow-y-auto" 
                        style="display: none;">
                        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                            <div x-show="showPrivacyModal" 
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0"
                                class="fixed inset-0 transition-opacity" 
                                @click="showPrivacyModal = false">
                                <div class="absolute inset-0 bg-gray-900 opacity-75"></div>
                            </div>

                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>

                            <div x-show="showPrivacyModal" 
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                class="inline-block align-bottom bg-slate-800 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                <div class="bg-slate-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                    <div class="sm:flex sm:items-start">
                                        <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">
                                            <h3 class="text-lg leading-6 font-medium text-white mb-4">
                                                Privacy Policy
                                            </h3>
                                            <div class="mt-2 max-h-96 overflow-y-auto text-gray-300 text-sm">
                                                <h4 class="font-semibold text-emerald-400 mb-2">1. Information We Collect</h4>
                                                <p class="mb-4">We collect information from you when you register on our site, subscribe to our newsletter, respond to a survey or fill out a form.</p>
                                                
                                                <h4 class="font-semibold text-emerald-400 mb-2">2. How We Use Your Information</h4>
                                                <p class="mb-4">Any of the information we collect from you may be used in one of the following ways: to personalize your experience, to improve our website, to improve customer service, to process transactions, and to send periodic emails.</p>
                                                
                                                <h4 class="font-semibold text-emerald-400 mb-2">3. Data Protection</h4>
                                                <p class="mb-4">We implement a variety of security measures to maintain the safety of your personal information when you enter, submit, or access your personal information.</p>
                                                
                                                <h4 class="font-semibold text-emerald-400 mb-2">4. Cookies</h4>
                                                <p class="mb-4">We use cookies to understand and save your preferences for future visits and compile aggregate data about site traffic and site interaction.</p>
                                                
                                                <h4 class="font-semibold text-emerald-400 mb-2">5. Third-Party Links</h4>
                                                <p class="mb-4">Occasionally, at our discretion, we may include or offer third-party products or services on our website. These third-party sites have separate and independent privacy policies.</p>
                                                
                                                <h4 class="font-semibold text-emerald-400 mb-2">6. Your Consent</h4>
                                                <p class="mb-4">By using our site, you consent to our privacy policy.</p>
                                                
                                                <h4 class="font-semibold text-emerald-400 mb-2">7. Changes to Our Privacy Policy</h4>
                                                <p class="mb-4">If we decide to change our privacy policy, we will post those changes on this page.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-slate-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                    <button type="button" @click="showPrivacyModal = false" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-emerald-600 text-base font-medium text-white hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 sm:ml-3 sm:w-auto sm:text-sm">
                                        I Understand
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" x-ref="submitBtn" @click="loading = true" class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-gradient-to-r from-emerald-600 to-emerald-500 hover:from-emerald-500 hover:to-emerald-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-all duration-200 transform hover:-translate-y-0.5">
                            <span x-show="!loading" class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                </svg>
                                {{ __('Create Account') }}
                            </span>
                            <span x-show="loading" class="flex items-center">
                                <svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Creating Account...
                            </span>
                        </button>
                    </div>
                </form>

                <!-- Sign In Link -->
                <div class="mt-6 text-center">
                    <p class="text-gray-400">
                        Already have an account?
                        <a href="{{ route('login') }}" class="font-medium text-emerald-400 hover:text-emerald-300 transition-colors">
                            Sign in
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Right Side - Image/Visual -->
        <div class="hidden lg:block lg:w-1/2 relative overflow-hidden">
            <!-- Background Gradient -->
            <div class="absolute inset-0 bg-gradient-to-br from-emerald-900/20 to-slate-900/40 z-10"></div>
            
            <!-- Animated Background Elements -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute -top-10 -left-10 w-40 h-40 bg-emerald-500/10 rounded-full blur-3xl animate-pulse"></div>
                <div class="absolute -bottom-10 -right-10 w-60 h-60 bg-sky-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-purple-500/5 rounded-full blur-3xl animate-pulse" style="animation-delay: 4s;"></div>
            </div>
            
            <!-- Image -->
            <img src="{{ asset('image/auth.jpeg') }}" alt="Nature" class="w-full h-full object-cover">
            
            <!-- Overlay Content -->
            <div class="absolute inset-0 flex flex-col justify-center items-center z-20 p-12 text-center">
                <h2 class="text-4xl font-bold text-white mb-4">Join the Movement</h2>
                <p class="text-xl text-gray-200 max-w-md">Be part of a community dedicated to making sustainable choices for a better future</p>
                
                <!-- Stats -->
                <div class="flex mt-12 space-x-8">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-emerald-400">50K+</div>
                        <div class="text-gray-300">Active Users</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-emerald-400">2M+</div>
                        <div class="text-gray-300">Trees Saved</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-emerald-400">100+</div>
                        <div class="text-gray-300">Countries</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function registerForm() {
            return {
                loading: false,
                showTermsModal: false,
                showPrivacyModal: false,
                init() {
                    // Custom checkbox styling for terms
                    const checkbox = document.getElementById('terms');
                    if (checkbox) {
                        checkbox.addEventListener('change', function() {
                            if (this.checked) {
                                this.classList.add('bg-emerald-600');
                                this.classList.remove('bg-slate-800');
                            } else {
                                this.classList.remove('bg-emerald-600');
                                this.classList.add('bg-slate-800');
                            }
                        });
                    }
                }
            }
        }
        </script>
</x-guest-layout>