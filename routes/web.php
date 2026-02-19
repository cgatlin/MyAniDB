<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/anime/{season}/{year?}', function ($season, $year = null) {
    if ($year === null) {
        $year = now()->year;
    }
    // dd($season, $year);
    return view('anime', ['season' => $season, 'year' => $year]);
});