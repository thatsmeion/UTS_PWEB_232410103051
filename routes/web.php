<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'LoginForm'])->name('login');
Route::post('/', [PageController::class, 'cekLogin'])->name('cekLogin');
Route::get('/dashboard', [PageController::class, 'Dashboard'])->name('Dashboard');
Route::get('/profile', [PageController::class, 'Profile'])->name('Profile');
Route::get('/pengelolaan', [PageController::class, 'Pengelolaan'])->name('Pengelolaan');
