<?php

namespace App\Http\Controllers;

use App\Models\Collegestudetn;
use App\Models\Book;
use Illuminate\Http\Request;

class CollegestudentController extends Controller
{
    public function showStudents(){
        $collegeStudents = Collegestudetn::with('books')->get();
        return $collegeStudents;
    }
}
