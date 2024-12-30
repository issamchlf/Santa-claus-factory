<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidController;
use App\Http\Controllers\ToyController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/elve', [ToyController::class, 'index'])->name('elve');
Route::get('/santa', [KidController::class, 'index'])->name('santa');

Route::get('/santa/{id}', [KidController::class, 'show'])->name('santaShow');
Route::get('/elve/{id}', [ToyController::class, 'show'])->name('elveShow');

