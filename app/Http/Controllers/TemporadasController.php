<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemporadasController extends Controller
{
    public function index(int $serieId)
    {
        var_dump($serieId);
        return false;
        $serie = Serie::find($serieId);
        $temporadas = $serie->temporadas;

        return view('temporadas.index', compact('serie','temporadas'));
    }
}
