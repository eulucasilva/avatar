<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservaSala extends Model
{
    public $fillable = ['objetivo_reserva', 'horaInicio_reserva', 'horaFim_reserva', 'data_reserva', 'fk_sala']; //'fk_professor', 'fk_funcionario'];
    
    public function sala() 
    {
        return $this->belongsTo(Sala::class, 'fk_sala');
    }
}
