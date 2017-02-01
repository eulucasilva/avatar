@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
         @section('contentheader_title')
        <div class="pull-left">
            <h2>Cadastrar Projeto</h2>
        </div>
         @endsection  
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('projeto.index') }}"> Voltar</a>
        </div>
    </div>
</div>
@if (count($errors) > 0)
<div class="alert alert-danger"
     <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
{!! Form::open(array('route' => 'projeto.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Titulo:</strong>
            {!! Form::text('titulo', null, array('placeholder' => 'Digite o Titulo do Projeto','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Objetivo Geral:</strong>
            {!! Form::textarea('objetivoGeral', null, array('placeholder' => '','class' => 'form-control', 'size'=> '30x6')) !!}
        </div>
    </div>
   
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Professor Coordenador:</strong>
            {!! Form::select('fk_professor', $professors, null, array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Objetivo Especifico:</strong>
            {!! Form::textarea('objetivoEspec', null, array('placeholder' => '','class' => 'form-control', 'size'=> '30x6')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Resultados Esperados:</strong>
            {!! Form::textarea('resultadosEsperados', null, array('placeholder' => '','class' => 'form-control','size'=> '30x6')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Financiamento:</strong>
            {!! Form::text('financiamento', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tipo de Pesquisa:</strong>
            {!! Form::text('tipoPesquisa', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Fonte de Financiamento:</strong>
            {!! Form::text('fonteFinanciamento', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Grupo de Pesquisa do Projeto:</strong>
            {!! Form::text('grupoPesquisaProjeto', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>
{!! Form::close() !!}
@endsection