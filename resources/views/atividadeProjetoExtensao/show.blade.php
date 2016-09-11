@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2> Atividades Projeto de Extensão</h2>
	        </div>
	       </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo de Atividade de Projeto de Extensão:</strong>
                {{ $atividade_projeto_extensao->tipo_part_prof_atividade_projeto_extensao }}
            </div>
            <div class="form-group">
                <strong>Carga Horária:</strong>
                {{ $atividade_projeto_extensao->ch_total_atividade_projeto_extensao}}
            </div>
            <div class="form-group">
                <strong>Professor:</strong>
                {{ $atividade_projeto_extensao->professor->nome_professor}}
            </div>
            <div class="form-group">
                <strong>Período Letivo:</strong>
                {{$atividade_projeto_extensao->periodo_letivo->periodo_periodoLetivo}}
            </div>
           
        </div>
	</div>
@endsection