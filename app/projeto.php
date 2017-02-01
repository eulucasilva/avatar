<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projeto extends Model
{
    protected $fillable = [
        'titulo', 'objetivoGeral', 'fk_professor',  'objetivoEspec',   'resultadosEsperados',
        'financiamento','tipoPesquisa', 'fonteFinanciamento',  'grupoPesquisaProjeto',
    ];

}
