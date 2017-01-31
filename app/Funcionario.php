<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    //
    public $fillable = ['nome_funcionario', 'telefone_funcionario', 
                        'datanasc_funcionario', 'dataadmissao_funcionario', 'grauinstrucao_funcionario', 
                        'formacao_funcionario','funcao_funcionario', 'horarioinicio_funcionario', 
                        'horariofim_funcionario'];

    
}
