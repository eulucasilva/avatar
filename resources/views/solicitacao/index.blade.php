@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Solicitação de Turmas</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('gestao_solicitacao-create')
	            <a class="btn btn-success" href="{{ route('solicitacao.create') }}"> Solicitar turma</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
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
				
				<td>{{ ++$i }}</td>
				<td>{{ $solicitacao->colegiado->sigla_colegiado }}</td>
				<td>{{ $solicitacao->departamento->sigla }}</td>
				<td>{{ $solicitacao->periodo_letivo->periodo_periodoLetivo }}</td>

				<td>{{ $solicitacao->curso->nome_curso }}</td>
				<td>{{ $solicitacao->area->nome}}</td>
				<td>{{ $solicitacao->disciplina->nome_disciplina }}</td>
				<td>{{ $solicitacao->status_solicitacao }}</td>
				<td>{{ $solicitacao->data_solicitacao }}</td>
				<td>{{ $solicitacao->data_resultado }}</td>

				<td>
					@permission('gestao_solicitacao-create')
						<a class="btn btn-info" href="{{ route('solicitacao.show',$solicitacao->id) }}">Visualizar</a>
					@endpermission
					
					@permission('gestao_solicitacao-edit')
						<a class="btn btn-primary" href="{{ route('solicitacao.edit',$solicitacao->id) }}">Editar</a>
					@endpermission
					
					@permission('gestao_solicitacao-delete')
						{!! Form::open(['method' => 'DELETE','route' => ['solicitacao.destroy', $solicitacao->id],'style'=>'display:inline']) !!}
				        {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
				    	{!! Form::close() !!}
			    	@endpermission
				</td>
			</tr>
		@endforeach
	</table>
	{!! $solicitacaos->render() !!}
@endsection