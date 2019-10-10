<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;

class SectionsController extends Controller
{
    public function index()
    {
    	$sections = Section::all();
    	return view('sections.index')->with('sections', $sections);
    }

    public function create()
    {
    	return view('sections.create');
    }

    public function store()
    {
        request()->validate([
            'id' => 'required',
            'name' => 'required',
        ]);
        

    	$section = new Section;
    	$section->id = request()->id;
    	$section->name = request()->name;
    	$section->is_active = request()->is_active;
    	$section->save();

    	return redirect('/sections');
    }
    public function show(Section $section)
    {
        return view('sections.show')->with('section', $section);
    }
    
    public function edit(Section $section)
    {
        return view('sections.edit')->with('section', $section);
    }

    public function update(Section $section)
    {
        $section->id = request()->id;
        $section->name = request()->name;
        $section->is_active = request()->is_active;
        $section->save();
        return redirect('/sections');
    }
}
