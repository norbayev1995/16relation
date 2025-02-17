<?php

use App\Http\Controllers\PassportController;
use App\Http\Controllers\AuthConteroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');
Route::resource('passports', PassportController::class)->middleware('auth');

Route::get('login', [AuthConteroller::class, 'login'])->name('login');
Route::post('login', [AuthConteroller::class, 'handleLogin'])->name('handleLogin');
Route::get('register', [AuthConteroller::class, 'register'])->name('register');
Route::post('register', [AuthConteroller::class, 'handleRegister'])->name('handleRegister');
Route::get('logout', [AuthConteroller::class, 'logout'])->name('logout');
Route::get('404page', [AuthConteroller::class, 'errorPage'])->name('errorPage');
