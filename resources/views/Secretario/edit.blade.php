@extends('layouts.app')

    <script src = "{{ asset('js/jquery-3.1.0.js') }}" type = "text/javascript" ></script>
    <script src = "{{ asset('js/jquery.maskedinput.js') }}" type = "text/javascript" ></script>
    <script src = "{{ asset('js/jquery-ui-1.12.0/jquery-ui.js') }}" type = "text/javascript" ></script>
    <link href="{{ asset('js/jquery-ui-themes-1.12.0/themes/base/jquery-ui.css') }}" rel="stylesheet">

  @section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Editar Secretario</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('secretario.index') }}"> Voltar</a>
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
	{!! Form::model($secretario, ['method' => 'PATCH','route' => ['secretario.update', $secretario->id]]) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {!! Form::text('nome_secretario', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Matricula:</strong>
                {!! Form::text('matricula_secretario', null, array('placeholder' => '','class' => 'form-control', 'style'=>'height:30px')) !!}

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Inicio Mandato:</strong>
                 {!! Form::text('inicio_mandato_secretario', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px' , 'id' => 'dataInicio')) !!}
            </div>
        </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Termino Mandato:</strong>
                {!! Form::text('termino_mandato_secretario', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px' , 'id' => 'dataFim')) !!}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefone Secretario:</strong>
                {!! Form::text('telefone_secretario', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
            </div>
        </div>  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Endereco Secretario:</strong>
                {!! Form::text('endereco_secretario', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
            </div>
        </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>fk_usuario:</strong>
                {!! Form::text('fk_usuario', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
            </div>
        </div>
     
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Submit</button>
        </div>
	</div>
	{!! Form::close() !!}

     <script>
       jQuery(function($){
               $("#campoPeriodo").mask("9999.9");
       });

        jQuery(function($){
               $("#campoAno").mask("9999");
       });


      $(function($){
        $("#dataInicio").datepicker({

        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']

         });
       });

       $(function($){
         $("#dataFim").datepicker({

        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
          
           });
       });

     </script> 
@endsection

