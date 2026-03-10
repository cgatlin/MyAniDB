<?php

use App\Http\Controllers\AniListAPIController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));

Route::get('/about', fn () => view('about'));

Route::get('/anime/{id}', [AniListAPIController::class, 'show']);
Route::get('/{season}/{year?}', [AniListAPIController::class, 'index']);
