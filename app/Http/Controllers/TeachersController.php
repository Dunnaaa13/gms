<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeachersController extends Controller
{
     public function index()
    {
    	$teachers = Teacher::all();
    	return view('teachers.index')->with('teachers', $teachers);
    }

    public function create()
    {
    	return view('teachers.create');
    }

    public function store()
    {
        request()->validate([
            'id' => 'required',
            'name' => 'required',
            'advisory_section' => 'required',
        ]);
        
    	$teacher = new Teacher;
    	$teacher->id = request()->id;
    	$teacher->name = request()->name;
    	$teacher->advisory_section = request()->advisory_section;
    	$teacher->save();

    	return redirect('/teachers');
    }

    public function edit(Teacher $teacher)
    {
    	$sections = Section::all();
        return view('teachers.edit', compact('sections'));
    }

    public function update(Teacher $teacher)
    {
        $teacher->id = request()->id;
        $teacher->name = request()->name;
        $teacher->advisory_section = request()->advisory_section;
        $teacher->save();
        return redirect('/teachers');
    }
}
