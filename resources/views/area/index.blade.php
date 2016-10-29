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
            <a class="btn btn-primary" href="{{ route('area.create') }}"><span class="glyphicon glyphicon-plus"></span> Cadastrar área</a>
            @endpermission
        </div>
    </div>
</div>
<br>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<br>
<div class="box">
    <table class="table table-bordered">
        <tr>
            <th>Nome</th>
            <th>Departamento</th>
            <th>Usuário</th>
            <th>Coordenador</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($areas as $key => $area)
        <tr>
            <td>{{$area->nome}}</td>
            <td>{{$area->departamento->nome}}</td>
            <td>{{$area->usuario->name }}</td>
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
                <a class="btn btn-danger" data-toggle="modal" data-target="#myModal">Excluir</a>

                @endpermission
            </td>
        </tr>
        @endforeach
    </table>
</div>
{!! $areas->render() !!}
@endsection


@if(!empty($area))
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
                {!! Form::open(['method' => 'DELETE','route' => ['area.destroy', $area->id],'style'=>'display:inline']) !!}
                {!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endif
