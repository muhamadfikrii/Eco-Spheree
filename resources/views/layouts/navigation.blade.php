<nav x-data="{ open: false, scrolled: false, active: '' }" 
     x-init="
        window.addEventListener('scroll', () => { scrolled = window.scrollY > 10 });
        // Set active berdasarkan URL
        let path = window.location.pathname;
        if (path === '/' || path === '/home') active = 'dashboard';
        else if (path === '/insights' || path === '/insights') active = 'insights';
        else if (path === '/health') active = 'health';
        else if (path === '/resources') active = 'resources';
        else if (path === '/contact') active = 'contact';
        else active = 'dashboard';
     "
     :class="scrolled ? 'bg-slate-900/80 backdrop-blur-lg border-b border-slate-800 shadow-lg py-3' : 'bg-transparent py-5'"
     class="fixed top-0 left-0 w-full z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                <div class="w-8 h-8 bg-gradient-to-br from-cyan-400 to-blue-500 rounded-lg flex items-center justify-center shadow-lg shadow-cyan-500/20">
                    <i class="fas fa-microchip text-white text-sm"></i>
                </div>
                <span class="text-xl font-semibold tracking-tight text-white">Nova<span class="text-cyan-400">Forge</span></span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-1">
                <a href="{{ route('home') }}" 
                   :class="active === 'dashboard' ? 'bg-cyan-500/10 text-cyan-400' : 'text-gray-300 hover:text-white hover:bg-white/5'"
                   class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200">Dashboard</a>
                <a href="{{ route('insights') }}" 
                   :class="active === 'insights' ? 'bg-cyan-500/10 text-cyan-400' : 'text-gray-300 hover:text-white hover:bg-white/5'"
                   class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200">Insights</a>
                <a href="{{ route('health') }}" 
                   :class="active === 'health' ? 'bg-cyan-500/10 text-cyan-400' : 'text-gray-300 hover:text-white hover:bg-white/5'"
                   class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200">Health</a>
                <a href="#" 
                   :class="active === 'resources' ? 'bg-cyan-500/10 text-cyan-400' : 'text-gray-300 hover:text-white hover:bg-white/5'"
                   class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200">Resources</a>
                <a href="#" 
                   :class="active === 'contact' ? 'bg-cyan-500/10 text-cyan-400' : 'text-gray-300 hover:text-white hover:bg-white/5'"
                   class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200">Contact</a>
            </div>

            <!-- Right Side: Status + CTA (tidak berubah) -->
            <div class="hidden md:flex items-center gap-4">
                <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-800/50 backdrop-blur-sm border border-slate-700">
                    <span class="relative flex h-2 w-2"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span><span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span></span>
                    <span class="text-xs font-mono text-emerald-400">LIVE</span>
                    <span class="text-xs text-gray-400 hidden lg:inline">|</span>
                    <span class="text-xs text-cyan-400 hidden lg:inline">98.7% OEE</span>
                </div>
                <a href="#" class="relative inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r from-cyan-500 to-blue-600 text-white text-sm font-medium hover:shadow-lg transition-all hover:-translate-y-0.5">
                    <i class="fas fa-chart-line text-xs"></i> Demo
                </a>
            </div>

            <!-- Mobile button -->
            <button @click="open = !open" class="md:hidden p-2 rounded-lg bg-white/5 border border-slate-700 text-white">
                <svg x-show="!open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                <svg x-show="open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu (sama dengan sebelumnya, hanya tambahkan binding class) -->
    <div x-show="open" @click.away="open = false" x-transition class="md:hidden absolute top-full left-0 w-full bg-slate-900/95 backdrop-blur-xl border-t border-slate-800">
        <div class="px-4 py-4 space-y-1">
            <a href="{{ route('home') }}" class="block px-4 py-3 rounded-lg" :class="active === 'dashboard' ? 'text-cyan-400 bg-cyan-500/10' : 'text-gray-300 hover:bg-white/5'">Dashboard</a>
            <a href="{{ route('insights') }}" class="block px-4 py-3 rounded-lg" :class="active === 'insights' ? 'text-cyan-400 bg-cyan-500/10' : 'text-gray-300 hover:bg-white/5'">Insights</a>
            <a href="#" class="block px-4 py-3 rounded-lg" :class="active === 'health' ? 'text-cyan-400 bg-cyan-500/10' : 'text-gray-300 hover:bg-white/5'">Health</a>
            <a href="#" class="block px-4 py-3 rounded-lg" :class="active === 'resources' ? 'text-cyan-400 bg-cyan-500/10' : 'text-gray-300 hover:bg-white/5'">Resources</a>
            <a href="#" class="block px-4 py-3 rounded-lg" :class="active === 'contact' ? 'text-cyan-400 bg-cyan-500/10' : 'text-gray-300 hover:bg-white/5'">Contact</a>
            <div class="pt-4 mt-2 border-t border-slate-800">
                <a href="#" class="flex items-center justify-center gap-2 w-full py-2.5 bg-gradient-to-r from-cyan-500 to-blue-600 text-white rounded-lg text-sm font-medium">Live Demo</a>
            </div>
        </div>
    </div>
</nav>