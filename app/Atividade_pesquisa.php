<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade_pesquisa extends Model
{
      public $fillable = ['tipo_part_prof_atividade_pesquisa','ch_total_atividade_pesquisa','fk_professor','fk_periodo_letivo'];
 
 	public function professor() 
 	{
        return $this->belongsTo(Professor::class, 'fk_professor');
    }
     public function periodo_letivo() 
    {
        return $this->belongsTo(PeriodoLetivo::class, 'fk_periodo_letivo');
    }
}
