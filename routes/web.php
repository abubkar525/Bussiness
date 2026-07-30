<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/journal', [PageController::class, 'journal'])->name('journal');
Route::get('/careers', [PageController::class, 'careers'])->name('careers');

Route::get('/get-started', [PageController::class, 'getStarted'])->name('get-started');
Route::post('/get-started', [PageController::class, 'submitGetStarted'])->name('get-started.submit');
