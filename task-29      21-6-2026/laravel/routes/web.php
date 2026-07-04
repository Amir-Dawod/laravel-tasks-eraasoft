<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
})->name("home");
Route::resource("posts", PostController::class);
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])
    ->name('comments.store');
Route::get('dashboard', [DashboardController::class, "index"])->name("dashboard");
