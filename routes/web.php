<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidController;
use App\Http\Controllers\ToyController;

Route::get('/', function () {return view('home');});

Route::get('/elve', [ToyController::class, 'index'])->name('elve');
Route::get('/santa', [KidController::class, 'index'])->name('santa');