<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('homestudent',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createstudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $studentData = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'address'=>'required',
            'city'=>'required',
        ]);

        Student::create($studentData);
        return redirect()->route('studnent.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $studnet = Student::find($id);
        return view('studentview',compact('studnet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('studentupdate',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $studentUpdate = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'address'=>'required',
            'city'=>'required',
        ]);

        $student = Student::find($id);
        $student->update($studentUpdate);
        return redirect()->route('studnent.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('studnent.index');
    }
}
