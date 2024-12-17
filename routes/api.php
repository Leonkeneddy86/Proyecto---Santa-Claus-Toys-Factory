<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\Kid;
use App\Http\Controllers\Api\Toy;
use App\Http\Controllers\KidController;

Route::get('/offers', [KidController::class, 'index'])->name('apindex');
Route::post('/offers', [KidController::class, 'store'])->name('apistore');
Route::get('/offers/{id}', [KidController::class, 'show'])->name('apishow');
Route::put('/offers/{id}', [KidController::class, 'update'])->name('apiupdate');
Route::delete('/offers/{id}', [KidController::class, 'destroy'])->name('apidestroy');