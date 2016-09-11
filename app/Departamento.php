<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
     public $fillable = ['nome', 'sigla', 'email', 'campus'];
    
    public function areas(){
        return $this->hasMany(Area::class);
    }

    public function professores(){
        return $this->hasMany(Professor::class);
    }
    public function curso() {
        return $this->hasOne(Departamento::class);
    }
}
