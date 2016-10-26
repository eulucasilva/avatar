@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Administração de Curso</h2>
        </div>
        @endsection 
        <div class="pull-right">
            @permission('gestao_curso-create')
            <a class="btn btn-success" href="{{ route('curso.create') }}"> Criar Novo Curso</a>
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
        <th>Nome do Curso</th>
        <th>Regime do Curso</th>
        <th>Campus do Curso</th>
        <th>Tipo do curso</th>
        <th>Departamento</th>
        <th>Colegiado</th>
        <th width="280px">Ação</th>
    </tr>
    @foreach ($cursos as $key => $curso)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $curso->nome_curso }}</td>
        <td>{{ $curso->regime_curso}}</td>
        <td>{{ $curso->campus_curso}}</td>
        <td>{{ $curso->tipo_curso}}</td>
        <td>{{ $curso->departamento->nome}}</td>
        <td>{{ $curso->colegiado->nome_colegiado}}</td>

        <td>
            @permission('gestao_curso-create')
            <a class="btn btn-info" href="{{ route('curso.show',$curso->id) }}">Visualizar</a>
            @endpermission
            @permission('gestao_curso-edit')
            <a class="btn btn-primary" href="{{ route('curso.edit',$curso->id) }}">Editar</a>
            @endpermission
            @permission('gestao_curso-delete')
                    <a class="btn btn-danger" data-toggle="modal" data-target="#myModal">Excluir</a>
            @endpermission
        </td>
    </tr>
    @endforeach
</table>
{!! $cursos->render() !!}
@endsection

 @if(!empty($curso))
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
                {!! Form::open(['method' => 'DELETE','route' => ['curso.destroy', $curso->id],'style'=>'display:inline']) !!}
                {!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endif