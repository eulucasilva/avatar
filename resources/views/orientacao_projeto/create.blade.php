@extends('layouts.app')

    <script src = "{{ asset('js/jquery-3.1.0.js') }}" type = "text/javascript" ></script>
    <script src = "{{ asset('js/jquery.maskedinput.js') }}" type = "text/javascript" ></script>
    <script src = "{{ asset('js/jquery-ui-1.12.0/jquery-ui.js') }}" type = "text/javascript" ></script>
    <link href="{{ asset('js/jquery-ui-themes-1.12.0/themes/base/jquery-ui.css') }}" rel="stylesheet">

  @section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Criar Nova Orientação</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('orientacao_projeto.index') }}"> Voltar</a>
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
	{!! Form::open(array('route' => 'orientacao_projeto.store','method'=>'POST')) !!}

        
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Professor:</strong>
                {!! Form::select('fk_professor', $professores, null, array('class' => 'form-control')) !!}
            </div>
        </div>
        
        
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Aluno:</strong>
                {!! Form::select('fk_aluno', $alunos, null, array('class' => 'form-control')) !!}
            </div>
        </div>
        
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Periodo Letivo:</strong>
                {!! Form::select('fk_periodoLetivo',  $periodoLetivo, null, array('class' => 'form-control'))!!}
            </div>
        </div>
        
     
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo de Orientação:</strong>
               {!! Form::select('fk_projeto',  $projetos, null, array('class' => 'form-control'))!!}
                
            </div>
        </div>                    
   

        </div>   
                
     
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Salvar</button>
        </div>

	{!! Form::close() !!}
@endsection

