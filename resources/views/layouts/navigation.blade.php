<nav
    x-data="{ 
        open: false, 
        scrolled: false,
        profileOpen: false
    }"
    x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 10)"
    :class="scrolled 
        ? 'backdrop-blur-lg bg-emerald-600/20 border-b border-slate-200 shadow-lg py-3' 
        : 'backdrop-blur-md py-5'"
    class="top-0 fixed left-0 w-full z-50 transition-all duration-500 ease-in-out"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">

            <!-- Logo Section -->
            <div class="flex items-center space-x-3 group">
                <div class="relative overflow-hidden rounded-lg">
                    @include('components.icon')
                    <div class="absolute inset-0 bg-emerald-400 opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
                </div>
                <h1 class="text-xl font-bold transition-all duration-300"
                    :class="scrolled ? 'text-emerald-500' : 'text-white'">
                    <span class="relative">
                        Eco-Sphere
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-emerald-400 group-hover:w-full transition-all duration-300"></span>
                    </span>
                </h1>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-2">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')" 
                    class="px-4 py-2 rounded-lg font-medium transition-all duration-300 group">
                    Home
                </x-nav-link>
                <x-nav-link :href="route('explore')" :active="request()->routeIs('explore')" 
                    class="px-4 py-2 rounded-lg font-medium transition-all duration-300 group">
                    Explore
                </x-nav-link>
                <x-nav-link :href="route('challenge')" :active="request()->routeIs('challenge')" 
                    class="px-4 py-2 rounded-lg font-medium transition-all duration-300 group">
                    Challenge
                </x-nav-link>
                <x-nav-link :href="route('report')" :active="request()->routeIs('report')" 
                    class="px-4 py-2 rounded-lg font-medium transition-all duration-300 group">
                    Report
                </x-nav-link>
                <x-nav-link :href="route('eco_track')" :active="request()->routeIs('eco_track')" 
                    class="px-4 py-2 rounded-lg font-medium transition-all duration-300 group">
                    Eco-Track
                </x-nav-link>
                <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" 
                    class="px-4 py-2 rounded-lg font-medium transition-all duration-300 group">
                    Contact
                </x-nav-link>
            </div>

            <!-- Desktop User Section -->
            <div class="hidden lg:flex items-center space-x-3">
                @auth
                    <!-- User Profile Dropdown -->
                    <div class="relative">
                        <button 
                            @click="profileOpen = !profileOpen"
                            class="flex items-center space-x-3 rounded-xl px-4 py-2 transition-all duration-300 group"
                            :class="scrolled 
                                ? 'bg-slate-100/90 backdrop-blur-sm hover:bg-slate-200 text-slate-700' 
                                : 'bg-white/10 hover:bg-white/20 text-white'">
                            
                            <img 
                                src="{{ Auth::user()->profile_photo 
                                    ? asset('storage/' . Auth::user()->profile_photo) 
                                    : 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}"
                                class="w-8 h-8 rounded-full object-cover border border-slate-200"
                            />
                            
                            <div class="text-left">
                                <div class="font-semibold text-sm leading-tight capitalize">{{ Auth::user()->name }}</div>
                                <div class="flex items-center gap-2">
                                    <div class="w-4 h-4 bg-amber-500 rounded-full border-2 border-white flex items-center justify-center">
                                        <svg class="w-2 h-2 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    </div>
                                    <div class="text-xs opacity-75">{{ auth()->user()->eco_points ?? 0 }} points</div>
                                </div>
                            </div>
                            
                            <svg class="w-4 h-4 transition-transform duration-300" 
                                :class="profileOpen ? 'rotate-180' : ''" 
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div 
                            x-show="profileOpen" 
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-95 translate-y-2"
                            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                            x-transition:leave-end="opacity-0 scale-95 translate-y-2"
                            @click.away="profileOpen = false"
                            class="absolute right-0 top-14 w-72 bg-white rounded-xl shadow-2xl border border-slate-200 z-50 overflow-hidden"
                        >
                            <!-- Profile Header -->
                            <div class="p-4 bg-gradient-to-r from-emerald-500 to-teal-600">
                                <div class="flex items-center space-x-3">
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
                            </div>

                            <!-- Stats Grid -->
                            <div class="p-4 grid grid-cols-3 gap-2 border-b border-slate-200">
                                <div class="text-center">
                                    <div class="text-xl font-bold text-emerald-600">{{ auth()->user()->eco_points ?? 0 }}</div>
                                    <div class="text-xs text-slate-500">Points</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-xl font-bold text-blue-600">{{ auth()->user()->challenges_completed ?? 0 }}</div>
                                    <div class="text-xs text-slate-500">Missions</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-xl font-bold text-amber-600">{{ auth()->user()->eco_impact ?? 0 }}</div>
                                    <div class="text-xs text-slate-500">Impact</div>
                                </div>
                            </div>

                            <!-- Actions -->
                            <div class="p-2">
                                <a href="{{ route('profile.edit') }}" 
                                   class="flex items-center space-x-2 px-3 py-2 rounded-lg hover:bg-slate-100 transition-colors duration-200">
                                    <svg class="w-4 h-4 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                    <span class="text-sm font-medium text-slate-700">Profile</span>
                                </a>
                                
                                @if(Auth::user()->is_admin ?? false)
                                    <a href="{{ route('admin.mission-reviews.index') }}" 
                                       class="flex items-center space-x-2 px-3 py-2 rounded-lg hover:bg-slate-100 transition-colors duration-200">
                                        <svg class="w-4 h-4 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        <span class="text-sm font-medium text-slate-700">Reviews</span>
                                    </a>
                                @endif
                                
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" 
                                            class="flex items-center space-x-2 w-full px-3 py-2 rounded-lg hover:bg-red-50 transition-colors duration-200">
                                        <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                        </svg>
                                        <span class="text-sm font-medium text-red-600">Log Out</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Guest Buttons -->
                    <div class="flex items-center space-x-3">
                        <a href="{{ route('login') }}" 
                           class="px-4 py-2 font-medium transition-all duration-300 rounded-lg"
                           :class="scrolled 
                                ? 'text-slate-700 hover:bg-slate-100' 
                                : 'text-white hover:bg-white/10'">
                            Login
                        </a>
                        <a href="{{ route('register') }}" 
                           class="px-4 py-2 bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white rounded-lg font-medium transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                            Sign Up
                        </a>
                    </div>
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden flex items-center">
                <button 
                    @click="open = !open"
                    class="flex items-center justify-center w-12 h-12 rounded-xl transition-all duration-300"
                    :class="scrolled 
                        ? 'bg-slate-100/90 hover:bg-slate-200 text-slate-800 shadow-sm' 
                        : 'bg-white/10 hover:bg-white/20 text-white backdrop-blur-md'"
                    aria-label="Toggle navigation">
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu with Unique Animation -->
        <div 
            x-show="open" 
            x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="lg:hidden absolute top-full left-0 right-0 bg-white rounded-b-2xl shadow-2xl overflow-hidden">
            <div class="px-4 py-6 space-y-2">
                <!-- Navigation Links with Staggered Animation -->
                <div 
                    x-show="open"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform translate-x-10"
                    x-transition:enter-end="opacity-100 transform translate-x-0"
                    style="transition-delay: 0ms">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')" 
                    class="px-4 py-2 text-black rounded-lg font-medium transition-all duration-300 group">
                        Home
                    </x-nav-link>
                </div>
                
                <div 
                    x-show="open"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform translate-x-10"
                    x-transition:enter-end="opacity-100 transform translate-x-0"
                    style="transition-delay: 50ms">
                    <x-nav-link :href="route('explore')" :active="request()->routeIs('explore')" 
                    class="px-4 py-2 text-black rounded-lg font-medium transition-all duration-300 group">
                    Explore
                    </x-nav-link>
                </div>
                
                <div 
                    x-show="open"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform translate-x-10"
                    x-transition:enter-end="opacity-100 transform translate-x-0"
                    style="transition-delay: 100ms">
                    <x-nav-link :href="route('challenge')" :active="request()->routeIs('challenge')" 
                    class="px-4 py-2 text-black rounded-lg font-medium transition-all duration-300 group">
                    Challenge
                </x-nav-link>
                </div>
                
                <div 
                    x-show="open"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform translate-x-10"
                    x-transition:enter-end="opacity-100 transform translate-x-0"
                    style="transition-delay: 150ms">
                    <x-nav-link :href="route('report')" :active="request()->routeIs('report')" 
                        class="px-4 py-2 text-black rounded-lg font-medium transition-all duration-300 group">
                        Report
                    </x-nav-link>
                </div>
                
                <div 
                    x-show="open"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform translate-x-10"
                    x-transition:enter-end="opacity-100 transform translate-x-0"
                    style="transition-delay: 200ms">
                   <x-nav-link :href="route('eco_track')" :active="request()->routeIs('eco_track')" 
                        class="px-4 py-2 text-black rounded-lg font-medium transition-all duration-300 group">
                        Eco-Track
                    </x-nav-link>
                </div>
                
                <div 
                    x-show="open"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform translate-x-10"
                    x-transition:enter-end="opacity-100 transform translate-x-0"
                    style="transition-delay: 250ms">
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" 
                        class="px-4 py-2 text-black rounded-lg font-medium transition-all duration-300 group">
                        Contact
                    </x-nav-link>
                </div>

                <!-- Mobile Auth Section -->
                <div 
                    x-show="open"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform translate-x-10"
                    x-transition:enter-end="opacity-100 transform translate-x-0"
                    style="transition-delay: 300ms"
                    class="border-t border-slate-200 pt-4 mt-4 space-y-3">
                    @auth
                        <div class="flex items-center space-x-3 px-4 py-3 bg-emerald-50 rounded-xl">
                            <img 
                                src="{{ Auth::user()->profile_photo 
                                    ? asset('storage/' . Auth::user()->profile_photo) 
                                    : 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}"
                                class="w-10 h-10 rounded-full object-cover border border-slate-200"
                            />
                            <div>
                                <div class="font-semibold text-slate-800 capitalize">{{ Auth::user()->name }}</div>
                                <div class="text-sm text-slate-600">{{ auth()->user()->eco_points ?? 0 }} points</div>
                            </div>
                        </div>
                        <a href="{{ route('profile.edit') }}" 
                           class="block py-3 px-4 rounded-xl text-slate-700 hover:bg-emerald-50 transition-all duration-300 font-medium">
                            Profile Settings
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" 
                                    class="block w-full text-left py-3 px-4 rounded-xl text-red-600 hover:bg-red-50 transition-all duration-300 font-medium">
                                Log Out
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" 
                           class="block py-3 px-4 rounded-xl text-slate-700 hover:bg-emerald-50 transition-all duration-300 font-medium text-center">
                            Login
                        </a>
                        <a href="{{ route('register') }}" 
                           class="block py-3 px-4 bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white rounded-xl transition-all duration-300 font-medium text-center shadow-lg">
                            Sign Up
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</nav>

<style>
    /* Custom animations */
    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.5;
        }
    }
    
    /* Smooth transitions for all elements */
    * {
        transition-property: color, background-color, border-color, transform, opacity;
        transition-duration: 200ms;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    }
</style>