<nav
    x-data="{
        open: false,
        scrolled: false,
        profileOpen: false,
        showStats: false,
        userProfile: {
            level: 3,
            rank: 'Plant Operator',
            levelProgress: 68,
            stats: { oee: 87, uptime: 99.2, energy: 23 }
        }
    }"
    x-init="
        const handleScroll = () => {
            requestAnimationFrame(() => {
                scrolled = window.scrollY > 10;
            });
        };
        window.addEventListener('scroll', handleScroll);
        handleScroll();
    "
    :class="[
        'top-0 fixed left-0 w-full z-[1000] transition-all duration-500 ease-in-out',
        scrolled 
            ? 'backdrop-blur-lg bg-slate-900/80 border-b border-slate-700 shadow-lg py-3' 
            : 'backdrop-blur-md py-5'
    ]"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">

            <!-- Logo -->
            <div class="flex items-center space-x-3 group">
                <div class="relative overflow-hidden rounded-lg bg-gradient-to-br from-cyan-500 to-blue-600 p-2">
                    <i class="fas fa-microchip text-white text-xl"></i>
                    <div class="absolute inset-0 bg-cyan-400 opacity-0 group-hover:opacity-30 transition-opacity duration-300"></div>
                </div>
                <h1 class="text-xl font-bold transition-all duration-300"
                    :class="scrolled ? 'text-cyan-400' : 'text-white'">
                    <span class="relative">
                        Nova<span class="text-cyan-400">Forge</span>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-cyan-400 group-hover:w-full transition-all duration-300"></span>
                    </span>
                </h1>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-2">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')" 
                    class="px-4 py-2 rounded-lg font-medium transition-all duration-300 group capitalize">
                    Dashboard
                </x-nav-link>
                <x-nav-link :href="route('analytics')" :active="request()->routeIs('analytics')" 
                    class="px-4 py-2 rounded-lg font-medium transition-all duration-300 group capitalize">
                    Analytics
                </x-nav-link>
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')" 
                    class="px-4 py-2 rounded-lg font-medium transition-all duration-300 group capitalize">
                    Maintenance
                </x-nav-link>
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')" 
                    class="px-4 py-2 rounded-lg font-medium transition-all duration-300 group capitalize">
                    Reports
                </x-nav-link>
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')" 
                    class="px-4 py-2 rounded-lg font-medium transition-all duration-300 group capitalize">
                    Contact
                </x-nav-link>
            </div>

            <!-- User Section -->
            <div class="hidden lg:flex items-center space-x-3">
                @auth
                    <div class="relative">
                        <button 
                            @click="profileOpen = !profileOpen"
                            class="flex items-center space-x-3 rounded-xl px-4 py-2 transition-all duration-300 group"
                            :class="scrolled 
                                ? 'bg-white/10 backdrop-blur-sm hover:bg-slate-700 text-white' 
                                : 'bg-white/10 hover:bg-white/20 text-white'">
                            
                            <img 
                                src="{{ Auth::user()->profile_photo 
                                    ? asset('storage/' . Auth::user()->profile_photo) 
                                    : 'https://ui-avatars.com/api/?background=0EA5E9&color=fff&name=' . urlencode(Auth::user()->name) }}"
                                class="w-8 h-8 rounded-full object-cover border border-cyan-400"
                            />
                            
                            <div class="text-left">
                                <div class="font-semibold text-sm capitalize">{{ Auth::user()->name }}</div>
                                <div class="text-xs opacity-75">{{ auth()->user()->productivity_score ?? 0 }} pts</div>
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
                            class="absolute right-0 top-14 w-80 bg-slate-800 rounded-xl shadow-2xl border border-slate-700 z-50 overflow-hidden"
                        >
                            <div class="p-4 bg-gradient-to-r from-cyan-600 to-blue-700 flex items-center space-x-3">
                                <img 
                                    src="{{ Auth::user()->profile_photo 
                                        ? asset('storage/' . Auth::user()->profile_photo) 
                                        : 'https://ui-avatars.com/api/?background=0EA5E9&color=fff&name=' . urlencode(Auth::user()->name) }}"
                                    class="w-12 h-12 rounded-full object-cover border-2 border-white"
                                />
                                <div class="flex-1">
                                    <h3 class="text-white font-bold capitalize">{{ Auth::user()->name }}</h3>
                                    <p class="text-cyan-100 text-sm">Efficiency Level {{ auth()->user()->efficiency_level ?? 3 }}</p>
                                </div>
                            </div>

                            <div class="p-4 grid grid-cols-3 gap-2 border-b border-slate-700 text-center">
                                <div><div class="text-xl font-bold text-cyan-400">{{ auth()->user()->oee ?? 87 }}%</div><div class="text-xs text-gray-400">OEE</div></div>
                                <div><div class="text-xl font-bold text-blue-400">{{ auth()->user()->uptime ?? 99.2 }}%</div><div class="text-xs text-gray-400">Uptime</div></div>
                                <div><div class="text-xl font-bold text-emerald-400">{{ auth()->user()->energy_saved ?? 23 }}%</div><div class="text-xs text-gray-400">Energy Saved</div></div>
                            </div>

                            <div class="p-2">
                                <a href="{{ route('profile.edit') }}" 
                                class="flex items-center space-x-2 px-3 py-2 rounded-lg hover:bg-slate-700 transition text-gray-300">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                    <span class="text-sm">Profile</span>
                                </a>
                                
                                @if(Auth::user()->is_admin ?? false)
                                    <a href="{{ route('admin.reviews') }}" 
                                    class="flex items-center space-x-2 px-3 py-2 rounded-lg hover:bg-slate-700 transition text-gray-300">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        <span class="text-sm">Admin Panel</span>
                                    </a>
                                @endif
                                
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" 
                                            class="flex items-center space-x-2 w-full px-3 py-2 rounded-lg hover:bg-red-500/20 transition text-gray-300">
                                        <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                        </svg>
                                        <span class="text-sm text-red-400">Log Out</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="flex items-center space-x-3">
                        <a href="{{ route('login') }}" 
                        class="px-4 py-2 font-medium transition rounded-lg"
                        :class="scrolled ? 'text-slate-800 hover:bg-slate-100 bg-white' : 'text-white hover:bg-white/10'">
                            Login
                        </a>
                        <a href="{{ route('register') }}" 
                        class="px-4 py-2 bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white rounded-lg font-medium transition shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                            Sign Up
                        </a>
                    </div>
                @endauth
            </div>

            <!-- Mobile Button -->
            <div class="lg:hidden flex items-center">
                <button @click="open = !open" class="w-12 h-12 flex justify-center items-center rounded-xl transition-all duration-300"
                    :class="scrolled
                        ? 'bg-slate-200/90 hover:bg-slate-300 text-slate-800 shadow-sm'
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
         @click.away="open = false"
         class="lg:hidden absolute top-full left-0 w-full bg-slate-900/95 backdrop-blur-xl border-t border-cyan-500/30 shadow-2xl z-40 overflow-hidden">

        <!-- Animated Industrial Grid Pattern -->
        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <div class="absolute top-0 left-0 w-20 h-20 bg-cyan-500 rounded-full -translate-x-16 -translate-y-16 animate-pulse"></div>
            <div class="absolute top-0 right-0 w-20 h-20 bg-blue-600 rounded-full translate-x-12 -translate-y-12 animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-0 left-1/4 w-20 h-20 bg-slate-500 rounded-full translate-y-10 animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgdmlld0JveD0iMCAwIDQwIDQwIj48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjAuNSIgc3Ryb2tlLW9wYWNpdHk9IjAuMDMiIGQ9Ik0wIDQwTDQwIDBNNDAgNDBMMCAwIi8+PC9zdmc+')] opacity-20"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 py-8">
            <!-- Mobile Navigation Links -->
            <div class="space-y-3 mb-6">
                @php
                    $mobileLinks = [
                        ['label' => 'Dashboard'],
                        ['label' => 'Analytics'],
                        ['label' => 'Maintenance'],
                        ['label' => 'Reports'],
                        ['label' => 'Contact'],
                    ];
                @endphp
                @foreach($mobileLinks as $index => $link)
                    <div x-show="open"
                         x-cloak
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 translate-x-4 scale-95"
                         x-transition:enter-end="opacity-100 translate-x-0 scale-100"
                         style="transition-delay: {{ $index * 50 }}ms">
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="block py-3 px-4 bg-gradient-to-br from-cyan-600 to-blue-700 w-full text-white font-medium rounded-lg shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200">
                            {{ $link['label'] }}
                        </x-nav-link>
                    </div>
                @endforeach
            </div>

            <!-- Mobile User Section -->
            @auth
                <div class="space-y-4">
                    <div class="group relative p-4 bg-gradient-to-r from-cyan-500/20 via-blue-500/20 to-slate-500/20 rounded-2xl border border-cyan-500/30 backdrop-blur-sm">
                        <div class="flex items-center space-x-4">
                            <div class="relative">
                                <img src="{{ Auth::user()->profile_photo ? asset('storage/' . Auth::user()->profile_photo) : 'https://ui-avatars.com/api/?background=0EA5E9&color=fff&name=' . urlencode(Auth::user()->name) }}" class="w-12 h-12 rounded-full object-cover border-2 border-cyan-400">
                                <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-cyan-400 rounded-full border-2 border-slate-900 animate-pulse"></div>
                            </div>
                            <div class="flex-1">
                                <div class="font-bold text-white capitalize text-lg">{{ Auth::user()->name }}</div>
                                <div class="text-sm text-cyan-400 font-medium">{{ auth()->user()->productivity_score ?? 0 }} Productivity Score</div>
                                <div class="text-xs text-gray-400">Level {{ auth()->user()->efficiency_level ?? 3 }}</div>
                            </div>
                            <button @click="showStats = !showStats" class="p-2 rounded-xl bg-white/10 hover:bg-white/20 transition">
                                <svg class="w-5 h-5 text-cyan-400 transition-transform" :class="showStats ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg>
                            </button>
                        </div>
                    </div>
                    <div class="space-y-2" x-show="showStats" x-collapse>
                        <a href="{{ route('profile.edit') }}" class="flex items-center space-x-3 w-full px-4 py-3 rounded-xl bg-slate-800/50 border border-slate-700 text-gray-300 hover:bg-slate-700 transition">Profile Settings</a>
                        <form method="POST" action="{{ route('logout') }}">@csrf<button type="submit" class="flex items-center space-x-3 w-full px-4 py-3 rounded-xl bg-red-500/20 border border-red-500/30 text-red-400 hover:bg-red-500/30 transition">Sign Out</button></form>
                    </div>
                </div>
            @else
                <div class="space-y-3">
                    <a href="{{ route('login') }}" class="block w-full px-4 py-3 text-center bg-slate-700 hover:bg-slate-600 text-white rounded-xl font-semibold transition">Login</a>
                    <a href="{{ route('register') }}" class="block w-full px-6 py-3 text-center bg-gradient-to-r from-cyan-500 to-blue-600 text-white rounded-xl font-semibold transition shadow-lg">Sign Up</a>
                </div>
            @endauth
        </div>
    </div>
</nav>

<style>
    [x-cloak] { display: none !important; }
</style>