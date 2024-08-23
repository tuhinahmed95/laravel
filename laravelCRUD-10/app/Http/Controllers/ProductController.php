<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products.index');
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){

        // vlaidate

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif|max:1000',
        ]);
        
        // upload image
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('products'), $imageName);

        $product = new Product;
        $product->image = $imageName;
        $product->name=$request->name;
        $product->description=$request->description;

        $product->save();
        return back();
    }
}
