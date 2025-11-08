import './bootstrap';
import './gsap'; 
import 'animate.css'; 
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

// EcoTrack Custom JavaScript

// Toggle About Details
document.addEventListener('DOMContentLoaded', function() {
    const aboutToggle = document.getElementById('about-toggle');
    
    if (aboutToggle) {
        aboutToggle.addEventListener('click', function() {
            const details = document.getElementById('about-details');
            const chevron = document.getElementById('about-chevron');
            
            if (details.classList.contains('hidden')) {
                details.classList.remove('hidden');
                chevron.style.transform = 'rotate(180deg)';
            } else {
                details.classList.add('hidden');
                chevron.style.transform = 'rotate(0deg)';
            }
        });
    }

    // Simple counter animation for stats
    const counters = document.querySelectorAll('.stats-counter');
    const speed = 200;
    
    counters.forEach(counter => {
        const target = +counter.innerText.replace('+', '');
        let count = 0;
        
        // Only animate if element is in viewport
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const updateCount = () => {
                        const increment = target / speed;
                        
                        if (count < target) {
                            count += increment;
                            counter.innerText = Math.ceil(count) + (counter.innerText.includes('+') ? '+' : '');
                            setTimeout(updateCount, 10);
                        } else {
                            counter.innerText = target + (counter.innerText.includes('+') ? '+' : '');
                        }
                    };
                    
                    updateCount();
                    observer.unobserve(counter);
                }
            });
        });
        
        observer.observe(counter);
    });

    // Add smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add intersection observer for fade-in animations
    const fadeElements = document.querySelectorAll('.feature-card, .eco-badge, .stats-counter');
    
    const fadeObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, {
        threshold: 0.1
    });

    fadeElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        fadeObserver.observe(el);
    });
});