<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Eco-Track') }}</title>

  <!-- Fonts -->
  <link href="https://fonts.bunny.net/css?family=inter:400,600&display=swap" rel="stylesheet" />
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">

  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.Default.css" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- Particle Js -->
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

  <!-- Vite Assets -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @livewireStyles()
</head>

<body class="font-sans antialiased text-slate-100 bg-slate-900">

  @include('layouts.navigation')

  <main class="-z-10">
    <div class="absolute inset-0">
      <div class="absolute inset-0"></div>
      <div class="absolute inset-0 bg-grid-pattern opacity-70"></div>
    </div>
    {{ $slot }}
  </main>

  @include('components.footer')

  <!-- Libraries -->
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <script src="https://unpkg.com/leaflet.markercluster@1.5.3/dist/leaflet.markercluster.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

  <!-- Inits -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('a.smooth-scroll').forEach(anchor => {
        anchor.addEventListener('click', e => {
          e.preventDefault();
          const target = document.querySelector(anchor.getAttribute('href'));
          target?.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
      });
      AOS.init({ duration: 800, easing: 'ease-out', once: true });
    });
  </script>

  @stack('scripts')
  @livewireScripts()
</body>
</html>
<meta name="csrf-token" content="{{ csrf_token() }}">
