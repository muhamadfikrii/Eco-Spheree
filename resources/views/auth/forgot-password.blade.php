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
                        Forgot Password?
                    </h1>
                    <p class="text-sm text-gray-400">No worries, we'll send you reset instructions.</p>
                </div>

                <x-auth-session-status
                    class="mb-6"
                    :status="session('status')"
                />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mb-6">
                        <label
                            class="mb-2 block text-sm font-medium text-gray-300"
                            >Email Address</label
                        >
                        <div class="relative">
                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                autocomplete="email"
                                placeholder="Enter your email"
                                class="w-full rounded-lg border border-slate-600 bg-slate-700/50 px-4 py-3 text-white placeholder-gray-400 transition-all focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                            />
                        </div>
                        <x-input-error
                            :messages="$errors->get('email')"
                            class="mt-2 text-sm text-red-400"
                        />
                    </div>

                    <button
                        type="submit"
                        class="flex w-full transform items-center justify-center rounded-lg bg-gradient-to-r from-emerald-600 to-emerald-500 px-4 py-3 font-medium text-white transition-all hover:-translate-y-0.5 hover:from-emerald-500 hover:to-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2"
                    >
                        <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Send Reset Link
                    </button>
                </form>

                <div class="text-center">
                    <a
                        href="{{ route('login') }}"
                        class="text-sm text-emerald-400 transition-colors hover:text-emerald-300"
                    >
                        ← Back to login
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
