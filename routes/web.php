<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sites.home');
})->name('home');


Route::get('/login', [LoginController::class, 'indexLoginPage'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login.action');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout.action');
