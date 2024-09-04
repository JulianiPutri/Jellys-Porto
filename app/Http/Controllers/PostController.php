<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Posts::all();
        return view('posts', ['posts' => $posts, 'title'=>'Portofolio']);
    }

    public function show($id)
    {
        $post = Posts::find($id);
        return view('post', ['post' => $post, 'title'=>'Detail']);
    }

}
