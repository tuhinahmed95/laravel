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
        return view('index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'age'=>'required|integer',
            'image'=>'required|mimes:png,jpg,jpeg|max:5000'
        ]);

        if($request->hasFile('image')){
             $image = $request->file('image');
             $imageName = time().'_'. $image->getClientOriginalName();
             $image->move(public_path('uploads'),$imageName);

        }

        Student::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'age'=>$request->age,
            'image'=>$imageName,
        ]);

        return redirect()->route('student.index')->with('status','Student Create Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('views',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
