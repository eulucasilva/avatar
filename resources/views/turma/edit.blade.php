@extends('layouts.app')

    <script src = "{{ asset('js/jquery-3.1.0.js') }}" type = "text/javascript" ></script>
    <script src = "{{ asset('js/jquery.maskedinput.js') }}" type = "text/javascript" ></script>
    <script src = "{{ asset('js/jquery-ui-1.12.0/jquery-ui.js') }}" type = "text/javascript" ></script>
    <link href="{{ asset('js/jquery-ui-themes-1.12.0/themes/base/jquery-ui.css') }}" rel="stylesheet">

  @section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Editar Turma</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('turma.index') }}"> Voltar</a>
	        </div>
	    </div>
	</div>
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> Existe algum problema com os dados informados.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	{!! Form::model($turmas, ['method' => 'PATCH','route' => ['turma.update', $turmas->id]]) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Carga Horária Semestral:</strong>
                {!! Form::text('ch_semestral_turma', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
            
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Carga Horária Semanal:</strong>
                {!! Form::text('ch_semanal_turma', null, array('placeholder' => '','class' => 'form-control', 'style'=>'height:30px')) !!}

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                  <strong>Professor</strong>
                {!! Form::select('fk_professor', $professors, null, array('class' => 'form-control')) !!}
           
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Local:</strong>
                 {!! Form::text('local_turma', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
            </div>
        </div>
     
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Salvar</button>
        </div>
	</div>
	{!! Form::close() !!}

      
@endsection

