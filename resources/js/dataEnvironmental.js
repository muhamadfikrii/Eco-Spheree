// resources/js/dataEnvironmental.js

// ==========================================
// 1. SUMBER DATA EKOSISTEM INDONESIA
// ==========================================
export const orbitingNodes = [
    {
        icon: '🌳',
        title: 'All Forest Types',
        subtitle: 'Indonesian Forest Coverage',
        value: '94M ha',
        area: '94M ha',
        percentage: '~49% of land area',
        coverage: '49%',
        biodiversity: 'High',
        health: 88,
        status: 'optimal',
        trend: 'stable',
        color: 'bg-emerald-900/30 text-emerald-400 border border-emerald-500/20',
        connections: ['Tropical Rainforest', 'Mountain Forest', 'Mangrove', 'Peatland'],
        actions: [
            'Expand protected forest areas',
            'Implement sustainable logging practices',
            'Strengthen anti-deforestation measures'
        ],
        description: 'Total forest coverage across all Indonesian forest types including primary and secondary forests.',
        analysis: 'Forest coverage remains stable with ongoing conservation efforts showing positive results.'
    },
    {
        icon: '🌴',
        title: 'Tropical Rainforest',
        subtitle: 'Lowland Rainforest Systems',
        value: '45M ha',
        area: '45M ha',
        percentage: '~23% of land area',
        coverage: '23%',
        biodiversity: 'Very High',
        health: 72,
        status: 'warning',
        trend: 'at-risk',
        color: 'bg-green-900/30 text-green-400 border border-green-500/20',
        connections: ['All Forest Types', 'Wildlife Corridors', 'Mountain Forest'],
        actions: [
            'Combat illegal logging activities',
            'Support community-based forest management',
            'Restore degraded rainforest areas'
        ],
        description: 'Tropical lowland rainforests with exceptional biodiversity and carbon storage capacity.',
        analysis: 'Rainforest areas face pressure from agricultural expansion and logging activities.'
    },
    {
        icon: '⛰️',
        title: 'Mountain Forest',
        subtitle: 'Highland Forest Ecosystems',
        value: '20M ha',
        area: '20M ha',
        percentage: '~10% of land area',
        coverage: '10%',
        biodiversity: 'High',
        health: 85,
        status: 'optimal',
        trend: 'stable',
        color: 'bg-slate-900/30 text-slate-400 border border-slate-500/20',
        connections: ['All Forest Types', 'Tropical Rainforest', 'Water Systems'],
        actions: [
            'Protect watershed areas',
            'Prevent soil erosion on slopes',
            'Monitor climate change impacts'
        ],
        description: 'Mountain forest ecosystems critical for water regulation and unique biodiversity.',
        analysis: 'Mountain forests remain relatively stable but face climate change threats.'
    },
    {
        icon: '🏝️',
        title: 'Mangrove',
        subtitle: 'Coastal Mangrove Forests',
        value: '3.3M ha',
        area: '3.3M ha',
        percentage: '~1.7% of land area',
        coverage: '1.7%',
        biodiversity: 'High',
        health: 68,
        status: 'warning',
        trend: 'at-risk',
        color: 'bg-cyan-900/30 text-cyan-400 border-cyan-500/20',
        connections: ['Coastal Systems', 'Marine Ecosystems', 'Peatland'],
        actions: [
            'Implement mangrove restoration programs',
            'Control coastal development',
            'Support sustainable aquaculture'
        ],
        description: 'Indonesia has world\'s largest mangrove forests, critical for coastal protection.',
        analysis: 'Mangrove areas are declining due to aquaculture expansion and coastal development.'
    },
    {
        icon: '🌱',
        title: 'Peatland',
        subtitle: 'Tropical Peat Ecosystems',
        value: '13.4M ha',
        area: '13.4M ha',
        percentage: '~7% of land area',
        coverage: '7%',
        biodiversity: 'Medium',
        health: 65,
        status: 'warning',
        trend: 'at-risk',
        color: 'bg-amber-900/30 text-amber-400 border-amber-500/20',
        connections: ['All Forest Types', 'Mangrove', 'Water Systems'],
        actions: [
            'Prevent peatland drainage and burning',
            'Restore degraded peatland areas',
            'Develop sustainable peatland management'
        ],
        description: 'Tropical peat ecosystems with significant carbon storage and unique biodiversity.',
        analysis: 'Peatlands face threats from drainage, burning, and conversion to agriculture.'
    },
    {
        icon: '🌾',
        title: 'Grassland/Savanna',
        subtitle: 'Indonesian Savanna Ecosystems',
        value: '5M ha',
        area: '5M ha',
        percentage: '~2.6% of land area',
        coverage: '2.6%',
        biodiversity: 'Medium',
        health: 78,
        status: 'optimal',
        trend: 'stable',
        color: 'bg-lime-900/30 text-lime-400 border-lime-500/20',
        connections: ['Wildlife Corridors', 'Agricultural Areas', 'Forest Systems'],
        actions: [
            'Prevent overgrazing in sensitive areas',
            'Control invasive species spread',
            'Maintain traditional land management practices'
        ],
        description: 'Grassland and savanna ecosystems supporting unique wildlife and traditional livelihoods.',
        analysis: 'Grassland areas remain stable but face pressure from agricultural expansion.'
    },
    {
        icon: '🪸',
        title: 'Coral Reef',
        subtitle: 'Marine Coral Ecosystems',
        value: '2.5M ha',
        area: '2.5M ha',
        percentage: '17% of world coral reefs',
        coverage: '17%',
        biodiversity: 'Very High',
        health: 62,
        status: 'warning',
        trend: 'at-risk',
        color: 'bg-pink-900/30 text-pink-400 border-pink-500/20',
        connections: ['Marine Ecosystems', 'Coastal Systems', 'Seagrass Beds'],
        actions: [
            'Reduce coral bleaching impacts',
            'Control destructive fishing practices',
            'Establish marine protected areas'
        ],
        description: 'Indonesia has 17% of world\'s coral reefs with exceptional marine biodiversity.',
        analysis: 'Coral reefs face threats from climate change, pollution, and destructive fishing.'
    },
    {
        icon: '🌿',
        title: 'Seagrass Beds',
        subtitle: 'Coastal Seagrass Ecosystems',
        value: '3M ha',
        area: '3M ha',
        percentage: '10% of world seagrass',
        coverage: '10%',
        biodiversity: 'High',
        health: 70,
        status: 'warning',
        trend: 'at-risk',
        color: 'bg-teal-900/30 text-teal-400 border-teal-500/20',
        connections: ['Marine Ecosystems', 'Coral Reef', 'Coastal Systems'],
        actions: [
            'Reduce coastal pollution impacts',
            'Prevent seabed disturbance',
            'Restore degraded seagrass areas'
        ],
        description: 'Indonesia has 10% of world\'s seagrass beds, critical for marine life.',
        analysis: 'Seagrass beds are declining due to coastal development and pollution.'
    },
    {
        icon: '🌊',
        title: 'Deep Sea',
        subtitle: 'Pelagic & Benthic Zones',
        value: '6M km²',
        area: '6M km²',
        percentage: 'Indonesian EEZ waters',
        coverage: 'EEZ',
        biodiversity: 'High',
        health: 82,
        status: 'optimal',
        trend: 'stable',
        color: 'bg-blue-900/30 text-blue-400 border-blue-500/20',
        connections: ['Marine Ecosystems', 'Coral Reef', 'Seagrass Beds'],
        actions: [
            'Prevent overfishing in deep waters',
            'Control marine pollution',
            'Develop sustainable marine resource management'
        ],
        description: 'Deep sea zones including pelagic and benthic areas within Indonesian waters.',
        analysis: 'Deep sea ecosystems remain relatively stable but face pressure from fishing activities.'
    }
];


