@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Administração do Professor</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('gestao_professor-create')
	            <a class="btn btn-success" href="{{ route('professor.create') }}"> Criar Novo Professor</a>
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
			<th>Nome</th>
			<th>Matricula</th>
			<th>Situação</th>
			<th>Regime Trabalho</th>
			<th>Carga Horária</th>
			<th>Inicio Contrato</th>
			<th>Termino Contrato</th>
			<th>Contrato Professor</th>
			<th>Classe</th>
			<th>Titulo</th>
			<th>Email</th>
			<th>Telefone</th>
			<th>Endereço</th>
			<th>Usuario</th>
			<th width="280px">Ação</th>
		</tr>
	@foreach ($professores as $key => $professor)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $professor->nome_professor }}</td>
		<td>{{ $professor->matricula_professor }}</td>
		<td>{{ $professor->situacao_professor }}</td>
		<td>{{ $professor->regime_trabalho_professor }}</td>
		<td>{{ $professor->ch_professor }}</td>
		<td>{{ $professor->inicio_contrato_professor }}</td>
		<td>{{ $professor->termino_contrato_professor }}</td>
		<td>{{ $professor->contrato_professor }}</td>
		<td>{{ $professor->classe_professor }}</td>
		<td>{{ $professor->titulo_professor }}</td>
		<td>{{ $professor->email_professor }}</td>
		<td>{{ $professor->telefone_professor }}</td>
		<td>{{ $professor->endereco_professor }}</td>
		<td>{{ $professor->fk_usuario }}</td>
		<td>
			@permission('gestao_professor-create')
			<a class="btn btn-info" href="{{ route('professor.show',$professor->id) }}">Visualizar</a>
			@endpermission
			@permission('gestao_professor-edit')
			<a class="btn btn-primary" href="{{ route('professor.edit',$professor->id) }}">Editar</a>
			@endpermission
			@permission('gestao_professor-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['professor.destroy', $professor->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $professores->render() !!}
@endsection