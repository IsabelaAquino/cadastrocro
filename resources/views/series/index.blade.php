@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')

@if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif

<a href="{{ route('form_criar_serie') }}" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    @foreach($series as $serie)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $serie->nome  }}

        <div class="input-group w-50" hidden id="input-nome-serie-{{ $serie->id }}">
            <input type="text" class="form-control" value="{{ $serie->nome }}">
            <div class="input-group-append">
                <button class="btn btn-primary" onclick="editarSerie({{ $serie->id }})">
                    <i class="fas fa-check"></i>
                </button>
                @csrf
            </div>
        </div>
        <span class="d-flex">
            <button style="margin-right: 5px" class="btn btn-info btn-sm mr-1" onclick="toggleInput({{ $serie->id }})">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            </button>
            <a href="/series/{{ $serie->id }}/temporadas" style="margin-right: 5px" class="btn btn-info btn-sm mr-2">
                <i class="fa fa-external-link" aria-hidden="true"></i>
            </a>

            <form method="post" action="/series/{{ $serie->id }}"
                onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($serie->nome) }}?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">
                <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
            </form>
        </span>
    </li>
    @endforeach
</ul>
@endsection
