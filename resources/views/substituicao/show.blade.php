@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2> Exibir Substituição</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('substituicao.index') }}"> Voltar</a>
	        </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data inicial:</strong>
                {{$substituicao->inicio_substituicao}}
            </div>
            <div class="form-group">
                <strong>Data Final:</strong>
                {{$substituicao->fim_substituicao}}
            </div>
            <div class="form-group">
                <strong>Motivo da substituicao:</strong>
                {{ $substituicao-> motivo_substituicao}}
            </div>  
            <div class="form-group">
                <strong>Portaria:</strong>
                {{$substituicao->portaria_substituicao}}
            </div>
             <div class="form-group">
                <strong>Nº COP:</strong>
                {{$substituicao->numcop_substituicao}}
            </div>
             <div class="form-group">
                <strong>Professor Substituído:</strong>
                {{$substituicao->fk_professor_substituido}}
            </div>
            <div class="form-group">
                <strong>Professor Substituto:</strong>
                {{$substituicao->fk_professor_substituto}}
            </div>
        </div>
	</div>
@endsection