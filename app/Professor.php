<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    public $fillable = ['matricula_professor','situacao_professor', 'regime_trabalho_professor','ch_professor',
    'inicio_contrato_professor','termino_contrato_professor','contrato_professor','classe_professor',
     'titulo_professor','email_professor','nome_professor','telefone_professor','endereco_professor',
     'fk_usuario'];
}
