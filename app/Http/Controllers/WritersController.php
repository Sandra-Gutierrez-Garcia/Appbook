<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;
use App\Http\Requests\WriterRequest;

class WritersController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('writers.create');
    }

    public function store(WriterRequest $request)
    {
        try {

            $writer = Writer::create($request->validated());
            return redirect("/writers/{$writer->id}")->with('success', 'Writer created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error'
             => 'Failed to create writer.']);
        }
    }

   
    public function show($id)
    {
        $writer = Writer::findOrFail($id);
        return view('writers.show', compact('writer'));
    }

    public function edit($id)
    {
        $writer = Writer::findOrFail($id);
        return view('writers.edit', compact('writer'));
    }

   
    public function update(WriterRequest $request, $id)
    {
        $writer = Writer::find($id);
        
        if ($writer != null){

            try {
                $writer->update($request->validated());
                return redirect("/writers/{$writer->id}")->with('success', 'Writer updated successfully.');
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['error' 
                => 'Failed to update writer.']);
            }

        } else {
            return redirect()->back()->withErrors(['error' 
            => 'Writer not found.']);
        }
        
    }

 
   
    public function destroy($id)
    {
        if($writer = Writer::find($id)){
            try{
                $writer->delete();
                return redirect('/writers')->with('success','writer deleted successfully');
            } catch(\Exception $e){
                return redirect()->back()->withErrors(['error'
                => 'error deleting writer']);
            }
        } else {
            return redirect()->back()->withErrors(['error' 
            => 'Writer not found.']);
        }
    }
}
