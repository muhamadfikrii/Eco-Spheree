<x-guest-layout>
    <div
        class="flex min-h-screen items-center justify-center bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 p-4"
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

            
            <div
                class="rounded-2xl border border-slate-700/50 bg-slate-800/60 p-8 shadow-2xl shadow-emerald-500/20 backdrop-blur-lg"
            >
                <div class="mb-6 text-center">
                    <h1 class="mb-2 text-2xl font-bold text-white">
                        Reset Password
                    </h1>
                    <p class="text-sm text-gray-400">Create your new password</p>
                </div>

                <form
                    method="POST"
                    x-data="{ open: false }"
                    action="{{ route('password.store') }}"
                >
                    @csrf

                    
                    <input
                        type="hidden"
                        name="token"
                        value="{{ $request->route('token') }}"
                    />

                    
                    <div class="mb-4">
                        <label
                            class="mb-2 block text-sm font-medium text-gray-300"
                            >Email</label
                        >
                        <input
                            type="email"
                            name="email"
                            value="{{ old('email', $request->email) }}"
                            required
                            autocomplete="username"
                            placeholder="your@email.com"
                            class="w-full rounded-lg border border-slate-600 bg-slate-700/50 px-4 py-3 text-white placeholder-gray-400 transition-all focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                        />
                        <x-input-error
                            :messages="$errors->get('email')"
                            class="mt-2 text-sm text-red-400"
                        />
                    </div>

                    
                    <div class="mb-4">
                        <label
                            class="mb-2 block text-sm font-medium text-gray-300"
                            >New Password</label
                        >
                        <div class="relative">
                            <input
                                type="password"
                                name="password"
                                required
                                autocomplete="new-password"
                                placeholder="••••••••••"
                                x-bind:type="open ? 'text' : 'password'"
                                class="w-full rounded-lg border border-slate-600 bg-slate-700/50 px-4 py-3 pr-12 text-white placeholder-gray-400 transition-all focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                            />
                            <button
                                type="button"
                                @click="open = !open"
                                class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500 transition-colors hover:text-emerald-400 focus:outline-none"
                            >
                                <svg x-show="
                                        !open
                                    " class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                                <svg x-show="
                                        open
                                    " class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                </svg>
                            </button>
                        </div>
                        <x-input-error
                            :messages="$errors->get('password')"
                            class="mt-2 text-sm text-red-400"
                        />
                    </div>

                    
                    <div class="mb-6">
                        <label
                            class="mb-2 block text-sm font-medium text-gray-300"
                            >Confirm Password</label
                        >
                        <div class="relative">
                            <input
                                type="password"
                                name="password_confirmation"
                                required
                                autocomplete="new-password"
                                placeholder="••••••••••"
                                x-bind:type="open ? 'text' : 'password'"
                                class="w-full rounded-lg border border-slate-600 bg-slate-700/50 px-4 py-3 pr-12 text-white placeholder-gray-400 transition-all focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                            />
                            <button
                                type="button"
                                @click="open = !open"
                                class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500 transition-colors hover:text-emerald-400 focus:outline-none"
                            >
                                <svg x-show="
                                        !open
                                    " class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                                <svg x-show="
                                        open
                                    " class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                </svg>
                            </button>
                        </div>
                        <x-input-error
                            :messages="$errors->get('password_confirmation')"
                            class="mt-2 text-sm text-red-400"
                        />
                    </div>

                    
                    <div>
                        <button
                            type="submit"
                            class="flex w-full transform items-center justify-center rounded-lg bg-gradient-to-r from-emerald-600 to-emerald-500 px-4 py-3 font-medium text-white transition-all hover:-translate-y-0.5 hover:from-emerald-500 hover:to-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2"
                        >
                            <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            Reset Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById('eye-icon-' + inputId);

            if (input.type === 'password') {
                input.type = 'text';
                icon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                `;
            } else {
                input.type = 'password';
                icon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                `;
            }
        }
    </script>
</x-guest-layout>
