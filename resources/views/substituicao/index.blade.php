@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Administração de Substituicao</h2>
        </div>
        @endsection
        <div class="pull-right">
            @permission('gestao_substituicao-create')
            <a class="btn btn-success" href="{{ route('substituicao.create') }}"> Criar Nova Substituição</a>
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
        <th>Data de Início</th>
        <th>Data de Término</th>
        <th>Motivo</th>
        <th>Nº Portaria</th>
        <th>Nº COP</th>
        <th>Substituído</th>
        <th>Substituto</th>
        <th width="280px">Ação</th>
    </tr>
    @foreach ($substituicaos as $key => $substituicao)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $substituicao->inicio_substituicao}}</td>
        <td>{{ $substituicao->fim_substituicao }}</td>
        <td>{{ $substituicao->motivo_substituicao }}</td>
        <td>{{ $substituicao->portaria_substituicao }}</td>
        <td>{{ $substituicao->numcop_substituicao }}</td>
        <td>{{ $substituicao->fk_professor_substituido }}</td>
        <td>{{ $substituicao->fk_professor_substituto }}</td>
        <td>
            @permission('gestao_substituicao-create')
            <a class="btn btn-info" href="{{ route('substituicao.show',$substituicao->id) }}">Visualizar</a>
            @endpermission
            @permission('gestao_substituicao-edit')
            <a class="btn btn-primary" href="{{ route('substituicao.edit',$substituicao->id) }}">Editar</a>
            @endpermission
            @permission('gestao_substituicao-delete')
                 <a class="btn btn-danger" data-toggle="modal" data-target="#myModal">Excluir</a>
            @endpermission
        </td>
    </tr>
    @endforeach
</table>
{!! $substituicaos->render() !!}
@endsection

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
                {!! Form::open(['method' => 'DELETE','route' => ['substituicao.destroy', $substituicao->id],'style'=>'display:inline']) !!}
                {!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>