<?php

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test-email', function () {
    Mail::to("mohamedadel80@gmail.com")->send(new TestMail());
});
