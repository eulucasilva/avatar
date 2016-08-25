@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2> Show Periodo Letivo</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('itemCRUD2.index') }}"> Voltar</a>
	        </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Periodo Letivo:</strong>
                {{ $periodo->periodo_periodoLetivo }}
            </div>
            <div class="form-group">
                <strong>Ano:</strong>
                {{ $periodo->ano_periodoLetivo}}
            </div>
            <div class="form-group">
                <strong>Modalidade:</strong>
                {{ $periodo->modalidade_periodoLetivo}}
            </div>
            <div class="form-group">
                <strong>Inicio:</strong>
                {{$periodo->inicio_periodoLetivo}}
            </div>
            <div class="form-group">
                <strong>Termino:</strong>
                {{$periodo->termino_periodoLetivo}}
            </div>
        </div>
	</div>
@endsection