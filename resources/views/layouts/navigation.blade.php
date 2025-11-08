<div>
    <nav 
        x-data="{ 
            open: false, 
            scrolled: false,
            activeSection: 'home'
        }"
        x-init="
            // Scroll detection
            window.addEventListener('scroll', () => {
                scrolled = window.scrollY > 10;
            });
            
            // Section detection for active nav
            const updateActiveSection = () => {
                const sections = ['home', 'explore', 'challenge', 'ecotrack', 'leaderboard'];
                const scrollPosition = window.scrollY + 100;
                
                for (const section of sections) {
                    const element = document.getElementById(section);
                    if (element) {
                        const offsetTop = element.offsetTop;
                        const offsetHeight = element.offsetHeight;
                        
                        if (scrollPosition >= offsetTop && scrollPosition < offsetTop + offsetHeight) {
                            activeSection = section;
                            break;
                        }
                    }
                }
            };
            
            window.addEventListener('scroll', updateActiveSection);
            updateActiveSection(); // Initial check
        "
        :class="scrolled 
            ? 'bg-slate-900/95 backdrop-blur-xl border-b border-emerald-500/20 shadow-2xl shadow-emerald-500/10 py-0' 
            : 'bg-gradient-to-b from-slate-900/80 to-transparent border-b border-emerald-500/10 py-3'"
        class="fixed top-0 left-0 w-full z-50 transition-all duration-500 text-slate-200"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                
                <!-- Logo & Brand -->
                <div class="flex items-center space-x-3">
                    @include('components.icon')
                    <div class="hidden sm:block">
                        <span class="text-xl font-bold bg-gradient-to-r from-emerald-400 to-cyan-400 bg-clip-text text-transparent">
                            EcoTrack
                        </span>
                        <div class="h-1 w-8 bg-gradient-to-r from-emerald-400 to-cyan-400 rounded-full mt-1"></div>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-1 bg-slate-800/60 px-6 py-2 rounded-2xl backdrop-blur-xl border border-slate-700/50 font-medium text-[15px] shadow-lg shadow-black/20">
                    <a 
                        href="#home" 
                        @click="activeSection = 'home'; $event.preventDefault(); document.getElementById('home')?.scrollIntoView({behavior: 'smooth'})"
                        class="relative px-4 py-2 rounded-xl transition-all duration-300"
                        :class="activeSection === 'home' 
                            ? 'text-emerald-400 bg-emerald-500/10 shadow-lg shadow-emerald-500/10' 
                            : 'text-slate-300 hover:text-emerald-300 hover:bg-slate-700/50'"
                    >
                        <i class="fas fa-home mr-2 text-sm"></i>
                        Home
                        <template x-if="activeSection === 'home'">
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-emerald-400 rounded-full"></div>
                        </template>
                    </a>

                    <a 
                        href="#explore" 
                        @click="activeSection = 'explore'; $event.preventDefault(); document.getElementById('explore')?.scrollIntoView({behavior: 'smooth'})"
                        class="relative px-4 py-2 rounded-xl transition-all duration-300"
                        :class="activeSection === 'explore' 
                            ? 'text-cyan-400 bg-cyan-500/10 shadow-lg shadow-cyan-500/10' 
                            : 'text-slate-300 hover:text-cyan-300 hover:bg-slate-700/50'"
                    >
                        <i class="fas fa-compass mr-2 text-sm"></i>
                        Eksplor
                        <template x-if="activeSection === 'explore'">
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-cyan-400 rounded-full"></div>
                        </template>
                    </a>

                    <a 
                        href="#challenge" 
                        @click="activeSection = 'challenge'; $event.preventDefault(); document.getElementById('challenge')?.scrollIntoView({behavior: 'smooth'})"
                        class="relative px-4 py-2 rounded-xl transition-all duration-300"
                        :class="activeSection === 'challenge' 
                            ? 'text-purple-400 bg-purple-500/10 shadow-lg shadow-purple-500/10' 
                            : 'text-slate-300 hover:text-purple-300 hover:bg-slate-700/50'"
                    >
                        <i class="fas fa-trophy mr-2 text-sm"></i>
                        Challenge
                        <template x-if="activeSection === 'challenge'">
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-purple-400 rounded-full"></div>
                        </template>
                    </a>

                    <a 
                        href="#ecotrack" 
                        @click="activeSection = 'ecotrack'; $event.preventDefault(); document.getElementById('ecotrack')?.scrollIntoView({behavior: 'smooth'})"
                        class="relative px-4 py-2 rounded-xl transition-all duration-300"
                        :class="activeSection === 'ecotrack' 
                            ? 'text-green-400 bg-green-500/10 shadow-lg shadow-green-500/10' 
                            : 'text-slate-300 hover:text-green-300 hover:bg-slate-700/50'"
                    >
                        <i class="fas fa-leaf mr-2 text-sm"></i>
                        Eco-Track
                        <template x-if="activeSection === 'ecotrack'">
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-green-400 rounded-full"></div>
                        </template>
                    </a>

                    <a 
                        href="#leaderboard" 
                        @click="activeSection = 'leaderboard'; $event.preventDefault(); document.getElementById('leaderboard')?.scrollIntoView({behavior: 'smooth'})"
                        class="relative px-4 py-2 rounded-xl transition-all duration-300"
                        :class="activeSection === 'leaderboard' 
                            ? 'text-yellow-400 bg-yellow-500/10 shadow-lg shadow-yellow-500/10' 
                            : 'text-slate-300 hover:text-yellow-300 hover:bg-slate-700/50'"
                    >
                        <i class="fas fa-chart-line mr-2 text-sm"></i>
                        Leaderboard
                        <template x-if="activeSection === 'leaderboard'">
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-yellow-400 rounded-full"></div>
                        </template>
                    </a>
                </div>

                <!-- Auth Buttons & User Menu -->
                <div class="hidden md:flex items-center space-x-3">
                    @auth
                        <div class="relative" x-data="{ open: false }">
                            <button 
                                @click="open = !open"
                                class="inline-flex items-center space-x-3 bg-slate-800/60 hover:bg-slate-700/60 rounded-2xl px-4 py-2.5 transition-all duration-300 border border-slate-700/50 shadow-lg shadow-black/20 group"
                            >
                                <div class="w-8 h-8 bg-gradient-to-br from-emerald-500 to-cyan-500 rounded-full flex items-center justify-center text-white font-semibold text-sm">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </div>
                                <div class="text-left">
                                    <div class="text-slate-200 font-semibold text-sm group-hover:text-white transition-colors">
                                        {{ Auth::user()->name }}
                                    </div>
                                    <div class="text-xs text-slate-400 group-hover:text-slate-300 transition-colors">
                                        {{ Auth::user()->email }}
                                    </div>
                                </div>
                                <i class="fas fa-chevron-down text-slate-400 text-xs group-hover:text-emerald-400 transition-colors"></i>
                            </button>

                            <!-- Dropdown Menu -->
                            <div 
                                x-show="open" 
                                @click.outside="open = false"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                class="absolute right-0 mt-2 w-64 bg-slate-800/95 backdrop-blur-xl rounded-2xl shadow-2xl shadow-black/30 border border-slate-700/50 py-2 z-50"
                            >
                                <div class="px-4 py-3 border-b border-slate-700">
                                    <div class="text-sm text-slate-200 font-semibold">{{ Auth::user()->name }}</div>
                                    <div class="text-xs text-slate-400">{{ Auth::user()->email }}</div>
                                </div>
                                
                                <a href="{{ route('profile.edit') }}" class="flex items-center space-x-3 px-4 py-3 text-slate-300 hover:bg-slate-700/50 transition">
                                    <i class="fas fa-user text-emerald-400 w-4"></i>
                                    <span>Profile</span>
                                </a>
                                
                                <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 px-4 py-3 text-slate-300 hover:bg-slate-700/50 transition">
                                    <i class="fas fa-chart-bar text-cyan-400 w-4"></i>
                                    <span>Dashboard</span>
                                </a>
                                
                                <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 px-4 py-3 text-slate-300 hover:bg-slate-700/50 transition">
                                    <i class="fas fa-cog text-purple-400 w-4"></i>
                                    <span>Settings</span>
                                </a>
                                
                                <div class="border-t border-slate-700 my-2"></div>
                                
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button 
                                        type="submit"
                                        class="flex items-center space-x-3 w-full px-4 py-3 text-red-400 hover:bg-red-500/10 transition text-left"
                                    >
                                        <i class="fas fa-sign-out-alt w-4"></i>
                                        <span>Logout</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="flex items-center space-x-3">
                            <a href="{{ route('login') }}" 
                                class="group relative px-6 py-2.5 rounded-xl font-semibold text-[15px] transition-all duration-300 overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r from-emerald-600 to-cyan-600 rounded-xl"></div>
                                <div class="absolute inset-0 bg-gradient-to-r from-emerald-500 to-cyan-500 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <span class="relative text-white flex items-center space-x-2">
                                    <i class="fas fa-sign-in-alt text-sm"></i>
                                    <span>Login</span>
                                </span>
                            </a>
                            <a href="{{ route('register') }}" 
                                class="group px-6 py-2.5 bg-slate-800/60 hover:bg-slate-700/80 rounded-xl font-semibold text-slate-200 text-[15px] transition-all duration-300 border border-slate-700/50 shadow-lg shadow-black/20 hover:shadow-emerald-500/5">
                                <span class="flex items-center space-x-2">
                                    <i class="fas fa-user-plus text-sm text-emerald-400"></i>
                                    <span>Sign Up</span>
                                </span>
                            </a>
                        </div>
                    @endauth
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center space-x-3">

                    <button 
                        @click="open = !open" 
                        class="relative z-50 w-12 h-12 flex items-center justify-center rounded-2xl bg-slate-800/60 hover:bg-slate-700/80 transition-all duration-300 border border-slate-700/50 shadow-lg"
                        aria-label="Toggle menu"
                    >
                        <div class="relative w-6 h-6">
                            <span :class="open ? 'rotate-45 translate-y-1' : '-translate-y-1'" 
                                class="absolute block w-6 h-0.5 bg-slate-300 transition-all duration-300"></span>
                            <span :class="open ? 'opacity-0' : 'opacity-100'" 
                                class="absolute block w-6 h-0.5 bg-slate-300 transition-all duration-300 top-1/2 -translate-y-1/2"></span>
                            <span :class="open ? '-rotate-45 -translate-y-1' : 'translate-y-1'" 
                                class="absolute block w-6 h-0.5 bg-slate-300 transition-all duration-300 bottom-0"></span>
                        </div>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div 
            x-show="open" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            class="md:hidden bg-slate-900/95 backdrop-blur-xl border-t border-slate-800 px-6 py-6 space-y-1 shadow-2xl shadow-black/20"
        >
            <a href="#home" 
            @click="open = false; activeSection = 'home'; $event.preventDefault(); document.getElementById('home')?.scrollIntoView({behavior: 'smooth'})"
            class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300"
            :class="activeSection === 'home' ? 'bg-emerald-500/10 text-emerald-400' : 'text-slate-300 hover:bg-slate-800/60'">
                <i class="fas fa-home w-5 text-center"></i>
                <span>Home</span>
            </a>

            <a href="#explore" 
            @click="open = false; activeSection = 'explore'; $event.preventDefault(); document.getElementById('explore')?.scrollIntoView({behavior: 'smooth'})"
            class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300"
            :class="activeSection === 'explore' ? 'bg-cyan-500/10 text-cyan-400' : 'text-slate-300 hover:bg-slate-800/60'">
                <i class="fas fa-compass w-5 text-center"></i>
                <span>Eksplor</span>
            </a>

            <a href="#challenge" 
            @click="open = false; activeSection = 'challenge'; $event.preventDefault(); document.getElementById('challenge')?.scrollIntoView({behavior: 'smooth'})"
            class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300"
            :class="activeSection === 'challenge' ? 'bg-purple-500/10 text-purple-400' : 'text-slate-300 hover:bg-slate-800/60'">
                <i class="fas fa-trophy w-5 text-center"></i>
                <span>Challenge</span>
            </a>

            <a href="#ecotrack" 
            @click="open = false; activeSection = 'ecotrack'; $event.preventDefault(); document.getElementById('ecotrack')?.scrollIntoView({behavior: 'smooth'})"
            class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300"
            :class="activeSection === 'ecotrack' ? 'bg-green-500/10 text-green-400' : 'text-slate-300 hover:bg-slate-800/60'">
                <i class="fas fa-leaf w-5 text-center"></i>
                <span>Eco-Track</span>
            </a>

            <a href="#leaderboard" 
            @click="open = false; activeSection = 'leaderboard'; $event.preventDefault(); document.getElementById('leaderboard')?.scrollIntoView({behavior: 'smooth'})"
            class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300"
            :class="activeSection === 'leaderboard' ? 'bg-yellow-500/10 text-yellow-400' : 'text-slate-300 hover:bg-slate-800/60'">
                <i class="fas fa-chart-line w-5 text-center"></i>
                <span>Leaderboard</span>
            </a>

            <div class="border-t border-slate-800 pt-4 mt-4 space-y-3">
                @auth
                    <div class="px-4 py-2">
                        <div class="text-slate-200 font-semibold text-sm">{{ Auth::user()->name }}</div>
                        <div class="text-slate-400 text-xs">{{ Auth::user()->email }}</div>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-slate-300 hover:bg-slate-800/60 transition">
                        <i class="fas fa-user w-5 text-center text-emerald-400"></i>
                        <span>Profile</span>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button 
                            type="submit"
                            class="flex items-center space-x-3 w-full px-4 py-3 rounded-xl text-red-400 hover:bg-red-500/10 transition text-left"
                        >
                            <i class="fas fa-sign-out-alt w-5 text-center"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                @else
                    <div class="space-y-3">
                        <a href="{{ route('login') }}" 
                        class="block px-4 py-3 bg-gradient-to-r from-emerald-600 to-cyan-600 hover:from-emerald-500 hover:to-cyan-500 rounded-xl text-center font-semibold text-white shadow-lg shadow-emerald-500/20 transition-all">
                            <i class="fas fa-sign-in-alt mr-2"></i>
                            Login
                        </a>
                        <a href="{{ route('register') }}" 
                        class="block px-4 py-3 bg-slate-800 hover:bg-slate-700 rounded-xl text-center font-semibold text-slate-200 border border-slate-700 transition-all">
                            <i class="fas fa-user-plus mr-2"></i>
                            Sign Up
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>
</div>