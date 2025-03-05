import Alpine from 'alpinejs';
import AOS from 'aos';
import 'aos/dist/aos.css';
window.Alpine = Alpine;
Alpine.start();

document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll(".fade-in");

    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.3 }
    );

    sections.forEach(section => observer.observe(section));
});
document.addEventListener("DOMContentLoaded", function () {
    gsap.from(".hero-title", { opacity: 0, y: -50, duration: 1, ease: "power2.out" });
    gsap.from(".hero-subtitle", { opacity: 0, y: 50, duration: 1, delay: 0.5, ease: "power2.out" });
});
document.addEventListener("DOMContentLoaded", function () {
    AOS.init({
        duration: 800, // Animation duration
        once: true,    // Only animate once
    });
});
