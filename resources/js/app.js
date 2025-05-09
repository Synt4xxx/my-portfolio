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
    var swiper = new Swiper(".mySwiper", {
        loop: true, // Infinite scrolling
        spaceBetween: 20,
        slidesPerView: 1, // Show 1 slide on mobile
        centeredSlides: true,
        autoplay: {
            delay: 3000, // Auto slide every 3 sec
            disableOnInteraction: false, // Keep autoplay after interaction
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            640: { slidesPerView: 1 }, // 1 slide on small screens
            768: { slidesPerView: 2 }, // 2 slides on tablets
            1024: { slidesPerView: 3 }, // 3 slides on desktops
        },
    });
});
document.addEventListener("DOMContentLoaded", function () {
    // Swiper Initialization
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 300) {
            scrollToTopBtn.classList.add("show");
        } else {
            scrollToTopBtn.classList.remove("show");
        }
    });

    scrollToTopBtn.addEventListener("click", function () {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");
    const progressBar = document.getElementById("progressBar");

    window.addEventListener("scroll", function () {
        let scrollTop = window.scrollY;
        let docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        let scrollPercent = (scrollTop / docHeight) * 100;

        // Update progress bar width
        progressBar.style.width = scrollPercent + "%";

        // Show/hide Scroll to Top button
        if (scrollTop > 300) {
            scrollToTopBtn.classList.add("show");
        } else {
            scrollToTopBtn.classList.remove("show");
        }
    });

    // Scroll to top smoothly
    scrollToTopBtn.addEventListener("click", function () {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
});
