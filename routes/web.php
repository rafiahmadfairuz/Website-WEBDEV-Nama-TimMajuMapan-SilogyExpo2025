<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LegalitasController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('/login', 'viewLogin')->name('login');
    Route::post('/login', 'storeLogin')->name('store.login');
    Route::get('/register', 'viewRegister')->name('view.register');
    Route::post('/register', 'storeRegister')->name('store.register');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/formLegalitas', [LegalitasController::class, 'viewLegalitasForm'])->name('view.legalitas.form');
    Route::post('/formLegalitas', [LegalitasController::class, 'storeLegalitasForm'])->name('store.legalitas.form');
    Route::get('/legalitas/{id}', [LegalitasController::class, "viewRecomendedLegalitas"])->name('legalitas');
    Route::post('/legalitas/update/{id}', [LegalitasController::class, 'update'])->name('izin.update');
    Route::get('/profile', [UserController::class, "showProfile"])->name('profile');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
