@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2> Atividades de Ensino</h2>
	        </div>
	       </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
                <strong>Carga Horária:</strong>
                {{ $atividade_ensinos->ch_atividade_ensino}}
            </div>
            <div class="form-group">
                <strong>Professor:</strong>
                {{ $atividade_ensinos->professor->nome_professor}}
            </div>
            <div class="form-group">
                <strong>Período Letivo:</strong>
                {{$atividade_ensinos->periodo_letivo->periodo_periodoLetivo}}
            </div>
           
        </div>
	</div>
@endsection