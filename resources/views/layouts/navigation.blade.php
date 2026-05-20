<style>
    /* Soft pulse animation for live indicator */
    @keyframes soft-pulse {
        0% {
            opacity: 0.5;
            transform: scale(0.8);
            box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.4);
        }
        70% {
            opacity: 1;
            transform: scale(1.2);
            box-shadow: 0 0 0 6px rgba(16, 185, 129, 0);
        }
        100% {
            opacity: 0.5;
            transform: scale(0.8);
            box-shadow: 0 0 0 0 rgba(16, 185, 129, 0);
        }
    }
    .live-dot {
        animation: soft-pulse 2s ease-in-out infinite;
        background-color: #10b981;
        border-radius: 50%;
        display: inline-block;
    }
</style>

<nav
    x-data="{ open: false, scrolled: false, active: '' }"
    x-init="
        window.addEventListener('scroll', () => {
            scrolled = window.scrollY > 10;
        });
        let path = window.location.pathname;
        if (path === '/' || path === '/home') active = 'dashboard';
        else if (path === '/insights') active = 'insights';
        else if (path === '/health') active = 'health';
        else if (path === '/resources') active = 'resources';
        else if (path === '/contact') active = 'contact';
        else active = 'dashboard';
    "
    @keydown.escape.window="open = false"
    :class="scrolled
        ? 'bg-slate-900/80 backdrop-blur-lg border-b border-slate-800/80 shadow-xl py-3'
        : 'bg-transparent py-5'"
    class="fixed left-0 top-0 z-50 w-full transition-all duration-300"
>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <!-- Logo -->
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

            <!-- Menu Desktop -->
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

            <!-- Indikator dengan dot hidup -->
            <div class="hidden items-center gap-4 md:flex">
                <div
                    class="flex items-center gap-2 rounded-full border border-slate-700/60 bg-slate-800/40 px-3 py-1.5 backdrop-blur-sm"
                >
                    <span class="relative flex h-2.5 w-2.5">
                        <span class="live-dot absolute h-full w-full"></span>
                    </span>
                    <span class="text-xs font-medium text-gray-300"
                        >Live System</span
                    >
                </div>
                <!-- Tidak ada tombol demo -->
            </div>

            <!-- Mobile menu button -->
            <button
                @click="open = !open"
                class="inline-flex items-center justify-center rounded-lg border border-slate-700 bg-white/5 p-2 text-white md:hidden"
                aria-label="Open menu"
            >
                <svg x-show="!open" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                <svg x-show="open" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
    </div>

    <!-- Mobile menu -->
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
                href="{{ route('health') }}"
                class="block rounded-lg px-4 py-3"
                :class="active === 'health'
                    ? 'text-cyan-400 bg-cyan-500/10'
                    : 'text-gray-300 hover:bg-white/5'"
                >Health</a
            >
            <a
                href="{{ route('resources') }}"
                class="block rounded-lg px-4 py-3"
                :class="active === 'resources'
                    ? 'text-cyan-400 bg-cyan-500/10'
                    : 'text-gray-300 hover:bg-white/5'"
                >Resources</a
            >
            <a
                href="{{ route('contact') }}"
                class="block rounded-lg px-4 py-3"
                :class="active === 'contact'
                    ? 'text-cyan-400 bg-cyan-500/10'
                    : 'text-gray-300 hover:bg-white/5'"
                >Contact</a
            >
        </div>
    </div>
</nav>
