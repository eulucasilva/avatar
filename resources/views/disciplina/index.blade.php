@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Disciplinas</h2>
        </div>
        @endsection
        <div class="pull-right">
            @permission('gestao_disciplina-create')
            <a class="btn btn-primary" href="{{ route('disciplina.create') }}"><span class="glyphicon glyphicon-plus"></span> Cadastrar Disciplina</a>
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
    <table class="table table-bordered table-hover dataTable">
        <tr>
            <th>Nome</th>
            <th>Código</th>
            <th>Carga horária total</th>
            <th>Natureza</th>
            <th>Departamento</th>
            <th>Área</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($disciplinas as $key => $disciplina)
        <tr>
            <td>{{ $disciplina->nome_disciplina }}</td>
            <td>{{ $disciplina->codigo_disciplina  }}</td>
            <td>{{ $disciplina->ch_total_disciplina}}</td>
            <td>{{ $disciplina->natureza_disciplina}}</td>
            <td>{{ $disciplina->departamento->nome}}</td>
            <td>{{ $disciplina->area->nome}}</td>
            <td>
                <a class="btn btn-info" href="{{ route('disciplina.show',$disciplina->id) }}">Visualizar</a>
                @permission('gestao_disciplina-edit')
                <a class="btn btn-primary" href="{{ route('disciplina.edit',$disciplina->id) }}">Editar</a>
                @endpermission
                @permission('gestao_disciplina-delete')
                <a class="btn btn-danger" data-toggle="modal" data-target="#myModal">Excluir</a>
                @endpermission
            </td>
        </tr>
        @endforeach
    </table>
</div>
{!! $disciplinas->render() !!}
@endsection

@if(!empty($disciplina))
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
                {!! Form::open(['method' => 'DELETE','route' => ['disciplina.destroy', $disciplina->id],'style'=>'display:inline']) !!}
                {!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endif