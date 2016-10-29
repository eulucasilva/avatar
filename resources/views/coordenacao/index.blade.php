@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Coordenadores</h2>
        </div>
        @endsection
        <div class="pull-right">
            @permission('gestao_coordenacao-create')
            <a class="btn btn-primary" href="{{ route('coordenacao.create') }}"><span class="glyphicon glyphicon-plus"></span> Cadastrar coordenador</a>
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
            <th>No</th>
            <th>Tipo</th>
            <th>Portaria de nomeação</th>
            <th>Início do mandato</th>
            <th>Término do mandato</th>
            <th>Professor</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($coordenacaos as $key => $coordenacao)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $coordenacao->tipo_coordenacao }}</td>
            <td>{{ $coordenacao->portaria_nomeacao_coordenacao }}</td>
            <td>{{ $coordenacao->inicio_mandato_coordenacao }}</td>
            <td>{{ $coordenacao->termino_mandato_coordenacao }}</td>
            <td>{{ $coordenacao->professor->nome_professor }}</td>
            <td>
                @permission('gestao_coordenacao-create')
                <a class="btn btn-info" href="{{ route('coordenacao.show',$coordenacao->id) }}">Visualizar</a>
                @endpermission
                @permission('gestao_coordenacao-edit')
                <a class="btn btn-primary" href="{{ route('coordenacao.edit',$coordenacao->id) }}">Editar</a>
                @endpermission
                @permission('gestao_coordenacao-delete')
                <a class="btn btn-danger" data-toggle="modal" data-target="#myModal">Excluir</a>

                @endpermission
            </td>
        </tr>
        @endforeach
    </table>
</div>
{!! $coordenacaos->render() !!}
@endsection


@if(!empty($coordenacao))
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
                {!! Form::open(['method' => 'DELETE','route' => ['coordenacao.destroy', $coordenacao->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Excluir', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endif

