<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
        'rua',
        'bairro',
        'cidade',
        'numero',
        'uf',
        'filme_favorito'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
