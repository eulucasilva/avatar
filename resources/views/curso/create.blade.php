@extends('layouts.app')

    <script src = "{{ asset('js/jquery-3.1.0.js') }}" type = "text/javascript" ></script>
    <script src = "{{ asset('js/jquery.maskedinput.js') }}" type = "text/javascript" ></script>
    <script src = "{{ asset('js/jquery-ui-1.12.0/jquery-ui.js') }}" type = "text/javascript" ></script>
    <link href="{{ asset('js/jquery-ui-themes-1.12.0/themes/base/jquery-ui.css') }}" rel="stylesheet">

  @section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Criar Novo Curso</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('curso.index') }}"> Voltar</a>
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
	{!! Form::open(array('route' => 'curso.store','method'=>'POST')) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nome do Curso:</strong>
                        {!! Form::text('nome_curso', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Regime</strong>
                        {!! Form::text('regime_curso', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Campus:</strong>
                        {!!Form::select('campus_curso', array('JQE' => 'Jequié', 'VCA' => 'Vitória da Conquista','ITP' => 'Itapetinga'))!!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tipo</strong>
                        {!! Form::text('tipo_curso', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Departamento:</strong>
                         {!! Form::select('fk_departamento', $departamentos, null, array('class' => 'form-control')) !!}
                     </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Colegiado</strong>
                         {!! Form::select('fk_colegiado', $colegiados, null, array('class' => 'form-control')) !!}
                     </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
	</div>
	{!! Form::close() !!}
@endsection

