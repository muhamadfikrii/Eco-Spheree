<div x-data="dashboardAlpine" x-init="init()" class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
    @include('livewire.components.header')

    @include('livewire.components.purpose')

    <!-- Divider -->
    <div class="bg-black mt-10 h-[1px] mx-20"></div>

    <!-- Hero Section -->
    <section 
        x-data="{ show: false }" 
        x-init="setTimeout(() => show = true, 200)" 
        class="text-center py-20 relative overflow-hidden"
    >
        <div class="absolute inset-0 bg-gradient-to-br from-green-50 via-white to-blue-50 opacity-70"></div>
        <div class="relative z-10">
            <h1 
                x-show="show"
                x-transition.duration.800ms
                class="text-5xl sm:text-6xl font-extrabold text-gray-900 tracking-tight mb-4 leading-tight"
            >
                Explore Indonesia’s <span class="text-green-600">Environmental Dashboard</span>
            </h1>
            <p 
                x-show="show"
                x-transition.duration.1000ms.delay.300ms
                class="max-w-2xl mx-auto text-lg sm:text-xl text-gray-600"
            >
                Temukan data lingkungan real-time, kisah inspiratif, dan aksi nyata dari seluruh Indonesia — semuanya dalam satu dasbor interaktif untuk masa depan yang berkelanjutan.
            </p>
        </div>
    </section>

    <div class="mx-auto  pb-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 lg:p-8 gap-6 lg:gap-8 bg-slate-900">
            <section class="lg:col-span-2 space-y-6">
                @include('livewire.components.map-section')
                {{-- @include('livewire.components.recent-activities') --}}
            </section>

            <!-- Right Column -->
            <aside class="space-y-6">
                {{-- @include('livewire.components.user-stats') --}}
                @include('livewire.components.sustainability-score')
                {{-- @include('livewire.components.challenges') --}}
            </aside>
        </div>

        <div class="bg-black mt-10 h-[1px]"></div>
    </div>

    @include('livewire.components.impact-stories')
</div>

