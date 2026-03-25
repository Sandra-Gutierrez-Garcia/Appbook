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
    <div class="container mx-auto mt-12 px-4">
        <h2 class="mx-auto text-2xl font-bold text-gray-700 uppercase">Popular Books</h2>
        <div class="mt-6 flex flex-wrap gap-6 justify-center">
            @foreach($bookpopulate as $book)
                    <x-book-cart :book="$book" />
            @endforeach
        </div>
    </div>

    <!-- book Romance -->
    <div class="container mx-auto mt-12 px-4 border-t border-gray-300 pt-6">
        <h2 class="mx-auto text-2xl font-bold text-gray-700 uppercase">Popular Romance</h2>
        <div class="mt-6 flex flex-wrap gap-6 justify-center">
            @foreach($bookRomance as $book)
                    <x-book-cart :book="$book" />
            @endforeach
        </div>
    </div>
    
    <!-- book action -->
    <div class="container mx-auto mt-12 px-4 border-t border-gray-300 pt-6">
        <h2 class="mx-auto text-2xl font-bold text-gray-700 uppercase">Popular Action</h2>
        <div class="mt-6 flex flex-wrap gap-6 justify-center">
            @foreach($bookAction as $book)
                    <x-book-cart :book="$book" />
            @endforeach
        </div>
    </div>
</body>
</html>
