<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de Tailwind CSS</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <!-- Navegación -->
    <nav class="bg-blue-600 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">AppBook</h1>
            <div class="space-x-4">
                <a href="#" class="hover:text-blue-200 transition">Inicio</a>
                <a href="#" class="hover:text-blue-200 transition">Libros</a>
                <a href="#" class="hover:text-blue-200 transition">Autores</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-white shadow-lg mt-6 py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-4">Bienvenido a AppBook</h2>
            <p class="text-center text-gray-600 max-w-2xl mx-auto">
                Descubre un mundo de historias increíbles en nuestra biblioteca digital.
            </p>
            <div class="mt-8 text-center">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg transition duration-300 transform hover:scale-105">
                    Explorar Libros
                </button>
            </div>
        </div>
    </div>

    <!-- Grid de Características -->
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Tarjeta 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <div class="text-blue-500 text-4xl mb-4">📚</div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Gran Biblioteca</h3>
                <p class="text-gray-600">Miles de libros a tu disposición en cualquier momento.</p>
            </div>

            <!-- Tarjeta 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <div class="text-green-500 text-4xl mb-4">🌟</div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Reseñas</h3>
                <p class="text-gray-600">Comparte tus opiniones y descubre nuevas recomendaciones.</p>
            </div>

            <!-- Tarjeta 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <div class="text-purple-500 text-4xl mb-4">👥</div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Comunidad</h3>
                <p class="text-gray-600">Únete a una comunidad activa de lectores apasionados.</p>
            </div>
        </div>
    </div>

    <!-- Sección de Call to Action -->
    <div class="bg-blue-600 text-white py-12">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">¿Listo para comenzar?</h2>
            <p class="mb-8 max-w-2xl mx-auto">Únete a nuestra comunidad de lectores y descubre tu próxima historia favorita.</p>
            <button class="bg-white text-blue-600 font-semibold py-2 px-6 rounded-lg hover:bg-blue-50 transition duration-300">
                Registrarse Ahora
            </button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">AppBook</h3>
                    <p class="text-gray-400">Tu biblioteca digital personal</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Enlaces Rápidos</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Inicio</a></li>
                        <li><a href="#" class="hover:text-white transition">Explorar</a></li>
                        <li><a href="#" class="hover:text-white transition">Contacto</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contáctanos</h4>
                    <p class="text-gray-400">info@appbook.com</p>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 AppBook. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
</body>
</html>
