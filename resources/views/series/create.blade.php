@extends('layout')

@section('head')
<h1>Adicionar Série</h1>
@endsection

@section('conteudo')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="nome">
            <button class="btn btn-success mt-2">Salvar</button>
        </div>
    </form>
@endsection
