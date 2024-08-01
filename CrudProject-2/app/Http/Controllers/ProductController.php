<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    // this method will show products page
    public function index(){ 

    }

    // this method will show create products page
    public function create(){ 
        return view('products.create');

    }

    // this method will store product in a db
    public function store(Request $req){ 
        $rules = [ 
            'name'=>'required|min:5',
            'sku'=>'required|min:3',
            'price'=>'required|min:5',
            'name'=>'required|numeric'
        ];
        validator::make($req->all(),$rules); 

    }

    // this method will edit products page
    public function edit(){ 

    }

    // this method will update a product
    public function update(){ 

    }

    // this method will delete product
    public function destroy(){ 

    }
}
