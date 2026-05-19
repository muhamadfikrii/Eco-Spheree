<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="scroll-smooth"
>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'NovaForge') }}</title>

    
    <link
        href="https://fonts.bunny.net/css?family=inter:400,600&display=swap"
        rel="stylesheet"
    />
    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap"
        rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Montserrat:wght@700;800&display=swap"
        rel="stylesheet"
    />

    
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    />
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.css"
    />
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.Default.css"
    />

    
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

  <!-- Particle Js -->
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  {{-- Chart JS --}}
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

    
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles ()
</head>

<body
    class="bg-slate-900 font-sans text-slate-100 antialiased selection:bg-orange-500/30 selection:text-white"
>
    @include ('layouts.navigation')

    <main class="-z-10">
        <div class="absolute inset-0">
            <div class="absolute inset-0"></div>
            <div
                class="bg-grid-pattern industrial-grid absolute inset-0 opacity-70"
            ></div>
        </div>
        {{ $slot }}
    </main>

    @include ('components.footer')

    
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.5.3/dist/leaflet.markercluster.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('a.smooth-scroll').forEach((anchor) => {
                anchor.addEventListener('click', (e) => {
                    e.preventDefault();
                    const target = document.querySelector(
                        anchor.getAttribute('href'),
                    );
                    target?.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start',
                    });
                });
            });
            AOS.init({ duration: 800, easing: 'ease-out', once: true });
        });
    </script>

  @stack('scripts')
  @livewireScripts()
</body>
</html>
