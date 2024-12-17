<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidController;

Route::get('/', [KidController::class, 'index'])->name('index');
Route::get('/offers/{id}', [KidController::class, 'show'])->name('show');
    
