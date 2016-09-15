<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model {

    public $fillable = ['nome_projeto', 'tipo_projeto', 'tipo_participacao_projeto',
        'fk_professor', 'fk_periodo_letivo'];

    public function professor() {
        return $this->belongsTo(Professor::class, 'fk_professor');
    }

    public function periodoLetivo() {
        return $this->belongsTo(PeriodoLetivo::class, 'fk_periodo_letivo');
    }

}
