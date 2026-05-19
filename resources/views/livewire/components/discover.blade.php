<x-app-layout>
    
    <section
        class="relative overflow-hidden bg-gradient-to-br from-blue-900 via-blue-800 to-cyan-900"
    >
        <div class="absolute inset-0 opacity-10">
            <div
                class="absolute left-10 top-10 h-40 w-40 animate-pulse rounded-full bg-white opacity-20 mix-blend-overlay blur-xl filter sm:h-56 sm:w-56 lg:h-72 lg:w-72"
            ></div>
            <div
                class="absolute right-10 top-10 h-40 w-40 animate-pulse rounded-full bg-white opacity-20 mix-blend-overlay blur-xl filter sm:h-56 sm:w-56 lg:h-72 lg:w-72"
                style="animation-delay: 1s"
            ></div>
            <div
                class="absolute bottom-10 left-1/2 h-40 w-40 animate-pulse rounded-full bg-white opacity-20 mix-blend-overlay blur-xl filter sm:h-56 sm:w-56 lg:h-72 lg:w-72"
                style="animation-delay: 2s"
            ></div>
        </div>

        <div
            class="container relative z-10 mx-auto px-4 py-16 sm:px-6 sm:py-24 lg:py-32"
        >
            <div class="mx-auto max-w-4xl text-center">
                <div
                    class="mb-6 inline-flex items-center rounded-full border border-blue-700/50 bg-blue-800/50 px-4 py-2 text-sm font-semibold text-blue-100 backdrop-blur-sm"
                >
                    <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    Exploration & Discovery Initiative
                </div>

                <h1
                    class="mb-6 text-4xl font-bold leading-tight text-white sm:text-5xl md:text-6xl"
                >
                    Discover Our Planet's
                    <span
                        class="bg-gradient-to-r from-blue-300 to-cyan-300 bg-clip-text text-transparent"
                        >Biodiversity</span
                    >
                </h1>

                <p class="mx-auto mb-8 max-w-3xl text-lg leading-relaxed text-blue-100 sm:text-xl md:text-2xl">Join our exploration missions to document, research, and understand the incredible diversity of life on Earth through cutting-edge technology and citizen science.</p>

                <div
                    class="mb-12 flex flex-col justify-center gap-4 sm:flex-row"
                >
                    <a
                        href="#exploration-areas"
                        class="flex transform items-center justify-center rounded-lg bg-white px-6 py-3 font-semibold text-blue-700 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:bg-blue-50 hover:shadow-xl"
                    >
                        <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        Explore Biodiversity
                    </a>
                    <a
                        href="{{ route('register') }}"
                        class="flex items-center justify-center rounded-lg border-2 border-white bg-transparent px-6 py-3 font-semibold text-white backdrop-blur-sm transition-all duration-300 hover:bg-white/10"
                    >
                        <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Join Discovery Missions
                    </a>
                </div>

                
                <div
                    class="mx-auto grid max-w-2xl grid-cols-2 gap-4 md:grid-cols-4"
                >
                    <div
                        class="rounded-xl border border-white/20 bg-white/10 p-4 backdrop-blur-sm"
                    >
                        <div class="text-2xl font-bold text-white">5,200+</div>
                        <div class="text-sm text-blue-200">
                            Species Documented
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-white/20 bg-white/10 p-4 backdrop-blur-sm"
                    >
                        <div class="text-2xl font-bold text-white">45</div>
                        <div class="text-sm text-blue-200">
                            New Species Found
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-white/20 bg-white/10 p-4 backdrop-blur-sm"
                    >
                        <div class="text-2xl font-bold text-white">120+</div>
                        <div class="text-sm text-blue-200">
                            Research Expeditions
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-white/20 bg-white/10 p-4 backdrop-blur-sm"
                    >
                        <div class="text-2xl font-bold text-white">3,500+</div>
                        <div class="text-sm text-blue-200">
                            Citizen Scientists
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 transform">
            <div class="animate-bounce">
                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </section>

    
    <section class="bg-white py-16 sm:py-24">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="mx-auto max-w-4xl">
                <div
                    class="rounded-2xl border border-blue-100 bg-gradient-to-br from-blue-50 to-cyan-50 p-8 shadow-lg"
                >
                    <div class="flex flex-col items-start gap-8 md:flex-row">
                        <div class="md:w-2/3">
                            <div class="mb-4 flex items-center">
                                <div
                                    class="mr-4 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100"
                                >
                                    <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900">
                                    Discover Biodiversity
                                </h3>
                            </div>

                            <p class="mb-6 text-lg text-gray-700">Our <span class="font-semibold text-blue-700">Discover</span> program enables researchers, citizen scientists, and nature enthusiasts to explore and document the rich biodiversity of our planet through advanced tools and collaborative platforms.</p>

                            <div class="mb-8 space-y-4">
                                <div class="flex items-start">
                                    <svg class="mr-3 mt-0.5 h-5 w-5 flex-shrink-0 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <p class="text-gray-700">
                                        <span class="font-semibold"
                                            >Species Documentation:</span
                                        >
                                        Catalog and track flora and fauna using
                                        our mobile app and database
                                    </p>
                                </div>
                                <div class="flex items-start">
                                    <svg class="mr-3 mt-0.5 h-5 w-5 flex-shrink-0 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <p class="text-gray-700">
                                        <span class="font-semibold"
                                            >Ecosystem Mapping:</span
                                        >
                                        Create detailed maps of habitats,
                                        migration patterns, and ecological
                                        corridors
                                    </p>
                                </div>
                                <div class="flex items-start">
                                    <svg class="mr-3 mt-0.5 h-5 w-5 flex-shrink-0 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <p class="text-gray-700">
                                        <span class="font-semibold"
                                            >Research Collaboration:</span
                                        >
                                        Connect with scientists and institutions
                                        worldwide to share findings
                                    </p>
                                </div>
                            </div>

                            <div
                                class="rounded-xl border border-blue-200 bg-white p-4"
                            >
                                <h4 class="mb-2 font-bold text-blue-800">
                                    Discovery Highlights
                                </h4>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="text-center">
                                        <div
                                            class="text-2xl font-bold text-blue-700"
                                        >
                                            5,200+
                                        </div>
                                        <div class="text-sm text-gray-600">
                                            Species Documented
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="text-2xl font-bold text-blue-700"
                                        >
                                            45
                                        </div>
                                        <div class="text-sm text-gray-600">
                                            New Species Found
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="md:w-1/3">
                            <div
                                class="rounded-xl border border-blue-100 bg-white p-6 shadow-md"
                            >
                                <h4 class="mb-4 font-bold text-gray-900">
                                    Explore Opportunities
                                </h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <svg class="mr-2 mt-0.5 h-5 w-5 flex-shrink-0 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        <span class="text-gray-700"
                                            >Join biodiversity surveys</span
                                        >
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="mr-2 mt-0.5 h-5 w-5 flex-shrink-0 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        <span class="text-gray-700"
                                            >Contribute to research
                                            projects</span
                                        >
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="mr-2 mt-0.5 h-5 w-5 flex-shrink-0 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        <span class="text-gray-700"
                                            >Access our species database</span
                                        >
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="mr-2 mt-0.5 h-5 w-5 flex-shrink-0 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        <span class="text-gray-700"
                                            >Participate in discovery
                                            expeditions</span
                                        >
                                    </li>
                                </ul>

                                <a
                                    href="{{ route('register') }}"
                                    class="mt-6 flex w-full items-center justify-center rounded-lg bg-blue-600 px-4 py-2 font-medium text-white transition-colors duration-300 hover:bg-blue-700"
                                >
                                    Start Discovering
                                    <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section
        id="exploration-areas"
        class="bg-gradient-to-b from-gray-50 to-white py-16 sm:py-24"
    >
        <div class="container mx-auto px-4 sm:px-6">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-3xl font-bold text-gray-900 sm:text-4xl">
                    Exploration Areas
                </h2>
                <p class="mx-auto max-w-2xl text-lg text-gray-600">Discover the diverse ecosystems and habitats we're actively researching and documenting</p>
            </div>

            <div
                class="mx-auto grid max-w-6xl gap-8 md:grid-cols-2 lg:grid-cols-3"
            >
                
                <div
                    class="transform overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-xl"
                >
                    <div
                        class="relative h-48 overflow-hidden bg-gradient-to-br from-green-500 to-emerald-700"
                    >
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-xl font-bold">
                                Tropical Rainforests
                            </h3>
                            <p class="text-green-100">Biodiversity hotspots</p>
                        </div>
                        <div class="absolute right-4 top-4">
                            <span
                                class="inline-flex items-center rounded-full bg-white/20 px-3 py-1 text-sm text-white backdrop-blur-sm"
                            >
                                <svg class="mr-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                High Priority
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="mb-4 text-gray-600">Exploring the world's most biodiverse ecosystems, home to millions of species, many yet to be discovered and documented.</p>
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-500">
                                <span class="font-medium text-blue-600"
                                    >1,850+ species documented</span
                                >
                            </div>
                            <div
                                class="flex items-center font-medium text-blue-600"
                            >
                                <span>Explore</span>
                                <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div
                    class="transform overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-xl"
                >
                    <div
                        class="relative h-48 overflow-hidden bg-gradient-to-br from-blue-500 to-teal-600"
                    >
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-xl font-bold">Marine Ecosystems</h3>
                            <p class="text-blue-100">Ocean exploration</p>
                        </div>
                        <div class="absolute right-4 top-4">
                            <span
                                class="inline-flex items-center rounded-full bg-white/20 px-3 py-1 text-sm text-white backdrop-blur-sm"
                            >
                                <svg class="mr-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                Ongoing Research
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="mb-4 text-gray-600">Documenting coral reefs, deep-sea habitats, and marine biodiversity through advanced diving technology and remote sensing.</p>
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-500">
                                <span class="font-medium text-blue-600"
                                    >2,300+ species documented</span
                                >
                            </div>
                            <div
                                class="flex items-center font-medium text-blue-600"
                            >
                                <span>Explore</span>
                                <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div
                    class="transform overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-xl"
                >
                    <div
                        class="relative h-48 overflow-hidden bg-gradient-to-br from-gray-500 to-gray-700"
                    >
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-xl font-bold">Mountain Regions</h3>
                            <p class="text-gray-100">Alpine biodiversity</p>
                        </div>
                        <div class="absolute right-4 top-4">
                            <span
                                class="inline-flex items-center rounded-full bg-white/20 px-3 py-1 text-sm text-white backdrop-blur-sm"
                            >
                                <svg class="mr-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                New Frontiers
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="mb-4 text-gray-600">Researching high-altitude ecosystems and endemic species adapted to extreme conditions in mountain ranges worldwide.</p>
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-500">
                                <span class="font-medium text-blue-600"
                                    >850+ species documented</span
                                >
                            </div>
                            <div
                                class="flex items-center font-medium text-blue-600"
                            >
                                <span>Explore</span>
                                <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="bg-white py-16 sm:py-24">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-3xl font-bold text-gray-900 sm:text-4xl">
                    Our Discovery Methods
                </h2>
                <p class="mx-auto max-w-2xl text-lg text-gray-600">Combining traditional field research with cutting-edge technology for comprehensive biodiversity documentation</p>
            </div>

            <div class="mx-auto max-w-5xl">
                <div class="grid gap-8 md:grid-cols-2">
                    
                    <div
                        class="rounded-2xl border border-green-100 bg-gradient-to-br from-green-50 to-emerald-50 p-6"
                    >
                        <div class="mb-4 flex items-center">
                            <div
                                class="mr-4 flex h-12 w-12 items-center justify-center rounded-xl bg-green-100"
                            >
                                <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">
                                Field Research Expeditions
                            </h3>
                        </div>
                        <p class="mb-4 text-gray-700">Conducting hands-on fieldwork in remote locations to directly observe, document, and collect data on species and ecosystems.</p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="mr-2 mt-0.5 h-5 w-5 flex-shrink-0 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700"
                                    >Species identification and collection</span
                                >
                            </li>
                            <li class="flex items-start">
                                <svg class="mr-2 mt-0.5 h-5 w-5 flex-shrink-0 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700"
                                    >Habitat assessment and mapping</span
                                >
                            </li>
                            <li class="flex items-start">
                                <svg class="mr-2 mt-0.5 h-5 w-5 flex-shrink-0 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700"
                                    >Behavioral observation studies</span
                                >
                            </li>
                        </ul>
                    </div>

                    
                    <div
                        class="rounded-2xl border border-blue-100 bg-gradient-to-br from-blue-50 to-cyan-50 p-6"
                    >
                        <div class="mb-4 flex items-center">
                            <div
                                class="mr-4 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100"
                            >
                                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">
                                Technology & Innovation
                            </h3>
                        </div>
                        <p class="mb-4 text-gray-700">Utilizing advanced technologies to enhance discovery capabilities and reach previously inaccessible areas for research.</p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="mr-2 mt-0.5 h-5 w-5 flex-shrink-0 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700"
                                    >DNA barcoding and genetic analysis</span
                                >
                            </li>
                            <li class="flex items-start">
                                <svg class="mr-2 mt-0.5 h-5 w-5 flex-shrink-0 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700"
                                    >Remote sensing and drones</span
                                >
                            </li>
                            <li class="flex items-start">
                                <svg class="mr-2 mt-0.5 h-5 w-5 flex-shrink-0 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700"
                                    >Camera traps and acoustic monitoring</span
                                >
                            </li>
                        </ul>
                    </div>

                    
                    <div
                        class="rounded-2xl border border-purple-100 bg-gradient-to-br from-purple-50 to-indigo-50 p-6"
                    >
                        <div class="mb-4 flex items-center">
                            <div
                                class="mr-4 flex h-12 w-12 items-center justify-center rounded-xl bg-purple-100"
                            >
                                <svg class="h-6 w-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">
                                Citizen Science Programs
                            </h3>
                        </div>
                        <p class="mb-4 text-gray-700">Engaging the public in scientific discovery through community-based monitoring, data collection, and species documentation.</p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="mr-2 mt-0.5 h-5 w-5 flex-shrink-0 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700"
                                    >Community biodiversity monitoring</span
                                >
                            </li>
                            <li class="flex items-start">
                                <svg class="mr-2 mt-0.5 h-5 w-5 flex-shrink-0 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700"
                                    >Mobile app data collection</span
                                >
                            </li>
                            <li class="flex items-start">
                                <svg class="mr-2 mt-0.5 h-5 w-5 flex-shrink-0 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700"
                                    >Public participation in research</span
                                >
                            </li>
                        </ul>
                    </div>

                    
                    <div
                        class="rounded-2xl border border-amber-100 bg-gradient-to-br from-amber-50 to-orange-50 p-6"
                    >
                        <div class="mb-4 flex items-center">
                            <div
                                class="mr-4 flex h-12 w-12 items-center justify-center rounded-xl bg-amber-100"
                            >
                                <svg class="h-6 w-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">
                                Data Analysis & Modeling
                            </h3>
                        </div>
                        <p class="mb-4 text-gray-700">Applying statistical analysis, machine learning, and ecological modeling to understand patterns and predict biodiversity changes.</p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex items-start">
                                <svg class="mr-2 mt-0.5 h-5 w-5 flex-shrink-0 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700"
                                    >Species distribution modeling</span
                                >
                            </li>
                            <li class="flex items-start">
                                <svg class="mr-2 mt-0.5 h-5 w-5 flex-shrink-0 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700"
                                    >Population trend analysis</span
                                >
                            </li>
                            <li class="flex items-start">
                                <svg class="mr-2 mt-0.5 h-5 w-5 flex-shrink-0 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700"
                                    >Ecological forecasting</span
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="bg-gradient-to-b from-gray-50 to-white py-16 sm:py-24">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-3xl font-bold text-gray-900 sm:text-4xl">
                    Interactive Discovery Map
                </h2>
                <p class="mx-auto max-w-2xl text-lg text-gray-600">Explore our global research sites and recent discoveries through our interactive mapping platform</p>
            </div>

            <div class="mx-auto max-w-6xl">
                <div
                    class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-lg"
                >
                    <div
                        class="relative flex h-96 items-center justify-center bg-gradient-to-br from-blue-100 to-cyan-100"
                    >
                        
                        <div class="absolute inset-0 opacity-30">
                            <div
                                class="absolute left-1/4 top-1/4 h-32 w-32 rounded-full bg-green-500 opacity-20"
                            ></div>
                            <div
                                class="absolute right-1/3 top-1/3 h-24 w-24 rounded-full bg-blue-500 opacity-20"
                            ></div>
                            <div
                                class="absolute bottom-1/4 left-1/3 h-28 w-28 rounded-full bg-emerald-500 opacity-20"
                            ></div>
                            <div
                                class="absolute bottom-1/3 right-1/4 h-20 w-20 rounded-full bg-teal-500 opacity-20"
                            ></div>
                        </div>

                        
                        <div class="relative z-10 p-8 text-center">
                            <div
                                class="mb-6 inline-flex items-center rounded-lg bg-white/80 px-4 py-2 shadow-md backdrop-blur-sm"
                            >
                                <svg class="mr-2 h-5 w-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                                </svg>
                                <span class="font-semibold text-gray-700"
                                    >Global Discovery Network</span
                                >
                            </div>

                            <h3 class="mb-4 text-2xl font-bold text-gray-800">
                                Explore Our Research Sites
                            </h3>
                            <p class="mx-auto mb-6 max-w-md text-gray-600">Access our interactive map to discover research locations, documented species, and ongoing exploration projects around the world.</p>

                            <div
                                class="flex flex-col justify-center gap-4 sm:flex-row"
                            >
                                <button
                                    class="flex items-center justify-center rounded-lg bg-blue-600 px-6 py-3 font-medium text-white transition-colors duration-300 hover:bg-blue-700"
                                >
                                    <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                    Open Interactive Map
                                </button>
                                <button
                                    class="flex items-center justify-center rounded-lg border border-blue-200 bg-white px-6 py-3 font-medium text-blue-600 transition-colors duration-300 hover:bg-gray-50"
                                >
                                    <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                                    </svg>
                                    Download Data
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 bg-gray-50 p-6">
                        <div
                            class="grid grid-cols-2 gap-4 text-center md:grid-cols-4"
                        >
                            <div>
                                <div class="text-xl font-bold text-blue-600">
                                    42
                                </div>
                                <div class="text-sm text-gray-600">
                                    Active Research Sites
                                </div>
                            </div>
                            <div>
                                <div class="text-xl font-bold text-green-600">
                                    18
                                </div>
                                <div class="text-sm text-gray-600">
                                    Countries
                                </div>
                            </div>
                            <div>
                                <div class="text-xl font-bold text-purple-600">
                                    127
                                </div>
                                <div class="text-sm text-gray-600">
                                    Ongoing Projects
                                </div>
                            </div>
                            <div>
                                <div class="text-xl font-bold text-amber-600">
                                    3.2M+
                                </div>
                                <div class="text-sm text-gray-600">
                                    Data Points
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="bg-white py-16 sm:py-24">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-3xl font-bold text-gray-900 sm:text-4xl">
                    Recent Discoveries
                </h2>
                <p class="mx-auto max-w-2xl text-lg text-gray-600">Explore our latest findings and newly documented species from recent research expeditions</p>
            </div>

            <div class="mx-auto max-w-5xl">
                <div class="grid gap-8 md:grid-cols-2">
                    
                    <div
                        class="rounded-2xl border border-gray-100 bg-white p-6 shadow-lg"
                    >
                        <div class="mb-4 flex items-center">
                            <div
                                class="mr-4 flex h-16 w-16 items-center justify-center rounded-full bg-blue-100"
                            >
                                <svg class="h-8 w-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">
                                    Amazon Canopy Research
                                </h3>
                                <p class="text-gray-600">Brazil, 2023</p>
                            </div>
                        </div>
                        <p class="mb-4 text-gray-700">Our canopy access team discovered 12 potentially new insect species and documented previously unknown pollination relationships between canopy flowers and specialized pollinators.</p>
                        <div class="flex justify-between text-sm text-gray-500">
                            <span>Expedition: 45 days</span>
                            <span>12 new species</span>
                        </div>
                    </div>

                    
                    <div
                        class="rounded-2xl border border-gray-100 bg-white p-6 shadow-lg"
                    >
                        <div class="mb-4 flex items-center">
                            <div
                                class="mr-4 flex h-16 w-16 items-center justify-center rounded-full bg-green-100"
                            >
                                <svg class="h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">
                                    Deep Sea Exploration
                                </h3>
                                <p class="text-gray-600">Pacific Ocean, 2023</p>
                            </div>
                        </div>
                        <p class="mb-4 text-gray-700">Using advanced ROV technology, we documented 8 new deep-sea species and observed unique behavioral adaptations to extreme pressure and darkness at 3,000m depth.</p>
                        <div class="flex justify-between text-sm text-gray-500">
                            <span>Expedition: 28 days</span>
                            <span>8 new species</span>
                        </div>
                    </div>
                </div>

                <div class="mt-12 text-center">
                    <a
                        href="#"
                        class="inline-flex items-center font-semibold text-blue-600 transition-colors hover:text-blue-700"
                    >
                        View All Discoveries
                        <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    
    <section
        class="bg-gradient-to-r from-blue-600 to-cyan-600 py-16 text-white sm:py-24"
    >
        <div class="container mx-auto px-4 text-center sm:px-6">
            <h2 class="mb-6 text-3xl font-bold sm:text-4xl">
                Ready to Explore and Discover?
            </h2>
            <p class="mx-auto mb-8 max-w-2xl text-xl opacity-90">Join our discovery community and contribute to documenting Earth's incredible biodiversity through research and exploration.</p>
            <div class="flex flex-col justify-center gap-4 sm:flex-row">
                <a
                    href="#exploration-areas"
                    class="flex items-center justify-center rounded-lg border-2 border-white bg-transparent px-8 py-3 font-semibold text-white transition-colors duration-300 hover:bg-white/10"
                >
                    <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Explore Research Areas
                </a>
                @if (Auth::check())
                    <a
                        href="{{ route('register') }}"
                        class="flex items-center justify-center rounded-lg bg-white px-8 py-3 font-semibold text-blue-700 shadow-lg transition-colors duration-300 hover:bg-blue-50"
                    >
                        <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Join Discovery Missions
                    </a>
                @endif
            </div>
        </div>
    </section>

    @push ('scripts')
        <script>
            // Add scroll-triggered animations for stats
            document.addEventListener('DOMContentLoaded', function () {
                // Initialize AOS if available
                if (typeof AOS !== 'undefined') {
                    AOS.init({
                        duration: 800,
                        once: true,
                        offset: 100,
                    });
                }

                // Add intersection observer for stats animation
                const statsSection = document.querySelector(
                    '.relative.bg-gradient-to-br',
                );
                if (statsSection && 'IntersectionObserver' in window) {
                    const observer = new IntersectionObserver(
                        (entries) => {
                            entries.forEach((entry) => {
                                if (entry.isIntersecting) {
                                    // Animate stats counters
                                    const stats =
                                        document.querySelectorAll(
                                            '.stats-counter',
                                        );
                                    stats.forEach((stat) => {
                                        const target = parseInt(
                                            stat.getAttribute('data-target'),
                                        );
                                        animateCounter(stat, 0, target, 2000);
                                    });
                                    observer.unobserve(entry.target);
                                }
                            });
                        },
                        { threshold: 0.5 },
                    );

                    observer.observe(statsSection);
                }

                // Counter animation function
                function animateCounter(element, start, end, duration) {
                    let startTimestamp = null;
                    const step = (timestamp) => {
                        if (!startTimestamp) startTimestamp = timestamp;
                        const progress = Math.min(
                            (timestamp - startTimestamp) / duration,
                            1,
                        );
                        element.textContent = Math.floor(
                            progress * (end - start) + start,
                        );
                        if (progress < 1) {
                            window.requestAnimationFrame(step);
                        }
                    };
                    window.requestAnimationFrame(step);
                }
            });
        </script>
    @endpush
</x-app-layout>
