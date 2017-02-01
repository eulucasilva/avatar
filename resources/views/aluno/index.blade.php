@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Alunos</h2>
        </div>
        @endsection
        
        <div class="pull-right">
            @permission('gestao_aluno-create')
            <a class="btn btn-primary" href="{{ route('aluno.create') }}"><span class="glyphicon glyphicon-plus"></span> Cadastrar Projeto</a>
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
            <th>Telefon</th>
            <th>Matricula</th>
            <th>Bolsista</th>
            <th>Data de Nascimento</th>
            <th>Curso</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($data as $key => $aluno)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $aluno->nome }}</td>
            <td>{{ $aluno->emaill }}</td>
            <td>{{ $aluno->telefone }}</td>
            <td>{{ $aluno->matricula }}</td> 
            <td>{{ $aluno->bolsista }}</td>
            <td>{{ $aluno->data_nasc }}</td>
            <td>{{ $aluno->curso }}</td>
            <td>
                @if(!empty($aluno->roles))
                @foreach($aluno->roles as $v)
                <label class="label label-success">{{ $v->display_name }}</label>
                @endforeach
                @endif
            </td>
            <td>
                @permission('gestao_aluno-create')
                <a class="btn btn-info" href="{{ route('alunos.show',$aluno->id) }}">Visualizar</a>
                @endpermission
                @permission('gestao_aluno-edit')
                <a class="btn btn-primary" href="{{ route('alunos.edit',$aluno->id) }}">Editar</a>
                @endpermission
                @permission('gestao_aluno-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['alunos.destroy', $aluno->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                @endpermission
            </td>
        </tr>
        @endforeach
    </table>
</div>
{!! $data->render() !!}
@endsection