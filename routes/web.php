<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ImageController;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    } else {
        return view('auth.login');
    }
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [MovieController::class, 'index'])->name('dashboard'); 
    Route::get('/dashboard/movies', [MovieController::class, 'showMovie'])->name('movie.index');
    Route::post('/movies', [MovieController::class, 'store'])->name('movie.store');
    Route::get('/movies/create', [MovieController::class, 'create'])->name('movie.create');
    Route::get('/movies/{movie}/edit', [MovieController::class, 'edit'])->name('movie.edit');
    Route::put('/movies/{movie}', [MovieController::class, 'update'])->name('movie.update');
    Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])->name('movie.destroy');
    Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movie.show');
});