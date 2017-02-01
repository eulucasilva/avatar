<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreadeAtuacao extends Model {

    public $fillable = ['nome_area'];

    public function grupoPesquisas() {

        return $this->belongsToMany(GrupoPesquisa::class, 'grupo_area', 'fk_area', 'fk_grupo');
    }

}
