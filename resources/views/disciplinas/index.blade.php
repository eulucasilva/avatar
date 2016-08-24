@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Disciplinas</h2>
        </div>
        <div class="pull-right">
            @permission('gestao_disciplina-create')
            <a class="btn btn-success" href="{{ route('disciplina.create') }}">Cadastrar Disciplina</a>
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
        <th>Código</th>
        <th>Carga Horária Total</th>
        <th>Natureza</th>
        <th width="280px">Ação</th>
    </tr>
    @foreach ($disciplinas as $key => $disciplina)
    <tr>
        <td>{{ $disciplina->nome }}</td>
        <td>{{ $disciplina->codigo  }}</td>
        <td>{{ $disciplina->ch_total}}</td>
        <td>{{ $disciplina->natureza}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('itemCRUD2.show',$disciplina->id) }}">Visualizar</a>
            @permission('gestao_disciplina-edit')
            <a class="btn btn-primary" href="{{ route('itemCRUD2.edit',$disciplina->id) }}">Editar</a>
            @endpermission
            @permission('gestao_disciplina-delete')
            {!! Form::open(['method' => 'DELETE','route' => ['disciplina.destroy', $disciplina->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            @endpermission
        </td>
    </tr>
    @endforeach
</table>
{!! $disciplinas->render() !!}
@endsection