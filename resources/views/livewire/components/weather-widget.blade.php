<div 
    x-data="weatherWidget" 
    x-init="init()" 
    class="weather-widget bg-gradient-to-br w-full from-sky-50 to-blue-100 rounded-2xl shadow-2xl p-6 border border-blue-200/50 relative overflow-hidden"
>
    <!-- Background animation -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 right-0 w-40 h-40 bg-blue-300 rounded-full -translate-y-20 translate-x-20 animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-32 h-32 bg-cyan-300 rounded-full translate-y-16 -translate-x-16 animate-pulse delay-1000"></div>
    </div>

    <div class="relative z-10">
        <div class="flex justify-between items-start mb-6">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 bg-white/80 rounded-xl flex items-center justify-center shadow-lg">
                    <i class="fas fa-cloud-sun text-blue-500 text-xl"></i>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-gray-800">Cuaca Real-time</h3>
                    <p class="text-sm text-gray-600">Data langsung dari Open-Meteo</p>
                </div>
            </div>

            <div class="flex items-center gap-2">
                <button wire:click="toggleAutoRefresh"
                    class="p-2 rounded-xl transition-all {{ $autoRefresh ? 'bg-green-500 text-white shadow-lg' : 'bg-white text-gray-600 hover:bg-gray-100' }}">
                    <i class="fas fa-sync-alt text-sm"></i>
                </button>
                <button wire:click="refreshWeather" wire:loading.attr="disabled"
                    class="p-2 rounded-xl transition-all {{ $loading ? 'bg-blue-500 text-white animate-pulse' : 'bg-white text-blue-600 hover:bg-gray-100' }}">
                    <i class="fas fa-redo text-sm"></i>
                </button>
            </div>
        </div>

        @if($loading)
            <div class="text-center py-10 text-gray-600">Memuat data cuaca...</div>
        @elseif($error)
            <div class="text-center py-10 text-red-500">{{ $error }}</div>
        @elseif($weatherData)
            <div class="text-center">
                <h4 class="text-2xl font-bold text-gray-800 mb-1">{{ $weatherData['name'] }}</h4>
                <p class="text-gray-600 capitalize">{{ $weatherData['weather'][0]['description'] }}</p>
            </div>

            <div class="flex justify-center py-4">
                <div id="weather-animation-{{ $componentId }}" class="w-32 h-32"></div>
            </div>

            <div class="text-center text-5xl font-bold text-gray-800">
                {{ round($weatherData['main']['temp']) }}°C
            </div>

            <div class="text-center text-sm text-gray-500 mt-1">
                Feels like {{ round($weatherData['main']['feels_like']) }}°C
            </div>
        @endif
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('livewire:load', () => {
    // Load Lottie jika belum ada
    if (typeof lottie === 'undefined') {
        const script = document.createElement('script');
        script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.6/lottie.min.js';
        document.head.appendChild(script);
    }

    function initWeatherAnimation(id, type) {
        const el = document.getElementById('weather-animation-' + id);
        if (!el) return;

        const anims = {
            sunny: 'https://assets1.lottiefiles.com/packages/lf20_2dvkfqly.json',
            cloudy: 'https://assets1.lottiefiles.com/packages/lf20_1pxdmjms.json',
            rainy: 'https://assets1.lottiefiles.com/packages/lf20_kcsrcxgq.json',
            storm: 'https://assets1.lottiefiles.com/packages/lf20_6crsvohv.json',
            snowy: 'https://assets1.lottiefiles.com/packages/lf20_ozjcgfzg.json'
        };

        setTimeout(() => {
            if (typeof lottie !== 'undefined' && anims[type]) {
                lottie.loadAnimation({
                    container: el,
                    renderer: 'svg',
                    loop: true,
                    autoplay: true,
                    path: anims[type],
                });
            }
        }, 300);
    }

    Livewire.hook('morph.updated', (component) => {
        if (component.name === 'components.weather-widget') {
            initWeatherAnimation(component.id, component.el.__livewire.currentAnimation);
        }
    });

    Livewire.hook('morph.initialized', (component) => {
        if (component.name === 'components.weather-widget') {
            initWeatherAnimation(component.id, component.el.__livewire.currentAnimation);
        }
    });
});

document.addEventListener('alpine:init', () => {
    Alpine.data('weatherWidget', () => ({
        permissionDenied: false,

        init() {
            if (!navigator.geolocation) {
                this.showLocationError('Browser kamu tidak mendukung fitur lokasi.');
                return;
            }

            navigator.geolocation.getCurrentPosition(
                (pos) => {
                    const { latitude, longitude } = pos.coords;
                    Livewire.dispatch('updateLocation', { latitude, longitude });
                },
                (err) => {
                    let msg = 'Gagal mendeteksi lokasi.';
                    if (err.code === 1) msg = 'Akses lokasi ditolak. Aktifkan izin lokasi di browser kamu.';
                    else if (err.code === 2) msg = 'Lokasi tidak tersedia. Pastikan GPS aktif.';
                    this.showLocationError(msg);
                }
            );
        },

        showLocationError(msg) {
            this.permissionDenied = true;
            Swal.fire({
                icon: 'warning',
                title: 'Lokasi Tidak Aktif',
                text: msg,
                confirmButtonColor: '#16a34a',
                confirmButtonText: 'Oke, Mengerti',
                background: '#f9fafb',
                color: '#111827',
                showClass: { popup: 'animate__animated animate__fadeInDown' },
                hideClass: { popup: 'animate__animated animate__fadeOutUp' }
            });
        }
    }))
})
</script>
@endpush
