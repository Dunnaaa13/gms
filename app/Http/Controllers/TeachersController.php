<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class TeachersController extends Controller
{
    public function index()
    {
    	return view('subjects.index');
    }
}
