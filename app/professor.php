<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class professor extends Model
{
    protected $fillable = [
        'matricula', 'nome', 'email', 'telefone', 'areaDeAtuacao', 'titulacao',
            'classe', 'regimeDeTrabalho', 'tipoVincluo', 'dataNasc',
            'fk_departamento', 'fk_curso',
    ];

}
