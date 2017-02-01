@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Cursos</h2>
        </div>
        @endsection
        
        <div class="pull-right">
            @permission('curso-create')
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
            <th>Departamento</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($data as $key => $curso)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $curso->nomeCurso }}</td>
            <td>{{ $aluno->fk_departamento }}</td>
            
            <td>
                @permission('curso-create')
                <a class="btn btn-info" href="{{ route('curso.show',$cruso->id) }}">Visualizar</a>
                @endpermission
                @permission('gestao_aluno-edit')
                <a class="btn btn-primary" href="{{ route('curso.edit',$curso->id) }}">Editar</a>
                @endpermission
                @permission('gestao_aluno-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['curso.destroy', $curso->id],'style'=>'display:inline']) !!}
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