@extends('layouts.app')

    <script src = "{{ asset('js/jquery-3.1.0.js') }}" type = "text/javascript" ></script>
    <script src = "{{ asset('js/jquery.maskedinput.js') }}" type = "text/javascript" ></script>
    <script src = "{{ asset('js/jquery-ui-1.12.0/jquery-ui.js') }}" type = "text/javascript" ></script>
    <link href="{{ asset('js/jquery-ui-themes-1.12.0/themes/base/jquery-ui.css') }}" rel="stylesheet">

  @section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Criar Novo colegiado</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('colegiado.index') }}"> Voltar</a>
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
	{!! Form::open(array('route' => 'colegiado.store','method'=>'POST')) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome Colegiado:</strong>
                {!! Form::text('nome_colegiado', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sigla Colegiado:</strong>
                {!! Form::text('sigla_colegiado', null, array('placeholder' => '','class' => 'form-control', 'style'=>'height:30px')) !!}

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                 {!! Form::text('email_colegiado', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
            </div>
        </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Campus Colegiado:</strong>
                {!! Form::text('campus_colegiado', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>fk_coordenador:</strong>
                {!! Form::text('fk_coordenador', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
            </div>
        </div>  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>fk_secretario:</strong>
                {!! Form::text('fk_secretario', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
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

