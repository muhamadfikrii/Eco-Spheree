<div class="w-full" wire:ignore>
    <div
        class="mb-6 flex flex-col flex-wrap gap-4 overflow-x-auto p-2 lg:flex-row lg:items-center lg:justify-between"
    >
        <div class="flex items-center">
            <div
                class="mr-3 flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-to-br from-cyan-500 to-blue-600 shadow-lg"
            >
                <i class="fas fa-industry text-white"></i>
            </div>
            <div>
                <h2 class="text-xl text-white sm:text-2xl md:text-3xl">
                    NovaForge Industrial Map
                </h2>
                <p class="text-sm text-gray-400">Real-time IIoT telemetry across Indonesia</p>
            </div>
        </div>

        <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
            <div
                class="flex w-full rounded-lg border border-gray-700 bg-gray-800/70 p-1 backdrop-blur-md sm:w-auto"
            >
                <select
                    id="region-filter"
                    onchange="filterByRegion(this.value)"
                    class="w-full border-0 bg-transparent px-2 text-xs text-gray-300 focus:ring-0 sm:w-auto"
                >
                    <option value="all">All Indonesia</option>
                    <option value="sumatra">Sumatra</option>
                    <option value="java">Java</option>
                    <option value="kalimantan">Kalimantan</option>
                    <option value="sulawesi">Sulawesi</option>
                    <option value="bali">Bali & Nusa Tenggara</option>
                    <option value="papua">Papua & Maluku</option>
                </select>
            </div>

            <div
                class="flex w-full gap-5 rounded-lg border border-gray-700 bg-gray-800/70 p-1 text-center backdrop-blur-md sm:w-full"
            >
                <button
                    onclick="switchLayer('oee')"
                    id="oee-btn"
                    class="layer-btn flex-1 rounded-md px-3 py-1.5 text-xs font-medium text-gray-400 transition-colors hover:text-white"
                >
                    OEE
                </button>
                <button
                    onclick="switchLayer('downtime')"
                    id="downtime-btn"
                    class="layer-btn flex-1 rounded-md px-3 py-1.5 text-xs font-medium text-gray-400 transition-colors hover:text-white"
                >
                    Downtime
                </button>
                <button
                    onclick="switchLayer('energy')"
                    id="energy-btn"
                    class="layer-btn flex-1 rounded-md px-3 py-1.5 text-xs font-medium text-gray-400 transition-colors hover:text-white"
                >
                    Energy (MWh)
                </button>
                <button
                    onclick="switchLayer('production')"
                    id="production-btn"
                    class="layer-btn flex-1 rounded-md px-3 py-1.5 text-center text-xs font-medium text-gray-400 transition-colors hover:text-white"
                >
                    Production
                </button>
            </div>

            <div
                class="flex w-full rounded-lg border border-gray-700 bg-gray-800/70 p-1 backdrop-blur-md sm:w-auto"
            >
                <button
                    onclick="toggleViewMode()"
                    id="view-mode-btn"
                    class="w-full rounded-md px-3 py-1.5 text-xs font-medium text-gray-400 transition-colors hover:text-white"
                    title="Toggle between markers and heatmap"
                >
                    <i class="fas fa-layer-group mr-1"></i>Markers
                </button>
            </div>
        </div>
    </div>

    <div
        class="relative overflow-hidden rounded-2xl border border-gray-700/50 bg-gray-800/30 shadow-xl"
    >
        <div
            class="absolute left-4 top-4 z-[998] min-w-[150px] rounded-xl border border-gray-700/50 bg-gray-900/90 p-4 shadow-xl backdrop-blur-md sm:min-w-[200px]"
        >
            <h3
                class="mb-3 flex items-center gap-2 text-sm font-semibold text-white"
            >
                <i class="fas fa-chart-line text-cyan-400"></i>
                <span id="legend-title">OEE Performance</span>
            </h3>
            <div id="legend-content"></div>
        </div>

        <div
            class="absolute right-4 top-4 z-[998] min-w-[160px] rounded-xl border border-gray-700/50 bg-gray-900/90 p-3 shadow-xl backdrop-blur-md sm:min-w-[220px] sm:p-4"
        >
            <div
                class="mb-3 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between"
            >
                <span class="truncate text-sm text-gray-300" id="region-name"
                    >Indonesia</span
                >
                <div
                    class="flex items-center rounded-full bg-cyan-900/30 px-2 py-1 sm:ml-auto"
                >
                    <span
                        class="text-sm font-bold text-cyan-400"
                        id="region-score"
                        >76.2%</span
                    >
                </div>
            </div>
            <div class="space-y-2">
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-400">Active Plants</span
                    ><span
                        class="text-xs font-medium text-cyan-400"
                        id="active-plants"
                        >342</span
                    >
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-400">Avg. OEE</span
                    ><span
                        class="text-xs font-medium text-green-400"
                        id="avg-oee"
                        >87.3%</span
                    >
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-400">Energy Saved</span
                    ><span
                        class="text-xs font-medium text-emerald-400"
                        id="energy-saved"
                        >23%</span
                    >
                </div>
            </div>
        </div>

        <div
            class="absolute top-20 flex flex-col space-y-2 pl-3 sm:right-2 md:top-56"
        >
            <button
                onclick="toggleSatelliteView()"
                id="satellite-btn"
                class="z-[998] rounded-xl border border-gray-700/50 bg-gray-900/90 p-2 text-white shadow-lg backdrop-blur-md transition-all duration-300 hover:bg-gray-800/90 md:p-3"
                title="Satellite View"
            >
                <i class="fas fa-satellite"></i>
            </button>
        </div>

        <div
            class="absolute bottom-20 left-4 z-10 hidden rounded-xl border border-gray-700/50 bg-gray-900/90 p-3 shadow-xl backdrop-blur-md"
            id="map-info"
        >
            <div class="text-xs text-gray-300">
                <div class="mb-2 flex items-center gap-2">
                    <i class="fas fa-info-circle text-blue-400"></i
                    ><span id="info-title">Map Information</span>
                </div>
                <p id="info-content" class="text-gray-400"></p>
            </div>
        </div>

        <div
            id="industrialMap"
            class="h-[300px] w-full rounded-xl bg-gray-700 sm:h-[400px] md:h-[500px] lg:h-[600px]"
        ></div>

        <div
            class="absolute bottom-4 right-4 z-[998] flex flex-wrap justify-end gap-2 px-4 sm:left-1/2 sm:right-auto sm:-translate-x-1/2 sm:transform sm:justify-center"
        >
            <button
                onclick="useCurrentLocation()"
                class="transform rounded-xl border border-gray-700/50 bg-gray-900/90 p-2.5 text-white shadow-lg backdrop-blur-md transition-all duration-300 hover:scale-105 hover:bg-gray-800/90 sm:p-3"
                title="Find My Location"
            >
                <i class="fas fa-crosshairs text-sm sm:text-base"></i>
            </button>
            <button
                onclick="toggleHeatmap()"
                id="heatmap-btn"
                class="transform rounded-xl border border-gray-700/50 bg-gray-900/90 p-2.5 text-white shadow-lg backdrop-blur-md transition-all duration-300 hover:scale-105 hover:bg-gray-800/90 sm:p-3"
                title="Toggle Heatmap"
            >
                <i class="fas fa-fire text-sm sm:text-base"></i>
            </button>
            <button
                onclick="resetView()"
                class="transform rounded-xl border border-gray-700/50 bg-gray-900/90 p-2.5 text-white shadow-lg backdrop-blur-md transition-all duration-300 hover:scale-105 hover:bg-gray-800/90 sm:p-3"
                title="Reset View"
            >
                <i class="fas fa-home text-sm sm:text-base"></i>
            </button>
            <button
                onclick="toggleFullscreen()"
                class="transform rounded-xl border border-gray-700/50 bg-gray-900/90 p-2.5 text-white shadow-lg backdrop-blur-md transition-all duration-300 hover:scale-105 hover:bg-gray-800/90 sm:p-3"
                title="Fullscreen"
            >
                <i class="fas fa-expand text-sm sm:text-base"></i>
            </button>
        </div>

        <div
            class="absolute bottom-4 left-4 z-[998] rounded-xl border border-gray-700/50 bg-gray-900/90 px-2 py-1.5 shadow-xl backdrop-blur-md sm:px-3 sm:py-2"
        >
            <div class="text-xs text-gray-400">
                <span id="coordinates">Lat: -2.5489, Lng: 118.0149</span>
            </div>
        </div>
    </div>

    <div
        class="m-5 grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 lg:grid-cols-2"
    >
        <div
            class="cursor-pointer rounded-xl border border-cyan-500/20 bg-gradient-to-br from-cyan-500/10 to-blue-600/10 p-4 backdrop-blur-sm transition-all duration-300 hover:border-cyan-400/40"
            onclick="focusOnRegion('sumatra')"
        >
            <div class="flex flex-1 items-center justify-between">
                <div>
                    <p class="text-xs font-medium text-cyan-400">Sumatra</p>
                    <p class="text-lg font-bold text-white">Avg OEE: 82%</p>
                    <p class="mt-1 text-xs text-green-300">↑ +3% from last year</p>
                </div>
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-lg bg-cyan-500/20"
                >
                    <i class="fas fa-industry text-cyan-400"></i>
                </div>
            </div>
        </div>
        <div
            class="cursor-pointer rounded-xl border border-blue-500/20 bg-gradient-to-br from-blue-500/10 to-cyan-600/10 p-4 backdrop-blur-sm transition-all duration-300 hover:border-blue-400/40"
            onclick="focusOnRegion('java')"
        >
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-medium text-blue-400">Java</p>
                    <p class="text-lg font-bold text-white">Avg OEE: 78%</p>
                    <p class="mt-1 text-xs text-green-300">↑ +2% from last year</p>
                </div>
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-500/20"
                >
                    <i class="fas fa-city text-blue-400"></i>
                </div>
            </div>
        </div>
        <div
            class="cursor-pointer rounded-xl border border-purple-500/20 bg-gradient-to-br from-purple-500/10 to-pink-600/10 p-4 backdrop-blur-sm transition-all duration-300 hover:border-purple-400/40"
            onclick="focusOnRegion('kalimantan')"
        >
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-medium text-purple-400">Kalimantan</p>
                    <p class="text-lg font-bold text-white">Avg OEE: 74%</p>
                    <p class="mt-1 text-xs text-yellow-300">↓ -1% from last year</p>
                </div>
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-lg bg-purple-500/20"
                >
                    <i class="fas fa-tree text-purple-400"></i>
                </div>
            </div>
        </div>
        <div
            class="cursor-pointer rounded-xl border border-orange-500/20 bg-gradient-to-br from-orange-500/10 to-red-600/10 p-4 backdrop-blur-sm transition-all duration-300 hover:border-orange-400/40"
            onclick="focusOnRegion('sulawesi')"
        >
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-medium text-orange-400">Sulawesi</p>
                    <p class="text-lg font-bold text-white">Avg OEE: 71%</p>
                    <p class="mt-1 text-xs text-yellow-300">↓ -2% from last year</p>
                </div>
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-lg bg-orange-500/20"
                >
                    <i class="fas fa-water text-orange-400"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8">
        <h3
            class="mb-4 ml-1 flex items-center gap-2 text-lg font-semibold text-white sm:ml-2"
        >
            <i class="fas fa-chart-line text-cyan-400"></i> Regional Industrial
            Insights
        </h3>
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <div
                class="rounded-xl border border-gray-700/50 bg-gray-800/30 p-6"
            >
                <h4 class="text-md mb-4 font-semibold text-white">
                    Top Plants by OEE
                </h4>
                <div class="space-y-6" id="top-plants"></div>
            </div>
            <div
                class="rounded-xl border border-gray-700/50 bg-gray-800/30 p-6"
            >
                <h4 class="text-md mb-4 font-semibold text-white">
                    Key Initiatives
                </h4>
                <div class="space-y-3" id="initiatives-list"></div>
            </div>
        </div>
    </div>
