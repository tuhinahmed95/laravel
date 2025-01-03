<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Contact;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show(){
        $students = Student::with('contact')->get();
        return view('viewtable',compact('students'));

    }

    public function create(){
        return view('adduser');
    }

    public function store(Request $request){
            $request->validate([
                'name'=>['required'],
                'age'=>['required'],
            ]);

            Student::create([
                'name'=>$request->name,
                'age'=>$request->age,
            ]);
    }
}
