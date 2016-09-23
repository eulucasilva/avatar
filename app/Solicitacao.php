<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
      public $fillable = ['fk_colegiado','fk_departamento', 'fk_periodo_letivo','fk_curso',
    'fk_area','fk_disciplina', 'status_solicitacao' ,'data_solicitacao', 'data_resultado', 'quant_aluno_teorica', 'quant_aluno_pratica', 'quant_aluno_estagio', 'quant_pratica_solicitada', 'quant_teorica_solicitada', 'quant_estagio_solicitada', 'quant_pratica_aprovada', 'quant_teorica_aprovada', 'quant_estagio_aprovada', 'creditacao_pratica', 'creditacao_teorica', 'creditacao_estagio', 'descricao_solicitacao'];

      public function colegiado() 
      {
        return $this->belongsTo(Colegiado::class, 'fk_colegiado');
      }

      public function departamento() 
      {
        return $this->belongsTo(Departamento::class, 'fk_departamento');
      }
      public function periodo_letivo() 
      {
        return $this->belongsTo(PeriodoLetivo::class, 'fk_periodo_letivo');
      }
      public function curso() 
      {
        return $this->belongsTo(Curso::class, 'fk_curso');
      }
      public function area() 
      {
        return $this->belongsTo(Area::class, 'fk_area');
      }
      public function disciplina() 
      {
        return $this->belongsTo(Disciplina::class, 'fk_disciplina');
      }
      public function turma() 
      {
        return $this->hasMany(Turma::class);
      }
}
