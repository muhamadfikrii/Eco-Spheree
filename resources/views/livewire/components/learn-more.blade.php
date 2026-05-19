<x-app-layout>
    <div
        class="bg-slate-950 text-white"
        x-data="{
            initLearnMoreAnimations() {
                const observerOptions = {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px',
                };
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('animate-in');
                            observer.unobserve(entry.target);
                        }
                    });
                }, observerOptions);
                [
                    'heroSection',
                    'aboutSection',
                    'featuresSection',
                    'platformSection',
                    'ctaSection',
                ].forEach((ref) => {
                    const el = this.$refs[ref];
                    if (el) observer.observe(el);
                });
            },
        }"
        x-init="
            setTimeout(() => $nextTick(() => initLearnMoreAnimations()), 100)
        "
    >
        
        <section
            x-ref="heroSection"
            class="relative translate-y-4 overflow-hidden border-b border-cyan-500/20 bg-gradient-to-br from-slate-900 via-slate-900/95 to-slate-950 opacity-0 transition-all duration-700 ease-out"
        >
            <div class="absolute inset-0 opacity-10">
                <div
                    class="absolute left-10 top-10 h-72 w-72 animate-pulse rounded-full bg-cyan-500 mix-blend-overlay blur-3xl filter"
                ></div>
                <div
                    class="absolute bottom-10 right-10 h-80 w-80 animate-pulse rounded-full bg-blue-600 mix-blend-overlay blur-3xl filter delay-1000"
                ></div>
                <div
                    class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgdmlld0JveD0iMCAwIDgwIDgwIj48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjAuNSIgc3Ryb2tlLW9wYWNpdHk9IjAuMDgiIGQ9Ik0wIDQwTDQwIDBNNDAgODBMODAgNDAiLz48L3N2Zz4=')] opacity-20"
                ></div>
            </div>
            <div
                class="container relative z-10 mx-auto px-4 py-20 sm:px-6 md:py-28"
            >
                <div class="mx-auto max-w-4xl text-center">
                    <div
                        class="mb-6 inline-flex items-center rounded-full border border-cyan-500/30 bg-cyan-500/10 px-4 py-2 font-mono text-sm text-cyan-400 backdrop-blur-sm"
                    >
                        <i class="fas fa-microchip mr-2 text-xs"></i> INDUSTRY
                        4.0 SOLUTIONS
                    </div>
                    <h1
                        class="mb-6 text-4xl font-bold leading-tight text-white sm:text-5xl md:text-6xl"
                    >
                        Powering the Future of
                        <span
                            class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent"
                            >Smart Manufacturing</span
                        >
                    </h1>
                    <p class="mx-auto mb-8 max-w-3xl text-lg leading-relaxed text-gray-300 sm:text-xl">Discover how NovaForge's IIoT platform transforms factory operations with real-time telemetry, predictive AI, and digital twin technology.</p>
                    <div class="flex flex-col justify-center gap-4 sm:flex-row">
                        <a
                            href="#features"
                            class="flex transform items-center justify-center gap-2 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 px-6 py-3 font-semibold text-white transition hover:-translate-y-1 hover:shadow-lg"
                        >
                            <i class="fas fa-chart-line"></i> Explore Features
                        </a>
                        <a
                            href="#contact"
                            class="flex items-center justify-center gap-2 rounded-lg border border-gray-500 px-6 py-3 font-semibold text-gray-300 transition hover:bg-white/10"
                        >
                            <i class="fas fa-headset"></i> Contact Us
                        </a>
                    </div>
                    <div
                        class="mx-auto mt-12 grid max-w-2xl grid-cols-2 gap-4 md:grid-cols-4"
                    >
                        <div
                            class="rounded-xl border border-slate-700 bg-slate-800/40 p-4 backdrop-blur-sm"
                        >
                            <div class="text-2xl font-bold text-cyan-400">
                                1,200+
                            </div>
                            <div class="text-sm text-gray-400">
                                Connected Factories
                            </div>
                        </div>
                        <div
                            class="rounded-xl border border-slate-700 bg-slate-800/40 p-4 backdrop-blur-sm"
                        >
                            <div class="text-2xl font-bold text-cyan-400">
                                94%
                            </div>
                            <div class="text-sm text-gray-400">
                                Prediction Accuracy
                            </div>
                        </div>
                        <div
                            class="rounded-xl border border-slate-700 bg-slate-800/40 p-4 backdrop-blur-sm"
                        >
                            <div class="text-2xl font-bold text-cyan-400">
                                2.5M
                            </div>
                            <div class="text-sm text-gray-400">
                                Data pts/sec
                            </div>
                        </div>
                        <div
                            class="rounded-xl border border-slate-700 bg-slate-800/40 p-4 backdrop-blur-sm"
                        >
                            <div class="text-2xl font-bold text-cyan-400">
                                -23%
                            </div>
                            <div class="text-sm text-gray-400">
                                Energy Savings
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="absolute bottom-6 left-1/2 -translate-x-1/2 transform animate-bounce"
            >
                <i class="fas fa-chevron-down text-xl text-gray-400"></i>
            </div>
        </section>

        
        <section
            x-ref="aboutSection"
            class="translate-y-4 bg-slate-900 py-16 opacity-0 transition-all delay-200 duration-700 ease-out md:py-24"
        >
            <div class="container mx-auto px-4 sm:px-6">
                <div class="mx-auto max-w-5xl">
                    <div
                        class="rounded-2xl border border-slate-700 bg-slate-800/40 p-8 backdrop-blur-sm"
                    >
                        <div
                            class="flex flex-col items-start gap-8 md:flex-row"
                        >
                            <div class="md:w-2/3">
                                <div class="mb-4 flex items-center">
                                    <div
                                        class="mr-4 flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-500/20"
                                    >
                                        <i
                                            class="fas fa-industry text-xl text-cyan-400"
                                        ></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-white">
                                        About NovaForge Platform
                                    </h3>
                                </div>
                                <p class="mb-6 text-lg leading-relaxed text-gray-300">NovaForge is an end-to-end industrial IoT platform designed to optimize manufacturing operations. We combine real-time telemetry, AI-driven analytics, and digital twin simulations to help factories achieve zero downtime, maximize OEE, and reduce energy consumption.</p>
                                <div class="space-y-4">
                                    <div class="flex items-start">
                                        <i
                                            class="fas fa-check-circle mr-3 mt-1 text-cyan-400"
                                        ></i
                                        ><span class="text-gray-300"
                                            ><span
                                                class="font-semibold text-white"
                                                >Real-time visibility:</span
                                            >
                                            Monitor every asset across your
                                            production lines.</span
                                        >
                                    </div>
                                    <div class="flex items-start">
                                        <i
                                            class="fas fa-check-circle mr-3 mt-1 text-cyan-400"
                                        ></i
                                        ><span class="text-gray-300"
                                            ><span
                                                class="font-semibold text-white"
                                                >Predictive maintenance:</span
                                            >
                                            Prevent failures before they
                                            happen.</span
                                        >
                                    </div>
                                    <div class="flex items-start">
                                        <i
                                            class="fas fa-check-circle mr-3 mt-1 text-cyan-400"
                                        ></i
                                        ><span class="text-gray-300"
                                            ><span
                                                class="font-semibold text-white"
                                                >Actionable insights:</span
                                            >
                                            Reduce downtime and energy
                                            costs.</span
                                        >
                                    </div>
                                </div>
                            </div>
                            <div
                                class="rounded-xl border border-slate-700 bg-slate-800/50 p-5 md:w-1/3"
                            >
                                <h4
                                    class="mb-3 flex items-center gap-2 font-bold text-white"
                                >
                                    <i
                                        class="fas fa-microchip text-cyan-400"
                                    ></i>
                                    Platform Capabilities
                                </h4>
                                <ul class="space-y-2 text-sm text-gray-300">
                                    <li>
                                        <i
                                            class="fas fa-chart-line w-5 text-cyan-400"
                                        ></i>
                                        OEE & Performance Analytics
                                    </li>
                                    <li>
                                        <i
                                            class="fas fa-brain w-5 text-cyan-400"
                                        ></i>
                                        AI Failure Prediction
                                    </li>
                                    <li>
                                        <i
                                            class="fas fa-cube w-5 text-cyan-400"
                                        ></i>
                                        Digital Twin Simulation
                                    </li>
                                    <li>
                                        <i
                                            class="fas fa-charging-station w-5 text-cyan-400"
                                        ></i>
                                        Energy Optimization
                                    </li>
                                    <li>
                                        <i
                                            class="fas fa-chart-pie w-5 text-cyan-400"
                                        ></i>
                                        Custom Dashboards
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <section
            id="features"
            x-ref="featuresSection"
            class="translate-y-4 bg-slate-950 py-16 opacity-0 transition-all delay-300 duration-700 ease-out md:py-24"
        >
            <div class="container mx-auto px-4 sm:px-6">
                <div class="mb-12 text-center">
                    <div
                        class="mb-4 inline-block rounded-full border border-cyan-500/30 bg-cyan-500/10 px-4 py-1 font-mono text-sm text-cyan-400"
                    >
                        CORE CAPABILITIES
                    </div>
                    <h2 class="mb-4 text-3xl font-bold text-white md:text-4xl">
                        What We Deliver
                    </h2>
                    <p class="mx-auto max-w-2xl text-gray-400">Industry 4.0 solutions powered by IIoT, AI, and edge analytics.</p>
                </div>
                <div class="mx-auto grid max-w-5xl gap-8 md:grid-cols-2">
                    
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
                        <h3 class="mb-2 text-xl font-bold text-white">
                            Real-Time Machine Telemetry
                        </h3>
                        <p class="mb-4 text-gray-400">Monitor vibration, temperature, and power consumption from 1,200+ IIoT sensors with sub-100ms latency. Gain instant visibility into every asset on your factory floor.</p>
                        <div class="flex items-center gap-3 text-sm">
                            <span class="text-cyan-400"
                                ><i class="fas fa-microchip mr-1"></i> 1,200+
                                sensors</span
                            ><span class="text-gray-600">|</span
                            ><span class="text-cyan-400"
                                ><i class="fas fa-clock mr-1"></i> &lt;100ms
                                latency</span
                            >
                        </div>
                    </div>
                    
                    <div
                        class="rounded-2xl border border-slate-700 bg-slate-800/40 p-6 backdrop-blur-sm transition hover:border-cyan-500/40"
                    >
                        <div
                            class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-500/20"
                        >
                            <i
                                class="fas fa-charging-station text-xl text-emerald-400"
                            ></i>
                        </div>
                        <h3 class="mb-2 text-xl font-bold text-white">
                            Energy & Emissions Optimization
                        </h3>
                        <p class="mb-4 text-gray-400">AI-powered analytics identify waste patterns, optimize motor usage, and reduce energy consumption by up to 23% without compromising output. Achieve ESG targets.</p>
                        <div class="flex items-center gap-3 text-sm">
                            <span class="text-emerald-400"
                                ><i class="fas fa-leaf mr-1"></i> -23% energy
                                avg</span
                            ><span class="text-gray-600">|</span
                            ><span class="text-emerald-400"
                                ><i class="fas fa-cloud-sun mr-1"></i> 1,200
                                tCO₂ saved</span
                            >
                        </div>
                    </div>
                    
                    <div
                        class="rounded-2xl border border-slate-700 bg-slate-800/40 p-6 backdrop-blur-sm transition hover:border-cyan-500/40"
                    >
                        <div
                            class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-purple-500/20"
                        >
                            <i class="fas fa-brain text-xl text-purple-400"></i>
                        </div>
                        <h3 class="mb-2 text-xl font-bold text-white">
                            Predictive Maintenance & AI
                        </h3>
                        <p class="mb-4 text-gray-400">ML models predict equipment failures 48 hours in advance with 94% accuracy, reducing unplanned downtime by up to 45% and extending asset life.</p>
                        <div class="flex items-center gap-3 text-sm">
                            <span class="text-purple-400"
                                ><i class="fas fa-chart-simple mr-1"></i> 94%
                                accuracy</span
                            ><span class="text-gray-600">|</span
                            ><span class="text-purple-400"
                                ><i class="fas fa-calendar-week mr-1"></i> 48h
                                warning</span
                            >
                        </div>
                    </div>
                    
                    <div
                        class="rounded-2xl border border-slate-700 bg-slate-800/40 p-6 backdrop-blur-sm transition hover:border-cyan-500/40"
                    >
                        <div
                            class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-amber-500/20"
                        >
                            <i
                                class="fas fa-truck-fast text-xl text-amber-400"
                            ></i>
                        </div>
                        <h3 class="mb-2 text-xl font-bold text-white">
                            Supply Chain Digital Twin
                        </h3>
                        <p class="mb-4 text-gray-400">Create virtual replicas of your supply chain from raw material to delivery. Simulate disruptions, optimize routes, and maintain 99.5% on-time delivery.</p>
                        <div class="flex items-center gap-3 text-sm">
                            <span class="text-amber-400"
                                ><i class="fas fa-chart-line mr-1"></i> 99.5%
                                on-time</span
                            ><span class="text-gray-600">|</span
                            ><span class="text-amber-400"
                                ><i class="fas fa-boxes mr-1"></i> -18%
                                inventory cost</span
                            >
                        </div>
                    </div>
                </div>
                
                <div
                    class="mx-auto mt-12 max-w-5xl rounded-2xl border border-slate-700 bg-slate-800/40 p-6 backdrop-blur-sm"
                >
                    <h3
                        class="mb-2 flex items-center gap-2 text-xl font-bold text-white"
                    >
                        <i class="fas fa-industry text-cyan-400"></i> About
                        NovaForge
                    </h3>
                    <p class="mb-4 text-gray-400">Founded in 2022, NovaForge is the leading industrial IoT platform for smart manufacturing, connecting over 1,200 factories across Southeast Asia. Our team of industrial engineers, data scientists, and AI specialists work 24/7 to ensure operational excellence.</p>
                    <button
                        @click="aboutExpanded = !aboutExpanded"
                        class="flex items-center gap-1 text-sm text-cyan-400 hover:text-cyan-300"
                    >
                        <span
                            x-text="
                                aboutExpanded
                                    ? 'Show less'
                                    : 'Learn more about us'
                            "
                        ></span>
                        <i
                            class="fas fa-chevron-down text-xs transition-transform"
                            :class="aboutExpanded ? 'rotate-180' : ''"
                        ></i>
                    </button>
                    <div
                        x-show="aboutExpanded"
                        x-collapse
                        class="mt-4 border-t border-slate-700 pt-4"
                    >
                        <div
                            class="grid grid-cols-2 gap-4 text-sm text-gray-400"
                        >
                            <div>
                                <i class="fas fa-users mr-2 text-cyan-400"></i>
                                80+ Experts
                            </div>
                            <div>
                                <i class="fas fa-globe mr-2 text-cyan-400"></i>
                                7 Countries
                            </div>
                            <div>
                                <i
                                    class="fas fa-building mr-2 text-cyan-400"
                                ></i>
                                Singapore HQ
                            </div>
                            <div>
                                <i
                                    class="fas fa-shield-alt mr-2 text-cyan-400"
                                ></i>
                                ISO 27001 Certified
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <section
            x-ref="platformSection"
            class="delay-400 translate-y-4 bg-slate-900 py-16 opacity-0 transition-all duration-700 ease-out md:py-24"
        >
            <div class="container mx-auto px-4 text-center sm:px-6">
                <h2 class="mb-4 text-3xl font-bold text-white md:text-4xl">
                    How NovaForge Transforms Manufacturing
                </h2>
                <p class="mx-auto mb-12 max-w-2xl text-gray-400">From data collection to actionable intelligence — see how our platform drives results.</p>
                <div class="mx-auto grid max-w-5xl gap-8 md:grid-cols-3">
                    <div
                        class="rounded-xl border border-slate-700 bg-slate-800/30 p-6"
                    >
                        <div
                            class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-cyan-500/20"
                        >
                            <i
                                class="fas fa-database text-xl text-cyan-400"
                            ></i>
                        </div>
                        <h3 class="text-lg font-semibold text-white">
                            1. Connect & Collect
                        </h3>
                        <p class="mt-2 text-sm text-gray-400">Integrate with existing PLCs, sensors, and SCADA systems to stream real-time data.</p>
                    </div>
                    <div
                        class="rounded-xl border border-slate-700 bg-slate-800/30 p-6"
                    >
                        <div
                            class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-cyan-500/20"
                        >
                            <i class="fas fa-brain text-xl text-cyan-400"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-white">
                            2. Analyze & Predict
                        </h3>
                        <p class="mt-2 text-sm text-gray-400">AI models analyze patterns, detect anomalies, and predict failures with 94% accuracy.</p>
                    </div>
                    <div
                        class="rounded-xl border border-slate-700 bg-slate-800/30 p-6"
                    >
                        <div
                            class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-cyan-500/20"
                        >
                            <i
                                class="fas fa-chart-line text-xl text-cyan-400"
                            ></i>
                        </div>
                        <h3 class="text-lg font-semibold text-white">
                            3. Act & Optimize
                        </h3>
                        <p class="mt-2 text-sm text-gray-400">Get prioritized recommendations to reduce downtime, save energy, and improve OEE.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        .animate-in {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }
        [x-cloak] {
            display: none;
        }
    </style>
</x-app-layout>
