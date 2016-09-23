
@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
         @section('contentheader_title')
        <div class="pull-left">
            <h2>Editar Orientação</h2>
        </div>
         @endsection 
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('orientacao.index') }}">Voltar</a>
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
{!! Form::model($orientacao, ['method' => 'PATCH','route' => ['orientacao.update', $orientacao->id]]) !!}
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
            {!! Form::select('fk_alunos', $alunos, null, array('class' => 'form-control')) !!}
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
            <strong>Tipo de Orientação:</strong>
            {!!Form::select('tipo_orientacao', array('Orientador(a)' => 'Orientador(a)', 'Co-orientador(a)' => 'Co-orientador(a)'), null, array('class' => 'form-control'))!!}

        </div>
    </div>                    

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tipo Participação Projeto:</strong>
            {!!Form::select('nivel_orientacao', array('Monitoria' => 'Monitoria', 'TCC' => 'TCC', 'Mestrado' => 'Mestrado'), null, array('class' => 'form-control'))!!}
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Carga Horária:</strong>
            {!!Form::select('ch_orientacao', array('1' => '1', '2' => '2'), null, array('class' => 'form-control'))!!}

        </div>
    </div>   


    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>
{!! Form::close() !!}
@endsection