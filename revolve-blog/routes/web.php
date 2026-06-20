<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('about', function () {
//     return view('about');
// });
// Route::get('contact', function () {
//     return view('contact');
// });
// Route::get('blog', function () {
//     return view('blog-single');
// });
Route::get("/",[HomeController::class,"index"]);
Route::get("about",[AboutController::class,"index"]);
Route::get("contact",[ContactController::class,"index"]);
Route::get("blog",[BlogController::class,"index"]);
// Route::get('contact', function () {
//     return view('contact');
// });
// Route::get('blog', function () {
//     return view('blog-single');
// });

