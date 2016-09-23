@extends('layouts.app')
 
@section('main-content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	    @section('contentheader_title')
	        <div class="pull-left">	
	            <h2>Atividade de Ensino</h2>
	        </div>
	      @endsection  
	        <div class="pull-right">
	        	@permission('gestao_atividade_ensino-create')
	            <a class="btn btn-success" href="{{ route('atividadeEnsino.create') }}"> Criar Nova Atividade de Ensino</a>
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
			<th>Professor</th>
			<th>Período Letivo</th>
			<th>Carga Horária</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($atividade_ensinos as $key => $atividade_ensino)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $atividade_ensino->professor->nome_professor }}</td>
		<td>{{ $atividade_ensino->periodo_letivo->periodo_periodoLetivo }}</td>
		<td>{{ $atividade_ensino->ch_atividade_ensino }}</td>
		<td>
			@permission('gestao_atividade_ensino-create')
			<a class="btn btn-info" href="{{ route('atividadeEnsino.show',$atividade_ensino->id) }}">Visualizar</a>
			@endpermission
			@permission('gestao_atividade_administrativa-edit')
			<a class="btn btn-primary" href="{{ route('atividadeEnsino.edit',$atividade_ensino->id) }}">Editar</a>
			@endpermission
			@permission('gestao_atividade_ensino-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['atividadeEnsino.destroy', $atividade_ensino->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $atividade_ensinos->render() !!}
@endsection