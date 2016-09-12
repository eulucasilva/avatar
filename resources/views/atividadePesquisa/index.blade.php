@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Atividade de Pesquisa</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('gestao_atividade_pesquisa-create')
	            <a class="btn btn-success" href="{{ route('atividadePesquisa.create') }}"> Criar Nova Atividade Pesquisa</a>
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
			<th>Tipo de Participação do Professor em Atividade de Pesquisa</th>
			<th>Professor</th>
			<th>Período Letivo</th>
			<th>Carga Horária Total</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($atividade_pesquisas as $key => $atividade_pesquisa)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $atividade_pesquisa->tipo_part_prof_atividade_pesquisa }}</td>
		<td>{{ $atividade_pesquisa->professor->nome_professor }}</td>
		<td>{{ $atividade_pesquisa->periodo_letivo->periodo_periodoLetivo }}</td>
		<td>{{ $atividade_pesquisa->ch_total_atividade_pesquisa }}</td>
		<td>
			@permission('gestao_atividade_pesquisa-create')
			<a class="btn btn-info" href="{{ route('atividadePesquisa.show',$atividade_pesquisa->id) }}">Visualizar</a>
			@endpermission
			@permission('gestao_atividade_administrativa-edit')
			<a class="btn btn-primary" href="{{ route('atividadePesquisa.edit',$atividade_pesquisa->id) }}">Editar</a>
			@endpermission
			@permission('gestao_atividade_pesquisa-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['atividadePesquisa.destroy', $atividade_pesquisa->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $atividade_pesquisas->render() !!}
@endsection