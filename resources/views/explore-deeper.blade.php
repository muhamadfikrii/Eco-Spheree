<x-app-layout>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#10b981',
                            light: '#34d399',
                            dark: '#059669',
                        },
                        dark: {
                            DEFAULT: '#0f172a',
                            light: '#1e293b',
                            lighter: '#334155',
                        },
                        accent: '#0ea5e9',
                    },
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif'],
                        'playfair': ['Playfair Display', 'serif'],
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'fadeIn': 'fadeIn 1s ease-in-out',
                        'slideInLeft': 'slideInLeft 1s ease-out',
                        'slideInRight': 'slideInRight 1s ease-out',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'bounce-slow': 'bounce 3s infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                        'wave': 'wave 2s ease-in-out infinite',
                        'gradient-shift': 'gradient-shift 8s ease infinite',
                        'morph': 'morph 8s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideInLeft: {
                            '0%': { transform: 'translateX(-100%)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' },
                        },
                        slideInRight: {
                            '0%': { transform: 'translateX(100%)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' },
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 5px rgba(16, 185, 129, 0.5)' },
                            '100%': { boxShadow: '0 0 20px rgba(16, 185, 129, 0.8)' },
                        },
                        wave: {
                            '0%': { transform: 'rotate(0deg)' },
                            '25%': { transform: 'rotate(20deg)' },
                            '50%': { transform: 'rotate(0deg)' },
                            '75%': { transform: 'rotate(-20deg)' },
                            '100%': { transform: 'rotate(0deg)' },
                        },
                        'gradient-shift': {
                            '0%, 100%': { backgroundPosition: '0% 50%' },
                            '50%': { backgroundPosition: '100% 50%' },
                        },
                        morph: {
                            '0%, 100%': { borderRadius: '60% 40% 70% 30% / 60% 30% 70% 40%' },
                            '50%': { borderRadius: '30% 60% 40% 70% / 50% 60% 30% 60%' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .hero-bg {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.1) 0%, rgba(15, 23, 42, 0.8) 100%), 
                        url('https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
        }
        .section-bg {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        }
        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .card-hover {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .card-hover:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(16, 185, 129, 0.15);
        }
        .floating-element {
            animation: float 6s ease-in-out infinite;
        }
        .gradient-text {
            background: linear-gradient(135deg, #10b981 0%, #34d399 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #10b981 0%, #34d399 100%);
        }
        .animated-gradient {
            background: linear-gradient(-45deg, #10b981, #34d399, #0ea5e9, #10b981);
            background-size: 400% 400%;
            animation: gradient-shift 8s ease infinite;
        }
        .stat-card {
            background: linear-gradient(135deg, rgba(30, 41, 59, 0.9) 0%, rgba(15, 23, 42, 0.9) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.05);
        }
        .eco-badge {
            position: relative;
            overflow: hidden;
        }
        .eco-badge:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.1) 0%, rgba(52, 211, 153, 0.1) 100%);
            z-index: -1;
        }
        .glow {
            box-shadow: 0 0 20px rgba(16, 185, 129, 0.3);
        }
        .dark-overlay {
            background: rgba(15, 23, 42, 0.7);
        }
        .typewriter {
        display: inline-block;
        overflow: hidden;
        border-right: 2px solid #10b981;
        white-space: nowrap;
        animation: typing 3.5s steps(38, end), blink-caret 0.75s step-end infinite;
        font-family: 'Poppins';
        }
        @keyframes typing {
            from { width: 0 }
            to { width: 38ch; }
        }
        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: #10b981 }
        }
        .pulse-glow {
            animation: pulse-glow 2s infinite;
        }
        @keyframes pulse-glow {
            0% { box-shadow: 0 0 5px rgba(16, 185, 129, 0.5); }
            50% { box-shadow: 0 0 20px rgba(16, 185, 129, 0.8); }
            100% { box-shadow: 0 0 5px rgba(16, 185, 129, 0.5); }
        }
        .magnetic-button {
            position: relative;
            transition: all 0.3s ease;
        }
        .magnetic-button:hover {
            transform: translateY(-3px);
        }
        .wonder-card {
            transition: all 0.5s ease;
            transform-style: preserve-3d;
            perspective: 1000px;
        }
        .wonder-card:hover {
            transform: rotateY(5deg) rotateX(-5deg);
        }
        .wonder-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }
        .wonder-card-front, .wonder-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: 1rem;
            overflow: hidden;
        }
        .wonder-card-back {
            transform: rotateY(180deg);
        }
        .wonder-card:hover .wonder-card-inner {
            transform: rotateY(180deg);
        }
        .playfair {
            font-family: 'Playfair Display', serif;
        }
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
        }
        .split-text span {
            display: inline-block;
            opacity: 0;
            transform: translateY(20px);
        }
        .image-3d {
            transform-style: preserve-3d;
            transition: transform 0.7s;
        }
        .image-3d:hover {
            transform: rotateY(10deg) rotateX(-10deg);
        }
        .timeline-item {
            position: relative;
            padding-left: 40px;
        }
        .timeline-item:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 2px;
            background: #10b981;
        }
        .timeline-dot {
            position: absolute;
            left: -6px;
            top: 5px;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: #10b981;
            border: 2px solid #0f172a;
        }
        .magnetic {
            position: relative;
        }
        .magnetic:hover {
            transform: scale(1.05);
        }
        .cursor-glow {
            cursor: pointer;
        }
        .cursor-glow:hover {
            box-shadow: 0 0 15px rgba(16, 185, 129, 0.5);
        }
        .ken-burns {
            animation: ken-burns 20s ease-out infinite alternate;
        }
        @keyframes ken-burns {
            0% { transform: scale(1) translate(0, 0); }
            100% { transform: scale(1.1) translate(-5%, -5%); }
        }
        .reveal-text {
            overflow: hidden;
        }
        .reveal-text span {
            display: inline-block;
            transform: translateY(100%);
        }
        .loading-bar {
            height: 3px;
            background: linear-gradient(90deg, #10b981, #34d399);
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            z-index: 9999;
            transition: width 0.3s ease;
        }
        .loading-bar.active {
            width: 100%;
        }
        /* Custom styles for image gallery */
        .image-gallery {
            position: relative;
            overflow: hidden;
        }
        .image-container {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .image-slide {
            min-width: 100%;
            position: relative;
        }
        /* Interactive journey planner styles */
        .journey-point {
            transition: all 0.3s ease;
        }
        .journey-point:hover {
            transform: scale(1.1);
        }
        .journey-line {
            background: linear-gradient(90deg, #10b981, #34d399);
            height: 3px;
            position: relative;
        }
        .journey-line::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 30px;
            background: white;
            animation: journey-progress 3s linear infinite;
        }
        @keyframes journey-progress {
            0% { left: 0; }
            100% { left: calc(100% - 30px); }
        }
        /* Interactive discovery quiz styles */
        .quiz-option {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .quiz-option:hover {
            transform: translateY(-5px);
        }
        .quiz-option.selected {
            border-color: #10b981;
            background-color: rgba(16, 185, 129, 0.2);
        }
        /* Interactive map styles */
        .interactive-map {
            position: relative;
            overflow: hidden;
        }
        .map-point {
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #10b981;
            border: 3px solid white;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 2;
        }
        .map-point:hover {
            transform: scale(1.5);
            box-shadow: 0 0 15px rgba(16, 185, 129, 0.7);
        }
        .map-point.active {
            background: #f59e0b;
            transform: scale(1.8);
            box-shadow: 0 0 20px rgba(245, 158, 11, 0.7);
        }
        .map-tooltip {
            position: absolute;
            background: rgba(30, 41, 59, 0.95);
            backdrop-filter: blur(10px);
            padding: 10px 15px;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 14px;
            pointer-events: none;
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
            z-index: 3;
            min-width: 200px;
        }
        .map-tooltip.active {
            opacity: 1;
            transform: translateY(0);
        }
        .map-tooltip h4 {
            margin: 0 0 5px;
            font-weight: 600;
            color: #10b981;
        }
        .map-tooltip p {
            margin: 0;
            font-size: 12px;
            color: rgba(255, 255, 255, 0.8);
        }
        /* Interactive 360 preview styles */
        .panorama-container {
            position: relative;
            overflow: hidden;
            cursor: grab;
        }
        .panorama-container:active {
            cursor: grabbing;
        }
        .panorama-image {
            display: flex;
            transition: transform 0.1s linear;
        }
        /* Progress indicator styles */
        .progress-indicator {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            background: linear-gradient(90deg, #10b981, #34d399);
            z-index: 100;
            transform-origin: left;
            transform: scaleX(0);
        }
        /* Interactive hover cards */
        .hover-card {
            position: relative;
            overflow: hidden;
        }
        .hover-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }
        .hover-card:hover::before {
            left: 100%;
        }
        /* Interactive buttons */
        .interactive-btn {
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        .interactive-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
            z-index: -1;
        }
        .interactive-btn:hover::before {
            width: 300px;
            height: 300px;
        }
        /* Floating action button */
        .fab {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, #10b981, #34d399);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            z-index: 100;
            transition: all 0.3s ease;
        }
        .fab:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);
        }
        .fab-menu {
            position: fixed;
            bottom: 100px;
            right: 30px;
            display: flex;
            flex-direction: column;
            gap: 15px;
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s ease;
        }
        .fab-menu.active {
            opacity: 1;
            pointer-events: all;
        }
        .fab-menu-item {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: white;
            color: #10b981;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transform: scale(0);
            transition: all 0.3s ease;
        }
        .fab-menu.active .fab-menu-item {
            transform: scale(1);
        }
        .fab-menu-item:nth-child(1) { transition-delay: 0.05s; }
        .fab-menu-item:nth-child(2) { transition-delay: 0.1s; }
        .fab-menu-item:nth-child(3) { transition-delay: 0.15s; }
        /* Interactive timeline */
        .interactive-timeline {
            position: relative;
        }
        .timeline-progress {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 2px;
            background: rgba(16, 185, 129, 0.3);
            z-index: 1;
        }
        .timeline-progress-bar {
            position: absolute;
            top: 0;
            left: 0;
            height: 0;
            width: 2px;
            background: #10b981;
            z-index: 2;
            transition: height 1s ease;
        }
        /* Interactive counter */
        .counter-container {
            position: relative;
        }
        .counter-ring {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-90deg);
        }
        .counter-ring-circle {
            transition: stroke-dashoffset 1s ease;
        }
        /* Morphing shapes */
        .morph-shape {
            width: 300px;
            height: 300px;
            background: linear-gradient(45deg, #10b981, #34d399);
            animation: morph 8s ease-in-out infinite;
        }
    </style>

    <body class="font-poppins bg-dark text-gray-200" x-data="{ 
        mobileMenuOpen: false, 
        darkMode: true,
        selectedWonder: 0,
        currentImage: 0,
        journeyDestinations: [],
        quizAnswers: {
            travelerType: [],
            activities: []
        },
        quizResults: null,
        panoramaPosition: 0,
        isDragging: false,
        startX: 0,
        scrollProgress: 0,
        fabOpen: false,
        wonders: [
            {
                name: 'Raja Ampat',
                icon: '🏝️',
                location: 'West Papua',
                description: 'An underwater paradise with the richest biodiversity in the world. A place where 75% of the world\'s coral species can be found.',
                shortDesc: 'Underwater paradise of Papua',
                coordinates: { lat: -0.4, lng: 130.8 }, // Actual coordinates for Raja Ampat
                images: [
                    { url: 'https://picsum.photos/seed/raja-ampat-1/800/600', caption: 'Raja Ampat Islands from above' },
                    { url: 'https://picsum.photos/seed/raja-ampat-2/800/600', caption: 'Stunning coral reefs' },
                    { url: 'https://picsum.photos/seed/raja-ampat-3/800/600', caption: 'Diverse marine life' }
                ],
                positives: [
                    { title: 'Highest Biodiversity', description: 'Home to 1,500+ fish species and 600+ coral species' },
                    { title: 'Sustainable Ecotourism', description: 'Supporting local economy with environmental preservation' },
                    { title: 'Scientific Research', description: 'Natural laboratory for marine biology research' }
                ],
                negatives: [
                    { title: 'Excessive Tourism', description: 'Threats to ecosystems from uncontrolled tourist visits' },
                    { title: 'Climate Change', description: 'Global warming causing coral bleaching' },
                    { title: 'Illegal Fishing', description: 'Illegal fishing practices damaging habitats' }
                ]
            },
            {
                name: 'Lake Toba',
                icon: '🏞️',
                location: 'North Sumatra',
                description: 'The largest volcanic lake in the world, formed from the eruption of Mount Toba super volcano around 74,000 years ago.',
                shortDesc: 'Largest volcanic lake',
                coordinates: { lat: 2.6, lng: 98.8 }, // Actual coordinates for Lake Toba
                images: [
                    { url: 'https://picsum.photos/seed/toba-1/800/600', caption: 'Lake Toba from above' },
                    { url: 'https://picsum.photos/seed/toba-2/800/600', caption: 'Samosir Island in the middle of the lake' },
                    { url: 'https://picsum.photos/seed/toba-3/800/600', caption: 'Sunset at Lake Toba' }
                ],
                positives: [
                    { title: 'Geological Heritage', description: 'Global geological heritage site with high scientific value' },
                    { title: 'Cultural Richness', description: 'Center of Batak culture with unique traditions' },
                    { title: 'Energy Potential', description: 'Potential renewable energy source' }
                ],
                negatives: [
                    { title: 'Water Pollution', description: 'Pollution from domestic and agricultural waste' },
                    { title: 'Deforestation', description: 'Loss of forest around the lake' },
                    { title: 'Erosion', description: 'Erosion of lake shores threatening ecosystems' }
                ]
            },
            {
                name: 'Bromo Tengger Semeru',
                icon: '🌋',
                location: 'East Java',
                description: 'Iconic volcanic landscape with active crater, sand sea, and stunning sunrise.',
                shortDesc: 'Iconic volcanic landscape',
                coordinates: { lat: -7.9, lng: 112.9 }, // Actual coordinates for Bromo
                images: [
                    { url: 'https://picsum.photos/seed/bromo-1/800/600', caption: 'Sunrise at Mount Bromo' },
                    { url: 'https://picsum.photos/seed/bromo-2/800/600', caption: 'Active Bromo crater' },
                    { url: 'https://picsum.photos/seed/bromo-3/800/600', caption: 'Bromo sand sea' }
                ],
                positives: [
                    { title: 'Tourist Attraction', description: 'One of the most popular tourist destinations in Indonesia' },
                    { title: 'Biodiversity', description: 'Unique ecosystem at volcanic heights' },
                    { title: 'Spiritual Value', description: 'Sacred place for Tengger tribe' }
                ],
                negatives: [
                    { title: 'Overcrowding', description: 'Excessive visitor density' },
                    { title: 'Air Pollution', description: 'Emissions from tourist vehicles' },
                    { title: 'Plastic Waste', description: 'Waste problems in tourist areas' }
                ]
            },
            {
                name: 'Komodo National Park',
                icon: '🦎',
                location: 'East Nusa Tenggara',
                description: 'Natural habitat of Komodo, the largest lizard in the world, with extraordinary terrestrial and marine ecosystems.',
                shortDesc: 'Komodo habitat',
                coordinates: { lat: -8.6, lng: 119.5 }, // Actual coordinates for Komodo
                images: [
                    { url: 'https://picsum.photos/seed/komodo-1/800/600', caption: 'Komodo in its natural habitat' },
                    { url: 'https://picsum.photos/seed/komodo-2/800/600', caption: 'Pink Beach that is exotic' },
                    { url: 'https://picsum.photos/seed/komodo-3/800/600', caption: 'Diving spot in Komodo' }
                ],
                positives: [
                    { title: 'Species Conservation', description: 'Protecting Komodo from extinction' },
                    { title: 'World Heritage Site', description: 'Recognized by UNESCO as a world heritage site' },
                    { title: 'Marine Ecosystem', description: 'Healthy and diverse coral reefs' }
                ],
                negatives: [
                    { title: 'Extinction Threat', description: 'Continuously declining Komodo population' },
                    { title: 'Habitat Change', description: 'Habitat loss due to human activities' },
                    { title: 'Illegal Hunting', description: 'Illegal hunting threat' }
                ]
            },
            {
                name: 'Wakatobi',
                icon: '🐠',
                location: 'Southeast Sulawesi',
                description: 'A marine park with the highest marine biodiversity, a paradise for divers worldwide.',
                shortDesc: 'Diver\'s paradise',
                coordinates: { lat: -5.4, lng: 123.6 }, // Actual coordinates for Wakatobi
                images: [
                    { url: 'https://picsum.photos/seed/wakatobi-1/800/600', caption: 'Wakatobi Islands' },
                    { url: 'https://picsum.photos/seed/wakatobi-2/800/600', caption: 'Wakatobi coral reefs' },
                    { url: 'https://picsum.photos/seed/wakatobi-3/800/600', caption: 'Exotic marine life' }
                ],
                positives: [
                    { title: 'Marine Biodiversity', description: '750+ coral species and 942+ fish species' },
                    { title: 'National Park', description: 'Comprehensive marine ecosystem protection' },
                    { title: 'Community Based Tourism', description: 'Empowering local communities in tourism' }
                ],
                negatives: [
                    { title: 'Destructive Fishing', description: 'Destructive fishing practices' },
                    { title: 'Climate Change', description: 'Climate change impacts on coral reefs' },
                    { title: 'Limited Resources', description: 'Limited resources for management' }
                ]
            },
            {
                name: 'Lombok Mandalika',
                icon: '🏍️',
                location: 'West Nusa Tenggara',
                description: 'Marine tourism destination with exotic beaches and international MotoGP circuit.',
                shortDesc: 'MotoGP destination',
                coordinates: { lat: -8.9, lng: 116.3 }, // Actual coordinates for Mandalika
                images: [
                    { url: 'https://picsum.photos/seed/mandalika-1/800/600', caption: 'Kuta Mandalika Beach' },
                    { url: 'https://picsum.photos/seed/mandalika-2/800/600', caption: 'Mandalika Circuit' },
                    { url: 'https://picsum.photos/seed/mandalika-3/800/600', caption: 'Sunset at Mandalika' }
                ],
                positives: [
                    { title: 'Local Economy', description: 'Driving regional economic growth' },
                    { title: 'Infrastructure', description: 'Modern infrastructure development' },
                    { title: 'International Promotion', description: 'Globally known through MotoGP' }
                ],
                negatives: [
                    { title: 'Gentrification', description: 'Rising land prices and cost of living' },
                    { title: 'Environmental Impact', description: 'Development changing natural landscape' },
                    { title: 'Overcrowding', description: 'Tourist density during events' }
                ]
            },
            {
                name: 'West Bali',
                icon: '🐒',
                location: 'Bali',
                description: 'A national park with tropical rainforest, wildlife, and rich biodiversity.',
                shortDesc: 'Bali National Park',
                coordinates: { lat: -8.2, lng: 114.6 }, // Actual coordinates for West Bali
                images: [
                    { url: 'https://picsum.photos/seed/bali-barat-1/800/600', caption: 'West Bali Forest' },
                    { url: 'https://picsum.photos/seed/bali-barat-2/800/600', caption: 'Bali Myna Bird' },
                    { url: 'https://picsum.photos/seed/bali-barat-3/800/600', caption: 'Menjangan Island' }
                ],
                positives: [
                    { title: 'Endemic Conservation', description: 'Protecting endemic species like Bali Myna' },
                    { title: 'Complete Ecosystem', description: 'From forests to coral reefs' },
                    { title: 'Research', description: 'Biodiversity research center' }
                ],
                negatives: [
                    { title: 'Illegal Hunting', description: 'Threats to wildlife' },
                    { title: 'Species Invasion', description: 'Invasive species disrupting ecosystems' },
                    { title: 'Deforestation', description: 'Forest habitat loss' }
                ]
            },
            {
                name: 'Thousand Islands',
                icon: '🏝️',
                location: 'DKI Jakarta',
                description: 'A cluster of small islands with coral reefs and amazing marine life.',
                shortDesc: 'Jakarta Islands Cluster',
                coordinates: { lat: -5.6, lng: 106.5 }, // Actual coordinates for Thousand Islands
                images: [
                    { url: 'https://picsum.photos/seed/seribu-1/800/600', caption: 'Small Thousand Islands' },
                    { url: 'https://picsum.photos/seed/seribu-2/800/600', caption: 'Beautiful coral reefs' },
                    { url: 'https://picsum.photos/seed/seribu-3/800/600', caption: 'Snorkeling spot' }
                ],
                positives: [
                    { title: 'Near Jakarta Tourism', description: 'Tourist destination near the capital' },
                    { title: 'Marine Park', description: 'Marine park with ecosystem protection' },
                    { title: 'Environmental Education', description: 'Marine conservation education center' }
                ],
                negatives: [
                    { title: 'Marine Pollution', description: 'Waste from Jakarta polluting waters' },
                    { title: 'Overfishing', description: 'Excessive fishing' },
                    { title: 'Mass Tourism', description: 'Negative impacts of mass tourism' }
                ]
            },
            {
                name: 'Lore Lindu',
                icon: '🦋',
                location: 'Central Sulawesi',
                description: 'A biosphere reserve with mountain lakes, unique endemic flora and fauna.',
                shortDesc: 'Biosphere Reserve',
                coordinates: { lat: -1.8, lng: 120.2 }, // Actual coordinates for Lore Lindu
                images: [
                    { url: 'https://picsum.photos/seed/lore-1/800/600', caption: 'Lake Lindu' },
                    { url: 'https://picsum.photos/seed/lore-2/800/600', caption: 'Endemic butterflies' },
                    { url: 'https://picsum.photos/seed/lore-3/800/600', caption: 'Mountain forest' }
                ],
                positives: [
                    { title: 'Biodiversity', description: 'Many unique endemic species' },
                    { title: 'Biosphere Reserve', description: 'Integrated ecosystem management' },
                    { title: 'Cultural Diversity', description: 'Various tribes with diverse cultures' }
                ],
                negatives: [
                    { title: 'Deforestation', description: 'Forest loss for agriculture' },
                    { title: 'Hunting', description: 'Threats to wildlife' },
                    { title: 'Climate Change', description: 'Impacts on mountain ecosystems' }
                ]
            },
            {
                name: 'Derawan',
                icon: '🐢',
                location: 'East Kalimantan',
                description: 'Islands with green turtle habitat, non-stinging jellyfish, and spectacular marine life.',
                shortDesc: 'Turtle habitat',
                coordinates: { lat: 2.3, lng: 118.2 }, // Actual coordinates for Derawan
                images: [
                    { url: 'https://picsum.photos/seed/derawan-1/800/600', caption: 'Derawan Beach' },
                    { url: 'https://picsum.photos/seed/derawan-2/800/600', caption: 'Green turtles nesting' },
                    { url: 'https://picsum.photos/seed/derawan-3/800/600', caption: 'Kakamba jellyfish' }
                ],
                positives: [
                    { title: 'Turtle Habitat', description: 'Important nesting site for green turtles' },
                    { title: 'Unique Jellyfish', description: 'Only place with non-stinging jellyfish' },
                    { title: 'Diving Paradise', description: 'World-class diving spots' }
                ],
                negatives: [
                    { title: 'Turtle Threat', description: 'Hunting and turtle egg trade' },
                    { title: 'Development', description: 'Development threatening habitats' },
                    { title: 'Pollution', description: 'Pollution from human activities' }
                ]
            }
        ],
        selectWonder(index) {
            this.selectedWonder = index;
            this.currentImage = 0;
            document.getElementById('wonders').scrollIntoView({ 
                behavior: 'smooth' 
            });
        },
        nextImage() {
            this.currentImage = (this.currentImage + 1) % this.wonders[this.selectedWonder].images.length;
        },
        previousImage() {
            this.currentImage = (this.currentImage - 1 + this.wonders[this.selectedWonder].images.length) % this.wonders[this.selectedWonder].images.length;
        },
        addToJourney(wonderIndex) {
            const wonder = this.wonders[wonderIndex];
            if (!this.journeyDestinations.find(d => d.name === wonder.name)) {
                this.journeyDestinations.push(wonder);
            }
        },
        removeFromJourney(index) {
            this.journeyDestinations.splice(index, 1);
        },
        calculateQuizResults() {
            // Simple algorithm to determine the best wonder based on quiz answers
            const travelerTypes = this.quizAnswers.travelerType;
            const activities = this.quizAnswers.activities;
            
            // Score each wonder based on the quiz answers
            const scores = this.wonders.map(wonder => {
                let score = 0;
                
                // Check if wonder matches traveler type
                if (travelerTypes.includes('Adventurer') && (wonder.name.includes('Bromo') || wonder.name.includes('Lore Lindu'))) {
                    score += 3;
                }
                if (travelerTypes.includes('Photographer') && (wonder.name.includes('Bromo') || wonder.name.includes('Raja Ampat'))) {
                    score += 3;
                }
                if (travelerTypes.includes('Diver') && (wonder.name.includes('Raja Ampat') || wonder.name.includes('Wakatobi') || wonder.name.includes('Derawan'))) {
                    score += 3;
                }
                if (travelerTypes.includes('Nature Lover')) {
                    score += 2; // All wonders are good for nature lovers
                }
                
                // Check if wonder matches activities
                if (activities.includes('Wildlife Watching') && (wonder.name.includes('Komodo') || wonder.name.includes('West Bali') || wonder.name.includes('Derawan'))) {
                    score += 2;
                }
                if (activities.includes('Snorkeling') && (wonder.name.includes('Raja Ampat') || wonder.name.includes('Wakatobi') || wonder.name.includes('Derawan') || wonder.name.includes('Thousand Islands'))) {
                    score += 2;
                }
                if (activities.includes('Hiking') && (wonder.name.includes('Bromo') || wonder.name.includes('Lore Lindu'))) {
                    score += 2;
                }
                if (activities.includes('Camping') && (wonder.name.includes('Lore Lindu') || wonder.name.includes('West Bali'))) {
                    score += 2;
                }
                if (activities.includes('Boating') && (wonder.name.includes('Lake Toba') || wonder.name.includes('Thousand Islands'))) {
                    score += 2;
                }
                if (activities.includes('Sunset Viewing')) {
                    score += 1; // Most wonders have good sunset views
                }
                
                return { wonder, score };
            });
            
            // Sort by score and return the top 3
            scores.sort((a, b) => b.score - a.score);
            this.quizResults = scores.slice(0, 3).map(item => item.wonder);
        },
        startPanoramaDrag(e) {
            this.isDragging = true;
            this.startX = e.clientX || e.touches[0].clientX;
        },
        dragPanorama(e) {
            if (!this.isDragging) return;
            
            const currentX = e.clientX || e.touches[0].clientX;
            const diff = currentX - this.startX;
            this.panoramaPosition += diff;
            this.startX = currentX;
            
            // Update panorama position
            const panorama = document.querySelector('.panorama-image');
            if (panorama) {
                panorama.style.transform = `translateX(${this.panoramaPosition}px)`;
            }
        },
        endPanoramaDrag() {
            this.isDragging = false;
        },
        updateScrollProgress() {
            const scrollTop = window.scrollY;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            this.scrollProgress = scrollTop / docHeight;
            
            // Update progress indicator
            const progressBar = document.querySelector('.progress-indicator');
            if (progressBar) {
                progressBar.style.transform = `scaleX(${this.scrollProgress})`;
            }
            
            // Update timeline progress
            const timelineBar = document.querySelector('.timeline-progress-bar');
            if (timelineBar) {
                const timelineSection = document.getElementById('conservation');
                if (timelineSection) {
                    const timelineTop = timelineSection.offsetTop;
                    const timelineHeight = timelineSection.offsetHeight;
                    const timelineScrollTop = scrollTop - timelineTop + window.innerHeight / 2;
                    
                    if (timelineScrollTop > 0 && timelineScrollTop < timelineHeight) {
                        const progress = timelineScrollTop / timelineHeight;
                        timelineBar.style.height = `${progress * 100}%`;
                    }
                }
            }
            
            // Show/hide scroll to top button
            const scrollTopBtn = document.querySelector('.scroll-top');
            if (scrollTopBtn) {
                if (scrollTop > 300) {
                    scrollTopBtn.classList.add('visible');
                } else {
                    scrollTopBtn.classList.remove('visible');
                }
            }
        },
        scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        },
    }" x-init="() => {
        // Initialize panorama
        const panorama = document.querySelector('.panorama-image');
        if (panorama) {
            // Clone images for seamless looping
            const images = panorama.querySelectorAll('img');
            images.forEach(img => {
                const clone = img.cloneNode(true);
                panorama.appendChild(clone);
            });
        }
        
        // Add scroll event listener
        window.addEventListener('scroll', this.updateScrollProgress);
        this.updateScrollProgress();
    }">
        <!-- Progress Indicator -->
        <div class="progress-indicator"></div>
        
        <!-- Loading Bar -->
        <div class="loading-bar" id="loading-bar"></div>

        <!-- Hero Section -->
        <section id="home" class="hero-bg h-screen flex items-center justify-center text-center text-white pt-20 relative overflow-hidden">
            <div id="particles-js"></div>
            <div class="absolute inset-0 dark-overlay"></div>
            
            <!-- Animated Background Shapes -->
            <div class="absolute inset-0 overflow-hidden z-0">
                <div class="absolute top-20 left-10 w-72 h-72 bg-teal-500/10 rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
                <div class="absolute top-40 right-10 w-72 h-72 bg-yellow-500/10 rounded-full mix-blend-multiply filter blur-xl animate-pulse animation-delay-2000"></div>
                <div class="absolute -bottom-8 left-20 w-72 h-72 bg-pink-500/10 rounded-full mix-blend-multiply filter blur-xl animate-pulse animation-delay-4000"></div>
            </div>
            
            <div class="container mx-auto px-4 md:px-6 max-w-4xl relative z-10">
                <div class="floating-element mb-6">
                    <span class="inline-block bg-primary bg-opacity-20 backdrop-blur-sm text-white text-sm font-medium py-2 px-4 rounded-full border border-primary border-opacity-30 pulse-glow">
                        <i class="fas fa-seedling mr-2"></i>Explore 10 Natural Wonders of Indonesia
                    </span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    <span class="block split-text playfair" id="hero-title-1">Explore</span>
                    <span class="block split-text gradient-text playfair" id="hero-title-2">Deeper</span>
                </h1>
                <div class="h-20 overflow-hidden mb-8">
                    <p class="text-xl md:text-2xl font-light opacity-90 typewriter" id="hero-description">
                        Discover Hidden Natural Beauty of Indonesia
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#wonders" class="magnetic-button interactive-btn bg-primary bg-opacity-20 backdrop-blur-md border border-white border-opacity-30 px-8 py-4 rounded-full text-white hover:bg-opacity-30 transition-all duration-300 overflow-hidden relative group">
                        <span class="relative z-10">Explore Wonders</span>
                        <div class="absolute inset-0 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                        <span class="absolute inset-0 flex items-center justify-center text-dark transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left">Explore Wonders</span>
                    </a>
                </div>
            </div>
            
            <!-- Floating elements -->
            <div class="absolute bottom-10 left-10 w-6 h-6 rounded-full bg-primary opacity-30 floating-element" style="animation-delay: 0s;"></div>
            <div class="absolute top-20 right-20 w-10 h-10 rounded-full bg-accent opacity-20 floating-element" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/3 left-1/4 w-8 h-8 rounded-full bg-primary opacity-20 floating-element" style="animation-delay: 2s;"></div>
        </section>

        <!-- Stats Section -->
        <section class="py-12 animated-gradient text-white">
            <div class="container mx-auto px-4 md:px-6">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="text-center counter-container" x-data="{ count: 0, target: 17000 }" x-init="() => {
                        let start = 0;
                        const duration = 2000;
                        const step = target / (duration / 16);
                        const counter = setInterval(() => {
                            start += step;
                            if (start >= target) {
                                count = target;
                                clearInterval(counter);
                            } else {
                                count = Math.floor(start);
                            }
                        }, 16);
                    }">
                        <div class="text-3xl md:text-4xl font-bold mb-2" x-text="count.toLocaleString() + '+'"></div>
                        <div class="text-sm md:text-base opacity-90">Flora Species</div>
                    </div>
                    <div class="text-center counter-container" x-data="{ count: 0, target: 1900 }" x-init="() => {
                        let start = 0;
                        const duration = 2000;
                        const step = target / (duration / 16);
                        const counter = setInterval(() => {
                            start += step;
                            if (start >= target) {
                                count = target;
                                clearInterval(counter);
                            } else {
                                count = Math.floor(start);
                            }
                        }, 16);
                    }">
                        <div class="text-3xl md:text-4xl font-bold mb-2" x-text="count.toLocaleString() + '+'"></div>
                        <div class="text-sm md:text-base opacity-90">Bird Species</div>
                    </div>
                    <div class="text-center counter-container" x-data="{ count: 0, target: 50 }" x-init="() => {
                        let start = 0;
                        const duration = 2000;
                        const step = target / (duration / 16);
                        const counter = setInterval(() => {
                            start += step;
                            if (start >= target) {
                                count = target;
                                clearInterval(counter);
                            } else {
                                count = Math.floor(start);
                            }
                        }, 16);
                    }">
                        <div class="text-3xl md:text-4xl font-bold mb-2" x-text="count + '+'"></div>
                        <div class="text-sm md:text-base opacity-90">National Parks</div>
                    </div>
                    <div class="text-center counter-container" x-data="{ count: 0, target: 10 }" x-init="() => {
                        let start = 0;
                        const duration = 2000;
                        const step = target / (duration / 16);
                        const counter = setInterval(() => {
                            start += step;
                            if (start >= target) {
                                count = target;
                                clearInterval(counter);
                            } else {
                                count = Math.floor(start);
                            }
                        }, 16);
                    }">
                        <div class="text-3xl md:text-4xl font-bold mb-2" x-text="count"></div>
                        <div class="text-sm md:text-base opacity-90">Natural Wonders</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-20 section-bg">
            <div class="container mx-auto px-4 md:px-6">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="inline-block bg-primary bg-opacity-10 text-primary text-sm font-medium py-2 px-4 rounded-full mb-4">
                        About Us
                    </span>
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                        <span class="gradient-text">Explore Deeper Indonesia</span>
                    </h2>
                    <p class="text-white">We are committed to introducing pristine natural beauty of Indonesia and supporting environmental conservation efforts.</p>
                </div>
                
                <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16">
                    <div class="lg:w-1/2">
                        <div class="bg-dark-light rounded-2xl p-8 shadow-lg border border-dark-lighter hover-card">
                            <h3 class="text-2xl md:text-3xl font-semibold text-white mb-6">Discovering Natural Wonders of Archipelago</h3>
                            <p class="text-white mb-4">Indonesia is the second most biodiverse country in the world. From west to east, Indonesia's nature holds countless beauties.</p>
                            <p class="text-white mb-6">Explore Deeper Indonesia exists to take you to explore hidden places that still maintain their authenticity, while supporting conservation and sustainable tourism efforts.</p>
                            
                            <div class="flex flex-wrap gap-4 mb-8">
                                <div class="eco-badge px-4 py-2 rounded-full text-sm font-medium text-white border border-primary border-opacity-30">
                                    <i class="fas fa-recycle mr-2"></i>Eco-Friendly
                                </div>
                                <div class="eco-badge px-4 py-2 rounded-full text-sm font-medium text-white border border-primary border-opacity-30">
                                    <i class="fas fa-hands-helping mr-2"></i>Sustainable
                                </div>
                                <div class="eco-badge px-4 py-2 rounded-full text-sm font-medium text-white border border-primary border-opacity-30">
                                    <i class="fas fa-users mr-2"></i>Local Communities
                                </div>
                            </div>
                            
                            <a href="#conservation" class="inline-flex items-center gradient-bg hover:opacity-90 text-white font-medium px-5 md:px-6 py-3 rounded-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg glow interactive-btn">
                                <i class="fas fa-leaf mr-2"></i>Learn Conservation
                            </a>
                        </div>
                    </div>
                    <div class="lg:w-1/2">
                        <div class="relative">
                            <div class="rounded-2xl overflow-hidden shadow-xl border border-dark-lighter image-3d">
                                <img src="https://images.unsplash.com/photo-1528181304800-259b08848526?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Indonesian natural scenery" class="w-full h-auto ken-burns">
                            </div>
                                <div class="absolute -bottom-6 -left-6 gradient-bg text-white md:p-6 rounded-2xl shadow-lg p-3 w-42 md:max-w-xs glow">
                                <div class="flex items-center mb-2">
                                    <div class="md:w-10 md:h-10 w-8 h-8 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-3">
                                        <i class="fas fa-mountain"></i>
                                    </div>
                                    <div>
                                        <div class="font-bold text-lg text-white">500+</div>
                                        <div class="text-sm text-white">Mountains in Indonesia</div>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute -top-6 -right-6 gradient-bg text-white md:p-6 rounded-2xl shadow-lg p-3 w-42 md:max-w-xs glow">
                                <div class="flex items-center">
                                    <div class="md:w-10 md:h-10 w-8 h-8 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-3">
                                        <i class="fas fa-water"></i>
                                    </div>
                                    <div>
                                        <div class="font-bold text-lg">17,500+</div>
                                        <div class="text-sm opacity-90">Islands in Archipelago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Wonders Section -->
        <section id="wonders" class="py-20 bg-dark">
            <div class="container mx-auto px-4 md:px-6">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="inline-block bg-primary bg-opacity-10 text-primary text-sm font-medium py-2 px-4 rounded-full mb-4">
                        10 Natural Wonders of Indonesia
                    </span>
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Explore <span class="gradient-text">Wonders</span> of Indonesia</h2>
                    <p class="text-gray-400">Discover Indonesia's natural beauty with in-depth analysis of positive and negative impacts.</p>
                </div>
                
                {{-- <!-- Interactive Navigation -->
                <div class="mb-16">
                    <div class="bg-dark-light rounded-2xl p-8 shadow-lg border border-dark-lighter">
                        <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                            <template x-for="(wonder, index) in wonders" :key="index">
                                <a href="#image" @click="selectWonder(index)" 
                                        :class="selectedWonder === index ? 'bg-primary text-white' : 'bg-dark-lighter text-gray-300 hover:bg-primary hover:text-white'"
                                        class="wonder-card p-4 rounded-xl transition-all duration-300 transform hover:scale-105 text-center group cursor-glow">
                                    <div class="text-2xl mb-2" x-text="wonder.icon"></div>
                                    <div class="text-sm font-medium" x-text="wonder.name"></div>
                                </a>
                            </template>
                        </div>
                    </div>
                </div> --}}
                
                <!-- Wonder Details -->
                <div class="grid lg:grid-cols-2 gap-12 items-center" id="image">
                    <!-- Image Gallery -->
                    <div class="relative">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-dark-lighter image-gallery">
                            <div class="image-container" :style="`transform: translateX(-${currentImage * 100}%)`">
                                <template x-for="(image, index) in wonders[selectedWonder].images" :key="index">
                                    <div class="image-slide">
                                        <img :src="image.url" :alt="wonders[selectedWonder].name" class="w-full h-96 object-cover">
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                        <div class="absolute bottom-4 left-4 text-white">
                                            <h3 class="text-2xl font-semibold" x-text="wonders[selectedWonder].name"></h3>
                                            <p class="text-sm opacity-80" x-text="image.caption"></p>
                                        </div>
                                    </div>
                                </template>
                            </div>
                            
                            <!-- Carousel Controls -->
                            <button @click="previousImage()" class="absolute left-4 top-1/2 -translate-y-1/2 bg-dark bg-opacity-70 backdrop-blur text-white p-2 rounded-full hover:bg-opacity-90 transition-all z-10">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button @click="nextImage()" class="absolute right-4 top-1/2 -translate-y-1/2 bg-dark bg-opacity-70 backdrop-blur text-white p-2 rounded-full hover:bg-opacity-90 transition-all z-10">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                            
                            <!-- Image Indicators -->
                            <div class="absolute bottom-4 right-4 flex space-x-2 z-10">
                                <template x-for="(image, index) in wonders[selectedWonder].images" :key="index">
                                    <button @click="currentImage = index" 
                                            :class="currentImage === index ? 'bg-white' : 'bg-white/50'"
                                            class="w-2 h-2 rounded-full transition-all duration-300"></button>
                                </template>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div>
                        <h3 class="playfair text-3xl md:text-4xl font-light mb-6 text-white" x-text="wonders[selectedWonder].name"></h3>
                        <p class="text-gray-400 mb-8 leading-relaxed" x-text="wonders[selectedWonder].description"></p>
                        
                        <!-- Location Info -->
                        <div class="bg-green-500/80 rounded-xl w-40 p-4 mb-6 shadow-sm border-green-500/80">
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-map-marker-alt text-white"></i>
                                <span class="text-gray-300" x-text="wonders[selectedWonder].location"></span>
                            </div>
                        </div>
                        
                        <!-- Positive Factors -->
                        <div class="mb-6">
                            <h4 class="text-xl font-semibold text-green-400 mb-4 flex items-center">
                                <i class="fas fa-plus-circle mr-2"></i>
                                Positive Factors
                            </h4>
                            <div class="space-y-3">
                                <template x-for="(positive, index) in wonders[selectedWonder].positives" :key="index">
                                    <div class="flex items-start space-x-3 bg-green-900/20 p-3 rounded-lg border-green-800/30 hover-card">
                                        <div class="w-8 h-8 bg-green-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i class="fas fa-check text-green-400 text-sm"></i>
                                        </div>
                                        <div>
                                            <h5 class="font-medium text-green-300 mb-1" x-text="positive.title"></h5>
                                            <p class="text-gray-400 text-sm" x-text="positive.description"></p>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                        
                        <!-- Negative Factors -->
                        <div>
                            <h4 class="text-xl font-semibold text-red-400 mb-4 flex items-center">
                                <i class="fas fa-exclamation-triangle mr-2"></i>
                                Negative Factors & Challenges
                            </h4>
                            <div class="space-y-3">
                                <template x-for="(negative, index) in wonders[selectedWonder].negatives" :key="index">
                                    <div class="flex items-start space-x-3 bg-red-900/20 p-3 rounded-lg border-red-800/30 hover-card">
                                        <div class="w-8 h-8 bg-red-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i class="fas fa-times text-red-400 text-sm"></i>
                                        </div>
                                        <div>
                                            <h5 class="font-medium text-red-300 mb-1" x-text="negative.title"></h5>
                                            <p class="text-gray-400 text-sm" x-text="negative.description"></p>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Conservation Timeline Section -->
       <livewire:components.commitment />

        <!-- Impact Counter Section -->
        <section class="py-20 animated-gradient text-white">
            <div class="container mx-auto px-4 md:px-6">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                        Our <span class="text-green-300">Collective Impact</span>
                    </h2>
                    <p class="text-white/90 text-lg">Every small action creates big changes</p>
                </div>
                
                <div class="grid md:grid-cols-4 gap-8">
                    <div class="text-center counter-container" x-data="{ count: 0, target: 5000 }" x-init="() => {
                        let start = 0;
                        const duration = 2000;
                        const step = target / (duration / 16);
                        const counter = setInterval(() => {
                            start += step;
                            if (start >= target) {
                                count = target;
                                clearInterval(counter);
                            } else {
                                count = Math.floor(start);
                            }
                        }, 16);
                    }">
                        <div class="text-5xl font-bold text-white mb-2">
                            <span x-text="count.toLocaleString()"></span>+
                        </div>
                        <div class="text-white/80">Trees Planted</div>
                    </div>
                    <div class="text-center counter-container" x-data="{ count: 0, target: 1200 }" x-init="() => {
                        let start = 0;
                        const duration = 2000;
                        const step = target / (duration / 16);
                        const counter = setInterval(() => {
                            start += step;
                            if (start >= target) {
                                count = target;
                                clearInterval(counter);
                            } else {
                                count = Math.floor(start);
                            }
                        }, 16);
                    }">
                        <div class="text-5xl font-bold text-white mb-2">
                            <span x-text="count.toLocaleString()"></span>+
                        </div>
                        <div class="text-white/80">Km² Coral Reefs Protected</div>
                    </div>
                    <div class="text-center counter-container" x-data="{ count: 0, target: 35000 }" x-init="() => {
                        let start = 0;
                        const duration = 2000;
                        const step = target / (duration / 16);
                        const counter = setInterval(() => {
                            start += step;
                            if (start >= target) {
                                count = target;
                                clearInterval(counter);
                            } else {
                                count = Math.floor(start);
                            }
                        }, 16);
                    }">
                        <div class="text-5xl font-bold text-white mb-2">
                            <span x-text="count.toLocaleString()"></span>+
                        </div>
                        <div class="text-white/80">Volunteers Involved</div>
                    </div>
                    <div class="text-center counter-container" x-data="{ count: 0, target: 150 }" x-init="() => {
                        let start = 0;
                        const duration = 2000;
                        const step = target / (duration / 16);
                        const counter = setInterval(() => {
                            start += step;
                            if (start >= target) {
                                count = target;
                                clearInterval(counter);
                            } else {
                                count = Math.floor(start);
                            }
                        }, 16);
                    }">
                        <div class="text-5xl font-bold text-white mb-2">
                            <span x-text="count"></span>+
                        </div>
                        <div class="text-white/80">Education Programs</div>
                    </div>
                </div>
            </div>
        </section>



        @push('scripts')
        <script>
            // Initialize Particles.js
            particlesJS('particles-js', {
                particles: {
                    number: {
                        value: 80,
                        density: {
                            enable: true,
                            value_area: 800
                        }
                    },
                    color: {
                        value: '#ffffff'
                    },
                    shape: {
                        type: 'circle'
                    },
                    opacity: {
                        value: 0.5,
                        random: false
                    },
                    size: {
                        value: 3,
                        random: true
                    },
                    line_linked: {
                        enable: true,
                        distance: 150,
                        color: '#ffffff',
                        opacity: 0.4,
                        width: 1
                    },
                    move: {
                        enable: true,
                        speed: 2,
                        direction: 'none',
                        random: false,
                        straight: false,
                        out_mode: 'out',
                        bounce: false
                    }
                },
                interactivity: {
                    detect_on: 'canvas',
                    events: {
                        onhover: {
                            enable: true,
                            mode: 'grab'
                        },
                        onclick: {
                            enable: true,
                            mode: 'push'
                        },
                        resize: true
                    },
                    modes: {
                        grab: {
                            distance: 140,
                            line_linked: {
                                opacity: 1
                            }
                        },
                        push: {
                            particles_nb: 4
                        }
                    }
                },
                retina_detect: true
            });
            
            // GSAP Animations
            gsap.registerPlugin(ScrollTrigger, TextPlugin);
            
            // Parallax effect for hero section
            gsap.to('#particles-js', {
                yPercent: -50,
                ease: 'none',
                scrollTrigger: {
                    trigger: 'body',
                    start: 'top top',
                    end: 'bottom top',
                    scrub: true
                }
            });
            
            // Split text animation for hero title
            const heroTitle1 = document.getElementById('hero-title-1');
            const heroTitle2 = document.getElementById('hero-title-2');
            
            if (heroTitle1) {
                const chars1 = heroTitle1.innerText.split('');
                heroTitle1.innerHTML = '';
                chars1.forEach((char, i) => {
                    heroTitle1.innerHTML += `<span class="inline-block">${char === ' ' ? '&nbsp;' : char}</span>`;
                });
                
                const spans1 = heroTitle1.querySelectorAll('span');
                gsap.fromTo(spans1, 
                    { y: 100, opacity: 0 }, 
                    { 
                        y: 0, 
                        opacity: 1, 
                        duration: 0.8,
                        stagger: 0.03,
                        ease: "power2.out",
                        delay: 0.5
                    }
                );
            }
            
            if (heroTitle2) {
                const chars2 = heroTitle2.innerText.split('');
                heroTitle2.innerHTML = '';
                chars2.forEach((char, i) => {
                    heroTitle2.innerHTML += `<span class="inline-block">${char === ' ' ? '&nbsp;' : char}</span>`;
                });
                
                const spans2 = heroTitle2.querySelectorAll('span');
                gsap.fromTo(spans2, 
                    { y: 100, opacity: 0 }, 
                    { 
                        y: 0, 
                        opacity: 1, 
                        duration: 0.8,
                        stagger: 0.03,
                        ease: "power2.out",
                        delay: 0.8
                    }
                );
            }
            
            const heroDescription = document.getElementById('hero-description');
            if (heroDescription) {
                const text = heroDescription.innerText;
                heroDescription.innerText = '';
                let i = 0;
                
                function type() {
                    if (i < text.length) {
                        heroDescription.innerText += text.charAt(i);
                        i++;
                        setTimeout(type, 50);
                    }
                }
                
                setTimeout(type, 1500);
            }
            
            // Animate sections on scroll
            gsap.utils.toArray('section').forEach(section => {
                gsap.from(section, {
                    opacity: 0,
                    y: 50,
                    duration: 1,
                    scrollTrigger: {
                        trigger: section,
                        start: 'top 80%',
                        end: 'bottom 20%',
                        toggleActions: 'play none none reverse',
                    }
                });
            });
            
            // Animate timeline items
            
            // Loading bar
            const loadingBar = document.getElementById('loading-bar');
            
            // Show loading bar when page starts loading
            window.addEventListener('load', () => {
                loadingBar.classList.add('active');
                setTimeout(() => {
                    loadingBar.classList.remove('active');
                }, 500);
            });
            

            // Header background change on scroll
            window.addEventListener('scroll', function() {
                const header = document.querySelector('header');
                if (window.scrollY > 100) {
                    header.classList.add('shadow-md', 'bg-dark-light', 'bg-opacity-95');
                    header.classList.remove('shadow-sm', 'bg-opacity-90');
                } else {
                    header.classList.remove('shadow-md', 'bg-dark-light', 'bg-opacity-95');
                    header.classList.add('shadow-sm', 'bg-opacity-90');
                }
            });
            
            // Interactive map functionality
            const mapPoints = document.querySelectorAll('.map-point');
            const tooltip = document.querySelector('.map-tooltip');
            const tooltipTitle = document.getElementById('tooltip-title');
            const tooltipDesc = document.getElementById('tooltip-desc');

            mapPoints.forEach(point => {
                point.addEventListener('mouseenter', function() {
                    // Remove active class from all points
                    mapPoints.forEach(p => p.classList.remove('active'));
                    
                    // Add active class to current point
                    this.classList.add('active');
                    
                    // Update tooltip content
                    tooltipTitle.textContent = this.getAttribute('data-title');
                    tooltipDesc.textContent = this.getAttribute('data-desc');
                    
                    // Position tooltip
                    const rect = this.getBoundingClientRect();
                    const mapRect = document.querySelector('.interactive-map').getBoundingClientRect();
                    
                    tooltip.style.left = `${rect.left - mapRect.left + rect.width/2}px`;
                    tooltip.style.top = `${rect.top - mapRect.top - tooltip.offsetHeight - 10}px`;
                    
                    // Show tooltip
                    tooltip.classList.add('active');
                });
                
                point.addEventListener('mouseleave', function() {
                    this.classList.remove('active');
                    tooltip.classList.remove('active');
                });
            });
            
            // Magnetic effect for buttons
            document.querySelectorAll('.magnetic').forEach(button => {
                button.addEventListener('mousemove', (e) => {
                    const rect = button.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;
                    
                    gsap.to(button, {
                        x: x * 0.3,
                        y: y * 0.3,
                        duration: 0.3
                    });
                });
                
                button.addEventListener('mouseleave', () => {
                    gsap.to(button, {
                        x: 0,
                        y: 0,
                        duration: 0.3
                    });
                });
            });
        </script>
    </style>
</x-app-layout>