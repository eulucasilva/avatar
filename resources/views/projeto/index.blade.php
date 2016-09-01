@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Administração de Projeto</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('gestao_projeto-create')
	            <a class="btn btn-success" href="{{ route('projeto.create') }}"> Criar Novo Projeto</a>
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
			<th>Nome Projeto</th>
			<th>Tipo do Projeto</th>
			<th>Tipo da Participação do Projeto</th>
			<th>Professor</th>
			<th>Período Letivo</th>
			<th width="280px">Ação</th>
		</tr>
	@foreach ($projetos as $key => $projeto)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $projeto->nome_projeto }}</td>
		<td>{{ $projeto->tipo_projeto}}</td>
		<td>{{ $projeto->tipo_participacao_projeto}}</td>
		<td>{{ $projeto->fk_professor}}</td>
		<td>{{ $projeto->fk_periodo_letivo}}</td>
		<td>
			@permission('gestao_projeto-create')
			<a class="btn btn-info" href="{{ route('projeto.show',$projeto->id) }}">Visualizar</a>
			@endpermission
			@permission('gestao_projeto-edit')
			<a class="btn btn-primary" href="{{ route('projeto.edit',$projeto->id) }}">Editar</a>
			@endpermission
			@permission('gestao_projeto-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['projeto.destroy', $projeto->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $projetos->render() !!}
@endsection