// ==========================================
// 2. FUNGSI UTAMA ALPINEJS UNTUK KOMPONEN
// ==========================================
export function modernEcosphere() {
    return {
        // Enhanced State Management
        selectedNode: null,
        refreshing: false,
        connectedNodes: 9,
        totalArea: 189.7,
        zoomLevel: 1,
        viewMode: '3d',
        autoRotate: true,
        animationFrame: null,
        startTime: Date.now(),
        isMobile: window.innerWidth < 640,
        isTablet: window.innerWidth >= 640 && window.innerWidth < 1024,
        isDesktop: window.innerWidth >= 1024,

        // Indonesian Ecosystem Data
        // !!! PERUBAHAN KRUSIAL: Menggunakan data dari variabel global `window.orbitingNodes`
        // yang sudah disiapkan di app.js, bukan mendefinisikan ulang di sini.
        orbitingNodes: window.orbitingNodes,

        // Enhanced Data Stream
        dataStream: [
            { icon: '📡', message: 'Satellite data synchronized successfully', time: '2 min ago' },
            { icon: '🌡️', message: 'Temperature anomaly detected in Kalimantan', time: '5 min ago' },
            { icon: '💧', message: 'Water quality improving in coral reef areas', time: '12 min ago' },
            { icon: '🌳', message: 'Reforestation milestone achieved in Sumatra', time: '25 min ago' }
        ],

        // Enhanced Methods
        init() {
            this.startDataStream();
            this.startPerfectOrbit();
            this.updateTime();
            this.initParticles();
            this.initFloatingParticles();
            
            // Add resize listener for responsive adjustments
            window.addEventListener('resize', this.handleResize.bind(this));
            
            // Add keyboard navigation
            document.addEventListener('keydown', this.handleKeyboard.bind(this));
        },

        handleResize() {
            this.isMobile = window.innerWidth < 640;
            this.isTablet = window.innerWidth >= 640 && window.innerWidth < 1024;
            this.isDesktop = window.innerWidth >= 1024;
        },

        handleKeyboard(event) {
            switch(event.key) {
                case 'Escape':
                    this.selectedNode = null;
                    break;
                case ' ':
                    event.preventDefault();
                    this.toggleAutoRotate();
                    break;
                case 'r':
                case 'R':
                    if (event.ctrlKey || event.metaKey) {
                        event.preventDefault();
                        this.refreshNetwork();
                    }
                    break;
                case '+':
                case '=':
                    this.zoomIn();
                    break;
                case '-':
                case '_':
                    this.zoomOut();
                    break;
                case '0':
                    this.resetView();
                    break;
            }
        },

        getOrbitContainerWidth() {
            if (this.isMobile) return 300;
            if (this.isTablet) return 500;
            return 700;
        },

        getOrbitContainerHeight() {
            if (this.isMobile) return 300;
            if (this.isTablet) return 500;
            return 700;
        },

        getOrbitRadius(tier) {
            const baseSize = this.getOrbitContainerWidth();
            if (this.isMobile) {
                return baseSize * (tier === 1 ? 0.4 : tier === 2 ? 0.5 : 0.6);
            }
            if (this.isTablet) {
                return baseSize * (tier === 1 ? 0.35 : tier === 2 ? 0.45 : 0.55);
            }
            return baseSize * (tier === 1 ? 0.3 : tier === 2 ? 0.4 : 0.5);
        },

        initFloatingParticles() {
            const container = document.getElementById('floatingParticles');
            const particleCount = this.isMobile ? 3 : this.isTablet ? 4 : 6;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                const size = Math.random() * 3 + 1;
                const opacity = Math.random() * 0.3 + 0.1;
                
                particle.className = 'absolute rounded-full animate-float';
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.backgroundColor = `rgba(16, 185, 129, ${opacity})`;
                particle.style.top = `${Math.random() * 100}%`;
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.animationDelay = `${Math.random() * 5}s`;
                
                container.appendChild(particle);
            }
        },

        initParticles() {
            // Skip canvas particles on mobile for performance
            if (this.isMobile) return;
            
            const canvas = document.createElement('canvas');
            const ctx = canvas.getContext('2d');
            const particleContainer = document.getElementById('particleCanvas');
            
            canvas.style.position = 'absolute';
            canvas.style.top = '0';
            canvas.style.left = '0';
            canvas.style.width = '100%';
            canvas.style.height = '100%';
            canvas.style.pointerEvents = 'none';
            
            particleContainer.appendChild(canvas);
            
            const particles = [];
            const particleCount = this.isTablet ? 30 : 50;
            
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            
            for (let i = 0; i < particleCount; i++) {
                particles.push({
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height,
                    vx: (Math.random() - 0.5) * 0.5,
                    vy: (Math.random() - 0.5) * 0.5,
                    size: Math.random() * 2 + 1,
                    opacity: Math.random() * 0.5 + 0.2
                });
            }
            
            const animateParticles = () => {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                
                particles.forEach(particle => {
                    particle.x += particle.vx;
                    particle.y += particle.vy;
                    
                    if (particle.x < 0 || particle.x > canvas.width) particle.vx *= -1;
                    if (particle.y < 0 || particle.y > canvas.height) particle.vy *= -1;
                    
                    ctx.beginPath();
                    ctx.arc(particle.x, particle.y, particle.size, 0, Math.PI * 2);
                    ctx.fillStyle = `rgba(16, 185, 129, ${particle.opacity})`;
                    ctx.fill();
                });
                
                requestAnimationFrame(animateParticles);
            };
            
            animateParticles();
        },

        startPerfectOrbit() {
            const animate = () => {
                if (this.autoRotate) {
                    const currentTime = Date.now();
                    const elapsed = (currentTime - this.startTime) / 1000;
                    this.updatePerfectOrbitPositions(elapsed);
                }
                this.animationFrame = requestAnimationFrame(animate);
            };
            this.animationFrame = requestAnimationFrame(animate);
        },

        updatePerfectOrbitPositions(elapsed) {
            const nodes = document.querySelectorAll('.orbit-node');
            const containerWidth = this.getOrbitContainerWidth();
            const containerHeight = this.getOrbitContainerHeight();
            const centerX = containerWidth / 2;
            const centerY = containerHeight / 2;

            this.orbitingNodes.forEach((node, index) => {
                const nodeElement = nodes[index];
                if (!nodeElement) return;

                const angleInRadians = (node.startAngle * Math.PI / 180) + (elapsed * node.orbitSpeed * 0.5);
                const x = centerX + Math.cos(angleInRadians) * node.orbitRadius;
                const y = centerY + Math.sin(angleInRadians) * node.orbitRadius;
                
                nodeElement.style.transform = `translate(${x - centerX}px, ${y - centerY}px) translate(-50%, -50%)`;
            });
        },

        getNodePosition(index) {
            const containerWidth = this.getOrbitContainerWidth();
            const containerHeight = this.getOrbitContainerHeight();
            const centerX = containerWidth / 2;
            const centerY = containerHeight / 2;
            const elapsed = (Date.now() - this.startTime) / 1000;
            const node = this.orbitingNodes[index];
            
            const angleInRadians = (node.startAngle * Math.PI / 180) + (elapsed * node.orbitSpeed * 0.5);
            const x = centerX + Math.cos(angleInRadians) * node.orbitRadius;
            const y = centerY + Math.sin(angleInRadians) * node.orbitRadius;
            
            return { x: `${x}px`, y: `${y}px` };
        },

        toggleViewMode() {
            this.viewMode = this.viewMode === '3d' ? '2d' : '3d';
            
            // Add visual feedback
            const button = event.currentTarget;
            button.classList.add('scale-95');
            setTimeout(() => {
                button.classList.remove('scale-95');
            }, 100);
            
            // Add notification
            this.dataStream.unshift({
                icon: this.viewMode === '3d' ? '🎯' : '📊',
                message: `Switched to ${this.viewMode.toUpperCase()} view mode`,
                time: 'Just now'
            });
            
            if (this.dataStream.length > 4) {
                this.dataStream.pop();
            }
        },

        toggleAutoRotate() {
            this.autoRotate = !this.autoRotate;
        },

        toggleFullscreen() {
            if (!document.fullscreenElement) {
                document.documentElement.requestFullscreen();
            } else {
                document.exitFullscreen();
            }
        },

        selectNode(index) {
            this.orbitingNodes.forEach((node, i) => {
                node.active = i === index;
            });
            this.selectedNode = index;
        },

        hoverNode(index) {
            this.orbitingNodes[index].hover = true;
        },

        unhoverNode(index) {
            this.orbitingNodes[index].hover = false;
        },

        refreshNetwork() {
            this.refreshing = true;
            setTimeout(() => {
                this.orbitingNodes.forEach(node => {
                    node.health = Math.floor(Math.random() * 30) + 70;
                });
                this.refreshing = false;
                
                this.dataStream.unshift({
                    icon: '🔄',
                    message: 'Ecosystem data synchronized successfully',
                    time: 'Just now'
                });
                
                if (this.dataStream.length > 4) {
                    this.dataStream.pop();
                }
            }, 2000);
        },

        startDataStream() {
            setInterval(() => {
                this.addDataStreamItem();
            }, 10000);
        },

        addDataStreamItem() {
            const messages = [
                { icon: '🌪️', message: 'Weather pattern analysis complete' },
                { icon: '🐠', message: 'Marine life survey updated' },
                { icon: '🌱', message: 'Soil nutrient levels monitored' },
                { icon: '🏭', message: 'Industrial emissions tracked' },
                { icon: '🌍', message: 'Ecosystem health updated' },
                { icon: '🔬', message: 'Research data collected' }
            ];
            
            const newItem = messages[Math.floor(Math.random() * messages.length)];
            newItem.time = 'Just now';
            this.dataStream.unshift(newItem);
            
            if (this.dataStream.length > 4) {
                this.dataStream.pop();
            }
        },

        updateTime() {
            setInterval(() => {
                const times = document.querySelectorAll('[x-text*="toLocaleTimeString"]');
                times.forEach(el => {
                    if (el.__x) {
                        el.__x.$el.textContent = new Date().toLocaleTimeString();
                    }
                });
            }, 1000);
        },

        exportNodeData() {
            if (this.selectedNode !== null) {
                const node = this.orbitingNodes[this.selectedNode];
                
                // Create a downloadable JSON file with node data
                const dataStr = JSON.stringify(node, null, 2);
                const dataUri = 'data:application/json;charset=utf-8,'+ encodeURIComponent(dataStr);
                
                const exportFileDefaultName = `${node.title.replace(/\s+/g, '_')}_data.json`;
                
                const linkElement = document.createElement('a');
                linkElement.setAttribute('href', dataUri);
                linkElement.setAttribute('download', exportFileDefaultName);
                linkElement.click();
            }
        },

        zoomIn() {
            this.zoomLevel = Math.min(this.zoomLevel + 0.1, 1.5);
            const container = document.querySelector('.relative');
            container.style.transform = `scale(${this.zoomLevel})`;
        },

        zoomOut() {
            this.zoomLevel = Math.max(this.zoomLevel - 0.1, 0.5);
            const container = document.querySelector('.relative');
            container.style.transform = `scale(${this.zoomLevel})`;
        },

        resetView() {
            this.zoomLevel = 1;
            const container = document.querySelector('.relative');
            container.style.transform = `scale(${this.zoomLevel})`;
            this.selectedNode = null;
            this.orbitingNodes.forEach(node => {
                node.active = false;
                node.hover = false;
            });
        }
    }
}