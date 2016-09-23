<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model {

    public $fillable = ['matricula_professor', 'situacao_professor', 'regime_trabalho_professor', 'ch_professor',
        'inicio_contrato_professor', 'termino_contrato_professor', 'contrato_professor', 'classe_professor',
        'titulo_professor', 'email_professor', 'nome_professor', 'telefone_professor', 'endereco_professor',
        'fk_usuario', 'fk_departamento', 'fk_area'];

    public function usuario() {
        return $this->belongsTo(User::class, 'fk_usuario');
    }

    public function departamento() {
        return $this->belongsTo(Departamento::class, 'fk_departamento');
    }

    public function area() {
        return $this->belongsTo(Area::class, 'fk_area');
    }

    public function coordenacao() {
        return $this->hasOne(Coordenacao::class);
    }

    public function colegiado() {
        return $this->hasOne(Colegiado::class);
    }

    public function projeto() {
        return $this->hasOne(Professor::class);
    }

    public function substituicao() {
        return $this->belongsTo(Professor::class, 'fk_professor_substituido', 'fk_professor_substituto');
    }

    public function atividade_administrativa()
    {
        return $this->hasMany(Atividade_administrativa::class);
    }

    public function atividade_administrativa_acd() {
        return $this->hasMany(Atividade_administrativa_acd::class);
    }

    public function atividade_complementar() {
        return $this->hasMany(Atividade_complementar::class);
    }

    public function atividade_ensino() {
        return $this->hasMany(Atividade_ensino::class);
    }

    public function atividade_pesquisa() {
        return $this->hasMany(Atividade_pesquisa::class);
    }

    public function atividade_projeto_extensao() {
        return $this->hasMany(Atividade_projeto_extensao::class);
    }

     public function turma() 
     {
        return $this->hasMany(Turma::class);
    }

}
