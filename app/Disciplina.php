<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    public $fillable = ['nome', 'codigo', 'ch_total', 'natureza'];
}