@push('scripts')
<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('dashboardAlpine', () => ({
        showNotification: false,
        notificationMessage: '',
        notificationType: 'success',
        showReportModal: false,
        showChallengeModal: false,
        showActivityModal: false,
        map: null,
        layerGroups: {},
        activeFilter: 'all',
        activityForm: {
            type: 'transport',
            description: '',
            co2_impact: 0
        },

        init() {
            // Integrasi event Livewire
            Livewire.on('report-submitted', (data) => {
                this.showNotificationMessage(data.message, data.type);
                this.showReportModal = false;
            });

            Livewire.on('layer-toggled', (data) => {
                this.toggleLayerOnMap(data.layerId, data.visible, data.color);
            });

            Livewire.on('locationUpdated', (data) => {
                this.reportForm.location = data.location;
            });

            // Inisialisasi map hanya sekali
            this.$nextTick(() => this.initMap());
        },

        initMap() {
            if (this.map) return;

            this.map = L.map('eco-map').setView([-6.2088, 106.8456], 12);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
                maxZoom: 19,
            }).addTo(this.map);

            this.layerGroups = {
                'air-quality': L.layerGroup().addTo(this.map),
                'hotspots': L.layerGroup(),
                'water-quality': L.layerGroup(),
                'recycling': L.layerGroup(),
                'user-reports': L.layerGroup().addTo(this.map),
            };

            this.addMarkers();
            this.animateMarkers();
        },

        addMarkers() {
            const icon = (html, size = 20) => L.divIcon({
                html,
                iconSize: [size, size],
                className: 'custom-div-icon',
            });

            // Lokasi pengguna
            L.marker([-6.2088, 106.8456], {
                icon: icon('<i class="fas fa-map-marker-alt" style="color:#10b981;font-size:24px;"></i>', 24),
            })
            .addTo(this.layerGroups['user-reports'])
            .bindPopup('Your Current Location');

            // Air Quality
            const airData = [
                { coord: [-6.1751, 106.865], color: '#10b981', label: 'Good (AQI: 45)' },
                { coord: [-6.2297, 106.8295], color: '#eab308', label: 'Moderate (AQI: 85)' },
                { coord: [-6.2607, 106.7816], color: '#ef4444', label: 'Poor (AQI: 150)' },
            ];
            airData.forEach((a) =>
                L.marker(a.coord, { icon: icon(`<i class="fas fa-circle" style="color:${a.color};font-size:16px;"></i>`, 16) })
                    .addTo(this.layerGroups['air-quality'])
                    .bindPopup(`Air Quality: ${a.label}`)
            );

            // Hotspots
            const hotspotIcon = icon('<i class="fas fa-fire" style="color:#f97316;font-size:20px;"></i>', 20);
            L.marker([-6.3024, 106.8951], { icon: hotspotIcon }).addTo(this.layerGroups['hotspots']).bindPopup('Fire Hotspot: Medium');
            L.marker([-6.1500, 106.7500], { icon: hotspotIcon }).addTo(this.layerGroups['hotspots']).bindPopup('Fire Hotspot: Low');

            // Water Quality
            const waterIcon = icon('<i class="fas fa-tint" style="color:#3b82f6;font-size:18px;"></i>', 18);
            L.marker([-6.2382, 106.8036], { icon: waterIcon }).addTo(this.layerGroups['water-quality']).bindPopup('Water Quality: Good');
            L.marker([-6.1944, 106.8229], { icon: waterIcon }).addTo(this.layerGroups['water-quality']).bindPopup('Water Quality: Moderate');

            // Recycling Centers
            const recycleIcon = icon('<i class="fas fa-recycle" style="color:#10b981;font-size:20px;"></i>', 20);
            L.marker([-6.1244, 106.8235], { icon: recycleIcon }).addTo(this.layerGroups['recycling']).bindPopup('Recycling Center: Plastics & Paper');
            L.marker([-6.1862, 106.8340], { icon: recycleIcon }).addTo(this.layerGroups['recycling']).bindPopup('Recycling Center: E-Waste');

            // User Reports
            const reportIcon = icon('<i class="fas fa-exclamation-triangle" style="color:#eab308;font-size:18px;"></i>', 18);
            L.marker([-6.2297, 106.6826], { icon: reportIcon }).addTo(this.layerGroups['user-reports']).bindPopup('User Report: Illegal dumping');
            L.marker([-6.1751, 106.9500], { icon: reportIcon }).addTo(this.layerGroups['user-reports']).bindPopup('User Report: Air pollution complaint');
        },

        animateMarkers() {
            setTimeout(() => {
                Object.values(this.layerGroups).forEach(layer => {
                    layer.eachLayer(marker => {
                        if (marker._icon) marker._icon.classList.add('animate-pulse');
                    });
                });
            }, 800);
        },

        toggleLayerOnMap(layerId, visible) {
            const layer = this.layerGroups[layerId];
            if (!layer) return;
            visible ? this.map.addLayer(layer) : this.map.removeLayer(layer);
        },

        getCurrentLocation() {
            if (!navigator.geolocation) {
                this.showNotificationMessage('Geolocation not supported', 'error');
                return;
            }

            navigator.geolocation.getCurrentPosition(
                (pos) => {
                    const location = `${pos.coords.latitude.toFixed(6)}, ${pos.coords.longitude.toFixed(6)}`;
                    Livewire.dispatch('update-location', { location });
                    this.showNotificationMessage('Location detected successfully', 'success');

                    const icon = L.divIcon({
                        html: '<i class="fas fa-map-marker-alt" style="color:#10b981;font-size:24px;"></i>',
                        iconSize: [24, 24],
                        className: 'current-location-marker',
                    });

                    L.marker([pos.coords.latitude, pos.coords.longitude], { icon })
                        .addTo(this.layerGroups['user-reports'])
                        .bindPopup('Your Current Location')
                        .openPopup();

                    this.map.setView([pos.coords.latitude, pos.coords.longitude], 14);
                },
                () => this.showNotificationMessage('Unable to detect your location', 'error')
            );
        },

        showNotificationMessage(message, type = 'success') {
            this.notificationMessage = message;
            this.notificationType = type;
            this.showNotification = true;
            setTimeout(() => (this.showNotification = false), 5000);
        },

        setFilter(filter) {
            this.activeFilter = filter;
            Livewire.dispatch('setFilter', { filter });
        },

        showActivityForm() {
            this.showActivityModal = true;
        }
    }));
});
</script>

<style>
.custom-div-icon { background: transparent; border: none; }
.current-location-marker { animation: pulse 2s infinite; }

@keyframes pulse {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.1); opacity: 0.8; }
    100% { transform: scale(1); opacity: 1; }
}
</style>
@endpush
