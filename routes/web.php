<?php

use App\Http\Controllers\PassportController;
use App\Http\Controllers\UserConteroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');
Route::resource('passports', PassportController::class)->middleware('auth');

Route::get('login', [UserConteroller::class, 'login'])->name('login');
Route::post('login', [UserConteroller::class, 'handleLogin'])->name('handleLogin');
Route::get('register', [UserConteroller::class, 'register'])->name('register');
Route::post('register', [UserConteroller::class, 'handleRegister'])->name('handleRegister');
Route::get('logout', [UserConteroller::class, 'logout'])->name('logout');
Route::get('404page', [UserConteroller::class, 'errorPage'])->name('errorPage');
