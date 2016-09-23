@extends('layouts.app')
 
@section('main-content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	    	@section('contentheader_title')
	        <div class="pull-left">
	            <h2>Atividade de Projeto de Extensão</h2>
	        </div>
	         @endsection 
	        <div class="pull-right">
	        	@permission('gestao_atividade_projeto_extensao-create')
	            <a class="btn btn-success" href="{{ route('atividadeProjetoExtensao.create') }}"> Criar Nova Atividade de Projeto de Extensão</a>
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
			<th>Tipo de Participação do Professor em Atividade de Projeto de Extensão</th>
			<th>Professor</th>
			<th>Período Letivo</th>
			<th>Carga Horária Total</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($atividade_projeto_extensaos as $key => $atividade_projeto_extensao)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $atividade_projeto_extensao->tipo_part_prof_atividade_projeto_extensao }}</td>
		<td>{{ $atividade_projeto_extensao->professor->nome_professor }}</td>
		<td>{{ $atividade_projeto_extensao->periodo_letivo->periodo_periodoLetivo }}</td>
		<td>{{ $atividade_projeto_extensao->ch_total_atividade_projeto_extensao }}</td>
		<td>
			@permission('gestao_atividade_projeto_extensao-create')
			<a class="btn btn-info" href="{{ route('atividadeProjetoExtensao.show',$atividade_projeto_extensao->id) }}">Visualizar</a>
			@endpermission
			@permission('gestao_atividade_projeto_extensao-edit')
			<a class="btn btn-primary" href="{{ route('atividadeProjetoExtensao.edit',$atividade_projeto_extensao->id) }}">Editar</a>
			@endpermission
			@permission('gestao_atividade_projeto_extensao-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['atividadeProjetoExtensao.destroy', $atividade_projeto_extensao->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $atividade_projeto_extensaos->render() !!}
@endsection