<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerfilFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3',
            'email' => 'required',
            'password' => 'required',
            'filme_favorito' => 'required',
            'rua' => 'required',
            'bairro' => 'required',
            'mumero' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'nome.min' => 'O campo nome precisa ter pelo menos 2 caracteres'
        ];
    }
}
