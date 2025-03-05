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
<section id="about" class="min-h-screen flex items-center justify-center bg-gray-900 py-16 px-6">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        
        <!-- Left Side: Profile Image -->
        <div class="text-center md:text-left">
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
            <div class="relative">
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

            <div class="relative">
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

            <div class="relative">
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
<section id="projects" class="bg-gray-800 py-16 px-6">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold text-gray-100">My Projects</h2>
        <p class="mt-2 text-lg text-gray-400">Here are some of the projects I have built.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-6 mt-10">
            
            <!-- Project Card 1 -->
            <div class="project-card bg-gray-700 p-6 rounded-xl shadow-lg transition transform hover:-translate-y-2 hover:shadow-2xl">
                <img src="https://source.unsplash.com/400x250/?website,technology" alt="Project Image" class="w-full h-48 object-cover rounded-lg">
                <h3 class="text-2xl font-semibold text-purple-400 mt-4">🌐 Portfolio Website</h3>
                <p class="mt-2 text-gray-300">A fully responsive portfolio built with HTML, CSS, JavaScript, and Tailwind CSS.</p>
                
                <div class="mt-3 flex flex-wrap gap-2">
                    <span class="badge">HTML</span>
                    <span class="badge">TailwindCSS</span>
                    <span class="badge">JavaScript</span>
                </div>

                <div class="mt-5 flex justify-between">
                    <a href="https://github.com/yourusername/portfolio" target="_blank" class="project-btn">GitHub</a>
                    <a href="https://ronald-portfolio.com" target="_blank" class="project-btn">Live Demo</a>
                </div>
            </div>

            <!-- Project Card 2 -->
            <div class="project-card bg-gray-700 p-6 rounded-xl shadow-lg transition transform hover:-translate-y-2 hover:shadow-2xl">
                <img src="https://source.unsplash.com/400x250/?app,code" alt="Project Image" class="w-full h-48 object-cover rounded-lg">
                <h3 class="text-2xl font-semibold text-purple-400 mt-4">📱 Task Manager App</h3>
                <p class="mt-2 text-gray-300">A feature-rich task management app with Vue.js and Firebase.</p>

                <div class="mt-3 flex flex-wrap gap-2">
                    <span class="badge">Vue.js</span>
                    <span class="badge">Firebase</span>
                    <span class="badge">TailwindCSS</span>
                </div>

                <div class="mt-5 flex justify-between">
                    <a href="https://github.com/yourusername/task-manager" target="_blank" class="project-btn">GitHub</a>
                    <a href="https://taskmanager-app.com" target="_blank" class="project-btn">Live Demo</a>
                </div>
            </div>

            <!-- Project Card 3 -->
            <div class="project-card bg-gray-700 p-6 rounded-xl shadow-lg transition transform hover:-translate-y-2 hover:shadow-2xl">
                <img src="https://source.unsplash.com/400x250/?dashboard,design" alt="Project Image" class="w-full h-48 object-cover rounded-lg">
                <h3 class="text-2xl font-semibold text-purple-400 mt-4">📊 Admin Dashboard</h3>
                <p class="mt-2 text-gray-300">An interactive dashboard built with React and Chart.js.</p>

                <div class="mt-3 flex flex-wrap gap-2">
                    <span class="badge">React</span>
                    <span class="badge">Chart.js</span>
                    <span class="badge">TailwindCSS</span>
                </div>

                <div class="mt-5 flex justify-between">
                    <a href="https://github.com/yourusername/admin-dashboard" target="_blank" class="project-btn">GitHub</a>
                    <a href="https://admindashboard.com" target="_blank" class="project-btn">Live Demo</a>
                </div>
            </div>

        </div>
    </div>
</section>

    <!-- Skills Section -->
    <section class="min-h-[600px] flex items-center justify-center container mx-auto py-16 px-6">
        <div class="mt-8">
            <h3 class="text-2xl font-semibold text-gray-200">My Skills</h3>
            <div class="mt-4">
                <p class="text-gray-300">HTML & CSS</p>
                <div class="w-full bg-gray-700 h-2 rounded-lg overflow-hidden">
                    <div class="bg-purple-500 h-full skill-bar" style="width: 0%;" data-width="90%"></div>
                </div>
            </div>
            <div class="mt-4">
                <p class="text-gray-300">JavaScript</p>
                <div class="w-full bg-gray-700 h-2 rounded-lg overflow-hidden">
                    <div class="bg-blue-500 h-full skill-bar" style="width: 0%;" data-width="85%"></div>
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
    <button id="scrollToTopBtn" class="fixed bottom-6 right-6 bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-lg hidden transition-opacity duration-300">
        ↑
    </button>
    

</body>
</html>
