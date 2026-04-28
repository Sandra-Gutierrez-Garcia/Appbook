<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Writer;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $genres = Genre::all();
        $selectedGenres = array_filter((array) $request->input('genre', []));
        
        if (!empty($selectedGenres)) {
            $books = $this->filterByGenres($selectedGenres);
            return view('books.index', compact('books', 'genres'));
        }

        $books = Book::all();
        return view('books.index', compact('books', 'genres'));
    

    }

    public function filterByGenres(array $genreIds = [])
    {
        return Book::whereHas('genres', function ($query) use ($genreIds) {
            $query->whereIn('genres.id', $genreIds);
        }, '>=', count($genreIds))->get();
    }
    
  
    public function create()
    {
        //
        return view('books.create');
    }


    public function store(BookRequest $request, Writer $idWriter)
    {
        try {
            $newBook = new Book($request->validated());
            $idWriter->books()->save($newBook);
            return redirect("/books/{$newBook->id}")->with('success', 'Book created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to create book.']);
        }
    }

    public function show(Book $book)
    {
        //
        $book = Book::findOrFail($book->id);
        return view('books.show', compact('book'));
    }

    public function edit(Book $book, Writer $writer)
    {
        return view('books.edit', compact('book','writer'));
    }

    public function update(BookRequest $request, Book $book)
    {
        try {
            $book->update($request->validated());
            return redirect("/books/{$book->id}")->with('success', 'Book updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to update book.']);
        }
    }

    public function destroy(Book $book)
    {
        try {
            $book->delete();
            return redirect('/books')->with('success', 'Book deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to delete book.']);   
        }
    }
}
