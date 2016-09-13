<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orientacao_projeto extends Model {

    //
    public $fillable = ['fk_aluno', 'fk_projeto', 'fk_professor', 'fk_periodoLetivo'];

    public function aluno() {

        return $this->belongsTo(Aluno::class, 'fk_aluno');
    }

    public function projeto() {

        return $this->belongsTo(Projeto::class, 'fk_projeto');
    }

    public function professor() {

        return $this->belongsTo(Professor::class, 'fk_professor');
    }

    public function periodoLetivo() {

        return $this->belongsTo(PeriodoLetivo::class, 'fk_periodoLetivo');
    }

}
