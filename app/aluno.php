<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aluno extends Model
{
    //
        protected $fillable = [
        'nome', 'email', 'telefone','matricula','bolsista','data_nasc'
    ];

}
