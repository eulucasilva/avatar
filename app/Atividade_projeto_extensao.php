<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade_projeto_extensao extends Model
{
   //
     public $fillable = ['tipo_part_prof_atividade_projeto_extensao','ch_total_atividade_projeto_extensao','fk_professor','fk_periodo_letivo'];
 
 	public function professor() 
 	{
        return $this->belongsTo(Professor::class, 'fk_professor');
    }
     public function periodo_letivo() 
    {
        return $this->belongsTo(PeriodoLetivo::class, 'fk_periodo_letivo');
    }
}
