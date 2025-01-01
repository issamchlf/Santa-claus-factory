<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidController;
use App\Http\Controllers\ToyController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/gift', function () {
    return view('gift');
})->name('gift');

Route::get('/elve', [ToyController::class, 'index'])->name('elve');
Route::get('/santa', [KidController::class, 'index'])->name('santa');

Route::get('/santa/{id}', [KidController::class, 'show'])->name('santaShow');
Route::get('/elve/{id}', [ToyController::class, 'show'])->name('elveShow');

Route::post('/assign-toys', [KidController::class, 'assignToys'])->name('assignToys');
Route::delete('/remove-assigned-toys', [KidController::class, 'removeAssignedToys'])->name('removeAssignedToys');

Route::post('/toys/{toy}/assign-age', [ToyController::class, 'assignAgeRange'])->name('toys.assignAge');
