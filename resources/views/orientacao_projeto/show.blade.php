@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2> Exibir Orientação de Projetos</h2>
        </div>
         @endsection 
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('orientacao_projeto.index') }}"> Voltar</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Aluno:</strong>
            {{ $orientacao_projeto->fk_aluno }}
        </div>
 
        <div class="form-group">
            <strong>Professor:</strong>
            {{$orientacao_projeto->fk_professor}}
        </div>
        <div class="form-group">
            <strong>Período Letivo:</strong>
            {{$orientacao_projeto->fk_periodoLetivo}}
        </div>

        <div class="form-group">
            <strong>Projeto:</strong>
            {{$orientacao_projeto->fk_projeto}}
        </div>
    </div>
</div>
@endsection