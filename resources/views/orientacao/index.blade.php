@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Administração de Orientação</h2>
        </div>
        <div class="pull-right">
            @permission('gestao_orientacao-create')
            <a class="btn btn-success" href="{{ route('orientacao.create') }}"> Criar Nova Orientação</a>
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

        <th>Tipo de Orientação</th>
        <th>Nivel de Orientação</th>
        <th>Carga Horária de Orientação</th>
        <th>Professor</th>
        <th>Período Letivo</th>
        <th>Aluno</th>
        <th width="280px">Ação</th>
    </tr>
    @foreach ($orientacaos as $key => $orientacao)
    <tr>
        <td>{{ $orientacao->tipo_orientacao }}</td>
        <td>{{ $orientacao->nivel_orientacao}}</td>
        <td>{{ $orientacao->ch_orientacao}}</td>
        <td>{{ $orientacao->professor->nome_professor}}</td>
        <td>{{ $orientacao->periodoLetivo->periodo_periodoLetivo}}</td>
        <td>{{ $orientacao->aluno->nome_aluno}}</td>
        <td>
            @permission('gestao_orientacao-create')
            <a class="btn btn-info" href="{{ route('orientacao.show',$orientacao->id) }}">Visualizar</a>
            @endpermission
            @permission('gestao_orientacao-edit')
            <a class="btn btn-primary" href="{{ route('orientacao.edit',$orientacao->id) }}">Editar</a>
            @endpermission
            @permission('gestao_orientacao-delete')
            {!! Form::open(['method' => 'DELETE','route' => ['orientacao.destroy', $orientacao->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            @endpermission
        </td>
    </tr>
    @endforeach
</table>
{!! $orientacaos->render() !!}
@endsection