<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AniListAPIController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/anime/{season}/{year?}', [AniListAPIController::class, 'index']); 
Route::get('/anime/{id}', [AniListAPIController::class, 'show']);
