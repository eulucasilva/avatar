@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2> Exibir Disciplina</h2>
        </div>
        @endsection 
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('disciplina.index') }}"> Voltar</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Curso:</strong>
            {{ $disciplina->nome_disciplina }}
        </div>
        <div class="form-group">
            <strong>Regime:</strong>
            {{ $disciplina->codigo_disciplina}}
        </div>                    
        <div class="form-group">
            <strong>Campus:</strong>
            {{ $disciplina->ch_total_disciplina}}
        </div>
        <div class="form-group">
            <strong>Tipo do Curso</strong>
            {{ $disciplina->natureza_disciplina}}
        </div>  
        <div class="form-group">
            <strong>Departamento:</strong>
            {{$disciplina->fk_area}}
        </div>
        <div class="form-group">
            <strong>Colegiado:</strong>
            {{$disciplina->fk_departamento}}
        </div>
    </div>
</div>
@endsection