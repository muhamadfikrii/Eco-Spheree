<div 
    x-data="weatherWidget" 
    x-init="init()" 
    class="weather-widget rounded-2xl mb-3 shadow-lg p-6 sm:p-8 bg-white border border-slate-200 text-slate-800 transition-all duration-300"
>
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
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
            <button wire:click="fetchWeatherData" class="mt-2 px-4 py-2 bg-sky-500 text-white rounded-lg text-sm">
                Try Again
            </button>
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

            @if($lastUpdated)
                <div class="text-xs text-slate-400 mt-4">
                    Updated: {{ $lastUpdated }}
                    @if($autoRefresh)
                        <span class="ml-2 text-green-400">• Auto-refresh ON</span>
                    @else
                        <span class="ml-2 text-slate-500">• Auto-refresh OFF</span>
                    @endif
                </div>
            @endif
        </div>
    @endif
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
// Pastikan Lottie sudah dimuat
function loadLottie() {
    return new Promise((resolve) => {
        if (typeof lottie !== 'undefined') {
            resolve();
            return;
        }

        const script = document.createElement('script');
        script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.6/lottie.min.js';
        script.onload = () => resolve();
        document.head.appendChild(script);
    });
}

// Animasi cuaca
const weatherAnimations = {
    sunny: 'https://assets1.lottiefiles.com/packages/lf20_2dvkfqly.json',
    cloudy: 'https://assets1.lottiefiles.com/packages/lf20_1pxdmjms.json',
    rainy: 'https://assets1.lottiefiles.com/packages/lf20_kcsrcxgq.json',
    storm: 'https://assets1.lottiefiles.com/packages/lf20_6crsvohv.json',
    snowy: 'https://assets1.lottiefiles.com/packages/lf20_ozjcgfzg.json'
};

let currentAnimations = {};

function initWeatherAnimation(componentId, animationType) {
    const containerId = `weather-animation-${componentId}`;
    const container = document.getElementById(containerId);

    if (!container) {
        console.warn('Container not found:', containerId);
        return;
    }

    // Hapus animasi sebelumnya jika ada
    if (currentAnimations[containerId]) {
        currentAnimations[containerId].destroy();
    }

    // Kosongkan container
    container.innerHTML = '';

    loadLottie().then(() => {
        if (weatherAnimations[animationType]) {
            const anim = lottie.loadAnimation({
                container: container,
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: weatherAnimations[animationType],
            });
            currentAnimations[containerId] = anim;
        } else {
            // Fallback icon
            container.innerHTML = '<div class="text-4xl">☀️</div>';
        }
    });
}

// Livewire hooks
document.addEventListener('livewire:init', () => {
    Livewire.on('weatherAnimationUpdated', ({ animation }) => {
        const component = Livewire.find('{{ $componentId }}');
        if (component) {
            initWeatherAnimation('{{ $componentId }}', animation);
        }
    });

    // Auto-refresh functionality
    const autoRefreshIntervals = {};

    Livewire.on('startAutoRefresh', ({ componentId }) => {
        if (autoRefreshIntervals[componentId]) {
            clearInterval(autoRefreshIntervals[componentId]);
        }

        // Refresh every 5 minutes (300,000 ms)
        autoRefreshIntervals[componentId] = setInterval(() => {
            const component = Livewire.find(componentId);
            if (component) {
                component.call('fetchWeatherData');
            }
        }, 300000);
    });

    Livewire.on('stopAutoRefresh', ({ componentId }) => {
        if (autoRefreshIntervals[componentId]) {
            clearInterval(autoRefreshIntervals[componentId]);
            delete autoRefreshIntervals[componentId];
        }
    });
});

document.addEventListener('livewire:load', () => {
    // Inisialisasi animasi pertama kali
    setTimeout(() => {
        initWeatherAnimation('{{ $componentId }}', '{{ $currentAnimation }}');
    }, 500);
});
</script>
@endpush
