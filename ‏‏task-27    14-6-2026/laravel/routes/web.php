<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Foundation\Console\RouteCacheCommand;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("welcome");
});

// crud opration

//create

Route::get('create', function () {
    Category::create([
        "name" => "realme11",
        "dec" => "phone",
    ]);
});



//update

Route::get('update/{id}', function ($id) {
    $cat = Category::find($id);

    $cat->update([
        "name" => "realme11",
    ]);
});


// delete by id

Route::get('delete/{id}', function ($id) {
    $cat = Category::find(3);
    $cat->delete(2);
    // Category::destroy($id);
});

//  All
Route::get('all', function () {
    $categories = Category::all();
    dd($categories);
});



// Route::get('cat/{id}', function (int $id) {

//     $cat = Category::find($id)->get();
//     dd($cat);
// });


Route::get('cat/{name}', function ($name) {

    $cat = Category::where("name", $name)->first();
    dd($cat);
})->where("name", '[a-z]+');


// posts
Route::get('posts',[Post::class,"index"]);
