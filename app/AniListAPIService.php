<?php

namespace App;

use Illuminate\Support\Facades\Http;

// Set global options for all HTTP requests
Http::globalOptions([
    'curl' => [
        CURLOPT_SSL_OPTIONS => CURLSSLOPT_NATIVE_CA
    ],
]);

class AniListAPIService
{
   
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function seasonRequest($season, $year, $page = 1)
    {
        // Here we define our query as a multi-line string
        $query = 'query ($season: MediaSeason, $year: Int, $page: Int) {
            Page (page: $page, perPage: 50) {
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
                    description(asHtml: false)
                    format
                    genres
                    status
                    bannerImage
                    coverImage {
                        medium
                        large
                        extraLarge
                    }
                }
            }
        }';

        // Define our query variables and values that will be used in the query request
        $variables = [
            "season" => strtoupper($season),
            "year" => $year,
            "page" => $page,
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

        if ($data['data']['Page']['pageInfo']['hasNextPage']) {
            $animes = array_merge($animes, $this->seasonRequest($season, $year, $page + 1));
        }

        return $animes;
    }

    public function animeDetailRequest($id) 
    {
        $query = 'query ($id: Int) {
            Media (id: $id, type: ANIME) {
                id
                title {
                    romaji
                    english
                    native
                }
                description(asHtml: false)
                format
                genres
                status
                bannerImage
                coverImage {
                    extraLarge
                }
            }
        }';

        $variables = [
            "id" => (int)$id,
        ];

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->post('https://graphql.anilist.co', [
            'query' => $query,
            'variables' => $variables,
        ]);
    
        $data = $response->json();
        
        $animes = $data['data']['Media'];

        return $animes;

    }


    
}
