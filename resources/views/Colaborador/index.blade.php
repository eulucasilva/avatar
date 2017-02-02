@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Frequencia</h2>
        </div>
        @endsection 
        <div class="pull-right">
            @permission('colaborador-create')
            <a class="btn btn-primary" href="{{ route('colaborador.create') }}"><span class="glyphicon glyphicon-plus"></span> Cadastrar frequência</a>
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
            <th>Email</th>
            <th>Area de atuação</th>
            <th>Titulação</th>
            <th>Vinculo</th>
            <th>Data de Nascimento</th>
            <th width="280px">Ação</th>
        </tr>

        @foreach ($colaboradors as $key => $colaborador)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ colaborador->nome_colaborador }}</td>
            <td>{{ colaborador->email_colaborador }}</td>
            <td>{{ colaborador->areaatuacao_colaborador }}</td>
            <td>{{ colaborador->titulacao_colaborador }}</td>
            <td>{{ colaborador->vinculo_colaborador }}</td>
            <td>{{ colaborador->datanascimento_colaborador }}</td>

            <td>
                @permission('colaborador-create')
                <a class="btn btn-info" href="{{ route('colaborador.show',$colaborador->id) }}">Visualizar</a>
                @endpermission
                @permission('colaborador-edit')
                <a class="btn btn-primary" href="{{ route('colaborador.edit',$colaborador->id) }}">Editar</a>
                @endpermission
                @permission('colaborador-delete')
                <a class="btn btn-danger" data-toggle="modal" data-target="#myModal">Excluir</a>
                @endpermission
            </td>
        </tr>
        @endforeach
    </table>
</div>
{!! $colaboradors->render() !!}
@endsection

@if(!empty($colaborador))
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
                {!! Form::open(['method' => 'DELETE','route' => ['colaborador.destroy', $colaborador->id],'style'=>'display:inline']) !!}
                {!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endif



