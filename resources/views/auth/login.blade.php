<x-guest-layout>
    <div class="min-h-screen flex">
        <!-- Left Side - Login Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900">
            <div class="w-full max-w-md">
                <!-- Logo -->
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

                <!-- Welcome -->
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-white mb-2">Welcome Back to EcoTrack</h1>
                    <p class="text-gray-400">Sign in to continue your eco-journey</p>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email / Username -->
                    <div class="mb-6" x-data="{ focused: false }">
                        <x-input-label for="id_user" :value="__('Email or Username')" class="text-gray-300 mb-2 block" />
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 transition-colors" :class="focused ? 'text-emerald-400' : 'text-gray-500'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <input 
                                id="id_user" 
                                name="id_user"
                                type="text"
                                value="{{ old('id_user') }}" 
                                required autofocus
                                placeholder="Enter your email or username"
                                class="block w-full pl-10 bg-slate-800/50 border border-slate-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-emerald-500 focus:ring-0 transition-all duration-200"
                                @focus="focused = true" @blur="focused = false"
                            />
                        </div>
                        <x-input-error :messages="$errors->get('id_user')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mb-6" x-data="{ focused: false, showPassword: false }">
                        <x-input-label for="password" :value="__('Password')" class="text-gray-300 mb-2 block" />
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 transition-colors" :class="focused ? 'text-emerald-400' : 'text-gray-500'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <input 
                                id="password" 
                                name="password"
                                x-bind:type="showPassword ? 'text' : 'password'"
                                required
                                placeholder="Enter your password"
                                class="block w-full pl-10 pr-10 bg-slate-800/50 border border-slate-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-emerald-500 focus:ring-0 transition-all duration-200"
                                @focus="focused = true" @blur="focused = false"
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

                    <div x-data="{ remember: false }" class="flex items-center justify-between mb-6">
                        <label class="flex items-center cursor-pointer">
                            <input id="remember_me" type="checkbox" name="remember" x-model="remember"
                                class="hidden">

                            <div 
                                class="relative w-10 h-6 rounded-full transition-colors duration-300"
                                :class="remember ? 'bg-emerald-500 border-emerald-500' : 'bg-slate-800 border-slate-700'"
                            >
                                <div 
                                    class="absolute left-1 top-1 w-4 h-4 rounded-full bg-white transition-all duration-300"
                                    :class="remember ? 'translate-x-4' : ''"
                                ></div>
                            </div>

                            <span class="ml-3 text-sm text-gray-400 select-none">
                                {{ __('Remember me') }}
                            </span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="text-sm text-emerald-400 hover:text-emerald-300 transition-colors" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                    <!-- Submit -->
                    <div>
                        <button type="submit" class="w-full flex justify-center items-center py-3 px-4 rounded-lg text-sm font-medium text-white bg-gradient-to-r from-emerald-600 to-emerald-500 hover:from-emerald-500 hover:to-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 transition-all duration-200 transform hover:-translate-y-0.5">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                            {{ __('Log in') }}
                        </button>
                    </div>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-gray-400">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="font-medium text-emerald-400 hover:text-emerald-300 transition-colors">
                            Sign up
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Right Side -->
        <div class="hidden lg:block lg:w-1/2 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-emerald-900/20 to-slate-900/40 z-10"></div>
            <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&w=1740&q=80" alt="Nature" class="w-full h-full object-cover">
            <div class="absolute inset-0 flex flex-col justify-center items-center z-20 p-12 text-center">
                <h2 class="text-4xl font-bold text-white mb-4">Make a Difference</h2>
                <p class="text-xl text-gray-200 max-w-md">Join thousands of people making sustainable choices for a better future</p>
            </div>
        </div>
    </div>
</x-guest-layout>
