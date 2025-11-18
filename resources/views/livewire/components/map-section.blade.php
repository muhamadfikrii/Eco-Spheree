<div class="w-full" wire:ignore>
    
    <div class="flex flex-col p-2 lg:flex-row lg:items-center lg:justify-between mb-6 gap-4 flex-wrap overflow-x-auto">
        <div class="flex items-center">
            <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center mr-3 shadow-lg">
                <i class="fas fa-leaf text-white"></i>
            </div>
            <div>
                <h2 class="text-xl sm:text-2xl md:text-3xl">Eco-Track Indonesia Map</h2>
                <p class="text-sm text-gray-400">Environmental data across Indonesia</p>
            </div>
        </div>
        
        <div class="flex flex-col sm:flex-row sm:items-center gap-3">
            <!-- Region Filter -->
            <div class="bg-gray-800/70 backdrop-blur-md rounded-lg p-1 flex border border-gray-700 w-full sm:w-auto">
                <select id="region-filter" onchange="filterByRegion(this.value)" 
                    class="bg-transparent border-0 text-xs text-gray-300 focus:ring-0 px-2 w-full sm:w-auto">
                    <option value="all">All Indonesia</option>
                    <option value="sumatra">Sumatra</option>
                    <option value="java">Java</option>
                    <option value="kalimantan">Kalimantan</option>
                    <option value="sulawesi">Sulawesi</option>
                    <option value="bali">Bali & Nusa Tenggara</option>
                    <option value="papua">Papua & Maluku</option>
                </select>
            </div>

            <!-- Layer Toggle -->
            <div class="bg-gray-800/70 backdrop-blur-md rounded-lg p-1 gap-5 text-center flex border border-gray-700 w-full sm:w-full">
                <button 
                    onclick="switchLayer('carbon')" 
                    id="carbon-btn"
                    class="layer-btn flex-1 px-3 py-1.5 text-xs rounded-md font-medium transition-colors text-gray-400 hover:text-white"
                >
                    Carbon
                </button>
                <button 
                    onclick="switchLayer('transport')"
                    id="transport-btn"
                    class="layer-btn flex-1 px-3 py-1.5 text-xs rounded-md font-medium transition-colors text-gray-400 hover:text-white"
                >
                    Transport
                </button>
                <button 
                    onclick="switchLayer('energy')"
                    id="energy-btn"
                    class="layer-btn flex-1 px-3 py-1.5 text-xs rounded-md font-medium transition-colors text-gray-400 hover:text-white"
                >
                    Energy
                </button>
                <button 
                    onclick="switchLayer('biodiversity')"
                    id="biodiversity-btn"
                    class="layer-btn flex-1 px-3 py-1.5 text-xs rounded-md font-medium transition-colors text-gray-400 hover:text-white"
                >
                    Biodiversity
                </button>
            </div>

            <!-- View Mode Toggle -->
            <div class="bg-gray-800/70 backdrop-blur-md rounded-lg p-1 flex border border-gray-700 w-full sm:w-auto">
                <button 
                    onclick="toggleViewMode()" 
                    id="view-mode-btn"
                    class="w-full px-3 py-1.5 text-xs rounded-md font-medium transition-colors text-gray-400 hover:text-white"
                    title="Toggle between markers and heatmap"
                >
                    <i class="fas fa-layer-group mr-1"></i>Markers
                </button>
            </div>
        </div>
    </div>

    <!-- Main Map Container -->
    <div class="relative bg-gray-800/30 rounded-2xl border border-gray-700/50 overflow-hidden shadow-xl">
        <!-- Legend -->
        <div class="absolute top-4 left-4 -z-10 bg-gray-900/90 backdrop-blur-md p-4 rounded-xl shadow-xl border border-gray-700/50 min-w-[150px] sm:min-w-[200px]">
            <h3 class="text-sm font-semibold text-white mb-3 flex items-center gap-2">
                <i class="fas fa-layer-group text-green-400"></i>
                <span id="legend-title">Carbon Footprint</span>
            </h3>
            <div id="legend-content">
                
            </div>
        </div>

       <!-- Regional Stats -->
        <div class="absolute top-4 right-4 z-[998] bg-gray-900/90 backdrop-blur-md p-3 sm:p-4 rounded-xl shadow-xl border border-gray-700/50 min-w-[160px] sm:min-w-[220px]">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 mb-3">
                <span class="text-sm text-gray-300 truncate" id="region-name">Indonesia</span>
                <div class="flex items-center bg-green-900/30 px-2 py-1 rounded-full sm:ml-auto">
                    <span class="text-sm text-green-400 font-bold" id="region-score">68/100</span>
                </div>
            </div>
            <div class="space-y-2">
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-400">Active Projects</span>
                    <span class="text-xs text-blue-400 font-medium" id="active-projects">247</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-400">Carbon Reduced</span>
                    <span class="text-xs text-green-400 font-medium" id="carbon-reduced">45.2t</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-400">Forest Coverage</span>
                    <span class="text-xs text-emerald-400 font-medium" id="forest-coverage">52%</span>
                </div>
            </div>
        </div>

        <!-- Map Controls -->
        <div class="absolute top-20 md:top-56 pl-3 sm:right-2 flex flex-col space-y-2">
            <button 
                onclick="toggleSatelliteView()"
                id="satellite-btn"
                class="bg-gray-900/90 backdrop-blur-md z-[998] text-white p-2 md:p-3 rounded-xl shadow-lg border border-gray-700/50 hover:bg-gray-800/90 transition-all duration-300"
                title="Satellite View"
            >
                <i class="fas fa-satellite"></i>
            </button>
        </div>

        <div class="absolute bottom-20 left-4 z-10 bg-gray-900/90 backdrop-blur-md p-3 rounded-xl shadow-xl border border-gray-700/50 hidden" id="map-info">
            <div class="text-xs text-gray-300">
                <div class="flex items-center gap-2 mb-2">
                    <i class="fas fa-info-circle text-blue-400"></i>
                    <span id="info-title">Map Information</span>
                </div>
                <p id="info-content" class="text-gray-400"></p>
            </div>
        </div>

        <!-- Main Map -->
        <div id="ecoMainMap" class="w-full h-[300px] sm:h-[400px] md:h-[500px] lg:h-[600px] -z-998 rounded-xl bg-gray-700"></div>
            <div class="absolute bottom-4 right-4 z-[998] flex flex-wrap justify-end gap-2 px-4
                    sm:right-auto sm:left-1/2 sm:transform sm:-translate-x-1/2 sm:justify-center">
                <button 
                    onclick="useCurrentLocation()"
                    class="bg-gray-900/90 backdrop-blur-md text-white p-2.5 sm:p-3 rounded-xl shadow-lg border border-gray-700/50 hover:bg-gray-800/90 transition-all duration-300 transform hover:scale-105"
                    title="Find My Location"
                >
                    <i class="fas fa-crosshairs text-sm sm:text-base"></i>
                </button>
                <button 
                    onclick="toggleHeatmap()"
                    id="heatmap-btn"
                    class="bg-gray-900/90 backdrop-blur-md text-white p-2.5 sm:p-3 rounded-xl shadow-lg border border-gray-700/50 hover:bg-gray-800/90 transition-all duration-300 transform hover:scale-105"
                    title="Toggle Heatmap"
                >
                    <i class="fas fa-fire text-sm sm:text-base"></i>
                </button>
                <button 
                    onclick="resetView()"
                    class="bg-gray-900/90 backdrop-blur-md text-white p-2.5 sm:p-3 rounded-xl shadow-lg border border-gray-700/50 hover:bg-gray-800/90 transition-all duration-300 transform hover:scale-105"
                    title="Reset View"
                >
                    <i class="fas fa-home text-sm sm:text-base"></i>
                </button>
                <button 
                    onclick="toggleFullscreen()"
                    class="bg-gray-900/90 backdrop-blur-md text-white p-2.5 sm:p-3 rounded-xl shadow-lg border border-gray-700/50 hover:bg-gray-800/90 transition-all duration-300 transform hover:scale-105"
                    title="Fullscreen"
                >
                    <i class="fas fa-expand text-sm sm:text-base"></i>
                </button>
            </div>

            <!-- Coordinates Display (Bottom Left on All Screens) -->
            <div class="absolute bottom-4 left-4 z-[998] bg-gray-900/90 backdrop-blur-md px-2 py-1.5 sm:px-3 sm:py-2 rounded-xl shadow-xl border border-gray-700/50">
                <div class="text-xs text-gray-400">
                    <span id="coordinates">Lat: -2.5489, Lng: 118.0149</span>
                </div>
            </div>
    </div>

   <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 md:gap-6 m-5">
        <div class="bg-gradient-to-br from-green-500/10 to-emerald-600/10 backdrop-blur-sm rounded-xl p-4 border border-green-500/20 hover:border-green-400/40 transition-all duration-300 cursor-pointer" onclick="focusOnRegion('sumatra')">
            <div class="flex flex-1 items-center justify-between">
                <div>
                    <p class="text-xs text-green-400 font-medium">Sumatra</p>
                    <p class="text-white font-bold text-lg">172.5k tons CO₂</p>
                    <p class="text-xs text-green-300 mt-1">↓ 8% from 2023</p>
                </div>
                <div class="w-10 h-10 bg-green-500/20 rounded-lg flex items-center justify-center">
                    <i class="fas fa-mountain text-green-400"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-gradient-to-br from-blue-500/10 to-cyan-600/10 backdrop-blur-sm rounded-xl p-4 border border-blue-500/20 hover:border-blue-400/40 transition-all duration-300 cursor-pointer" onclick="focusOnRegion('java')">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs text-blue-400 font-medium">Java</p>
                    <p class="text-white font-bold text-lg">245.0k tons CO₂</p>
                    <p class="text-xs text-blue-300 mt-1">↓ 12% from 2023</p>
                </div>
                <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center">
                    <i class="fas fa-city text-blue-400"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-gradient-to-br from-purple-500/10 to-pink-600/10 backdrop-blur-sm rounded-xl p-4 border border-purple-500/20 hover:border-purple-400/40 transition-all duration-300 cursor-pointer" onclick="focusOnRegion('kalimantan')">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs text-purple-400 font-medium">Kalimantan</p>
                    <p class="text-white font-bold text-lg">138.4k tons CO₂</p>
                    <p class="text-xs text-purple-300 mt-1">↓ 15% from 2023</p>
                </div>
                <div class="w-10 h-10 bg-purple-500/20 rounded-lg flex items-center justify-center">
                    <i class="fas fa-tree text-purple-400"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-gradient-to-br from-orange-500/10 to-red-600/10 backdrop-blur-sm rounded-xl p-4 border border-orange-500/20 hover:border-orange-400/40 transition-all duration-300 cursor-pointer" onclick="focusOnRegion('sulawesi')">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs text-orange-400 font-medium">Sulawesi</p>
                    <p class="text-white font-bold text-lg">78.6k tons CO₂</p>
                    <p class="text-xs text-orange-300 mt-1">↓ 5% from 2023</p>
                </div>
                <div class="w-10 h-10 bg-orange-500/20 rounded-lg flex items-center justify-center">
                    <i class="fas fa-water text-orange-400"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8">
        <h3 class="text-lg ml-1 sm:ml-2 font-semibold text-white mb-4 flex items-center gap-2">
            <i class="fas fa-chart-line text-green-400"></i>
            Regional Data Insights
        </h3>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-gray-800/30 rounded-xl p-6 border border-gray-700/50">
                <h4 class="text-md font-semibold text-white mb-4">Top 5 Cities by Carbon Reduction</h4>
                <div class="space-y-6" id="top-cities">
                </div>
            </div>
            <div class="bg-gray-800/30 rounded-xl p-6 border border-gray-700/50">
                <h4 class="text-md font-semibold text-white mb-4">Environmental Initiatives</h4>
                <div class="space-y-3" id="initiatives-list">
                </div>
            </div>
        </div>
    </div>
    
