<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudents(){ 
        $students = DB::table('students')
                        ->select('students.*', 'cities.city_name')
                        ->join('cities','students.city','=','cities.id')
                        ->get();
        // return $students;
        return view('welcome', compact('students'));
    }

    
}
