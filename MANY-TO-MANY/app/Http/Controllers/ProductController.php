<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function manyrealation(){
        $products = Product::with('categoriesSub')->get();
        return $products;
    }
}
