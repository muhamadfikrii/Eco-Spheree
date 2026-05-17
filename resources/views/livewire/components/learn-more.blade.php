<x-app-layout>
<div class="bg-slate-950 text-white" x-data="{
    initLearnMoreAnimations() {
        const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -50px 0px' };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        ['heroSection', 'aboutSection', 'featuresSection', 'platformSection', 'ctaSection'].forEach(ref => {
            const el = this.$refs[ref];
            if (el) observer.observe(el);
        });
    }
}" x-init="setTimeout(() => $nextTick(() => initLearnMoreAnimations()), 100)">

    <!-- Hero Section -->
    <section x-ref="heroSection" class="relative bg-gradient-to-br from-slate-900 via-slate-900/95 to-slate-950 border-b border-cyan-500/20 overflow-hidden opacity-0 translate-y-4 transition-all duration-700 ease-out">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-72 h-72 bg-cyan-500 rounded-full mix-blend-overlay filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-10 right-10 w-80 h-80 bg-blue-600 rounded-full mix-blend-overlay filter blur-3xl animate-pulse delay-1000"></div>
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgdmlld0JveD0iMCAwIDgwIDgwIj48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjAuNSIgc3Ryb2tlLW9wYWNpdHk9IjAuMDgiIGQ9Ik0wIDQwTDQwIDBNNDAgODBMODAgNDAiLz48L3N2Zz4=')] opacity-20"></div>
        </div>
        <div class="relative z-10 container mx-auto px-4 sm:px-6 py-20 md:py-28">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center px-4 py-2 mb-6 text-sm font-mono text-cyan-400 bg-cyan-500/10 backdrop-blur-sm rounded-full border border-cyan-500/30">
                    <i class="fas fa-microchip mr-2 text-xs"></i> INDUSTRY 4.0 SOLUTIONS
                </div>
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                    Powering the Future of
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">Smart Manufacturing</span>
                </h1>
                <p class="text-lg sm:text-xl text-gray-300 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Discover how NovaForge's IIoT platform transforms factory operations with real-time telemetry, predictive AI, and digital twin technology.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#features" class="px-6 py-3 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-semibold rounded-lg hover:shadow-lg transition transform hover:-translate-y-1 flex items-center justify-center gap-2">
                        <i class="fas fa-chart-line"></i> Explore Features
                    </a>
                    <a href="#contact" class="px-6 py-3 border border-gray-500 text-gray-300 rounded-lg font-semibold hover:bg-white/10 transition flex items-center justify-center gap-2">
                        <i class="fas fa-headset"></i> Contact Us
                    </a>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-2xl mx-auto mt-12">
                    <div class="bg-slate-800/40 backdrop-blur-sm rounded-xl p-4 border border-slate-700">
                        <div class="text-2xl font-bold text-cyan-400">1,200+</div>
                        <div class="text-sm text-gray-400">Connected Factories</div>
                    </div>
                    <div class="bg-slate-800/40 backdrop-blur-sm rounded-xl p-4 border border-slate-700">
                        <div class="text-2xl font-bold text-cyan-400">94%</div>
                        <div class="text-sm text-gray-400">Prediction Accuracy</div>
                    </div>
                    <div class="bg-slate-800/40 backdrop-blur-sm rounded-xl p-4 border border-slate-700">
                        <div class="text-2xl font-bold text-cyan-400">2.5M</div>
                        <div class="text-sm text-gray-400">Data pts/sec</div>
                    </div>
                    <div class="bg-slate-800/40 backdrop-blur-sm rounded-xl p-4 border border-slate-700">
                        <div class="text-2xl font-bold text-cyan-400">-23%</div>
                        <div class="text-sm text-gray-400">Energy Savings</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 animate-bounce">
            <i class="fas fa-chevron-down text-gray-400 text-xl"></i>
        </div>
    </section>

    <!-- About Our Platform -->
    <section x-ref="aboutSection" class="py-16 md:py-24 bg-slate-900 opacity-0 translate-y-4 transition-all duration-700 ease-out delay-200">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="max-w-5xl mx-auto">
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl p-8 border border-slate-700">
                    <div class="flex flex-col md:flex-row items-start gap-8">
                        <div class="md:w-2/3">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-cyan-500/20 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-industry text-cyan-400 text-xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-white">About NovaForge Platform</h3>
                            </div>
                            <p class="text-gray-300 mb-6 text-lg leading-relaxed">
                                NovaForge is an end-to-end industrial IoT platform designed to optimize manufacturing operations. We combine real-time telemetry, AI-driven analytics, and digital twin simulations to help factories achieve zero downtime, maximize OEE, and reduce energy consumption.
                            </p>
                            <div class="space-y-4">
                                <div class="flex items-start"><i class="fas fa-check-circle text-cyan-400 mt-1 mr-3"></i><span class="text-gray-300"><span class="font-semibold text-white">Real-time visibility:</span> Monitor every asset across your production lines.</span></div>
                                <div class="flex items-start"><i class="fas fa-check-circle text-cyan-400 mt-1 mr-3"></i><span class="text-gray-300"><span class="font-semibold text-white">Predictive maintenance:</span> Prevent failures before they happen.</span></div>
                                <div class="flex items-start"><i class="fas fa-check-circle text-cyan-400 mt-1 mr-3"></i><span class="text-gray-300"><span class="font-semibold text-white">Actionable insights:</span> Reduce downtime and energy costs.</span></div>
                            </div>
                        </div>
                        <div class="md:w-1/3 bg-slate-800/50 rounded-xl p-5 border border-slate-700">
                            <h4 class="font-bold text-white mb-3 flex items-center gap-2"><i class="fas fa-microchip text-cyan-400"></i> Platform Capabilities</h4>
                            <ul class="space-y-2 text-sm text-gray-300">
                                <li><i class="fas fa-chart-line text-cyan-400 w-5"></i> OEE & Performance Analytics</li>
                                <li><i class="fas fa-brain text-cyan-400 w-5"></i> AI Failure Prediction</li>
                                <li><i class="fas fa-cube text-cyan-400 w-5"></i> Digital Twin Simulation</li>
                                <li><i class="fas fa-charging-station text-cyan-400 w-5"></i> Energy Optimization</li>
                                <li><i class="fas fa-chart-pie text-cyan-400 w-5"></i> Custom Dashboards</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section (berdasarkan 4 feature utama) -->
    <section id="features" x-ref="featuresSection" class="py-16 md:py-24 bg-slate-950 opacity-0 translate-y-4 transition-all duration-700 ease-out delay-300">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-12">
                <div class="inline-block px-4 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 text-sm font-mono mb-4">CORE CAPABILITIES</div>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">What We Deliver</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Industry 4.0 solutions powered by IIoT, AI, and edge analytics.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Feature 1: Real-Time Machine Telemetry -->
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl p-6 border border-slate-700 hover:border-cyan-500/40 transition">
                    <div class="w-12 h-12 bg-cyan-500/20 rounded-xl flex items-center justify-center mb-4"><i class="fas fa-chart-line text-cyan-400 text-xl"></i></div>
                    <h3 class="text-xl font-bold text-white mb-2">Real-Time Machine Telemetry</h3>
                    <p class="text-gray-400 mb-4">Monitor vibration, temperature, and power consumption from 1,200+ IIoT sensors with sub-100ms latency. Gain instant visibility into every asset on your factory floor.</p>
                    <div class="flex items-center gap-3 text-sm"><span class="text-cyan-400"><i class="fas fa-microchip mr-1"></i> 1,200+ sensors</span><span class="text-gray-600">|</span><span class="text-cyan-400"><i class="fas fa-clock mr-1"></i> &lt;100ms latency</span></div>
                </div>
                <!-- Feature 2: Energy & Emissions Optimization -->
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl p-6 border border-slate-700 hover:border-cyan-500/40 transition">
                    <div class="w-12 h-12 bg-emerald-500/20 rounded-xl flex items-center justify-center mb-4"><i class="fas fa-charging-station text-emerald-400 text-xl"></i></div>
                    <h3 class="text-xl font-bold text-white mb-2">Energy & Emissions Optimization</h3>
                    <p class="text-gray-400 mb-4">AI-powered analytics identify waste patterns, optimize motor usage, and reduce energy consumption by up to 23% without compromising output. Achieve ESG targets.</p>
                    <div class="flex items-center gap-3 text-sm"><span class="text-emerald-400"><i class="fas fa-leaf mr-1"></i> -23% energy avg</span><span class="text-gray-600">|</span><span class="text-emerald-400"><i class="fas fa-cloud-sun mr-1"></i> 1,200 tCO₂ saved</span></div>
                </div>
                <!-- Feature 3: Predictive Maintenance & AI -->
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl p-6 border border-slate-700 hover:border-cyan-500/40 transition">
                    <div class="w-12 h-12 bg-purple-500/20 rounded-xl flex items-center justify-center mb-4"><i class="fas fa-brain text-purple-400 text-xl"></i></div>
                    <h3 class="text-xl font-bold text-white mb-2">Predictive Maintenance & AI</h3>
                    <p class="text-gray-400 mb-4">ML models predict equipment failures 48 hours in advance with 94% accuracy, reducing unplanned downtime by up to 45% and extending asset life.</p>
                    <div class="flex items-center gap-3 text-sm"><span class="text-purple-400"><i class="fas fa-chart-simple mr-1"></i> 94% accuracy</span><span class="text-gray-600">|</span><span class="text-purple-400"><i class="fas fa-calendar-week mr-1"></i> 48h warning</span></div>
                </div>
                <!-- Feature 4: Supply Chain Digital Twin -->
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl p-6 border border-slate-700 hover:border-cyan-500/40 transition">
                    <div class="w-12 h-12 bg-amber-500/20 rounded-xl flex items-center justify-center mb-4"><i class="fas fa-truck-fast text-amber-400 text-xl"></i></div>
                    <h3 class="text-xl font-bold text-white mb-2">Supply Chain Digital Twin</h3>
                    <p class="text-gray-400 mb-4">Create virtual replicas of your supply chain from raw material to delivery. Simulate disruptions, optimize routes, and maintain 99.5% on-time delivery.</p>
                    <div class="flex items-center gap-3 text-sm"><span class="text-amber-400"><i class="fas fa-chart-line mr-1"></i> 99.5% on-time</span><span class="text-gray-600">|</span><span class="text-amber-400"><i class="fas fa-boxes mr-1"></i> -18% inventory cost</span></div>
                </div>
            </div>
            <!-- About Us expandable -->
            <div class="max-w-5xl mx-auto mt-12 bg-slate-800/40 backdrop-blur-sm rounded-2xl p-6 border border-slate-700">
                <h3 class="text-xl font-bold text-white mb-2 flex items-center gap-2"><i class="fas fa-industry text-cyan-400"></i> About NovaForge</h3>
                <p class="text-gray-400 mb-4">Founded in 2022, NovaForge is the leading industrial IoT platform for smart manufacturing, connecting over 1,200 factories across Southeast Asia. Our team of industrial engineers, data scientists, and AI specialists work 24/7 to ensure operational excellence.</p>
                <button @click="aboutExpanded = !aboutExpanded" class="text-cyan-400 hover:text-cyan-300 text-sm flex items-center gap-1">
                    <span x-text="aboutExpanded ? 'Show less' : 'Learn more about us'"></span> <i class="fas fa-chevron-down text-xs transition-transform" :class="aboutExpanded ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="aboutExpanded" x-collapse class="mt-4 pt-4 border-t border-slate-700">
                    <div class="grid grid-cols-2 gap-4 text-sm text-gray-400">
                        <div><i class="fas fa-users text-cyan-400 mr-2"></i> 80+ Experts</div>
                        <div><i class="fas fa-globe text-cyan-400 mr-2"></i> 7 Countries</div>
                        <div><i class="fas fa-building text-cyan-400 mr-2"></i> Singapore HQ</div>
                        <div><i class="fas fa-shield-alt text-cyan-400 mr-2"></i> ISO 27001 Certified</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How Our Platform Helps -->
    <section x-ref="platformSection" class="py-16 md:py-24 bg-slate-900 opacity-0 translate-y-4 transition-all duration-700 ease-out delay-400">
        <div class="container mx-auto px-4 sm:px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">How NovaForge Transforms Manufacturing</h2>
            <p class="text-gray-400 max-w-2xl mx-auto mb-12">From data collection to actionable intelligence — see how our platform drives results.</p>
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="bg-slate-800/30 rounded-xl p-6 border border-slate-700">
                    <div class="w-12 h-12 bg-cyan-500/20 rounded-lg flex items-center justify-center mx-auto mb-4"><i class="fas fa-database text-cyan-400 text-xl"></i></div>
                    <h3 class="text-lg font-semibold text-white">1. Connect & Collect</h3>
                    <p class="text-gray-400 text-sm mt-2">Integrate with existing PLCs, sensors, and SCADA systems to stream real-time data.</p>
                </div>
                <div class="bg-slate-800/30 rounded-xl p-6 border border-slate-700">
                    <div class="w-12 h-12 bg-cyan-500/20 rounded-lg flex items-center justify-center mx-auto mb-4"><i class="fas fa-brain text-cyan-400 text-xl"></i></div>
                    <h3 class="text-lg font-semibold text-white">2. Analyze & Predict</h3>
                    <p class="text-gray-400 text-sm mt-2">AI models analyze patterns, detect anomalies, and predict failures with 94% accuracy.</p>
                </div>
                <div class="bg-slate-800/30 rounded-xl p-6 border border-slate-700">
                    <div class="w-12 h-12 bg-cyan-500/20 rounded-lg flex items-center justify-center mx-auto mb-4"><i class="fas fa-chart-line text-cyan-400 text-xl"></i></div>
                    <h3 class="text-lg font-semibold text-white">3. Act & Optimize</h3>
                    <p class="text-gray-400 text-sm mt-2">Get prioritized recommendations to reduce downtime, save energy, and improve OEE.</p>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
    .animate-in { opacity: 1 !important; transform: translateY(0) !important; }
    [x-cloak] { display: none; }
</style>
</x-app-layout>