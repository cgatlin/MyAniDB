<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AniListAPIService;

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
        dd($animes);
        return view('anime', ['season' => $season, 'year' => $year, 'animes' => $animes]);
    }


    /**
     * Display a specific anime by ID.
     */
    public function show(string $id)
    {
        //
    }

   
}
