<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\{User, Endereco};
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\PerfilFormRequest;

class EnderecosController extends Controller
{

    public function create(Request $request)
    {
        $user = Auth::user();

        $enderecos = User::find($user->id);

        $enderecos = $enderecos->enderecos();

        $mensagem = $request->session()->get('mensagem');

        return view('perfil.create', compact('user', 'enderecos', 'mensagem'));
    }

    public function update(Request $request){

        $novoNome = $request->name;
        $novoEmail =  $request->email;
        $novaSenha =  $request->password;

        if($request->password == NULL){
            $user = user::find($request->id);
            $user->name = $novoNome;
            $user->email = $novoEmail;
        }else{
            $user = user::find($request->id);
            $user->name = $novoNome;
            $user->email = $novoEmail;
            $user->password = Hash::make($novaSenha);
        }
        $user->save();


        $this->CriarEditEndereco($request, $user);



        $request->session()->flash(
            'mensagem',
            "Perfil alterado com sucesso!"
        );

        return redirect()->back();
    }


    public function CriarEditEndereco(Request $request, User $user)
    {
        $criaouedita = Endereco::where('user_id', $request->id)->get();

        $retorno = count($criaouedita);
        if($retorno == 0){
            $endereco = $user->enderecos()->create([
                'rua' => $request->rua,
                'bairro' => $request->bairro,
                'cidade' => $request->cidade,
                'numero' => $request->numero,
                'uf' => $request->uf,
                'filme_favorito' => $request->filme_favorito,
                'user_id' => $request->id,
            ]);
        }else{
            echo($criaouedita);
            $endereco = Endereco::find($criaouedita->id);

            $endereco->rua = $request->rua;
            $endereco->bairro = $request->bairro;
            $endereco->cidade = $request->cidade;
            $endereco->numero = $request->numero;
            $endereco->cidade = $request->cidade;
            $endereco->uf = $request->uf;
            $endereco->filme_favorito = $request->filme_favorito;
            $endereco->user_id = $request->id;
        }

        $endereco->save();

    }
}
