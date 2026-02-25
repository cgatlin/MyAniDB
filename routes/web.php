<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

// Set global options for all HTTP requests
Http::globalOptions([
    'curl' => [
        CURLOPT_SSL_OPTIONS => CURLSSLOPT_NATIVE_CA
    ],
]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/anime/{season}/{year?}', function ($season, $year = null) {
    $year = $year ?? date('Y');
    
    // Here we define our query as a multi-line string
    $query = 'query ($season: MediaSeason, $year: Int) {
        Page (page: 1, perPage: 50) {
            pageInfo {
                total
                perPage
                currentPage
                lastPage
                hasNextPage
            }
            media (season: $season, seasonYear: $year, type: ANIME) {
                id
                season
                seasonYear
                title {
                    romaji
                    english
                    native
                }
            }
        }
    }';

    // Define our query variables and values that will be used in the query request
    $variables = [
        "season" => strtoupper($season),
        "year" => $year
    ];

    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
    ])->post('https://graphql.anilist.co', [
        'query' => $query,
        'variables' => $variables,
    ]);


   
    $data = $response->json();
    // dd($response->successful(), $data);
    $animes = $data['data']['Page']['media'];


    // dd($season, $year);
    
    return view('anime', ['season' => $season, 'year' => $year, 'animes' => $animes]);
});