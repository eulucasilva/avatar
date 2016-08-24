<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordenacao extends Model
{
     public $fillable = ['tipo_coordenacao','portaria_nomeacao_coordenacao', 'inicio_mandato_coordenacao','termino_mandato_coordenacao',
    'fk_professor','fk_usuario'];
}
