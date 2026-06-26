<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function index()
    {
        $posts = Post::paginate(10);
        // return view('posts', compact('posts'));
        // return view('posts', ['posts'=>$posts]);
        return view('posts')->with('posts', $posts);
    }
}
