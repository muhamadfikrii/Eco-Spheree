<nav 
    x-data="{ open: false, scrolled: false }"
    x-init="
        const handleScroll = () => {
            window.requestAnimationFrame(() => {
                scrolled = window.scrollY > 10;
            });
        };
        window.addEventListener('scroll', handleScroll);
    "
    :class="scrolled 
        ? 'bg-white/90 backdrop-blur-md border-b border-slate-800 shadow-md shadow-emerald-500/10 py-3' 
        : 'bg-transparent border-b border-transparent py-5'"
    class="top-0 fixed left-0 w-full z-[9999] transition-all duration-500 ease-in-out text-slate-200"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center transition-all duration-500 ease-in-out">

            <!-- Logo -->
            <div class="flex items-center justify-center">
                @include('components.icon')
                <h1 class=" pl-3 text-xl font-semibold"
                :class="scrolled ? 'text-slate-900' : 'text-white'">Eco-Spheree</h1>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8 font-medium text-[15px] transition-all duration-500 ease-in-out">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')">Home</x-nav-link>
                <x-nav-link :href="route('dashboard')" class="hover:text-emerald-400">Eksplor</x-nav-link>
                <x-nav-link :href="route('dashboard')" class="hover:text-emerald-400">Challenge</x-nav-link>
                <x-nav-link :href="route('dashboard')" class="hover:text-emerald-400">Eco‑Track</x-nav-link>
                <x-nav-link :href="route('dashboard')" class="hover:text-emerald-400">Leaderboard</x-nav-link>
            </div>

            <!-- Auth Buttons / User Menu -->
            <div class="hidden md:flex items-center space-x-4">
                @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center space-x-2 px-4 py-2 rounded-full bg-slate-700 hover:bg-slate-700/80 transition">
                                <span>{{ Auth::user()->name }}</span>
                                <svg class="h-4 w-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6"></path>
                                </svg>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">Profile</x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                    Logout
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <a href="{{ route('login') }}" class="px-5 py-2 bg-emerald-600 hover:bg-emerald-500 rounded-lg font-semibold text-white transition duration-300">Login</a>
                    <a href="{{ route('register') }}" class="px-5 py-2 bg-slate-800 hover:bg-slate-700 rounded-lg font-semibold text-slate-200 transition duration-300 border border-slate-700">Sign Up</a>
                @endauth
            </div>

            <!-- Mobile Toggle Button -->
            <div class="md:hidden">
                <button @click="open = !open" class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-slate-800/50 transition duration-300">
                    <svg x-show="!open" class="h-6 w-6 text-slate-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-show="open" x-cloak class="h-6 w-6 text-emerald-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-transition.origin.top.duration.300ms class="md:hidden bg-slate-900/95 border-t border-slate-800 backdrop-blur-md px-6 py-5 space-y-3 transition-all duration-500 ease-in-out">
        <a href="{{ route('home') }}" class="block text-slate-200 hover:text-emerald-400 transition">Home</a>
        <a href="{{ route('dashboard') }}" class="block text-slate-200 hover:text-emerald-400 transition">Eksplor</a>
        <a href="{{ route('dashboard') }}" class="block text-slate-200 hover:text-emerald-400 transition">Challenge</a>
        <a href="{{ route('dashboard') }}" class="block text-slate-200 hover:text-emerald-400 transition">Eco‑Track</a>
        <a href="{{ route('dashboard') }}" class="block text-slate-200 hover:text-emerald-400 transition">Leaderboard</a>

        <div class="border-t border-slate-800 pt-4 mt-3">
            @auth
                <div class="text-slate-400 text-sm mb-2">{{ Auth::user()->name }}</div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button onclick="event.preventDefault(); this.closest('form').submit();" class="w-full text-left text-red-500 hover:text-red-400 text-sm transition duration-300">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="block w-full px-4 py-2 bg-emerald-600 hover:bg-emerald-500 rounded-md text-center text-sm font-semibold text-white transition duration-300">Login</a>
                <a href="{{ route('register') }}" class="block w-full px-4 py-2 bg-slate-800 hover:bg-slate-700 rounded-md text-center text-sm font-semibold text-slate-200 border border-slate-700 transition duration-300">Sign Up</a>
            @endauth
        </div>
    </div>
</nav>
