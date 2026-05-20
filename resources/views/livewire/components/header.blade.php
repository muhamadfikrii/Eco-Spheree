<div>
    <section
        id="heroSection"
        class="relative flex min-h-[85vh] items-center justify-center overflow-hidden py-12 sm:py-20 sm:min-h-screen"
    >
        <!-- Background image terpisah untuk parallax yang halus -->
        <div class="hero-bg absolute inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                 style="background-image: url('https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=1600&q=80'); transform: scale(1);"></div>
        </div>

        <!-- Overlay lebih gelap untuk depth -->
        <div class="absolute inset-0 z-10 bg-slate-900/80"></div>
        <div class="absolute inset-0 z-10 bg-gradient-to-b from-black/60 via-black/30 to-black/80"></div>
        <div class="absolute inset-0 z-10 bg-gradient-to-t from-slate-950/70 to-transparent"></div>

        <!-- Grid pattern bergerak (parallax sendiri) -->
        <div
            class="absolute inset-0 z-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgdmlld0JveD0iMCAwIDQwIDQwIj48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjAuNSIgc3Ryb2tlLW9wYWNpdHk9IjAuMTUiIGQ9Ik0wIDQwTDQwIDBNNDAgNDBMMCAwIi8+PC9zdmc+')] opacity-30"
            id="gridPattern"
        ></div>

        <!-- Floating orbs / particles (animasi GSAP) -->
        <div class="absolute inset-0 z-10 overflow-hidden">
            <div class="orb orb-1"></div>
            <div class="orb orb-2"></div>
            <div class="orb orb-3"></div>
            <div class="orb orb-4"></div>
        </div>

        <!-- Konten utama -->
        <div class="hero-content relative z-20 mx-auto max-w-7xl px-6 text-center">
            <div
                class="hero-badge mb-4 inline-block rounded-full border border-cyan-400/30 bg-cyan-500/20 px-4 py-1 font-mono text-sm tracking-wider text-cyan-400 backdrop-blur-sm"
            >
                <i class="fas fa-microchip mr-2"></i> INDUSTRY 4.0 · REAL-TIME
                INTELLIGENCE
            </div>
            <h1 class="hero-title mb-6 text-5xl font-bold leading-tight text-white drop-shadow-lg md:text-7xl">
                Industrial
                <span
                    class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent"
                    >Smart Analytics</span
                >
            </h1>
            <p class="hero-description mx-auto mb-8 max-w-2xl text-xl text-gray-100 drop-shadow-md">
                Transform your factory floor with AI-powered insights, predictive maintenance, and live machine telemetry. Maximize OEE and reduce downtime.
            </p>
            <div class="hero-buttons flex flex-col justify-center gap-4 sm:flex-row">
                <a
                    href="#dashboard"
                    class="btn-primary transform rounded-lg px-8 py-3 font-semibold shadow-lg shadow-cyan-500/30 transition-all duration-300"
                >
                    Launch Dashboard <i class="fas fa-arrow-right ml-2"></i>
                </a>
                <a
                    href="#features"
                    class="btn-secondary rounded-lg border border-gray-300 px-8 py-3 text-white backdrop-blur-sm transition-all duration-300 hover:bg-white/10"
                >
                    Explore Solutions
                </a>
            </div>
            <div class="hero-stats mt-12 flex justify-center gap-8 text-sm text-gray-200">
                <div class="stat-item flex items-center gap-2">
                    <i class="fas fa-chart-line text-cyan-400"></i
                    ><span class="stat-number font-bold text-white">2.5M+</span> data pts/sec
                </div>
                <div class="stat-item flex items-center gap-2">
                    <i class="fas fa-industry text-cyan-400"></i
                    ><span class="stat-number font-bold text-white">1,200+</span> connected factories
                </div>
                <div class="stat-item flex items-center gap-2">
                    <i class="fas fa-bolt text-cyan-400"></i
                    ><span class="stat-number font-bold text-white">99.5%</span> uptime
                </div>
            </div>
        </div>

        <div class="absolute bottom-8 left-1/2 z-20 -translate-x-1/2 transform">
            <div class="scroll-indicator flex h-10 w-6 justify-center rounded-full border-2 border-cyan-400">
                <div class="scroll-dot mt-2 h-2 w-1 rounded-full bg-cyan-400"></div>
            </div>
        </div>
    </section>

    <style>
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            opacity: 0.4;
            will-change: transform;
        }
        .orb-1 {
            width: 40vw;
            height: 40vw;
            background: radial-gradient(circle, rgba(6,182,212,0.4) 0%, rgba(6,182,212,0) 70%);
            top: -20%;
            left: -20%;
        }
        .orb-2 {
            width: 30vw;
            height: 30vw;
            background: radial-gradient(circle, rgba(59,130,246,0.3) 0%, rgba(59,130,246,0) 70%);
            bottom: -10%;
            right: -10%;
        }
        .orb-3 {
            width: 20vw;
            height: 20vw;
            background: radial-gradient(circle, rgba(139,92,246,0.3) 0%, rgba(139,92,246,0) 70%);
            top: 30%;
            right: 20%;
        }
        .orb-4 {
            width: 25vw;
            height: 25vw;
            background: radial-gradient(circle, rgba(236,72,153,0.2) 0%, rgba(236,72,153,0) 70%);
            bottom: 20%;
            left: 15%;
        }

        .btn-primary {
            position: relative;
            background: linear-gradient(90deg, #06b6d4, #3b82f6);
            background-size: 200% auto;
            border: none;
            z-index: 1;
            transition: transform 0.3s cubic-bezier(0.2, 0.9, 0.4, 1.1), box-shadow 0.3s ease;
        }
        .btn-primary::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #06b6d4, #3b82f6, #8b5cf6, #06b6d4);
            background-size: 300%;
            border-radius: 0.7rem;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s;
        }
        .btn-primary:hover::before {
            opacity: 1;
            animation: borderRotate 3s linear infinite;
        }
        @keyframes borderRotate {
            0% { background-position: 0% 50%; }
            100% { background-position: 300% 50%; }
        }
        .btn-primary:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 20px 30px -10px rgba(6,182,212,0.6);
        }
        .btn-secondary:hover {
            transform: translateY(-3px) scale(1.05);
            background: rgba(255,255,255,0.2);
            border-color: #06b6d4;
            box-shadow: 0 10px 25px -5px rgba(6,182,212,0.3);
        }

        @keyframes scroll {
            0% { transform: translateY(0); opacity: 1; }
            100% { transform: translateY(8px); opacity: 0; }
        }
        .scroll-dot {
            animation: scroll 1.5s ease-in-out infinite;
        }

        /* Initial state: blur tanpa pergerakan */
        .hero-badge, .hero-title, .hero-description, .hero-buttons, .hero-stats {
            opacity: 0;
            filter: blur(12px);
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            gsap.registerPlugin(ScrollTrigger);

            // --- ANIMASI BLUR -> CLEAR (tanpa pergerakan) ---
            const tl = gsap.timeline({ defaults: { duration: 0.9, ease: "power2.out" } });
            tl.fromTo('.hero-badge', 
                { opacity: 0, filter: 'blur(12px)' },
                { opacity: 1, filter: 'blur(0px)' }
            )
            .fromTo('.hero-title',
                { opacity: 0, filter: 'blur(12px)' },
                { opacity: 1, filter: 'blur(0px)' },
                '-=0.6'
            )
            .fromTo('.hero-description',
                { opacity: 0, filter: 'blur(12px)' },
                { opacity: 1, filter: 'blur(0px)' },
                '-=0.5'
            )
            .fromTo('.hero-buttons',
                { opacity: 0, filter: 'blur(12px)' },
                { opacity: 1, filter: 'blur(0px)' },
                '-=0.4'
            )
            .fromTo('.hero-stats .stat-item',
                { opacity: 0, filter: 'blur(8px)' },
                { opacity: 1, filter: 'blur(0px)', stagger: 0.12 },
                '-=0.3'
            );

            // --- SETELAH TOMBOL MUNCUL, TAMBAHKAN EFEK POP DAN GLOW ---
            tl.call(() => {
                gsap.fromTo('.btn-primary, .btn-secondary', 
                    { scale: 0.9, boxShadow: '0 0 0px rgba(6,182,212,0)' },
                    { 
                        scale: 1, 
                        boxShadow: '0 0 20px rgba(6,182,212,0.5)', 
                        duration: 0.5, 
                        stagger: 0.1, 
                        ease: 'elastic.out(1, 0.5)',
                        overwrite: true
                    }
                );
            });

            // Trigger hanya sekali
            ScrollTrigger.create({
                trigger: '#heroSection',
                start: 'top 85%',
                animation: tl,
                toggleActions: 'play none none none'
            });

            // --- PARALLAX BACKGROUND (tetap berjalan) ---
            const bgLayer = document.querySelector('.hero-bg > div');
            if (bgLayer) {
                gsap.to(bgLayer, {
                    scrollTrigger: {
                        trigger: '#heroSection',
                        start: 'top top',
                        end: 'bottom top',
                        scrub: 0.5,
                    },
                    scale: 1.08,
                    y: '8%',
                    ease: "none",
                });
            }

            // Grid pattern parallax
            gsap.to('#gridPattern', {
                scrollTrigger: {
                    trigger: '#heroSection',
                    start: 'top top',
                    end: 'bottom top',
                    scrub: 0.5,
                },
                y: 30,
                opacity: 0.1,
                ease: "none",
            });

            // --- FLOATING ORBS ---
            gsap.to('.orb-1', {
                x: () => gsap.utils.random(-60, 60),
                y: () => gsap.utils.random(-40, 40),
                duration: 18,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut",
            });
            gsap.to('.orb-2', {
                x: () => gsap.utils.random(-50, 50),
                y: () => gsap.utils.random(-50, 50),
                duration: 22,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut",
            });
            gsap.to('.orb-3', {
                x: () => gsap.utils.random(-40, 40),
                y: () => gsap.utils.random(-30, 30),
                duration: 16,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut",
            });
            gsap.to('.orb-4', {
                x: () => gsap.utils.random(-70, 70),
                y: () => gsap.utils.random(-30, 30),
                duration: 25,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut",
            });

            // --- EFEK FADE/SCALE SAAT SCROLL (opsional) ---
            ScrollTrigger.create({
                trigger: '#heroSection',
                start: 'top top',
                end: 'bottom 20%',
                scrub: 0.3,
                onUpdate: (self) => {
                    const opacity = 1 - self.progress * 0.85;
                    const scale = 1 - self.progress * 0.06;
                    gsap.to('.hero-content', { opacity: opacity, scale: scale, duration: 0.05, ease: "none" });
                }
            });

            // --- MOUSE FOLLOWER GLOW ---
            const hero = document.getElementById('heroSection');
            const buttons = document.querySelectorAll('.btn-primary, .btn-secondary');
            const updateShadow = (btn, intensity) => {
                gsap.to(btn, {
                    boxShadow: `0 0 ${intensity * 20}px rgba(6,182,212,${intensity * 0.7})`,
                    duration: 0.2,
                    overwrite: true,
                });
            };
            hero.addEventListener('mousemove', (e) => {
                buttons.forEach(btn => {
                    const rect = btn.getBoundingClientRect();
                    const hover = (e.clientX > rect.left && e.clientX < rect.right && e.clientY > rect.top && e.clientY < rect.bottom);
                    updateShadow(btn, hover ? 1 : 0);
                });
            });
            hero.addEventListener('mouseleave', () => {
                buttons.forEach(btn => updateShadow(btn, 0));
            });
        });
    </script>
</div>