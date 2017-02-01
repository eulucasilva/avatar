<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoPesquisa extends Model
{
    public $fillable = ['nome_grupo', 'objGeral_grupo', 'linhaPesq_grupo', 'fk_sala'];
    
    public function sala() 
    {
        return $this->belongsTo(Sala::class, 'fk_sala');
    }
    
    public function areas(){
         return $this->belongsToMany(AreadeAtuacao::class, 'grupo_area', 'fk_grupo', 'fk_area');
    }
}
