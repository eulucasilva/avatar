@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Locais</h2>
        </div>
        @endsection 
        <div class="pull-right">
            @permission('local-create')
            <a class="btn btn-primary" href="{{ route('local.create') }}"><span class="glyphicon glyphicon-plus"></span> Cadastrar local</a>
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

        @foreach ($locais as $key => $local)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $local->nome_local }}</td>
            <td>
                @permission('local-create')
                <a class="btn btn-info" href="{{ route('local.show',$local->id) }}">Visualizar</a>
                @endpermission
                @permission('local-edit')
                <a class="btn btn-primary" href="{{ route('local.edit',$local->id) }}">Editar</a>
                @endpermission
                @permission('local-delete')
                <a class="btn btn-danger" data-toggle="modal" data-target="#myModal">Excluir</a>
                @endpermission
            </td>
        </tr>
        @endforeach
    </table>
</div>
{!! $locais->render() !!}
@endsection

@if(!empty($local))
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
                {!! Form::open(['method' => 'DELETE','route' => ['local.destroy', $local->id],'style'=>'display:inline']) !!}
                {!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endif



