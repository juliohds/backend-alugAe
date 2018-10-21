<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
        'rua', 'bairro', 'cidade', 'pais', 'numero',
    ];

    public function imovel()
    {
        return $this->belongsTo('App\Imovel');
    }

}
