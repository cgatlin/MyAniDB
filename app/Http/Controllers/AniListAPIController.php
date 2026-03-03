<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AniListAPIService;
use Illuminate\Support\Collection;
// use Illuminate\Support\Arr;

class AniListAPIController extends Controller
{

    public function __construct(AniListAPIService $animes)
    {
        $this->animes = $animes;
    }


    /**
     * Display a listing of animes with a specific season and year.
     */
    public function index($season, $year = null)
    {
        $year = $year ?? date('Y');

        $animes = $this->animes->seasonRequest($season, $year);
        foreach ($animes as $anime) {
            if ($anime['isAdult']) {
                $typeSortAnime['isAdult'][]= $anime;
            } else {
                $typeSortAnime[$anime['format']][]= $anime;
            }
        }
        // dd($typeSortAnime);
        // $sortedArray = Arr::sort($typeSortAnime, function ($item) {
        //     return $item['title']['romaji'];
        // });
        // $sortedArray = collect($typeSortAnime)->sortBy('title.romaji', SORT_NATURAL)->all();
        $sortedData = collect($typeSortAnime)->map(function ($items) {
            return collect($items)
                ->sortBy('title.romaji', SORT_NATURAL | SORT_FLAG_CASE)
                ->values() // Optional: resets 0, 1, 2... keys within each category
                ->all();
        })->all();
        // dd($sortedData);
        return view('anime.season', ['season' => $season, 'year' => $year, 'animes' => $sortedData]);
    }


    /**
     * Display a specific anime by ID.
     */
    public function show(string $id)
    {
        //
        $anime = $this->animes->animeDetailRequest($id);

        return view('anime.detail', ['anime' => $anime]);
    }

   
}
