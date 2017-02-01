<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frequencia extends Model
{
    //
      public $fillable = ['horaentrada_frequencia', 
          'horasainda_frequencia', 'status_frequencia', 'fk_funcionario'];
      
      public function funcionario() 
    {
        return $this->belongsTo(Local::class, 'fk_frequencia');
    }
}
