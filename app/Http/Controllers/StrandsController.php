<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Strand;

class StrandsController extends Controller
{
    public function index()
    {
    	$strands = Strand::all();
    	return view('strands.index')->with('strands', $strands);
    }

    public function create()
    {
    	return view('strands.create');
    }

    public function store()
    {
        request()->validate([
            'id' => 'required',
            'name' => 'required',
        ]);
        
    	$strand = new Strand;
    	$strand->id = request()->id;
    	$strand->name = request()->name;
    	$strand->save();

    	return redirect('/strands');
    }

    public function show(Strand $strand)
    {
        return view('strands.show')->with('strand', $strand);
    }
    
    public function edit(Strand $strand)
    {
        return view('strands.edit')->with('strand', $strand);
    }

    public function update(Strand $strand)
    {
        $strand->id = request()->id;
        $strand->name = request()->name;
        $strand->save();
        return redirect('/strands');
    }
}
