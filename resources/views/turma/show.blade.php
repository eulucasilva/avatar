@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2> Turmas</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('turma.index') }}"> Voltar</a>
	        </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Professor:</strong>
               
            </div>
            <div class="form-group">
                <strong>Tipo Turma:</strong>
               
            </div>
           <div class="form-group">
                <strong>Carga Horária Semestral:</strong>
          
            </div>
            
            <div class="form-group">
                <strong>Carga Horária Semanal:</strong>
               
            </div>

            <div class="form-group">
                <strong>Local:</strong>
               
            </div>
        </div>
	</div>
@endsection