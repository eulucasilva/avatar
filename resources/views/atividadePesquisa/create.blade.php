@extends('layouts.app')

<script src = "{{ asset('js/jquery-3.1.0.js') }}" type = "text/javascript" ></script>
<script src = "{{ asset('js/jquery.maskedinput.js') }}" type = "text/javascript" ></script>
<script src = "{{ asset('js/jquery-ui-1.12.0/jquery-ui.js') }}" type = "text/javascript" ></script>
<link href="{{ asset('js/jquery-ui-themes-1.12.0/themes/base/jquery-ui.css') }}" rel="stylesheet">

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
       @section('contentheader_title') 
        <div class="pull-left">
            <h2>Criar Nova Atividade de Pesquisa</h2>
        </div>
        @endsection   
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('atividadePesquisa.index') }}"> Voltar</a>
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
{!! Form::open(array('route' => 'atividadePesquisa.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tipo de Atividade:</strong>
            {!! Form::text('tipo_part_prof_atividade_pesquisa', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Carga Horária:</strong>
            {!! Form::text('ch_total_atividade_pesquisa', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
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

