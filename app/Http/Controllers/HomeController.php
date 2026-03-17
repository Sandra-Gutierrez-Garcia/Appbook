<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Writer;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $books = Book::with('writer')->latest()->limit(10)->get();
        $writers = Writer::all();
        // obtener books gnere fantasy, romance y new books
        $bookGenresFantasy = $this->showBooksByGenreFantasy();
        $bookGenresRomance = $this->showBooksByGenreRomance();
        $newBooks = $this->showBooksByNewBooks();
        

        return view('Home', compact('books', 'writers',
        'bookGenresFantasy', 'bookGenresRomance', 'newBooks'));
    }
    
    private function showBooksByGenreFantasy()
    {
        return Book::with('writer')
            ->whereRelation('genres', 'name', 'Fantasy')
            ->limit(5)
            ->get();

    }

    private function showBooksByGenreRomance(){
        return Book::with('writer')
            ->whereRelation('genres', 'name', 'Romance')
            ->limit(5)
            ->get();

    }
    private function showBooksByNewBooks(){
        return Book::with('writer')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();
    }
}