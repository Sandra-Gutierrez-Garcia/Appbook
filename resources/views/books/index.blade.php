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
                        <input type="radio" name="status" value="{{ $statusitem }}" id="status-{{ $statusitem ?? 'all' }}" @checked(request()->input('status', 'All') === $statusitem)>
                            {{ $statusitem ==='all' ? 'All' : $statusitem }}
                    </label>
                    @endforeach
                </div>

                <button type="submit" class="mt-2 px-4 py-2 bg-purple-500 text-white rounded">Filter</button>
                <a href="{{ route('books.index') }}" class="mt-2 px-4 py-2 bg-gray-500 text-white rounded inline-block">Reset</a>
            </form>
        </aside>

        <main class="mt-0 flex-1">
            <div class="flex flex-wrap justify-start gap-6 px-4">
            @if($books->isEmpty())
                <div class="w-full overflow-hidden rounded-xl border border-purple-200 bg-white shadow-sm">
                    <div class="h-1 w-full bg-gradient-to-r from-purple-400 via-fuchsia-400 to-purple-500"></div>
                    <div class="p-5">
                        <div class="flex items-start gap-3">
                            <div class="mt-0.5 flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-purple-100 text-purple-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.72-1.36 3.485 0l5.58 9.92c.75 1.334-.213 2.981-1.742 2.981H4.42c-1.53 0-2.492-1.647-1.743-2.98l5.58-9.921zM11 13a1 1 0 10-2 0 1 1 0 002 0zm-1-7a1 1 0 00-.993.883L9 7v4a1 1 0 001.993.117L11 11V7a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-base font-semibold text-gray-700">No books found</h3>
                                <p class="mt-1 text-sm text-gray-500">Try fewer filters or set status to All.</p>
                                <a href="{{ route('books.index') }}" class="mt-3 inline-block rounded-md border border-purple-300 px-3 py-1.5 text-sm font-medium text-purple-700 hover:bg-purple-50">Clear filters</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif   
            @foreach($books as $book)
                    <x-book-cart :book="$book" />
                @endforeach
            </div>
        </main>
    </div>
</body>
</html>