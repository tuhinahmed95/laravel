<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Contact;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show(){
        $students = Student::find(1);
        return $students;
    }
}