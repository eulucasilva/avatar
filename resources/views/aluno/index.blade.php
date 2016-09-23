@extends('layouts.app')
 
@section('main-content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	    	@section('contentheader_title')
	             <div class="pull-left">
	            		<h2>Administração do Aluno</h2>
	        	</div>
	        @endsection	
	        <div class="pull-right">
	        	@permission('gestao_aluno-create')
	            <a class="btn btn-success" href="{{ route('aluno.create') }}"> Criar Novo aluno</a>
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
			<th>Nome</th>
			<th>Matricula</th>
			<th>Ano Ingresso</th>
			<th>Email</th>
			<th>Telefone</th>
			<th>Endereço</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($alunos as $key => $aluno)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $aluno->nome_aluno }}</td>
		<td>{{ $aluno->matricula_aluno }}</td>
		<td>{{ $aluno->ano_ingresso_aluno }}</td>
		<td>{{ $aluno->email_aluno }}</td>
		<td>{{ $aluno->telefone_aluno }}</td>
		<td>{{ $aluno->endereco_aluno }}</td>
		<td>
			@permission('gestao_aluno-create')
			<a class="btn btn-info" href="{{ route('aluno.show',$aluno->id) }}">Visualizar</a>
			@endpermission
			@permission('gestao_aluno-edit')
			<a class="btn btn-primary" href="{{ route('aluno.edit',$aluno->id) }}">Editar</a>
			@endpermission
			@permission('gestao_aluno-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['aluno.destroy', $aluno->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $alunos->render() !!}
@endsection