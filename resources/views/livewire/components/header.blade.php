<div>
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden py-20"
             style="background-image: url('https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=1600&q=80'); background-size: cover; background-position: center; background-attachment: fixed;">
        
        <!-- Overlay gelap agar teks kontras (tidak fixed, hanya menutupi area hero) -->
        <div class="absolute inset-0 bg-slate-900/50 z-10"></div>
        
        <!-- Grid pattern industrial -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgdmlld0JveD0iMCAwIDQwIDQwIj48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjAuNSIgc3Ryb2tlLW9wYWNpdHk9IjAuMTUiIGQ9Ik0wIDQwTDQwIDBNNDAgNDBMMCAwIi8+PC9zdmc+')] opacity-20 z-20"></div>
        
        <!-- Overlay gradien untuk kontras tambahan -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-transparent to-black/30 z-10"></div>
        
        <!-- Konten hero -->
        <div class="relative z-20 max-w-7xl mx-auto px-6 text-center">
            <div class="inline-block mb-4 px-4 py-1 rounded-full bg-cyan-500/20 text-cyan-400 border border-cyan-400/30 text-sm font-mono tracking-wider backdrop-blur-sm">
                <i class="fas fa-microchip mr-2"></i> INDUSTRY 4.0 · REAL-TIME INTELLIGENCE
            </div>
            <h1 class="text-5xl md:text-7xl font-bold text-white leading-tight mb-6 drop-shadow-lg">
                Industrial <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">Smart Analytics</span>
            </h1>
            <p class="text-xl text-gray-100 max-w-2xl mx-auto mb-8 drop-shadow-md">
                Transform your factory floor with AI-powered insights, predictive maintenance, and live machine telemetry. Maximize OEE and reduce downtime.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#dashboard" class="px-8 py-3 bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 rounded-lg font-semibold transition transform hover:-translate-y-1 shadow-lg shadow-cyan-500/30">
                    Launch Dashboard <i class="fas fa-arrow-right ml-2"></i>
                </a>
                <a href="#features" class="px-8 py-3 border border-gray-300 rounded-lg hover:bg-white/10 transition backdrop-blur-sm text-white">
                    Explore Solutions
                </a>
            </div>
            <div class="flex justify-center gap-8 mt-12 text-sm text-gray-200">
                <div class="flex items-center gap-2"><i class="fas fa-chart-line text-cyan-400"></i><span class="font-bold text-white">2.5M+</span> data pts/sec</div>
                <div class="flex items-center gap-2"><i class="fas fa-industry text-cyan-400"></i><span class="font-bold text-white">1,200+</span> connected factories</div>
                <div class="flex items-center gap-2"><i class="fas fa-bolt text-cyan-400"></i><span class="font-bold text-white">99.5%</span> uptime</div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce z-20">
            <div class="w-6 h-10 border-2 border-cyan-400 rounded-full flex justify-center">
                <div class="w-1 h-2 bg-cyan-400 rounded-full mt-2 animate-scroll"></div>
            </div>
        </div>
    </section>
    
    <style>
        @keyframes scroll {
            0% { transform: translateY(0); opacity: 1; }
            100% { transform: translateY(8px); opacity: 0; }
        }
        .animate-scroll { animation: scroll 1.5s ease-in-out infinite; }
    </style>
</div>