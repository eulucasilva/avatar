@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Exibir Orientação</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('orientacao.index') }}"> Voltar</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tipo de Orientação:</strong>
            {{ $orientacao->tipo_orientacao }}
        </div>
        <div class="form-group">
            <strong>Nivel Orientação:</strong>
            {{ $orientacao->nivel_orientacap}}
        </div>
        <div class="form-group">
            <strong>Carga Horária:</strong>
            {{ $orientacao->ch_orientacao}}
        </div>  
        <div class="form-group">
            <strong>Professor:</strong>
            {{$orientacao->fk_professor}}
        </div>
        <div class="form-group">
            <strong>Período Letivo:</strong>
            {{$orientacao->fk_periodoLetivo}}
        </div>

        <div class="form-group">
            <strong>Aluno:</strong>
            {{$orientacao->fk_alunos}}
        </div>
    </div>
</div>
@endsection