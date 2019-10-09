<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function edit(Teacher $teacher)
    {
    	{
    		$sections = Section::all();
    		return view('teachers.edit', compact('teacher'));
    	}
    }
    
}
