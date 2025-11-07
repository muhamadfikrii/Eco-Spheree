<div x-data="mapComponent()" x-init="init()" x-cloak wire:ignore>
    <!-- Tombol buka modal -->
    <div class="flex justify-end mb-4">
        <button @click="openModal()"
            class="bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white px-6 py-3 rounded-lg flex items-center gap-2 transition-transform transform hover:scale-105 shadow-lg">
            <i class="fas fa-plus-circle"></i> Report Issue
        </button>
    </div>

    <!-- Modal -->
    <div x-show="reportModal" x-transition.opacity
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm overflow-hidden"
        wire:ignore>
        <div x-show="reportModal" x-transition.scale
            class="bg-gray-900 rounded-2xl w-full max-w-3xl p-6 border border-gray-700 shadow-2xl overflow-hidden">

            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-white text-lg font-semibold flex items-center gap-2">
                    <i class="fas fa-leaf"></i> Submit Environmental Report
                </h3>
                <button @click="closeModal()" class="text-white text-2xl hover:text-red-400 transition-colors">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <!-- Form -->
            @livewire('components.environmental-report-modal')
        </div>
    </div>

    <!-- Main Map -->
    <div :class="reportModal === true ? 'backdrop-blur-sm' : ''"
        class="mt-6 bg-gray-800 rounded-lg p-4 border border-gray-700">
        <h3 class="text-lg text-white font-semibold mb-3">Team Location</h3>
        <div id="mainMap" class="rounded-lg h-[400px] w-full" wire:ignore></div>
    </div>
</div>

@push('scripts')
<script>
function mapComponent() {
    return {
        reportModal: false,
        modalMap: null,
        modalMarker: null,
        mainMap: null,
        mainMarker: null,
        teamLocation: [-6.2088, 106.8456],

        init() {
            this.initMainMap();
        },

        initMainMap() {
            if(this.mainMap) return;

            this.mainMap = L.map('mainMap', {
                center: this.teamLocation,
                zoom: 12,
                doubleClickZoom: false,
                boxZoom: false,
                keyboard: false,
                zoomControl: false,
                attributionControl: false,
                preferCanvas: true
            });

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { maxZoom: 19 }).addTo(this.mainMap);

            this.mainMarker = L.marker(this.teamLocation).addTo(this.mainMap);
            setTimeout(() => this.mainMap.invalidateSize(), 50);
        },

        openModal() {
            this.reportModal = true;
            document.body.classList.add('overflow-hidden');
            this.$nextTick(() => this.initModalMap());
        },

        closeModal() {
            this.reportModal = false;
            document.body.classList.remove('overflow-hidden');
        },

        initModalMap() {
            if(!this.modalMap){
                this.modalMap = L.map('modalMap', { center: this.teamLocation, zoom: 13 });
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { attribution: '&copy; OpenStreetMap contributors' }).addTo(this.modalMap);
                this.modalMap.on('click', e => this.setLocation(e.latlng.lat, e.latlng.lng));
            } else {
                this.modalMap.invalidateSize();
            }
        },

        setLocation(lat, lng) {
            let displayName = `${lat.toFixed(6)}, ${lng.toFixed(6)}`;
            fetch(`https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lng}&format=json&addressdetails=1`)
            .then(res => res.json())
            .then(data => {
                if(data.address){
                    const { road, neighbourhood, suburb, city, state, country } = data.address;
                    displayName = [road, neighbourhood, suburb, city, state, country].filter(Boolean).join(', ');
                    if(!displayName) displayName = `${lat.toFixed(6)}, ${lng.toFixed(6)}`;
                }
                document.getElementById('location').value = displayName;
                Livewire.emit('updateMapLocation', { location: displayName, latitude: lat, longitude: lng });
            })
            .catch(() => {
                document.getElementById('location').value = displayName;
                Livewire.emit('updateMapLocation', { location: displayName, latitude: lat, longitude: lng });
            });

            if(this.modalMarker){
                this.modalMarker.setLatLng([lat, lng]);
            } else {
                this.modalMarker = L.marker([lat, lng]).addTo(this.modalMap);
            }
        },

        useCurrentLocation() {
            if(!navigator.geolocation) return alert('Geolocation not supported');
            navigator.geolocation.getCurrentPosition(pos => {
                this.setLocation(pos.coords.latitude, pos.coords.longitude);
                if(this.modalMap) this.modalMap.setView([pos.coords.latitude, pos.coords.longitude], 15);
            }, () => alert('Unable to detect your location'));
        }
    }
}

function photoUploader() {
    return {
        photoPreview: null,
        handleFileChange(file) {
            if(!file) return;
            const reader = new FileReader();
            reader.onload = e => this.photoPreview = e.target.result;
            reader.readAsDataURL(file);
        },
        removePhoto() {
            this.photoPreview = null;
            this.$refs.fileInput.value = null;
        }
    }
}
</script>
@endpush
