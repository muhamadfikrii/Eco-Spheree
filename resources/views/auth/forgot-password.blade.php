<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 p-4">
        <div class="w-full max-w-md">
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

            <div class="bg-slate-800/60 backdrop-blur-lg border border-slate-700/50 rounded-2xl shadow-2xl shadow-emerald-500/20 p-8">
                <div class="text-center mb-6">
                    <h1 class="text-2xl font-bold text-white mb-2">Forgot Password?</h1>
                    <p class="text-gray-400 text-sm">No worries, we'll send you reset instructions.</p>
                </div>

                <x-auth-session-status class="mb-6" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-300 mb-2">Email Address</label>
                        <div class="relative">
                            <input 
                                type="email" 
                                name="email" 
                                value="{{ old('email') }}" 
                                required 
                                autofocus
                                autocomplete="email"
                                placeholder="Enter your email"
                                class="w-full px-4 py-3 bg-slate-700/50 border border-slate-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all"
                            />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400 text-sm" />
                    </div>

                    <button type="submit" class="w-full flex justify-center items-center px-4 py-3 bg-gradient-to-r from-emerald-600 to-emerald-500 text-white font-medium rounded-lg hover:from-emerald-500 hover:to-emerald-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-all transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Send Reset Link
                    </button>
                </form>

                <div class="text-center">
                    <a href="{{ route('login') }}" class="text-sm text-emerald-400 hover:text-emerald-300 transition-colors">
                        ← Back to login
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>