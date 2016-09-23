@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Áreas</h2>
        </div>
        @endsection
        <div class="pull-right">
            @permission('gestao_areas-create')
            <a class="btn btn-success" href="{{ route('area.create') }}">Cadastrar Área</a>
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
        <th>Departamento</th>
        <th>Coordenador</th>
        <th width="280px">Ação</th>
    </tr>
    @foreach ($areas as $key => $area)
    <tr>
        <td>{{$area->nome}}</td>
        <td>{{$area->departamento->nome}}</td>
        @if(!empty($area->coordenacao->professor->nome_professor))
        <td>{{$area->coordenacao->professor->nome_professor}}</td>
        @else
        <td>{{"-"}}</td>
        @endif
        <td>
            <a class="btn btn-info" href="{{ route('area.show',$area->id) }}">Visualizar</a>
            @permission('gestao_areas-edit')
            <a class="btn btn-primary" href="{{ route('area.edit',$area->id) }}">Editar</a>
            @endpermission
            @permission('gestao_areas-delete')
            {!! Form::open(['method' => 'DELETE','route' => ['area.destroy', $area->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            @endpermission
        </td>
    </tr>
    @endforeach
</table>
{!! $areas->render() !!}
@endsection