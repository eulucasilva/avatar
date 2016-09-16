<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public $fillable = ['nome', 'sigla', 'email', 'campus', 'fk_coordenador', 'fk_secretario'];
    
    public function areas(){
        return $this->hasMany(Area::class);
    }

    public function professores(){
        return $this->hasMany(Professor::class);
    }
    public function curso() {
        return $this->hasOne(Departamento::class);
    }
    public function coordenacao() {
        return $this->belongsTo(Coordenacao::class, 'fk_coordenador');
    }
    public function secretario() {
        return $this->belongsTo(Secretario::class, 'fk_secretario');
    }
}
