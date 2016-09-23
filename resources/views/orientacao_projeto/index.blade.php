@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
         @section('contentheader_title')
        <div class="pull-left">
            <h2>Administração de Orientação de Projetos</h2>
        </div>
         @endsection 
        <div class="pull-right">
            @permission('gestao_orientacao_projeto-create')
            <a class="btn btn-success" href="{{ route('orientacao_projeto.create') }}"> Criar Novo Projeto</a>
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

        <th>Aluno</th>
        <th>Projeto</th>
        <th>Professor</th>
        <th>Período Letivo</th>
     
        <th width="280px">Ação</th>
    </tr>
    @foreach ($orientacao_projetos as $key => $orientacao_projeto)
    <tr>
        <td>{{ $orientacao_projeto->aluno->nome_aluno }}</td>
        <td>{{ $orientacao_projeto->projeto->nome_projeto}}</td>
        <td>{{ $orientacao_projeto->professor->nome_professor}}</td> 
        <td>{{ $orientacao_projeto->periodoLetivo->periodo_periodoLetivo}}</td>

        <td>
            @permission('gestao_orientacao_projeto-create')
            <a class="btn btn-info" href="{{ route('orientacao_projeto.show',$orientacao_projeto->id) }}">Visualizar</a>
            @endpermission
            @permission('gestao_orientacao_projeto-edit')
            <a class="btn btn-primary" href="{{ route('orientacao_projeto.edit',$orientacao_projeto->id) }}">Editar</a>
            @endpermission
            @permission('gestao_orientacao_projeto-delete')
            {!! Form::open(['method' => 'DELETE','route' => ['orientacao_projeto.destroy', $orientacao_projeto->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            @endpermission
        </td>
    </tr>
    @endforeach
</table>
{!! $orientacao_projetos->render() !!}
@endsection