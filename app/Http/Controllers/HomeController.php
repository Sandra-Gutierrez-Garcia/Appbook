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
        $bookRomance = $this->BookRomance();
        $bookAction = $this->BookAction();
        return view('home', compact('bookpopulate', 'bookRomance', 'bookAction'));
        
    }
    public function Bookpopulate(){
        return Book::with('writer')
                    ->limit(10)
                    ->get();
    }

    public function BookRomance(){
        return Book::with('writer')
            ->whereHas('genres', function($query){
                $query->where('name', 'Romance');
            })
                ->limit(5)
                ->get();
    }
    public function BookAction(){
        return Book::with('writer')
            ->whereHas('genres', function ($query){
                $query->where('name', 'Action');
            })
                ->limit(5)
                ->get();
        
    }

    
}
