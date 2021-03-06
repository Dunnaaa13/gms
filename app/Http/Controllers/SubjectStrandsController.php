<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subjectstrand;

class SubjectStrandsController extends Controller
{
    public function index()
    {
    	$subjectstrands = Subjectstrand::all();
    	return view('subject-strands.index')->with('subjectstrands', $subjectstrands);
    }

    public function create()
    {
    	return view('subject-strands.create');
    }

    public function store()
    {

    	request()->validate([
            'id' => 'required',
            'subject_id' => 'required',
            'strand_id' => 'required',
            'project_id' => 'required',
            'semester' => 'required',
            'grade_level' => 'required',
        ]);
        
		$subjectstrand = new Subjectstrand;
    	$subjectstrand->id = request()->id;
    	$subjectstrand->subject_id = request()->subject_id;
        $subjectstrand->strand_id = request()->strand_id;
        $subjectstrand->project_id = request()->project_id;
        $subjectstrand->semester = request()->semester;
        $subjectstrand->grade_level = request()->grade_level;
    	$subjectstrand->save();
    	
    	return redirect('/subject-strands');
	}

    public function show(Subjectstrand $subjectstrand)
    {
        return view('subject-strands.show')->with('subjectstrand', $subjectstrand);
    }
    
    public function edit(Subjectstrand $subjectstrand)
    {
        return view('subject-strands.edit')->with('subjectstrand', $subjectstrand);
    }

    public function update(Subjectstrand $subjectstrand)
    {
        $subjectstrand->title = request()->title;
        $subjectstrand->description = request()->description;
        $subjectstrand->due_date = request()->due_date;
        $subjectstrand->save();
        return redirect('/subject-strands');
    }
}