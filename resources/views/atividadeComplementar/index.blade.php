@extends('layouts.app')
 
@section('main-content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	    	  @section('contentheader_title')	
	        <div class="pull-left">
	            <h2>Atividade Complementar</h2>
	        </div>
	        @endsection 
	        <div class="pull-right">
	        	@permission('gestao_atividade_complementar-create')
	            <a class="btn btn-success" href="{{ route('atividadeComplementar.create') }}"> Criar Nova Atividade Complementar</a>
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
	@foreach ($atividade_complementars as $key => $atividade_complementar)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $atividade_complementar->professor->nome_professor }}</td>
		<td>{{ $atividade_complementar->periodo_letivo->periodo_periodoLetivo }}</td>
		<td>{{ $atividade_complementar->ch_total_atividade_complementar }}</td>
		<td>
			@permission('gestao_atividade_complementar-create')
			<a class="btn btn-info" href="{{ route('atividadeComplementar.show',$atividade_complementar->id) }}">Visualizar</a>
			@endpermission
			@permission('gestao_atividade_complementar-edit')
			<a class="btn btn-primary" href="{{ route('atividadeComplementar.edit',$atividade_complementar->id) }}">Editar</a>
			@endpermission
			@permission('gestao_atividade_complementar-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['atividadeComplementar.destroy', $atividade_complementar->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $atividade_complementars->render() !!}
@endsection