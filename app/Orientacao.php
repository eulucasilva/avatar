<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orientacao extends Model
{
    public $fillable = ['tipo_orientacao', 'nivel_orientacao', 'ch_orientacao', 'fk_periodoLetivo', 'fk_professor', 'fk_alunos'];

    public function professor() {
        return $this->belongsTo(Professor::class, 'fk_professor');
    }

    public function periodoLetivo() {
        return $this->belongsTo(PeriodoLetivo::class, 'fk_periodoLetivo');
    }

    public function aluno() {
        return $this->belongsTo(Aluno::class, 'fk_alunos');
    }

}
