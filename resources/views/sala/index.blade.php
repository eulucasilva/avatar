@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Salas</h2>
        </div>
        @endsection 
        <div class="pull-right">
            @permission('sala-create')
            <a class="btn btn-primary" href="{{ route('sala.create') }}"><span class="glyphicon glyphicon-plus"></span> Cadastrar sala</a>
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
            <th width="280px">Ação</th>
        </tr>

        @foreach ($salas as $key => $sala)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $sala->nome_sala }}</td>
            <td>
                @permission('sala-create')
                <a class="btn btn-info" href="{{ route('sala.show',$sala->id) }}">Visualizar</a>
                @endpermission
                @permission('sala-edit')
                <a class="btn btn-primary" href="{{ route('sala.edit',$sala->id) }}">Editar</a>
                @endpermission
                @permission('sala-delete')
                <a class="btn btn-danger" data-toggle="modal" data-target="#myModal">Excluir</a>
                @endpermission
            </td>
        </tr>
        @endforeach
    </table>
</div>
{!! $salas->render() !!}
@endsection

@if(!empty($sala))
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
                {!! Form::open(['method' => 'DELETE','route' => ['sala.destroy', $sala->id],'style'=>'display:inline']) !!}
                {!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endif