</div>

<script>

let mainMap = null;
let currentMarkers = [];
let activeLayer = 'carbon';
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
    papua: { center: [-4, 138], zoom: 6 }
};

const indonesianCities = [
    // Sumatra
    { name: "Banda Aceh", lat: 5.5483, lng: 95.3238, region: "sumatra" },
    { name: "Medan", lat: 3.5952, lng: 98.6722, region: "sumatra" },
    { name: "Padang", lat: -0.9471, lng: 100.4172, region: "sumatra" },
    { name: "Palembang", lat: -2.9761, lng: 104.7759, region: "sumatra" },
    { name: "Bandar Lampung", lat: -5.4294, lng: 105.2623, region: "sumatra" },
    
    // Java
    { name: "Jakarta", lat: -6.2088, lng: 106.8456, region: "java" },
    { name: "Bandung", lat: -6.9175, lng: 107.6191, region: "java" },
    { name: "Semarang", lat: -6.9667, lng: 110.4167, region: "java" },
    { name: "Yogyakarta", lat: -7.7956, lng: 110.3695, region: "java" },
    { name: "Surabaya", lat: -7.2504, lng: 112.7688, region: "java" },
    
    // Kalimantan
    { name: "Pontianak", lat: -0.0226, lng: 109.3303, region: "kalimantan" },
    { name: "Palangkaraya", lat: -2.2167, lng: 113.9167, region: "kalimantan" },
    { name: "Balikpapan", lat: -1.2379, lng: 116.8529, region: "kalimantan" },
    { name: "Samarinda", lat: -0.5022, lng: 117.1536, region: "kalimantan" },
    { name: "Banjarmasin", lat: -3.3194, lng: 114.5911, region: "kalimantan" },
    
    // Sulawesi
    { name: "Makassar", lat: -5.1477, lng: 119.4327, region: "sulawesi" },
    { name: "Manado", lat: 1.4748, lng: 124.8421, region: "sulawesi" },
    { name: "Palu", lat: -0.9019, lng: 119.8597, region: "sulawesi" },
    { name: "Kendari", lat: -3.9985, lng: 122.513, region: "sulawesi" },
    { name: "Gorontalo", lat: 0.5412, lng: 123.0595, region: "sulawesi" },
    
    // Bali & Nusa Tenggara
    { name: "Denpasar", lat: -8.6705, lng: 115.2126, region: "bali" },
    { name: "Mataram", lat: -8.5833, lng: 116.1167, region: "bali" },
    { name: "Kupang", lat: -10.1833, lng: 123.5833, region: "bali" },
    
    // Papua & Maluku
    { name: "Jayapura", lat: -2.5333, lng: 140.7167, region: "papua" },
    { name: "Manokwari", lat: -0.8667, lng: 134.0833, region: "papua" },
    { name: "Ambon", lat: -3.6954, lng: 128.1814, region: "papua" },
    { name: "Ternate", lat: 0.7833, lng: 127.3667, region: "papua" }
];

