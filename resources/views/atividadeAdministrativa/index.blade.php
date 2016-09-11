@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Atividade Administrativa</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('gestao_atividade_administrativa-create')
	            <a class="btn btn-success" href="{{ route('atividadeAdministrativa.create') }}"> Criar Nova Atividade Administrativa</a>
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
			<th>Tipo de Atividade</th>
			<th>Professor</th>
			<th>Período Letivo</th>
			<th>Carga Horária</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($atividade_administrativas as $key => $atividade_administrativa)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $atividade_administrativa->tipo_atividade_administrativa }}</td>
		<td>{{ $atividade_administrativa->professor->nome_professor }}</td>
		<td>{{ $atividade_administrativa->periodo_letivo->periodo_periodoLetivo }}</td>
		<td>{{ $atividade_administrativa->ch_atividade_administrativa }}</td>
		<td>
			@permission('gestao_atividade_administrativa-create')
			<a class="btn btn-info" href="{{ route('atividadeAdministrativa.show',$atividade_administrativa->id) }}">Visualizar</a>
			@endpermission
			@permission('gestao_atividade_administrativa-edit')
			<a class="btn btn-primary" href="{{ route('atividadeAdministrativa.edit',$atividade_administrativa->id) }}">Editar</a>
			@endpermission
			@permission('gestao_atividade_administrativa-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['atividadeAdministrativa.destroy', $atividade_administrativa->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $atividade_administrativas->render() !!}
@endsection