</div>

<script>
    let mainMap = null;
    let currentMarkers = [];
    let activeLayer = 'oee';
    let showHeatmap = false;
    let heatmapLayer = null;
    let viewMode = 'markers';
    let currentRegion = 'all';
    let satelliteView = false;
    let satelliteLayer = null;
    let markerClusters = null;
    let userLocationMarker = null;

    const regionCoordinates = {
        all: { center: [-2.5489, 118.0149], zoom: 5 },
        sumatra: { center: [-0.5897, 101.3431], zoom: 6 },
        java: { center: [-7.6145, 110.7123], zoom: 7 },
        kalimantan: { center: [-1.5, 114], zoom: 6 },
        sulawesi: { center: [-2.5, 121], zoom: 6 },
        bali: { center: [-8.4095, 115.1889], zoom: 8 },
        papua: { center: [-4, 138], zoom: 6 },
    };

    // Data pabrik (list lokasi industri)
    const industrialSites = [
        {
            name: 'Jakarta Plant A',
            lat: -6.2088,
            lng: 106.8456,
            region: 'java',
            industry: 'automotive',
            oee: 91,
            downtime: 3.2,
            energy: 1250,
            production: 12450,
        },
        {
            name: 'Surabaya Plant C',
            lat: -7.2504,
            lng: 112.7688,
            region: 'java',
            industry: 'electronics',
            oee: 88,
            downtime: 4.1,
            energy: 980,
            production: 10230,
        },
        {
            name: 'Bandung Electronics',
            lat: -6.9175,
            lng: 107.6191,
            region: 'java',
            industry: 'electronics',
            oee: 86,
            downtime: 5.3,
            energy: 870,
            production: 8970,
        },
        {
            name: 'Medan Assembly',
            lat: 3.5952,
            lng: 98.6722,
            region: 'sumatra',
            industry: 'automotive',
            oee: 79,
            downtime: 8.7,
            energy: 1100,
            production: 6540,
        },
        {
            name: 'Palembang Chemical',
            lat: -2.9761,
            lng: 104.7759,
            region: 'sumatra',
            industry: 'chemical',
            oee: 84,
            downtime: 5.2,
            energy: 2050,
            production: 8450,
        },
        {
            name: 'Balikpapan Refinery',
            lat: -1.2379,
            lng: 116.8529,
            region: 'kalimantan',
            industry: 'energy',
            oee: 77,
            downtime: 9.1,
            energy: 3200,
            production: 5210,
        },
        {
            name: 'Samarinda Timber',
            lat: -0.5022,
            lng: 117.1536,
            region: 'kalimantan',
            industry: 'wood',
            oee: 72,
            downtime: 11.4,
            energy: 890,
            production: 4320,
        },
        {
            name: 'Makassar Food',
            lat: -5.1477,
            lng: 119.4327,
            region: 'sulawesi',
            industry: 'food',
            oee: 83,
            downtime: 6.2,
            energy: 760,
            production: 7890,
        },
        {
            name: 'Manado Fisheries',
            lat: 1.4748,
            lng: 124.8421,
            region: 'sulawesi',
            industry: 'food',
            oee: 76,
            downtime: 10.2,
            energy: 540,
            production: 3560,
        },
        {
            name: 'Denpasar Tourism',
            lat: -8.6705,
            lng: 115.2126,
            region: 'bali',
            industry: 'logistics',
            oee: 92,
            downtime: 2.5,
            energy: 430,
            production: 15200,
        },
        {
            name: 'Jayapura Mining',
            lat: -2.5333,
            lng: 140.7167,
            region: 'papua',
            industry: 'mining',
            oee: 68,
            downtime: 14.2,
            energy: 2780,
            production: 3240,
        },
    ];

    // Data layer berdasarkan metrik
    function generateLayerData(metric) {
        return industrialSites.map((site) => ({
            lat: site.lat,
            lng: site.lng,
            name: site.name,
            region: site.region,
            industry: site.industry,
            value: site[metric],
            metric: metric,
            description: `${site.name} (${site.industry}) - ${metric.toUpperCase()}: ${site[metric]}${metric === 'oee' ? '%' : metric === 'energy' ? ' MWh' : metric === 'production' ? ' units' : '%'}`,
        }));
    }

    let layerData = {
        oee: generateLayerData('oee'),
        downtime: generateLayerData('downtime'),
        energy: generateLayerData('energy'),
        production: generateLayerData('production'),
    };

    // Regional stats (data agregat)
    function getRegionStats(region) {
        const plants = industrialSites.filter((p) =>
            region === 'all' ? true : p.region === region,
        );
        const avgOee = (
            plants.reduce((a, b) => a + b.oee, 0) / plants.length
        ).toFixed(1);
        const totalPlants = plants.length;
        const avgEnergySaved = 23; // demo
        return { oee: avgOee, plants: totalPlants, energySaved: avgEnergySaved };
    }

    function updateRegionStats() {
        const stats = getRegionStats(currentRegion);
        document.getElementById('region-score').innerText = `${stats.oee}%`;
        document.getElementById('active-plants').innerText = stats.plants;
        document.getElementById('avg-oee').innerText = `${stats.oee}%`;
        document.getElementById('energy-saved').innerText = `${stats.energySaved}%`;
    }

    function initMap() {
        if (typeof L === 'undefined') {
            setTimeout(initMap, 500);
            return;
        }
        const mapContainer = document.getElementById('industrialMap');
        if (!mapContainer) {
            setTimeout(initMap, 500);
            return;
        }
        try {
            mainMap = L.map('industrialMap', {
                center: regionCoordinates.all.center,
                zoom: regionCoordinates.all.zoom,
                zoomControl: false,
            });
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; OpenStreetMap',
                maxZoom: 19,
            }).addTo(mainMap);
            mainMap.on('mousemove', function (e) {
                document.getElementById('coordinates').innerText =
                    `Lat: ${e.latlng.lat.toFixed(4)}, Lng: ${e.latlng.lng.toFixed(4)}`;
            });
            addSampleData();
            setTimeout(() => {
                if (mainMap) mainMap.invalidateSize();
                loadTopPlants();
                loadInitiatives();
            }, 300);
        } catch (error) {
            console.error(error);
        }
    }

    function addSampleData() {
        if (!mainMap) return;
        clearMarkers();
        let data = layerData[activeLayer];
        if (currentRegion !== 'all')
            data = data.filter((item) => item.region === currentRegion);
        if (viewMode === 'clusters') {
            markerClusters = L.markerClusterGroup({
                chunkedLoading: true,
                maxClusterRadius: 50,
            });
            data.forEach((point) => {
                const icon = createCustomIcon(point.value, activeLayer);
                const marker = L.marker([point.lat, point.lng], { icon }).bindPopup(
                    createPopupContent(point),
                );
                markerClusters.addLayer(marker);
            });
            mainMap.addLayer(markerClusters);
        } else {
            data.forEach((point) => {
                const icon = createCustomIcon(point.value, activeLayer);
                const marker = L.marker([point.lat, point.lng], { icon })
                    .addTo(mainMap)
                    .bindPopup(createPopupContent(point));
                currentMarkers.push(marker);
            });
        }
        updateLegend();
        updateRegionStats();
    }

    function createPopupContent(point) {
        const isMobile = window.innerWidth < 768;
        const unit =
            activeLayer === 'oee'
                ? '%'
                : activeLayer === 'energy'
                  ? ' MWh'
                  : activeLayer === 'production'
                    ? ' units'
                    : '%';
        return `<div class="p-2 max-w-[200px] bg-white rounded shadow"><strong class="text-gray-800">${point.name}</strong><br><span class="text-xs text-gray-600">Industry: ${point.industry}</span><br><span class="text-xs font-bold text-cyan-600">${activeLayer.toUpperCase()}: ${point.value}${unit}</span><br><span class="text-xs text-gray-500">Region: ${point.region}</span></div>`;
    }

    function createCustomIcon(value, metric) {
        let color;
        if (metric === 'oee') {
            if (value >= 85) color = '#22c55e';
            else if (value >= 70) color = '#eab308';
            else if (value >= 50) color = '#f97316';
            else color = '#ef4444';
        } else if (metric === 'downtime') {
            if (value <= 5) color = '#22c55e';
            else if (value <= 10) color = '#eab308';
            else color = '#ef4444';
        } else if (metric === 'energy') {
            if (value <= 1000) color = '#22c55e';
            else if (value <= 2000) color = '#eab308';
            else color = '#ef4444';
        } else {
            color = '#06b6d4';
        }

        // Ukuran marker besar (20px)
        const size = 20;
        const iconHtml = `
            <div class="relative" style="width: ${size}px; height: ${size}px;">
                <div style="width: ${size}px; height: ${size}px; background-color: ${color}; border-radius: 50%; border: 3px solid white; box-shadow: 0 0 0 2px rgba(0,0,0,0.3), 0 2px 8px rgba(0,0,0,0.2); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-industry text-white text-xs" style="font-size: 10px;"></i>
                </div>
                <div style="position: absolute; top: -4px; right: -4px; width: 10px; height: 10px; background-color: white; border-radius: 50%; border: 1px solid ${color}; animation: pulse 1s infinite;"></div>
            </div>
        `;

        // Tambahkan keyframes untuk animasi pulse
        if (!document.querySelector('#marker-pulse-style')) {
            const style = document.createElement('style');
            style.id = 'marker-pulse-style';
            style.textContent = `@keyframes pulse { 0% { transform: scale(0.8); opacity: 0.6; } 100% { transform: scale(1.2); opacity: 0; } }`;
            document.head.appendChild(style);
        }

        return L.divIcon({
            html: iconHtml,
            className: 'custom-marker',
            iconSize: [size, size],
            iconAnchor: [size / 2, size / 2],
            popupAnchor: [0, -size / 2],
        });
    }

    function switchLayer(layer) {
        activeLayer = layer;
        document
            .querySelectorAll('.layer-btn')
            .forEach((btn) =>
                btn.classList.remove('text-cyan-400', 'bg-cyan-500/20'),
            );
        document
            .getElementById(`${layer}-btn`)
            .classList.add('text-cyan-400', 'bg-cyan-500/20');
        updateLegend();
        addSampleData();
        updateRegionStats();
    }

    function updateLegend() {
        const titles = {
            oee: 'OEE Performance',
            downtime: 'Downtime (%)',
            energy: 'Energy Consumption (MWh)',
            production: 'Production Rate (units)',
        };
        document.getElementById('legend-title').innerHTML =
            `<i class="fas fa-chart-line text-cyan-400 mr-2"></i> ${titles[activeLayer]}`;
        let legendHtml = '';
        if (activeLayer === 'oee')
            legendHtml = `<div class="space-y-1"><div class="flex items-center"><div class="w-3 h-3 rounded-full bg-green-500 mr-2"></div><span class="text-xs text-gray-300">≥85% (Excellent)</span></div><div class="flex items-center"><div class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></div><span class="text-xs text-gray-300">70-84% (Good)</span></div><div class="flex items-center"><div class="w-3 h-3 rounded-full bg-orange-500 mr-2"></div><span class="text-xs text-gray-300">50-69% (Needs Imp.)</span></div><div class="flex items-center"><div class="w-3 h-3 rounded-full bg-red-500 mr-2"></div><span class="text-xs text-gray-300">&lt;50% (Critical)</span></div></div>`;
        else if (activeLayer === 'downtime')
            legendHtml = `<div class="space-y-1"><div class="flex items-center"><div class="w-3 h-3 rounded-full bg-green-500 mr-2"></div><span class="text-xs text-gray-300">≤5% (Low)</span></div><div class="flex items-center"><div class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></div><span class="text-xs text-gray-300">6-10% (Medium)</span></div><div class="flex items-center"><div class="w-3 h-3 rounded-full bg-red-500 mr-2"></div><span class="text-xs text-gray-300">&gt;10% (High)</span></div></div>`;
        else
            legendHtml = `<div class="text-xs text-gray-300">Higher values indicate more consumption / output</div>`;
        document.getElementById('legend-content').innerHTML = legendHtml;
    }

    function filterByRegion(region) {
        currentRegion = region;
        const regionName =
            document.getElementById('region-filter').options[
                document.getElementById('region-filter').selectedIndex
            ].text;
        document.getElementById('region-name').innerText = regionName;
        if (regionCoordinates[region])
            mainMap.setView(
                regionCoordinates[region].center,
                regionCoordinates[region].zoom,
            );
        addSampleData();
        showMapInfo('Region Filter', `Showing data for ${regionName}`);
    }

    function focusOnRegion(region) {
        currentRegion = region;
        document.getElementById('region-filter').value = region;
        filterByRegion(region);
    }
    function resetView() {
        currentRegion = 'all';
        document.getElementById('region-filter').value = 'all';
        document.getElementById('region-name').innerText = 'Indonesia';
        mainMap.setView(regionCoordinates.all.center, regionCoordinates.all.zoom);
        addSampleData();
        showMapInfo('View Reset', 'Returned to full Indonesia view');
    }
    function toggleViewMode() {
        viewMode = viewMode === 'markers' ? 'clusters' : 'markers';
        document.getElementById('view-mode-btn').innerHTML =
            viewMode === 'markers'
                ? '<i class="fas fa-layer-group mr-1"></i>Markers'
                : '<i class="fas fa-object-group mr-1"></i>Clusters';
        addSampleData();
    }
    function toggleSatelliteView() {
        satelliteView = !satelliteView;
        const btn = document.getElementById('satellite-btn');
        if (satelliteView) {
            mainMap.eachLayer((l) => {
                if (l instanceof L.TileLayer) mainMap.removeLayer(l);
            });
            satelliteLayer = L.tileLayer(
                'https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',
                { maxZoom: 20, subdomains: ['mt0', 'mt1', 'mt2', 'mt3'] },
            ).addTo(mainMap);
            btn.classList.add('bg-blue-600/20', 'text-blue-400');
        } else {
            mainMap.eachLayer((l) => {
                if (l instanceof L.TileLayer) mainMap.removeLayer(l);
            });
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; OpenStreetMap',
            }).addTo(mainMap);
            btn.classList.remove('bg-blue-600/20', 'text-blue-400');
        }
    }
    function toggleHeatmap() {
        /* implement heatmap jika perlu */ showMapInfo(
            'Heatmap',
            'Heatmap not implemented in demo',
        );
    }
    function useCurrentLocation() {
        if (navigator.geolocation)
            navigator.geolocation.getCurrentPosition((p) =>
                mainMap.setView([p.coords.latitude, p.coords.longitude], 12),
            );
        else showMapInfo('Error', 'Geolocation not supported');
    }
    function toggleFullscreen() {
        const el = document.getElementById('industrialMap');
        if (!document.fullscreenElement) el.requestFullscreen();
        else document.exitFullscreen();
    }
    function clearMarkers() {
        currentMarkers.forEach((m) => mainMap.removeLayer(m));
        currentMarkers = [];
        if (markerClusters) mainMap.removeLayer(markerClusters);
        if (heatmapLayer) mainMap.removeLayer(heatmapLayer);
    }
    function showMapInfo(title, content) {
        const panel = document.getElementById('map-info');
        document.getElementById('info-title').innerText = title;
        document.getElementById('info-content').innerText = content;
        panel.classList.remove('hidden');
        setTimeout(() => panel.classList.add('hidden'), 5000);
    }
    function loadTopPlants() {
        const container = document.getElementById('top-plants');
        container.innerHTML = industrialSites
            .sort((a, b) => b.oee - a.oee)
            .slice(0, 5)
            .map(
                (p, i) =>
                    `<div class="flex justify-between items-center p-2 border-b border-gray-700"><div class="flex items-center gap-3"><span class="text-cyan-400 font-bold">${i + 1}</span><span>${p.name}</span></div><span class="text-green-400">${p.oee}% OEE</span></div>`,
            )
            .join('');
    }
    function loadInitiatives() {
        const container = document.getElementById('initiatives-list');
        container.innerHTML = `<div class="py-2"><p class="text-sm text-white">Predictive Maintenance Rollout</p><p class="text-xs text-gray-400">Targeting 15% downtime reduction by Q3</p></div><div class="py-2"><p class="text-sm text-white">Energy Efficiency Program</p><p class="text-xs text-gray-400">23% energy saved across Java plants</p></div><div class="py-2"><p class="text-sm text-white">Digital Twin Implementation</p><p class="text-xs text-gray-400">Pilot at Jakarta Plant A</p></div>`;
    }

    document.addEventListener('DOMContentLoaded', initMap);
    document.addEventListener('livewire:load', initMap);
</script>

@push ('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', initMap);
        document.addEventListener('livewire:load', initMap);
    </script>
@endpush
