<x-app-layout>
    <div
        class="relative min-h-screen overflow-x-hidden bg-slate-950"
        x-data="resourcesApp()"
        x-init="init()"
    >
        <!-- Background pattern -->
        <div class="pointer-events-none fixed inset-0 z-0 opacity-20">
            <div
                class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgdmlld0JveD0iMCAwIDgwIDgwIj48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjAuNSIgc3Ryb2tlLW9wYWNpdHk9IjAuMDgiIGQ9Ik0wIDQwTDQwIDBNNDAgODBMODAgNDBNODAgNDBMMTAgNzAiLz48L3N2Zz4=')]"
            ></div>
            <div
                class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-slate-950 to-transparent"
            ></div>
        </div>

        <!-- Hero Section -->
        <section class="relative z-10 pb-16 pt-24 lg:pt-32">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid items-center gap-12 lg:grid-cols-2">
                    <div>
                        <div
                            class="scroll-reveal mb-6 inline-flex items-center gap-2 rounded-full border border-cyan-500/30 bg-cyan-500/10 px-3 py-1 font-mono text-xs tracking-wider text-cyan-400 backdrop-blur-sm"
                        >
                            <i class="fas fa-chart-line text-xs"></i> KNOWLEDGE
                            HUB
                        </div>
                        <h1
                            class="scroll-reveal text-4xl font-bold leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl xl:text-7xl"
                            style="transition-delay: 0.1s"
                        >
                            Explore Our
                            <span
                                class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent"
                                >Resources</span
                            >
                        </h1>
                        <p class="scroll-reveal mt-6 text-lg leading-relaxed text-gray-300" style="
                                transition-delay: 0.2s;
                            ">Dive into a curated collection of industry insights, technical docs, and actionable guides. Whether you’re a plant manager, engineer, or developer, you'll find practical knowledge to help you excel.</p>
                        <div
                            class="scroll-reveal mt-8 flex flex-wrap gap-4"
                            style="transition-delay: 0.3s"
                        >
                            <a
                                href="#featured"
                                class="transform rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 px-6 py-3 font-semibold text-white shadow-lg shadow-cyan-500/30 transition hover:-translate-y-1 hover:shadow-cyan-500/50"
                            >
                                Browse Resources
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <a
                                href="#demo"
                                class="rounded-lg border border-gray-500 px-6 py-3 font-semibold text-gray-300 backdrop-blur-sm transition hover:bg-white/10"
                            >
                                Try Live Demo
                            </a>
                        </div>
                    </div>
                    <div
                        class="scroll-reveal relative flex justify-center"
                        style="transition-delay: 0.2s"
                    >
                        <div
                            class="group relative flex h-64 w-64 items-center justify-center rounded-full border border-cyan-500/30 bg-gradient-to-r from-cyan-500/10 to-blue-600/10 p-4 transition-all duration-500 hover:scale-105 hover:shadow-2xl"
                        >
                            <div
                                class="absolute -inset-2 rounded-full bg-cyan-500/20 blur-xl transition-all duration-500 group-hover:bg-cyan-500/40"
                            ></div>
                            <i
                                class="fas fa-lightbulb relative z-10 animate-pulse text-8xl text-cyan-400 drop-shadow-lg"
                            ></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Filter, Search, Sort & Result Count -->
        <section class="relative z-10 py-8">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col gap-6">
                    <div
                        class="scroll-reveal flex flex-col items-center justify-between gap-6 md:flex-row"
                    >
                        <div class="flex flex-wrap gap-2">
                            <template x-for="cat in categories" :key="cat">
                                <button
                                    @click="
                                        activeCategory = cat;
                                        currentPage = 1;
                                        refreshAnimations();
                                    "
                                    :class="activeCategory === cat
                                        ? 'bg-cyan-500 text-white'
                                        : 'bg-slate-800/50 text-gray-300 hover:bg-slate-700/50'"
                                    class="rounded-full px-4 py-2 text-sm font-medium transition-all duration-300"
                                    x-text="
                                        cat === 'all'
                                            ? 'All'
                                            : cat.charAt(0).toUpperCase() +
                                              cat.slice(1)
                                    "
                                ></button>
                            </template>
                        </div>
                        <div class="flex items-center gap-4">
                            <select
                                x-model="sortBy"
                                @change="
                                    currentPage = 1;
                                    refreshAnimations();
                                "
                                class="rounded-full border border-slate-700 bg-slate-800/50 px-4 py-2 text-sm text-gray-300 focus:border-cyan-500 focus:outline-none"
                            >
                                <option value="newest">Newest</option>
                                <option value="a-z">Title A-Z</option>
                                <option value="z-a">Title Z-A</option>
                            </select>
                            <div class="relative w-full max-w-xs">
                                <i
                                    class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"
                                ></i>
                                <input
                                    type="text"
                                    x-model="searchQuery"
                                    @input="
                                        currentPage = 1;
                                        refreshAnimations();
                                    "
                                    placeholder="Search resources..."
                                    class="w-full rounded-full border border-slate-700 bg-slate-800/50 py-2 pl-10 pr-4 text-white placeholder-gray-400 backdrop-blur-sm focus:border-cyan-500 focus:outline-none focus:ring-1 focus:ring-cyan-500"
                                />
                            </div>
                        </div>
                    </div>
                    <div
                        class="scroll-reveal text-center text-sm text-gray-400"
                        x-show="filteredResources.length > 0"
                    >
                        Showing
                        <span
                            x-text="
                                (currentPage - 1) * perPage +
                                1 +
                                ' - ' +
                                Math.min(
                                    currentPage * perPage,
                                    filteredResources.length,
                                )
                            "
                        ></span>
                        of
                        <span x-text="filteredResources.length"></span>
                        resources
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Resource -->
        <section id="featured" class="relative z-10 py-12">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div
                    class="scroll-reveal relative overflow-hidden rounded-3xl bg-gradient-to-br from-cyan-500/20 to-blue-600/20 p-6 backdrop-blur-sm md:p-10"
                >
                    <div
                        class="relative grid items-center gap-8 md:grid-cols-2"
                    >
                        <div>
                            <div
                                class="mb-3 inline-flex items-center gap-2 rounded-full bg-cyan-500/20 px-3 py-1 font-mono text-xs font-semibold text-cyan-400"
                            >
                                ✨ FEATURED RESOURCE
                            </div>
                            <h2
                                class="text-3xl font-bold text-white md:text-4xl"
                            >
                                The Ultimate Industrial IoT Whitepaper
                            </h2>
                            <p class="mt-4 text-gray-300">Unlock the full potential of Industry 4.0. This comprehensive guide covers real-world case studies, implementation blueprints, and a roadmap to achieving measurable ROI.</p>
                            <div class="mt-6 flex flex-wrap gap-4">
                                <button
                                    @click="downloadFile('whitepaper.pdf')"
                                    class="inline-flex items-center gap-2 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 px-6 py-3 font-semibold text-white transition hover:shadow-lg"
                                >
                                    Download Now <i class="fas fa-download"></i>
                                </button>
                                <button
                                    @click="previewResource(featuredResource)"
                                    class="inline-flex items-center gap-2 rounded-lg border border-gray-500 px-6 py-3 font-semibold text-gray-300 transition hover:bg-white/10"
                                >
                                    Preview <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <div
                                class="flex h-40 w-40 items-center justify-center rounded-2xl border border-cyan-500/30 bg-slate-800/50 p-6 backdrop-blur-sm transition-all duration-300 hover:scale-105"
                            >
                                <i
                                    class="fas fa-file-alt animate-pulse text-6xl text-cyan-400"
                                ></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Resource Grid dengan Pagination -->
        <section class="relative z-10 py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="scroll-reveal mb-12 text-center">
                    <h2 class="text-3xl font-bold text-white lg:text-4xl">
                        All Resources
                    </h2>
                    <p class="mx-auto mt-2 max-w-2xl text-gray-400">Handpicked insights to accelerate your industrial journey.</p>
                </div>
                <div
                    class="grid gap-8 md:grid-cols-2 lg:grid-cols-3"
                    x-ref="gridContainer"
                >
                    <template
                        x-for="(resource, index) in paginatedResources"
                        :key="resource.id"
                    >
                        <div
                            x-data="{ revealed: false }"
                            x-init="revealed = true"
                            :class="revealed
                                ? 'opacity-100 translate-y-0 blur-0'
                                : 'opacity-0 translate-y-8 blur-sm'"
                            class="resource-card group overflow-hidden rounded-2xl border border-slate-700 bg-slate-800/30 p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-2 hover:border-cyan-500/50 hover:shadow-2xl"
                        >
                            <div class="mb-4 flex items-center justify-between">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-500/20 transition-all duration-300 group-hover:scale-110 group-hover:bg-cyan-500/30"
                                    x-html="resource.icon"
                                ></div>
                                <div class="flex items-center gap-2">
                                    <span
                                        x-show="resource.isNew"
                                        class="rounded-full bg-cyan-500/30 px-2 py-0.5 text-[10px] font-semibold text-cyan-300"
                                        >NEW</span
                                    >
                                    <span
                                        class="rounded-full bg-slate-700/50 px-3 py-1 text-xs font-medium text-gray-300"
                                        x-text="resource.category"
                                    ></span>
                                </div>
                            </div>
                            <h3
                                class="mb-2 text-xl font-bold text-white transition-colors duration-300 group-hover:text-cyan-400"
                                x-text="resource.title"
                            ></h3>
                            <p
                                class="mb-4 text-gray-400"
                                x-text="resource.description"
                            ></p>
                            <div
                                class="mt-auto flex items-center justify-between"
                            >
                                <span
                                    class="flex items-center gap-1 text-sm text-gray-500"
                                    ><i class="far fa-clock"></i>
                                    <span x-text="resource.duration"></span
                                ></span>
                                <div class="flex gap-2">
                                    <button
                                        @click="previewResource(resource)"
                                        class="flex items-center gap-1 text-sm font-medium text-cyan-400 transition-all duration-300 hover:gap-2 hover:text-cyan-300"
                                    >
                                        Preview
                                        <i class="fas fa-eye text-xs"></i>
                                    </button>
                                    <button
                                        @click="downloadFile(resource.fileName)"
                                        class="flex items-center gap-1 text-sm font-medium text-gray-400 transition-all duration-300 hover:text-cyan-300"
                                    >
                                        <i class="fas fa-download text-xs"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
                <!-- Pagination Controls -->
                <div
                    class="scroll-reveal mt-12 flex justify-center gap-2"
                    x-show="totalPages > 1"
                >
                    <button
                        @click="
                            currentPage = Math.max(1, currentPage - 1);
                            refreshAnimations();
                        "
                        :disabled="currentPage === 1"
                        :class="currentPage === 1
                            ? 'opacity-50 cursor-not-allowed'
                            : 'hover:bg-cyan-500/30'"
                        class="rounded-lg border border-slate-700 px-3 py-2 text-gray-300 transition"
                    >
                        Prev
                    </button>
                    <template x-for="p in totalPages" :key="p">
                        <button
                            @click="
                                currentPage = p;
                                refreshAnimations();
                            "
                            :class="currentPage === p
                                ? 'bg-cyan-500 text-white'
                                : 'hover:bg-cyan-500/20'"
                            class="rounded-lg border border-slate-700 px-3 py-2 text-gray-300 transition"
                            x-text="p"
                        ></button>
                    </template>
                    <button
                        @click="
                            currentPage = Math.min(totalPages, currentPage + 1);
                            refreshAnimations();
                        "
                        :disabled="currentPage === totalPages"
                        :class="currentPage === totalPages
                            ? 'opacity-50 cursor-not-allowed'
                            : 'hover:bg-cyan-500/30'"
                        class="rounded-lg border border-slate-700 px-3 py-2 text-gray-300 transition"
                    >
                        Next
                    </button>
                </div>
                <div
                    class="scroll-reveal mt-12 text-center"
                    x-show="filteredResources.length === 0"
                >
                    <p class="text-gray-400">No resources match your criteria. Try adjusting the filters.</p>
                </div>
            </div>
        </section>

        <!-- Live Demo -->
        <section
            id="demo"
            class="relative z-10 border-y border-slate-800 py-20"
        >
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="scroll-reveal mb-12 text-center">
                    <div
                        class="mb-4 inline-flex items-center gap-2 rounded-full border border-cyan-500/30 bg-cyan-500/10 px-3 py-1 font-mono text-xs tracking-wider text-cyan-400"
                    >
                        INTERACTIVE DEMO
                    </div>
                    <h2 class="mb-4 text-3xl font-bold text-white lg:text-4xl">
                        Try NovaForge AI Analyzer
                    </h2>
                    <p class="mx-auto max-w-2xl text-gray-400">See how our predictive AI works. Enter a vibration value (mm/s) and get an instant health prediction.</p>
                </div>
                <div
                    class="scroll-reveal mx-auto max-w-2xl rounded-2xl border border-slate-700 bg-slate-800/40 p-8 backdrop-blur-sm"
                >
                    <div
                        class="flex flex-col items-center justify-between gap-6 md:flex-row"
                    >
                        <div class="flex-1">
                            <label class="mb-2 block text-gray-300"
                                >Current Vibration (mm/s)</label
                            >
                            <input
                                type="number"
                                step="0.1"
                                x-model="demoVibration"
                                class="w-full rounded-xl border border-slate-700 bg-slate-900/50 px-4 py-3 text-white focus:ring-2 focus:ring-cyan-500"
                            />
                            <div class="mt-2 text-xs text-gray-500">
                                Normal: &lt;3.5 | Warning: 3.5-4.5 | Critical:
                                >4.5
                            </div>
                        </div>
                        <button
                            @click="runDemo"
                            class="rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 px-6 py-3 font-semibold text-white transition hover:shadow-lg"
                        >
                            Analyze Health
                        </button>
                    </div>
                    <div
                        x-show="demoResult"
                        x-transition
                        class="mt-6 rounded-xl p-4"
                        :class="demoResultClass"
                    >
                        <div class="flex items-center gap-3">
                            <i :class="demoResultIcon" class="text-2xl"></i>
                            <div>
                                <div
                                    class="font-bold"
                                    x-text="demoResultTitle"
                                ></div>
                                <div
                                    class="text-sm"
                                    x-text="demoResultMessage"
                                ></div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 text-center text-xs text-gray-500">
                        * This is a simulation based on vibration threshold.
                        Real AI uses multiple parameters.
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal Preview -->
        <div
            x-show="showModal"
            x-cloak
            class="fixed inset-0 z-50 flex items-center justify-center px-4 backdrop-blur-md"
            style="display: none"
        >
            <div
                class="absolute inset-0 bg-black/70"
                @click="showModal = false"
            ></div>
            <div
                class="relative w-full max-w-2xl transform rounded-2xl border border-slate-700 bg-slate-800 p-6 shadow-2xl transition-all"
            >
                <button
                    @click="showModal = false"
                    class="absolute right-4 top-4 text-gray-400 hover:text-white"
                >
                    <i class="fas fa-times"></i>
                </button>
                <div class="mb-4 flex items-center gap-4">
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-500/20"
                        x-html="previewResourceData?.icon || ''"
                    ></div>
                    <div>
                        <h3
                            class="text-xl font-bold text-white"
                            x-text="previewResourceData?.title"
                        ></h3>
                        <p
                            class="text-sm text-gray-400"
                            x-text="previewResourceData?.category"
                        ></p>
                    </div>
                </div>
                <div class="prose prose-invert max-w-none">
                    <p
                        class="text-gray-300"
                        x-text="
                            previewResourceData?.previewContent ||
                            'No preview content available.'
                        "
                    ></p>
                    <div class="mt-4 flex gap-2 text-sm text-gray-400">
                        <i class="fas fa-clock mr-1"></i>
                        <span x-text="previewResourceData?.duration"></span>
                        &nbsp;|&nbsp;
                        <i class="fas fa-file-alt mr-1"></i> Sample preview
                    </div>
                </div>
                <div class="mt-6 flex justify-end gap-3">
                    <button
                        @click="showModal = false"
                        class="rounded-lg border border-gray-600 px-4 py-2 text-gray-300 hover:bg-white/10"
                    >
                        Close
                    </button>
                    <button
                        @click="
                            downloadFile(previewResourceData?.fileName);
                            showModal = false;
                        "
                        class="rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 px-4 py-2 font-semibold text-white"
                    >
                        Download
                    </button>
                </div>
            </div>
        </div>

        <!-- Toast Notification -->
        <div
            x-show="toast.show"
            x-transition.duration.300ms
            class="fixed bottom-6 right-6 z-50 flex items-center gap-3 rounded-lg border border-cyan-500/50 bg-slate-800 px-4 py-3 shadow-2xl backdrop-blur-md"
        >
            <i :class="toast.icon" class="text-lg text-cyan-400"></i>
            <span class="text-sm text-white" x-text="toast.message"></span>
        </div>
    </div>

    <style>
        [x-cloak] {
            display: none !important;
        }
        /* Scroll reveal initial state for static elements */
        .scroll-reveal {
            opacity: 0;
            transform: translateY(30px);
            filter: blur(5px);
            transition:
                opacity 0.6s ease,
                transform 0.6s ease,
                filter 0.6s ease;
        }
        .scroll-reveal.animated {
            opacity: 1 !important;
            transform: translateY(0) !important;
            filter: blur(0) !important;
        }
        /* Resource card initial animation (handled by x-init, but fallback) */
        .resource-card {
            transition:
                opacity 0.5s ease,
                transform 0.5s ease,
                filter 0.5s ease;
        }
    </style>

    <!-- GSAP & ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <script>
        function resourcesApp() {
            return {
                categories: [
                    'all',
                    'whitepapers',
                    'case-studies',
                    'tech-docs',
                    'webinars',
                    'tools',
                ],
                activeCategory: 'all',
                searchQuery: '',
                sortBy: 'newest',
                currentPage: 1,
                perPage: 6,
                showModal: false,
                previewResourceData: null,
                demoVibration: 2.5,
                demoResult: false,
                demoResultTitle: '',
                demoResultMessage: '',
                demoResultClass: '',
                demoResultIcon: '',
                toast: { show: false, message: '', icon: '' },
                resources: [
                    {
                        id: 1,
                        title: 'IIoT Implementation Blueprint',
                        description:
                            'Step-by-step guide to integrating Industrial IoT into your existing infrastructure.',
                        duration: '20 min read',
                        category: 'whitepapers',
                        icon: '<i class="fas fa-microchip text-2xl text-cyan-400"></i>',
                        fileName: 'iiot-blueprint.pdf',
                        previewContent:
                            'This whitepaper covers architecture, sensor selection, connectivity options, and security best practices for IIoT.',
                        isNew: false,
                    },
                    {
                        id: 2,
                        title: 'Predictive Maintenance Case Study',
                        description:
                            'How a European manufacturer slashed downtime by 58% using our AI engine.',
                        duration: '12 min read',
                        category: 'case-studies',
                        icon: '<i class="fas fa-chart-line text-2xl text-cyan-400"></i>',
                        fileName: 'predictive-case-study.pdf',
                        previewContent:
                            'Learn how our client reduced unplanned downtime by 58% and saved €2.5M annually.',
                        isNew: false,
                    },
                    {
                        id: 3,
                        title: 'Edge Computing for Industry 4.0',
                        description:
                            'Technical deep dive: architecture, security, and edge-native applications.',
                        duration: '45 min read',
                        category: 'tech-docs',
                        icon: '<i class="fas fa-cube text-2xl text-cyan-400"></i>',
                        fileName: 'edge-computing.pdf',
                        previewContent:
                            'Deep dive into edge architecture, data processing at the edge, and integration with cloud.',
                        isNew: false,
                    },
                    {
                        id: 4,
                        title: 'Demystifying OEE: Metrics That Matter',
                        description:
                            'Everything you need to know about Overall Equipment Effectiveness.',
                        duration: '18 min read',
                        category: 'whitepapers',
                        icon: '<i class="fas fa-chart-simple text-2xl text-cyan-400"></i>',
                        fileName: 'oee-guide.pdf',
                        previewContent:
                            'Understand OEE components, calculation methods, and improvement strategies.',
                        isNew: false,
                    },
                    {
                        id: 5,
                        title: 'From Crisis to Control',
                        description:
                            'On-demand webinar with industry experts sharing best practices.',
                        duration: '60 min',
                        category: 'webinars',
                        icon: '<i class="fas fa-video text-2xl text-cyan-400"></i>',
                        fileName: 'webinar-recording.mp4',
                        previewContent:
                            'Recorded webinar featuring case studies and live Q&A on crisis management.',
                        isNew: false,
                    },
                    {
                        id: 6,
                        title: 'Energy Management Tool',
                        description:
                            'Calculate potential savings and carbon reduction with our interactive tool.',
                        duration: 'Interactive',
                        category: 'tools',
                        icon: '<i class="fas fa-calculator text-2xl text-cyan-400"></i>',
                        fileName: 'energy-tool.xlsx',
                        previewContent:
                            'Excel-based tool to calculate energy savings and carbon footprint reduction.',
                        isNew: false,
                    },
                    {
                        id: 7,
                        title: 'AI Anomaly Detection API',
                        description:
                            'Developer documentation for integrating NovaForge AI into your own apps.',
                        duration: '35 min read',
                        category: 'tech-docs',
                        icon: '<i class="fas fa-code text-2xl text-cyan-400"></i>',
                        fileName: 'api-docs.pdf',
                        previewContent:
                            'Complete API reference with endpoints, authentication, and example requests.',
                        isNew: false,
                    },
                    {
                        id: 8,
                        title: 'ROI of Smart Factories',
                        description:
                            'Case study compilation from 15 manufacturing sites across Asia.',
                        duration: '25 min read',
                        category: 'case-studies',
                        icon: '<i class="fas fa-chart-pie text-2xl text-cyan-400"></i>',
                        fileName: 'roi-case-studies.pdf',
                        previewContent:
                            'Real ROI data from factories that implemented our platform.',
                        isNew: true,
                    },
                    {
                        id: 9,
                        title: 'Digital Twin Starter Kit',
                        description:
                            'Tools and templates to get started with digital twins.',
                        duration: 'Self-paced',
                        category: 'tools',
                        icon: '<i class="fas fa-cubes text-2xl text-cyan-400"></i>',
                        fileName: 'digital-twin-kit.zip',
                        previewContent:
                            'Templates and sample models to start your digital twin project.',
                        isNew: true,
                    },
                ],
                featuredResource: {
                    id: 0,
                    title: 'The Ultimate Industrial IoT Whitepaper',
                    description: 'Comprehensive guide to IIoT implementation.',
                    duration: '45 min read',
                    category: 'whitepapers',
                    icon: '<i class="fas fa-file-alt text-2xl text-cyan-400"></i>',
                    fileName: 'iiot-whitepaper.pdf',
                    previewContent:
                        'This whitepaper includes case studies, implementation roadmap, and ROI analysis.',
                },
                get filteredResources() {
                    let filtered = this.resources.filter((r) => {
                        const matchCat =
                            this.activeCategory === 'all' ||
                            r.category === this.activeCategory;
                        const matchSearch =
                            r.title
                                .toLowerCase()
                                .includes(this.searchQuery.toLowerCase()) ||
                            r.description
                                .toLowerCase()
                                .includes(this.searchQuery.toLowerCase());
                        return matchCat && matchSearch;
                    });
                    if (this.sortBy === 'a-z')
                        filtered.sort((a, b) => a.title.localeCompare(b.title));
                    else if (this.sortBy === 'z-a')
                        filtered.sort((a, b) => b.title.localeCompare(a.title));
                    else if (this.sortBy === 'newest')
                        filtered.sort((a, b) => b.id - a.id);
                    return filtered;
                },
                get paginatedResources() {
                    const start = (this.currentPage - 1) * this.perPage;
                    return this.filteredResources.slice(
                        start,
                        start + this.perPage,
                    );
                },
                get totalPages() {
                    return Math.ceil(
                        this.filteredResources.length / this.perPage,
                    );
                },
                previewResource(resource) {
                    this.previewResourceData = resource;
                    this.showModal = true;
                },
                downloadFile(fileName) {
                    const link = document.createElement('a');
                    const blob = new Blob(
                        [
                            'This is a sample file: ' +
                                fileName +
                                '\n\nFor demo purposes only. In production, this would be a real file.',
                        ],
                        { type: 'application/octet-stream' },
                    );
                    const url = URL.createObjectURL(blob);
                    link.href = url;
                    link.download = fileName;
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                    URL.revokeObjectURL(url);
                    this.showToast(
                        `Download started: ${fileName}`,
                        'fas fa-download',
                    );
                },
                showToast(message, icon = 'fas fa-info-circle') {
                    this.toast.message = message;
                    this.toast.icon = icon;
                    this.toast.show = true;
                    setTimeout(() => {
                        this.toast.show = false;
                    }, 3000);
                },
                runDemo() {
                    let val = parseFloat(this.demoVibration);
                    if (isNaN(val)) val = 0;
                    if (val < 3.5) {
                        this.demoResultTitle = '✅ Healthy';
                        this.demoResultMessage =
                            'Vibration within normal range. No action needed.';
                        this.demoResultClass =
                            'bg-green-500/20 border border-green-500/30 text-green-300';
                        this.demoResultIcon = 'fas fa-check-circle';
                    } else if (val <= 4.5) {
                        this.demoResultTitle = '⚠️ Warning';
                        this.demoResultMessage =
                            'Vibration elevated. Schedule inspection within 2 weeks.';
                        this.demoResultClass =
                            'bg-yellow-500/20 border border-yellow-500/30 text-yellow-300';
                        this.demoResultIcon = 'fas fa-exclamation-triangle';
                    } else {
                        this.demoResultTitle = '🔴 Critical Risk';
                        this.demoResultMessage =
                            'Immediate action required! Failure probability high. Schedule maintenance now.';
                        this.demoResultClass =
                            'bg-red-500/20 border border-red-500/30 text-red-300';
                        this.demoResultIcon = 'fas fa-bell';
                    }
                    this.demoResult = true;
                },
                initScrollAnimations() {
                    // Animate static scroll-reveal elements
                    const revealElements =
                        document.querySelectorAll('.scroll-reveal');
                    revealElements.forEach((el) => {
                        if (el.classList.contains('animated')) return;
                        const delay = el.style.transitionDelay
                            ? parseFloat(el.style.transitionDelay)
                            : 0;
                        gsap.to(el, {
                            scrollTrigger: {
                                trigger: el,
                                start: 'top 85%',
                                end: 'bottom 20%',
                                toggleActions: 'play none none reverse',
                                once: false,
                            },
                            opacity: 1,
                            y: 0,
                            filter: 'blur(0px)',
                            duration: 0.8,
                            delay: delay,
                            ease: 'power2.out',
                            onComplete: () => el.classList.add('animated'),
                        });
                    });
                    // Animate resource cards with stagger (for newly added cards)
                    const cards = document.querySelectorAll('.resource-card');
                    if (cards.length) {
                        gsap.fromTo(
                            cards,
                            { opacity: 0, y: 30, filter: 'blur(5px)' },
                            {
                                scrollTrigger: {
                                    trigger: cards[0].parentElement,
                                    start: 'top 80%',
                                    toggleActions: 'play none none none',
                                },
                                opacity: 1,
                                y: 0,
                                filter: 'blur(0px)',
                                stagger: 0.08,
                                duration: 0.6,
                                ease: 'back.out(0.6)',
                            },
                        );
                    }
                },
                refreshAnimations() {
                    // Refresh after dynamic content changes
                    this.$nextTick(() => {
                        ScrollTrigger.refresh();
                        this.initScrollAnimations();
                    });
                },
                init() {
                    this.runDemo();
                    // Register ScrollTrigger and init animations
                    gsap.registerPlugin(ScrollTrigger);
                    this.initScrollAnimations();
                    // Parallax effect on background pattern (optional)
                    gsap.to('.pointer-events-none.fixed', {
                        scrollTrigger: {
                            trigger: 'body',
                            start: 'top top',
                            end: 'bottom bottom',
                            scrub: 1,
                        },
                        y: 50,
                        opacity: 0.1,
                        ease: 'none',
                    });
                },
            };
        }
    </script>
</x-app-layout>
