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
    <div class="container mx-auto mt-6 flex items-start gap-4 px-4">
        <aside class="w-44 shrink-0 rounded-lg border border-purple-300 p-4">
            <div class="text-center border-b border-gray-300 pb-2">
                <h2 class="text-lg font-semibold text-gray-700">Categories</h2>
            </div>
        </aside>

        <main class="mt-0 flex-1">
            <div class="flex flex-wrap justify-start gap-6 px-4">
                @foreach($books as $book)
                    <x-book-cart :book="$book" />
                @endforeach
            </div>
        </main>
    </div>
</body>
</html>