<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;
use App\Http\Requests\SeriesFormRequest;

class SeriesController extends Controller
{
    public function index(Request $request){

        $series = Serie::query()->orderBy('nome')->get();

        $mensagem = $request->session()->get('mensagem');
        return view('series.index', compact('series', 'mensagem'));
    }


    public function create(){
        return view('series.create');
    }

    public function store(SeriesFormRequest $request){
        $nome = $request->nome;
        $serie = Serie::create($request->all());
        $request->session()->flash('mensagem', "Série inserida com sucesso! {$serie->nome}");

        return redirect()->route('series.index');
    }

    public function destroy(Request $request){
        Serie::destroy($request->id);
        $request->session()->flash('mensagem', "Série excluída com sucesso!");

        return redirect()->route('series.index');
    }
}
