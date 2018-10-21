<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = [
        'nome', 'endereco_id', 'img', 'preco',
    ];

    public function endereco(){
        return $this->hasMany('App\Endereco');
    }



}
