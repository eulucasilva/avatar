<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pit extends Model
{
    
    public $fillable = ['fk_periodo_letivo','fk_professor', 
        'campo1','campo2','campo3','campo4','campo5','campo6','campo7','campo8',
        'campo9','campo10','campo11','campo12','campo13','campo14','campo15','campo16',
        'campo17','campo18','campo19','campo20','campo21','campo22','campo23','campo24',
        'campo25','campo26','campo27','campo28','campo29','campo30','campo31','campo32',
        'campo33','campo34','campo35','campo36','campo37','campo38','campo39','campo40',
        'campo41','campo42','campo43','campo44','campo45','campo46'];
    
      public function periodo_letivo() 
      {
        return $this->belongsTo(PeriodoLetivo::class, 'fk_periodo_letivo');
      }

      public function professor() 
      {
        return $this->belongsTo(Professor::class, 'fk_professor');
      }
}
