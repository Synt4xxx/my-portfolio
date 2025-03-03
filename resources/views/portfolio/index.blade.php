<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ronald Edano | Front-End Developer</title>
    <script src="https://cdn.tailwindcss.com"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Hero Section -->
    <header class="bg-blue-600 text-white text-center py-10">
        <h1 class="text-4xl font-bold">👋 Hi, I'm Ronald Edano</h1>
        <h2 class="text-2xl mt-2">Front-End Developer | UI/UX Enthusiast</h2>
        <p class="mt-4">I craft responsive, user-friendly web interfaces with clean and modern designs.</p>
        <div class="mt-6">
            <a href="#projects" class="bg-white text-blue-600 px-6 py-2 rounded-full shadow-md">View My Work</a>
            <a href="#contact" class="bg-white text-blue-600 px-6 py-2 rounded-full shadow-md ml-4">Hire Me</a>
        </div>
    </header>

    <!-- About Me Section -->
    <section class="container mx-auto my-12 px-6">
        <h2 class="text-3xl font-bold text-center">About Me</h2>
        <p class="text-center mt-4 max-w-2xl mx-auto">
            I'm a passionate **Front-End Developer**, 25 years old, from **Bagong Silang, Caloocan City**.
            I specialize in creating visually appealing and highly interactive web applications using the latest front-end technologies.
        </p>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="bg-white py-12">
        <h2 class="text-3xl font-bold text-center">My Projects</h2>
        <div class="container mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-6 px-6 mt-6">
            <div class="bg-gray-200 p-6 rounded-lg shadow-md">
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
    <section class="container mx-auto my-12 px-6">
        <h2 class="text-3xl font-bold text-center">Skills & Technologies</h2>
        <ul class="flex flex-wrap justify-center mt-6 space-x-4">
            <li class="bg-blue-600 text-white px-4 py-2 rounded-full">HTML</li>
            <li class="bg-blue-600 text-white px-4 py-2 rounded-full">CSS</li>
            <li class="bg-blue-600 text-white px-4 py-2 rounded-full">JavaScript</li>
            <li class="bg-blue-600 text-white px-4 py-2 rounded-full">React.js</li>
            <li class="bg-blue-600 text-white px-4 py-2 rounded-full">Vue.js</li>
            <li class="bg-blue-600 text-white px-4 py-2 rounded-full">TailwindCSS</li>
            <li class="bg-blue-600 text-white px-4 py-2 rounded-full">Bootstrap</li>
        </ul>
    </section>

    <!-- Testimonials -->
    <section class="bg-white py-12">
        <h2 class="text-3xl font-bold text-center">Testimonials</h2>
        <p class="text-center mt-4 max-w-2xl mx-auto">
            "Ronald is an incredibly talented front-end developer! His attention to design and user experience is top-notch." - <b>Michael, Web Design Agency</b>
        </p>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container mx-auto my-12 px-6">
        <h2 class="text-3xl font-bold text-center">Contact Me</h2>
        <p class="text-center mt-4">📧 Email: <a href="mailto:ronald.edano@example.com" class="text-blue-600">ronald.edano@example.com</a></p>
        <p class="text-center mt-2">💼 LinkedIn: <a href="https://linkedin.com/in/ronaldedano" class="text-blue-600">linkedin.com/in/ronaldedano</a></p>
        <p class="text-center mt-2">🐙 GitHub: <a href="https://github.com/ronaldedano" class="text-blue-600">github.com/ronaldedano</a></p>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4 mt-12">
        <p>&copy; {{ date('Y') }} Ronald Edano. All rights reserved.</p>
    </footer>

</body>
</html>
