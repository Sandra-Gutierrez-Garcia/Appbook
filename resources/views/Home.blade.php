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
</body>
</html>
