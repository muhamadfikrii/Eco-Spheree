<x-app-layout>
<div class="min-h-screen bg-slate-950 text-white" x-data="{ smoothScroll(id) { document.getElementById(id)?.scrollIntoView({ behavior: 'smooth' }); } }">

    <!-- Background pattern -->
    <div class="fixed inset-0 z-0 opacity-10 pointer-events-none">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgdmlld0JveD0iMCAwIDgwIDgwIj48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjAuNSIgc3Ryb2tlLW9wYWNpdHk9IjAuMDgiIGQ9Ik0wIDQwTDQwIDBNNDAgODBMODAgNDBNODAgNDBMMTAgNzAiLz48L3N2Zz4=')]"></div>
    </div>

    <!-- Hero Section -->
    <section class="relative z-10 pt-24 lg:pt-32 pb-16 border-b border-cyan-500/20 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-slate-900/95 to-slate-950"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 text-xs font-mono tracking-wider mb-6 backdrop-blur-sm">
                        <i class="fas fa-handshake text-xs"></i> STRATEGIC PARTNERSHIPS
                    </div>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight">
                        Partner with 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">NovaForge</span>
                    </h1>
                    <p class="text-gray-300 text-lg mt-6 leading-relaxed max-w-lg">
                        Join the leading industrial IoT ecosystem. Accelerate digital transformation, co-innovate with industry leaders, and shape the future of smart manufacturing.
                    </p>
                    <div class="flex flex-wrap gap-4 mt-8">
                        <a href="#contact" @click.prevent="smoothScroll('contact')" class="px-6 py-3 border border-gray-500 text-gray-300 rounded-lg font-semibold hover:bg-white/10 transition">
                            Contact Us
                        </a>
                    </div>
                    <div class="flex flex-wrap gap-6 mt-8 text-sm text-gray-400">
                        <div class="flex items-center gap-2"><i class="fas fa-microchip text-cyan-400"></i> 1,200+ connected plants</div>
                        <div class="flex items-center gap-2"><i class="fas fa-chart-line text-cyan-400"></i> 2.5M data points/sec</div>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-slate-800/40 backdrop-blur-xl rounded-2xl border border-slate-700 p-6">
                        <div class="flex items-center gap-2 mb-4">
                            <div class="w-3 h-3 rounded-full bg-red-500"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500"></div>
                            <span class="text-gray-400 text-xs ml-2">partner-portal</span>
                        </div>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center border-b border-slate-700 pb-2"><span class="text-gray-300">Active Integrations</span><span class="text-cyan-400 font-mono">1,247</span></div>
                            <div class="flex justify-between items-center border-b border-slate-700 pb-2"><span class="text-gray-300">Joint Projects</span><span class="text-cyan-400 font-mono">342</span></div>
                            <div class="flex justify-between items-center border-b border-slate-700 pb-2"><span class="text-gray-300">Partner ROI (avg)</span><span class="text-cyan-400 font-mono">+34%</span></div>
                        </div>
                    </div>
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-cyan-500/20 rounded-full blur-2xl -z-10"></div>
                    <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-blue-600/20 rounded-full blur-2xl -z-10"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted Partners Grid -->
    <section class="relative z-10 py-12 border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-semibold text-white mb-2">Trusted by Industry Leaders</h2>
                <p class="text-gray-400 text-sm">Join the ecosystem of 500+ forward-thinking organizations</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-xl p-4 border border-slate-700 flex items-center justify-center h-20"><img src="{{ asset('image/siemens.png') }}" onerror="this.src='https://placehold.co/120x60/1e293b/38bdf8?text=Siemens'" class="max-h-12 w-auto opacity-70 hover:opacity-100 transition"></div>
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-xl p-4 border border-slate-700 flex items-center justify-center h-20"><img src="{{ asset('image/abb.png') }}" onerror="this.src='https://placehold.co/120x60/1e293b/38bdf8?text=ABB'" class="max-h-12 w-auto opacity-70 hover:opacity-100 transition"></div>
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-xl p-4 border border-slate-700 flex items-center justify-center h-20"><img src="{{ asset('image/microsoft.png') }}" onerror="this.src='https://placehold.co/120x60/1e293b/38bdf8?text=Microsoft'" class="max-h-12 w-auto opacity-70 hover:opacity-100 transition"></div>
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-xl p-4 border border-slate-700 flex items-center justify-center h-20"><img src="{{ asset('image/aws.png') }}" onerror="this.src='https://placehold.co/120x60/1e293b/38bdf8?text=AWS'" class="max-h-12 w-auto opacity-70 hover:opacity-100 transition"></div>
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-xl p-4 border border-slate-700 flex items-center justify-center h-20"><img src="{{ asset('image/toyota.png') }}" onerror="this.src='https://placehold.co/120x60/1e293b/38bdf8?text=Toyota'" class="max-h-12 w-auto opacity-70 hover:opacity-100 transition"></div>
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-xl p-4 border border-slate-700 flex items-center justify-center h-20"><img src="{{ asset('image/honda.png') }}" onerror="this.src='https://placehold.co/120x60/1e293b/38bdf8?text=Honda'" class="max-h-12 w-auto opacity-70 hover:opacity-100 transition"></div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="relative z-10 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 text-xs font-mono tracking-wider mb-4">WHY PARTNER WITH US</div>
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-3">Exclusive Partner Benefits</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Accelerate your growth with our technology, data, and go-to-market advantages.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl p-6 border border-slate-700 hover:border-cyan-500/40 transition">
                    <div class="w-12 h-12 bg-cyan-500/20 rounded-xl flex items-center justify-center mb-4"><i class="fas fa-database text-cyan-400 text-xl"></i></div>
                    <h3 class="text-xl font-semibold text-white mb-2">Premium Data Access</h3>
                    <p class="text-gray-400 text-sm">Real-time industrial data streams, historical datasets, and analytics APIs for your solutions.</p>
                </div>
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl p-6 border border-slate-700 hover:border-cyan-500/40 transition">
                    <div class="w-12 h-12 bg-cyan-500/20 rounded-xl flex items-center justify-center mb-4"><i class="fas fa-code-branch text-cyan-400 text-xl"></i></div>
                    <h3 class="text-xl font-semibold text-white mb-2">Co-innovation Opportunities</h3>
                    <p class="text-gray-400 text-sm">Joint R&D, pilot programs, and innovation labs to co-create next-gen industrial solutions.</p>
                </div>
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl p-6 border border-slate-700 hover:border-cyan-500/40 transition">
                    <div class="w-12 h-12 bg-cyan-500/20 rounded-xl flex items-center justify-center mb-4"><i class="fas fa-chart-line text-cyan-400 text-xl"></i></div>
                    <h3 class="text-xl font-semibold text-white mb-2">Market Acceleration</h3>
                    <p class="text-gray-400 text-sm">Co-marketing, joint events, and access to 1,200+ manufacturing clients.</p>
                </div>
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl p-6 border border-slate-700 hover:border-cyan-500/40 transition">
                    <div class="w-12 h-12 bg-cyan-500/20 rounded-xl flex items-center justify-center mb-4"><i class="fas fa-headset text-cyan-400 text-xl"></i></div>
                    <h3 class="text-xl font-semibold text-white mb-2">Priority Support</h3>
                    <p class="text-gray-400 text-sm">Dedicated technical account manager, SLA-backed API support, and integration assistance.</p>
                </div>
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl p-6 border border-slate-700 hover:border-cyan-500/40 transition">
                    <div class="w-12 h-12 bg-cyan-500/20 rounded-xl flex items-center justify-center mb-4"><i class="fas fa-shield-alt text-cyan-400 text-xl"></i></div>
                    <h3 class="text-xl font-semibold text-white mb-2">Enterprise-grade Security</h3>
                    <p class="text-gray-400 text-sm">ISO 27001 certified, GDPR compliant, and end-to-end encryption for all data exchange.</p>
                </div>
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl p-6 border border-slate-700 hover:border-cyan-500/40 transition">
                    <div class="w-12 h-12 bg-cyan-500/20 rounded-xl flex items-center justify-center mb-4"><i class="fas fa-globe text-cyan-400 text-xl"></i></div>
                    <h3 class="text-xl font-semibold text-white mb-2">Global Ecosystem</h3>
                    <p class="text-gray-400 text-sm">Network with industry leaders across Southeast Asia, Japan, and Europe.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partnership Options (5 items, grid 3 kolom => 3 + 2, rapi) -->
    <section id="options" class="relative z-10 py-20 border-t border-slate-800">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 text-xs font-mono tracking-wider mb-4">PARTNERSHIP MODELS</div>
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-3">Choose Your Partnership Path</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Select the model that fits your organization's goals and start collaborating today.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Corporate -->
                <div class="group bg-slate-800/30 backdrop-blur-sm rounded-2xl p-5 border border-slate-700 hover:border-cyan-500/50 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center mb-3"><i class="fas fa-building text-white text-lg"></i></div>
                    <h3 class="text-lg font-bold text-white mb-1">Corporate</h3>
                    <p class="text-gray-400 text-xs mb-3">For manufacturers & enterprises.</p>
                    <ul class="space-y-1.5 text-xs text-gray-300 mb-4">
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-cyan-400 text-xs"></i> Enterprise IIoT deployment</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-cyan-400 text-xs"></i> OEE & predictive maintenance</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-cyan-400 text-xs"></i> Custom analytics dashboard</li>
                    </ul>
                    <a href="{{ route('contact-partner', ['type' => 'corporate']) }}" class="inline-flex items-center justify-center w-full px-3 py-1.5 bg-cyan-500/20 border border-cyan-500/30 rounded-lg text-cyan-400 text-sm font-medium hover:bg-cyan-500/30 transition">Get Started →</a>
                </div>
                <!-- Technology -->
                <div class="group bg-slate-800/30 backdrop-blur-sm rounded-2xl p-5 border border-slate-700 hover:border-cyan-500/50 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center mb-3"><i class="fas fa-microchip text-white text-lg"></i></div>
                    <h3 class="text-lg font-bold text-white mb-1">Technology</h3>
                    <p class="text-gray-400 text-xs mb-3">For software & IoT providers.</p>
                    <ul class="space-y-1.5 text-xs text-gray-300 mb-4">
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-cyan-400 text-xs"></i> API & data exchange</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-cyan-400 text-xs"></i> Co-development & integration</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-cyan-400 text-xs"></i> Innovation lab access</li>
                    </ul>
                    <a href="{{ route('contact-partner', ['type' => 'technology']) }}" class="inline-flex items-center justify-center w-full px-3 py-1.5 bg-cyan-500/20 border border-cyan-500/30 rounded-lg text-cyan-400 text-sm font-medium hover:bg-cyan-500/30 transition">Get Started →</a>
                </div>
                <!-- Research -->
                <div class="group bg-slate-800/30 backdrop-blur-sm rounded-2xl p-5 border border-slate-700 hover:border-cyan-500/50 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center mb-3"><i class="fas fa-graduation-cap text-white text-lg"></i></div>
                    <h3 class="text-lg font-bold text-white mb-1">Research</h3>
                    <p class="text-gray-400 text-xs mb-3">For universities & institutions.</p>
                    <ul class="space-y-1.5 text-xs text-gray-300 mb-4">
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-cyan-400 text-xs"></i> Real-time industrial data</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-cyan-400 text-xs"></i> Collaborative research projects</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-cyan-400 text-xs"></i> Student internship programs</li>
                    </ul>
                    <a href="{{ route('contact-partner', ['type' => 'research']) }}" class="inline-flex items-center justify-center w-full px-3 py-1.5 bg-cyan-500/20 border border-cyan-500/30 rounded-lg text-cyan-400 text-sm font-medium hover:bg-cyan-500/30 transition">Get Started →</a>
                </div>
                <!-- NGO -->
                <div class="group bg-slate-800/30 backdrop-blur-sm rounded-2xl p-5 border border-slate-700 hover:border-cyan-500/50 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center mb-3"><i class="fas fa-hand-holding-heart text-white text-lg"></i></div>
                    <h3 class="text-lg font-bold text-white mb-1">NGO & Non-profit</h3>
                    <p class="text-gray-400 text-xs mb-3">For sustainability organizations.</p>
                    <ul class="space-y-1.5 text-xs text-gray-300 mb-4">
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-cyan-400 text-xs"></i> Data for impact reporting</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-cyan-400 text-xs"></i> Sustainability analytics</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-cyan-400 text-xs"></i> Joint awareness campaigns</li>
                    </ul>
                    <a href="{{ route('contact-partner', ['type' => 'ngo']) }}" class="inline-flex items-center justify-center w-full px-3 py-1.5 bg-cyan-500/20 border border-cyan-500/30 rounded-lg text-cyan-400 text-sm font-medium hover:bg-cyan-500/30 transition">Get Started →</a>
                </div>
                <!-- Government -->
                <div class="group bg-slate-800/30 backdrop-blur-sm rounded-2xl p-5 border border-slate-700 hover:border-cyan-500/50 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center mb-3"><i class="fas fa-landmark text-white text-lg"></i></div>
                    <h3 class="text-lg font-bold text-white mb-1">Government</h3>
                    <p class="text-gray-400 text-xs mb-3">For public agencies & ministries.</p>
                    <ul class="space-y-1.5 text-xs text-gray-300 mb-4">
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-cyan-400 text-xs"></i> National industrial dashboards</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-cyan-400 text-xs"></i> Policy support & analytics</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-cyan-400 text-xs"></i> Smart city / industrial zone solutions</li>
                    </ul>
                    <a href="{{ route('contact-partner', ['type' => 'government']) }}" class="inline-flex items-center justify-center w-full px-3 py-1.5 bg-cyan-500/20 border border-cyan-500/30 rounded-lg text-cyan-400 text-sm font-medium hover:bg-cyan-500/30 transition">Get Started →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section id="contact" class="relative z-10 py-20 bg-gradient-to-r from-cyan-500/10 to-blue-600/10">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Ready to Partner?</h2>
            <p class="text-gray-300 text-lg mb-8">Let's discuss how we can accelerate your industrial digital transformation together.</p>
            <a href="{{ route('contact-partner') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-gradient-to-r from-cyan-500 to-blue-600 text-white rounded-lg font-semibold hover:shadow-lg transition transform hover:-translate-y-0.5">
                Contact Partnership Team <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </section>
</div>
</x-app-layout>

