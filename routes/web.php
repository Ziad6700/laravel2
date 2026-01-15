<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginorregisterController;
use App\Http\Controllers\LoginController;



Route::get('/', function () {
    return view('home');
});

Route::get('/home' , function () {
    $rol = session("rol");
    return view('home', ["rol" => $rol]);
});


Route::get('/registreren', function () {
    return view('registreren');
});

Route::post('/registreren', function (Request $request) {
    return redirect('/home')->with('success', 'Registratie succesvol!');
});

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('posts', PostController::class);

Route::resource('form', LoginorregisterController::class);

Route::get('/account', function () {
    return view('account');
});