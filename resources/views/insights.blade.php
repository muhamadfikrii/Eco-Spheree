<x-app-layout>
<div class="relative min-h-screen bg-slate-950 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-slate-900/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgdmlld0JveD0iMCAwIDgwIDgwIj48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9InJnYmEoNTYsIDE4OSwgMjQ4LCAwLjA1KSIgc3Ryb2tlLXdpZHRoPSIwLjUiIGQ9Ik0wIDQwTDQwIDBNNDAgODBMODAgNDAiLz48L3N2Zz4=')] opacity-30"></div>
        <div class="absolute top-1/4 -left-20 w-96 h-96 bg-cyan-500/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 -right-20 w-96 h-96 bg-blue-600/20 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-slate-950 to-transparent"></div>
    </div>

    <div class="relative z-10 pb-24">
        <div class="pt-24 lg:pt-32 pb-16 lg:pb-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 text-xs font-mono tracking-wider mb-6">
                            <i class="fas fa-lightbulb text-xs"></i> AI-POWERED INSIGHTS
                        </div>
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-white leading-tight tracking-tight">
                            Turn Data into 
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-cyan-400 bg-300 animate-gradient">Actionable Intelligence</span>
                        </h1>
                        <p class="text-gray-300 text-lg mt-6 leading-relaxed max-w-lg">
                            Go beyond dashboards. Get clear, prioritized recommendations to improve OEE, reduce downtime, and cut energy costs — all driven by real-time AI analysis.
                        </p>
                        <div class="flex flex-wrap gap-4 mt-8">
                            <a href="#OEE" class="px-6 py-3 bg-gradient-to-r from-cyan-500 to-blue-600 text-white rounded-xl font-semibold shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 transition transform hover:-translate-y-1">
                                Explore Insights <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                        <div class="flex flex-wrap gap-6 mt-10 text-sm text-gray-400">
                            <div class="flex items-center gap-2"><i class="fas fa-chart-line text-cyan-400"></i> <span>87.3% avg OEE</span></div>
                            <div class="flex items-center gap-2"><i class="fas fa-chart-simple text-cyan-400"></i> <span>12 active recommendations</span></div>
                            <div class="flex items-center gap-2"><i class="fas fa-clock text-cyan-400"></i> <span>Real-time updates</span></div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="bg-slate-800/40 backdrop-blur-xl rounded-2xl border border-slate-700 p-4 shadow-2xl">
                            <div class="flex items-center gap-2 mb-3"><div class="w-3 h-3 rounded-full bg-red-500"></div><div class="w-3 h-3 rounded-full bg-yellow-500"></div><div class="w-3 h-3 rounded-full bg-green-500"></div><span class="text-gray-400 text-xs ml-2">insights-dashboard</span></div>
                            <div class="h-32 bg-gradient-to-r from-cyan-500/20 to-blue-600/20 rounded-lg flex items-center justify-center relative overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center gap-1"><div class="w-8 h-20 bg-cyan-400/30 rounded-t-lg"></div><div class="w-8 h-32 bg-cyan-400/40 rounded-t-lg"></div><div class="w-8 h-24 bg-cyan-400/30 rounded-t-lg"></div><div class="w-8 h-36 bg-cyan-400/50 rounded-t-lg"></div><div class="w-8 h-28 bg-cyan-400/30 rounded-t-lg"></div></div>
                                <span class="relative z-10 text-white text-xs">Live OEE: 87.3%</span>
                            </div>
                            <div class="mt-3 grid grid-cols-3 gap-2 text-center text-xs"><div><span class="text-cyan-400 block font-bold">+5.2%</span><span class="text-gray-500">vs last month</span></div><div><span class="text-cyan-400 block font-bold">94%</span><span class="text-gray-500">accuracy</span></div><div><span class="text-cyan-400 block font-bold">&lt;100ms</span><span class="text-gray-500">latency</span></div></div>
                        </div>
                        <div class="absolute -top-4 -right-4 w-24 h-24 bg-cyan-500/20 rounded-full blur-2xl -z-10"></div>
                        <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-blue-600/20 rounded-full blur-2xl -z-10"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" id="OEE">
            <div class="grid lg:grid-cols-2 gap-6 mb-12">

                <div class="bg-slate-800/40 backdrop-blur-md rounded-2xl p-5 border border-slate-700 hover:border-cyan-500/30 transition">
                    <div class="flex justify-between items-center mb-4">
                        <div class="flex items-center gap-2">
                            <h3 class="text-white font-semibold"><i class="fas fa-chart-line text-cyan-400 mr-2"></i> OEE Trend (Last 6 Months)</h3>
                            <span class="relative flex h-2 w-2"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span><span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span></span>
                            <span class="text-xs text-green-400 font-mono">LIVE</span>
                        </div>
                        <select class="bg-slate-700 text-xs text-white rounded-lg px-2 py-1 border border-slate-600"><option>Last 6 months</option><option>Last year</option></select>
                    </div>
                    <canvas id="oeeChart" height="200"></canvas>
        <div id="oeeLastUpdate" class="text-right text-xs text-gray-500 mt-2">Last update: just now</div>

                </div>
                <div class="bg-slate-800/40 backdrop-blur-md rounded-2xl p-5 border border-slate-700">
                    <h3 class="text-white font-semibold mb-4"><i class="fas fa-chart-pie text-cyan-400 mr-2"></i> Downtime Causes</h3>
                    <canvas id="downtimeChart" height="200"></canvas>
                    <p class="text-xs text-gray-500 mt-3">Mechanical issues contribute 42% of total downtime — focus improvement here.</p>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 gap-6 mb-12">
                <div class="lg:col-span-2 bg-slate-800/40 backdrop-blur-md rounded-2xl p-5 border border-slate-700">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2">
                            <h3 class="text-white font-semibold"><i class="fas fa-industry text-cyan-400 mr-2"></i> Weekly Production Performance</h3>
                            <div class="group relative"><i class="fas fa-question-circle text-gray-500 text-xs cursor-help"></i><div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 hidden group-hover:block bg-slate-800 text-white text-xs rounded-lg px-3 py-2 w-64 border border-slate-600">Actual output (cyan) vs target (gray). Improvement after Week 2.</div></div>
                        </div>
                        <div class="text-xs text-gray-400">Unit: thousand units</div>
                    </div>
                    <canvas id="productionChart" height="180"></canvas>
                    <div class="mt-3 grid grid-cols-2 gap-2 text-xs text-gray-400"><div>✅ Weeks 3-4: Exceeded target after adjustment</div><div class="text-yellow-400">⚠️ Week 1-2: Below target due to material shortage</div></div>
                    <div class="mt-2 text-xs text-cyan-400">Insight: Addressing material supply improved output by 8% in Week 4.</div>
                </div>
                <div class="bg-slate-800/40 backdrop-blur-md rounded-2xl p-5 border border-slate-700">
                    <h3 class="text-white font-semibold mb-3"><i class="fas fa-bell text-cyan-400 mr-2"></i> Active Alerts</h3>
                    <div class="space-y-3">
                        <div class="flex items-start gap-3 p-3 bg-red-500/10 rounded-xl border-l-2 border-red-500"><i class="fas fa-exclamation-triangle text-red-400 mt-0.5"></i><div><div class="text-white text-sm">High Vibration - Plant A</div><div class="text-gray-400 text-xs">2h ago · Predictive maintenance recommended</div></div></div>
                        <div class="flex items-start gap-3 p-3 bg-yellow-500/10 rounded-xl border-l-2 border-yellow-500"><i class="fas fa-clock text-yellow-400 mt-0.5"></i><div><div class="text-white text-sm">OEE Below Target - Line 3</div><div class="text-gray-400 text-xs">Yesterday · 74% vs target 85%</div></div></div>
                        <div class="flex items-start gap-3 p-3 bg-blue-500/10 rounded-xl border-l-2 border-blue-500"><i class="fas fa-microchip text-blue-400 mt-0.5"></i><div><div class="text-white text-sm">Firmware Update Available</div><div class="text-gray-400 text-xs">7 sensors pending update</div></div></div>
                    </div>
                </div>
            </div>

            <div class="mb-12">
                <div class="flex items-center gap-3 mb-5"><i class="fas fa-lightbulb text-cyan-400 text-xl"></i><h2 class="text-2xl font-bold text-white">Key Operational Insights</h2><span class="text-xs text-gray-400 bg-slate-800 px-2 py-0.5 rounded-full">AI-Generated</span></div>
                <div class="grid md:grid-cols-2 gap-5">
                    <div class="bg-slate-800/40 backdrop-blur-sm rounded-xl p-5 border border-slate-700 hover:border-cyan-500/40 transition group">
                        <div class="flex items-start gap-3"><div class="p-2 bg-cyan-500/20 rounded-lg"><i class="fas fa-chart-line text-cyan-400"></i></div><div><h3 class="text-white font-semibold">OEE Improvement Opportunity</h3><p class="text-gray-400 text-sm mt-1">Assembly Line 2 at 76% OEE (9% below target). Root cause: material supply delays.</p><div class="mt-3"><span class="text-cyan-400 text-xs cursor-pointer group-hover:underline">Review material flow →</span></div></div></div>
                    </div>
                    <div class="bg-slate-800/40 backdrop-blur-sm rounded-xl p-5 border border-slate-700 hover:border-cyan-500/40 transition group">
                        <div class="flex items-start gap-3"><div class="p-2 bg-red-500/20 rounded-lg"><i class="fas fa-exclamation-triangle text-red-400"></i></div><div><h3 class="text-white font-semibold">Predictive Alert: Motor M-1023</h3><p class="text-gray-400 text-sm mt-1">Vibration indicates bearing wear. Failure probability 87% within 10 days. Potential cost $45K.</p><div class="mt-3"><span class="text-red-400 text-xs cursor-pointer group-hover:underline">Schedule maintenance →</span></div></div></div>
                    </div>
                    <div class="bg-slate-800/40 backdrop-blur-sm rounded-xl p-5 border border-slate-700 hover:border-cyan-500/40 transition group">
                        <div class="flex items-start gap-3"><div class="p-2 bg-emerald-500/20 rounded-lg"><i class="fas fa-leaf text-emerald-400"></i></div><div><h3 class="text-white font-semibold">Energy Saving Potential</h3><p class="text-gray-400 text-sm mt-1">Packaging line consumes 12% more energy. Auto shut-off could save $18K/year.</p><div class="mt-3"><span class="text-emerald-400 text-xs cursor-pointer group-hover:underline">Optimize shift scheduling →</span></div></div></div>
                    </div>
                    <div class="bg-slate-800/40 backdrop-blur-sm rounded-xl p-5 border border-slate-700 hover:border-cyan-500/40 transition group">
                        <div class="flex items-start gap-3"><div class="p-2 bg-yellow-500/20 rounded-lg"><i class="fas fa-clock text-yellow-400"></i></div><div><h3 class="text-white font-semibold">Production Bottleneck Detected</h3><p class="text-gray-400 text-sm mt-1">Quality Control cycle time 23% higher. Reduces throughput by 8%.</p><div class="mt-3"><span class="text-yellow-400 text-xs cursor-pointer group-hover:underline">Add parallel inspection →</span></div></div></div>
                    </div>
                </div>
                <div class="text-center mt-5"><span class="text-xs text-gray-500">Powered by real-time data analysis & AI models</span></div>
            </div>

            <div class="mb-12">
                <div class="flex items-center gap-3 mb-5"><i class="fas fa-brain text-cyan-400 text-xl"></i><h2 class="text-2xl font-bold text-white">Predictive Maintenance Details</h2><span class="text-xs text-gray-400 bg-slate-800 px-2 py-0.5 rounded-full">AI Powered</span></div>
                <div class="grid md:grid-cols-2 gap-5">
                    <div class="bg-slate-800/40 backdrop-blur-sm rounded-xl border border-slate-700 p-5"><div class="flex items-start gap-4"><div class="p-2 bg-red-500/20 rounded-lg"><i class="fas fa-exclamation-triangle text-red-400"></i></div><div><div class="text-white font-semibold">High Risk: Motor M-1023</div><p class="text-gray-400 text-sm mt-1">Vibration pattern indicates bearing wear. Failure probability: 87% within 10 days.</p><div class="mt-3"><span class="text-red-400 text-xs">⚠️ Action required</span> <span class="text-cyan-400 text-xs ml-3 cursor-pointer">Schedule →</span></div></div></div></div>
                    <div class="bg-slate-800/40 backdrop-blur-sm rounded-xl border border-slate-700 p-5"><div class="flex items-start gap-4"><div class="p-2 bg-yellow-500/20 rounded-lg"><i class="fas fa-clock text-yellow-400"></i></div><div><div class="text-white font-semibold">Upcoming: Conveyor Belt C-7</div><p class="text-gray-400 text-sm mt-1">Temperature rising. Estimated useful life: 14 days. Plan replacement.</p><div class="mt-3"><span class="text-yellow-400 text-xs">⚠️ Monitor</span> <span class="text-cyan-400 text-xs ml-3 cursor-pointer">View →</span></div></div></div></div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 border-t border-slate-800 mt-8">
            <div class="text-center mb-10"><h2 class="text-3xl md:text-4xl font-bold text-white mb-3">Built for <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">Industry 4.0</span></h2><p class="text-gray-400 max-w-2xl mx-auto">IIoT, predictive AI, digital twin, and energy optimization — one platform for total control.</p></div>
            <div class="grid md:grid-cols-4 gap-5 text-center"><div><i class="fas fa-microchip text-cyan-400 text-3xl mb-3 block"></i><h3 class="text-white font-semibold">IIoT Integration</h3><p class="text-gray-400 text-sm">1,200+ assets, sub-100ms latency</p></div><div><i class="fas fa-brain text-cyan-400 text-3xl mb-3 block"></i><h3 class="text-white font-semibold">Predictive AI</h3><p class="text-gray-400 text-sm">94% accuracy, 48h warnings</p></div><div><i class="fas fa-cube text-cyan-400 text-3xl mb-3 block"></i><h3 class="text-white font-semibold">Digital Twin</h3><p class="text-gray-400 text-sm">Simulate without risk</p></div><div><i class="fas fa-charging-station text-cyan-400 text-3xl mb-3 block"></i><h3 class="text-white font-semibold">Energy Saving</h3><p class="text-gray-400 text-sm">Up to -23% consumption</p></div></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 border-t border-slate-800">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div><div class="text-cyan-400 font-mono text-sm mb-3">CASE STUDY · 2025</div><h2 class="text-3xl font-bold text-white mb-4">Electronics Manufacturer <span class="text-cyan-400">Cuts Downtime by 45%</span></h2><p class="text-gray-300 mb-5">A global electronics company deployed our predictive maintenance solution across 8 SMT lines in Batam. Within 6 months, OEE jumped from 72% to 87%, energy use dropped 19%, and ROI was achieved in under 5 months.</p><div class="flex flex-wrap gap-3"><span class="px-3 py-1 bg-cyan-500/20 text-cyan-400 rounded-full text-xs">12 critical failures prevented</span><span class="px-3 py-1 bg-emerald-500/20 text-emerald-400 rounded-full text-xs">$1.8M annual savings</span></div><div class="mt-6"><a href="#" class="text-cyan-400 hover:underline inline-flex items-center gap-1">Download full report <i class="fas fa-download text-xs"></i></a></div></div>
                <div class="bg-slate-800/30 rounded-2xl p-5 border border-slate-700"><div class="flex justify-between text-sm mb-4"><span class="text-gray-400">Before vs After</span><span class="text-cyan-400">After</span><span class="text-gray-500">Before</span></div><div class="space-y-4"><div><div class="flex justify-between text-xs mb-1"><span>OEE</span><span>72% → 87%</span></div><div class="w-full bg-slate-700 rounded-full h-2"><div class="bg-gradient-to-r from-cyan-500 to-blue-600 h-2 rounded-full" style="width:87%"></div><div class="bg-slate-500 h-2 rounded-full mt-[-2px] opacity-30" style="width:72%"></div></div></div><div><div class="flex justify-between text-xs mb-1"><span>Downtime</span><span>13.5% → 7.4%</span></div><div class="w-full bg-slate-700 rounded-full h-2"><div class="bg-gradient-to-r from-red-500 to-orange-500 h-2 rounded-full" style="width:100%"></div><div class="bg-slate-600 h-2 rounded-full mt-[-2px] opacity-30" style="width:55%"></div></div></div><div><div class="flex justify-between text-xs mb-1"><span>MTBF</span><span>312h → 498h</span></div><div class="w-full bg-slate-700 rounded-full h-2"><div class="bg-gradient-to-r from-emerald-500 to-cyan-500 h-2 rounded-full" style="width:100%"></div><div class="bg-slate-600 h-2 rounded-full mt-[-2px] opacity-30" style="width:63%"></div></div></div></div></div>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes gradient {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    .bg-300 { background-size: 300% 300%; }
    .animate-gradient { animation: gradient 6s ease infinite; }
</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // OEE Chart
        const oeeCtx = document.getElementById('oeeChart').getContext('2d');
        const oeeChart = new Chart(oeeCtx, {
            type: 'line',
            data: { labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul (est)'], datasets: [{ label: 'OEE (%)', data: [78,81,83,85,86,87.3,88.1], borderColor: '#06b6d4', backgroundColor: 'rgba(6,182,212,0.1)', tension: 0.4, fill: true, pointBackgroundColor: '#38bdf8', pointBorderColor: '#fff', pointRadius: 4 }] },
            options: { responsive: true, maintainAspectRatio: true, plugins: { legend: { labels: { color: '#9ca3af' } } }, scales: { y: { grid: { color: '#1e293b' }, ticks: { color: '#9ca3af', callback: (v) => v + '%' } }, x: { ticks: { color: '#9ca3af' } } } }
        });
        // Downtime Chart
        new Chart(document.getElementById('downtimeChart').getContext('2d'), {
            type: 'doughnut',
            data: { labels: ['Mechanical','Electrical','Operator','Material','Scheduled'], datasets: [{ data: [42,23,18,10,7], backgroundColor: ['#ef4444','#f97316','#eab308','#3b82f6','#10b981'], borderWidth: 0 }] },
            options: { responsive: true, plugins: { legend: { position: 'bottom', labels: { color: '#9ca3af' } } } }
        });
        // Production Chart
        new Chart(document.getElementById('productionChart').getContext('2d'), {
            type: 'bar',
            data: { labels: ['Week 1','Week 2','Week 3','Week 4','Week 5','Week 6','Week 7','Week 8'], datasets: [{ label: 'Actual Output', data: [23800,24500,25800,26400,27100,27800,28200,28600], backgroundColor: '#06b6d4', borderRadius: 6 }, { label: 'Target', data: [25000,25000,26000,26000,27000,27500,28000,28500], backgroundColor: '#475569', borderRadius: 6 }] },
            options: { responsive: true, plugins: { legend: { labels: { color: '#9ca3af' } }, tooltip: { callbacks: { label: (ctx) => `${ctx.dataset.label}: ${ctx.raw.toLocaleString()} units` } } }, scales: { y: { grid: { color: '#1e293b' }, ticks: { color: '#9ca3af', callback: (v) => (v/1000).toFixed(0) + 'k' }, title: { display: true, text: 'Units (thousands)', color: '#9ca3af' } }, x: { ticks: { color: '#9ca3af' } } } }
        });
        // Simulasi update OEE setiap 15 detik
        setInterval(() => {
            const newOEE = 87.5 + (Math.random() * 1.0 - 0.5);
            oeeChart.data.datasets[0].data[6] = parseFloat(newOEE.toFixed(1));
            oeeChart.update('none');
            const updateElem = document.getElementById('oeeLastUpdate');
            if (updateElem) updateElem.textContent = 'Last update: ' + new Date().toLocaleTimeString();

        }, 15000);
    });
</script>
</x-app-layout>