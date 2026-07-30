<?php

use App\Http\Controllers\BodyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfumeController;

// home page
Route::get('/home', [HomeController::class, 'index']);

// body&bath page
Route::get('/body', [BodyController::class, 'index']);
// Route::get('/body/{id}', [BodyController::class, 'show']);

// perfume page
Route::get('/perfume', [PerfumeController::class, 'index']);
