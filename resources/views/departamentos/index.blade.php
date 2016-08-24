@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Departamentos</h2>
        </div>
        <div class="pull-right">
            @permission('gestao_departamento-create')
            <a class="btn btn-success" href="{{ route('departamento.create') }}">Cadastrar Departamento</a>
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
        <th>Nome</th>
        <th>Sigla</th>
        <th>Email</th>
        <th>Campus</th>
        <th width="280px">Ação</th>
    </tr>
    @foreach ($departamentos as $key => $departamento)
    <tr>
        <td>{{ $departamento->nome }}</td>
        <td>{{ $departamento->sigla }}</td>
        <td>{{ $departamento->email }}</td>
        <td>{{ $departamento->campus }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('departamento.show', $departamento->id) }}">Visualizar</a>
            @permission('gestao_departamento-edit')
            <a class="btn btn-primary" href="{{ route('departamento.edit',$departamento->id) }}">Editar</a>
            @endpermission
            @permission('gestao_departamento-delete')
            {!! Form::open(['method' => 'DELETE','route' => ['departamento.destroy', $departamento->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            @endpermission
        </td>
    </tr>
    @endforeach
</table>
{!! $departamentos->render() !!}
@endsection