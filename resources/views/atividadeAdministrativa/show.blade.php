@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2> Atividade Administrativa</h2>
	        </div>
	       </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo de Atividade Administrativa:</strong>
                {{ $atividade_administrativa->tipo_atividade_administrativa }}
            </div>
            <div class="form-group">
                <strong>Carga Horária:</strong>
                {{ $atividade_administrativa->ch_atividade_administrativa}}
            </div>
            <div class="form-group">
                <strong>Professor:</strong>
                {{ $atividade_administrativa->professor->nome_professor}}
            </div>
            <div class="form-group">
                <strong>Período Letivo:</strong>
                {{$atividade_administrativa->periodo_letivo->periodo_periodoLetivo}}
            </div>
           
        </div>
	</div>
@endsection