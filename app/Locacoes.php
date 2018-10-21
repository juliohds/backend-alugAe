<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locacoes extends Model
{
    protected $fillable = [
        'titulo', 'descricao', 'status',
    ];
}
