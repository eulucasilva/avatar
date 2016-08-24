<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
     public $fillable = ['matricula_aluno','ano_ingresso_aluno', 'nome_aluno','endereco_aluno',
    'telefone_aluno','email_aluno'];
}
