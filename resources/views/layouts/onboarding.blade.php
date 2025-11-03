<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Onboarding' }} | EcoTrack</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }

        /* Definisi Animasi Kustom */
        @keyframes float {
            0%, 100% { transform: translateY(0px) translateX(0px); }
            33% { transform: translateY(-20px) translateX(10px); }
            66% { transform: translateY(10px) translateX(-10px); }
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes grow {
            from { transform: scale(0); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        .animate-grow {
            animation: grow 1s ease-out;
        }
    </style>

    @livewireStyles
</head>

<body class="font-sans antialiased bg-slate-950 text-gray-100 selection:bg-emerald-500/30 selection:text-emerald-200 overflow-x-hidden">

    <!-- 🌌 Gradient Background Layer -->
    <div class="fixed inset-0 bg-gradient-to-br from-slate-950 via-slate-900/95 to-slate-800 z-0"></div>

    <!-- ✨ Subtle Glows -->
    <div class="fixed top-[-10%] left-[-10%] w-[500px] h-[500px] bg-emerald-500/10 rounded-full blur-[160px] animate-pulse"></div>
    <div class="fixed bottom-[-10%] right-[-10%] w-[400px] h-[400px] bg-green-400/10 rounded-full blur-[130px] animate-pulse"></div>

    <!-- 🪶 Page Container -->
    <div class="relative z-10 flex flex-col items-center justify-center min-h-screen px-6 py-10 text-center">
        
        <!-- 🌱 Logo -->
        <div class="mb-10 text-center">
            <a href="/" class="inline-flex flex-col items-center space-y-1">
                <h1 class="mt-2 text-2xl font-semibold text-emerald-400 tracking-wide">EcoTrack</h1>
                <p class="text-sm text-emerald-200/70">Jejak Hijau untuk Masa Depan 🌍</p>
            </a>
        </div>

        <main class="w-full antialiased">
            {{ $slot }}
        </main>

        <!-- 🌾 Footer -->
        <footer class="mt-10 text-xs text-slate-500/70">
            © {{ date('Y') }} 
            <span class="text-emerald-400 font-medium">EcoTrack</span> • 
            Designed for a Sustainable Future 🌱
        </footer>
    </div>

    @livewireScripts
</body>
</html>