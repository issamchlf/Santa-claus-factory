<?php

use App\Models\Toy;
use App\Models\MinimumAge;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidController;
use App\Http\Controllers\ToyController;
use App\Models\Kid;  

Route::get('/', function () {
    $toys = Toy::with('minimumAge')->get(); 
    $ageRanges = MinimumAge::all(); // bring all age ranges

    $goodKids = Kid::where('atitude', 'good')->count();  
    $badKids = Kid::where('atitude', 'bad')->count();    

    return view('home', compact('toys', 'ageRanges', 'goodKids', 'badKids'));
})->name('home');


Route::get('/elve', [ToyController::class, 'index'])->name('elve');
Route::get('/santa', [KidController::class, 'index'])->name('santa');

Route::get('/santa/{id}', [KidController::class, 'show'])->name('santaShow');
Route::get('/elve/{id}', [ToyController::class, 'show'])->name('elveShow');

Route::post('/assign-toys', [KidController::class, 'assignToys'])->name('assignToys');
Route::delete('/remove-assigned-toys', [KidController::class, 'removeAssignedToys'])->name('removeAssignedToys');

Route::post('/toys/{toy}/assign-age', [ToyController::class, 'assignAgeRange'])->name('toys.assignAge');
