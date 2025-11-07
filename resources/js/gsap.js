import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

document.addEventListener("DOMContentLoaded", () => {
    const featureItems = document.querySelectorAll(".feature-item");

  
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: "#features-section",
            start: "top 10%",     
            end: () => "+=" + (featureItems.length * 300),
            scrub: 1,             
            pin: true,            
            anticipatePin: 1,
            markers: false
        }
    });

    tl.from(featureItems, {
        opacity: 0,
        x: 50,                
        duration: 1.0,
        ease: "power2.out",
        stagger: 0.3          
    });
});
