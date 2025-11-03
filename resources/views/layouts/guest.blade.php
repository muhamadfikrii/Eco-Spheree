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

<body class="font-sans antialiased bg-slate-950 text-gray-100 selection:bg-emerald-500/30 selection:text-emerald-200">

    <!-- 🌌 Gradient Background Layer -->
    <div class="fixed inset-0 bg-gradient-to-b from-slate-950 via-slate-900 to-slate-800"></div>

    <!-- ✨ Subtle Glows -->
    <div class="fixed top-0 left-0 w-96 h-96 bg-emerald-400/10 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 animate-pulse"></div>
    <div class="fixed bottom-0 right-0 w-80 h-80 bg-green-500/10 rounded-full blur-3xl translate-x-1/3 translate-y-1/3 animate-pulse"></div>

    <!-- 🪶 Page Container -->
    <div class="min-h-screen relative flex flex-col sm:justify-center items-center pt-6 sm:pt-0 z-10">
        
        <!-- 🌱 Logo -->
        <div class="mb-6 text-center">
            <a href="/" class="flex flex-col items-center">
                <x-application-logo class="w-16 h-16 text-emerald-400" />
                <h1 class="mt-3 text-xl font-semibold text-emerald-400 tracking-wide">EcoTrack</h1>
                <p class="text-sm text-emerald-200/70">Jejak Hijau untuk Masa Depan 🌍</p>
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-4 px-8 py-8 
                    bg-slate-900/60 backdrop-blur-lg 
                    shadow-[0_0_30px_-10px_rgba(0,255,150,0.3)]
                    ring-1 ring-emerald-700/30 
                    rounded-2xl">
            {{ $slot }}
        </div>

        <!-- 🌾 Footer -->
        <p class="mt-6 text-xs text-slate-500/80">
            © {{ date('Y') }} <span class="text-emerald-400 font-medium">EcoTrack</span>. 
            Designed for a Sustainable Future 🌱
        </p>
    </div>

    @livewireScripts
</body>
</html>
