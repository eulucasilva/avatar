@extends('layouts.app')
 
@section('main-content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2> Solicitação</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('solicitacao.index') }}"> Voltar</a>
	        </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Colegiado Solicitante:</strong>
                {{ $solicitacaos->colegiado->sigla_colegiado }}
            </div>
            <div class="form-group">
                <strong>Departamento:</strong>
                {{ $solicitacaos->departamento->sigla}}
            </div>
            <div class="form-group">
                <strong>Status da Solicitação:</strong>
                {{ $solicitacaos->status_solicitacao}}
            </div>  
            <div class="form-group">
                <strong>Data da Solicitação:</strong>
                {{$solicitacaos->data_solicitacao}}
            </div>
            <div class="form-group">
                <strong>Data do Resultado:</strong>
                {{$solicitacaos->data_resultado}}
            </div>

            <div class="form-group">
                <strong>Período Letivo:</strong>
                {{$solicitacaos->periodo_letivo->periodo_periodoLetivo}}
            </div>
            <div class="form-group">
                <strong>Observações do Colegiado:</strong>
                {{ $solicitacaos->observacoes_colegiado}}
            </div>

             <div class="form-group">
                <strong>Observações do Departamento:</strong>
                {{ $solicitacaos->observacoes_departamento}}
            </div>


        </div>
	</div>
@endsection