<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ronald Edano - Frontend Developer Portfolio</title>
<meta name="description" content="Web Developer specializing in PHP, Laravel, Tailwind, CSS and JavaScript.">
<meta name="keywords" content="Web Developer, TPHP, Laravel, Tailwind, CSS and JavaScript.">
<meta name="author" content="Ronald Edano">

<!-- Open Graph for Social Sharing -->
<meta property="og:title" content="Ronald Edano - Portfolio">
<meta property="og:description" content="Showcasing my best Web development projects.">
<meta property="og:image" content="preview-image.jpg">
<meta property="og:url" content="https://ronaldedano.dev">
<meta name="twitter:card" content="summary_large_image">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('year').textContent = new Date().getFullYear();

            // Theme toggle functionality
            const themeToggle = document.getElementById('themeToggle');
            
            function updateTheme(isDark) {
                if (isDark) {
                    document.documentElement.classList.add('dark');
                    localStorage.theme = 'dark';
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.theme = 'light';
                }
            }

            themeToggle.addEventListener('click', () => {
                const isDark = document.documentElement.classList.toggle('dark');
                updateTheme(isDark);
            });

            // Update all section backgrounds with dark mode support
            document.querySelectorAll('section').forEach(section => {
                section.classList.add('dark-transition');
                if (section.classList.contains('bg-gray-900')) {
                    section.classList.remove('bg-gray-900');
                    section.classList.add('bg-gray-100', 'dark:bg-gray-900');
                }
            });
        });
    </script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
   
    <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <style>
        /* Existing styles ... */
        
        /* Dark mode toggle styles */
        .theme-toggle {
            position: fixed;
            top: 1rem;
            right: 1rem;
            z-index: 50;
            padding: 0.75rem;
            border-radius: 9999px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .theme-toggle:hover {
            transform: scale(1.1);
        }

        /* Dark mode transitions */
        .dark-transition {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        @keyframes fade-in {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fade-in 1s ease-out;
        }

        .animate-fade-in-up {
            animation: fade-in-up 1s ease-out;
        }

        .delay-200 {
            animation-delay: 200ms;
        }

        .delay-300 {
            animation-delay: 300ms;
        }

        .delay-400 {
            animation-delay: 400ms;
        }

        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 8s linear infinite;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>

    <script>
        // Check for saved theme preference or default to system preference
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    <body class="bg-white dark:bg-gray-950 text-gray-900 dark:text-gray-100 dark-transition">

    <!-- Theme Toggle Button -->
    <button id="themeToggle" class="theme-toggle">
        <svg id="sunIcon" class="w-6 h-6 hidden dark:block" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"/>
        </svg>
        <svg id="moonIcon" class="w-6 h-6 block dark:hidden" fill="currentColor" viewBox="0 0 20 20">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"/>
        </svg>
    </button>

    <!-- Hero Section -->
    <header class="relative h-screen flex items-center justify-center text-center overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0">
            <!-- Background gradient - Light/Dark mode variants -->
            <div class="absolute inset-0 bg-gradient-to-br from-white via-purple-50 to-blue-50 dark:from-gray-900/95 dark:via-gray-800/95 dark:to-gray-950/95 animate-gradient"></div>
            
            <!-- Pattern Overlay -->
            <div class="absolute inset-0 opacity-10 dark:opacity-20">
                <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC40Ij48cGF0aCBkPSJNMzYgMzRjMC0yIDItNCAyLTRzLTItMi00LTJsLTIgMnYyaDJ2MmgyeiIvPjwvZz48L2c+PC9zdmc+')] bg-repeat"></div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 py-8 flex flex-col h-full justify-center space-y-6">
            <!-- Profile Section -->
            <div class="space-y-4 sm:space-y-6">
                <!-- Profile Image -->
                <div class="flex justify-center">
                    <div class="relative">
                        <img 
                            src="{{ asset('images/RN2X2.jpg') }}" 
                            alt="Ronald Edano"
                            class="w-24 sm:w-28 h-24 sm:h-28 rounded-full border-4 border-purple-200 dark:border-white/20 shadow-xl animate-fade-in"
                        >
                        <div class="absolute -bottom-1 -right-1 bg-green-500 w-4 h-4 rounded-full border-2 border-white dark:border-gray-900"></div>
                    </div>
                </div>

                <!-- Greeting -->
                <div class="animate-fade-in-up space-y-2 sm:space-y-3">
                    <span class="px-3 py-1 rounded-full bg-purple-100/80 dark:bg-white/10 backdrop-blur-sm border border-purple-200 dark:border-white/20 text-xs sm:text-sm font-medium text-purple-800 dark:text-white inline-block">
                        Available for freelance work
                    </span>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 dark:text-white tracking-tight">
                        👋 Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600 dark:from-purple-400 dark:to-blue-400">Ronald Edano</span>
                    </h1>

                    <h2 class="text-4xl font-bold text-gray-800 dark:text-white">
                        <span id="typewriter"></span><span class="cursor">|</span>
                      </h2>
                      
                      <script>
                      const words = [
                        "Web Developer",
                        "UI/UX Enthusiast",
                        "Graphic Designer"
                      ];
                      
                      let i = 0;
                      let j = 0;
                      let isDeleting = false;
                      
                      function stripHTML(html) {
                        let div = document.createElement("div");
                        div.innerHTML = html;
                        return div.textContent || div.innerText || "";
                      }
                      
                      function getVisibleSubstring(word, length) {
                        const text = stripHTML(word);
                        const visiblePart = text.substring(0, length);
                      
                        if (word.includes("<span")) {
               
                          const start = word.indexOf("<span");
                          const end = word.indexOf("</span>") + 7;
                          const htmlPart = word.substring(start, end);
                          const stripped = stripHTML(htmlPart);
                          const visibleName = stripped.substring(0, length - 9); 
                      
                          const fullPrefix = `👋 Hi, I'm `;
                          return fullPrefix + `<span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600 dark:from-purple-400 dark:to-blue-400">${visibleName}</span>`;
                        }
                      
                        return visiblePart;
                      }
                      
                      function type() {
                        const currentWord = words[i];
                        const textElement = document.getElementById("typewriter");
                        const fullText = stripHTML(currentWord);
                      
                        if (isDeleting) {
                          j--;
                          if (j <= 0) {
                            isDeleting = false;
                            i = (i + 1) % words.length;
                          }
                        } else {
                          j++;
                          if (j >= fullText.length) {
                            isDeleting = true;
                          }
                        }
                      
                        textElement.innerHTML = getVisibleSubstring(currentWord, j);
                      
                        setTimeout(type, 120);
                      }
                      
                      type();
                      </script>                      
                </div>

                <!-- Description -->
                <p class="text-base sm:text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto leading-relaxed animate-fade-in-up delay-200">
                    I craft modern, responsive, and engaging web interfaces with a focus on 
                    <span class="text-purple-300">performance</span>, 
                    <span class="text-blue-300">accessibility</span>, and 
                    <span class="text-pink-300">user experience</span>.
                </p>

                <!-- Tech Stack -->
                <div class="flex justify-center gap-3 animate-fade-in-up delay-300">
                    <div class="flex gap-2 px-3 py-1.5 rounded-full bg-white/80 dark:bg-white/5 backdrop-blur-sm border border-purple-100 dark:border-white/10">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" class="w-5 h-5" title="HTML5">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" class="w-5 h-5" title="CSS3">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" class="w-5 h-5" title="JavaScript">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" class="w-5 h-5" title="PHP">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" class="w-5 h-5" title="Laravel">
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-wrap justify-center gap-3 animate-fade-in-up delay-400">
                    <a href="#projects" class="group relative px-4 py-2 text-sm sm:text-base font-medium text-white transition-colors duration-300 transform rounded-lg hover:bg-purple-100/10">
                        <span class="absolute inset-0 w-full h-full transition duration-300 transform -translate-x-1 -translate-y-1 bg-purple-600 dark:bg-purple-500 ease opacity-80 group-hover:translate-x-0 group-hover:translate-y-0 rounded-lg"></span>
                        <span class="absolute inset-0 w-full h-full transition duration-300 transform translate-x-1 translate-y-1 bg-blue-600 dark:bg-blue-500 ease opacity-80 group-hover:translate-x-0 group-hover:translate-y-0 rounded-lg"></span>
                        <span class="relative">View My Work</span>
                    </a>
                    <a href="#contact" class="px-4 py-2 text-sm sm:text-base font-medium text-gray-900 dark:text-white bg-white/80 dark:bg-white/10 rounded-lg hover:bg-purple-50 dark:hover:bg-white/20 transition-colors duration-300 border border-purple-100 dark:border-white/10">
                        Contact Me
                    </a>
                    <a href="#skills" class="px-4 py-2 text-sm sm:text-base font-medium text-gray-900 dark:text-white bg-white/50 dark:bg-white/5 rounded-lg hover:bg-purple-50 dark:hover:bg-white/10 transition-colors duration-300 border border-purple-100 dark:border-white/10">
                        See Skills
                    </a>
                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 animate-bounce">
                <svg class="w-5 h-5 text-gray-700 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </header>

<!-- About Me Section -->
<section id="about" class="relative py-20 bg-gray-50 dark:bg-gray-900 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 dark:opacity-20">
        <div class="absolute inset-y-0 left-0 w-1/2 bg-gradient-to-r from-purple-50 to-transparent dark:from-purple-900/20"></div>
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-purple-500/20 to-transparent"></div>
    </div>

    <div class="container mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="inline-flex items-center px-4 py-1 rounded-full bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-sm font-medium mb-4">
                <span class="flex w-2 h-2 rounded-full bg-purple-500 mr-2"></span>
                About Me
            </h2>
            <h3 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Get to Know Me Better</h3>
            <div class="w-20 h-1 bg-gradient-to-r from-purple-500 to-pink-500 mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left Side: Profile Image & Stats -->
            <div class="relative group">
                <!-- Main Image -->
                <div class="relative z-10 rounded-2xl overflow-hidden shadow-2xl transform group-hover:scale-[0.98] transition-transform duration-500">
                    <img 
                        src="{{ asset('images/RN2X2.jpg') }}" 
    alt="Ronald Edano's Profile Picture" 
                        class="w-full h-auto object-cover"
                        loading="lazy"
                    >
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <div class="flex items-center space-x-4">
                                <div class="flex-1">
                                    <h4 class="text-white font-semibold">Ronald Edano</h4>
                                    <p class="text-gray-300 text-sm">Web Developer</p>
                                </div>
                                <div class="flex space-x-3">
                                    <a href="https://github.com/ronaldedano" target="_blank" class="text-white hover:text-purple-400 transition-colors">
                                        <i class="fab fa-github text-xl"></i>
                                    </a>
                                    <a href="https://linkedin.com/in/ronaldedano" target="_blank" class="text-white hover:text-purple-400 transition-colors">
                                        <i class="fab fa-linkedin text-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
</div>

                <!-- Stats Cards -->
                <div class="absolute -right-6 top-1/4 z-20 transform translate-x-full md:translate-x-0 group-hover:translate-x-0 transition-transform duration-500">
                    <div class="space-y-4">
                        <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-lg">
                            <div class="text-3xl font-bold text-purple-600 dark:text-purple-400">1+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-300">Years Experience</div>
                        </div>
                        <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-lg">
                            <div class="text-3xl font-bold text-blue-600 dark:text-blue-400">3</div>
                            <div class="text-sm text-gray-600 dark:text-gray-300">Projects Completed</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: About Content -->
            <div class="space-y-8">
                <!-- Bio -->
                <div class="prose prose-lg dark:prose-invert">
                    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
                        I'm a passionate <span class="text-purple-600 dark:text-purple-400 font-semibold">Web Developer</span> based in 
                        <span class="text-purple-600 dark:text-purple-400 font-semibold">Bagong Silang, Caloocan City</span>. 
                        I specialize in crafting beautiful and interactive web applications using modern front-end technologies.
                    </p>
                    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
                        My goal is to build fast, accessible, and user-friendly interfaces that create memorable user experiences. 🚀
                    </p>
                </div>

                <!-- Tech Stack -->
                <div>
                    <h4 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Tech Stack</h4>
                    <div class="grid grid-cols-3 sm:grid-cols-6 gap-4">
                        <div class="group flex flex-col items-center">
                            <div class="p-3 rounded-xl bg-white dark:bg-gray-800 shadow-lg group-hover:shadow-purple-500/20 transition-shadow">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" class="w-8 h-8">
                            </div>
                            <span class="mt-2 text-sm text-gray-600 dark:text-gray-400">HTML5</span>
                        </div>
                        <div class="group flex flex-col items-center">
                            <div class="p-3 rounded-xl bg-white dark:bg-gray-800 shadow-lg group-hover:shadow-blue-500/20 transition-shadow">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" class="w-8 h-8">
                            </div>
                            <span class="mt-2 text-sm text-gray-600 dark:text-gray-400">CSS3</span>
                        </div>
                        <div class="group flex flex-col items-center">
                            <div class="p-3 rounded-xl bg-white dark:bg-gray-800 shadow-lg group-hover:shadow-yellow-500/20 transition-shadow">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" class="w-8 h-8">
                            </div>
                            <span class="mt-2 text-sm text-gray-600 dark:text-gray-400">JavaScript</span>
                        </div>
                        <div class="group flex flex-col items-center">
                            <div class="p-3 rounded-xl bg-white dark:bg-gray-800 shadow-lg group-hover:shadow-sky-500/20 transition-shadow">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-plain.svg" class="w-8 h-8">
                            </div>
                            <span class="mt-2 text-sm text-gray-600 dark:text-gray-400">Tailwind</span>
                        </div>
                </div>
            </div>

            <!-- Fun Facts -->
                <div>
                    <h4 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Fun Facts</h4>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="p-4 rounded-xl bg-white dark:bg-gray-800 shadow-lg">
                            <div class="flex items-center space-x-3">
                                <span class="text-2xl">🔥</span>
                                <p class="text-gray-700 dark:text-gray-300">Self-taught developer</p>
                            </div>
                        </div>
                        <div class="p-4 rounded-xl bg-white dark:bg-gray-800 shadow-lg">
                            <div class="flex items-center space-x-3">
                                <span class="text-2xl">🎸</span>
                                <p class="text-gray-700 dark:text-gray-300">Love playing guitar</p>
                            </div>
                        </div>
                        <div class="p-4 rounded-xl bg-white dark:bg-gray-800 shadow-lg">
                            <div class="flex items-center space-x-3">
                                <span class="text-2xl">💡</span>
                                <p class="text-gray-700 dark:text-gray-300">Always learning new tech</p>
                            </div>
                        </div>
                        <div class="p-4 rounded-xl bg-white dark:bg-gray-800 shadow-lg">
                            <div class="flex items-center space-x-3">
                                <span class="text-2xl">🌟</span>
                                <p class="text-gray-700 dark:text-gray-300">UI/UX enthusiast</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Work Experience Timeline -->
<section id="experience" class="relative py-20 bg-gray-50 dark:bg-gray-900">
    <!-- Background Elements -->
    <div class="absolute inset-0 dark:opacity-20">
        <div class="absolute inset-y-0 right-0 w-1/2 bg-gradient-to-l from-purple-50 to-transparent dark:from-purple-900/20"></div>
        <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-purple-500/20 to-transparent"></div>
    </div>

    <div class="container mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="inline-flex items-center px-4 py-1 rounded-full bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-sm font-medium mb-4">
                <span class="flex w-2 h-2 rounded-full bg-purple-500 mr-2"></span>
                Professional Journey
            </h2>
            <h3 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Work Experience</h3>
            <div class="w-20 h-1 bg-gradient-to-r from-purple-500 to-pink-500 mx-auto"></div>
        </div>

        <!-- Timeline Container -->
        <div class="relative max-w-4xl mx-auto">
            <!-- Central Line -->
            <div class="absolute left-1/2 transform -translate-x-1/2 w-px h-full bg-gradient-to-b from-purple-500 via-purple-500 to-transparent"></div>

            <!-- Timeline Items -->
            <!-- Latest Experience -->
            <div class="relative mb-16 group">
                <div class="flex items-center justify-center mb-4">
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 bg-purple-500 rounded-full border-4 border-white dark:border-gray-900 shadow-lg group-hover:scale-110 transition-transform duration-300"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                    <!-- Left Side: Date & Company -->
                    <div class="text-right md:pr-8 group-hover:transform group-hover:-translate-x-2 transition-transform duration-300">
                        <span class="inline-block px-4 py-1 rounded-full bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-sm font-medium mb-2">
                            July 2024 - January 2025
                        </span>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-1">CAMBE DENTAL BILLING SERVICES, INC.</h4>
                        <p class="text-purple-600 dark:text-purple-400 font-medium">Dental Insurance Verification Specialist</p>
                    </div>

                    <!-- Right Side: Responsibilities -->
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg transform group-hover:translate-x-2 transition-transform duration-300 md:ml-8">
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-2 h-2 mt-2 rounded-full bg-purple-500 mr-3"></span>
                                <span class="text-gray-700 dark:text-gray-300">Verified patient insurance eligibility and coverage</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-2 h-2 mt-2 rounded-full bg-purple-500 mr-3"></span>
                                <span class="text-gray-700 dark:text-gray-300">Maintained accurate patient records</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-2 h-2 mt-2 rounded-full bg-purple-500 mr-3"></span>
                                <span class="text-gray-700 dark:text-gray-300">Resolved denied claims with investigations</span>
                            </li>
                    </ul>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-sm rounded-full">PDF Editor</span>
                            <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-sm rounded-full">Dentrix</span>
                            <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-sm rounded-full">Softdent</span>
                        </div>
                    </div>
                </div>
            </div>
                                                    
            <!-- Middle Experience -->
            <div class="relative mb-16 group">
                <div class="flex items-center justify-center mb-4">
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 bg-blue-500 rounded-full border-4 border-white dark:border-gray-900 shadow-lg group-hover:scale-110 transition-transform duration-300"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                    <!-- Left Side: Responsibilities -->
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg transform group-hover:-translate-x-2 transition-transform duration-300 md:mr-8 order-2 md:order-1">
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-2 h-2 mt-2 rounded-full bg-blue-500 mr-3"></span>
                                <span class="text-gray-700 dark:text-gray-300">Implemented asset management system</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-2 h-2 mt-2 rounded-full bg-blue-500 mr-3"></span>
                                <span class="text-gray-700 dark:text-gray-300">Provided technical support to warehouse staff</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-2 h-2 mt-2 rounded-full bg-blue-500 mr-3"></span>
                                <span class="text-gray-700 dark:text-gray-300">Conducted asset audits for compliance</span>
                            </li>
                    </ul>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-sm rounded-full">Asset Management</span>
                            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-sm rounded-full">Technical Support</span>
                        </div>
                    </div>

                    <!-- Right Side: Date & Company -->
                    <div class="text-left md:pl-8 group-hover:transform group-hover:translate-x-2 transition-transform duration-300 order-1 md:order-2">
                        <span class="inline-block px-4 py-1 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-sm font-medium mb-2">
                            January 2024 - July 2024
                        </span>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-1">TAP Services Inc.</h4>
                        <p class="text-blue-600 dark:text-blue-400 font-medium">Support Engineer II - Asset Management</p>
                    </div>
                </div>
            </div>

            <!-- Earliest Experience -->
            <div class="relative group">
                <div class="flex items-center justify-center mb-4">
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 bg-pink-500 rounded-full border-4 border-white dark:border-gray-900 shadow-lg group-hover:scale-110 transition-transform duration-300"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                    <!-- Left Side: Date & Company -->
                    <div class="text-right md:pr-8 group-hover:transform group-hover:-translate-x-2 transition-transform duration-300">
                        <span class="inline-block px-4 py-1 rounded-full bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 text-sm font-medium mb-2">
                            July 2023 - Dec 2023
                        </span>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-1">DR. JOSE N. RODRIGUEZ MEMORIAL HOSPITAL</h4>
                        <p class="text-pink-600 dark:text-pink-400 font-medium">Junior Front-End Developer</p>
                    </div>

                    <!-- Right Side: Responsibilities -->
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg transform group-hover:translate-x-2 transition-transform duration-300 md:ml-8">
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-2 h-2 mt-2 rounded-full bg-pink-500 mr-3"></span>
                                <span class="text-gray-700 dark:text-gray-300">Designed hospital's appointment system website</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-2 h-2 mt-2 rounded-full bg-pink-500 mr-3"></span>
                                <span class="text-gray-700 dark:text-gray-300">Developed user-friendly scheduling interface</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-2 h-2 mt-2 rounded-full bg-pink-500 mr-3"></span>
                                <span class="text-gray-700 dark:text-gray-300">Collaborated with healthcare teams</span>
                            </li>
                    </ul>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 text-sm rounded-full">PHP</span>
                            <span class="px-3 py-1 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 text-sm rounded-full">JavaScript</span>
                            <span class="px-3 py-1 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 text-sm rounded-full">CSS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="relative py-20 bg-gray-50 dark:bg-gray-900">
    <!-- Background Elements -->
    <div class="absolute inset-0 dark:opacity-20">
        <div class="absolute inset-y-0 left-0 w-1/2 bg-gradient-to-r from-purple-50 to-transparent dark:from-purple-900/20"></div>
        <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-purple-500/20 to-transparent"></div>
    </div>

    <div class="container mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="inline-flex items-center px-4 py-1 rounded-full bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-sm font-medium mb-4">
                <span class="flex w-2 h-2 rounded-full bg-purple-500 mr-2"></span>
                Featured Projects
            </h2>
            <h3 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">My Recent Work</h3>
            <div class="w-20 h-1 bg-gradient-to-r from-purple-500 to-pink-500 mx-auto"></div>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- Talatelemed Project -->
            <article class="group bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="relative overflow-hidden">
                    <div class="absolute top-4 right-4 z-10">
                        <span class="px-3 py-1 bg-green-500/90 text-white text-xs rounded-full backdrop-blur-sm">
                            Active Project
                        </span>
                    </div>
                    <img 
                        src="{{ asset('images/talatelemed.png') }}" 
                        alt="Talatelemed - Healthcare Platform"
                        class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-300"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="flex gap-2">
                                <a href="https://talatelemedconsult.com" target="_blank" 
                                   class="px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-white text-sm hover:bg-white/30 transition-colors">
                                    <i class="fas fa-external-link-alt mr-1"></i> Visit Site
                                </a>
                                <a href="#" target="_blank" 
                                   class="px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-white text-sm hover:bg-white/30 transition-colors">
                                    <i class="fas fa-play mr-1"></i> Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                        Talatelemed
                        <span class="ml-2 text-sm font-normal text-purple-600 dark:text-purple-400">Healthcare Platform</span>
                    </h4>
                    
                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                        A modern healthcare platform streamlining patient-provider interactions through appointment scheduling, electronic health records, and secure messaging.
                    </p>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 text-xs rounded-full">PHP</span>
                        <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-xs rounded-full">HTML</span>
                        <span class="px-2 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-xs rounded-full">CSS</span>
                        <span class="px-2 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 text-xs rounded-full">JavaScript</span>
                    </div>

                    <div class="space-y-4">
                        <!-- Key Features -->
                        <div>
                            <h5 class="text-sm font-semibold text-gray-900 dark:text-white mb-2">Key Features:</h5>
                            <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-2">
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 w-1.5 h-1.5 mt-2 rounded-full bg-purple-500 mr-2"></span>
                                    Online appointment scheduling system
                                </li>
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 w-1.5 h-1.5 mt-2 rounded-full bg-purple-500 mr-2"></span>
                                    Secure patient health records management
                                </li>
                            </ul>
                        </div>

                        <!-- Technical Highlights -->
                        <div>
                            <h5 class="text-sm font-semibold text-gray-900 dark:text-white mb-2">Technical Highlights:</h5>
                            <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-2">
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 w-1.5 h-1.5 mt-2 rounded-full bg-blue-500 mr-2"></span>
                                    HIPAA-compliant data encryption
                                </li>
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 w-1.5 h-1.5 mt-2 rounded-full bg-blue-500 mr-2"></span>
                                    Real-time notifications system
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Complaint Ticketing System -->
            <article class="group bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="relative overflow-hidden">
                    <img 
                        src="{{ asset('images/Complaint.png') }}" 
                        alt="Complaint Ticketing System"
                        class="w-full h-48 object-cover-cnet transform group-hover:scale-110 transition-transform duration-300"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="flex gap-2">
                                <a href="https://github.com/Synt4xxx/Complaint-Ticketing-System" target="_blank" 
                                   class="px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-white text-sm hover:bg-white/30 transition-colors">
                                    <i class="fab fa-github mr-1"></i> View Code
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Complaint Ticketing System</h4>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                        A comprehensive ticketing system for managing customer complaints and support requests, built with PHP.
                    </p>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 text-xs rounded-full">PHP</span>
                        <span class="px-2 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 text-xs rounded-full">Laravel</span>
                        <span class="px-2 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-xs rounded-full">Tailwind</span>
                         <span class="px-2 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 text-xs rounded-full">JavaScript</span>
            </div>

                    <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-2">
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-1.5 h-1.5 mt-2 rounded-full bg-purple-500 mr-2"></span>
                            Ticket management and tracking system
                        </li>
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-1.5 h-1.5 mt-2 rounded-full bg-purple-500 mr-2"></span>
                            User authentication and role management
                        </li>
                    </ul>
                </div>
            </article>
            </div>

        <!-- GitHub Activity -->
        <div class="mt-16 text-center">
            <a href="https://github.com/Synt4xxx" target="_blank" 
               class="inline-flex items-center px-6 py-3 bg-gray-900 dark:bg-gray-800 text-white rounded-full hover:bg-gray-800 dark:hover:bg-gray-700 transition-colors">
                <i class="fab fa-github mr-2"></i>
                See More on GitHub
            </a>
        </div>
    </div>
</section>

    <!-- Skills Section -->
    <section id="skills" class="relative py-20 bg-gray-50 dark:bg-gray-900">

        <div class="container mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="inline-flex items-center px-4 py-1 rounded-full bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-sm font-medium mb-4">
                    <span class="flex w-2 h-2 rounded-full bg-purple-500 mr-2"></span>
                    Professional Skills
                </h2>
                <h3 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Technical Expertise</h3>
                <div class="w-20 h-1 bg-gradient-to-r from-purple-500 to-pink-500 mx-auto"></div>
            </div>

            <!-- Skills Grid -->
            <div class="max-w-6xl mx-auto">
                <!-- Frontend Development -->
                <div class="mb-12">
                    <h4 class="text-xl font-semibold text-gray-900 dark:text-white mb-6 flex items-center">
                        <i class="fas fa-code text-purple-500 mr-3"></i>
                        Website Development
                    </h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                        <!-- HTML -->
                        <div class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" class="w-8 h-8 mr-3">
                                    <h5 class="text-lg font-semibold text-gray-900 dark:text-white">HTML5</h5>
                                </div>
                                <span class="text-purple-600 dark:text-purple-400 font-semibold">80%</span>
                            </div>
                            <div class="h-2 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-purple-500 to-pink-500 rounded-full" style="width: 80%"></div>
                            </div>
                            <div class="mt-4 text-sm text-gray-600 dark:text-gray-300">
                                <ul class="space-y-1">
                                    <li>• Semantic Markup</li>
                                    <li>• Accessibility</li>
                                    <li>• SEO Optimization</li>
                                </ul>
                            </div>
                        </div>
            
                        <!-- PHP -->
                        <div class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-l transition-all duration-300">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" class="w-8 h-8 mr-3">
                                    <h5 class="text-lg font-semibold text-gray-900 dark:text-white">PHP</h5>
                                </div>
                                <span class="text-orange-600 dark:text-orange-400 font-semibold">70%</span>
                            </div>
                            <div class="h-2 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-orange-500 to-red-500 rounded-full" style="width: 70%"></div>
                            </div>
                            <div class="mt-4 text-sm text-gray-600 dark:text-gray-300">
                                <ul class="space-y-1">
                                    <li>• Object-Oriented Programming (OOP)</li>
                                    <li>• Laravel Framework Proficiency</li>
                                    <li>• RESTful API Development</li>
                                </ul>
                            </div>
                        </div>
            
                        <!-- CSS -->
                        <div class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" class="w-8 h-8 mr-3">
                                    <h5 class="text-lg font-semibold text-gray-900 dark:text-white">CSS3</h5>
                                </div>
                                <span class="text-blue-600 dark:text-blue-400 font-semibold">75%</span>
                            </div>
                            <div class="h-2 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full" style="width: 75%"></div>
                            </div>
                            <div class="mt-4 text-sm text-gray-600 dark:text-gray-300">
                                <ul class="space-y-1">
                                    <li>• Flexbox & Grid</li>
                                    <li>• Animations & Transitions</li>
                                    <li>• Responsive Design</li>
                                </ul>
                            </div>
                        </div>
            
                        <!-- JavaScript -->
                        <div class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" class="w-8 h-8 mr-3">
                                    <h5 class="text-lg font-semibold text-gray-900 dark:text-white">JavaScript</h5>
                                </div>
                                <span class="text-yellow-600 dark:text-yellow-400 font-semibold">65%</span>
                            </div>
                            <div class="h-2 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full" style="width: 65%"></div>
                            </div>
                            <div class="mt-4 text-sm text-gray-600 dark:text-gray-300">
                                <ul class="space-y-1">
                                    <li>• ES6+ Features</li>
                                    <li>• DOM Manipulation</li>
                                    <li>• Async Programming</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            
    
                <!-- Frameworks & Libraries -->
                <div class="mb-12">
                    <h4 class="text-xl font-semibold text-gray-900 dark:text-white mb-6 flex items-center">
                        <i class="fas fa-layer-group text-purple-500 mr-3"></i>
                        Frameworks & Libraries
                    </h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                        <!-- Laravel -->
                        <div class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" class="w-8 h-8 mr-3">
                                    <h5 class="text-lg font-semibold text-gray-900 dark:text-white">Laravel</h5>
                                </div>
                                <span class="text-red-600 dark:text-red-400 font-semibold">70%</span>
                            </div>
                            <div class="h-2 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-red-500 to-pink-500 rounded-full transform origin-left transition-transform duration-500 group-hover:scale-x-100" style="width: 70%"></div>
                    </div>
                            <div class="mt-4 text-sm text-gray-600 dark:text-gray-300">
                                <ul class="space-y-1">
                                    <li>• MVC Architecture</li>
                                    <li>• Eloquent ORM</li>
                                    <li>• API Development</li>
                                </ul>
                    </div>
                </div>
    
                        <!-- Tailwind CSS -->
                        <div class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-plain.svg" class="w-8 h-8 mr-3">
                                    <h5 class="text-lg font-semibold text-gray-900 dark:text-white">Tailwind CSS</h5>
                                </div>
                                <span class="text-teal-600 dark:text-teal-400 font-semibold">60%</span>
                            </div>
                            <div class="h-2 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-teal-500 to-green-500 rounded-full transform origin-left transition-transform duration-500 group-hover:scale-x-100" style="width: 85%"></div>
                            </div>
                            <div class="mt-4 text-sm text-gray-600 dark:text-gray-300">
                                <ul class="space-y-1">
                                    <li>• Utility-First Approach</li>
                                    <li>• Custom Components</li>
                                    <li>• Responsive Design</li>
                                </ul>
                            </div>
                    </div>
                    </div>
                </div>
    
                <!-- Additional Skills -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">
                    <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center hover:shadow-lg transition-shadow duration-300">
                        <i class="fas fa-database text-2xl text-purple-500 mb-2"></i>
                        <h6 class="text-sm font-medium text-gray-900 dark:text-white">MySQL</h6>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center hover:shadow-lg transition-shadow duration-300">
                        <i class="fas fa-code-branch text-2xl text-purple-500 mb-2"></i>
                        <h6 class="text-sm font-medium text-gray-900 dark:text-white">Git</h6>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center hover:shadow-lg transition-shadow duration-300">
                        <i class="fas fa-mobile-alt text-2xl text-purple-500 mb-2"></i>
                        <h6 class="text-sm font-medium text-gray-900 dark:text-white">Responsive Design</h6>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center hover:shadow-lg transition-shadow duration-300">
                        <i class="fas fa-paint-brush text-2xl text-purple-500 mb-2"></i>
                        <h6 class="text-sm font-medium text-gray-900 dark:text-white">UI/UX Design</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>    

<!-- Contact Section -->
<section id="contact" class="min-h-[200px] flex items-center justify-center container mx-auto py-6 px-6">
    <div class="text-center">
        <h2 class="text-3xl font-bold text-gray-100">Contact Me</h2>
        <p class="mt-2 text-lg">📧 Email: <a href="mailto:ronaldedano9919@gmail.com" class="text-blue-400 hover:text-blue-300">ronald.edano@example.com</a></p>
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
