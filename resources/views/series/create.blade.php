@extends('layout')

@section('cabecalho')
    Adicionar Série
@endsection

@section('conteudo')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post">
    @csrf
    <div class="row">
        <h2>Adicionar Séries</h2>
        <div class="col col-8">
            <label for="nome" class="">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="col col-2">
            <label for="qtd_temporada" class="">Nº de temporadas:</label>
            <input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas">
        </div>
        <div class="col col-2">
            <label for="ep_temporada" class="">Nº Ep. por temporadas:</label>
            <input type="number" class="form-control" name="ep_temporadas" id="ep_temporadas">
        </div>
    </div>

    <button class="btn btn-primary mt-2">Adicionar</button>
</form>
@endsection
