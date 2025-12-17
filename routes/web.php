<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/registreren', function () {
    return view('registreren');
});

Route::resource('posts', PostController::class);