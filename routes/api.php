<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ToyController;



Route::get('/elve', [ToyController::class, 'index'])->name('apiindex');
Route::delete('/elve/{id}',[ToyController::class,'destroy'])->name('apidestroy');
Route::post('/elve',[ToyController::class,'store'])->name('apistore');
Route::put('/elve/{id}',[ToyController::class,'update'])->name('apiupdate');
Route::get('/elve/{id}', [ToyController::class, 'show'])->name('apishow');
