<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaiController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('siswa', SiswaController::class);
Route::resource('nilai', NilaiController::class);
