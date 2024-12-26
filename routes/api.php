<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KidController;
use App\Http\Controllers\Api\ToyController;



Route::get('/elve', [ToyController::class, 'index'])->name('apiindex');
Route::delete('/elve/{id}',[ToyController::class,'destroy'])->name('apidestroy');
Route::post('/elve',[ToyController::class,'store'])->name('apistore');
Route::put('/elve/{id}',[ToyController::class,'update'])->name('apiupdate');
Route::get('/elve/{id}', [ToyController::class, 'show'])->name('apishow');

Route::get('/santa', [KidController::class, 'index'])->name('apiindex');
Route::delete('/santa/{id}',[KidController::class,'destroy'])->name('apidestroy');
Route::post('/santa',[KidController::class,'store'])->name('apistore');
Route::put('/santa/{id}',[KidController::class,'update'])->name('apiupdate');
Route::get('/santa/{id}', [KidController::class, 'show'])->name('apishow');
