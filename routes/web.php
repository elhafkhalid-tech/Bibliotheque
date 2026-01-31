<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\MembreController;
use App\Models\Membre;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('categories',CategoryController::class);
Route::resource('livres',LivreController::class);
Route::resource('membres',MembreController::class);
