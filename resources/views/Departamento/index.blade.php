@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Departamento</h2>
        </div>
        @endsection 
        <div class="pull-right">
            @permission('departamento-create')
            <a class="btn btn-primary" href="{{ route('departamento.create') }}"><span class="glyphicon glyphicon-plus"></span> Cadastrar frequência</a>
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
    <table id="table" class="table table-bordered table-hover dataTable" role="grid">
        <tr>
            <th>No</th>
            <th>Nome</th>
            <th>Descrição</th>
          
            <th width="280px">Ação</th>
        </tr>

        @foreach ($departamentos as $key => $departamento)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $departamento->nome_departamento }}</td>
            <td>{{ $departamento->descricao_departamento }}</td>


            <td>
                @permission('departamento-create')
                <a class="btn btn-info" href="{{ route('departamento.show',$departamento->id) }}">Visualizar</a>
                @endpermission
                @permission('departamento-edit')
                <a class="btn btn-primary" href="{{ route('departamento.edit',$departamento->id) }}">Editar</a>
                @endpermission
                @permission('departamento-delete')
                <a class="btn btn-danger" data-toggle="modal" data-target="#myModal">Excluir</a>
                @endpermission
            </td>
        </tr>
        @endforeach
    </table>
</div>
{!! $departamentos->render() !!}
@endsection

@if(!empty($departamento))
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
                {!! Form::open(['method' => 'DELETE','route' => ['departamento.destroy', $departamento->id],'style'=>'display:inline']) !!}
                {!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endif



