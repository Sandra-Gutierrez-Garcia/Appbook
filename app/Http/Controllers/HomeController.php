<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Writer;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $books = Book::all();
        $writers = Writer::all();
        $bookGenresFantasy = $this->showBooksByGenreFantasy();
        

        return view('Home', compact('books', 'writers','bookGenresFantasy'));
    }

    private function showBooksByGenreFantasy()
    {
        return Book::with('writer')
            ->whereRelation('genres', 'name', 'Fantasy')
            ->get();
    }
}