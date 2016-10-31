<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    public $fillable = ['nome_disciplina', 'codigo_disciplina', 'creditacao_teorica', 'creditacao_pratica', 'creditacao_estagio', 'fk_area', 'fk_departamento', 'ch_teorica', 'ch_pratica', 'ch_estagio', 'ch_total_disciplina'];
    
    public function area(){
        return $this->belongsTo(Area::class, 'fk_area');
    }
    
    public function departamento(){
       return $this->belongsTo(Departamento::class, 'fk_departamento');
    }
}
