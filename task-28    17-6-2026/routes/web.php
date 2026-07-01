<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, "index"])->name("home");
Route::get('post/{id}', [PostController::class, "show"])->name("post");
Route::get('category', [CategoryController::class, "index"])->name("category");
