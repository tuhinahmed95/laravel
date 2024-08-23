<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::get();
        return view('products.index',compact('products'));
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
        return redirect()->route('products.index')->withSuccess('Product Created Successfully !!!');
    }

    public function edit($id){
        $products = Product::where('id', $id)->first();

        return view('products.edit',compact('products'));
    }

    public function update(Request $request, $id){
        // vlaidate

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpg,png,jpeg,gif|max:1000',
        ]);

        $product = Product::where('id', $id)->first();
        // upload image
        if(isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('products'), $imageName);
            $product->image = $imageName;

        }


        $product->name=$request->name;
        $product->description=$request->description;

        $product->save();
        return redirect()->route('products.index')->withSuccess('Product Updated Successfully !!!');
    }

    public function destroy( $id){
        $product = Product::where('id',$id)->first();
        $product->delete();

        return redirect()->route('products.index')->withSuccess('Product Delete Successfully');
    }

    public function show($id){
        $product = Product::where('id', $id)->first();

        return view('products.show', compact('product'));
    }
}
