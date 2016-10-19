@extends('layouts.app')
 
@section('main-content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	    	@section('contentheader_title')
	        <div class="pull-left">
	            <h2>Administração do colegiado</h2>
	        </div>
	        @endsection 
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
			<th>Nome do Colegiado</th>
			<th>Sigla do Colegiado</th>
			<th>Email do Colegiado</th>
			<th>Campus do Colegiado</th>
			<th>Nome do Coordenador</th>
			<th>Nome do Secretario</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($colegiados as $key => $colegiado)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $colegiado->nome_colegiado }}</td>
		<td>{{ $colegiado->sigla_colegiado }}</td>
		<td>{{ $colegiado->email_colegiado }}</td>
		<td>{{ $colegiado->campus_colegiado }}</td>
		<td>{{ $colegiado->coordenacao->professor->nome_professor }}</td>
		<td>{{ $colegiado->secretario->nome_secretario }}</td>
		<td>
			@permission('gestao_colegiado-create')
			<a class="btn btn-info" href="{{ route('colegiado.show',$colegiado->id) }}">Visualizar</a>
			@endpermission
			@permission('gestao_colegiado-edit')
			<a class="btn btn-primary" href="{{ route('colegiado.edit',$colegiado->id) }}">Editar</a>
			@endpermission
			@permission('gestao_colegiado-delete')
                                                        <a class="btn btn-danger" data-toggle="modal" data-target="#myModal">Excluir</a>
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $colegiados->render() !!}
@endsection

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Excluir</h4>
            </div>
            <div class="modal-body">
                Tem certeza que deseja excluir?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                {!! Form::open(['method' => 'DELETE','route' => ['colegiado.destroy', $colegiado->id],'style'=>'display:inline']) !!}
                {!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>