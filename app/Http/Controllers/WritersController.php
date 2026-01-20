<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WritersController extends Controller
{
    public function index()
    {
        return Writers::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
