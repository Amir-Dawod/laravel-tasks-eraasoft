<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get("/",[PageController::class,"home"]);
Route::get("about",[PageController::class,"about"]);
Route::get("contact",[PageController::class,"contact"]);
Route::get("blog",[PageController::class,"blog"]);


