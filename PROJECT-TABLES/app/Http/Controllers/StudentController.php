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

    public function uniondata(){ 
        $lecturers = DB::table('lecturers')
                        ->select('name','email','city_name')
                        ->join('cities','lecturers.city','=','cities.id');

        $students = DB::table('students')
                        ->union($lecturers)
                        ->select('name','email','city_name')
                        ->join('cities','students.city','=','cities.id')
                        ->get();
           return $students;                 
    }

    // public function whendata(){ 
    //     $students = DB::class('students')
    //                     ->when(true, function($query){ 
    //                         $query->where('age','>',19);
    //                     })
    //                     ->get();
    //     return $students;                
    // }
}
