<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentHome(){
        $students = Student::all();
        return view('student.studenthome',compact('students'));
    }
    public function create(){
        return view('student.create');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'roll'=>'required',
            'name'=>'required',
            'age'=>'required',
            'gpa'=>'required',
            'city'=>'required'
        ]);

        $create = Student::create($validate);
        return redirect()->route('student.studenthome');
    }

    public function show(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