const layerData = {
    carbon: generateCarbonData(),
    transport: generateTransportData(),
    energy: generateEnergyData(),
    biodiversity: generateBiodiversityData()
};

const regionStats = {
    sumatra: { score: 74, projects: 120, carbonReduced: "172.5k", forestCoverage: "49%" },
    java: { score: 67, projects: 210, carbonReduced: "245.7k", forestCoverage: "24%" },
    kalimantan: { score: 70, projects: 95, carbonReduced: "138.4k", forestCoverage: "64%" },
    sulawesi: { score: 72, projects: 60, carbonReduced: "78.6k", forestCoverage: "52%" },
    bali: { score: 80, projects: 40, carbonReduced: "25.2k", forestCoverage: "39%" },
    papua: { score: 76, projects: 35, carbonReduced: "83.5k", forestCoverage: "82%" },
    all: { score: 70, projects: 560, carbonReduced: "743.2k", forestCoverage: "52%" }
};

// =============================================
// FUNGSI GENERATOR DATA
// =============================================

function generateCarbonData() {
    const data = [];
    indonesianCities.forEach(city => {
        // Variasi berdasarkan wilayah
        const baseValue = {
            sumatra: 8.2, java: 12.5, kalimantan: 6.8, sulawesi: 7.4, bali: 5.2, papua: 4.7
        }[city.region] || 8.0;
        
        const value = (baseValue + (Math.random() * 4 - 2)).toFixed(1);
        const impact = value < 5 ? 'low' : value < 9 ? 'medium' : value < 12 ? 'high' : 'critical';
        
        const types = ['industrial', 'residential', 'commercial', 'transportation', 'agricultural'];
        const descriptions = [
            'Industrial area emissions',
            'Residential carbon footprint',
            'Commercial district emissions',
            'Transportation network impact',
            'Agricultural activities'
        ];
        
        const typeIndex = Math.floor(Math.random() * types.length);
        
        data.push({
            lat: city.lat,
            lng: city.lng,
            value: parseFloat(value),
            impact: impact,
            type: types[typeIndex],
            description: `${city.name}: ${descriptions[typeIndex]}`,
            date: '2024-01-' + (Math.floor(Math.random() * 28) + 1).toString().padStart(2, '0'),
            city: city.name,
            region: city.region
        });
    });
    return data;
}

