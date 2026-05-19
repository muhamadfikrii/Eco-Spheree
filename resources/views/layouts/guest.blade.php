<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'EcoTrack') }}</title>

    
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
        rel="stylesheet"
    />

    
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body
    class="overflow-x-hidden bg-slate-950 font-sans text-gray-100 antialiased selection:bg-emerald-500/30 selection:text-emerald-200"
>
    
    <div class="fixed inset-0 -z-10">
        
        <div
            class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-emerald-950/20"
        ></div>

        
        <div class="absolute inset-0 overflow-hidden">
            <div
                class="absolute -left-40 -top-40 h-80 w-80 animate-pulse rounded-full bg-emerald-500/5 blur-3xl"
            ></div>
            <div
                class="absolute -bottom-40 -right-40 h-96 w-96 animate-pulse rounded-full bg-sky-500/5 blur-3xl"
                style="animation-delay: 3s"
            ></div>
            <div
                class="bg-purple-500/3 absolute left-1/3 top-1/2 h-96 w-96 -translate-x-1/2 -translate-y-1/2 transform animate-pulse rounded-full blur-3xl"
                style="animation-delay: 5s"
            ></div>
        </div>

        
        <div
            class="bg-[url('data:image/svg+xml,%3Csvg width= absolute inset-0"
            60"
            height="60"
            viewBox="0 0 60 60"
            xmlns="http://www.w3.org/2000/svg"
            %3E%3Cg
            fill="none"
            fill-rule="evenodd"
            %3E%3Cg
            fill="%2310b981"
            fill-opacity="0.03"
            %3E%3Cpath
            d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"
        />
        %3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20">
    </div>
    </div>

    
    <div
        class="relative z-10 min-h-screen"
        x-data="{
            isAuthPage: false,
            init() {
                this.isAuthPage =
                    window.location.pathname.includes('/login') ||
                    window.location.pathname.includes('/register') ||
                    document.querySelector('.min-h-screen.flex') !== null;
            },
        }"
        :class="isAuthPage
            ? ''
            : 'flex flex-col sm:justify-center items-center pt-6 sm:pt-0'"
    >
        <div
            x-show="!isAuthPage"
            x-transition
            class="w-full max-w-2xl rounded-2xl bg-slate-900/60 px-8 py-8 shadow-[0_0_30px_-10px_rgba(0,255,150,0.3)] ring-1 ring-emerald-700/30 backdrop-blur-lg"
        >
            {{ $slot }}
        </div>

        <div x-show="isAuthPage" x-transition class="w-full">{{ $slot }}</div>

        <footer
            x-show="!isAuthPage"
            x-transition
            class="mt-6 text-center text-xs text-slate-500/80"
        >
            <p>© {{ date('Y') }} <span class="font-medium text-emerald-400">EcoTrack</span>. Designed for a Sustainable Future 🌱</p>
        </footer>
    </div>

    @livewireScripts
</body>
</html>
