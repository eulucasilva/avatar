@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2> Atividades Administrativas Acadêmicas</h2>
	        </div>
	       </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo de Participação em Atividade Administrativa Acadêmica:</strong>
                {{ $atividade_administrativa_acd->tipo_atividade_administrativa_acd }}
            </div>
            <div class="form-group">
                <strong>Carga Horária:</strong>
                {{ $atividade_administrativa_acd->ch_participacao_atividade_administrativa_acd}}
            </div>
            <div class="form-group">
                <strong>Professor:</strong>
                {{ $atividade_administrativa_acd->professor->nome_professor}}
            </div>
            <div class="form-group">
                <strong>Período Letivo:</strong>
                {{$atividade_administrativa_acd->periodo_letivo->periodo_periodoLetivo}}
            </div>
           
        </div>
	</div>
@endsection