function generateTransportData() {
    const data = [];
    indonesianCities.forEach(city => {
        const value = (3 + Math.random() * 8).toFixed(1);
        const impact = value < 5 ? 'low' : value < 8 ? 'medium' : 'high';
        
        const types = ['highway', 'intersection', 'public_transport', 'airport', 'seaport'];
        const descriptions = [
            'Major highway traffic emissions',
            'Busy intersection carbon output',
            'Public transportation network',
            'Airport transportation impact',
            'Seaport logistics emissions'
        ];
        
        const typeIndex = Math.floor(Math.random() * types.length);
        
        data.push({
            lat: city.lat + (Math.random() * 0.2 - 0.1),
            lng: city.lng + (Math.random() * 0.2 - 0.1),
            value: parseFloat(value),
            impact: impact,
            type: types[typeIndex],
            description: `${city.name} ${descriptions[typeIndex]}`,
            date: '2024-01-' + (Math.floor(Math.random() * 28) + 1).toString().padStart(2, '0'),
            city: city.name,
            region: city.region
        });
    });
    return data;
}

function generateEnergyData() {
    const data = [];
    indonesianCities.forEach(city => {
        const value = (4 + Math.random() * 10).toFixed(1);
        const impact = value < 6 ? 'low' : value < 10 ? 'medium' : value < 13 ? 'high' : 'critical';
        
        const types = ['power_plant', 'substation', 'renewable', 'industrial', 'commercial'];
        const descriptions = [
            'Power generation facility',
            'Electrical distribution center',
            'Renewable energy project',
            'Industrial energy consumption',
            'Commercial power usage'
        ];
        
        const typeIndex = Math.floor(Math.random() * types.length);
        
        data.push({
            lat: city.lat + (Math.random() * 0.15 - 0.075),
            lng: city.lng + (Math.random() * 0.15 - 0.075),
            value: parseFloat(value),
            impact: impact,
            type: types[typeIndex],
            description: `${city.name} ${descriptions[typeIndex]}`,
            date: '2024-01-' + (Math.floor(Math.random() * 28) + 1).toString().padStart(2, '0'),
            city: city.name,
            region: city.region
        });
    });
    return data;
}

function generateBiodiversityData() {
    const data = [];
    
    // Tambahkan titik-titik biodiversity di berbagai lokasi
    const biodiversitySpots = [
        // Sumatra
        { name: "Leuser Ecosystem", lat: 3.5, lng: 97.5, region: "sumatra" },
        { name: "Kerinci Seblat", lat: -2.0, lng: 101.5, region: "sumatra" },
        { name: "Way Kambas", lat: -5.0, lng: 105.5, region: "sumatra" },
        
        // Kalimantan
        { name: "Betung Kerihun", lat: 1.0, lng: 113.0, region: "kalimantan" },
        { name: "Tanjung Puting", lat: -3.0, lng: 112.0, region: "kalimantan" },
        { name: "Kayan Mentarang", lat: 3.0, lng: 115.5, region: "kalimantan" },
        
        // Java
        { name: "Ujung Kulon", lat: -6.8, lng: 105.3, region: "java" },
        { name: "Baluran", lat: -7.8, lng: 114.5, region: "java" },
        { name: "Meru Betiri", lat: -8.5, lng: 113.8, region: "java" },
        
        // Sulawesi
        { name: "Lore Lindu", lat: -1.5, lng: 120.2, region: "sulawesi" },
        { name: "Bogani Nani Wartabone", lat: 0.5, lng: 123.5, region: "sulawesi" },
        { name: "Taka Bonerate", lat: -6.5, lng: 121.0, region: "sulawesi" },
        
        // Papua
        { name: "Lorentz", lat: -4.5, lng: 137.5, region: "papua" },
        { name: "Wasur", lat: -8.5, lng: 140.5, region: "papua" },
        { name: "Cenderawasih Bay", lat: -2.5, lng: 134.5, region: "papua" }
    ];
    
    biodiversitySpots.forEach(spot => {
        const value = (60 + Math.random() * 35).toFixed(1); // Biodiversity index
        const impact = value < 70 ? 'low' : value < 85 ? 'medium' : value < 95 ? 'high' : 'critical';
        
        const types = ['national_park', 'wildlife_reserve', 'marine_park', 'conservation_area', 'forest_reserve'];
        const descriptions = [
            'National park biodiversity',
            'Wildlife conservation area',
            'Marine protected area',
            'Forest conservation zone',
            'Endemic species habitat'
        ];
        
        const typeIndex = Math.floor(Math.random() * types.length);
        
        data.push({
            lat: spot.lat,
            lng: spot.lng,
            value: parseFloat(value),
            impact: impact,
            type: types[typeIndex],
            description: `${spot.name}: ${descriptions[typeIndex]}`,
            date: '2024-01-' + (Math.floor(Math.random() * 28) + 1).toString().padStart(2, '0'),
            city: spot.name,
            region: spot.region
        });
    });
    
    return data;
}

