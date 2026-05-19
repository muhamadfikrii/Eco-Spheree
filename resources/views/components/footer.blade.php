<footer
    class="border-t border-slate-800 bg-gradient-to-b from-slate-900 to-slate-950 px-4 pb-10 pt-14 text-gray-300 md:px-8"
>
    <div class="mx-auto max-w-7xl">
        <div
            class="mb-14 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4 lg:gap-10"
        >
            <div class="space-y-4">
                <div class="mb-2 flex items-center space-x-2">
                    <i class="fas fa-microchip text-xl text-cyan-400"></i>
                    <h3 class="text-lg font-bold text-cyan-400">
                        IndustrialTrack
                    </h3>
                </div>
                <p class="text-sm leading-relaxed text-gray-400">Real-time IIoT platform for smart manufacturing. AI-powered predictive maintenance, digital twin, and operational intelligence for Industry 4.0.</p>
                <div class="flex space-x-4 pt-2">
                    <a
                        href="https://www.linkedin.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="transform text-gray-500 transition-all duration-300 hover:scale-110 hover:text-cyan-400"
                        aria-label="LinkedIn"
                    >
                        <i class="fab fa-linkedin-in text-lg"></i>
                    </a>
                    <a
                        href="https://github.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="transform text-gray-500 transition-all duration-300 hover:scale-110 hover:text-cyan-400"
                        aria-label="GitHub"
                    >
                        <i class="fab fa-github text-lg"></i>
                    </a>
                    <a
                        href="https://twitter.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="transform text-gray-500 transition-all duration-300 hover:scale-110 hover:text-cyan-400"
                        aria-label="Twitter"
                    >
                        <i class="fab fa-twitter text-lg"></i>
                    </a>
                    <a
                        href="https://www.youtube.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="transform text-gray-500 transition-all duration-300 hover:scale-110 hover:text-cyan-400"
                        aria-label="YouTube"
                    >
                        <i class="fab fa-youtube text-lg"></i>
                    </a>
                </div>
            </div>

            <div>
                <div class="mb-4 flex items-center space-x-2">
                    <i class="fas fa-cogs text-cyan-400"></i>
                    <h3 class="text-lg font-bold text-cyan-400">Platform</h3>
                </div>
                <ul class="space-y-3">
                    <li>
                        <a
                            href="{{ route('insights') }}"
                            class="group flex items-center text-gray-400 transition-all hover:text-cyan-400"
                        >
                            <i
                                class="fas fa-chart-line mr-3 text-cyan-500/70 transition-transform group-hover:scale-110"
                            ></i>
                            <span
                                class="transition-transform group-hover:translate-x-1"
                                >Real-Time Telemetry</span
                            >
                        </a>
                    </li>
                    <li>
                        <a
                            href="{{ route('resources') }}"
                            class="group flex items-center text-gray-400 transition-all hover:text-cyan-400"
                        >
                            <i
                                class="fas fa-brain mr-3 text-cyan-500/70 transition-transform group-hover:scale-110"
                            ></i>
                            <span
                                class="transition-transform group-hover:translate-x-1"
                                >Resources</span
                            >
                        </a>
                    </li>
                    <li>
                        <a
                            href="{{ route('health') }}"
                            class="group flex items-center text-gray-400 transition-all hover:text-cyan-400"
                        >
                            <i
                                class="fas fa-charging-station mr-3 text-cyan-500/70 transition-transform group-hover:scale-110"
                            ></i>
                            <span
                                class="transition-transform group-hover:translate-x-1"
                                >Health</span
                            >
                        </a>
                    </li>
                    <li>
                        <a
                            href="{{ route('contact') }}"
                            class="group flex items-center text-gray-400 transition-all hover:text-cyan-400"
                        >
                            <i
                                class="fas fa-cubes mr-3 text-cyan-500/70 transition-transform group-hover:scale-110"
                            ></i>
                            <span
                                class="transition-transform group-hover:translate-x-1"
                                >Contact</span
                            >
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <div class="mb-4 flex items-center space-x-2">
                    <i class="fas fa-plug text-cyan-400"></i>
                    <h3 class="text-lg font-bold text-cyan-400">
                        Integrations
                    </h3>
                </div>
                <ul class="space-y-3 text-sm text-gray-400">
                    <li
                        class="flex items-center transition-all hover:text-gray-200"
                    >
                        <i class="fab fa-microsoft mr-3 text-cyan-500/70"></i>
                        Azure IoT Hub
                    </li>
                    <li
                        class="flex items-center transition-all hover:text-gray-200"
                    >
                        <i class="fab fa-aws mr-3 text-cyan-500/70"></i>
                        AWS SiteWise
                    </li>
                    <li
                        class="flex items-center transition-all hover:text-gray-200"
                    >
                        <i class="fas fa-database mr-3 text-cyan-500/70"></i>
                        MQTT / OPC-UA
                    </li>
                    <li
                        class="flex items-center transition-all hover:text-gray-200"
                    >
                        <i
                            class="fas fa-chart-simple mr-3 text-cyan-500/70"
                        ></i>
                        SAP / ERP Systems
                    </li>
                </ul>
            </div>

            <div>
                <div class="mb-4 flex items-center space-x-2">
                    <i class="fas fa-chart-simple text-cyan-400"></i>
                    <h3 class="text-lg font-bold text-cyan-400">
                        Industrial Impact
                    </h3>
                </div>
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-400"
                            >Connected Assets</span
                        >
                        <span class="font-mono font-bold text-cyan-400"
                            >1,200+</span
                        >
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-400"
                            >Downtime Reduction</span
                        >
                        <span class="font-mono font-bold text-cyan-400"
                            >45%</span
                        >
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-400">Energy Saved</span>
                        <span class="font-mono font-bold text-cyan-400"
                            >23%</span
                        >
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-400"
                            >Data Points/sec</span
                        >
                        <span class="font-mono font-bold text-cyan-400"
                            >2.5M+</span
                        >
                    </div>
                </div>
                <div
                    class="mt-4 rounded-lg border border-cyan-500/30 bg-cyan-500/10 p-3"
                >
                    <p class="text-center font-mono text-xs text-gray-300">
                        <i class="fas fa-chart-line mr-1 text-cyan-400"></i>
                        99.5% platform uptime SLA
                    </p>
                </div>
            </div>
        </div>

        <div class="space-y-6 border-t border-slate-800 pt-8">
            <div
                class="flex flex-col items-center justify-between gap-4 lg:flex-row"
            >
                <div class="flex items-center space-x-2">
                    <i class="fas fa-microchip text-cyan-500/70"></i>
                    <p class="text-sm text-gray-500">&copy; 2025 IndustrialTrack. All rights reserved.</p>
                </div>

                <div
                    class="flex flex-wrap justify-center gap-4 text-sm text-gray-500 sm:gap-6"
                >
                    <a
                        href="{{ route('contact') }}"
                        class="flex items-center transition-colors hover:text-cyan-400"
                    >
                        <i class="fas fa-shield-alt mr-1 text-xs"></i> Privacy
                        Policy
                    </a>
                    <a
                        href="{{ route('resources') }}"
                        class="flex items-center transition-colors hover:text-cyan-400"
                    >
                        <i class="fas fa-file-contract mr-1 text-xs"></i> Terms
                        of Service
                    </a>
                    <a
                        href="{{ route('learnmore') }}"
                        class="flex items-center transition-colors hover:text-cyan-400"
                    >
                        <i class="fas fa-sitemap mr-1 text-xs"></i> Sitemap
                    </a>
                    <a
                        href="{{ route('contact') }}"
                        class="flex items-center transition-colors hover:text-cyan-400"
                    >
                        <i class="fas fa-headset mr-1 text-xs"></i> Support
                    </a>
                </div>
            </div>

            <div class="border-t border-slate-800/50 pt-4 text-center">
                <p class="mx-auto max-w-2xl text-xs leading-relaxed text-gray-500">
                    <i class="fas fa-industry mr-1 text-cyan-400"></i>
                    Industry 4.0 ready — ISO 27001 certified. Real-time
                    edge-to-cloud architecture.
                </p>

                <div class="mt-4 flex flex-wrap justify-center gap-4 sm:gap-6">
                    <div class="flex items-center text-xs text-gray-500">
                        <i class="fas fa-microchip mr-1 text-cyan-500/70"></i>
                        <span>IIoT Compatible</span>
                    </div>
                    <div class="flex items-center text-xs text-gray-500">
                        <i
                            class="fas fa-cloud-arrow-up mr-1 text-cyan-500/70"
                        ></i>
                        <span>Cloud Native</span>
                    </div>
                    <div class="flex items-center text-xs text-gray-500">
                        <i
                            class="fas fa-shield-hooded mr-1 text-cyan-500/70"
                        ></i>
                        <span>Enterprise Security</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
