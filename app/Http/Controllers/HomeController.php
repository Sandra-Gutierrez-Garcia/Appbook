<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Writer;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $books= book::all();
        $writers = Writer::all();
        return view('Home', compact('books','writers'));
        
    }
}
