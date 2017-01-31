@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
         @section('contentheader_title')
        <div class="pull-left">
            <h2>Funcionario</h2>
        </div>
         @endsection
        <div class="pull-right">
            @permission('funcionario-create')
            <a class="btn btn-success" href="{{ route('funcionario.create') }}"> Cadastrar novo funcionário</a>
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

        <th>Nome</th>
        <th>Telefone</th>
        <th>Data de Nascimento</th>
        <th>Data da admissão</th>
        <th>Grau de instrução/th>
        <th>Formação</th>
        <th width="280px">Ação</th>
    </tr>
    @foreach ($funcionarios as $key => $funcionario)
    <tr>
        <td>{{ $funcionario->nome_funcionario }}</td>
        <td>{{ $funcionario->telefone_funcionario}}</td>
        <td>{{ $funcionario->datanasc_funcionario}}</td>
        <td>{{ $funcionario->dataadmissao_funcionario}}</td>
        <td>{{ $funcionario->grauinstrucao_funcionario}}</td>
        <td>{{ $funcionario->formacao_funcionario}}</td>
        <td>
            @permission('funcionario-create')
            <a class="btn btn-info" href="{{ route('funcionario.show',$funcionario->id) }}">Visualizar</a>
            @endpermission
            @permission('funcionario-edit')
            <a class="btn btn-primary" href="{{ route('funcionario.edit',$funcionario->id) }}">Editar</a>
            @endpermission
            @permission('funcionario-delete')
            {!! Form::open(['method' => 'DELETE','route' => ['funcionario.destroy', $funcionario->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            @endpermission
        </td>
    </tr>
    @endforeach
</table>
{!! $funcionarios->render() !!}
@endsection