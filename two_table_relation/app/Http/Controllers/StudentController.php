<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Students সহ তাদের কোর্সগুলো দেখাবে
        $students = Student::with('courses')->get();
        return view('welcome', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createsc');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input data
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email',
            'courses' => 'required|array',
            'courses.*' => 'required|string', // কোর্সের নামগুলো
        ]);

        // Student তৈরি
        $student = Student::create([
            'name' => $validate['name'],
            'email' => $validate['email']
        ]);

        // কোর্সগুলো ইনসার্ট
        foreach ($validate['courses'] as $courseName) {
            $student->courses()->create([
                'course_name' => $courseName,
            ]);
        }

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::with('courses')->find($id);
        return view('singlestudent',compact('student'));
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
