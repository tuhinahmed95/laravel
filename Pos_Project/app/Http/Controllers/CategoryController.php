<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryController;

class CategoryController extends Controller
{
    protected $category;
    
    public function __construct(){ 
        $this->category = new category();
    }
}
