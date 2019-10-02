<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectsController extends Controller
{
	 public function index()
    {
    	$subjects = Subject::all();
    	return view('subjects.index')->with('subjects', $subjects);
    }

    public function create()
    {
    	return view('subjects.create');
    }

    public function store()
    {
        request()->validate([
            'id' => 'required',
            'name' => 'required',
        ]);
        
    	$project = new Subject;
    	$project->id = request()->id;
    	$project->name = request()->name;
    	$project->save();

    	return redirect('/subjects');
    }

    public function show(Subject $subject)
    {
    	return view('subjects.show')->with('subject', $subject);
    }
    
    public function edit(Subject $subject)
    {
        return view('subjects.edit')->with('subject', $subject);
    }

    public function update(Subject $subject)
    {
        $project->id = request()->id;
    	$project->name = request()->name;
        $project->save();
        return redirect('/subjects');
    }









}
 