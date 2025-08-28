<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de Tailwind CSS</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="bg-gray-100 p-4 shadow-lg">
        <div class="container mx-auto flex items-center justify-between">

            <!-- Navigation links -->
            <div class="flex items-center space-x-8">
                <a href="#" class="text-black hover:text-violet-600">Home</a>
                <a href="#" class="text-black hover:text-violet-600">Writer</a>
                <a href="#" class="text-black hover:text-violet-600">Books</a>
            </div>

            <!-- Name for app or logo -->
            <div class="flex items-center space-x-4">
                <span class="text-2xl font-light tracking-wide text-gray-700">Library<span class="text-violet-600 font-medium">Roses</span></span>
            </div>

            <!-- register and login -->
            <div class="flex items-center space-x-4">
                <a href="#" class="text-black hover:text-violet-600">Login</a>
                <a href="#" class="text-black hover:text-violet-600">Register</a>
            </div>
        </div>
    </nav>
    <!-- banner -->
    <div class="bg-gradient-to-b from-violet-50 to-violet-100 min-h-[16rem] flex items-center justify-center px-8 mt-8">
        <div class="container mx-auto flex items-center justify-center gap-12">
            <div class="w-40 h-56 bg-violet-700 rounded-lg shadow-lg flex items-center justify-center">
            </div>
            <div class="flex flex-col items-start max-w-xl">
                <h1 class="text-4xl font-bold text-violet-800 mb-3 leading-tight">The Whispering Shadows</h1>
                <p class="text-violet-600 text-lg mb-6 leading-relaxed">A group of friends uncovers hidden secrets in the shadows of their town, leading them on an unforgettable adventure.</p>
                <div class="flex items-center gap-4">
                <a href="#" class="bg-violet-600 text-white px-6 py-2.5 rounded-lg hover:bg-violet-700 transition-colors duration-300 font-medium">Read Now</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
