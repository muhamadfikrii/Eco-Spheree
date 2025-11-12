<div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8 lg:py-36 bg-grid-pattern">
    
    <div x-data="ecologicalMarvels()" class="max-w-7xl mx-auto">
        <div class="fixed inset-0 -z-10 overflow-hidden">
            <div class="absolute -top-40 -right-32 w-80 h-80 rounded-full bg-gradient-to-br from-[#a8c0b8] to-[#7c9a92] opacity-10 blur-xl floating-element"></div>
            <div class="absolute -bottom-40 -left-32 w-80 h-80 rounded-full bg-gradient-to-br from-[#7c9a92] to-[#5a7c74] opacity-10 blur-xl floating-element" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/4 w-64 h-64 rounded-full bg-gradient-to-br from-[#5a7c74] to-[#3a5a53] opacity-5 blur-xl floating-element" style="animation-delay: 4s;"></div>
        </div>

        <header class="text-center mb-20 fade-in">
            <div class="inline-flex items-center justify-center w-24 h-24 rounded-full nature-bg mb-6 relative">
                <i class="fas fa-seedling text-4xl text-green-500 z-10"></i>
                <div class="absolute -top-1 -right-1 w-6 h-6 rounded-full indonesia-flag"></div>
            </div>
            <h1 class="heading-font text-5xl md:text-6xl font-medium mb-6">
                <span class="gradient-text">Ecological</span>
                <span class="block gradient-text mt-2">Marvels of Indonesia</span>
            </h1>
            <p class="text-xl text-[#5a7c74] max-w-3xl mx-auto leading-relaxed">Explore the natural wonders of Indonesia and its mesmerizing ecosystems in the archipelago of wonders. Every island holds priceless charm.</p>
        </header>

        <nav class="mb-16 fade-in" style="animation-delay: 0.2s;">
            <ul class="flex flex-wrap justify-center gap-2 md:gap-6">
                <template x-for="(item, index) in navItems" :key="index">
                    <li>
                        <button 
                            @click="setActiveItem(index)"
                            class="nav-item px-5 py-3 rounded-xl text-green-600 font-medium flex items-center gap-2"
                            :class="{'active-nav': activeIndex === index}"
                        >
                            <i class="text-lg" :class="item.icon"></i>
                            <span x-text="item.title"></span>
                        </button>
                    </li>
                </template>
            </ul>
        </nav>

        <main class="glass-effect rounded-3xl shadow-xl overflow-hidden content-transition">
            <div x-show="activeIndex !== null" x-transition:enter="transition ease-out duration-700" 
                 x-transition:enter-start="opacity-0 transform scale-95" 
                 x-transition:enter-end="opacity-100 transform scale-100"
                 class="p-0">
                
                <div class="relative h-64 md:h-80 overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center bg-cover bg-center" :style="activeIndex !== null ? `background-image: url('${navItems[activeIndex].image}')` : ''">
                        <div class="absolute inset-0 image-overlay"></div>
                        <div class="text-center text-white p-4 z-10">
                            <h2 class="heading-font text-4xl md:text-5xl font-medium mb-2" x-text="activeIndex !== null ? navItems[activeIndex].title : ''"></h2>
                            <p class="text-xl opacity-90 max-w-2xl mx-auto" x-text="activeIndex !== null ? navItems[activeIndex].subtitle : ''"></p>
                            <div class="mt-4 flex justify-center items-center gap-2">
                                <i class="fas fa-map-marker-alt"></i>
                                <span x-text="activeIndex !== null ? navItems[activeIndex].province : ''"></span>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent"></div>
                </div>
                
                <div class="p-8 md:p-12">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 md:gap-12">
                        <div class="lg:col-span-2 space-y-8">
                            <div>
                                <h3 class="heading-font text-2xl text-[#3a5a53] mb-4 border-l-4 border-[#7c9a92] pl-4">Description</h3>
                                <div class="space-y-4 text-[#4a6a62] leading-relaxed">
                                    <template x-for="(paragraph, pIndex) in (activeIndex !== null ? navItems[activeIndex].content : [])" :key="pIndex">
                                        <p x-text="paragraph" class="stagger-item" :style="`animation-delay: ${pIndex * 0.1}s`"></p>
                                    </template>
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">
                                <template x-for="(stat, sIndex) in (activeIndex !== null ? navItems[activeIndex].stats : [])" :key="sIndex">
                                    <div class="eco-card bg-white/50 rounded-xl p-4 text-center border border-[#e2e8e6]">
                                        <div class="text-2xl font-bold text-[#3a5a53] mb-1" x-text="stat.value"></div>
                                        <div class="text-sm text-[#7c9a92]" x-text="stat.label"></div>
                                    </div>
                                </template>
                            </div>

                            <div class="mt-8">
                                <h3 class="heading-font text-2xl text-[#3a5a53] mb-4 border-l-4 border-[#7c9a92] pl-4">Photo Gallery</h3>
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                    <template x-for="(photo, pIndex) in (activeIndex !== null ? navItems[activeIndex].gallery : [])" :key="pIndex">
                                        <div class="eco-card rounded-xl overflow-hidden h-32 md:h-40 bg-gray-200 bg-cover bg-center" :style="`background-image: url('${photo}')`"></div>
                                    </template>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-8">
                            <div class="eco-card glass-effect rounded-2xl p-6 border border-[#e2e8e6]">
                                <h3 class="heading-font text-xl text-[#3a5a53] mb-4 flex items-center gap-2">
                                    <i class="fas fa-star text-[#7c9a92]"></i>
                                    <span>Uniqueness</span>
                                </h3>
                                <ul class="space-y-3">
                                    <template x-for="(feature, fIndex) in (activeIndex !== null ? navItems[activeIndex].features : [])" :key="fIndex">
                                        <li class="flex items-start stagger-item" :style="`animation-delay: ${0.5 + fIndex * 0.1}s`">
                                            <i class="fas fa-check text-sm text-[#7c9a92] mt-1.5 mr-3 flex-shrink-0"></i>
                                            <span class="text-[#4a6a62]" x-text="feature"></span>
                                        </li>
                                    </template>
                                </ul>
                            </div>
                            
                            <div class="eco-card glass-effect rounded-2xl p-6 border border-[#e2e8e6]">
                                <h3 class="heading-font text-xl text-[#3a5a53] mb-4 flex items-center gap-2">
                                    <i class="fas fa-exclamation-triangle text-[#c97a6a]"></i>
                                    <span>Threats</span>
                                </h3>
                                <ul class="space-y-3">
                                    <template x-for="(threat, tIndex) in (activeIndex !== null ? navItems[activeIndex].threats : [])" :key="tIndex">
                                        <li class="flex items-start stagger-item" :style="`animation-delay: ${0.7 + tIndex * 0.1}s`">
                                            <i class="fas fa-times text-sm text-[#c97a6a] mt-1.5 mr-3 flex-shrink-0"></i>
                                            <span class="text-[#4a6a62]" x-text="threat"></span>
                                        </li>
                                    </template>
                                </ul>
                            </div>
                            
                            <div class="eco-card glass-effect rounded-2xl p-6 border border-[#e2e8e6]">
                                <h3 class="heading-font text-xl text-[#3a5a53] mb-4 flex items-center gap-2">
                                    <i class="fas fa-map-marker-alt text-[#7c9a92]"></i>
                                    <span>Location in Indonesia</span>
                                </h3>
                                <div class="space-y-2">
                                    <template x-for="(location, lIndex) in (activeIndex !== null ? navItems[activeIndex].locations : [])" :key="lIndex">
                                        <div class="text-[#4a6a62] stagger-item flex items-center" :style="`animation-delay: ${0.9 + lIndex * 0.1}s`">
                                            <i class="fas fa-map-pin text-xs text-[#7c9a92] mr-2"></i>
                                            <span x-text="location"></span>
                                        </div>
                                    </template>
                                </div>
                            </div>

                            <div class="eco-card glass-effect rounded-2xl p-6 border border-[#e2e8e6]">
                                <h3 class="heading-font text-xl text-[#3a5a53] mb-4 flex items-center gap-2">
                                    <i class="fas fa-calendar-alt text-[#7c9a92]"></i>
                                    <span>Best Time to Visit</span>
                                </h3>
                                <div class="text-[#4a6a62] stagger-item" :style="`animation-delay: 1.1s`" x-text="activeIndex !== null ? navItems[activeIndex].bestTime : ''"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-12 pt-8 border-t border-[#e2e8e6] text-center">
                        <p class="text-[#5a7c74] mb-6">Want to learn more about the ecological wonders of Indonesia?</p>
                        <a href="{{ route('deeper') }}" class="px-6 py-3 bg-gradient-to-r from-[#7c9a92] to-[#5a7c74] text-white rounded-xl font-medium hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fas fa-book-open mr-2"></i> Explore Deeper
                        </a>
                    </div>
                </div>
            </div>
            
            <div x-show="activeIndex === null" class="text-center py-16 md:py-24 px-4">
                <div class="max-w-2xl mx-auto">
                    <div class="floating-element inline-flex items-center justify-center w-24 h-24 rounded-full nature-bg mb-8">
                        <i class="fas fa-leaf text-4xl text-green-800"></i>
                    </div>
                    <h3 class="heading-font text-3xl md:text-4xl text-slate-800 mb-6">Select a Category to Explore</h3>
                    <p class="text-xl text-gray-700 mb-8">Click on one of the navigations above to start exploring the ecological wonders of Indonesia</p>
                </div>
            </div>
        </main>
    </div>

    <script>
        function ecologicalMarvels() {
            return {
                activeIndex: null,
                navItems: [
                    {
                        title: "Tropical Rainforest of Kalimantan",
                        subtitle: "The lungs of the world, full of life and biodiversity",
                        province: "West, Central & East Kalimantan",
                        icon: "fas fa-tree",
                        image: "https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80",
                        content: [
                            "The tropical rainforest of Kalimantan is one of the oldest and most diverse ecosystems in the world, with an estimated age of 130 million years. This forest is home to more than 15,000 plant species, 3,000 tree species, and 221 mammal species.",
                            "The Kalimantan rainforest plays a crucial role as a global carbon sink and climate regulator. This forest is also the habitat for iconic Indonesian species such as orangutans, proboscis monkeys, and clouded leopards.",
                            "Unfortunately, the Kalimantan rainforest faces serious threats from deforestation for palm oil plantations, mining, and forest fires. More than 30% of Kalimantan's forest has been lost in the last 40 years."
                        ],
                        features: [
                            "Home to 15,000+ plant species",
                            "Habitat of orangutans and proboscis monkeys",
                            "Forest age reaches 130 million years",
                            "A vital carbon sink"
                        ],
                        threats: [
                            "Deforestation for palm oil plantations",
                            "Coal and gold mining",
                            "Seasonal forest fires",
                            "Poaching of rare wildlife"
                        ],
                        stats: [
                            { value: "30%", label: "Forest Lost" },
                            { value: "15k", label: "Plant Species" },
                            { value: "221", label: "Mammal Species" },
                            { value: "130M", label: "Years Old" }
                        ],
                        locations: [
                            "Betung Kerihun National Park",
                            "Danau Sentarum National Park",
                            "Kayan Mentarang National Park",
                            "Wain River Protected Forest"
                        ],
                        bestTime: "April-October (dry season)",
                        gallery: [
                            "{{ asset('image/hutankalimantan.jpg') }}",
                            "{{ asset('image/hutankalimantan2.jpg') }}",
                            "{{ asset('image/hutankalimantan3.jpeg') }}",
                        ]
                    },
                    {
                        title: "Raja Ampat Coral Reef",
                        subtitle: "The center of the world's highest marine biodiversity",
                        province: "West Papua",
                        icon: "fas fa-water",
                        image: "{{ asset('image/rajaampat.jpg') }}",
                        content: [
                            "The Raja Ampat Islands in West Papua are known as the 'capital of global marine biodiversity', with more than 1,500 fish species and 550 hard coral species. This region contains 75% of all known coral species in the world.",
                            "The coral reefs of Raja Ampat have a very complex system with various habitat types including atolls, coral cays, and barrier reefs. The clear water conditions and strong currents create an ideal environment for coral growth.",
                            "This area is also an important place for various rare species such as walking sharks, manta rays, and turtles. Raja Ampat is one of the best diving destinations in the world, protected through marine conservation areas."
                        ],
                        features: [
                            "75% of the world's coral species",
                            "1,500+ fish species",
                            "World's best diving location",
                            "Habitat for walking sharks & manta rays"
                        ],
                        threats: [
                            "Climate change and coral bleaching",
                            "Destructive fishing practices",
                            "Pollution from tourism",
                            "Marine protected areas enforcement"
                        ],
                        stats: [
                            { value: "75%", label: "Coral Species" },
                            { value: "1.5k", label: "Fish Species" },
                            { value: "550", label: "Hard Corals" },
                            { value: "4.5M", label: "Hectares Area" }
                        ],
                        locations: [
                            "Misool Island",
                            "Waigeo Island",
                            "Batanta Island",
                            "Salawati Island"
                        ],
                        bestTime: "October-April (calm season)",
                        gallery: [
                            "{{ asset('image/rajaampat2.jpg') }}",
                            "{{ asset('image/rajaampat3.jpg') }}",
                            "{{ asset('image/rajaampat4.jpg') }}"
                        ]
                    },
                    {
                        title: "Wakatobi Seagrass Beds",
                        subtitle: "Indonesia's largest blue carbon ecosystem",
                        province: "Southeast Sulawesi",
                        icon: "fas fa-seedling",
                        image: "{{ asset('image/wakatobi.jpg') }}",
                        content: [
                            "Wakatobi National Park has the largest seagrass ecosystem in Indonesia, with an area of up to 9,000 hectares. These seagrass beds are an important habitat for dugongs, turtles, and various fish species.",
                            "The Wakatobi seagrass ecosystem has the ability to store carbon 35 times faster than tropical rainforests. In addition, seagrass beds play an important role in stabilizing seabed sediments and maintaining water clarity.",
                            "The Wakatobi seagrass beds consist of 12 species out of a total of 13 species in Indonesia. The existence of this ecosystem is very vital for local communities as a source of fisheries and sustainable tourism."
                        ],
                        features: [
                            "9,000 hectares of seagrass beds",
                            "Habitat for rare dugongs",
                            "12 out of 13 Indonesian seagrass species",
                            "Carbon storage 35x faster"
                        ],
                        threats: [
                            "Destructive fishing activities",
                            "Pollution from coastal settlements",
                            "Declining seawater quality",
                            "Climate change threats"
                        ],
                        stats: [
                            { value: "9k", label: "Hectares Area" },
                            { value: "12", label: "Seagrass Species" },
                            { value: "35x", label: "Carbon Storage" },
                            { value: "1.39M", label: "Hectares Park" }
                        ],
                        locations: [
                            "Wangi-wangi Island",
                            "Kaledupa Island",
                            "Tomia Island",
                            "Binongko Island"
                        ],
                        bestTime: "April-November (calm season)",
                        gallery: [
                            "{{ asset('image/wakatobi2.jpeg') }}",
                            "{{ asset('image/wakatobi3.jpeg') }}",
                            "{{ asset('image/wakatobi4.jpg') }}"
                        ]
                    },
                    {
                        title: "Lake Toba",
                        subtitle: "The largest volcanic lake in the world and a Batak cultural heartland",
                        province: "North Sumatra",
                        icon: "fas fa-water",
                        image: "{{ asset('image/toba.jpg') }}",
                        content: [
                            "Lake Toba is the largest volcanic lake in the world, formed by a massive supervolcanic eruption about 74,000 years ago. It stretches about 100 kilometers long and 30 kilometers wide, surrounded by steep cliffs and lush forests.",
                            "In the middle of the lake lies Samosir Island, home to the Batak Toba people. The region is rich in traditional culture, architecture, and music that attract visitors from around the world.",
                            "Today, Lake Toba serves as both a natural wonder and a cultural icon, symbolizing Indonesia's geological history and heritage diversity."
                        ],
                        features: [
                            "World’s largest volcanic lake",
                            "Samosir Island at the center",
                            "Rich Batak culture and heritage",
                            "Panoramic mountain views"
                        ],
                        threats: [
                            "Deforestation around the lake",
                            "Waste and water pollution",
                            "Uncontrolled tourism development",
                            "Loss of local traditions"
                        ],
                        stats: [
                            { value: "100 km", label: "Lake Length" },
                            { value: "30 km", label: "Lake Width" },
                            { value: "74k", label: "Years Since Eruption" },
                            { value: "900m", label: "Elevation Above Sea" }
                        ],
                        locations: [
                            "Parapat",
                            "Samosir Island",
                            "Balige",
                            "Tuk-Tuk Siadong"
                        ],
                        bestTime: "May–September (dry season)",
                        gallery: [
                            "{{ asset('image/toba2.webp') }}",
                            "{{ asset('image/toba3.jpg') }}",
                            "{{ asset('image/toba4.jpg') }}",
                        ]
                    },
                    {
                        title: "Labuan Bajo",
                        subtitle: "Gateway to Komodo National Park and one of Indonesia’s top diving paradises",
                        province: "East Nusa Tenggara",
                        icon: "fas fa-ship",
                        image: "{{ asset('image/labuanbajo.jpg') }}",
                        content: [
                            "Labuan Bajo is a picturesque fishing town on Flores Island and the main gateway to Komodo National Park, home to the legendary Komodo dragons. The area is famous for its stunning islands, turquoise waters, and rich marine biodiversity.",
                            "Visitors can enjoy diving and snorkeling at world-class sites like Pink Beach and Manta Point, or hike up Padar Island to witness one of Indonesia’s most iconic panoramic views.",
                            "As a super-priority tourism destination, Labuan Bajo continues to develop sustainably, balancing ecological preservation with modern travel experiences."
                        ],
                        features: [
                            "Home of Komodo dragons",
                            "Pink Beach and Padar Island",
                            "World-class diving and snorkeling",
                            "Sunset views over Flores Sea"
                        ],
                        threats: [
                            "Coral reef damage from boats",
                            "Plastic waste from tourism",
                            "Overdevelopment pressure",
                            "Habitat disturbance to Komodo dragons"
                        ],
                        stats: [
                            { value: "29", label: "Islands in Komodo Park" },
                            { value: "35m", label: "Reef Depth for Diving" },
                            { value: "3k+", label: "Komodo Dragons" },
                            { value: "1", label: "UNESCO Heritage Site" }
                        ],
                        locations: [
                            "Komodo Island",
                            "Padar Island",
                            "Pink Beach",
                            "Manta Point"
                        ],
                        bestTime: "April–November (dry season)",
                        gallery: [
                            "{{ asset('image/labuanbajo2.jpeg') }}",
                            "{{ asset('image/labuanbajo3.webp') }}",
                            "{{ asset('image/labuanbajo4.webp') }}",
                        ]
                    }
                ],
                setActiveItem(index) {
                    this.activeIndex = this.activeIndex === index ? null : index;
                    
                    // Reset animations
                    if (this.activeIndex !== null) {
                        setTimeout(() => {
                            const staggerItems = document.querySelectorAll('.stagger-item');
                            staggerItems.forEach(item => {
                                item.style.animation = 'fadeIn 0.6s ease-out forwards';
                            });
                        }, 100);
                    }
                }
            }
        }
    </script>

    <style>
        .heading-font {
            font-family: 'Crimson Pro', serif;
        }
        .content-transition {
            transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .nav-item {
            transition: all 0.4s ease;
            position: relative;
        }
        .nav-item::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background: linear-gradient(90deg, #7c9a92, #5a7c74);
            transition: all 0.4s ease;
            transform: translateX(-50%);
        }
        .nav-item:hover::after, .active-nav::after {
            width: 80%;
        }
        .active-nav {
            color: #3a5a53;
            font-weight: 500;
        }
        .floating-element {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-12px); }
            100% { transform: translateY(0px); }
        }
        .fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .gradient-text {
            background: linear-gradient(135deg, #09f550 0%, #5a7c74 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .nature-bg {
            background: linear-gradient(135deg, rgba(122, 161, 149, 0.7) 0%, rgba(90, 124, 116, 0.1) 100%);
        }
        .eco-card {
            transition: all 0.4s ease;
            transform-style: preserve-3d;
        }
        .eco-card:hover {
            transform: translateY(-8px) rotateX(5deg);
            box-shadow: 0 20px 30px rgba(58, 90, 83, 0.15);
        }
        .stagger-item {
            opacity: 0;
            transform: translateY(20px);
        }
        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .image-overlay {
            background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.5));
        }
        .indonesia-flag {
            background: linear-gradient(135deg, #e70011 0%, #e70011 50%, #ffffff 50%, #ffffff 100%);
        }
    </style>
</div>