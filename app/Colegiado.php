<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colegiado extends Model {

    public $fillable = ['nome_colegiado', 'sigla_colegiado', 'email_colegiado', 'campus_colegiado',
        'fk_coordenador', 'fk_secretario'];

    public function coordenacao() {
        $this->hasOne(Coordenacao::class, 'fk_coordenador');
    }

    public function curso() {
        return $this->hasOne(Professor::class);
    }

}
