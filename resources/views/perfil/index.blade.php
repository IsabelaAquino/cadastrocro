@extends('layout')

@section('cabecalho')
    Adicionar Série
@endsection

@section('conteudo')
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->

<form method="post">
    @csrf
    <div class="row">
        <div class="col col-6">
            <label for="nome" class="">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="col col-6">
            <label for="qtd_temporada" class="">Email:</label>
            <input type="email" class="form-control" name="qtd_temporadas" id="qtd_temporadas">
        </div>
    </div>
    <div class="row">
        <div class="col col-6">
            <label for="ep_temporada" class="">Nova Senha:</label>
            <input type="password" class="form-control" name="ep_temporadas" id="ep_temporadas">
        </div>
        <div class="col col-6">
            <label for="ep_temporada" class="">Filme Favorito:</label>
            <input type="text" class="form-control" name="ep_temporadas" id="ep_temporadas">
        </div>
    </div>
    <div class="row">
        <div class="col col-6">
            <label for="nome" class="">Rua:</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="col col-6">
            <label for="qtd_temporada" class="">Bairro:</label>
            <input type="text" class="form-control" name="qtd_temporadas" id="qtd_temporadas">
        </div>
    </div>
    <div class="row">
        <div class="col col-2">
            <label for="qtd_temporada" class="">Número:</label>
            <input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas">
        </div>
        <div class="col col-8">
            <label for="nome" class="">Cidade:</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="col col-2">
            <label for="qtd_temporada" class="">UF:</label>
            <input type="text" class="form-control" name="qtd_temporadas" id="qtd_temporadas">
        </div>
    </div>
    <div class="row">
        <div class="col col-2 mt-4">
            <button class="btn btn-primary">Editar Perfil <i class="fa fa-pencil" aria-hidden="true"></i></button>
        </div>
    </div>

</form>
@endsection
