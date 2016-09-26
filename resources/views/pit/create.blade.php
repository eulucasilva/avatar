@extends('layouts.app')

    <script src = "{{ asset('js/jquery-3.1.0.js') }}" type = "text/javascript" ></script>
    <script src = "{{ asset('js/jquery.maskedinput.js') }}" type = "text/javascript" ></script>
    <script src = "{{ asset('js/jquery-ui-1.12.0/jquery-ui.js') }}" type = "text/javascript" ></script>
    <link href="{{ asset('js/jquery-ui-themes-1.12.0/themes/base/jquery-ui.css') }}" rel="stylesheet">

  @section('main-content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
             @section('contentheader_title')
	        <div class="pull-left">
	            <h2>Criar Novo Pit</h2>
	        </div>
            @endsection 
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('pit.index') }}"> Voltar</a>
	        </div>
	    </div>
	</div>
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	{!! Form::open(array('route' => 'pit.store','method'=>'POST')) !!}

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Professor:</strong>
                {!! Form::select('fk_professor', $professores, null, array('class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Periodo Letivo:</strong>
                {!! Form::select('fk_periodoLetivo',  $periodoLetivo, null, array('class' => 'form-control'))!!}
            </div>
        </div>
        <h1> Atividades de Ensino</h1>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Aulas de graduação (semanal): </strong>
                
            </div>
        </div>
        
        
        
        
        
        
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Salvar</button>
        </div>
</div>
</div>
</div>
	{!! Form::close() !!}
@endsection

