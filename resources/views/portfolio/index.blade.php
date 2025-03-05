<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ronald Edano - Frontend Developer Portfolio</title>
<meta name="description" content="Frontend Developer specializing in Tailwind CSS and JavaScript.">
<meta name="keywords" content="Frontend Developer, Tailwind CSS, JavaScript, Laravel">
<meta name="author" content="Ronald Edano">

<!-- Open Graph for Social Sharing -->
<meta property="og:title" content="Ronald Edano - Portfolio">
<meta property="og:description" content="Showcasing my best frontend development projects.">
<meta property="og:image" content="preview-image.jpg">
<meta property="og:url" content="https://ronaldedano.dev">
<meta name="twitter:card" content="summary_large_image">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('year').textContent = new Date().getFullYear();
        });
    </script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
   
    <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


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
                    <x-button href="#skills" variant="secondary" class="px-7 py-3 sm:px-9 sm:py-4" icon="folder">
                        See Portfolio
                    </x-button>
                </div>
            </div>
        </div>
    </header>

<!-- About Me Section -->
<section id="about" class="min-h-screen flex items-center justify-center bg-gray-900 py-16 px-6">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        
        <!-- Left Side: Profile Image -->
        <div class="text-center md:text-left project-card">
            <img src="https://source.unsplash.com/400x400/?developer,profile" 
                alt="Ronald Edano" 
                class="w-64 h-64 rounded-full mx-auto md:mx-0 shadow-2xl border-4 border-purple-500">
        </div>

        <!-- Right Side: About Text -->
        <div class="mt-6" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-gray-100">About Me</h2>
            <p class="mt-4 text-lg text-gray-300 leading-relaxed">
                I'm a passionate <strong>Front-End Developer</strong> based in <strong>Bagong Silang, Caloocan City</strong>. 
                I love crafting beautiful and interactive web applications using modern front-end technologies.  
                My goal is to build fast, accessible, and user-friendly interfaces that enhance user experience. 🚀
            </p>

            <!-- Tech Stack Icons -->
            <div class="mt-6" data-aos="fade-up">
                <h3 class="text-2xl font-semibold text-gray-100">Tech Stack</h3>
                <div class="flex flex-wrap gap-4 mt-3">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" class="w-10 h-10">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" class="w-10 h-10">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" class="w-10 h-10">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" class="w-10 h-10">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" class="w-10 h-10">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-plain.svg" class="w-10 h-10">
                </div>
            </div>

            <!-- Fun Facts -->
            <div class="mt-6" data-aos="fade-up">
                <h3 class="text-2xl font-semibold text-gray-100">Fun Facts</h3>
                <ul class="mt-3 text-gray-300">
                    <li>🔥 Self-taught developer with a strong passion for UI/UX design.</li>
                    <li>🎸 Love playing guitar and coding to music.</li>
                    <li>💡 Always exploring new technologies and frameworks.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Experience Timeline -->
