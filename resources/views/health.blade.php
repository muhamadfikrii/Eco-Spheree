<x-app-layout>
<div class="flex-1 pb-32" x-data="{ activeTab: 'vibration' }">
    <!-- Background image dengan URL yang lebih reliable -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1581092335871-4c3d9da2b8a9?w=1600&q=80" 
             alt="Industrial background" 
             class="w-full h-full object-cover opacity-20">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-slate-900/80 to-slate-950"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgdmlld0JveD0iMCAwIDgwIDgwIj48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9InJnYmEoNTYsIDE4OSwgMjQ4LCAwLjA0KSIgc3Ryb2tlLXdpZHRoPSIwLjgiIGQ9Ik0wIDQwTDQwIDBNNDAgODBMODAgNDBNODAgNDBMMTAgNzAiLz48L3N2Zz4=')] opacity-30"></div>
        <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-slate-950 to-transparent"></div>
    </div>

    <!-- Hero Section (sama seperti sebelumnya) -->
    <section class="relative z-10 pt-24 lg:pt-32 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 text-xs font-mono tracking-wider mb-6 backdrop-blur-sm">
                        <i class="fas fa-heartbeat text-xs"></i> MACHINE HEALTH INTELLIGENCE
                    </div>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-white leading-tight tracking-tight">
                        Keep Your Machines
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">Healthy, Productive, and Reliable</span>
                    </h1>
                    <p class="text-gray-300 text-lg mt-6 leading-relaxed">
                        Unplanned downtime costs manufacturers an average of <span class="text-cyan-400 font-semibold">$260,000 per hour</span>. Our AI-powered health monitoring predicts failures up to 48 hours in advance — so you can act before production stops.
                    </p>
                    <div class="flex flex-wrap gap-4 mt-8">
                        <a href="#how-it-works" class="px-6 py-3 bg-gradient-to-r from-cyan-500 to-blue-600 text-white rounded-lg font-semibold shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 transition transform hover:-translate-y-1">
                            See How It Works <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                        <a href="#case-study" class="px-6 py-3 border border-gray-500 text-gray-300 rounded-lg font-semibold hover:bg-white/10 transition backdrop-blur-sm">
                            Read Success Story
                        </a>
                    </div>
                    <div class="flex flex-wrap gap-6 mt-10 text-sm text-gray-400">
                        <div class="flex items-center gap-2"><i class="fas fa-chart-line text-cyan-400"></i> 94% prediction accuracy</div>
                        <div class="flex items-center gap-2"><i class="fas fa-clock text-cyan-400"></i> 48h advance warning</div>
                        <div class="flex items-center gap-2"><i class="fas fa-chart-simple text-cyan-400"></i> 45% less downtime</div>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-slate-800/40 backdrop-blur-xl rounded-2xl border border-slate-700 p-6 shadow-2xl overflow-hidden">
                        <div class="relative h-32 mb-4 rounded-xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1581092335871-4c3d9da2b8a9?w=600&q=80" alt="Industrial machine" class="w-full h-full object-cover opacity-80">
                            <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/20 to-transparent"></div>
                        </div>
                        <div class="flex items-center gap-2 mb-4"><div class="w-3 h-3 rounded-full bg-red-500"></div><div class="w-3 h-3 rounded-full bg-yellow-500"></div><div class="w-3 h-3 rounded-full bg-green-500"></div><span class="text-gray-400 text-xs ml-2">live-predictions</span></div>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center border-b border-slate-700 pb-2"><span class="text-gray-300">Motor M-1023 Health</span><span class="text-green-400 font-mono">98%</span><div class="w-24 h-1.5 bg-slate-700 rounded-full overflow-hidden"><div class="bg-green-500 h-full rounded-full" style="width:98%"></div></div></div>
                            <div class="flex justify-between items-center border-b border-slate-700 pb-2"><span class="text-gray-300">Conveyor C-7 Health</span><span class="text-yellow-400 font-mono">74%</span><div class="w-24 h-1.5 bg-slate-700 rounded-full overflow-hidden"><div class="bg-yellow-500 h-full rounded-full" style="width:74%"></div></div></div>
                            <div class="flex justify-between items-center border-b border-slate-700 pb-2"><span class="text-gray-300">Hydraulic Pump P-45</span><span class="text-red-400 font-mono">47%</span><div class="w-24 h-1.5 bg-slate-700 rounded-full overflow-hidden"><div class="bg-red-500 h-full rounded-full" style="width:47%"></div></div></div>
                        </div>
                        <div class="mt-4 text-center text-xs text-cyan-400">🔔 Next predicted failure: 12 days (Hydraulic Pump)</div>
                    </div>
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-cyan-500/20 rounded-full blur-2xl -z-10"></div>
                    <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-blue-600/20 rounded-full blur-2xl -z-10"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Machine Health Matters (tetap) -->
    <section class="relative z-10 py-20 border-y border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 text-xs font-mono tracking-wider mb-4">THE PROBLEM</div>
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Why Machine Health Is Your Factory's Biggest Blind Spot</h2>
                <p class="text-gray-400 max-w-3xl mx-auto text-lg">Traditional maintenance strategies — reactive or time-based — simply don't work in today's fast-paced manufacturing environment.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-slate-800/30 rounded-2xl p-6 border border-slate-700 text-center"><div class="w-16 h-16 bg-red-500/20 rounded-xl flex items-center justify-center mx-auto mb-4"><i class="fas fa-clock text-red-400 text-2xl"></i></div><h3 class="text-xl font-bold text-white mb-3">Reactive Maintenance</h3><p class="text-gray-400">Fix after failure. High emergency repair costs, unplanned downtime, and rushed part replacements.</p></div>
                <div class="bg-slate-800/30 rounded-2xl p-6 border border-slate-700 text-center"><div class="w-16 h-16 bg-yellow-500/20 rounded-xl flex items-center justify-center mx-auto mb-4"><i class="fas fa-calendar-week text-yellow-400 text-2xl"></i></div><h3 class="text-xl font-bold text-white mb-3">Time-Based Maintenance</h3><p class="text-gray-400">Replace parts on schedule — often too early (waste) or too late (failure). Inefficient and costly.</p></div>
                <div class="bg-slate-800/30 rounded-2xl p-6 border border-slate-700 text-center"><div class="w-16 h-16 bg-cyan-500/20 rounded-xl flex items-center justify-center mx-auto mb-4"><i class="fas fa-brain text-cyan-400 text-2xl"></i></div><h3 class="text-xl font-bold text-white mb-3">Predictive Maintenance (Our Solution)</h3><p class="text-gray-400">AI analyzes real-time data to predict failures before they happen. Fix only when needed. Maximize asset life.</p></div>
            </div>
        </div>
    </section>

    <!-- How It Works (diperbaiki agar card sejajar) -->
    <section id="how-it-works" class="relative z-10 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 text-xs font-mono tracking-wider mb-4">HOW IT WORKS</div>
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">From Sensor to Action in Three Steps</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Our platform continuously learns from your machines, turning raw data into actionable insights.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="relative h-full">
                    <div class="absolute -top-4 -left-4 w-12 h-12 bg-cyan-500 rounded-full flex items-center justify-center text-white font-bold text-xl z-10">1</div>
                    <div class="bg-slate-800/40 rounded-2xl p-6 pt-8 border border-slate-700 ml-4 h-full flex flex-col">
                        <div class="w-14 h-14 bg-cyan-500/20 rounded-xl flex items-center justify-center mb-4"><i class="fas fa-microchip text-cyan-400 text-2xl"></i></div>
                        <h3 class="text-xl font-bold text-white mb-2">Collect Data</h3>
                        <p class="text-gray-400 flex-1">IIoT sensors continuously monitor vibration, temperature, pressure, and power consumption across your production line.</p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="relative h-full">
                    <div class="absolute -top-4 -left-4 w-12 h-12 bg-cyan-500 rounded-full flex items-center justify-center text-white font-bold text-xl z-10">2</div>
                    <div class="bg-slate-800/40 rounded-2xl p-6 pt-8 border border-slate-700 ml-4 h-full flex flex-col">
                        <div class="w-14 h-14 bg-cyan-500/20 rounded-xl flex items-center justify-center mb-4"><i class="fas fa-brain text-cyan-400 text-2xl"></i></div>
                        <h3 class="text-xl font-bold text-white mb-2">AI Analysis</h3>
                        <p class="text-gray-400 flex-1">Machine learning models detect anomalies, identify patterns, and predict remaining useful life (RUL) with 94% accuracy.</p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="relative h-full">
                    <div class="absolute -top-4 -left-4 w-12 h-12 bg-cyan-500 rounded-full flex items-center justify-center text-white font-bold text-xl z-10">3</div>
                    <div class="bg-slate-800/40 rounded-2xl p-6 pt-8 border border-slate-700 ml-4 h-full flex flex-col">
                        <div class="w-14 h-14 bg-cyan-500/20 rounded-xl flex items-center justify-center mb-4"><i class="fas fa-bell text-cyan-400 text-2xl"></i></div>
                        <h3 class="text-xl font-bold text-white mb-2">Actionable Alerts</h3>
                        <p class="text-gray-400 flex-1">Receive prioritized recommendations: schedule maintenance, order parts, or adjust operations — with enough lead time to avoid disruption.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Study dan bagian selanjutnya sama seperti sebelumnya -->
    <section id="case-study" class="relative z-10 py-20 bg-gradient-to-r from-cyan-500/10 to-blue-600/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 text-xs font-mono tracking-wider mb-4">CASE STUDY</div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">How a Major Automotive Plant Saved $2.3M in One Year</h2>
                    <p class="text-gray-300 text-lg mb-6 leading-relaxed">A leading automotive manufacturer installed our health monitoring system on 12 critical assembly line motors. Within 6 months, the AI predicted bearing failure on Motor M-1023 — 10 days before failure. The plant scheduled a planned replacement during a scheduled shift change, avoiding 8 hours of unplanned downtime and saving over $180,000 from just that one alert.</p>
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="bg-slate-800/50 rounded-xl p-3 text-center"><div class="text-2xl font-bold text-cyan-400">45%</div><div class="text-gray-400 text-xs">Downtime Reduction</div></div>
                        <div class="bg-slate-800/50 rounded-xl p-3 text-center"><div class="text-2xl font-bold text-cyan-400">$2.3M</div><div class="text-gray-400 text-xs">Annual Savings</div></div>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-400"><i class="fas fa-quote-left text-cyan-400"></i> "We've cut emergency maintenance calls by 70% and extended motor life by 30%. This isn't just software — it's peace of mind." — Plant Manager</div>
                </div>
                <div class="bg-slate-800/40 rounded-2xl p-6 border border-slate-700">
                    <div class="flex items-center gap-3 mb-4"><div class="w-3 h-3 rounded-full bg-green-500 animate-pulse"></div><span class="text-white font-mono text-sm">Motor M-1023 Vibration Trend (Before Failure)</span></div>
                    <canvas id="caseVibrationChart" height="200"></canvas>
                    <div class="mt-4 text-xs text-gray-400 text-center">Red line shows AI prediction threshold. Alert triggered at Day 8, preventing failure.</div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative z-10 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">What You Get with NovaForge Health</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">A complete ecosystem for proactive asset management.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-x-12 gap-y-6 max-w-4xl mx-auto">
                <div class="flex items-start gap-3"><div class="w-6 h-6 bg-cyan-500/20 rounded-full flex items-center justify-center mt-0.5"><i class="fas fa-check text-cyan-400 text-xs"></i></div><div><span class="text-white font-medium">Real-time dashboards</span><p class="text-gray-400 text-sm">Live health scores for every asset, anywhere in the world.</p></div></div>
                <div class="flex items-start gap-3"><div class="w-6 h-6 bg-cyan-500/20 rounded-full flex items-center justify-center mt-0.5"><i class="fas fa-check text-cyan-400 text-xs"></i></div><div><span class="text-white font-medium">AI failure predictions</span><p class="text-gray-400 text-sm">94% accurate, 48-hour advance warnings with recommended actions.</p></div></div>
                <div class="flex items-start gap-3"><div class="w-6 h-6 bg-cyan-500/20 rounded-full flex items-center justify-center mt-0.5"><i class="fas fa-check text-cyan-400 text-xs"></i></div><div><span class="text-white font-medium">Maintenance scheduling</span><p class="text-gray-400 text-sm">Automatically generate work orders based on asset health.</p></div></div>
                <div class="flex items-start gap-3"><div class="w-6 h-6 bg-cyan-500/20 rounded-full flex items-center justify-center mt-0.5"><i class="fas fa-check text-cyan-400 text-xs"></i></div><div><span class="text-white font-medium">Root cause analysis</span><p class="text-gray-400 text-sm">Understand why failures happen and prevent recurrence.</p></div></div>
                <div class="flex items-start gap-3"><div class="w-6 h-6 bg-cyan-500/20 rounded-full flex items-center justify-center mt-0.5"><i class="fas fa-check text-cyan-400 text-xs"></i></div><div><span class="text-white font-medium">Mobile alerts</span><p class="text-gray-400 text-sm">Get push notifications on your phone, even when away from the control room.</p></div></div>
                <div class="flex items-start gap-3"><div class="w-6 h-6 bg-cyan-500/20 rounded-full flex items-center justify-center mt-0.5"><i class="fas fa-check text-cyan-400 text-xs"></i></div><div><span class="text-white font-medium">Historical trends</span><p class="text-gray-400 text-sm">Track degradation over time to optimize replacement cycles.</p></div></div>
            </div>
        </div>
    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('caseVibrationChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Day 1', 'Day 3', 'Day 5', 'Day 7', 'Day 8', 'Day 9', 'Day 10 (Predicted)'],
                datasets: [
                    { label: 'Actual Vibration (mm/s)', data: [2.1, 2.4, 2.9, 3.7, 4.2, 5.1, null], borderColor: '#06b6d4', backgroundColor: 'rgba(6,182,212,0.1)', tension: 0.3, fill: true, pointBackgroundColor: '#38bdf8', pointBorderColor: '#fff' },
                    { label: 'Alert Threshold', data: [4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5], borderColor: '#ef4444', borderDash: [5, 5], fill: false, pointRadius: 0 }
                ]
            },
            options: { responsive: true, maintainAspectRatio: true, plugins: { legend: { labels: { color: '#9ca3af' } } }, scales: { y: { grid: { color: '#1e293b' }, ticks: { color: '#9ca3af' } }, x: { ticks: { color: '#9ca3af' } } } }
        });
    });
</script>
</x-app-layout>