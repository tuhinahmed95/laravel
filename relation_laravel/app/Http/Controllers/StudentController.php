<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show(){
        $students = Student::with('contact')->get();
        return view('viewtable',compact('students'));

    }
}
