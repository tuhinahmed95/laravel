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
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'image'=>'required|mimes:png,jpg,jpeg|max:7000',
            'city'=>'required|string'
        ]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imagePath = time(). "_". $image->getClientOriginalName();
            $image-> move(public_path('uploads'),$imagePath);
        }
        Student::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'image'=>$imagePath,
            'city'=>$request->city
        ]);
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('student.views',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('student.update',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'image'=>'required|mimes:png,jpg,jpeg|max:7000',
            'city'=>'nullable|string'
        ]);

        $student = Student::find($id);
        if($request->hasFile('image')){
            if($student->image && file_exists('uploads/'. $student->image)){
                unlink(public_path('uploads/'.$student->image));
            }

            $image = $request->file('image');
            $imagePath = time(). '_'. $image->getClientOriginalName();
            $image->move(public_path('uploads'),$imagePath);
            $student->image = $imagePath;
        }
        $student->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'image'=>$imagePath,
            'city'=>$request->city,
        ]);
        return redirect()->route('student.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('student.index');
    }
}
