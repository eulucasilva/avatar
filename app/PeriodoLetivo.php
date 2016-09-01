<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeriodoLetivo extends Model
{
    public $fillable = ['periodo_periodoLetivo', 'ano_periodoLetivo', 'modalidade_periodoLetivo',
     'inicio_periodoLetivo','termino_periodoLetivo'];
    
    public function projeto() {
        return $this->hasOne(Professor::class);
    }
}


