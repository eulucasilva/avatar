<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    public $fillable = ['nome_disciplina', 'codigo_disciplina', 'ch_total_disciplina', 'creditacao_pratica', 'creditacao_teorica', 'creditacao_estagio', 'natureza_disciplina', 'fk_area', 'fk_departamento'];
    
    public function area(){
        return $this->belongsTo(Area::class, 'fk_area');
    }
    
    public function departamento(){
       return $this->belongsTo(Departamento::class, 'fk_departamento');
    }
}
