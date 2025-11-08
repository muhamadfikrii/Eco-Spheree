import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(TextPlugin) 
    // Initialize GSAP and ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);
    
    // Background Animation
    const canvas = document.getElementById('bg-animation');
    const ctx = canvas.getContext('2d');
    
    // Set canvas size
    function setCanvasSize() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }
    
    setCanvasSize();
    window.addEventListener('resize', setCanvasSize);
    
    // Create subtle particles for background
    const particles = [];
    const particleCount = 20;
    
    class Particle {
        constructor() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.size = Math.random() * 2 + 1;
            this.speedX = Math.random() * 0.3 - 0.15;
            this.speedY = Math.random() * 0.3 - 0.15;
            this.color = `rgba(5, 150, 105, ${Math.random() * 0.1})`;
        }
        
        update() {
            this.x += this.speedX;
            this.y += this.speedY;
            
            if (this.x > canvas.width) this.x = 0;
            if (this.x < 0) this.x = canvas.width;
            if (this.y > canvas.height) this.y = 0;
            if (this.y < 0) this.y = canvas.height;
        }
        
        draw() {
            ctx.fillStyle = this.color;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
        }
    }
    
    function initParticles() {
        for (let i = 0; i < particleCount; i++) {
            particles.push(new Particle());
        }
    }
    
    function animateParticles() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        
        for (let i = 0; i < particles.length; i++) {
            particles[i].update();
            particles[i].draw();
        }
        
        requestAnimationFrame(animateParticles);
    }
    
    initParticles();
    animateParticles();
    
    // GSAP Animations
    document.addEventListener('DOMContentLoaded', function() {
        // Animate main elements on scroll
        gsap.utils.toArray('.gsap-item').forEach(item => {
            gsap.to(item, {
                opacity: 1,
                x: 0,
                y: 0,
                duration: 0.8,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: item,
                    start: 'top 85%',
                    end: 'bottom 20%',
                    toggleActions: 'play none none reverse'
                }
            });
        });
        
        // Stagger animation for feature items
        gsap.to('.feature-item', {
            opacity: 1,
            x: 0,
            duration: 0.6,
            stagger: 0.1,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: '.feature-item',
                start: 'top 90%',
                end: 'bottom 20%',
                toggleActions: 'play none none reverse'
            }
        });
        
        // Subtle floating animation for icons
        gsap.to('.icon-float', {
            y: -5,
            duration: 2,
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut'
        });
        
        // Animate the "About Us" section details on hover
        const aboutTrigger = document.querySelector('.about-trigger');
        const aboutDetails = document.querySelector('.about-details');
        
        aboutTrigger.addEventListener('mouseenter', () => {
            gsap.to(aboutDetails, {
                height: 'auto',
                opacity: 1,
                duration: 0.4,
                ease: 'power2.out'
            });
        });
        
        aboutTrigger.addEventListener('mouseleave', () => {
            gsap.to(aboutDetails, {
                height: 0,
                opacity: 0,
                duration: 0.3,
                ease: 'power2.in'
            });
        });
        
        // Initially hide about details
        gsap.set(aboutDetails, { height: 0, opacity: 0 });
        
        // Animate impact numbers counting up
        const impactNumbers = document.querySelectorAll('.impact-number');
        
        impactNumbers.forEach(number => {
            const targetValue = parseFloat(number.getAttribute('data-value'));
            const suffix = number.textContent.includes('%') ? '%' : '';
            
            gsap.to(number, {
                innerText: targetValue + suffix,
                duration: 2,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: '.impact-stats',
                    start: 'top 80%',
                    end: 'bottom 20%',
                    toggleActions: 'play none none reverse'
                },
                snap: { innerText: 0.1 }
            });
        });
    });