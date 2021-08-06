<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $table = 'tb_series';

    public $timestamps = false;
    protected $fillable = [
        'nome'
    ];
}
