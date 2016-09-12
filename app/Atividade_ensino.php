<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade_ensino extends Model
{
    public $fillable = ['ch_atividade_ensino','fk_professor','fk_periodo_letivo'];

     public function professor() {
        return $this->belongsTo(Professor::class, 'fk_professor');
    }
     public function periodo_letivo() {
        return $this->belongsTo(PeriodoLetivo::class, 'fk_periodo_letivo');
    }
}
