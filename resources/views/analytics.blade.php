<x-app-layout>
    
<div class="bg-gray-900 bg-grid-pattern">
    <section class="relative h-screen w-full overflow-hidden flex items-center justify-center bg-gradient-to-br from-gray-900 to-gray-900">
            <div class="absolute inset-0 bg-pattern"></div>
        
        <div class="absolute top-1/4 left-1/4 w-6 h-6 rounded-full bg-green-400 opacity-30 float-animation"></div>
        <div class="absolute top-1/3 right-1/4 w-10 h-10 rounded-full bg-emerald-500 opacity-20 float-animation" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-1/4 left-1/3 w-8 h-8 rounded-full bg-teal-400 opacity-25 float-animation" style="animation-delay: 2s;"></div>
        
        <!-- Geometric Shapes -->
        <div class="absolute top-10 right-10 w-32 h-32 border-2 border-green-500/30 rotate-45 opacity-40"></div>
        <div class="absolute bottom-20 left-10 w-24 h-24 border-2 border-emerald-400/20 rotate-12 opacity-30"></div>
        
        <!-- Main Content -->
        <div class="relative z-10 text-center text-white px-6 max-w-4xl">
            <div class="overflow-hidden">
                <p class="text-lg font-light tracking-widest uppercase mb-6 opacity-80 transform translate-y-0 transition-transform duration-700">
                    The Adventure Begins
                </p>
            </div>
            
            <!-- Main Title with Gradient Effect -->
            <div class="overflow-hidden mb-8">
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-black leading-tight">
                    <span class="block bg-gradient-to-r from-green-400 to-emerald-500 bg-clip-text text-transparent drop-shadow-lg transform transition-all duration-1000">
                        Explore
                    </span>
                    <span class="block bg-gradient-to-r from-emerald-400 to-green-500 bg-clip-text text-transparent drop-shadow-lg transform transition-all duration-1000 delay-300">
                        EcoSpheree
                    </span>
                </h1>
            </div>
            
            <div class="overflow-hidden max-w-2xl mx-auto mb-12">
                <p class="text-xl font-light opacity-90 leading-relaxed transform transition-all duration-1000 delay-500">
                    Discover Indonesia's breathtaking natural beauty, from the ocean depths to volcanic peaks, through our immersive digital platform.
                </p>
            </div>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4 transform transition-all duration-1000 delay-700">
                <a href="#environmental-data" class="bg-green-500 text-white font-bold py-4 px-8 rounded-full transition-all duration-300 hover:bg-green-600 hover:shadow-xl hover:scale-105 pulse-glow flex items-center justify-center gap-3 text-lg">
                    <span>Are u Ready to Explore</span>
                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
            <div class="animate-bounce">
                <div class="text-white/60 hover:text-white transition-colors flex flex-col items-center">
                    <span class="text-sm mb-1">Scroll</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
        </div>
    </section>
</div>

    <section class=" py-10 border-b border-white p-1 bg-transparent">
        <h1 class="text-center text-2xl font-bold text-white z-10">Sosial Media</h1>
        <div class="max-w-5xl mx-auto flex flex-wrap justify-center items-center gap-8">
            <a href="#" class="text-white z-10 hover:text-emerald-500 text-3xl transition duration-300"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-white z-10 hover:text-emerald-500 text-3xl transition duration-300"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-white z-10 hover:text-emerald-500 text-3xl transition duration-300"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-white z-10 hover:text-emerald-500 text-3xl transition duration-300"><i class="fab fa-youtube"></i></a>
            <a href="#" class="text-white z-10 hover:text-emerald-500 text-3xl transition duration-300"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </section>

    <livewire:components.environmental-data />

    <livewire:components.reports-explore />

    <livewire:ecological-marvels />

    <livewire:components.nature-conservation />

</div>
@push('scripts')
<script>
    // Custom Tailwind config for this page
    if (typeof tailwind !== 'undefined') {
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#10b981',
                            light: '#34d399',
                            dark: '#059669',
                        },
                        dark: {
                            DEFAULT: '#0f172a',
                            light: '#1e293b',
                            lighter: '#334155',
                        },
                        accent: '#0ea5e9',
                        bronze: '#cd7f32',
                        silver: '#c0c0c0',
                        gold: '#ffd700',
                    },
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif'],
                    },
                    animation: {
                        'pulse-glow': 'pulse-glow 2s infinite',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        'pulse-glow': {
                            '0%': { boxShadow: '0 0 5px rgba(16, 185, 129, 0.5)' },
                            '50%': { boxShadow: '0 0 20px rgba(16, 185, 129, 0.8)' },
                            '100%': { boxShadow: '0 0 5px rgba(16, 185, 129, 0.5)' },
                        },
                        'float': {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    }
</script>
@endpush
    <style>
.pulse-glow {
    animation: pulse-glow 4s ease-in-out infinite alternate;
}

@keyframes pulse-glow {
    0% {
        box-shadow: 0 0 20px rgba(72, 187, 120, 0.5);
    }
    100% {
        box-shadow: 0 0 30px rgba(72, 187, 120, 0.8), 0 0 40px rgba(72, 187, 120, 0.4);
    }
}

.float-animation {
    animation: float 6s ease-in-out infinite;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-20px);
    }
}

.bg-pattern {
    background-image: 
        radial-gradient(circle at 20% 30%, rgba(72, 187, 120, 0.15) 0%, transparent 50%),
        radial-gradient(circle at 80% 70%, rgba(16, 185, 129, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 40% 80%, rgba(5, 150, 105, 0.1) 0%, transparent 50%);
}
</style>
</div>
</x-app-layout>