@extends('layouts.app')

    <script src = "{{ asset('js/jquery-3.1.0.js') }}" type = "text/javascript" ></script>
    <script src = "{{ asset('js/jquery.maskedinput.js') }}" type = "text/javascript" ></script>
    <script src = "{{ asset('js/jquery-ui-1.12.0/jquery-ui.js') }}" type = "text/javascript" ></script>
    <link href="{{ asset('js/jquery-ui-themes-1.12.0/themes/base/jquery-ui.css') }}" rel="stylesheet">

  @section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Solicitar turma</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('solicitacao.index') }}"> Voltar</a>
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
	{!! Form::open(array('route' => 'solicitacao.store','method'=>'POST')) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Colegiado</strong>
                {!! Form::select('fk_colegiado', $colegiados, null, array('class' => 'form-control')) !!}
            </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Departamento</strong>
                {!! Form::select('fk_departamento', $departamentos, 0, array('class' => 'form-control', 'id' => 'departamento')) !!}

              

            </div>
    </div>

  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Área</strong>
                {!! Form::select('fk_area', $areas, null, array('class' => 'form-control', 'id' => 'area')) !!}
            </div>
        </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Período Letivo</strong>
                {!! Form::select('fk_periodo_letivo', $periodo_letivos, null, array('class' => 'form-control')) !!}
            </div>
    </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Curso</strong>
                {!! Form::select('fk_curso', $cursos, null, array('class' => 'form-control')) !!}
            </div>
        </div>
      
   <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Disciplina</strong>
            {!! Form::select('fk_disciplina', $disciplinas, null, array('class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Status:</strong>
            {!!Form::select('status_solicitacao', array('Pendente' => 'Pendente'),  null, array('class' => 'form-control'))!!}
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Data da solicitação</strong>
            {!! Form::text('data_solicitacao', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px' , 'id' => 'dataInicio')) !!}
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Quantidade de Turmas Práticas:</strong>
            {!! Form::number('quant_pratica_solicitada', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
        </div>
    </div>

 <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Quantidade de Alunos Previstos pra Turma Prática:</strong>
            {!! Form::number('quant_aluno_pratica', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Quantidade de Turmas Teóricas:</strong>
            {!! Form::number('quant_teorica_solicitada', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
        </div>
    </div>

 <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Quantidade de Alunos Previstos pra Turma Teórica:</strong>
            {!! Form::number('quant_aluno_teorica', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>status da solicitacao:</strong>
            {!! Form::number('status_solicitacao', 0, array('placeholder' => '','class' => 'form-control','style'=>'height:30px','disabled'=>'disabled')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Quantidade de Turmas de Estágio:</strong>
            {!! Form::number('quant_estagio_solicitada', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
        </div>
    </div>

 <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Quantidade de Alunos Previstos pra Turma de Estágio:</strong>
            {!! Form::number('quant_aluno_estagio', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
        </div>
    </div>



 <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Creditação da Turma Prática</strong>
            {!! Form::number('creditacao_pratica', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Creditação da Turmas de Estágio:</strong>
            {!! Form::number('creditacao_estagio', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
        </div>
    </div>

 <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Creditação da Turma Teórica</strong>
            {!! Form::number('creditacao_teorica', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
        </div>
    </div>  


 <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Descrição da Solicitação:</strong>
            {!! Form::textarea('descricao_solicitacao', null, array('placeholder' => 'Informe a descrição da Solicitação','class' => 'form-control','style'=>'height:30px')) !!}
        </div>
    </div>



     
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Salvar</button>
        </div>
	</div>
	{!! Form::close() !!}

     <script>
       
     $(document).ready(function()
     {
          $('#departamento').change(function()
          {
              $.get("{{ url('dropdown')}}",
              { 
                  option: $(this).val() 
              },
              function(data) 
              {
                  $('#area').empty();
                  $.each(data, function(key, element) 
                  {
                    $('#area').append("<option value='" + key + "'>" + element + "</option>");
                  });
              });
          });
      });


      $(function($)
      {
        $("#dataInicio").datepicker
        (
            {
                  dateFormat: 'dd/mm/yy',
                  dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
                  dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                  dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                  monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                  monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
            }
        );
     });
     $(function($)
     {
       $("#dataFim").datepicker
       (
          {
              dateFormat: 'dd/mm/yy',
              dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
              dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
              dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
              monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
              monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']          
          }
        );
     });
     </script> 
@endsection