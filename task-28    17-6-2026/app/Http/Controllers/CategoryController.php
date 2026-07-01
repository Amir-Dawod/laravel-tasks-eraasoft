<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {

        $categories = Category::with("posts")->get();
        return view("categories", compact("categories"));
    }
}
