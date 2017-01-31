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
            <a class="btn btn-default" href="{{ route('relatorio.projeto') }}">Gerar relatório</a>
            @endpermission
        </div>
        <div class="pull-right">
            @permission('gestao_projeto-create')
            <a class="btn btn-primary" href="{{ route('projeto.create') }}"><span class="glyphicon glyphicon-plus"></span> Cadastrar Projeto</a>
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
            <th>Titulo</th>
            <th>Objetivo Geral</th>
            <th>Professor Coordenador</th>
            <th>Objetivo Especifico</th>
            <th>Financiamento</th>
            <th>Tipo de Pesquisa</th>
            <th>Fonte de Financiamento</th>
            <th>Grupo de Pesquisa do Projeto</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($data as $key => $projeto)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $projeto->titulo }}</td>
            <td>{{ $projeto->objetivoGeral }}</td>
            <td>{{ $projeto->professor_idCoordenador }}</td>
            <td>{{ $projeto->objetivoEspec }}</td> 
            <td>{{ $projeto->resultadoEsperados }}</td>
            <td>{{ $projeto->finaciamento }}</td>
            <td>{{ $projeto->tipoPesquisa }}</td>
            <td>{{ $projeto->fonteFinancimento }}</td>
            <td>{{ $projeto->grupoPesquisaProjeto }}</td>
            <td>
                @if(!empty($projeto->roles))
                @foreach($projeto->roles as $v)
                <label class="label label-success">{{ $v->display_name }}</label>
                @endforeach
                @endif
            </td>
            <td>
                @permission('gestao_projeto-create')
                <a class="btn btn-info" href="{{ route('projetos.show',$projeto->id) }}">Visualizar</a>
                @endpermission
                @permission('gestao_projeto-edit')
                <a class="btn btn-primary" href="{{ route('projetos.edit',$projeto->id) }}">Editar</a>
                @endpermission
                @permission('gestao_projeto-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['projetos.destroy', $projeto->id],'style'=>'display:inline']) !!}
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