import Alpine from 'alpinejs';
import AOS from 'aos';
import 'aos/dist/aos.css';
import gsap from 'gsap';

window.Alpine = Alpine;
Alpine.start();

// Year in footer
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('year').textContent = new Date().getFullYear();
});

// Fade-in animation using Intersection Observer
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

// Hero Section Animations (GSAP)
document.addEventListener("DOMContentLoaded", function () {
    gsap.from(".hero-title", { opacity: 0, y: -50, duration: 1, ease: "power2.out" });
    gsap.from(".hero-subtitle", { opacity: 0, y: 50, duration: 1, delay: 0.5, ease: "power2.out" });
});

// Initialize AOS
document.addEventListener("DOMContentLoaded", function () {
    AOS.init({
        duration: 800, // Animation duration
        once: true,    // Only animate once
    });
});

// Smooth scrolling for internal links
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                window.scrollTo({ top: targetElement.offsetTop - 50, behavior: 'smooth' });
            }
        });
    });
});

// Disable scroll restoration
if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
}
document.addEventListener("DOMContentLoaded", function () {
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");

    // Show/hide button on scroll
    window.addEventListener("scroll", function () {
        if (window.scrollY > 300) {
            scrollToTopBtn.classList.remove("hidden");
            scrollToTopBtn.classList.add("opacity-100");
        } else {
            scrollToTopBtn.classList.add("hidden");
            scrollToTopBtn.classList.remove("opacity-100");
        }
    });

    // Scroll to top on click
    scrollToTopBtn.addEventListener("click", function () {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
});
