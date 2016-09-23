@extends('layouts.app')
 
@section('main-content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	    	@section('contentheader_title')
	        <div class="pull-left">	
	            <h2>Atividade Administrativa Acadêmica</h2>
	        </div>
	        @endsection 
	        <div class="pull-right">
	        	@permission('gestao_atividade_administrativa_acd-create')
	            <a class="btn btn-success" href="{{ route('atividadeAdministrativaAcd.create') }}"> Criar Nova Atividade Administrativa Acadêmica</a>
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
			<th>Tipo de participação em Atividade Acadêmica</th>
			<th>Professor</th>
			<th>Período Letivo</th>
			<th>Carga Horária</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($atividade_administrativa_acds as $key => $atividade_administrativa_acd)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $atividade_administrativa_acd->tipo_participacao_atividade_administrativa_acd }}</td>
		<td>{{ $atividade_administrativa_acd->professor->nome_professor }}</td>
		<td>{{ $atividade_administrativa_acd->periodo_letivo->periodo_periodoLetivo }}</td>
		<td>{{ $atividade_administrativa_acd->ch_participacao_atividade_administrativa_acd }}</td>
		<td>
			@permission('gestao_atividade_administrativa_acd-create')
			<a class="btn btn-info" href="{{ route('atividadeAdministrativaAcd.show',$atividade_administrativa_acd->id) }}">Visualizar</a>
			@endpermission
			@permission('gestao_atividade_administrativa_acd-edit')
			<a class="btn btn-primary" href="{{ route('atividadeAdministrativaAcd.edit',$atividade_administrativa_acd->id) }}">Editar</a>
			@endpermission
			@permission('gestao_atividade_administrativa_acd-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['atividadeAdministrativaAcd.destroy', $atividade_administrativa_acd->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $atividade_administrativa_acds->render() !!}
@endsection