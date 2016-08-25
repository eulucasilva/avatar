@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Administração do colegiado</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('gestao_colegiado-create')
	            <a class="btn btn-success" href="{{ route('colegiado.create') }}"> Criar Novo colegiado</a>
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
			<th>nome_colegiado</th>
			<th>sigla_colegiado</th>
			<th>email_colegiado</th>
			<th>campus_colegiado</th>
			<th>fk_coordenador</th>
			<th>fk_secretario</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($colegiados as $key => $colegiado)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $colegiado->nome_colegiado }}</td>
		<td>{{ $colegiado->sigla_colegiado }}</td>
		<td>{{ $colegiado->email_colegiado }}</td>
		<td>{{ $colegiado->campus_colegiado }}</td>
		<td>{{ $colegiado->fk_coordenador }}</td>
		<td>{{ $colegiado->fk_secretario }}</td>
		<td>
			@permission('gestao_colegiado-create')
			<a class="btn btn-info" href="{{ route('colegiado.show',$colegiado->id) }}">Visualizar</a>
			@endpermission
			@permission('gestao_colegiado-edit')
			<a class="btn btn-primary" href="{{ route('colegiado.edit',$colegiado->id) }}">Editar</a>
			@endpermission
			@permission('gestao_colegiado-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['colegiado.destroy', $colegiado->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $colegiados->render() !!}
@endsection