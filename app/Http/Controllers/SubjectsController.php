<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectsController extends Controller
{
	$subjects = Subject::all();
    return view('subjects.index')->with('subjects', $subjects);
}
 