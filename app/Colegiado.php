<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colegiado extends Model {

    public $fillable = ['nome_colegiado', 'sigla_colegiado', 'email_colegiado', 'campus_colegiado',
        'fk_coordenador', 'fk_secretario', 'fk_usuario'];

    public function coordenacao() {
        return $this->belongsTo(Coordenador::class, 'fk_coordenador');
    }

    public function secretario() {
        return $this->belongsTo(Secretario::class, 'fk_secretario');
    }

    public function curso() {
        return $this->hasOne(Professor::class);
    }

    public function usuario() {
        return $this->belongsTo(User::class, 'fk_usuario');
    }

}
