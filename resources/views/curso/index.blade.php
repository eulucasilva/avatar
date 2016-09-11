@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Administração de Curso</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('gestao_curso-create')
	            <a class="btn btn-success" href="{{ route('curso.create') }}"> Criar Novo Curso</a>
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
			<th>Nome do Curso</th>
			<th>Regime do Curso</th>
			<th>Campus do Curso</th>
			<th>Tipo do curso</th>
			<th>Departamento</th>
                        <th>Colegiado</th>
                        <th width="280px">Ação</th>
		</tr>
	@foreach ($cursos as $key => $curso)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $curso->nome_curso }}</td>
		<td>{{ $curso->regime_curso}}</td>
		<td>{{ $curso->campus_curso}}</td>
		<td>{{ $curso->tipo_curso}}</td>
                <td>{{ $curso->departamento->nome}}</td>
                <td>{{ $curso->colegiado->nome_colegiado}}</td>
                
		<td>
			@permission('gestao_curso-create')
			<a class="btn btn-info" href="{{ route('curso.show',$curso->id) }}">Visualizar</a>
			@endpermission
			@permission('gestao_curso-edit')
			<a class="btn btn-primary" href="{{ route('curso.edit',$curso->id) }}">Editar</a>
			@endpermission
			@permission('gestao_curso-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['curso.destroy', $curso->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $cursos->render() !!}
@endsection