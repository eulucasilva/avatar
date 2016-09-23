@extends('layouts.app')
 
@section('main-content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
             @section('contentheader_title')
	        <div class="pull-left">
	            <h2> Exibir Projeto</h2>
	        </div>
             @endsection 
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('projeto.index') }}"> Voltar</a>
	        </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome Projeto:</strong>
                {{ $projeto->nome_projeto }}
            </div>
            <div class="form-group">
                <strong>Tipo Projeto:</strong>
                {{ $projeto->tipo_projeto}}
            </div>
            <div class="form-group">
                <strong>Tipo Participação Projeto:</strong>
                {{ $projeto->tipo_participacao_projeto}}
            </div>  
            <div class="form-group">
                <strong>Professor:</strong>
                {{$projeto->fk_professor}}
            </div>
            <div class="form-group">
                <strong>Período Letivo:</strong>
                {{$projeto->fk_periodo_letivo}}
            </div>
        </div>
	</div>
@endsection