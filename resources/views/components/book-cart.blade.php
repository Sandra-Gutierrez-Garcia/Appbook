<div class="flex max-w-[220px] min-w-[220px] flex-col items-center border border-purple-300 rounded-lg p-6"> 
                <div class="w-40 h-56 bg-violet-100 rounded-lg shadow-lg flex items-center justify-center"></div> 
                <h2 class="mt-6 flex h-16 w-full border-b border-purple-300 text-center text-[14px] font-semibold leading-tight">{{ $book->title }}</h2>
                <p class="mt-2 w-full text-sm text-gray-600">{{ Str::limit($book->description, 40) }}</p>
                <p class="mt-2 w-full text-left text-sm text-gray-800">{{ $book->writer->username }}</p>
                <button class="mt-6 border border-purple-300 rounded-lg px-4 hover:bg-purple-200">Read more</button>
</div>