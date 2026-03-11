    <div class="container mx-auto px-4 py-4">
        <div class=" flex justify-center gap-12">
            @foreach ($books as $book)
            <div class="flex w-40 flex-col items-center">
                <div class="w-40 h-56 bg-violet-200 rounded-lg shadow-lg flex items-center justify-center"></div>
                    <span class="mt-2 text-gray-600">{{ $book->title }}</span>
                    <span class="text-gray-500 text-sm">{{ $book->description }}</span>
                    <span class="text-gray-500 text-sm">{{ $book->writer->username }}</span>
                    <a href="#" class="text-violet-600 hover:underline">Read More</a>
                </div>
            @endforeach
        </div>
    </div>


