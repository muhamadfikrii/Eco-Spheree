<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ $title ?? 'Onboarding' }} | EcoTrack</title>

    
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
        rel="stylesheet"
    />

    
    @vite (['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Definisi Animasi Kustom */
        @keyframes float {
            0%,
            100% {
                transform: translateY(0px) translateX(0px);
            }
            33% {
                transform: translateY(-20px) translateX(10px);
            }
            66% {
                transform: translateY(10px) translateX(-10px);
            }
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes grow {
            from {
                transform: scale(0);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }
        .animate-grow {
            animation: grow 1s ease-out;
        }
    </style>

    @livewireStyles
</head>

<body
    class="overflow-x-hidden bg-slate-950 font-sans text-gray-100 antialiased selection:bg-emerald-500/30 selection:text-emerald-200"
>
    
    <div
        class="fixed inset-0 z-0 bg-gradient-to-br from-slate-950 via-slate-900/95 to-slate-800"
    ></div>

    
    <div
        class="fixed left-[-10%] top-[-10%] h-[500px] w-[500px] animate-pulse rounded-full bg-emerald-500/10 blur-[160px]"
    ></div>
    <div
        class="fixed bottom-[-10%] right-[-10%] h-[400px] w-[400px] animate-pulse rounded-full bg-green-400/10 blur-[130px]"
    ></div>

    
    <div
        class="relative z-10 flex min-h-screen flex-col items-center justify-center px-6 py-10 text-center"
    >
        
        <div class="mb-10 text-center">
            <a href="/" class="inline-flex flex-col items-center space-y-1">
                <h1
                    class="mt-2 text-2xl font-semibold tracking-wide text-emerald-400"
                >
                    EcoTrack
                </h1>
                <p class="text-sm text-emerald-200/70">Jejak Hijau untuk Masa Depan 🌍</p>
            </a>
        </div>

        <main class="w-full antialiased">{{ $slot }}</main>

        
        <footer class="mt-10 text-xs text-slate-500/70">
            © {{ date('Y') }}
            <span class="font-medium text-emerald-400">EcoTrack</span> •
            Designed for a Sustainable Future 🌱
        </footer>
    </div>

    @livewireScripts
</body>
</html>
