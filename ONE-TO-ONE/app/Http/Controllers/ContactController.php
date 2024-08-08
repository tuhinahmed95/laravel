<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function show(){ 
        $contacts = Contact::with('student')->get();
        return $contacts;
    }
}
