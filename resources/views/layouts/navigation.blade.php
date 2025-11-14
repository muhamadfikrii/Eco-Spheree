    <nav
        x-data="{
            open: false,
            scrolled: false,
            profileOpen: false,
            showStats: false,
            userProfile: {
                level: 1,
                rank: 'Eco Warrior',
                levelProgress: 25,
                stats: { points: 150, trees: 3, plastic: 1.2 }
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
            ? 'backdrop-blur-lg bg-emerald-600/20 border-b border-slate-200 shadow-lg py-3' 
            : 'backdrop-blur-md py-5'"
        class="top-0 fixed left-0 w-full z-[1000] transition-all duration-500 ease-in-out"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">

                <!-- Logo -->
                <div class="flex items-center space-x-3 group">
                    <div class="relative overflow-hidden rounded-lg">
                        @include('components.icon')
                        <div class="absolute inset-0 bg-emerald-400 opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
                    </div>
                    <h1 class="text-xl font-bold transition-all duration-300"
                        :class="scrolled ? 'text-emerald-500' : 'text-white'">
                        <span class="relative">
                            Eco-Spheree
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-emerald-400 group-hover:w-full transition-all duration-300"></span>
                        </span>
                    </h1>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-2">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')" 
                        class="px-4 py-2 rounded-lg font-medium transition-all duration-300 group capitalize">
                        Home
                    </x-nav-link>
                    <x-nav-link :href="route('explore')" :active="request()->routeIs('explore')" 
                        class="px-4 py-2 rounded-lg font-medium transition-all duration-300 group capitalize">
                        Explore
                    </x-nav-link>
                    <x-nav-link :href="route('challenge')" :active="request()->routeIs('challenge')" 
                        class="px-4 py-2 rounded-lg font-medium transition-all duration-300 group capitalize">
                        Challenge
                    </x-nav-link>
                    <x-nav-link :href="route('eco_track')" :active="request()->routeIs('eco_track')" 
                        class="px-4 py-2 rounded-lg font-medium transition-all duration-300 group capitalize">
                        Eco-Track
                    </x-nav-link>
                    <x-nav-link :href="route('report')" :active="request()->routeIs('report')" 
                        class="px-4 py-2 rounded-lg font-medium transition-all duration-300 group capitalize">
                        Report
                    </x-nav-link>
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" 
                        class="px-4 py-2 rounded-lg font-medium transition-all duration-300 group capitalize">
                        Contact
                    </x-nav-link>
                </div>

                <!-- User Section -->
                <div class="hidden lg:flex items-center space-x-3">
                    @auth
                        <div class="relative" x-data>
                            <button 
                                @click="profileOpen = !profileOpen"
                                class="flex items-center space-x-3 rounded-xl px-4 py-2 transition-all duration-300 group"
                                :class="scrolled 
                                    ? 'bg-white/10 backdrop-blur-sm hover:bg-black text-white' 
                                    : 'bg-white/10 hover:bg-white/20 text-white'">
                                
                                <img 
                                    src="{{ Auth::user()->profile_photo 
                                        ? asset('storage/' . Auth::user()->profile_photo) 
                                        : 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}"
                                    class="w-8 h-8 rounded-full object-cover border border-slate-200"
                                />
                                
                                    <div class="text-left">
                                        <div class="font-semibold text-sm capitalize">{{ Auth::user()->name }}</div>
                                        <div class="text-xs opacity-75">{{ auth()->user()->eco_points ?? 0 }} pts</div>
                                    </div>
                                <svg class="w-4 h-4 transition-transform duration-300" 
                                    :class="profileOpen ? 'rotate-180' : ''" 
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>

                            <!-- Dropdown -->
                            <div 
                                x-show="profileOpen"
                                @click.away="profileOpen = false"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 scale-95 translate-y-2"
                                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                                class="absolute right-0 top-14 w-72 bg-white rounded-xl shadow-2xl border border-slate-200 z-50 overflow-hidden"
                            >
                                <div class="p-4 bg-gradient-to-r from-emerald-500 to-teal-600 flex items-center space-x-3">
                                    <img 
                                        src="{{ Auth::user()->profile_photo 
                                            ? asset('storage/' . Auth::user()->profile_photo) 
                                            : 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}"
                                        class="w-12 h-12 rounded-full object-cover border-2 border-white"
                                    />
                                    <div class="flex-1">
                                        <h3 class="text-white font-bold capitalize">{{ Auth::user()->name }}</h3>
                                        <p class="text-emerald-100 text-sm">Level {{ auth()->user()->eco_level ?? 1 }}</p>
                                    </div>
                                </div>

                                <div class="p-4 grid grid-cols-3 gap-2 border-b border-slate-200 text-center">
                                    <div><div class="text-xl font-bold text-emerald-600">{{ auth()->user()->eco_points ?? 0 }}</div><div class="text-xs text-slate-500">Points</div></div>
                                    <div><div class="text-xl font-bold text-blue-600">{{ auth()->user()->challenges_completed ?? 0 }}</div><div class="text-xs text-slate-500">Missions</div></div>
                                    <div><div class="text-xl font-bold text-amber-600">{{ auth()->user()->eco_impact ?? 0 }}</div><div class="text-xs text-slate-500">Impact</div></div>
                                </div>

                                <div class="p-2">
                                    <a href="{{ route('profile.edit') }}" 
                                    class="flex items-center space-x-2 px-3 py-2 rounded-lg hover:bg-slate-100 transition">
                                        <svg class="w-4 h-4 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                        <span class="text-sm text-slate-700">Profile</span>
                                    </a>
                                    
                                    @if(Auth::user()->is_admin ?? false)
                                        <a href="{{ route('admin.mission-reviews.index') }}" 
                                        class="flex items-center space-x-2 px-3 py-2 rounded-lg hover:bg-slate-100 transition">
                                            <svg class="w-4 h-4 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            <span class="text-sm text-slate-700">Reviews</span>
                                        </a>
                                    @endif
                                    
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" 
                                                class="flex items-center space-x-2 w-full px-3 py-2 rounded-lg hover:bg-red-50 transition">
                                            <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                            </svg>
                                            <span class="text-sm text-red-600">Log Out</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="flex items-center space-x-3">
                            <a href="{{ route('login') }}" 
                            class="px-4 py-2 font-medium transition rounded-lg"
                            :class="scrolled ? 'text-slate-700 hover:bg-slate-100 bg-white' : 'text-white hover:bg-white/10'">
                                Login
                            </a>
                            <a href="{{ route('register') }}" 
                            class="px-4 py-2 bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white rounded-lg font-medium transition shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                                Sign Up
                            </a>
                        </div>
                    @endauth
                </div>

                <!-- Mobile Button -->
                <div class="lg:hidden flex items-center">
                    <button @click="open = !open" class="w-12 h-12 flex justify-center items-center rounded-xl transition-all duration-300"
                        :class="scrolled
                            ? 'bg-slate-100/90 hover:bg-slate-200 text-slate-800 shadow-sm'
                            : 'bg-white/10 hover:bg-white/20 text-white backdrop-blur-md'">
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

    <!-- Mobile Navigation Menu -->
    <div x-show="open"
         x-transition:enter="transition ease-out duration-500"
         x-transition:enter-start="opacity-0 scale-90 -translate-y-4 rotate-1"
         x-transition:enter-end="opacity-100 scale-100 translate-y-0 rotate-0"
         x-transition:leave="none"
         @click.away="open = false"

         class="lg:hidden absolute top-full left-0 w-full bg-white text-black backdrop-blur-xl border-t border-emerald-200/50 shadow-2xl z-40 overflow-hidden">

        <!-- Animated Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 left-0 w-20 h-20 bg-emerald-400 rounded-full -translate-x-16 -translate-y-16 animate-pulse"></div>
            <div class="absolute top-0 right-0 w-20 h-20 bg-teal-400 rounded-full translate-x-12 -translate-y-12 animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-0 left-1/4 w-20 h-20 bg-green-400 rounded-full translate-y-10 animate-pulse" style="animation-delay: 2s;"></div>
        </div>

            <div class="relative max-w-7xl mx-auto px-4 py-8">
                <!-- Mobile Navigation Links -->
                <div class="space-y-3 mb-6 text-black">
                        <div x-show="open"
                            x-cloak
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-x-4 scale-95"
                            x-transition:enter-end="opacity-100 translate-x-0 scale-100"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-0 translate-x-0 scale-0"
                            x-transition:leave-end="opacity-0 translate-x-0 scale-0"
                            style="transition-delay: 0ms"
                            class="transform hover:scale-102 transition-all duration-200 rounded-lg overflow-hidden">
                            <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="block py-3 px-4  bg-gradient-to-br from-green-600 to-emerald-700 w-full text-white font-medium">
                                Home
                            </x-nav-link>
                        </div>

                        <div x-show="open"
                            x-cloak
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-x-4 scale-95"
                            x-transition:enter-end="opacity-100 translate-x-0 scale-100"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-0 translate-x-0 scale-0"
                            x-transition:leave-end="opacity-0 translate-x-0 scale-0"
                            style="transition-delay: 50ms"
                            class="transform hover:scale-102 transition-all duration-200 rounded-lg overflow-hidden">
                            <x-nav-link :href="route('explore')" :active="request()->routeIs('explore')" class="block py-3 px-4  bg-gradient-to-br from-green-600 to-emerald-700 w-full text-white font-medium">
                                Explore
                            </x-nav-link>
                        </div>

                        <div x-show="open"
                            x-cloak
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-x-4 scale-95"
                            x-transition:enter-end="opacity-100 translate-x-0 scale-100"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-0 translate-x-0 scale-0"
                            x-transition:leave-end="opacity-0 translate-x-0 scale-0"
                            style="transition-delay: 100ms"
                            class="transform hover:scale-102 transition-all duration-200 rounded-lg overflow-hidden">
                            <x-nav-link :href="route('challenge')" :active="request()->routeIs('challenge')" class="block py-3 px-4  bg-gradient-to-br from-green-600 to-emerald-700 w-full text-white font-medium">
                                Challenge
                            </x-nav-link>
                        </div>

                        <div x-show="open"
                            x-cloak
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-x-4 scale-95"
                            x-transition:enter-end="opacity-100 translate-x-0 scale-100"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-0 translate-x-0 scale-0"
                            x-transition:leave-end="opacity-0 translate-x-0 scale-0"
                            style="transition-delay: 150ms"
                            class="transform hover:scale-102 transition-all duration-200 rounded-lg overflow-hidden">
                            <x-nav-link :href="route('eco_track')" :active="request()->routeIs('eco_track')" class="block py-3 px-4  bg-gradient-to-br from-green-600 to-emerald-700 w-full text-white font-medium">
                                Eco-Track
                            </x-nav-link>
                        </div>

                        <div x-show="open"
                            x-cloak
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-x-4 scale-95"
                            x-transition:enter-end="opacity-100 translate-x-0 scale-100"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-0 translate-x-0 scale-0"
                            x-transition:leave-end="opacity-0 translate-x-0 scale-0"
                            style="transition-delay: 200ms"
                            class="transform hover:scale-102 transition-all duration-200 rounded-lg overflow-hidden">
                            <x-nav-link :href="route('report')" :active="request()->routeIs('report')" class="block py-3 px-4  bg-gradient-to-br from-green-600 to-emerald-700 w-full text-white font-medium">
                                Report
                            </x-nav-link>
                        </div>

                        <div x-show="open"
                            x-cloak
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-x-4 scale-95"
                            x-transition:enter-end="opacity-100 translate-x-0 scale-100"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-0 translate-x-0 scale-0"
                            x-transition:leave-end="opacity-0 translate-x-0 scale-0"
                            style="transition-delay: 250ms"
                            class="transform hover:scale-102 transition-all duration-200 rounded-lg overflow-hidden">
                            <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" class="block py-3 px-4  bg-gradient-to-br from-green-600 to-emerald-700 w-full text-white font-medium">
                                Contact
                            </x-nav-link>
                        </div>
                    </div>

                <!-- Mobile User Section -->
                    @auth
                        <div class="space-y-4">
                            <!-- User Info Card -->
                            <div class="group relative p-4 bg-gradient-to-r from-emerald-500/10 via-teal-500/10 to-green-500/10 rounded-2xl border border-emerald-200/30 backdrop-blur-sm hover:shadow-lg transition-all duration-300 hover:scale-105">
                                <div class="flex items-center space-x-4">
                                    <div class="relative">
                                        <img
                                            src="{{ Auth::user()->profile_photo
                                                ? asset('storage/' . Auth::user()->profile_photo)
                                                : 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}"
                                            class="w-12 h-12 rounded-full object-cover border-2 border-emerald-300 shadow-md"
                                        />
                                        <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-emerald-400 rounded-full border-2 border-white animate-pulse"></div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="font-bold text-slate-800 capitalize text-lg">{{ Auth::user()->name }}</div>
                                        <div class="text-sm text-emerald-600 font-medium">{{ auth()->user()->eco_points ?? 0 }} Eco Points</div>
                                        <div class="text-xs text-slate-500">Level {{ auth()->user()->eco_level ?? 1 }}</div>
                                    </div>
                                    <button @click="showStats = !showStats"
                                            class="p-2 rounded-xl bg-white/50 hover:bg-white/80 transition-all duration-200 hover:scale-110">
                                        <svg class="w-5 h-5 text-emerald-600 transition-transform duration-300"
                                                :class="showStats ? 'rotate-180' : ''"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <!-- User Action Links -->
                            <div class="space-y-2" x-show="showStats">
                                <a href="{{ route('profile.edit') }}"
                                    class="group flex items-center space-x-3 w-full px-4 py-3 rounded-xl font-medium transition-all duration-300
                                            bg-white/60 backdrop-blur-sm border border-slate-200/50 shadow-md hover:shadow-lg
                                            hover:bg-gradient-to-r hover:from-slate-50 hover:to-slate-100 hover:border-slate-300
                                            hover:-translate-y-0.5">
                                    <div class="p-2 rounded-lg bg-slate-100 group-hover:bg-slate-200 transition-colors duration-200">
                                        <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                    </div>
                                    <span class="text-slate-700 group-hover:text-slate-800">Profile Settings</span>
                                    <svg class="w-4 h-4 ml-auto transition-transform duration-300 group-hover:translate-x-1 opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>

                                @if(Auth::user()->is_admin ?? false)
                                    <a href="{{ route('admin.mission-reviews.index') }}"
                                        class="group flex items-center space-x-3 w-full px-4 py-3 rounded-xl font-medium transition-all duration-300
                                                bg-white/60 backdrop-blur-sm border border-slate-200/50 shadow-md hover:shadow-lg
                                                hover:bg-gradient-to-r hover:from-slate-50 hover:to-slate-100 hover:border-slate-300
                                                hover:-translate-y-0.5">
                                        <div class="p-2 rounded-lg bg-slate-100 group-hover:bg-slate-200 transition-colors duration-200">
                                            <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                        <span class="text-slate-700 group-hover:text-slate-800">Admin Reviews</span>
                                        <svg class="w-4 h-4 ml-auto transition-transform duration-300 group-hover:translate-x-1 opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                    </a>
                                @endif

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                            class="group flex items-center space-x-3 w-full px-4 py-3 rounded-xl font-medium transition-all duration-300
                                                    bg-gradient-to-r from-red-50 to-red-100 border border-red-200/50 shadow-md hover:shadow-lg
                                                    hover:from-red-100 hover:to-red-200 hover:border-red-300 hover:-translate-y-0.5">
                                        <div class="p-2 rounded-lg bg-red-100 group-hover:bg-red-200 transition-colors duration-200">
                                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                            </svg>
                                        </div>
                                        <span class="text-red-700 group-hover:text-red-800">Sign Out</span>
                                        <svg class="w-4 h-4 ml-auto transition-transform duration-300 group-hover:translate-x-1 opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="space-y-3">
                            <a href="{{ route('login') }}"
                                class="group block w-full px-4 py-3 text-center bg-gradient-to-r from-slate-100 to-slate-200 hover:from-slate-200 hover:to-slate-300 text-slate-700 rounded-2xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1 border border-slate-300/50">
                                <span class="flex items-center justify-center space-x-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                    </svg>
                                    <span>Sign In</span>
                                </span>
                            </a>

                            <a href="{{ route('register') }}"
                                class="group block w-full px-6 py-3 text-center bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white rounded-2xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1 border border-emerald-400/50">
                                <span class="flex items-center justify-center space-x-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                                    </svg>
                                    <span>Create Account</span>
                                </span>
                            </a>
                        </div>
                    @endauth
                </div>
        </div>
    </div>
</nav>
