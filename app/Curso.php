<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model {

    public $fillable = ['nome_curso', 'regime_curso', 'campus_curso', 'tipo_curso', 'fk_departamento', 'fk_colegiado'];

    public function departamento() {
        return $this->belongsTo(Departamento::class, 'fk_departamento');
    }

    public function colegiado() {
        return $this->belongsTo(Colegiado::class, 'fk_colegiado');
    }

}
