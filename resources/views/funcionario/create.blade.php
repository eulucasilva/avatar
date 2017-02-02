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
            <h2>Cadastrar funcionario</h2>
        </div>
        @endsection 
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('funcionario.index') }}"> Voltar</a>
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
{!! Form::open(array('route' => 'funcionario.store','method'=>'POST')) !!}
<br> 
<div class="box box-primary">
    <div class="row">
        <div class="box-body">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    {!! Form::text('nome_funcionario', null, array('placeholder' => 'Digite o nome do funcionário','class' => 'form-control','style'=>'height:30px')) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Telefone:</strong>
                    {!! Form::text('telefone_funcionario', null, array('placeholder' => 'Digite o telefone','class' => 'form-control','style'=>'height:30px')) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data de nascimento:</strong>
                    {!! Form::text('datanasc_funcionario', null, array('placeholder' => 'Digite a data de nascimento','class' => 'form-control','style'=>'height:30px')) !!}
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data de admissão:</strong>
                    {!! Form::text('dataadmissao_funcionario', null, array('placeholder' => 'Digite oa data da admissão','class' => 'form-control','style'=>'height:30px')) !!}
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Grau de instrução:</strong>
                    {!! Form::text('grauinstrucao_funcionario', null, array('placeholder' => 'Digite o grau de instrução','class' => 'form-control','style'=>'height:30px')) !!}
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Formação:</strong>
                    {!! Form::text('formacao_funcionario', null, array('placeholder' => 'Selecione a formação','class' => 'form-control','style'=>'height:30px')) !!}
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Função:</strong>
                    {!! Form::text('funcao_funcionario', null, array('placeholder' => 'Selecione a função','class' => 'form-control','style'=>'height:30px')) !!}
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Horário de início:</strong>
                    {!! Form::text('horarioinicio_funcionario', null, array('placeholder' => 'Selecione o horário de início','class' => 'form-control','style'=>'height:30px')) !!}
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Horário de término:</strong>
                    {!! Form::text('horariofim_funcionario', null, array('placeholder' => 'Selecione o horário do término','class' => 'form-control','style'=>'height:30px')) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
@endsection

