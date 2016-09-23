@extends('layouts.app')
 
@section('main-content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
            @section('contentheader_title')
	        <div class="pull-left">
	            <h2> Exibir Curso</h2>
	        </div>
            @endsection 
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('curso.index') }}"> Voltar</a>
	        </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Curso:</strong>
                {{ $curso->nome_curso }}
            </div>
            <div class="form-group">
                <strong>Regime:</strong>
                {{ $curso->regime_curso}}
            </div>                    
            <div class="form-group">
                <strong>Campus:</strong>
                {{ $curso->regimecampus_curso}}
            </div>
            <div class="form-group">
                <strong>Tipo do Curso</strong>
                {{ $curso->tipo_curso}}
            </div>  
            <div class="form-group">
                <strong>Departamento:</strong>
                {{$curso->fk_departamento}}
            </div>
            <div class="form-group">
                <strong>Colegiado:</strong>
                {{$curso->fk_colegiado}}
            </div>
        </div>
	</div>
@endsection