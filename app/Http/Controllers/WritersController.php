<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WritersController extends Controller
{
    public function index()
    {
        return view("writers.index",[
            'writers'=> Writer::all()
        ]);
    }

   
    public function create()
    {
        //

    }

    public function store(Request $request)
    {
        //
    }

   
    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }

   
    public function update(Request $request)
    {
        //
    }

 
   
    public function destroy()
    {
        //
    }
}
