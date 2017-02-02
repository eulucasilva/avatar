<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class curso extends Model
{

    //

    protected $fillable = [
        'nomeCurso', 'fk_departamento',
    ];

}
