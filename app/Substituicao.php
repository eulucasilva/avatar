<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Substituicao extends Model
{
    public $fillable = ['inicio_substituicao','fim_substituicao','motivo_substituicao',
    'portaria_substituicao','numcop_substituicao','fk_professor_substituido','fk_professor_substituto'];
   
    public function professor() {
        return $this->hasOne(Professor::class, 'fk_professor_substituido', 'fk_professor_substituto');
    }
    
}
