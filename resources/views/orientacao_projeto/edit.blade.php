
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Orientação de Projeto</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('orientacao_projeto.index') }}">Voltar</a>
        </div>
    </div>
</div>
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
{!! Form::model($orientacao_projeto, ['method' => 'PATCH','route' => ['orientacao_projeto.update', $orientacao_projeto->id]]) !!}
<div class="row">


       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Professor:</strong>
                {!! Form::select('fk_professor', $professores, null, array('class' => 'form-control')) !!}
            </div>
        </div>
        
        
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Aluno:</strong>
                {!! Form::select('fk_aluno', $alunos, null, array('class' => 'form-control')) !!}
            </div>
        </div>
        
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Periodo Letivo:</strong>
                {!! Form::select('fk_periodoLetivo',  $periodoLetivo, null, array('class' => 'form-control'))!!}
            </div>
        </div>
        
     
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Projeto:</strong>
               {!! Form::select('fk_projeto',  $projetos, null, array('class' => 'form-control'))!!}
                
            </div>
        </div>    


   

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>
{!! Form::close() !!}
@endsection