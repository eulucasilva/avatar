@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
         @section('contentheader_title')
        <div class="pull-left">
            <h2>Cadastrar Aluno</h2>
        </div>
         @endsection  
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('aluno.index') }}"> Voltar</a>
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
{!! Form::open(array('route' => 'aluno.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome:</strong>
            {!! Form::text('nome', null, array('placeholder' => 'Digite o Nome do Aluno','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Telefone:</strong>
            {!! Form::text('telefone', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Matricula:</strong>
            {!! Form::text('matricula', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Bolsista:</strong>
            <br>
            {!! Form::radio('bolsista', 'Não', array('class' => 'form-control')) !!}<p>Não</p>
            {!! Form::radio('bolsista', 'Sim') !!}<p>Sim</p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Data de Nascimento:</strong>
            {!! Form::date('data_nasc', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>
{!! Form::close() !!}
@endsection