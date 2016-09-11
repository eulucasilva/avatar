<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade_administrativa_acd extends Model
{
       public $fillable = ['tipo_participacao_atividade_administrativa_acd','ch_participacao_atividade_administrativa_acd','fk_professor','fk_periodo_letivo'];
 
 	public function professor() 
 	{
        return $this->belongsTo(Professor::class, 'fk_professor');
    }
     public function periodo_letivo() 
    {
        return $this->belongsTo(PeriodoLetivo::class, 'fk_periodo_letivo');
    }
}
