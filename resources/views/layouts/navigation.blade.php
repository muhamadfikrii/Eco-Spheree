<nav 
    x-data="{ open: false, scrolled: false }"
    x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 10)"
    :class="scrolled 
        ? 'bg-slate-950/95 backdrop-blur-md border-b border-slate-800 shadow-lg shadow-emerald-500/5' 
        : 'bg-transparent border-b border-slate-800/0'"
    class="fixed top-0 left-0 w-full z-50 transition-all duration-300 text-slate-200"
>
    <div class="max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            
            <!-- Logo -->
            @include('components.icon')

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-6 bg-slate-900 px-8 py-2 rounded-full backdrop-blur-sm border border-slate-800/50 font-medium text-[15px]">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-slate-300 hover:text-emerald-400 transition">Home</x-nav-link>
                <x-nav-link :href="route('dashboard')" class="text-slate-300 hover:text-emerald-400 transition">Eksplor</x-nav-link>
                <x-nav-link :href="route('dashboard')" class="text-slate-300 hover:text-emerald-400 transition">Challenge</x-nav-link>
                <x-nav-link :href="route('dashboard')" class="text-slate-300 hover:text-emerald-400 transition">Eco-Track</x-nav-link>
                <x-nav-link :href="route('dashboard')" class="text-slate-300 hover:text-emerald-400 transition">Leaderboard</x-nav-link>
            </div>

            <!-- Auth Buttons -->
            <div class="hidden md:flex items-center ml-8 space-x-4">
                @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex bg-slate-700 rounded-full items-center px-4 py-2 hover:bg-slate-700 text-slate-200 transition-all duration-200">
                                {{ Auth::user()->name }}
                                <svg class="ml-2 h-4 w-4 text-slate-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 8l4 4 4-4" />
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
                    <a href="{{ route('login') }}" 
                        class="px-5 py-2 bg-emerald-600 hover:bg-emerald-500 rounded-lg font-semibold text-white text-[15px] transition duration-200 shadow-md shadow-emerald-600/20">
                        Login
                    </a>
                    <a href="{{ route('register') }}" 
                        class="px-5 py-2 bg-slate-800 hover:bg-slate-700 rounded-lg font-semibold text-slate-200 text-[15px] transition duration-200 border border-slate-700">
                        Sign Up
                    </a>
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button 
                    @click="open = !open" 
                    class="relative z-50 w-10 h-10 flex items-center justify-center rounded-lg hover:bg-slate-800/50 transition"
                    aria-label="Toggle menu"
                >
                    <svg x-show="!open" class="h-6 w-6 text-slate-300" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="open" x-cloak class="h-6 w-6 text-emerald-400" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div 
        x-show="open" 
        x-transition.origin.top.duration.300ms
        class="md:hidden bg-slate-950/95 border-t border-slate-800 backdrop-blur-md px-6 py-5 space-y-3"
    >
        <a href="{{ route('dashboard') }}" class="block text-slate-200 hover:text-emerald-400 transition">Dashboard</a>
        <a href="{{ route('dashboard') }}" class="block text-slate-200 hover:text-emerald-400 transition">Eksplor</a>
        <a href="{{ route('dashboard') }}" class="block text-slate-200 hover:text-emerald-400 transition">Challenge</a>
        <a href="{{ route('dashboard') }}" class="block text-slate-200 hover:text-emerald-400 transition">Eco-Track</a>
        <a href="{{ route('dashboard') }}" class="block text-slate-200 hover:text-emerald-400 transition">Leaderboard</a>

        <div class="border-t border-slate-800 pt-4 mt-3">
            @auth
                <div class="text-slate-400 text-sm mb-2">{{ Auth::user()->name }}</div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button onclick="event.preventDefault(); this.closest('form').submit();" 
                            class="block w-full text-left text-red-500 hover:text-red-400 text-sm">
                        Logout
                    </button>
                </form>
            @else
                <div class="space-y-3">
                    <a href="{{ route('login') }}" 
                       class="block px-4 py-2 bg-emerald-600 hover:bg-emerald-500 rounded-md text-center text-sm font-semibold text-white shadow-md shadow-emerald-600/20">
                        Login
                    </a>
                    <a href="{{ route('register') }}" 
                       class="block px-4 py-2 bg-slate-800 hover:bg-slate-700 rounded-md text-center text-sm font-semibold text-slate-200 border border-slate-700">
                        Sign Up
                    </a>
                </div>
            @endauth
        </div>
    </div>
</nav>
