@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="">
                            Perfil de Usuário
                        </a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="/series">
                            Séries
                        </a>
                    </li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
