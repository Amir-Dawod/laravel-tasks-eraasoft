<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $posts = Post::with("user")->search($request->search)->get();
        return view("posts", compact("posts"));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::get();

        return view("create-post", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            "title" => "required|string|min:6|max:20",
            "content" => "required|string",
            "category_id" => "required|string",
        ]);
        Post::create([...$validated, "user_id" => 2, "is_featured" => $request->is_featured ?? 0]);

        return redirect()->back()->with('success', 'added post successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view("single-post", compact("post"));

        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
