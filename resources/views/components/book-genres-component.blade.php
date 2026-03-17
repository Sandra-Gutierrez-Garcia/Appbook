    <div class="container mx-auto px-4 py-4">
        <div class=" flex justify-center gap-12">
            @foreach ($books as $book)
            <div class="flex w-[80%] flex-col items-center border border-purple-300 rounded-lg p-4"> 
                <div class="w-40 h-56 bg-violet-100 rounded-lg shadow-lg flex items-center justify-center"></div> 
                <h2 class="mt-4 h-14 w-full border-b border-purple-300 pb-4 text-center font-semibold">{{ $book->title }}</h2>
                <p class="mt-2 text-sm text-gray-600">{{ Str::limit($book->description, 40) }}</p>
                <p class="mt-2 w-full text-left text-sm text-gray-800">Author: {{ $book->writer->username }}</p>
                <button class="mt-6 border border-purple-300 rounded-lg px-4 hover:bg-purple-200">Read more</button>
                </div>
            @endforeach
        </div>
    </div>


