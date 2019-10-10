<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacherload;

class TeacherLoadsController extends Controller
{
    public function index()
    {
    	$teacherloads = TeacherLoad::all();
    	return view('teacher-loads.index')->with('teacherloads', $teacherloads);
    }

    public function create()
    {
    	return view('teacher-loads.create');
    }

    public function store()
    {
        request()->validate([
            'user_id' => 'required',
            'subject_strand_id' => 'required',
            'section_id' => 'required',
        ]);
        
    	$teacherload = new TeacherLoad;
    	$teacherload->user_id = request()->user_id;
		$teacherload->subject_strand_id = request()->subject_strand_id;
		$teacherload->section_id = request()->section_id;
    	$teacherload->save();

    	return redirect('/teacher-loads');
    }

    public function show(TeacherLoad $teacherload)
    {
        return view('teacher-loads.show')->with('teacherload', $teacherload);
    }
    
    public function edit(TeacherLoad $teacherload)
    {
        return view('teacher-loads.edit')->with('teacherload', $teacherload);
    }

    public function update(TeacherLoad $teacherload)
    {
        $teacherload->user_id = request()->user_id;
        $teacherload->subject_strand_id = request()->subject_strand_id;
        $teacherload->section_id = request()->section_id;
        $teacherload->save();
        return redirect('/teacher-loads');
    }
}
