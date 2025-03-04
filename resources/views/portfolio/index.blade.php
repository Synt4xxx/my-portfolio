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
</head>
<body class="bg-gray-100 text-gray-900">

  <!-- Hero Section -->
  <header class="bg-gray-700 text-white text-center py-20 px-6">
    <div class="max-w-4xl mx-auto animate-fade-in">
        <h1 class="text-5xl sm:text-6xl font-extrabold">👋 Hi, I'm Ronald Edano</h1>
        <h2 class="text-2xl sm:text-3xl mt-3 text-gray-300">Front-End Developer | UI/UX Enthusiast</h2>
        <p class="mt-5 text-lg text-gray-200 leading-relaxed max-w-2xl mx-auto">
            I craft responsive, user-friendly web interfaces with clean and modern designs.
        </p>
        
        <!-- Buttons Section -->
        <div class="flex flex-wrap justify-center gap-4 mt-8">
            <x-button href="#projects" variant="primary" icon="briefcase">
                View My Work
            </x-button>
            <x-button href="#contact" variant="primary" icon="mail">
                Hire Me
            </x-button>
            <x-button href="#portfolio" variant="secondary" icon="folder">
                See Portfolio
            </x-button>
        </div>
    </div>
</header>


<!-- About Me Section -->
<section class="container mx-auto my-20 px-6 text-center">
    <h2 class="text-4xl font-bold">About Me</h2>
    <p class="mt-6 max-w-3xl mx-auto text-lg leading-relaxed">
        I'm a passionate <strong>Front-End Developer</strong>, 25 years old, from <strong>Bagong Silang, Caloocan City</strong>. 
        I specialize in creating visually appealing and highly interactive web applications using the latest front-end technologies.
    </p>
</section>

<!-- Projects Section -->
<section id="projects" class="bg-white py-20">
    <h2 class="text-4xl font-bold text-center">My Projects</h2>
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-6 mt-12">
        <!-- Project Card -->
        <div class="bg-gray-200 p-6 rounded-lg shadow-md hover:shadow-lg transition-transform transform hover:scale-105">
            <h3 class="text-xl font-bold">📌 Portfolio Website</h3>
            <p class="mt-2">A responsive portfolio built with HTML, CSS, JavaScript, and Tailwind CSS.</p>
            <p class="mt-2"><b>Tech Stack:</b> HTML, CSS, JavaScript, TailwindCSS</p>
            <div class="mt-4">
                <a href="https://github.com/yourusername/portfolio" class="text-blue-600">GitHub</a> | 
                <a href="https://ronald-portfolio.com" class="text-blue-600">Live Demo</a>
            </div>
        </div>
        <!-- Duplicate Project Cards -->
        <div class="bg-gray-200 p-6 rounded-lg shadow-md hover:shadow-lg transition-transform transform hover:scale-105">
            <h3 class="text-xl font-bold">📌 Portfolio Website</h3>
            <p class="mt-2">A responsive portfolio built with HTML, CSS, JavaScript, and Tailwind CSS.</p>
            <p class="mt-2"><b>Tech Stack:</b> HTML, CSS, JavaScript, TailwindCSS</p>
            <div class="mt-4">
                <a href="https://github.com/yourusername/portfolio" class="text-blue-600">GitHub</a> | 
                <a href="https://ronald-portfolio.com" class="text-blue-600">Live Demo</a>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="container mx-auto my-20 px-6 text-center">
    <h2 class="text-4xl font-bold">Skills & Technologies</h2>
    <ul class="flex flex-wrap justify-center mt-6 gap-4">
        <li class="bg-blue-600 text-white px-6 py-3 rounded-full shadow-md hover:shadow-lg transition">HTML</li>
        <li class="bg-blue-600 text-white px-6 py-3 rounded-full shadow-md hover:shadow-lg transition">CSS</li>
        <li class="bg-blue-600 text-white px-6 py-3 rounded-full shadow-md hover:shadow-lg transition">JavaScript</li>
        <li class="bg-blue-600 text-white px-6 py-3 rounded-full shadow-md hover:shadow-lg transition">React.js</li>
        <li class="bg-blue-600 text-white px-6 py-3 rounded-full shadow-md hover:shadow-lg transition">Vue.js</li>
    </ul>
</section>

<!-- Testimonials -->
<section class="bg-white py-20">
    <h2 class="text-4xl font-bold text-center">Testimonials</h2>
    <p class="text-center mt-6 max-w-2xl mx-auto text-lg leading-relaxed">
        "Ronald is an incredibly talented front-end developer! His attention to design and user experience is top-notch." 
        <br>— <b>Michael, Web Design Agency</b>
    </p>
</section>

<!-- Contact Section -->
<section id="contact" class="container mx-auto my-6 px-4">
    <h2 class="text-2xl font-bold text-center">Contact Me</h2>
    <div class="text-center mt-2 max-w-lg mx-auto text-sm text-gray-700">
        <p>📧 Email: <a href="mailto:ronald.edano@example.com" class="text-blue-600">ronald.edano@example.com</a></p>
        <p>💼 LinkedIn: <a href="https://linkedin.com/in/ronaldedano" class="text-blue-600">linkedin.com/in/ronaldedano</a></p>
        <p>🐙 GitHub: <a href="https://github.com/ronaldedano" class="text-blue-600">github.com/ronaldedano</a></p>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 text-white text-center py-6 mt-12">
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
