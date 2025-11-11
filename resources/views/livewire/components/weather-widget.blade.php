<div 
    x-data="weatherWidget" 
    x-init="init()" 
    class="weather-widget rounded-2xl mb-3 shadow-lg p-6 sm:p-8 bg-white border border-slate-200 text-slate-800 transition-all duration-300"
>
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between  gap-4 mb-6">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-sky-100 rounded-full flex items-center justify-center">
                <i class="fas fa-cloud-sun text-sky-600 text-lg"></i>
            </div>
            <div>
                <h3 class="text-lg font-semibold">Weather Now</h3>
                <p class="text-xs text-slate-500">Live data from Open-Meteo</p>
            </div>
        </div>

        <div class="flex items-center gap-2">
            <button 
                wire:click="toggleAutoRefresh"
                class="p-2.5 rounded-full border border-slate-200 hover:bg-slate-100 transition"
                title="Auto Refresh"
            >
                <i class="fas fa-clock text-sm {{ $autoRefresh ? 'text-sky-600' : 'text-slate-600' }}"></i>
            </button>
            <button 
                wire:click="refreshWeather" 
                wire:loading.attr="disabled"
                class="p-2.5 rounded-full border border-slate-200 hover:bg-slate-100 transition"
                title="Refresh Now"
            >
                <i class="fas fa-redo text-sm {{ $loading ? 'text-sky-600 animate-spin' : 'text-slate-600' }}"></i>
            </button>
        </div>
    </div>

    <!-- Body -->
    @if($loading)
        <div class="text-center py-10">
            <i class="fas fa-spinner fa-spin text-3xl text-slate-500 mb-3"></i>
            <p class="text-sm text-slate-500">Loading weather data...</p>
        </div>
    @elseif($error)
        <div class="text-center py-10">
            <i class="fas fa-exclamation-triangle text-3xl text-rose-500 mb-3"></i>
            <p class="text-sm text-slate-700">{{ $error }}</p>
        </div>
    @elseif($weatherData)
        <div class="text-center space-y-4">
            <div>
                <h1>Today</h1>
                <h4 class="text-xl font-bold">{{ $weatherData['name'] }}</h4>
                <p class="text-sm text-slate-500 capitalize">{{ $weatherData['weather'][0]['description'] }}</p>
            </div>

            <div class="flex justify-center">
                <div id="weather-animation-{{ $componentId }}" class="w-24 h-24"></div>
            </div>

            <div>
                <div class="text-5xl sm:text-6xl font-bold">{{ round($weatherData['main']['temp']) }}°</div>
                <p class="text-sm text-slate-500">
                    Feels like {{ round($weatherData['main']['feels_like']) }}°
                </p>
            </div>
        </div>
    @endif
</div>


@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('livewire:load', () => {
    // Load Lottie if it doesn't exist
    if (typeof lottie === 'undefined') {
        const script = document.createElement('script');
        script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.6/lottie.min.js';
        document.head.appendChild(script);
    }

    function initWeatherAnimation(id, type) {
        // Tunggu sebentar agar DOM benar-benar siap
        setTimeout(() => {
            const el = document.getElementById('weather-animation-' + id);
            if (!el) {
                console.warn('Weather animation container not found for id:', 'weather-animation-' + id);
                return;
            }

            const anims = {
                sunny: 'https://assets1.lottiefiles.com/packages/lf20_2dvkfqly.json',
                cloudy: 'https://assets1.lottiefiles.com/packages/lf20_1pxdmjms.json',
                rainy: 'https://assets1.lottiefiles.com/packages/lf20_kcsrcxgq.json',
                storm: 'https://assets1.lottiefiles.com/packages/lf20_6crsvohv.json',
                snowy: 'https://assets1.lottiefiles.com/packages/lf20_ozjcgfzg.json'
            };

            if (typeof lottie !== 'undefined' && anims[type]) {
                lottie.loadAnimation({
                    container: el,
                    renderer: 'svg',
                    loop: true,
                    autoplay: true,
                    path: anims[type],
                });
            }
        }, 100); // Tunda 100ms untuk memastikan elemen ada
    }

    Livewire.hook('morph.updated', (component) => {
        if (component.name === 'components.weather-widget' && component.el) {
            const animationId = component.el.__livewire ? component.el.__livewire.currentAnimation : null;
            if (animationId) {
                initWeatherAnimation(component.id, animationId);
            }
        }
    });

    Livewire.hook('morph.initialized', (component) => {
        if (component.name === 'components.weather-widget' && component.el) {
            const animationId = component.el.__livewire ? component.el.__livewire.currentAnimation : null;
            if (animationId) {
                initWeatherAnimation(component.id, animationId);
            }
        }
    });
});

document.addEventListener('alpine:init', () => {
    Alpine.data('weatherWidget', () => ({
        permissionDenied: false,

        init() {
            const locationDenied = localStorage.getItem('location_denied');
            if (locationDenied === 'true') {

                return;
            }

            if (!navigator.geolocation) {
                this.showLocationError('Your browser does not support location features.');
                return;
            }

            navigator.geolocation.getCurrentPosition(
                (pos) => {
                    const { latitude, longitude } = pos.coords;
                    Livewire.dispatch('updateLocation', { latitude, longitude });
                },
                (err) => {
                    let msg = 'Failed to detect location.';
                    if (err.code === 1) {
                        msg = 'Location access denied. Please enable location permissions in your browser.';
                        localStorage.setItem('location_denied', 'true');
                    } else if (err.code === 2) {
                        msg = 'Location unavailable. Please ensure your GPS is active.';
                    }
                    this.showLocationError(msg);
                }
            );
        },

        showLocationError(msg) {
            this.permissionDenied = true;
            Swal.fire({
                icon: 'warning',
                title: 'Location Inactive',
                text: msg,
                confirmButtonText: 'OK, Got it'
            });
        }
    }))
})
</script>
@endpush