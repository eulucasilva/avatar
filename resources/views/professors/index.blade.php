@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Projetos</h2>
        </div>
        @endsection
        <div class="pull-left">
            @permission('relatorioProfessor')
            <a class="btn btn-default" href="{{ route('relatorio.professor') }}">Gerar relatório</a>
            @endpermission
        </div>
        <div class="pull-right">
            @permission('gestao_professor-create')
            <a class="btn btn-primary" href="{{ route('professor.create') }}"><span class="glyphicon glyphicon-plus"></span> Cadastrar Projeto</a>
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
            <th>Matrícula</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Titulação</th>
            <th>Classe</th>
            <th>Regime de Trabalho</th>
            <th>Tipo de Vínculo</th>
            <th>Data de Nascimento</th>
            <th>Departamento</th>
            <th>Curso</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($data as $key => $professor)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $professor->nome }}</td>
            <td>{{ $professor->matricula }}</td>
            <td>{{ $professor->email }}</td>
            <td>{{ $professor->areaDeAtuacao }}</td> 
            <td>{{ $professor->classe }}</td>
            <td>{{ $professor->titulacao }}</td>
            <td>{{ $professor->regimeDeTrabalho }}</td>
            <td>{{ $professor->tipoVincluo}}</td>
            <td>{{ $professor->dataNasc }}</td>
            <td>{{ $professor->fk_departamento }}</td>
            <td>{{ $professor->fk_curso }}</td>
            <td>
                
            </td>
            <td>
                @permission('professor-create')
                <a class="btn btn-info" href="{{ route('professors.show',$professor->id) }}">Visualizar</a>
                @endpermission
                @permission('gestao_professor-edit')
                <a class="btn btn-primary" href="{{ route('professors.edit',$professor->id) }}">Editar</a>
                @endpermission
                @permission('gestao_professor-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['professors.destroy', $professor->id],'style'=>'display:inline']) !!}
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