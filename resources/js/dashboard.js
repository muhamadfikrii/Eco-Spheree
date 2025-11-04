import Alpine from 'alpinejs';

Alpine.data('dashboard', () => ({
    showReportModal: false,
    showNotification: false,
    notificationMessage: '',

    layers: [
        { id: 'air-quality', name: 'Air Quality', visible: true },
        { id: 'water-quality', name: 'Water Quality', visible: true },
        { id: 'hotspots', name: 'Fire Hotspots', visible: false },
        { id: 'user-reports', name: 'User Reports', visible: true },
    ],
    mapInstance: null,
    layerHandles: {},

    impactStories: [
        { id: 1, title: 'Mangrove Replanting', description: 'Community restored 2 hectares of mangrove.', image: 'https://picsum.photos/600/400?random=1' },
        { id: 2, title: 'River Cleanup', description: 'Volunteers removed 200 kg of waste.', image: 'https://picsum.photos/600/400?random=2' },
    ],
    activities: [
        { id: 1, icon: '🌱', description: 'New tree planting recorded', impact: '+120', impactClass: 'text-green-400' },
        { id: 2, icon: '🔥', description: 'Hotspot detected near river bend', impact: 'High', impactClass: 'text-red-400' },
    ],
    sustainabilityScore: '78',
    region: 'Jakarta Raya',
    rank: 12,
    totalCities: 120,
    sustainabilityMetrics: [
        { id: 1, name: 'Air', percentage: 80, score: 'Good' },
        { id: 2, name: 'Water', percentage: 70, score: 'Moderate' },
    ],
    recentReports: [
        { id: 1, iconClass: 'fas fa-exclamation-circle text-yellow-400', title: 'Illegal dumping at Riverside', time: '2h ago', upvotes: 24 },
        { id: 2, iconClass: 'fas fa-water text-blue-400', title: 'Oil sheen on stream', time: '6h ago', upvotes: 12 },
    ],
    challenges: [
        { id: 1, title: 'Plastic-Free Week', timeLeft: '3d', progress: 62, participants: 340 },
        { id: 2, title: 'Tree-a-thon', timeLeft: '1w', progress: 30, participants: 120 },
    ],
    ecoTips: [
        { id: 1, text: 'Bring a reusable bottle' },
        { id: 2, text: 'Sort your waste at home' },
    ],

    reportForm: {
        issueType: 'Air Pollution',
        description: '',
        location: '',
        photo: null,
    },

    initMap(el) {
        setTimeout(() => {
            if (window.L) {
                try {
                    this.mapInstance = L.map(el).setView([-6.200000, 106.816666], 11);
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                        maxZoom: 19
                    }).addTo(this.mapInstance);

                    this.layerHandles['air-quality'] = L.layerGroup().addTo(this.mapInstance);
                    this.layerHandles['user-reports'] = L.layerGroup().addTo(this.mapInstance);
                    L.marker([-6.2, 106.816]).bindPopup('Example point: Air Quality').addTo(this.layerHandles['air-quality']);
                } catch (e) {
                    console.error('Leaflet init error', e);
                    el.innerHTML = '<div class="w-full h-full flex items-center justify-center text-gray-300">Map failed to initialize.</div>';
                }
            } else if (window.mapboxgl) {
                try {
                    mapboxgl.accessToken = mapboxgl.accessToken || '';
                    this.mapInstance = new mapboxgl.Map({
                        container: el,
                        style: 'mapbox://styles/mapbox/streets-v11',
                        center: [106.816666, -6.200000],
                        zoom: 10
                    });
                } catch (e) {
                    console.error('Mapbox init error', e);
                    el.innerHTML = '<div class="w-full h-full flex items-center justify-center text-gray-300">Map failed to initialize.</div>';
                }
            } else {
                el.innerHTML = '<div class="w-full h-full flex items-center justify-center text-gray-300">Map library not loaded. To enable interactive map, add Leaflet or Mapbox scripts.</div>';
            }
        }, 50);
    },

    toggleLayer(id) {
        const layer = this.layers.find(l => l.id === id);
        if (!layer) return;
        layer.visible = !layer.visible;
        if (this.mapInstance && this.layerHandles[id]) {
            if (layer.visible) {
                this.layerHandles[id].addTo(this.mapInstance);
            } else {
                this.layerHandles[id].remove();
            }
        }
    },

    setCurrentLocation() {
        if (!navigator.geolocation) {
            this.notify('Geolocation not supported by browser.');
            return;
        }
        navigator.geolocation.getCurrentPosition((pos) => {
            const coords = `${pos.coords.latitude.toFixed(6)}, ${pos.coords.longitude.toFixed(6)}`;
            this.reportForm.location = coords;
            this.notify('Location captured.');
        }, (err) => {
            console.error(err);
            this.notify('Could not get location: ' + (err.message || 'permission denied'));
        }, { timeout: 8000 });
    },

    submitReport() {
        if (!this.reportForm.description || !this.reportForm.location) {
            this.notify('Please fill description and location before submitting.');
            return;
        }
        this.notify('Report submitted. Thank you!');
        this.showReportModal = false;
        this.reportForm = { issueType: 'Air Pollution', description: '', location: '', photo: null };
        this.recentReports.unshift({
            id: Date.now(),
            iconClass: 'fas fa-exclamation-circle text-yellow-400',
            title: this.reportForm.issueType + ' reported',
            time: 'just now',
            upvotes: 0
        });
        if (this.recentReports.length > 6) this.recentReports.pop();
    },

    notify(message = '') {
        this.notificationMessage = message;
        this.showNotification = true;
        setTimeout(() => { this.showNotification = false; }, 3000);
    }
}));

Alpine.start();