// =============================================
// FUNGSI UTAMA MAP
// =============================================

function initMap() {

    
    if (typeof L === 'undefined') {
        setTimeout(initMap, 500);
        return;
    }

    const mapContainer = document.getElementById('ecoMainMap');
    if (!mapContainer) {
        setTimeout(initMap, 500);
        return;
    }

    try {
        mainMap = L.map('ecoMainMap', {
            center: regionCoordinates.all.center,
            zoom: regionCoordinates.all.zoom,
            zoomControl: false
        });

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            maxZoom: 19
        }).addTo(mainMap);

        // L.control.zoom({ position: 'topright'}).addTo(mainMap);

        mainMap.on('mousemove', function(e) {
            document.getElementById('coordinates').textContent = 
                `Lat: ${e.latlng.lat.toFixed(4)}, Lng: ${e.latlng.lng.toFixed(4)}`;
        });

        addSampleData();

        setTimeout(() => {
            if (mainMap) {
                mainMap.invalidateSize();

                
                // Load insights data
                loadTopCities();
                loadInitiatives();
            }
        }, 300);

    } catch (error) {
    }
}

// =============================================
// FUNGSI MANAJEMEN DATA & TAMPILAN
// =============================================

function addSampleData() {
    if (!mainMap) return;
    
    clearMarkers();

    // Filter data berdasarkan region
    let data = layerData[activeLayer];
    if (currentRegion !== 'all') {
        data = data.filter(item => item.region === currentRegion);
    }

    if (viewMode === 'clusters') {
        // Buat cluster group
        markerClusters = L.markerClusterGroup({
            chunkedLoading: true,
            maxClusterRadius: 50,
            spiderfyOnMaxZoom: true,
            showCoverageOnHover: true,
            zoomToBoundsOnClick: true
        });
        
        data.forEach(point => {
            const color = getImpactColor(point.impact);
            const icon = createCustomIcon(point.impact, point.type);
            
            const marker = L.marker([point.lat, point.lng], { icon })
                .bindPopup(createPopupContent(point))
                .on('click', function() {
                    showMapInfo(point.description, `Impact level: ${point.impact}`);
                });
            
            markerClusters.addLayer(marker);
        });
        
        mainMap.addLayer(markerClusters);
        
    } else {
        data.forEach(point => {
            const color = getImpactColor(point.impact);
            const icon = createCustomIcon(point.impact, point.type);
            
            const marker = L.marker([point.lat, point.lng], { icon })
                .addTo(mainMap)
                .bindPopup(createPopupContent(point))
                .on('click', function() {
                    showMapInfo(point.description, `Impact level: ${point.impact}`);
                });

            currentMarkers.push(marker);
        });
    }

    updateLegend();
    updateRegionStats();
}

function createPopupContent(point) {
    const isMobile = window.innerWidth < 768;
    const maxWidth = isMobile ? 'max-w-[180px]' : 'max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg';
    const padding = isMobile ? 'p-2' : 'p-4';
    const textSize = isMobile ? 'text-xs' : 'text-sm';
    const gap = isMobile ? 'gap-1' : 'gap-2';
    const mb = isMobile ? 'mb-1' : 'mb-2';

    return `
        <div class="w-full ${maxWidth} ${padding} bg-white rounded-lg shadow-lg border border-gray-200">
            <div class="flex items-center ${gap} ${mb}">
                <div class="w-2 h-2 rounded-full" style="background-color: ${getImpactColor(point.impact)}"></div>
                <strong class="text-gray-800 text-xs font-semibold truncate">${point.city}</strong>
            </div>
            <p class="${textSize} text-gray-600 mb-2 leading-tight">${point.description}</p>
            <div class="grid grid-cols-1 gap-1 text-xs">
                <div class="flex justify-between items-center">
                    <span class="text-gray-500 text-xs">${getValueLabel()}:</span>
                    <span class="font-medium text-gray-700 text-xs">${point.value} ${getValueUnit()}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-500 text-xs">Impact:</span>
                    <span class="font-medium capitalize text-xs" style="color: ${getImpactColor(point.impact)}">${point.impact}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-500 text-xs">Region:</span>
                    <span class="font-medium text-gray-700 capitalize text-xs">${point.region}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-500 text-xs">Date:</span>
                    <span class="font-medium text-gray-700 text-xs">${point.date}</span>
                </div>
            </div>
        </div>
    `;
}

