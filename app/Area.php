<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model {

    public $fillable = ['nome', 'fk_departamento'];

    public function departamento() {
        return $this->belongsTo(Departamento::class, 'fk_departamento');
    }

}
