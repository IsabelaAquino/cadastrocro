@extends('layout')

@section('cabecalho')
    Perfil de Usuário
@endsection

@section('conteudo')
@include('mensagem', ['mensagem' => $mensagem])
<form method="post">
    @csrf
    <div class="row">
        <input type="hidden" class="form-control" name="id" id="id" value="{{$user->id}}">
        <div class="col col-6">
            <label for="name" class="">Nome:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}" required>
        </div>
        <div class="col col-6">
            <label for="email" class="">Email:</label>
            <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}" required>
        </div>
    </div>
    <div class="row">
        <div class="col col-6">
            <label for="password" class="">Nova Senha:</label>
            <input type="password" class="form-control" name="password" id="password" >
        </div>
        <div class="col col-6">
            <label for="filme_favorito" class="">Filme Favorito:</label>
            <input type="text" class="form-control" name="filme_favorito" id="filme_favorito" required>
        </div>
    </div>
    <hr>
    <div id="endereco">
        <div class="row">
            <h6 class="text-center mb-2">Endereço:</h6>
            <div class="col col-6">
                <label for="rua" class="">Rua:</label>
                <input type="text" class="form-control" name="rua" id="rua" required>
            </div>
            <div class="col col-6">
                <label for="bairro" class="">Bairro:</label>
                <input type="text" class="form-control" name="bairro" id="bairro" required>
            </div>
        </div>
        <div class="row">
            <div class="col col-2">
                <label for="numero" class="">Número:</label>
                <input type="number" class="form-control" name="numero" id="numero" required>
            </div>
            <div class="col col-8">
                <label for="cidade" class="">Cidade:</label>
                <input type="text" class="form-control" name="cidade" id="cidade" required>
            </div>
            <div class="col col-2" required>
                <label for="uf" class="">UF:</label>
                <select class="form-select" name="uf" id="uf">
                    <option hidden >---SELECIONE---</option>
                    <option value="AC">AC</option>
                    <option value="AM">AM</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="PA">PA</option>
                    <option value="AP">AP</option>
                    <option value="TO">TO</option>
                    <option value="MA">MA</option>
                    <option value="PI">PI</option>
                    <option value="CE">CE</option>
                    <option value="RN">RN</option>
                    <option value="PB">PB</option>
                    <option value="PE">PE</option>
                    <option value="AL">AL</option>
                    <option value="SE">SE</option>
                    <option value="BA">BA</option>
                    <option value="MG">MG</option>
                    <option value="ES">ES</option>
                    <option value="RJ">RJ</option>
                    <option value="SP">SP</option>
                    <option value="PR">PR</option>
                    <option value="SC">SC</option>
                    <option value="MG">MG</option>
                    <option value="RS">RS</option>
                    <option value="MS">MS</option>
                    <option value="MT">MT</option>
                    <option value="GO">GO</option>
                    <option value="SP">SP</option>
                    <option value="MG">MG</option>
                    <option value="DF">DF</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-2 mt-4">
            <button class="btn btn-primary">Editar Perfil <i class="fa fa-pencil" aria-hidden="true"></i></button>
        </div>
    </div>

</form>
@endsection
