<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaiController;

Route::get('/', function () {
    return redirect('/siswa'); // Atau bisa return view langsung
});

// Route::get('/', function () {
    // return view('home');
// });

Route::resource('siswa', SiswaController::class);
Route::resource('nilai', NilaiController::class);
