<nav
    x-data="{ open: false, scrolled: false, active: '' }"
    x-init="
        window.addEventListener('scroll', () => {
            scrolled = window.scrollY > 10;
        });
        // Set active berdasarkan URL
        let path = window.location.pathname;
        if (path === '/' || path === '/home') active = 'dashboard';
        else if (path === '/insights' || path === '/insights')
            active = 'insights';
        else if (path === '/health') active = 'health';
        else if (path === '/resources') active = 'resources';
        else if (path === '/contact') active = 'contact';
        else active = 'dashboard';
    "
    :class="scrolled
        ? 'bg-slate-900/80 backdrop-blur-lg border-b border-slate-800 shadow-lg py-3'
        : 'bg-transparent py-5'"
    class="fixed left-0 top-0 z-50 w-full transition-all duration-300"
>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <a href="{{ route('home') }}" class="group flex items-center gap-2">
                <div
                    class="flex h-8 w-8 items-center justify-center rounded-lg bg-gradient-to-br from-cyan-400 to-blue-500 shadow-lg shadow-cyan-500/20"
                >
                    <i class="fas fa-microchip text-sm text-white"></i>
                </div>
                <span class="text-xl font-semibold tracking-tight text-white"
                    >Nova<span class="text-cyan-400">Forge</span></span
                >
            </a>

            <div class="hidden items-center gap-1 md:flex">
                <a
                    href="{{ route('home') }}"
                    :class="active === 'dashboard'
                        ? 'bg-cyan-500/10 text-cyan-400'
                        : 'text-gray-300 hover:text-white hover:bg-white/5'"
                    class="rounded-lg px-4 py-2 text-sm font-medium transition-all duration-200"
                    >Dashboard</a
                >
                <a
                    href="{{ route('insights') }}"
                    :class="active === 'insights'
                        ? 'bg-cyan-500/10 text-cyan-400'
                        : 'text-gray-300 hover:text-white hover:bg-white/5'"
                    class="rounded-lg px-4 py-2 text-sm font-medium transition-all duration-200"
                    >Insights</a
                >
                <a
                    href="{{ route('health') }}"
                    :class="active === 'health'
                        ? 'bg-cyan-500/10 text-cyan-400'
                        : 'text-gray-300 hover:text-white hover:bg-white/5'"
                    class="rounded-lg px-4 py-2 text-sm font-medium transition-all duration-200"
                    >Health</a
                >
                <a
                    href="{{ route('resources') }}"
                    :class="active === 'resources'
                        ? 'bg-cyan-500/10 text-cyan-400'
                        : 'text-gray-300 hover:text-white hover:bg-white/5'"
                    class="rounded-lg px-4 py-2 text-sm font-medium transition-all duration-200"
                    >Resources</a
                >
                <a
                    href="{{ route('contact') }}"
                    :class="active === 'contact'
                        ? 'bg-cyan-500/10 text-cyan-400'
                        : 'text-gray-300 hover:text-white hover:bg-white/5'"
                    class="rounded-lg px-4 py-2 text-sm font-medium transition-all duration-200"
                    >Contact</a
                >
            </div>

            <div class="hidden items-center gap-4 md:flex">
                <div
                    class="flex items-center gap-2 rounded-full border border-slate-700 bg-slate-800/50 px-3 py-1.5 backdrop-blur-sm"
                >
                    <span class="relative flex h-2 w-2"
                        ><span
                            class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-75"
                        ></span
                        ><span
                            class="relative inline-flex h-2 w-2 rounded-full bg-emerald-500"
                        ></span
                    ></span>
                    <span class="font-mono text-xs text-emerald-400">LIVE</span>
                    <span class="hidden text-xs text-gray-400 lg:inline"
                        >|</span
                    >
                    <span class="hidden text-xs text-cyan-400 lg:inline"
                        >98.7% OEE</span
                    >
                </div>
                <a
                    href="#"
                    class="relative inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-cyan-500 to-blue-600 px-4 py-2 text-sm font-medium text-white transition-all hover:-translate-y-0.5 hover:shadow-lg"
                >
                    <i class="fas fa-chart-line text-xs"></i> Demo
                </a>
            </div>

            <button
                @click="open = !open"
                class="rounded-lg border border-slate-700 bg-white/5 p-2 text-white md:hidden"
            >
                <svg x-show="!open" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                <svg x-show="open" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
    </div>

    <div
        x-show="open"
        @click.away="open = false"
        x-transition
        class="absolute left-0 top-full w-full border-t border-slate-800 bg-slate-900/95 backdrop-blur-xl md:hidden"
    >
        <div class="space-y-1 px-4 py-4">
            <a
                href="{{ route('home') }}"
                class="block rounded-lg px-4 py-3"
                :class="active === 'dashboard'
                    ? 'text-cyan-400 bg-cyan-500/10'
                    : 'text-gray-300 hover:bg-white/5'"
                >Dashboard</a
            >
            <a
                href="{{ route('insights') }}"
                class="block rounded-lg px-4 py-3"
                :class="active === 'insights'
                    ? 'text-cyan-400 bg-cyan-500/10'
                    : 'text-gray-300 hover:bg-white/5'"
                >Insights</a
            >
            <a
                href="#"
                class="block rounded-lg px-4 py-3"
                :class="active === 'health'
                    ? 'text-cyan-400 bg-cyan-500/10'
                    : 'text-gray-300 hover:bg-white/5'"
                >Health</a
            >
            <a
                href="#"
                class="block rounded-lg px-4 py-3"
                :class="active === 'resources'
                    ? 'text-cyan-400 bg-cyan-500/10'
                    : 'text-gray-300 hover:bg-white/5'"
                >Resources</a
            >
            <a
                href="#"
                class="block rounded-lg px-4 py-3"
                :class="active === 'contact'
                    ? 'text-cyan-400 bg-cyan-500/10'
                    : 'text-gray-300 hover:bg-white/5'"
                >Contact</a
            >
            <div class="mt-2 border-t border-slate-800 pt-4">
                <a
                    href="#"
                    class="flex w-full items-center justify-center gap-2 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 py-2.5 text-sm font-medium text-white"
                    >Live Demo</a
                >
            </div>
        </div>
    </div>
</nav>
