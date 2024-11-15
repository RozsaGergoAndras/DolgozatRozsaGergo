<?php

use App\Http\Controllers\KolcsonzesController;
use App\Http\Controllers\MufajController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Film-Műfaj importok
Route::post('/new-genre',[MufajController::class, 'store'])->name('mufaj.store'); 
Route::get('/new-genre',[MufajController::class, 'create'])->name('film.create'); 
Route::get('/new-film',[MufajController::class, 'createketto'])->name('film.createketto'); 
Route::post('/new-film',[MufajController::class, 'storeketto'])->name('film.storeketto'); 

//Kölcsönzés import
Route::get('/films',[KolcsonzesController::class, 'createharom'])->name('kolcsonzes.createharom'); 



require __DIR__.'/auth.php';
