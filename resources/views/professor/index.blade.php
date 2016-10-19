@extends('layouts.app')
<script src = "{{ asset('js/jquery-3.1.0.js') }}" type = "text/javascript" ></script>
<script src = "{{ asset('js/jquery.maskedinput.js') }}" type = "text/javascript" ></script>
<script src = "{{ asset('js/jquery-ui-1.12.0/jquery-ui.js') }}" type = "text/javascript" ></script>
<link href="{{ asset('js/jquery-ui-themes-1.12.0/themes/base/jquery-ui.css') }}" rel="stylesheet">

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Administração do Professor</h2>
        </div>
        @endsection 
        <div class="pull-right">
            @permission('gestao_professor-create')
            <a class="btn btn-success" href="{{ route('professor.create') }}"> Criar Novo Professor</a>
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
        <th>Situação</th>
        <th>Regime Trabalho</th>
        <th>Carga Horária</th>
        <th>Inicio Contrato</th>
        <th>Termino Contrato</th>
        <th>Contrato Professor</th>
        <th>Classe</th>
        <th>Titulo</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Usuario</th>
        <th width="280px">Ação</th>
    </tr>
    @foreach ($professores as $key => $professor)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $professor->nome_professor }}</td>
        <td>{{ $professor->matricula_professor }}</td>
        <td>{{ $professor->situacao_professor }}</td>
        <td>{{ $professor->regime_trabalho_professor }}</td>
        <td>{{ $professor->ch_professor }}</td>
        <td>{{ $professor->inicio_contrato_professor }}</td>
        <td>{{ $professor->termino_contrato_professor }}</td>
        <td>{{ $professor->contrato_professor }}</td>
        <td>{{ $professor->classe_professor }}</td>
        <td>{{ $professor->titulo_professor }}</td>
        <td>{{ $professor->email_professor }}</td>
        <td>{{ $professor->telefone_professor }}</td>
        <td>{{ $professor->endereco_professor }}</td>
        <td>{{ $professor->fk_usuario }}</td>
        <td>
            @permission('gestao_professor-create')
            <a class="btn btn-info" href="{{ route('professor.show',$professor->id) }}">Visualizar</a>
            @endpermission
            @permission('gestao_professor-edit')
            <a class="btn btn-primary" href="{{ route('professor.edit',$professor->id) }}">Editar</a>
            @endpermission
            @permission('gestao_professor-delete')
            <a class="btn btn-danger" data-toggle="modal" data-target="#myModal">Excluir</a>

            @endpermission
        </td>
    </tr>
    @endforeach
</table>
{!! $professores->render() !!}
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
     {!! Form::open(['method' => 'DELETE','route' => ['professor.destroy', $professor->id],'style'=>'display:inline']) !!}
            {!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
        	{!! Form::close() !!}
      </div>
    </div>
  </div>
</div>