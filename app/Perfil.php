<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $fillable = [
        'idade', 'time', 'partido', 'series', 'score', 'amigos', 'baladeiro'
    ];
}
