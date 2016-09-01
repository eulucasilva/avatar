@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Administração do coordenacao</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('gestao_coordenacao-create')
	            <a class="btn btn-success" href="{{ route('coordenacao.create') }}"> Criar Novo coordenacao</a>
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
			<th>Tipo</th>
			<th>Portaria de nomeação</th>
			<th>Início do mandato</th>
			<th>Término do mandato</th>
			<th>Professor</th>
			<th>fk_usuário</th>
			<th width="280px">Ação</th>
		</tr>
	@foreach ($coordenacaos as $key => $coordenacao)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $coordenacao->tipo_coordenacao }}</td>
		<td>{{ $coordenacao->portaria_nomeacao_coordenacao }}</td>
		<td>{{ $coordenacao->inicio_mandato_coordenacao }}</td>
		<td>{{ $coordenacao->termino_mandato_coordenacao }}</td>
		<td>{{ $coordenacao->professor->nome_professor }}</td>
		<td>{{ $coordenacao->fk_usuario }}</td>
		<td>
			@permission('gestao_coordenacao-create')
			<a class="btn btn-info" href="{{ route('coordenacao.show',$coordenacao->id) }}">Visualizar</a>
			@endpermission
			@permission('gestao_coordenacao-edit')
			<a class="btn btn-primary" href="{{ route('coordenacao.edit',$coordenacao->id) }}">Editar</a>
			@endpermission
			@permission('gestao_coordenacao-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['coordenacao.destroy', $coordenacao->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $coordenacaos->render() !!}
@endsection