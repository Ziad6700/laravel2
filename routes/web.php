<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginorregisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KeuzedeelController;


Route::get('/', function () {
    return view('home');
});

Route::get('/home' , function () {
    return view('home');
}); 

Route::get('/keuzedelen', [KeuzedeelController::class, 'index'])->name('keuzedelen.index');

Route::get('/registreren', function () {
    return view('registreren');
});

Route::get('/creëren', function () {
    return view('creëren');
});

Route::post('/registreren', function (Request $request) {
    return redirect('/home')->with('success', 'Registratie succesvol!');
});

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('posts', PostController::class);

Route::resource('form', LoginorregisterController::class);

Route::get('/admin', [LoginorregisterController::class, 'index']);

Route::delete('/gebruikers/{id}', [LoginorregisterController::class, 'destroy'])->name('gebruikers.destroy');

Route::post('/keuzedelen/inschrijven/{naam}', [App\Http\Controllers\KeuzedeelController::class, 'inschrijven'])->name('keuzedelen.inschrijven');

Route::post('/account/uitschrijven/{naam}', [App\Http\Controllers\KeuzedeelController::class, 'uitschrijven'])->name('keuzedelen.uitschrijven');

Route::get('/keuzedelen/creeren', [KeuzedeelController::class, 'create'])->name('keuzedelen.create');

Route::post('/keuzedelen/store', [KeuzedeelController::class, 'store'])->name('keuzedelen.store');

Route::get('/account', function () {
    return view('account');
});