function createCustomIcon(impact, type) {
    const color = getImpactColor(impact);
    const size = getIconSize(impact);
    
    // Icon mapping untuk setiap tipe data
    const iconMap = {
        carbon: {
            industrial: 'fa-industry',
            residential: 'fa-home',
            commercial: 'fa-building',
            transportation: 'fa-truck',
            agricultural: 'fa-tractor'
        },
        transport: {
            highway: 'fa-road',
            intersection: 'fa-traffic-light',
            public_transport: 'fa-bus',
            airport: 'fa-plane',
            seaport: 'fa-ship'
        },
        energy: {
            power_plant: 'fa-bolt',
            substation: 'fa-industry',
            renewable: 'fa-sun',
            industrial: 'fa-factory',
            commercial: 'fa-city'
        },
        biodiversity: {
            national_park: 'fa-tree',
            wildlife_reserve: 'fa-paw',
            marine_park: 'fa-water',
            conservation_area: 'fa-leaf',
            forest_reserve: 'fa-mountain'
        }
    };
    
    const iconClass = iconMap[activeLayer]?.[type] || 'fa-circle';
    
    return L.divIcon({
        html: `
            <div class="relative">
                <div class="w-${size} h-${size} rounded-full border-2 border-white shadow-lg flex items-center justify-center" 
                     style="background-color: ${color}">
                    <i class="fas ${iconClass} text-white text-xs"></i>
                </div>
            </div>
        `,
        className: 'custom-marker',
        iconSize: [size * 4, size * 4],
        iconAnchor: [size * 2, size * 2]
    });
}

// =============================================
// FUNGSI INTERAKSI & FILTER
// =============================================

function switchLayer(layer) {
    activeLayer = layer;
    
    const baseClasses = 'layer-btn flex-1 px-3 py-1.5 text-xs rounded-md font-medium transition-colors';
    const inactiveClasses = 'text-gray-400 hover:text-white';
    
    ['carbon', 'transport', 'energy', 'biodiversity'].forEach(l => {
        const btn = document.getElementById(`${l}-btn`);
        if (btn) {
            btn.className = `${baseClasses} ${inactiveClasses}`;
        }
    });
    
    const activeBtn = document.getElementById(`${layer}-btn`);
    if (activeBtn) {
        const colors = {
            carbon: 'text-green-400 bg-green-100/10',
            transport: 'text-blue-400 bg-blue-100/10',
            energy: 'text-yellow-400 bg-yellow-100/10',
            biodiversity: 'text-emerald-400 bg-emerald-100/10'
        };
        // Terapkan class dasar + class warna teks aktif
        activeBtn.className = `${baseClasses} ${colors[layer]}`;
    }
    
    updateLegend();
    addSampleData();
    updateRegionStats();
}

function filterByRegion(region) {
    currentRegion = region;
    const regionName = document.getElementById('region-filter').options[document.getElementById('region-filter').selectedIndex].text;
    document.getElementById('region-name').textContent = regionName;
    
    if (regionCoordinates[region]) {
        mainMap.setView(regionCoordinates[region].center, regionCoordinates[region].zoom);
    }
    
    addSampleData(); 
    showMapInfo('Region Filter', `Showing data for ${regionName}`);
}

function focusOnRegion(region) {
    currentRegion = region;
    document.getElementById('region-filter').value = region;
    filterByRegion(region);
}


function toggleSatelliteView() {
    satelliteView = !satelliteView;
    const btn = document.getElementById('satellite-btn');
    
    if (satelliteView) {
        // Hapus tile layer default
        mainMap.eachLayer((layer) => {
            if (layer instanceof L.TileLayer) {
                mainMap.removeLayer(layer);
            }
        });
        
        satelliteLayer = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            attribution: '&copy; Google'
        }).addTo(mainMap);
        
        btn.classList.add('bg-blue-600/20', 'text-blue-400');
        showMapInfo('Satellite View', 'Switched to satellite imagery');
    } else {
        // Kembali ke default view
        mainMap.eachLayer((layer) => {
            if (layer instanceof L.TileLayer) {
                mainMap.removeLayer(layer);
            }
        });
        
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors',
            maxZoom: 19
        }).addTo(mainMap);
        
        btn.classList.remove('bg-blue-600/20', 'text-blue-400');
        showMapInfo('Standard View', 'Switched to standard map view');
    }
}

function toggleHeatmap() {
    if (!mainMap) return;

    showHeatmap = !showHeatmap;
    const btn = document.getElementById('heatmap-btn');

    if (showHeatmap) {
        // Sembunyikan marker dan cluster saat heatmap aktif
        clearMarkers();

        let data = layerData[activeLayer];
        if (currentRegion !== 'all') {
            data = data.filter(item => item.region === currentRegion);
        }

        const heatmapData = data.map(point => {
            return [point.lat, point.lng, point.value / (activeLayer === 'biodiversity' ? 20 : 10)];
        });

        heatmapLayer = L.heatLayer(heatmapData, {
            radius: 25,
            blur: 15,
            maxZoom: 17,
            gradient: {
                0.2: 'blue',
                0.4: 'cyan',
                0.6: 'lime',
                0.8: 'yellow',
                1.0: 'red'
            }
        }).addTo(mainMap);

        btn.classList.add('bg-red-600/20', 'text-red-400');
        showMapInfo('Heatmap Enabled', 'Visualizing data intensity across the region');
    } else {
        if (heatmapLayer) {
            mainMap.removeLayer(heatmapLayer);
            heatmapLayer = null;
        }
        btn.classList.remove('bg-red-600/20', 'text-red-400');
        // Tampilkan kembali marker setelah heatmap dimatikan
        addSampleData();
        showMapInfo('Heatmap Disabled', 'Returning to marker view');
    }
}

