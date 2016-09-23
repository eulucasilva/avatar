<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    public $fillable = ['fk_solicitacao','fk_professor', 'tipo_turma','ch_semestral_turma',
    'ch_semanal_turma','local_turma'];

      public function solicitacao() 
      {
        return $this->belongsTo(Solicitacao::class, 'fk_solicitacao');
      }

      public function professor() 
      {
        return $this->belongsTo(Professor::class, 'fk_professor');
      }
}
