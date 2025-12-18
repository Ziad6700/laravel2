<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginorregisterController;


Route::get('/', function () {
    return view('login');
});

Route::get('/registreren', function () {
    return view('registreren');
});

Route::post('/registreren', function (Request $request) {
    return redirect('/home')->with('success', 'Registratie succesvol!');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Request $request) {
    // Verwerk het login formulier hier
    $username = $request->input('username');
    $password = $request->input('password');
    $student_number = $request->input('student_number');
    $klas = $request->input('klas');
    
    return redirect('/home')->with('success', 'Login succesvol! Welkom ' . $username);
});

Route::resource('posts', PostController::class);

Route::resource('form', LoginorregisterController::class);