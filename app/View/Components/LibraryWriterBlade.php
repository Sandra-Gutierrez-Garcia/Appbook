<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Closure;
use Illuminate\Contracts\View\View;

class LibraryWriterBlade extends Component
{
   
    public function __construct()
    {
        //
    }

    
    public function render(): View|Closure|string
    {
        return view('components.library-writer-blade');
    }
}