function resetView() {
    currentRegion = 'all';
    document.getElementById('region-filter').value = 'all';
    document.getElementById('region-name').textContent = 'Indonesia';

    if (mainMap && regionCoordinates.all) {
        mainMap.setView(regionCoordinates.all.center, regionCoordinates.all.zoom);
    }

    addSampleData();
    showMapInfo('View Reset', 'Returned to full Indonesia view');
}


function updateLegend() {
    const titles = {
        carbon: 'Carbon Footprint (tons CO₂)',
        transport: 'Transport Emissions (tons CO₂)',
        energy: 'Energy Consumption (MWh)',
        biodiversity: 'Biodiversity Index (%)'
    };
    
    document.getElementById('legend-title').textContent = titles[activeLayer] || 'Map Legend';
    
    const legends = {
        carbon: createCarbonLegend(),
        transport: createTransportLegend(),
        energy: createEnergyLegend(),
        biodiversity: createBiodiversityLegend()
    };
    
    document.getElementById('legend-content').innerHTML = legends[activeLayer] || legends.carbon;
}

function updateRegionStats() {
    const stats = regionStats[currentRegion] || regionStats.all;
    document.getElementById('region-score').textContent = `${stats.score}/100`;
    document.getElementById('active-projects').textContent = stats.projects;
    document.getElementById('carbon-reduced').textContent = stats.carbonReduced;
    document.getElementById('forest-coverage').textContent = stats.forestCoverage;
}

function getImpactColor(impact) {
    const colors = {
        low: '#10B981',     
        medium: '#F59E0B',  
        high: '#F97316',    
        critical: '#EF4444' 
    };
    return colors[impact] || '#6B7280';
}

function getIconSize(impact) {
    const sizes = {
        low: 8,
        medium: 10,
        high: 12,
        critical: 14
    };
    return sizes[impact] || 10;
}

function getValueLabel() {
    const labels = {
        carbon: 'Carbon',
        transport: 'Emissions',
        energy: 'Consumption',
        biodiversity: 'Biodiversity'
    };
    return labels[activeLayer] || 'Value';
}

function getValueUnit() {
    const units = {
        carbon: 'tons CO₂',
        transport: 'tons CO₂',
        energy: 'MWh',
        biodiversity: '%'
    };
    return units[activeLayer] || '';
}


function loadTopCities() {
    const container = document.getElementById('top-cities');
    container.innerHTML = '';

    // Data tetap untuk 5 kota
    const topCities = [
        { city: 'Jakarta', value: 1200 },
        { city: 'Surabaya', value: 950 },
        { city: 'Bandung', value: 870 },
        { city: 'Semarang', value: 720 },
        { city: 'Denpasar', value: 610 },
    ];

    topCities.forEach((city, index) => {
        const item = document.createElement('div');
        item.className =
            'flex items-center justify-between bg-gray-900/70 hover:bg-gray-800 transition-colors p-3 rounded-xl border border-gray-700/50 shadow-sm';

        item.innerHTML = `
            <div class="flex items-center gap-5">
                <div class="w-6 h-6 flex items-center justify-center rounded-full bg-green-600 text-white text-xs font-bold">
                    ${index + 1}
                </div>
                <span class="text-gray-200 text-sm font-medium">${city.city}</span>
            </div>
            <span class="text-green-400 text-sm font-semibold">${city.value.toLocaleString()} tons</span>
        `;

        container.appendChild(item);
    });
}

function loadInitiatives() {
    const container = document.getElementById('initiatives-list');
    const initiatives = [
        { name: 'Reforestation Program', region: 'Kalimantan', progress: 75 },
        { name: 'Renewable Energy', region: 'East Java', progress: 60 },
        { name: 'Waste Management', region: 'Bali', progress: 85 },
        { name: 'Marine Conservation', region: 'Raja Ampat', progress: 70 },
        { name: 'Sustainable Agriculture', region: 'Central Java', progress: 55 }
    ];
    
    initiatives.forEach(initiative => {
        const initiativeEl = document.createElement('div');
        initiativeEl.className = 'py-2 border-b border-gray-700/50 last:border-b-0';
        initiativeEl.innerHTML = `
            <div class="flex justify-between items-start mb-1">
                <p class="text-sm text-white">${initiative.name}</p>
                <span class="text-xs text-gray-400">${initiative.progress}%</span>
            </div>
            <p class="text-xs text-gray-400 mb-2">${initiative.region}</p>
            <div class="w-full bg-gray-700 rounded-full h-1.5">
                <div class="bg-green-500 h-1.5 rounded-full" style="width: ${initiative.progress}%"></div>
            </div>
        `;
        container.appendChild(initiativeEl);
    });
}

function createCarbonLegend() {
    return `
        <div class="space-y-2">
            <div class="flex items-center">
                <div class="w-3 h-3 rounded-full bg-green-400 mr-2"></div>
                <span class="text-xs text-gray-300">Low (&lt;5 tons)</span>
            </div>
            <div class="flex items-center">
                <div class="w-3 h-3 rounded-full bg-yellow-400 mr-2"></div>
                <span class="text-xs text-gray-300">Medium (5-9 tons)</span>
            </div>
            <div class="flex items-center">
                <div class="w-3 h-3 rounded-full bg-orange-400 mr-2"></div>
                <span class="text-xs text-gray-300">High (9-12 tons)</span>
            </div>
            <div class="flex items-center">
                <div class="w-3 h-3 rounded-full bg-red-400 mr-2"></div>
                <span class="text-xs text-gray-300">Critical (12+ tons)</span>
            </div>
        </div>
    `;
}

