<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EcoTrack') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans antialiased bg-slate-950 text-gray-100 selection:bg-emerald-500/30 selection:text-emerald-200 overflow-x-hidden">

    <!-- 🌌 Gradient Background Layer -->
    <div class="fixed inset-0 -z-10">
        <!-- Base gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-emerald-950/20"></div>
        
        <!-- Animated background elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -left-40 w-80 h-80 bg-emerald-500/5 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-sky-500/5 rounded-full blur-3xl animate-pulse" style="animation-delay: 3s;"></div>
            <div class="absolute top-1/2 left-1/3 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-purple-500/3 rounded-full blur-3xl animate-pulse" style="animation-delay: 5s;"></div>
        </div>
        
        <!-- Grid pattern overlay -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%2310b981" fill-opacity="0.03"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
    </div>

    <!-- 🪄 Dynamic Page Container -->
    <div class="min-h-screen relative z-10"
         x-data="{ 
             isAuthPage: false,
             init() {
                 this.isAuthPage = window.location.pathname.includes('/login') || 
                                  window.location.pathname.includes('/register') ||
                                  document.querySelector('.min-h-screen.flex') !== null;
             }
         }"
         :class="isAuthPage ? '' : 'flex flex-col sm:justify-center items-center pt-6 sm:pt-0'">
        
        <div x-show="!isAuthPage" 
             x-transition
             class="w-full max-w-2xl px-8 py-8 
                    bg-slate-900/60 backdrop-blur-lg 
                    shadow-[0_0_30px_-10px_rgba(0,255,150,0.3)]
                    ring-1 ring-emerald-700/30 
                    rounded-2xl">
            {{ $slot }}
        </div>

        <div x-show="isAuthPage" 
             x-transition
             class="w-full">
            {{ $slot }}
        </div>

        <footer x-show="!isAuthPage" 
                x-transition
                class="mt-6 text-xs text-slate-500/80 text-center">
            <p>
                © {{ date('Y') }} <span class="text-emerald-400 font-medium">EcoTrack</span>. 
                Designed for a Sustainable Future 🌱
            </p>
        </footer>
    </div>

    @livewireScripts
</body>
</html>