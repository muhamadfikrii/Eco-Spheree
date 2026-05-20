<div class="bg-slate-900 py-12 sm:py-16 lg:py-20">
    <!-- AOS CSS CDN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Font Awesome 6 (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <!-- Bagian Header dengan AOS -->
        <div class="mb-10 text-center" data-aos="fade-up" data-aos-duration="800">
            <span
                class="mb-4 inline-block rounded-full border border-cyan-400/30 bg-cyan-500/20 px-4 py-2 font-mono text-sm font-semibold text-cyan-400"
            >
                <i class="fas fa-handshake mr-2"></i>INDUSTRY PARTNERS
            </span>
            <h2 class="mb-4 text-3xl font-bold text-white lg:text-4xl">
                Trusted by
                <span class="text-cyan-400">Global Industrial Leaders</span>
            </h2>
            <p class="mx-auto max-w-2xl text-base text-gray-400">We collaborate with world-class manufacturers, technology providers, and industrial organizations.</p>
        </div>

        <!-- Partner Grid dengan AOS -->
        <div class="mb-12 rounded-2xl border border-gray-700 bg-slate-800/50 p-6 sm:p-8 lg:p-12" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            <div class="grid grid-cols-2 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div class="group flex flex-col items-center rounded-xl border border-gray-600 bg-slate-700/30 p-4 transition hover:border-cyan-400/50">
                    <div class="mb-3 flex h-16 w-16 items-center justify-center rounded-xl bg-white p-3">
                        <img src="https://1000logos.net/wp-content/uploads/2021/11/Siemens-logo.jpg" alt="Siemens" class="h-full w-full object-contain" />
                    </div>
                    <p class="text-sm text-gray-300">Siemens</p>
                </div>
                <div class="group flex flex-col items-center rounded-xl border border-gray-600 bg-slate-700/30 p-4 transition hover:border-cyan-400/50">
                    <div class="mb-3 flex h-16 w-16 items-center justify-center rounded-xl bg-white p-3">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/ABB_logo.svg/1280px-ABB_logo.svg.png" alt="ABB" class="h-full w-full object-contain" />
                    </div>
                    <p class="text-sm text-gray-300">ABB</p>
                </div>
                <div class="group flex flex-col items-center rounded-xl border border-gray-600 bg-slate-700/30 p-4 transition hover:border-cyan-400/50">
                    <div class="mb-3 flex h-16 w-16 items-center justify-center rounded-xl bg-white p-3">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Microsoft_logo.svg/3840px-Microsoft_logo.svg.png" alt="Microsoft" class="h-full w-full object-contain" />
                    </div>
                    <p class="text-sm text-gray-300">Microsoft</p>
                </div>
                <div class="group flex flex-col items-center rounded-xl border border-gray-600 bg-slate-700/30 p-4 transition hover:border-cyan-400/50">
                    <div class="mb-3 flex h-16 w-16 items-center justify-center rounded-xl bg-white p-3">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Amazon_Web_Services_Logo.svg/3840px-Amazon_Web_Services_Logo.svg.png" alt="AWS" class="h-full w-full object-contain" />
                    </div>
                    <p class="text-sm text-gray-300">AWS</p>
                </div>
            </div>
        </div>

        <!-- Statistik dengan AOS (masing-masing dengan delay berbeda) -->
        <div class="mb-12 grid grid-cols-2 gap-6 text-center md:grid-cols-4">
            <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="0">
                <div class="text-3xl font-bold text-cyan-400">500+</div>
                <div class="text-sm text-gray-400">Connected Plants</div>
            </div>
            <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                <div class="text-3xl font-bold text-cyan-400">50+</div>
                <div class="text-sm text-gray-400">Enterprise Partners</div>
            </div>
            <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                <div class="text-3xl font-bold text-cyan-400">12k+</div>
                <div class="text-sm text-gray-400">IIoT Sensors</div>
            </div>
            <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                <div class="text-3xl font-bold text-cyan-400">99.5%</div>
                <div class="text-sm text-gray-400">Avg. Uptime</div>
            </div>
        </div>

        <!-- Call to Action dengan AOS -->
        <div class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
            <h3 class="mb-4 text-2xl font-bold text-white">
                Ready to Digitize Your Factory?
            </h3>
            <a
                href="{{ route('become') }}"
                class="inline-flex transform items-center rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 px-8 py-3 font-semibold text-white shadow-lg transition hover:-translate-y-1 hover:from-cyan-600 hover:to-blue-700"
            >
                Become a Partner <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>

    <script>
        AOS.init({
            offset: 80,       
            duration: 800,    
            easing: 'ease-out-cubic',
        });
    </script>
</div>