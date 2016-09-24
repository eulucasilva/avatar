@extends('layouts.app')

 <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet" >
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.js"></script>
 
@section('main-content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Solicitações Aprovadas</h2>
	        </div>
	        
	    </div>
	</div>
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif


	
		<div class="row">
			<table class="table table-bordered">
		        <tr>   
		       		<th>No</th>        
		            <th>Colegiado</th>
		            <th>Departamento</th>
		            <th>Período Letivo</th>
		            <th>Curso</th>
		            <th>Área</th>
		            <th>Disciplina</th>
		            <th>Status</th>

		            <th>Data da Solicitação</th>
	 	            <th>Data do Resultado</th>
		            

		            <th width="280px">Action</th>
		        </tr>
		        @foreach ($solicitacaos as $key => $solicitacao)
			        <tr>
			        	<td>{{ $solicitacao-> id }}</td>
			            <td>{{ $solicitacao -> colegiado->sigla_colegiado }}</td>
			            <td>{{ $solicitacao -> departamento->sigla }}</td>
			            <td>{{ $solicitacao -> periodo_letivo->periodo_periodoLetivo }}</td>

			            <td>{{ $solicitacao->curso->nome_curso }}</td>
			            <td>{{ $solicitacao->area->nome_area }}</td>
			            <td>{{ $solicitacao->disciplina->nome_disciplina }}</td>
			            <td>{{ $solicitacao->status_solicitacao }}</td>
			            <td>{{ $solicitacao->data_solicitacao }}</td>
			            <td>{{ $solicitacao->data_resultado }}</td>

			            <td>   							

			                @permission('gestao_turma-create')
			                	<a class="btn btn-primary" href="{{ route('turma.gerar', $solicitacao->id) }}">Gerar Turmas</a>
			                @endpermission               
			               
			            </td>
			        </tr>
		        @endforeach
	   	 	</table>	     
	        
		</div>

	<div class="pull-left">
        <h2>Turmas Existentes</h2>
    </div>

	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Número da Solicitação</th>
			<th>Professor</th>
			<th>CH do Professor</th>
			<th>Tipo de Turma</th>
			<th>Carga Horária Semestral</th>
			<th>Carga Horária Semanal</th> 
			<th>Local</th>
			<th width="280px">Ação</th>
		</tr>
		@foreach ($turmas as $key => $turma)
		<tr>
				<td>{{ $turma-> id }}</td>
				<td>{{ $turma-> fk_solicitacao }}</td>
	            <td>{!! Form::select('fk_professor', $professors, null, array('placeholder' => 'Selecionar','class' => 'form-control')) !!}</td>
	            <td></td>
	            <td>{{ $turma-> tipo_turma }}</td>
	            <td>{{ $turma-> ch_semestral_turma }}</td>
	            <td>{{ $turma-> ch_semanal_turma }}</td>
	            <td>{{ $turma-> local_turma }}</td>

			<td>

				@permission('gestao_turma-create')
					<a class="btn btn-primary" href="{{ route('turma.edit', $turma->id) }}">Editar Turma</a>
				@endpermission
			
				@permission('gestao_turma-delete')
					{!! Form::open(['method' => 'DELETE','route' => ['turma.destroy', $turma->id],'style'=>'display:inline']) !!}
		            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
		        	{!! Form::close() !!}
	        	@endpermission

				<div class="checkbox">
	                <label>
	                    <input type="checkbox" value="{{$turma->id}}">Confirmar
	                </label>
	            </div>

			</td>
		</tr>
		@endforeach
	</table>
	{!! $turmas->render() !!}
@endsection