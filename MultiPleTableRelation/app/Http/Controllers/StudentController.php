<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Contact;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show(){
        $students = Student::with('contacts')->get();
        return $students;
    }

    public function create(){
        $students = Student::create([
            'name' => 'Salman Khan',
            'age' => 59,
            'gender' => 'M'
        ]);

        $students->contacts->create([
            'email' => 'salmankhan@gmail.com',
            'phone' => '987000',
        ]);
    }
}
