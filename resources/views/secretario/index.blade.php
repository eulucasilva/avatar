@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Secretários</h2>
        </div>
        @endsection 
        <div class="pull-right">
            @permission('gestao_secretario-create')
            <a class="btn btn-primary" href="{{ route('secretario.create') }}"><span class="glyphicon glyphicon-plus"></span> Cadastrar secretário</a>
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
            <th>No</th>
            <th>Nome</th>
            <th>Matrícula</th>
            <th>Início do mandato</th>
            <th>Término do mandato</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($secretarios as $key => $secretario)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $secretario->nome_secretario }}</td>
            <td>{{ $secretario->matricula_secretario }}</td>
            <td>{{ $secretario->inicio_mandato_secretario }}</td>
            <td>{{ $secretario->termino_mandato_secretario }}</td>
            <td>{{ $secretario->telefone_secretario }}</td>
            <td>{{ $secretario->endereco_secretario }}</td>
            <td>
                @permission('gestao_secretario-create')
                <a class="btn btn-info" href="{{ route('secretario.show',$secretario->id) }}">Visualizar</a>
                @endpermission
                @permission('gestao_secretario-edit')
                <a class="btn btn-primary" href="{{ route('secretario.edit',$secretario->id) }}">Editar</a>
                @endpermission
                @permission('gestao_secretario-delete')
                <a class="btn btn-danger" data-toggle="modal" data-target="#myModal">Excluir</a>

                @endpermission
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        {!! $secretarios->render() !!}
        @endsection

        @if(!empty($secretario))
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
                        {!! Form::open(['method' => 'DELETE','route' => ['secretario.destroy', $secretario->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        @endif
