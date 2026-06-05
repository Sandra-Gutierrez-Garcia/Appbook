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
            
            <form action="/books" method="GET">
                <div class="mt-4">
                @foreach($genres as $genre)
                <label for="genre-{{ $genre->id }}" class="flex items-center gap-2 text-gray-600">
                    <input type="checkbox" name="genre[]" value="{{ $genre->id }}" id="genre-{{ $genre->id }}" @checked(in_array($genre->id, request()->input('genre', [])))>
                    {{ $genre->name }}
                </label>
                @endforeach
                </div>
                <div class="mt-4">
                    <h1 class="flex items-center justify-center text-lg font-semibold text-gray-700 mb-2 border-b border-gray-400">Status</h1>
                    @foreach($status as $statusitem)
                    <label for="status-{{ $statusitem }}" class="flex items-center gap-2 text-gray-600"> 
                        <input type="checkbox" name="status[]" value="{{ $statusitem }}" id="status-{{ $statusitem }}" @checked(in_array($statusitem, request()->input('status', [])))>
                            {{ $statusitem }}
                    </label>
                    @endforeach
                </div>

                <button type="submit" class="mt-2 px-4 py-2 bg-purple-500 text-white rounded">Filter</button>
                <a href="{{ route('books.index') }}" class="mt-2 px-4 py-2 bg-gray-500 text-white rounded inline-block">Reset</a>
            </form>
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