<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function menProducts(){
        $products = Product::all();
        return view('products.men',compact('products'));
    }
    public function womenProducts(){
        $products = Product::all();
        return view('products.women',compact('products'));
    }
    public function accsProducts(){
        $products = Product::all();
        return view('products.accs',compact('products'));
    }
}
