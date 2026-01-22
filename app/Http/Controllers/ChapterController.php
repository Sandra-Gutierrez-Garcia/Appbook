<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Book;
use App\Models\Writer;
use Illuminate\Http\Request;
use App\Http\Requests\ChapterRequest;

class ChapterController extends Controller
{
    public function index($bookId)
    {
        // index book Elijido por el writer/reader
        $book = Book::findOrFail($bookId);
        $chapters = $book->chapters()
            ->select('id', 'chapter_number', 'title')
            ->orderBy('chapter_number', 'asc')
            ->paginate(10);

        return view('chapters.index', compact('book', 'chapters'));

    }

 
    public function create()
    {
        return view('chapters.create');
    }

   
    public function store(ChapterRequest $request, Book $book)
    {
       $book = Book::findOrFail($book->id);
       try {
        $newChapter = new Chapter($request->validated());
        $book->chapters()->save($newChapter);
        return redirect("/books/{$book->id}/chapters")->with('success', 'Chapter created successfully.');
       } catch (\Exception $e) {
           return redirect()->back()->withErrors(['error' => 'Failed to create chapter.']);
       }

    }

 
    public function show(Chapter $chapter)
    {
        //
    }

   
    public function edit(Chapter $chapter)
    {
        //
    }

   
    public function update(Request $request, Chapter $chapter)
    {
        //
    }

   
    public function destroy(Chapter $chapter)
    {
        //
    }
}
