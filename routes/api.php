<?php

use Illuminate\Http\Request;
use App\Http\Controllers\api\Kid;
use App\Http\Controllers\Api\Toy;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidController;
use App\Http\Controllers\ToyController;

Route::get('/offers', [KidController::class, 'index'])->name('apindex');
Route::post('/offers', [KidController::class, 'store'])->name('apistore');
Route::get('/offers/{id}', [KidController::class, 'show'])->name('apishow');
Route::put('/offers/{id}', [KidController::class, 'update'])->name('apiupdate');
Route::delete('/offers/{id}', [KidController::class, 'destroy'])->name('apidestroy');


Route::get('/offers/{offerId}/news', [ToyController::class, 'index'])->name('apindexNews');
Route::post('/offers/{offerId}/news', [ToyController::class, 'store'])->name('apistoreNews');
Route::get('/offers/{offerId}/news/{newsID}', [ToyController::class, 'show'])->name('apishowNews');
Route::put('/offers/{offerId}/news/{newsID}', [ToyController::class, 'update'])->name('apiupdateNews');
Route::delete('/offers/{offerId}/news/{newsId}', [ToyController::class, 'destroy'])->name('apidestroyNews');
