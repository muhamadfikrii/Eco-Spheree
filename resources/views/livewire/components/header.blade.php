<div>
    <section
        id="heroSection"
        class="relative flex min-h-screen items-center justify-center overflow-hidden py-20"
    >
        <!-- Background image terpisah untuk parallax yang halus -->
        <div class="hero-bg absolute inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                 style="background-image: url('https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=1600&q=80'); transform: scale(1);"></div>
        </div>

        <!-- Overlay kompleks untuk depth -->
        <div class="absolute inset-0 z-10 bg-slate-900/60"></div>
        <div class="absolute inset-0 z-10 bg-gradient-to-b from-black/40 via-transparent to-black/60"></div>

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
            transform: translateY(-3px);
            box-shadow: 0 20px 30px -10px rgba(6,182,212,0.5);
        }
        .btn-secondary:hover {
            transform: translateY(-3px);
            background: rgba(255,255,255,0.15);
            border-color: #06b6d4;
        }

        @keyframes scroll {
            0% { transform: translateY(0); opacity: 1; }
            100% { transform: translateY(8px); opacity: 0; }
        }
        .scroll-dot {
            animation: scroll 1.5s ease-in-out infinite;
        }

        .hero-badge, .hero-title, .hero-description, .hero-buttons, .hero-stats {
            opacity: 0;
            transform: translateY(30px);
            filter: blur(8px);
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            gsap.registerPlugin(ScrollTrigger);

            const tl = gsap.timeline();
            tl.fromTo('.hero-badge', 
                { opacity: 0, y: 30, filter: 'blur(8px)' },
                { opacity: 1, y: 0, filter: 'blur(0px)', duration: 0.8, ease: 'power2.out' }
            )
            .fromTo('.hero-title',
                { opacity: 0, y: 30, filter: 'blur(8px)' },
                { opacity: 1, y: 0, filter: 'blur(0px)', duration: 0.8, ease: 'power2.out' },
                '-=0.4'
            )
            .fromTo('.hero-description',
                { opacity: 0, y: 30, filter: 'blur(8px)' },
                { opacity: 1, y: 0, filter: 'blur(0px)', duration: 0.8, ease: 'power2.out' },
                '-=0.3'
            )
            .fromTo('.hero-buttons',
                { opacity: 0, y: 30, filter: 'blur(8px)' },
                { opacity: 1, y: 0, filter: 'blur(0px)', duration: 0.8, ease: 'power2.out' },
                '-=0.3'
            )
            .fromTo('.hero-stats .stat-item',
                { opacity: 0, y: 20, filter: 'blur(4px)' },
                { opacity: 1, y: 0, filter: 'blur(0px)', duration: 0.6, stagger: 0.15, ease: 'back.out(0.7)' },
                '-=0.2'
            );

            const bgLayer = document.querySelector('.hero-bg > div');
            gsap.to(bgLayer, {
                scrollTrigger: {
                    trigger: '#heroSection',
                    start: 'top top',
                    end: 'bottom top',
                    scrub: 1,
                },
                scale: 1.08,
                y: '10%',
                ease: 'none',
            });

            gsap.to('#gridPattern', {
                scrollTrigger: {
                    trigger: '#heroSection',
                    start: 'top top',
                    end: 'bottom top',
                    scrub: 0.5,
                },
                y: 40,
                opacity: 0.1,
                ease: 'none',
            });

            gsap.to('.orb-1', {
                x: 'random(-50, 50)',
                y: 'random(-30, 30)',
                duration: 12,
                repeat: -1,
                yoyo: true,
                ease: 'sine.inOut',
            });
            gsap.to('.orb-2', {
                x: 'random(-40, 40)',
                y: 'random(-40, 40)',
                duration: 15,
                repeat: -1,
                yoyo: true,
                ease: 'sine.inOut',
            });
            gsap.to('.orb-3', {
                x: 'random(-30, 30)',
                y: 'random(-20, 20)',
                duration: 10,
                repeat: -1,
                yoyo: true,
                ease: 'sine.inOut',
            });
            gsap.to('.orb-4', {
                x: 'random(-60, 60)',
                y: 'random(-20, 20)',
                duration: 18,
                repeat: -1,
                yoyo: true,
                ease: 'sine.inOut',
            });

            ScrollTrigger.create({
                trigger: '#heroSection',
                start: 'top top',
                end: 'bottom 20%',
                scrub: 1,
                onUpdate: (self) => {
                    const opacity = 1 - self.progress * 0.8;
                    const scale = 1 - self.progress * 0.05;
                    gsap.to('.hero-content', { opacity: opacity, scale: scale, duration: 0.1, ease: 'none' });
                }
            });

            const hero = document.getElementById('heroSection');
            hero.addEventListener('mousemove', (e) => {
                const buttons = document.querySelectorAll('.btn-primary, .btn-secondary');
                buttons.forEach(btn => {
                    const btnRect = btn.getBoundingClientRect();
                    const btnX = e.clientX - btnRect.left;
                    const btnY = e.clientY - btnRect.top;
                    if (btnX > 0 && btnX < btnRect.width && btnY > 0 && btnY < btnRect.height) {
                        btn.style.boxShadow = `0 0 20px rgba(6,182,212,0.7)`;
                    } else {
                        btn.style.boxShadow = '';
                    }
                });
            });
        });
    </script>
</div>