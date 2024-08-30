<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Student;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function showContact(){
        $contacts = Contact::with('studnets')->where('email','tuhin@gmail.com')->get();
        return $contacts;
    }
}
