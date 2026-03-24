<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Writer;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $bookpopulate = $this->Bookpopulate();
        return view('home', compact('bookpopulate'));
        
    }
    public function Bookpopulate(){
        return Book::with('writer')
        ->limit(10)
        ->get();
    }
}
