<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{

    public function welcome()
    {
        $posts = Post::all();
        $products = Product::all();
        return view('welcome',compact('posts','products'));
    }
}
