<nav
    x-data="{
        open: false,
        scrolled: false,
        userProfile: {
            level: 1,
            rank: 'Eco Warrior',
            levelProgress: 25,
            stats: {
                points: 150,
                trees: 3,challenge-center
                plastic: 1.2
            }
        }
    }"
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
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center transition-all duration-500 ease-in-out">

            <!-- Logo -->
            <div class="flex items-center justify-center">
                @include('components.icon')
                <h1 class="pl-3 text-xl font-semibold"
                :class="scrolled ? 'text-slate-900' : 'text-white'">Eco-Spheree</h1>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8 font-medium text-[15px] transition-all duration-500 ease-in-out">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')">Home</x-nav-link>
                <x-nav-link :href="route('explore')" :active="request()->routeIs('explore')" class="hover:text-emerald-400">Explore</x-nav-link>
                <x-nav-link :href="route('challenge')" :active="request()->routeIs('challenge')" class="hover:text-emerald-400">Challenge</x-nav-link>
                <x-nav-link :href="route('report')" :active="request()->routeIs('report')" class="hover:text-emerald-400">Report</x-nav-link>
                <x-nav-link :href="route('eco_track')" :active="request()->routeIs('eco_track')" class="hover:text-emerald-400">Eco‑Track</x-nav-link>
                <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" class="hover:text-emerald-400">Contact</x-nav-link>
            </div>

            <div class="hidden md:flex items-center space-x-4 relative" x-data="{ showMenu: false }">
                @auth
                    <!-- Avatar Trigger -->
                    <button @click="showMenu = !showMenu"
                        class="flex items-center space-x-2 bg-dark-lighter hover:bg-dark-light px-3 py-2 rounded-lg transition duration-300 border border-dark">
                        <div class="w-8 h-8 rounded-full bg-primary bg-opacity-20 flex items-center justify-center">
                            <i class="fas fa-user text-primary text-sm"></i>
                        </div>
                        <span class="text-sm font-semibold text-black up capitalize"><span>{{ Auth::user()->name }}</span></span>
                        <i class="fas fa-chevron-down text-black text-xs ml-1 transition-transform"
                            :class="showMenu ? 'rotate-180' : ''"></i>
                    </button>

                    <!-- Dropdown Menu -->
                    <div x-show="showMenu" x-transition.origin.top.right @click.away="showMenu = false"
                        class="absolute right-0 top-12 w-80 bg-dark-light rounded-xl bg-slate-600 shadow-2xl border border-dark-lighter z-50 overflow-hidden">
                        <div class="p-6 space-y-6">

                            <!-- Profile Header -->
                            <div class="flex items-center space-x-4">
                                <div class="relative">
                                    <div class="w-16 h-16 rounded-full bg-primary bg-opacity-20 flex items-center justify-center avatar-pulse">
                                        <i class="fas fa-user text-primary text-2xl"></i>
                                    </div>
                                    <div
                                        class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-500 rounded-full border-2 border-dark-light flex items-center justify-center">
                                        <i class="fas fa-crown text-xs text-white"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-slate-400 capitalize font-bold text-lg">{{ Auth::user()->name }}</h3>
                                    <div class="flex items-center text-sm text-gray-400">
                                        <span class="text-primary font-medium mr-2">{{ auth()->user()->eco_level ?? 'Beginner' }}</span>
                                        <span>•</span>
                                        <span class="ml-2">{{ auth()->user()->eco_points ?? 0 }} pts</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Profile Stats -->
                            <div class="grid grid-cols-3 gap-4 text-center">
                                <div>
                                    <div class="text-2xl font-bold text-primary">{{ auth()->user()->eco_points ?? 0 }}</div>
                                    <div class="text-xs text-gray-400">Poin</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-primary">{{ auth()->user()->challenges_completed ?? 0 }}</div>
                                    <div class="text-xs text-gray-400">Missions</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-primary">{{ auth()->user()->eco_level ?? 'Beginner' }}</div>
                                    <div class="text-xs text-gray-400">Level</div>
                                </div>
                            </div>

                            <!-- Level Progress -->
                            <div>
                                <div class="flex justify-between text-sm text-gray-400 mb-1">
                                    <span>Challenge Progress</span>
                                    <span>{{ auth()->user()->challenges_completed ?? 0 }}/6 Missions</span>
                                </div>
                                <div class="w-full h-2 bg-dark rounded-full overflow-hidden">
                                    <div class="h-full bg-primary transition-all duration-700"
                                        style="width: {{ (auth()->user()->challenges_completed ?? 0) / 6 * 100 }}%"></div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex space-x-3">
                                <a href="{{ route('profile.edit') }}"
                                    class="flex-1 bg-primary hover:bg-primary-light text-white text-center py-2 px-4 rounded-lg transition text-sm">
                                    <i class="fas fa-user mr-1"></i> Settings
                                </a>

                                @if(Auth::user()->is_admin ?? false)
                                    <a href="{{ route('admin.mission-reviews.index') }}"
                                        class="flex-1 bg-blue-600 hover:bg-blue-700 text-white text-center py-2 px-4 rounded-lg transition text-sm">
                                        <i class="fas fa-clipboard-check mr-1"></i> Review Submissions
                                    </a>
                                @endif

                                <form method="POST" action="{{ route('logout') }}" class="flex-1">
                                    @csrf
                                    <button type="submit"
                                        class="w-full bg-dark-lighter hover:bg-dark border border-dark-lighter text-gray-400 hover:text-white py-2 px-4 rounded-lg transition text-sm">
                                        <i class="fas fa-sign-out-alt mr-1"></i> Log Out
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                @else
                    <!-- Guest -->
                    <a href="{{ route('login') }}"
                        class="px-5 py-2 bg-emerald-600 hover:bg-emerald-500 rounded-lg font-semibold text-white transition duration-300">
                        Login
                    </a>
                    <a href="{{ route('register') }}"
                        class="px-5 py-2 bg-slate-800 hover:bg-slate-700 rounded-lg font-semibold text-slate-200 transition duration-300 border border-slate-700">
                        Sign Up
                    </a>
                @endauth
            </div>

            <!-- Mobile Toggle Button -->
            <div class="md:hidden">
                <button @click="open = !open"
                    class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-slate-800/50 transition duration-300">
                    <svg x-show="!open" class="h-6 w-6 text-slate-300" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" x-cloak class="h-6 w-6 text-emerald-400" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-transition.origin.top.duration.300ms class="md:hidden bg-slate-900/95 border-t border-slate-800 backdrop-blur-md px-6 py-5 space-y-3 transition-all duration-500 ease-in-out">
        <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="block text-slate-200 hover:text-emerald-400 transition">Home</x-nav-link>
        <x-nav-link :href="route('explore')" :active="request()->routeIs('explore')" class="block text-slate-200 hover:text-emerald-400 transition">Eksplor</x-nav-link>
        <x-nav-link :href="route('challenge')" :active="request()->routeIs('challenge')" class="block text-slate-200 hover:text-emerald-400 transition">Challenge</x-nav-link>
        <x-nav-link :href="route('report')" :active="request()->routeIs('report')" class="hover:text-emerald-400">Report</x-nav-link>
        <x-nav-link :href="route('eco_track')" :active="request()->routeIs('eco_track')" class="block text-slate-200 hover:text-emerald-400 transition">Eco‑Track</x-nav-link>
        <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" class="block text-slate-200 hover:text-emerald-400 transition">Contact</x-nav-link>

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
