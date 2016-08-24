@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Administração do secretario</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('gestao_secretario-create')
	            <a class="btn btn-success" href="{{ route('secretario.create') }}"> Criar Novo secretario</a>
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
			<th>nome_secretario</th>
			<th>matricula_secretario</th>
			<th>inicio_mandato_secretario</th>
			<th>termino_mandato_secretario</th>
			<th>telefone_secretario</th>
			<th>endereco_secretario</th>
			<th>fk_usuario</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($secretarios as $key => $secretario)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $secretario->nome_secretario }}</td>
		<td>{{ $secretario->matricula_secretario }}</td>
		<td>{{ $secretario->inicio_mandato_secretario }}</td>
		<td>{{ $secretario->termino_mandato_secretario }}</td>
		<td>{{ $secretario->telefone_secretario }}</td>
		<td>{{ $secretario->endereco_secretario }}</td>
		<td>{{ $secretario->fk_usuario }}</td>
		<td>
			@permission('gestao_secretario-create')
			<a class="btn btn-info" href="{{ route('secretario.show',$secretario->id) }}">Show</a>
			@endpermission
			@permission('gestao_secretario-edit')
			<a class="btn btn-primary" href="{{ route('secretario.edit',$secretario->id) }}">Edit</a>
			@endpermission
			@permission('gestao_secretario-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['secretario.destroy', $secretario->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $secretarios->render() !!}
@endsection