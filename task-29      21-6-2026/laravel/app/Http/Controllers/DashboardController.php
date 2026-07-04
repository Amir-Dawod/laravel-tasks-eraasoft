<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $totalPosts = Post::all()->count();
        $totalComments = Comment::all()->count();
        $totalFeaturedPosts = Post::where("is_featured", 1)->count();
        $latestPosts = Post::with("user")->latest()->take(5)->get();

        return view("dashboard", compact("totalPosts", "totalComments", "totalFeaturedPosts","latestPosts"));

    }
}
