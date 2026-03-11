<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-nav-blade 
        :appName="'AppBook'"
    />
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
    <!-- book popular -->
     <div class="container mx-auto px-4 py-12">
        <h2 class="text-xl font-semibold text-center text-gray-700 mb-8 uppercase tracking-wide">Popular Books</h2>
        <div class="items-center justify-center flex flex-wrap gap-8  p-4 rounded-lg">
            <div class="flex flex-col items-center">
                <div class="w-40 h-56 bg-violet-200 rounded-lg shadow-lg flex items-center justify-center">
                </div>
                <span class="mt-2 text-gray-600">Book Title</span>
                <span class="text-gray-500 text-sm">Book description</span>
                <span class="text-gray-500 text-sm">Author Name</span>
                <a href="#" class="text-violet-600 hover:underline">Read More</a>
            </div>

        </div>
     </div>

    <!-- books -->
    <h2 class="mb-8 text-center text-xl font-semibold uppercase tracking-wide text-gray-700">Fantasy Books</h2>
    <x-book-genres-component :books="$bookGenresFantasy" />
            
        
</body>
</html>
