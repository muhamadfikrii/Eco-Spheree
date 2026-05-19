<x-app-layout>
    <div
        class="min-h-screen bg-slate-950 text-white"
        x-data="{
            smoothScroll(id) {
                document
                    .getElementById(id)
                    ?.scrollIntoView({ behavior: 'smooth' });
            },
        }"
    >
        <div class="pointer-events-none fixed inset-0 z-0 opacity-10">
            <div
                class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgdmlld0JveD0iMCAwIDgwIDgwIj48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjAuNSIgc3Ryb2tlLW9wYWNpdHk9IjAuMDgiIGQ9Ik0wIDQwTDQwIDBNNDAgODBMODAgNDBNODAgNDBMMTAgNzAiLz48L3N2Zz4=')]"
            ></div>
        </div>

        <section
            class="relative z-10 overflow-hidden border-b border-cyan-500/20 pb-16 pt-24 lg:pt-32"
        >
            <div
                class="absolute inset-0 bg-gradient-to-br from-slate-900 via-slate-900/95 to-slate-950"
            ></div>
            <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid items-center gap-12 lg:grid-cols-2">
                    <div>
                        <div
                            class="mb-6 inline-flex items-center gap-2 rounded-full border border-cyan-500/30 bg-cyan-500/10 px-3 py-1 font-mono text-xs tracking-wider text-cyan-400 backdrop-blur-sm"
                        >
                            <i class="fas fa-handshake text-xs"></i> STRATEGIC
                            PARTNERSHIPS
                        </div>
                        <h1
                            class="text-4xl font-bold leading-tight text-white sm:text-5xl lg:text-6xl"
                        >
                            Partner with
                            <span
                                class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent"
                                >NovaForge</span
                            >
                        </h1>
                        <p class="mt-6 max-w-lg text-lg leading-relaxed text-gray-300">Join the leading industrial IoT ecosystem. Accelerate digital transformation, co-innovate with industry leaders, and shape the future of smart manufacturing.</p>
                        <div class="mt-8 flex flex-wrap gap-4">
                            <a
                                href="#contact"
                                @click.prevent="smoothScroll('contact')"
                                class="rounded-lg border border-gray-500 px-6 py-3 font-semibold text-gray-300 transition hover:bg-white/10"
                            >
                                Contact Us
                            </a>
                        </div>
                        <div
                            class="mt-8 flex flex-wrap gap-6 text-sm text-gray-400"
                        >
                            <div class="flex items-center gap-2">
                                <i class="fas fa-microchip text-cyan-400"></i>
                                1,200+ connected plants
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-chart-line text-cyan-400"></i>
                                2.5M data points/sec
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div
                            class="rounded-2xl border border-slate-700 bg-slate-800/40 p-6 backdrop-blur-xl"
                        >
                            <div class="mb-4 flex items-center gap-2">
                                <div
                                    class="h-3 w-3 rounded-full bg-red-500"
                                ></div>
                                <div
                                    class="h-3 w-3 rounded-full bg-yellow-500"
                                ></div>
                                <div
                                    class="h-3 w-3 rounded-full bg-green-500"
                                ></div>
                                <span class="ml-2 text-xs text-gray-400"
                                    >partner-portal</span
                                >
                            </div>
                            <div class="space-y-3">
                                <div
                                    class="flex items-center justify-between border-b border-slate-700 pb-2"
                                >
                                    <span class="text-gray-300"
                                        >Active Integrations</span
                                    ><span class="font-mono text-cyan-400"
                                        >1,247</span
                                    >
                                </div>
                                <div
                                    class="flex items-center justify-between border-b border-slate-700 pb-2"
                                >
                                    <span class="text-gray-300"
                                        >Joint Projects</span
                                    ><span class="font-mono text-cyan-400"
                                        >342</span
                                    >
                                </div>
                                <div
                                    class="flex items-center justify-between border-b border-slate-700 pb-2"
                                >
                                    <span class="text-gray-300"
                                        >Partner ROI (avg)</span
                                    ><span class="font-mono text-cyan-400"
                                        >+34%</span
                                    >
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute -right-4 -top-4 -z-10 h-24 w-24 rounded-full bg-cyan-500/20 blur-2xl"
                        ></div>
                        <div
                            class="absolute -bottom-4 -left-4 -z-10 h-32 w-32 rounded-full bg-blue-600/20 blur-2xl"
                        ></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative z-10 border-b border-slate-800 py-12">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mb-8 text-center">
                    <h2 class="mb-2 text-2xl font-semibold text-white">
                        Trusted by Industry Leaders
                    </h2>
                    <p class="text-sm text-gray-400">Join the ecosystem of 500+ forward-thinking organizations</p>
                </div>
                <div
                    class="grid grid-cols-2 gap-6 md:grid-cols-3 lg:grid-cols-6"
                >
                    <div
                        class="flex h-20 items-center justify-center rounded-xl border border-slate-700 bg-slate-800/40 p-4 backdrop-blur-sm"
                    >
                        <img
                            src="{{ asset('image/siemens.png') }}"
                            onerror="
                                this.src =
                                    'https://placehold.co/120x60/1e293b/38bdf8?text=Siemens'
                            "
                            class="max-h-12 w-auto opacity-70 transition hover:opacity-100"
                        />
                    </div>
                    <div
                        class="flex h-20 items-center justify-center rounded-xl border border-slate-700 bg-slate-800/40 p-4 backdrop-blur-sm"
                    >
                        <img
                            src="{{ asset('image/abb.png') }}"
                            onerror="
                                this.src =
                                    'https://placehold.co/120x60/1e293b/38bdf8?text=ABB'
                            "
                            class="max-h-12 w-auto opacity-70 transition hover:opacity-100"
                        />
                    </div>
                    <div
                        class="flex h-20 items-center justify-center rounded-xl border border-slate-700 bg-slate-800/40 p-4 backdrop-blur-sm"
                    >
                        <img
                            src="{{ asset('image/microsoft.png') }}"
                            onerror="
                                this.src =
                                    'https://placehold.co/120x60/1e293b/38bdf8?text=Microsoft'
                            "
                            class="max-h-12 w-auto opacity-70 transition hover:opacity-100"
                        />
                    </div>
                    <div
                        class="flex h-20 items-center justify-center rounded-xl border border-slate-700 bg-slate-800/40 p-4 backdrop-blur-sm"
                    >
                        <img
                            src="{{ asset('image/aws.png') }}"
                            onerror="
                                this.src =
                                    'https://placehold.co/120x60/1e293b/38bdf8?text=AWS'
                            "
                            class="max-h-12 w-auto opacity-70 transition hover:opacity-100"
                        />
                    </div>
                    <div
                        class="flex h-20 items-center justify-center rounded-xl border border-slate-700 bg-slate-800/40 p-4 backdrop-blur-sm"
                    >
                        <img
                            src="{{ asset('image/toyota.png') }}"
                            onerror="
                                this.src =
                                    'https://placehold.co/120x60/1e293b/38bdf8?text=Toyota'
                            "
                            class="max-h-12 w-auto opacity-70 transition hover:opacity-100"
                        />
                    </div>
                    <div
                        class="flex h-20 items-center justify-center rounded-xl border border-slate-700 bg-slate-800/40 p-4 backdrop-blur-sm"
                    >
                        <img
                            src="{{ asset('image/honda.png') }}"
                            onerror="
                                this.src =
                                    'https://placehold.co/120x60/1e293b/38bdf8?text=Honda'
                            "
                            class="max-h-12 w-auto opacity-70 transition hover:opacity-100"
                        />
                    </div>
                </div>
            </div>
        </section>

        <section id="benefits" class="relative z-10 py-20">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mb-12 text-center">
                    <div
                        class="mb-4 inline-flex items-center gap-2 rounded-full border border-cyan-500/30 bg-cyan-500/10 px-3 py-1 font-mono text-xs tracking-wider text-cyan-400"
                    >
                        WHY PARTNER WITH US
                    </div>
                    <h2 class="mb-3 text-3xl font-bold text-white lg:text-4xl">
                        Exclusive Partner Benefits
                    </h2>
                    <p class="mx-auto max-w-2xl text-gray-400">Accelerate your growth with our technology, data, and go-to-market advantages.</p>
                </div>
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <div
                        class="rounded-2xl border border-slate-700 bg-slate-800/40 p-6 backdrop-blur-sm transition hover:border-cyan-500/40"
                    >
                        <div
                            class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-500/20"
                        >
                            <i
                                class="fas fa-database text-xl text-cyan-400"
                            ></i>
                        </div>
                        <h3 class="mb-2 text-xl font-semibold text-white">
                            Premium Data Access
                        </h3>
                        <p class="text-sm text-gray-400">Real-time industrial data streams, historical datasets, and analytics APIs for your solutions.</p>
                    </div>
                    <div
                        class="rounded-2xl border border-slate-700 bg-slate-800/40 p-6 backdrop-blur-sm transition hover:border-cyan-500/40"
                    >
                        <div
                            class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-500/20"
                        >
                            <i
                                class="fas fa-code-branch text-xl text-cyan-400"
                            ></i>
                        </div>
                        <h3 class="mb-2 text-xl font-semibold text-white">
                            Co-innovation Opportunities
                        </h3>
                        <p class="text-sm text-gray-400">Joint R&D, pilot programs, and innovation labs to co-create next-gen industrial solutions.</p>
                    </div>
                    <div
                        class="rounded-2xl border border-slate-700 bg-slate-800/40 p-6 backdrop-blur-sm transition hover:border-cyan-500/40"
                    >
                        <div
                            class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-500/20"
                        >
                            <i
                                class="fas fa-chart-line text-xl text-cyan-400"
                            ></i>
                        </div>
                        <h3 class="mb-2 text-xl font-semibold text-white">
                            Market Acceleration
                        </h3>
                        <p class="text-sm text-gray-400">Co-marketing, joint events, and access to 1,200+ manufacturing clients.</p>
                    </div>
                    <div
                        class="rounded-2xl border border-slate-700 bg-slate-800/40 p-6 backdrop-blur-sm transition hover:border-cyan-500/40"
                    >
                        <div
                            class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-500/20"
                        >
                            <i class="fas fa-headset text-xl text-cyan-400"></i>
                        </div>
                        <h3 class="mb-2 text-xl font-semibold text-white">
                            Priority Support
                        </h3>
                        <p class="text-sm text-gray-400">Dedicated technical account manager, SLA-backed API support, and integration assistance.</p>
                    </div>
                    <div
                        class="rounded-2xl border border-slate-700 bg-slate-800/40 p-6 backdrop-blur-sm transition hover:border-cyan-500/40"
                    >
                        <div
                            class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-500/20"
                        >
                            <i
                                class="fas fa-shield-alt text-xl text-cyan-400"
                            ></i>
                        </div>
                        <h3 class="mb-2 text-xl font-semibold text-white">
                            Enterprise-grade Security
                        </h3>
                        <p class="text-sm text-gray-400">ISO 27001 certified, GDPR compliant, and end-to-end encryption for all data exchange.</p>
                    </div>
                    <div
                        class="rounded-2xl border border-slate-700 bg-slate-800/40 p-6 backdrop-blur-sm transition hover:border-cyan-500/40"
                    >
                        <div
                            class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-500/20"
                        >
                            <i class="fas fa-globe text-xl text-cyan-400"></i>
                        </div>
                        <h3 class="mb-2 text-xl font-semibold text-white">
                            Global Ecosystem
                        </h3>
                        <p class="text-sm text-gray-400">Network with industry leaders across Southeast Asia, Japan, and Europe.</p>
                    </div>
                </div>
            </div>
        </section>

        <section
            id="options"
            class="relative z-10 border-t border-slate-800 py-20"
        >
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="mb-12 text-center">
                    <div
                        class="mb-4 inline-flex items-center gap-2 rounded-full border border-cyan-500/30 bg-cyan-500/10 px-3 py-1 font-mono text-xs tracking-wider text-cyan-400"
                    >
                        PARTNERSHIP MODELS
                    </div>
                    <h2 class="mb-3 text-3xl font-bold text-white lg:text-4xl">
                        Choose Your Partnership Path
                    </h2>
                    <p class="mx-auto max-w-2xl text-gray-400">Select the model that fits your organization's goals and start collaborating today.</p>
                </div>
                <div
                    class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3"
                >
                    <div
                        class="group rounded-2xl border border-slate-700 bg-slate-800/30 p-5 backdrop-blur-sm transition-all duration-300 hover:-translate-y-1 hover:border-cyan-500/50"
                    >
                        <div
                            class="mb-3 flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-cyan-500 to-blue-600"
                        >
                            <i class="fas fa-building text-lg text-white"></i>
                        </div>
                        <h3 class="mb-1 text-lg font-bold text-white">
                            Corporate
                        </h3>
                        <p class="mb-3 text-xs text-gray-400">For manufacturers & enterprises.</p>
                        <ul class="mb-4 space-y-1.5 text-xs text-gray-300">
                            <li class="flex items-center gap-2">
                                <i
                                    class="fas fa-check-circle text-xs text-cyan-400"
                                ></i>
                                Enterprise IIoT deployment
                            </li>
                            <li class="flex items-center gap-2">
                                <i
                                    class="fas fa-check-circle text-xs text-cyan-400"
                                ></i>
                                OEE & predictive maintenance
                            </li>
                            <li class="flex items-center gap-2">
                                <i
                                    class="fas fa-check-circle text-xs text-cyan-400"
                                ></i>
                                Custom analytics dashboard
                            </li>
                        </ul>
                        <a
                            href="{{ route('contact-partner', ['type' => 'corporate']) }}"
                            class="inline-flex w-full items-center justify-center rounded-lg border border-cyan-500/30 bg-cyan-500/20 px-3 py-1.5 text-sm font-medium text-cyan-400 transition hover:bg-cyan-500/30"
                            >Get Started →</a
                        >
                    </div>

                    <div
                        class="group rounded-2xl border border-slate-700 bg-slate-800/30 p-5 backdrop-blur-sm transition-all duration-300 hover:-translate-y-1 hover:border-cyan-500/50"
                    >
                        <div
                            class="mb-3 flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-cyan-500 to-blue-600"
                        >
                            <i class="fas fa-microchip text-lg text-white"></i>
                        </div>
                        <h3 class="mb-1 text-lg font-bold text-white">
                            Technology
                        </h3>
                        <p class="mb-3 text-xs text-gray-400">For software & IoT providers.</p>
                        <ul class="mb-4 space-y-1.5 text-xs text-gray-300">
                            <li class="flex items-center gap-2">
                                <i
                                    class="fas fa-check-circle text-xs text-cyan-400"
                                ></i>
                                API & data exchange
                            </li>
                            <li class="flex items-center gap-2">
                                <i
                                    class="fas fa-check-circle text-xs text-cyan-400"
                                ></i>
                                Co-development & integration
                            </li>
                            <li class="flex items-center gap-2">
                                <i
                                    class="fas fa-check-circle text-xs text-cyan-400"
                                ></i>
                                Innovation lab access
                            </li>
                        </ul>
                        <a
                            href="{{ route('contact-partner', ['type' => 'technology']) }}"
                            class="inline-flex w-full items-center justify-center rounded-lg border border-cyan-500/30 bg-cyan-500/20 px-3 py-1.5 text-sm font-medium text-cyan-400 transition hover:bg-cyan-500/30"
                            >Get Started →</a
                        >
                    </div>

                    <div
                        class="group rounded-2xl border border-slate-700 bg-slate-800/30 p-5 backdrop-blur-sm transition-all duration-300 hover:-translate-y-1 hover:border-cyan-500/50"
                    >
                        <div
                            class="mb-3 flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-cyan-500 to-blue-600"
                        >
                            <i
                                class="fas fa-graduation-cap text-lg text-white"
                            ></i>
                        </div>
                        <h3 class="mb-1 text-lg font-bold text-white">
                            Research
                        </h3>
                        <p class="mb-3 text-xs text-gray-400">For universities & institutions.</p>
                        <ul class="mb-4 space-y-1.5 text-xs text-gray-300">
                            <li class="flex items-center gap-2">
                                <i
                                    class="fas fa-check-circle text-xs text-cyan-400"
                                ></i>
                                Real-time industrial data
                            </li>
                            <li class="flex items-center gap-2">
                                <i
                                    class="fas fa-check-circle text-xs text-cyan-400"
                                ></i>
                                Collaborative research projects
                            </li>
                            <li class="flex items-center gap-2">
                                <i
                                    class="fas fa-check-circle text-xs text-cyan-400"
                                ></i>
                                Student internship programs
                            </li>
                        </ul>
                        <a
                            href="{{ route('contact-partner', ['type' => 'research']) }}"
                            class="inline-flex w-full items-center justify-center rounded-lg border border-cyan-500/30 bg-cyan-500/20 px-3 py-1.5 text-sm font-medium text-cyan-400 transition hover:bg-cyan-500/30"
                            >Get Started →</a
                        >
                    </div>

                    <div
                        class="group rounded-2xl border border-slate-700 bg-slate-800/30 p-5 backdrop-blur-sm transition-all duration-300 hover:-translate-y-1 hover:border-cyan-500/50"
                    >
                        <div
                            class="mb-3 flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-cyan-500 to-blue-600"
                        >
                            <i
                                class="fas fa-hand-holding-heart text-lg text-white"
                            ></i>
                        </div>
                        <h3 class="mb-1 text-lg font-bold text-white">
                            NGO & Non-profit
                        </h3>
                        <p class="mb-3 text-xs text-gray-400">For sustainability organizations.</p>
                        <ul class="mb-4 space-y-1.5 text-xs text-gray-300">
                            <li class="flex items-center gap-2">
                                <i
                                    class="fas fa-check-circle text-xs text-cyan-400"
                                ></i>
                                Data for impact reporting
                            </li>
                            <li class="flex items-center gap-2">
                                <i
                                    class="fas fa-check-circle text-xs text-cyan-400"
                                ></i>
                                Sustainability analytics
                            </li>
                            <li class="flex items-center gap-2">
                                <i
                                    class="fas fa-check-circle text-xs text-cyan-400"
                                ></i>
                                Joint awareness campaigns
                            </li>
                        </ul>
                        <a
                            href="{{ route('contact-partner', ['type' => 'ngo']) }}"
                            class="inline-flex w-full items-center justify-center rounded-lg border border-cyan-500/30 bg-cyan-500/20 px-3 py-1.5 text-sm font-medium text-cyan-400 transition hover:bg-cyan-500/30"
                            >Get Started →</a
                        >
                    </div>

                    <div
                        class="group rounded-2xl border border-slate-700 bg-slate-800/30 p-5 backdrop-blur-sm transition-all duration-300 hover:-translate-y-1 hover:border-cyan-500/50"
                    >
                        <div
                            class="mb-3 flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-cyan-500 to-blue-600"
                        >
                            <i class="fas fa-landmark text-lg text-white"></i>
                        </div>
                        <h3 class="mb-1 text-lg font-bold text-white">
                            Government
                        </h3>
                        <p class="mb-3 text-xs text-gray-400">For public agencies & ministries.</p>
                        <ul class="mb-4 space-y-1.5 text-xs text-gray-300">
                            <li class="flex items-center gap-2">
                                <i
                                    class="fas fa-check-circle text-xs text-cyan-400"
                                ></i>
                                National industrial dashboards
                            </li>
                            <li class="flex items-center gap-2">
                                <i
                                    class="fas fa-check-circle text-xs text-cyan-400"
                                ></i>
                                Policy support & analytics
                            </li>
                            <li class="flex items-center gap-2">
                                <i
                                    class="fas fa-check-circle text-xs text-cyan-400"
                                ></i>
                                Smart city / industrial zone solutions
                            </li>
                        </ul>
                        <a
                            href="{{ route('contact-partner', ['type' => 'government']) }}"
                            class="inline-flex w-full items-center justify-center rounded-lg border border-cyan-500/30 bg-cyan-500/20 px-3 py-1.5 text-sm font-medium text-cyan-400 transition hover:bg-cyan-500/30"
                            >Get Started →</a
                        >
                    </div>
                </div>
            </div>
        </section>

        <section
            id="contact"
            class="relative z-10 bg-gradient-to-r from-cyan-500/10 to-blue-600/10 py-20"
        >
            <div class="mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
                <h2 class="mb-4 text-3xl font-bold text-white lg:text-4xl">
                    Ready to Partner?
                </h2>
                <p class="mb-8 text-lg text-gray-300">Let's discuss how we can accelerate your industrial digital transformation together.</p>
                <a
                    href="{{ route('contact-partner') }}"
                    class="inline-flex transform items-center gap-2 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 px-8 py-3 font-semibold text-white transition hover:-translate-y-0.5 hover:shadow-lg"
                >
                    Contact Partnership Team <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </section>
    </div>
</x-app-layout>
