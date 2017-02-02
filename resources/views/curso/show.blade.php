@extends('layouts.app')
 
@section('main-content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	    	@section('contentheader_title')
	        <div class="pull-left">
	            <h2> Vizualizar Projeto</h2>
	        </div>
	        @endsection 
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('projetos.index') }}"> Voltar</a>
	        </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo:</strong>
                {{ $projeto->titulo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Objetivo Geral:</strong>
                {{ $projeto->objetivoGeral }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Professor Coordenador:</strong>
                {{ $projeto->fk_professor_idCoordenador->name }}
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Objetivo Especifico:</strong>
                {{ $projeto->objetivoEspec }}
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Resultados Esperados:</strong>
                {{ $projeto->resultadosEsperados }}
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Financiamento:</strong>
                {{ $projeto->financimento }}
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo de Pesquisa:</strong>
                {{ $projeto->tipoPesquisa }}
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fonte do Financimento:</strong>
                {{ $projeto->fonteFinancimento }}
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Grupo de Pesquisa do Projeto:</strong>
                {{ $projeto->grupoPesquisaProjeto }}
            </div>
        </div>
	</div>
@endsection