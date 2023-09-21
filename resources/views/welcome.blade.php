<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

</head>
<body class="antialiased">
    <header class="bg-blue-400 text-white py-4">
        <div class="container mx-auto px-4 flex justify-between items-center"> <!-- 4 pixels padding ruimte -->
            <h1 class="text-2xl font-semibold">Portfolio</h1>
            <ul class="flex space-x-4">
                <li><a href="#" class="hover:underline">Home</a></li>
                <li><a href="#" class="hover:underline">About me</a></li>
                <li><a href="#" class="hover:underline">Hobbies</a></li>
                <li><a href="#" class="hover:underline">Contact</a></li>
            </ul>
        </div>
    </header>
    <header class="bg-blue-600 text-white py-16 text-center">
        <h1 class="text-4xl font-semibold">Welkom op mijn pagina</h1>
        <p class="mt-4 text-lg">web development.</p>
    </header>
    <div class="p-6 border-t border-gray-100 md:border-t-0 md:border-l">
        <h2 class="text-3xl font-semibold mb-8 text-center">About me</h2>
        <div class="flex justify-center items-center ml-12">
            <p>
                Hello, I'm [Your Name]. I am a passionate web developer with expertise in Laravel, PHP, and JavaScript. I love building web applications and exploring new technologies. Feel free to get in touch with me to discuss your next project!
                Hello, I'm [Your Name]. I am a passionate web developer with expertise in Laravel, PHP, and JavaScript. I love building web applications and exploring new technologies. Feel free to get in touch with me to discuss your next project!
            </p>
        </div>
    </div>
    
  
    
    <div class="container mx-auto text-center mt-15 bg-fixed bg-blue-600">
        <div class="bg-blue-600 text-white py-16 text-center">
        <h2 class="text-3xl font-semibold mb-8">Hobbies</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
            <!-- Hobby Block 1 -->
            <div class="bg-blue-500 p-4 rounded-lg shadow-lg">
                <h3 class="text-white-700 font-semibold mb-2">Hobby 1</h3>
                <p class="text-white-700">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
            </div>
            <!-- Hobby Block 2 -->
            <div class="bg-blue-500 p-4 rounded-lg shadow-lg">
                <h3 class="text-white-700 font-semibold mb-2">Hobby 2</h3>
                <p class="text-white-700">Lorem ipsum, dolor sit amet consectetur adipisicing elit...</p>
            </div>
            <!-- Hobby Block 3 -->
            <div class="bg-blue-500 p-4 rounded-lg shadow-lg">
                <h3 class="text-white-700 font-semibold mb-2">Hobby 3</h3>
                <p class="text-white-700">Lorem ipsum, dolor sit amet consectetur adipisicing elit...</p>
            </div>
            <!-- Hobby Block 4 -->
            <div class="bg-blue-500 p-4 rounded-lg shadow-lg">
                <h3 class="text-white-700 font-semibold mb-2">Hobby 4</h3>
                <p class="text-white-700">Lorem ipsum, dolor sit amet consectetur adipisicing elit...</p>
            </div>
        </div>
    </div>
</div>
 <!-- socials -->
 <div class="text-center mt-8">
    <h2 class="text-3xl font-semibold mb-8 text-center">Socials</h2>
 <div class="flex justify-center mt-8">
    <a href="https://github.com/yourgithubprofile" class="text-blue-600 hover:text-blue-800 mr-4">
        <i class="fab fa-github-square fa-4x"></i>
    </a>
    <a href="https://www.linkedin.com/in/yourlinkedinprofile" class="text-blue-600 hover:text-blue-800 mr-4">
        <i class="fab fa-linkedin fa-4x"></i>
    </a>
    <a href="mailto:youremail@outlook.com" class="text-blue-600 hover:text-blue-800">
        <i class="fas fa-envelope fa-4x"></i>
    </a>
</div>
     <!-- Footer -->
     <footer class="bg-blue-600 text-white py-4 text-center mt-10"> <!-- Margin Top 10 -->
        <div class="container mx-auto">
            <p>&copy; 2023 Wesley | Project: Mijn Portfolio | Plek: Curio terheijdense weg 350</p>
        </div>
    </footer>
    
</body>
</html>
