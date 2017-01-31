<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    public $fillable = ['nome_sala', 'fk_local'];
    
    public function local() 
    {
        return $this->belongsTo(Local::class, 'fk_local');
    }
}
