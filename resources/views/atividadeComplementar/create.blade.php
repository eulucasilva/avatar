@extends('layouts.app')


@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
       @section('contentheader_title') 
        <div class="pull-left">
            <h2>Criar Nova Atividade Complementar</h2>
        </div>
       @endsection  
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('atividadeComplementar.index') }}"> Voltar</a>
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
{!! Form::open(array('route' => 'atividadeComplementar.store','method'=>'POST')) !!}
<div class="row">
   
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Carga Horária:</strong>
            {!! Form::text('ch_total_atividade_complementar', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
        </div>
    </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Professor:</strong>
            {!! Form::select('fk_professor', $professores, null, array('class' => 'form-control')) !!}
           
        </div>
    </div>
    
   
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Período Letivo</strong>
            {!! Form::select('fk_periodo_letivo', $periodo_letivos, null, array('class' => 'form-control')) !!}
           
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>
{!! Form::close() !!}


@endsection

