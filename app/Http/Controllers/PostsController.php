<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
{
    public function showPosts(){
        $posts = Post::all();
        return view('welcome',compact('posts'));
    }
}
