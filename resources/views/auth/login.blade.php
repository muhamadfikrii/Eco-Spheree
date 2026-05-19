<x-guest-layout>
    <div class="flex min-h-screen">
        
        <div
            class="flex w-full items-center justify-center bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 p-8 lg:w-1/2"
        >
            <div class="w-full max-w-md">
                
                <div class="mb-8 flex justify-center">
                    <div class="relative">
                        <div
                            class="absolute inset-0 animate-pulse rounded-full bg-emerald-400/30 blur-xl"
                        ></div>
                        <div
                            class="relative rounded-full border border-emerald-500/30 bg-slate-800 p-3"
                        >
                            <svg class="h-10 w-10 text-emerald-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l-5.5 9h11z" />
                                <circle cx="12" cy="13" r="5" fill="none" stroke="currentColor" stroke-width="2" />
                            </svg>
                        </div>
                    </div>
                </div>

                
                <div class="mb-8 text-center">
                    Welcome Back to NovaForge step into smart industry
                    automation
                </div>

                
                <x-auth-session-status
                    class="mb-4"
                    :status="session('status')"
                />

                
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    
                    <div class="mb-6" x-data="{ focused: false }">
                        <x-input-label
                            for="id_user"
                            :value="__('Email or Username')"
                            class="mb-2 block text-gray-300"
                        />
                        <div class="relative">
                            <div
                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
                            >
                                <svg class="h-5 w-5 transition-colors" :class="focused
                                        ? 'text-emerald-400'
                                        : 'text-gray-500'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <input
                                id="id_user"
                                name="id_user"
                                type="text"
                                value="{{ old('id_user') }}"
                                required
                                autofocus
                                placeholder="Enter your email or username"
                                class="block w-full rounded-lg border border-slate-700 bg-slate-800/50 pl-10 text-white placeholder-gray-500 transition-all duration-200 focus:border-emerald-500 focus:outline-none focus:ring-0"
                                @focus="focused = true"
                                @blur="focused = false"
                            />
                        </div>
                        <x-input-error
                            :messages="$errors->get('id_user')"
                            class="mt-2"
                        />
                    </div>

                    
                    <div
                        class="mb-6"
                        x-data="{ focused: false, showPassword: false }"
                    >
                        <x-input-label
                            for="password"
                            :value="__('Password')"
                            class="mb-2 block text-gray-300"
                        />
                        <div class="relative">
                            <div
                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
                            >
                                <svg class="h-5 w-5 transition-colors" :class="focused
                                        ? 'text-emerald-400'
                                        : 'text-gray-500'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <input
                                id="password"
                                name="password"
                                x-bind:type="showPassword ? 'text' : 'password'"
                                required
                                placeholder="Enter your password"
                                class="block w-full rounded-lg border border-slate-700 bg-slate-800/50 pl-10 pr-10 text-white placeholder-gray-500 transition-all duration-200 focus:border-emerald-500 focus:outline-none focus:ring-0"
                                @focus="focused = true"
                                @blur="focused = false"
                            />
                            <div
                                class="absolute inset-y-0 right-0 flex items-center pr-3"
                            >
                                <button
                                    type="button"
                                    @click="showPassword = !showPassword"
                                    class="text-gray-500 transition-colors hover:text-emerald-400 focus:outline-none"
                                >
                                    <svg x-show="
                                            !showPassword
                                        " class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    <svg x-show="
                                            showPassword
                                        " class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <x-input-error
                            :messages="$errors->get('password')"
                            class="mt-2"
                        />
                    </div>

                    <div
                        x-data="{ remember: false }"
                        class="mb-6 flex items-center justify-between"
                    >
                        <label class="flex cursor-pointer items-center">
                            <input
                                id="remember_me"
                                type="checkbox"
                                name="remember"
                                x-model="remember"
                                class="hidden"
                            />

                            <div
                                class="relative h-6 w-10 rounded-full transition-colors duration-300"
                                :class="remember
                                    ? 'bg-emerald-500 border-emerald-500'
                                    : 'bg-slate-800 border-slate-700'"
                            >
                                <div
                                    class="absolute left-1 top-1 h-4 w-4 rounded-full bg-white transition-all duration-300"
                                    :class="remember ? 'translate-x-4' : ''"
                                ></div>
                            </div>

                            <span
                                class="ml-3 select-none text-sm text-gray-400"
                            >
                                {{ __('Remember me') }}
                            </span>
                        </label>

                        @if (Route::has('password.request'))
                            <a
                                class="text-sm text-emerald-400 transition-colors hover:text-emerald-300"
                                href="{{ route('password.request') }}"
                            >
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                    
                    <div>
                        <button
                            type="submit"
                            class="flex w-full transform items-center justify-center rounded-lg bg-gradient-to-r from-emerald-600 to-emerald-500 px-4 py-3 text-sm font-medium text-white transition-all duration-200 hover:-translate-y-0.5 hover:from-emerald-500 hover:to-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                        >
                            <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                            {{ __('Log in') }}
                        </button>
                    </div>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-gray-400">
                        Don't have an account?
                        <a
                            href="{{ route('register') }}"
                            class="font-medium text-emerald-400 transition-colors hover:text-emerald-300"
                        >
                            Sign up
                        </a>
                    </p>
                </div>
            </div>
        </div>

        
        <div class="relative hidden overflow-hidden lg:block lg:w-1/2">
            <div
                class="absolute inset-0 z-10 bg-gradient-to-br from-emerald-900/20 to-slate-900/40"
            ></div>
            <img
                src="{{ asset('image/auth.jpeg') }}"
                alt="Nature"
                class="h-full w-full object-cover"
            />
            <div
                class="absolute inset-0 z-20 flex flex-col items-center justify-center p-12 text-center"
            >
                <h2 class="mb-4 text-4xl font-bold text-white">
                    Make a Difference
                </h2>
                <p class="max-w-md text-xl text-gray-200">Join thousands of people making sustainable choices for a better future</p>
            </div>
        </div>
    </div>
</x-guest-layout>
