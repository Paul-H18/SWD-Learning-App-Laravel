<?php

use App\Http\Controllers\CardsController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('sites.home');
    })->name('home');

    Route::get('/cards', [CardsController::class, 'index'])->name('cards.index');

});

Route::middleware(['web'])->group(function () {
    Route::get('/login', [LoginController::class, 'indexLoginPage'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.action');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout.action');
});
