@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Administração de Substituicao</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('gestao_substituicao-create')
	            <a class="btn btn-success" href="{{ route('substituicao.create') }}"> Criar Nova Substituição</a>
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
			<th>Data de Início</th>
			<th>Data de Término</th>
			<th>Motivo</th>
			<th>Nº Portaria</th>
			<th>Nº COP</th>
			<th>Substituído</th>
			<th>Substituto</th>
			<th width="280px">Ação</th>
		</tr>
	@foreach ($substituicaos as $key => $substituicao)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $substituicao->inicio_substituicao}}</td>
		<td>{{ $substituicao->fim_substituicao }}</td>
		<td>{{ $substituicao->motivo_substituicao }}</td>
		<td>{{ $substituicao->portaria_substituicao }}</td>
		<td>{{ $substituicao->numcop_substituicao }}</td>
		<td>{{ $substituicao->fk_professor_substituido }}</td>
		<td>{{ $substituicao->fk_professor_substituto }}</td>
		<td>
			@permission('gestao_substituicao-create')
			<a class="btn btn-info" href="{{ route('substituicao.show',$substituicao->id) }}">Visualizar</a>
			@endpermission
			@permission('gestao_substituicao-edit')
			<a class="btn btn-primary" href="{{ route('substituicao.edit',$substituicao->id) }}">Editar</a>
			@endpermission
			@permission('gestao_substituicao-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['substituicao.destroy', $substituicao->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $substituicaos->render() !!}
@endsection