@extends('layouts.app')


@section('main-content')
<div class="row"{{('ui.css')}}"rel"="stylesheet">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Administração do Aluno</h2>
        </div>
        @endsection	
        <div class="pull-right">
            @permission('gestao_aluno-create')
            <a class="btn btn-success" href="{{ route('aluno.create') }}"> Criar Novo aluno</a>
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
        <th>Nome</th>
        <th>Matricula</th>
        <th>Ano Ingresso</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($alunos as $key => $aluno)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $aluno->nome_aluno }}</td>
        <td>{{ $aluno->matricula_aluno }}</td>
        <td>{{ $aluno->ano_ingresso_aluno }}</td>
        <td>{{ $aluno->email_aluno }}</td>
        <td>{{ $aluno->telefone_aluno }}</td>
        <td>{{ $aluno->endereco_aluno }}</td>
        <td>
            @permission('gestao_aluno-create')
            <a class="btn btn-info" href="{{ route('aluno.show',$aluno->id) }}">Visualizar</a>
            @endpermission
            @permission('gestao_aluno-edit')
            <a class="btn btn-primary" href="{{ route('aluno.edit',$aluno->id) }}">Editar</a>
            @endpermission
            @permission('gestao_aluno-delete')
              <a class="btn btn-danger" data-toggle="modal" data-target="#myModal">Excluir</a>
         
            @endpermission
        </td>
    </tr>
    @endforeach
</table>
{!! $alunos->render() !!}
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
                {!! Form::open(['method' => 'DELETE','route' => ['aluno.destroy', $aluno->id],'style'=>'display:inline']) !!}
                {!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
 