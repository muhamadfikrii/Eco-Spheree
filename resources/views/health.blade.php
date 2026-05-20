<x-app-layout>
    <div class="relative flex-1 pb-32" x-data="{ activeTab: 'vibration' }">
        <!-- Background yang lebih rapi -->
        <div class="absolute inset-0 z-0">
            <img
                src="https://images.unsplash.com/photo-1581092335871-4c3d9da2b8a9?w=1600&q=80"
                alt="Industrial background"
                class="h-full w-full object-cover opacity-20"
            />
            <div
                class="absolute inset-0 bg-gradient-to-br from-slate-900 via-slate-900/80 to-slate-950"
            ></div>
            <div
                class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgdmlld0JveD0iMCAwIDgwIDgwIj48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9InJnYmEoNTYsIDE4OSwgMjQ4LCAwLjA0KSIgc3Ryb2tlLXdpZHRoPSIwLjgiIGQ9Ik0wIDQwTDQwIDBNNDAgODBMODAgNDBNODAgNDBMMTAgNzAiLz48L3N2Zz4=')] opacity-30"
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
                            <i class="fas fa-heartbeat text-xs"></i> MACHINE
                            HEALTH INTELLIGENCE
                        </div>
                        <h1
                            class="scroll-reveal text-4xl font-bold leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl xl:text-7xl"
                            style="transition-delay: 0.1s"
                        >
                            Keep Your Machines
                            <span
                                class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent"
                                >Healthy, Productive, and Reliable</span
                            >
                        </h1>
                        <p class="scroll-reveal mt-6 text-lg leading-relaxed text-gray-300" style="
                                transition-delay: 0.2s;
                            ">Unplanned downtime costs manufacturers an average of <span class="font-semibold text-cyan-400">$260,000 per hour</span>. Our AI-powered health monitoring predicts failures up to 48 hours in advance — so you can act before production stops.</p>
                        <div
                            class="scroll-reveal mt-8 flex flex-wrap gap-4"
                            style="transition-delay: 0.3s"
                        >
                            <a
                                href="#how-it-works"
                                class="transform rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 px-6 py-3 font-semibold text-white shadow-lg shadow-cyan-500/30 transition hover:-translate-y-1 hover:shadow-cyan-500/50"
                            >
                                See How It Works
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <a
                                href="#case-study"
                                class="rounded-lg border border-gray-500 px-6 py-3 font-semibold text-gray-300 backdrop-blur-sm transition hover:bg-white/10"
                            >
                                Read Success Story
                            </a>
                        </div>
                        <div
                            class="scroll-reveal mt-10 flex flex-wrap gap-6 text-sm text-gray-400"
                            style="transition-delay: 0.4s"
                        >
                            <div class="flex items-center gap-2">
                                <i class="fas fa-chart-line text-cyan-400"></i>
                                94% prediction accuracy
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-clock text-cyan-400"></i> 48h
                                advance warning
                            </div>
                            <div class="flex items-center gap-2">
                                <i
                                    class="fas fa-chart-simple text-cyan-400"
                                ></i>
                                45% less downtime
                            </div>
                        </div>
                    </div>
                    <div
                        class="scroll-reveal relative"
                        style="transition-delay: 0.2s"
                    >
                        <div
                            class="overflow-hidden rounded-2xl border border-slate-700 bg-slate-800/40 p-6 shadow-2xl backdrop-blur-xl"
                        >
                            <div
                                class="relative mb-4 h-32 overflow-hidden rounded-xl"
                            >
                                <img
                                    src="{{ asset('image/industrial.png') }}"
                                    alt="Industrial machine"
                                    class="h-full w-full object-cover opacity-80"
                                />
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-cyan-500/20 to-transparent"
                                ></div>
                            </div>
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
                                    >live-predictions</span
                                >
                            </div>
                            <div class="space-y-4">
                                <div
                                    class="flex items-center justify-between border-b border-slate-700 pb-2"
                                >
                                    <span class="text-gray-300"
                                        >Motor M-1023 Health</span
                                    >
                                    <span class="font-mono text-green-400"
                                        >98%</span
                                    >
                                    <div
                                        class="h-1.5 w-24 overflow-hidden rounded-full bg-slate-700"
                                    >
                                        <div
                                            class="h-full rounded-full bg-green-500"
                                            style="width: 98%"
                                        ></div>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-between border-b border-slate-700 pb-2"
                                >
                                    <span class="text-gray-300"
                                        >Conveyor C-7 Health</span
                                    >
                                    <span class="font-mono text-yellow-400"
                                        >74%</span
                                    >
                                    <div
                                        class="h-1.5 w-24 overflow-hidden rounded-full bg-slate-700"
                                    >
                                        <div
                                            class="h-full rounded-full bg-yellow-500"
                                            style="width: 74%"
                                        ></div>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-between border-b border-slate-700 pb-2"
                                >
                                    <span class="text-gray-300"
                                        >Hydraulic Pump P-45</span
                                    >
                                    <span class="font-mono text-red-400"
                                        >47%</span
                                    >
                                    <div
                                        class="h-1.5 w-24 overflow-hidden rounded-full bg-slate-700"
                                    >
                                        <div
                                            class="h-full rounded-full bg-red-500"
                                            style="width: 47%"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 text-center text-xs text-cyan-400">
                                🔔 Next predicted failure: 12 days (Hydraulic
                                Pump)
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

        <!-- Why Machine Health Matters -->
        <section class="relative z-10 border-y border-slate-800 py-20">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="scroll-reveal mb-12 text-center">
                    <div
                        class="mb-4 inline-flex items-center gap-2 rounded-full border border-cyan-500/30 bg-cyan-500/10 px-3 py-1 font-mono text-xs tracking-wider text-cyan-400"
                    >
                        THE PROBLEM
                    </div>
                    <h2 class="mb-4 text-3xl font-bold text-white lg:text-4xl">
                        Why Machine Health Is Your Factory's Biggest Blind Spot
                    </h2>
                    <p class="mx-auto max-w-3xl text-lg text-gray-400">Traditional maintenance strategies — reactive or time-based — simply don't work in today's fast-paced manufacturing environment.</p>
                </div>
                <div class="grid gap-8 md:grid-cols-3">
                    <div
                        class="scroll-reveal rounded-2xl border border-slate-700 bg-slate-800/30 p-6 text-center"
                    >
                        <div
                            class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-xl bg-red-500/20"
                        >
                            <i class="fas fa-clock text-2xl text-red-400"></i>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-white">
                            Reactive Maintenance
                        </h3>
                        <p class="text-gray-400">Fix after failure. High emergency repair costs, unplanned downtime, and rushed part replacements.</p>
                    </div>
                    <div
                        class="scroll-reveal rounded-2xl border border-slate-700 bg-slate-800/30 p-6 text-center"
                    >
                        <div
                            class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-xl bg-yellow-500/20"
                        >
                            <i
                                class="fas fa-calendar-week text-2xl text-yellow-400"
                            ></i>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-white">
                            Time-Based Maintenance
                        </h3>
                        <p class="text-gray-400">Replace parts on schedule — often too early (waste) or too late (failure). Inefficient and costly.</p>
                    </div>
                    <div
                        class="scroll-reveal rounded-2xl border border-slate-700 bg-slate-800/30 p-6 text-center"
                    >
                        <div
                            class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-xl bg-cyan-500/20"
                        >
                            <i class="fas fa-brain text-2xl text-cyan-400"></i>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-white">
                            Predictive Maintenance (Our Solution)
                        </h3>
                        <p class="text-gray-400">AI analyzes real-time data to predict failures before they happen. Fix only when needed. Maximize asset life.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works -->
        <section id="how-it-works" class="relative z-10 py-20">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="scroll-reveal mb-12 text-center">
                    <div
                        class="mb-4 inline-flex items-center gap-2 rounded-full border border-cyan-500/30 bg-cyan-500/10 px-3 py-1 font-mono text-xs tracking-wider text-cyan-400"
                    >
                        HOW IT WORKS
                    </div>
                    <h2 class="mb-4 text-3xl font-bold text-white lg:text-4xl">
                        From Sensor to Action in Three Steps
                    </h2>
                    <p class="mx-auto max-w-2xl text-gray-400">Our platform continuously learns from your machines, turning raw data into actionable insights.</p>
                </div>
                <div class="grid gap-8 md:grid-cols-3">
                    <div class="scroll-reveal relative h-full">
                        <div
                            class="absolute -left-4 -top-4 z-10 flex h-12 w-12 items-center justify-center rounded-full bg-cyan-500 text-xl font-bold text-white"
                        >
                            1
                        </div>
                        <div
                            class="ml-4 flex h-full flex-col rounded-2xl border border-slate-700 bg-slate-800/40 p-6 pt-8"
                        >
                            <div
                                class="mb-4 flex h-14 w-14 items-center justify-center rounded-xl bg-cyan-500/20"
                            >
                                <i
                                    class="fas fa-microchip text-2xl text-cyan-400"
                                ></i>
                            </div>
                            <h3 class="mb-2 text-xl font-bold text-white">
                                Collect Data
                            </h3>
                            <p class="flex-1 text-gray-400">IIoT sensors continuously monitor vibration, temperature, pressure, and power consumption across your production line.</p>
                        </div>
                    </div>
                    <div class="scroll-reveal relative h-full">
                        <div
                            class="absolute -left-4 -top-4 z-10 flex h-12 w-12 items-center justify-center rounded-full bg-cyan-500 text-xl font-bold text-white"
                        >
                            2
                        </div>
                        <div
                            class="ml-4 flex h-full flex-col rounded-2xl border border-slate-700 bg-slate-800/40 p-6 pt-8"
                        >
                            <div
                                class="mb-4 flex h-14 w-14 items-center justify-center rounded-xl bg-cyan-500/20"
                            >
                                <i
                                    class="fas fa-brain text-2xl text-cyan-400"
                                ></i>
                            </div>
                            <h3 class="mb-2 text-xl font-bold text-white">
                                AI Analysis
                            </h3>
                            <p class="flex-1 text-gray-400">Machine learning models detect anomalies, identify patterns, and predict remaining useful life (RUL) with 94% accuracy.</p>
                        </div>
                    </div>
                    <div class="scroll-reveal relative h-full">
                        <div
                            class="absolute -left-4 -top-4 z-10 flex h-12 w-12 items-center justify-center rounded-full bg-cyan-500 text-xl font-bold text-white"
                        >
                            3
                        </div>
                        <div
                            class="ml-4 flex h-full flex-col rounded-2xl border border-slate-700 bg-slate-800/40 p-6 pt-8"
                        >
                            <div
                                class="mb-4 flex h-14 w-14 items-center justify-center rounded-xl bg-cyan-500/20"
                            >
                                <i
                                    class="fas fa-bell text-2xl text-cyan-400"
                                ></i>
                            </div>
                            <h3 class="mb-2 text-xl font-bold text-white">
                                Actionable Alerts
                            </h3>
                            <p class="flex-1 text-gray-400">Receive prioritized recommendations: schedule maintenance, order parts, or adjust operations — with enough lead time to avoid disruption.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Case Study -->
        <section
            id="case-study"
            class="relative z-10 bg-gradient-to-r from-cyan-500/10 to-blue-600/10 py-20"
        >
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid items-center gap-12 lg:grid-cols-2">
                    <div class="scroll-reveal">
                        <div
                            class="mb-4 inline-flex items-center gap-2 rounded-full border border-cyan-500/30 bg-cyan-500/10 px-3 py-1 font-mono text-xs tracking-wider text-cyan-400"
                        >
                            CASE STUDY
                        </div>
                        <h2
                            class="mb-4 text-3xl font-bold text-white lg:text-4xl"
                        >
                            How a Major Automotive Plant Saved $2.3M in One Year
                        </h2>
                        <p class="mb-6 text-lg leading-relaxed text-gray-300">A leading automotive manufacturer installed our health monitoring system on 12 critical assembly line motors. Within 6 months, the AI predicted bearing failure on Motor M-1023 — 10 days before failure. The plant scheduled a planned replacement during a scheduled shift change, avoiding 8 hours of unplanned downtime and saving over $180,000 from just that one alert.</p>
                        <div class="mb-6 grid grid-cols-2 gap-4">
                            <div
                                class="rounded-xl bg-slate-800/50 p-3 text-center"
                            >
                                <div class="text-2xl font-bold text-cyan-400">
                                    45%
                                </div>
                                <div class="text-xs text-gray-400">
                                    Downtime Reduction
                                </div>
                            </div>
                            <div
                                class="rounded-xl bg-slate-800/50 p-3 text-center"
                            >
                                <div class="text-2xl font-bold text-cyan-400">
                                    $2.3M
                                </div>
                                <div class="text-xs text-gray-400">
                                    Annual Savings
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex items-center gap-2 text-sm text-gray-400"
                        >
                            <i class="fas fa-quote-left text-cyan-400"></i>
                            "We've cut emergency maintenance calls by 70% and
                            extended motor life by 30%. This isn't just software
                            — it's peace of mind." — Plant Manager
                        </div>
                    </div>
                    <div
                        class="scroll-reveal rounded-2xl border border-slate-700 bg-slate-800/40 p-6"
                    >
                        <div class="mb-4 flex items-center gap-3">
                            <div
                                class="h-3 w-3 animate-pulse rounded-full bg-green-500"
                            ></div>
                            <span class="font-mono text-sm text-white"
                                >Motor M-1023 Vibration Trend (Before
                                Failure)</span
                            >
                        </div>
                        <canvas id="caseVibrationChart" height="200"></canvas>
                        <div class="mt-4 text-center text-xs text-gray-400">
                            Red line shows AI prediction threshold. Alert
                            triggered at Day 8, preventing failure.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- What You Get -->
        <section class="relative z-10 py-20">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="scroll-reveal mb-12 text-center">
                    <h2 class="mb-4 text-3xl font-bold text-white lg:text-4xl">
                        What You Get with NovaForge Health
                    </h2>
                    <p class="mx-auto max-w-2xl text-gray-400">A complete ecosystem for proactive asset management.</p>
                </div>
                <div
                    class="mx-auto grid max-w-4xl gap-x-12 gap-y-6 md:grid-cols-2"
                >
                    <div class="scroll-reveal flex items-start gap-3">
                        <div
                            class="mt-0.5 flex h-6 w-6 items-center justify-center rounded-full bg-cyan-500/20"
                        >
                            <i class="fas fa-check text-xs text-cyan-400"></i>
                        </div>
                        <div>
                            <span class="font-medium text-white"
                                >Real-time dashboards</span
                            >
                            <p class="text-sm text-gray-400">Live health scores for every asset, anywhere in the world.</p>
                        </div>
                    </div>
                    <div class="scroll-reveal flex items-start gap-3">
                        <div
                            class="mt-0.5 flex h-6 w-6 items-center justify-center rounded-full bg-cyan-500/20"
                        >
                            <i class="fas fa-check text-xs text-cyan-400"></i>
                        </div>
                        <div>
                            <span class="font-medium text-white"
                                >AI failure predictions</span
                            >
                            <p class="text-sm text-gray-400">94% accurate, 48-hour advance warnings with recommended actions.</p>
                        </div>
                    </div>
                    <div class="scroll-reveal flex items-start gap-3">
                        <div
                            class="mt-0.5 flex h-6 w-6 items-center justify-center rounded-full bg-cyan-500/20"
                        >
                            <i class="fas fa-check text-xs text-cyan-400"></i>
                        </div>
                        <div>
                            <span class="font-medium text-white"
                                >Maintenance scheduling</span
                            >
                            <p class="text-sm text-gray-400">Automatically generate work orders based on asset health.</p>
                        </div>
                    </div>
                    <div class="scroll-reveal flex items-start gap-3">
                        <div
                            class="mt-0.5 flex h-6 w-6 items-center justify-center rounded-full bg-cyan-500/20"
                        >
                            <i class="fas fa-check text-xs text-cyan-400"></i>
                        </div>
                        <div>
                            <span class="font-medium text-white"
                                >Root cause analysis</span
                            >
                            <p class="text-sm text-gray-400">Understand why failures happen and prevent recurrence.</p>
                        </div>
                    </div>
                    <div class="scroll-reveal flex items-start gap-3">
                        <div
                            class="mt-0.5 flex h-6 w-6 items-center justify-center rounded-full bg-cyan-500/20"
                        >
                            <i class="fas fa-check text-xs text-cyan-400"></i>
                        </div>
                        <div>
                            <span class="font-medium text-white"
                                >Mobile alerts</span
                            >
                            <p class="text-sm text-gray-400">Get push notifications on your phone, even when away from the control room.</p>
                        </div>
                    </div>
                    <div class="scroll-reveal flex items-start gap-3">
                        <div
                            class="mt-0.5 flex h-6 w-6 items-center justify-center rounded-full bg-cyan-500/20"
                        >
                            <i class="fas fa-check text-xs text-cyan-400"></i>
                        </div>
                        <div>
                            <span class="font-medium text-white"
                                >Historical trends</span
                            >
                            <p class="text-sm text-gray-400">Track degradation over time to optimize replacement cycles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        /* Initial state for scroll reveal animations */
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
    </style>

    <!-- GSAP & ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Register ScrollTrigger
            gsap.registerPlugin(ScrollTrigger);

            // Animate all scroll-reveal elements
            const revealElements = document.querySelectorAll('.scroll-reveal');
            revealElements.forEach((el) => {
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

            // Optional: subtle parallax on background blobs (if any)
            gsap.to('.absolute.-left-20', {
                scrollTrigger: {
                    trigger: 'body',
                    start: 'top top',
                    end: 'bottom bottom',
                    scrub: 1,
                },
                x: 30,
                y: 30,
                ease: 'none',
            });
            gsap.to('.absolute.-right-20', {
                scrollTrigger: {
                    trigger: 'body',
                    start: 'top top',
                    end: 'bottom bottom',
                    scrub: 1,
                },
                x: -30,
                y: -30,
                ease: 'none',
            });

            // Chart initialization (unchanged)
            const ctx = document
                .getElementById('caseVibrationChart')
                .getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [
                        'Day 1',
                        'Day 3',
                        'Day 5',
                        'Day 7',
                        'Day 8',
                        'Day 9',
                        'Day 10 (Predicted)',
                    ],
                    datasets: [
                        {
                            label: 'Actual Vibration (mm/s)',
                            data: [2.1, 2.4, 2.9, 3.7, 4.2, 5.1, null],
                            borderColor: '#06b6d4',
                            backgroundColor: 'rgba(6,182,212,0.1)',
                            tension: 0.3,
                            fill: true,
                            pointBackgroundColor: '#38bdf8',
                            pointBorderColor: '#fff',
                        },
                        {
                            label: 'Alert Threshold',
                            data: [4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5],
                            borderColor: '#ef4444',
                            borderDash: [5, 5],
                            fill: false,
                            pointRadius: 0,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: { legend: { labels: { color: '#9ca3af' } } },
                    scales: {
                        y: {
                            grid: { color: '#1e293b' },
                            ticks: { color: '#9ca3af' },
                        },
                        x: { ticks: { color: '#9ca3af' } },
                    },
                },
            });
        });
    </script>
</x-app-layout>