function createTransportLegend() {
    return `
        <div class="space-y-2">
            <div class="flex items-center">
                <i class="fas fa-road text-blue-400 text-xs mr-2"></i>
                <span class="text-xs text-gray-300">Highway Traffic</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-traffic-light text-orange-400 text-xs mr-2"></i>
                <span class="text-xs text-gray-300">Intersections</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-bus text-green-400 text-xs mr-2"></i>
                <span class="text-xs text-gray-300">Public Transport</span>
            </div>
        </div>
    `;
}

function createEnergyLegend() {
    return `
        <div class="space-y-2">
            <div class="flex items-center">
                <i class="fas fa-bolt text-yellow-400 text-xs mr-2"></i>
                <span class="text-xs text-gray-300">Power Plants</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-industry text-orange-400 text-xs mr-2"></i>
                <span class="text-xs text-gray-300">Substations</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-sun text-green-400 text-xs mr-2"></i>
                <span class="text-xs text-gray-300">Renewable</span>
            </div>
        </div>
    `;
}

function createBiodiversityLegend() {
    return `
        <div class="space-y-2">
            <div class="flex items-center">
                <i class="fas fa-tree text-emerald-400 text-xs mr-2"></i>
                <span class="text-xs text-gray-300">National Parks</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-paw text-yellow-400 text-xs mr-2"></i>
                <span class="text-xs text-gray-300">Wildlife Reserves</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-water text-blue-400 text-xs mr-2"></i>
                <span class="text-xs text-gray-300">Marine Parks</span>
            </div>
        </div>
    `;
}

function clearMarkers() {
    if (!mainMap) return;

    // Hapus marker individual
    currentMarkers.forEach(marker => {
        mainMap.removeLayer(marker);
    });
    currentMarkers = [];

    // Hapus cluster group jika ada
    if (markerClusters) {
        mainMap.removeLayer(markerClusters);
        markerClusters = null;
    }

    // Hapus heatmap jika ada
    if (heatmapLayer) {
        mainMap.removeLayer(heatmapLayer);
        heatmapLayer = null;
    }

    // Jangan hapus user location marker
    // userLocationMarker tetap ada
}

function showMapInfo(title, content) {
    const infoPanel = document.getElementById('map-info');
    const infoTitle = document.getElementById('info-title');
    const infoContent = document.getElementById('info-content');
    
    infoTitle.textContent = title;
    infoContent.textContent = content;
    infoPanel.classList.remove('hidden');
    
    setTimeout(() => {
        infoPanel.classList.add('hidden');
    }, 5000);
}
function useCurrentLocation() {
    if (!navigator.geolocation) {
        showMapInfo('Geolocation Error', 'Geolocation is not supported by your browser');
        return;
    }

    navigator.geolocation.getCurrentPosition(
        (position) => {
            const lat = position.coords.latitude;
            const lng = position.coords.longitude;

            if (mainMap) {
                // Hapus marker lokasi sebelumnya jika ada
                if (userLocationMarker) {
                    mainMap.removeLayer(userLocationMarker);
                }

                // Buat marker baru untuk lokasi pengguna
                userLocationMarker = L.marker([lat, lng], {
                    icon: L.divIcon({
                        html: `
                            <div class="relative">
                                <div class="w-12 h-12 rounded-full border-4 border-white shadow-lg flex items-center justify-center bg-blue-500">
                                    <i class="fas fa-user text-white text-lg"></i>
                                </div>
                                <div class="absolute -top-1 -right-1 w-4 h-4 bg-blue-500 rounded-full border-2 border-white animate-ping"></div>
                            </div>
                        `,
                        className: 'user-location-marker',
                        iconSize: [48, 48],
                        iconAnchor: [24, 24]
                    })
                })
                .addTo(mainMap)
                .bindPopup('Your current location')
                .openPopup();

                mainMap.setView([lat, lng], 12);

                showMapInfo('Location Found', 'You are here! Explore environmental data around you.');
            }
        },
        () => {
            showMapInfo('Location Error', 'Unable to retrieve your location');
        }
    );
}

function toggleViewMode() {
    const btn = document.getElementById('view-mode-btn');
    
    if (viewMode === 'markers') {
        viewMode = 'clusters';
        btn.innerHTML = '<i class="fas fa-object-group mr-1"></i>Clusters';
        btn.classList.add('bg-purple-600/20', 'text-purple-400');
        showMapInfo('Cluster View', 'Grouping nearby markers for better visualization');
    } else {
        viewMode = 'markers';
        btn.innerHTML = '<i class="fas fa-layer-group mr-1"></i>Markers';
        btn.classList.remove('bg-purple-600/20', 'text-purple-400');
        showMapInfo('Marker View', 'Showing individual data points');
    }
    
    addSampleData();
}

function toggleFullscreen() {
    const mapContainer = document.getElementById('ecoMainMap');
    if (!document.fullscreenElement) {
        mapContainer.requestFullscreen?.().catch(err => {

        });
    } else {
        document.exitFullscreen?.();
    }
}

document.addEventListener('DOMContentLoaded', function() {

    setTimeout(initMap, 1000);
});

document.addEventListener('livewire:load', function() {

    setTimeout(initMap, 1500);
});
</script>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {

    setTimeout(initMap, 1000);
});

document.addEventListener('livewire:load', function() {

    setTimeout(initMap, 1500);
});
</script>
@endpush

