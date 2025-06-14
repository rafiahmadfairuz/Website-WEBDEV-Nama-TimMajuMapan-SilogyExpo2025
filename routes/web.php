<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LegalitasController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'viewLogin')->name('login');
    Route::post('/login', 'storeLogin')->name('store.login');
    Route::get('/register', 'viewRegister')->name('view.register');
    Route::post('/register', 'storeRegister')->name('store.register');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', HomeController::class)->name('home');
});
Route::get('/userLegalitas', function () {
    return view('UserLegalitas.RecomendLegalitas');
});
Route::get('/formLegalitas', [LegalitasController::class, 'viewLegalitasForm'])->name('view.legalitas.form');