<section id="experience" class="bg-gray-800 py-16 px-6">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold text-gray-100">My Journey</h2>
        <div class="mt-12 space-y-10 max-w-4xl mx-auto" data-aos="fade-up">
            
            <!-- Timeline Item -->
            <div class="relative project-card ">
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-purple-500"></div>
                <div class="flex flex-col md:flex-row items-center">
                    <div class="w-5 h-5 bg-purple-500 rounded-full absolute left-1/2 transform -translate-x-1/2"></div>
                    <div class="w-full md:w-1/2 text-right pr-6">
                        <h3 class="text-xl font-semibold text-gray-100">Started Learning Web Development</h3>
                        <p class="text-gray-300">Began my journey into coding with HTML, CSS, and JavaScript.</p>
                        <span class="text-gray-400">2019</span>
                    </div>
                </div>
            </div>

            <div class="relative project-card ">
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-purple-500"></div>
                <div class="flex flex-col md:flex-row items-center">
                    <div class="w-5 h-5 bg-purple-500 rounded-full absolute left-1/2 transform -translate-x-1/2"></div>
                    <div class="w-full md:w-1/2 text-left pl-6">
                        <h3 class="text-xl font-semibold text-gray-100">Built First Full Website</h3>
                        <p class="text-gray-300">Created my first responsive website using Tailwind CSS and JavaScript.</p>
                        <span class="text-gray-400">2021</span>
                    </div>
                </div>
            </div>

            <div class="relative project-card ">
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-purple-500"></div>
                <div class="flex flex-col md:flex-row items-center">
                    <div class="w-5 h-5 bg-purple-500 rounded-full absolute left-1/2 transform -translate-x-1/2"></div>
                    <div class="w-full md:w-1/2 text-right pr-6">
                        <h3 class="text-xl font-semibold text-gray-100">Freelancing & UI/UX Focus</h3>
                        <p class="text-gray-300">Worked with clients to build modern web applications.</p>
                        <span class="text-gray-400">2023</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-12 bg-gray-900 text-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-6">My Projects</h2>

        <!-- Swiper Container -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- Project 1 -->
                <div class="swiper-slide bg-gray-800 p-6 rounded-lg shadow-lg">
                    <img src="project1.jpg" alt="Project 1" class="w-full h-48 object-cover rounded-md">
                    <h3 class="text-xl font-semibold mt-4">Project One</h3>
                    <p class="text-gray-400 text-sm mt-2">A brief description of the project.</p>
                    <a href="#" class="mt-4 inline-block text-blue-400 hover:text-blue-300">View Project</a>
                </div>

                <!-- Project 2 -->
                <div class="swiper-slide bg-gray-800 p-6 rounded-lg shadow-lg">
                    <img src="project2.jpg" alt="Project 2" class="w-full h-48 object-cover rounded-md">
                    <h3 class="text-xl font-semibold mt-4">Project Two</h3>
                    <p class="text-gray-400 text-sm mt-2">A brief description of the project.</p>
                    <a href="#" class="mt-4 inline-block text-blue-400 hover:text-blue-300">View Project</a>
                </div>

                <!-- Project 3 -->
                <div class="swiper-slide bg-gray-800 p-6 rounded-lg shadow-lg">
                    <img src="project3.jpg" alt="Project 3" class="w-full h-48 object-cover rounded-md">
                    <h3 class="text-xl font-semibold mt-4">Project Three</h3>
                    <p class="text-gray-400 text-sm mt-2">A brief description of the project.</p>
                    <a href="#" class="mt-4 inline-block text-blue-400 hover:text-blue-300">View Project</a>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="swiper-button-next text-white"></div>
            <div class="swiper-button-prev text-white"></div>

            <!-- Pagination Dots -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

    <!-- Skills Section -->
    <section id="skills" class="py-12 bg-gray-900 text-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-6">My Skills</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 ">
                <!-- Skill Item -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-md aos-init aos-animate project-card" data-aos="fade-up">
                    <div class="flex items-center space-x-4 mb-4">
                        <i class="fab fa-html5 text-orange-500 text-4xl"></i>
                        <h3 class="text-xl font-semibold">HTML</h3>
                    </div>
                    <div class="relative w-full bg-gray-700 h-3 rounded-full">
                        <div class="bg-orange-500 h-3 rounded-full progress-bar" style="width: 90%;"></div>
                    </div>
                    <p class="mt-2 text-sm text-gray-400">90% Proficiency</p>
                </div>
    
                <div class="bg-gray-800 p-6 rounded-lg shadow-md aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center space-x-4 mb-4">
                        <i class="fab fa-css3-alt text-blue-500 text-4xl"></i>
                        <h3 class="text-xl font-semibold">CSS</h3>
                    </div>
                    <div class="relative w-full bg-gray-700 h-3 rounded-full">
                        <div class="bg-blue-500 h-3 rounded-full progress-bar" style="width: 85%;"></div>
                    </div>
                    <p class="mt-2 text-sm text-gray-400">85% Proficiency</p>
                </div>
    
                <div class="bg-gray-800 p-6 rounded-lg shadow-md aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center space-x-4 mb-4">
                        <i class="fab fa-js-square text-yellow-500 text-4xl"></i>
                        <h3 class="text-xl font-semibold">JavaScript</h3>
                    </div>
                    <div class="relative w-full bg-gray-700 h-3 rounded-full">
                        <div class="bg-yellow-500 h-3 rounded-full progress-bar" style="width: 80%;"></div>
                    </div>
                    <p class="mt-2 text-sm text-gray-400">80% Proficiency</p>
                </div>
    
                <div class="bg-gray-800 p-6 rounded-lg shadow-md aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center space-x-4 mb-4">
                        <i class="fab fa-react text-cyan-400 text-4xl"></i>
                        <h3 class="text-xl font-semibold">React</h3>
                    </div>
                    <div class="relative w-full bg-gray-700 h-3 rounded-full">
                        <div class="bg-cyan-400 h-3 rounded-full progress-bar" style="width: 75%;"></div>
                    </div>
                    <p class="mt-2 text-sm text-gray-400">75% Proficiency</p>
                </div>
    
                <div class="bg-gray-800 p-6 rounded-lg shadow-md aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-center space-x-4 mb-4">
                        <i class="fab fa-laravel text-red-500 text-4xl"></i>
                        <h3 class="text-xl font-semibold">Laravel</h3>
                    </div>
                    <div class="relative w-full bg-gray-700 h-3 rounded-full">
                        <div class="bg-red-500 h-3 rounded-full progress-bar" style="width: 70%;"></div>
                    </div>
                    <p class="mt-2 text-sm text-gray-400">70% Proficiency</p>
                </div>
            </div>
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
    
    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn">↑</button>    

</body>
</html>
