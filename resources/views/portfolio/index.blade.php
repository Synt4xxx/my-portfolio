<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ronald Edano | Front-End Developer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('year').textContent = new Date().getFullYear();
        });
    </script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</head>
<body class="bg-gray-950 text-gray-100">

    <!-- Hero Section -->
    <header class="relative h-screen flex items-center justify-center text-center text-white">
        <div class="absolute inset-0 bg-gradient-to-b from-gray-950/80 to-gray-900/40"></div>
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/1600x900/?technology,coding');"></div>
        <div class="backdrop-blur-lg bg-white/10 px-10 py-14 rounded-2xl shadow-2xl">
            <div class="relative z-10 max-w-3xl mx-auto px-6">
                <h1 class="hero-title text-5xl font-extrabold">👋 Hi, I'm Ronald Edano</h1>
                <h2 class="hero-subtitle text-2xl mt-3 text-gray-300">Front-End Developer | UI/UX Enthusiast</h2>
                                <p class="mt-5 text-lg text-gray-300 leading-relaxed">
                    I craft modern, responsive, and engaging web interfaces.
                </p>
                
                <div class="flex flex-wrap justify-center gap-6 mt-8">
                    <x-button href="#projects" variant="primary" class="px-7 py-3 sm:px-9 sm:py-4" icon="briefcase">
                        View My Work
                    </x-button>
                    <x-button href="#contact" variant="primary" class="px-7 py-3 sm:px-9 sm:py-4" icon="mail">
                        Hire Me
                    </x-button>
                    <x-button href="#portfolio" variant="secondary" class="px-7 py-3 sm:px-9 sm:py-4" icon="folder">
                        See Portfolio
                    </x-button>
                </div>
            </div>
        </div>
    </header>

    <!-- About Me Section -->
    <section class="min-h-[600px] flex items-center justify-center container mx-auto py-16 px-6">
        <div class="text-center">
            <h2 class="fade-in text-4xl font-bold text-gray-100">About Me</h2>
            <p class="fade-in mt-6 max-w-2xl mx-auto text-lg text-gray-300">
                I'm a passionate <strong>Front-End Developer</strong> from <strong>Bagong Silang, Caloocan City</strong>. 
                I specialize in crafting beautiful and interactive web applications using modern front-end technologies.
            </p>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" data-aos="fade-up" class="min-h-[600px] bg-gray-800 flex items-center justify-center py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-100">My Projects</h2>
            <div class="flex flex-wrap justify-center gap-8 px-6 mt-8">
                <div class="bg-gray-700 p-8 rounded-xl shadow-lg hover:shadow-xl transition w-96">
                    <h3 class="text-2xl font-bold text-purple-400">📌 Portfolio Website</h3>
                    <p class="mt-3 text-gray-300">A fully responsive portfolio built with HTML, CSS, JavaScript, and Tailwind CSS.</p>
                    <p class="mt-3"><b>Tech Stack:</b> HTML, CSS, JavaScript, TailwindCSS</p>
                    <div class="mt-5">
                        <a href="https://github.com/yourusername/portfolio" class="text-blue-400 hover:text-blue-300">GitHub</a> | 
                        <a href="https://ronald-portfolio.com" class="text-blue-400 hover:text-blue-300">Live Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="min-h-[600px] flex items-center justify-center container mx-auto py-16 px-6">
        <div class="text-center">
            <h2 class="text-4xl font-bold text-gray-100">Skills & Technologies</h2>
            <ul class="flex flex-wrap justify-center mt-6 gap-5">
                <li class="bg-purple-600 text-white px-5 py-3 rounded-full">HTML</li>
                <li class="bg-purple-600 text-white px-5 py-3 rounded-full">CSS</li>
                <li class="bg-purple-600 text-white px-5 py-3 rounded-full">JavaScript</li>
                <li class="bg-purple-600 text-white px-5 py-3 rounded-full">React.js</li>
                <li class="bg-purple-600 text-white px-5 py-3 rounded-full">Vue.js</li>
                <li class="bg-purple-600 text-white px-5 py-3 rounded-full">TailwindCSS</li>
                <li class="bg-purple-600 text-white px-5 py-3 rounded-full">Bootstrap</li>
            </ul>
        </div>
    </section>

<!-- Contact Section -->
<section id="contact" class="min-h-[200px] flex items-center justify-center container mx-auto py-6 px-6">
    <div class="text-center">
        <h2 class="text-3xl font-bold text-gray-100">Contact Me</h2>
        <p class="mt-2 text-lg">📧 Email: <a href="mailto:ronald.edano@example.com" class="text-blue-400 hover:text-blue-300">ronald.edano@example.com</a></p>
        <p class="mt-1 text-lg">💼 LinkedIn: <a href="https://linkedin.com/in/ronaldedano" class="text-blue-400 hover:text-blue-300">linkedin.com/in/ronaldedano</a></p>
        <p class="mt-1 text-lg">🐙 GitHub: <a href="https://github.com/ronaldedano" class="text-blue-400 hover:text-blue-300">github.com/ronaldedano</a></p>
    </div>
</section>
    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-5 mt-12">
        <p>&copy; <span id="year"></span> Ronald Edano. All rights reserved.</p>
    </footer>

    <script>
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
    </script>

</body>
</html>
