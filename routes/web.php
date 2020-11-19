<?php

use Illuminate\Support\Facades\Route;


Route::get('/posts', function () {
   return view('posts.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
