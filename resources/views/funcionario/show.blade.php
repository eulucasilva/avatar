@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2> Visualizar Funcionário</h2>
        </div>
        @endsection
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('funcionario.index') }}"> Voltar</a>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome:</strong>
            {{ $funcionario->nome_funcionario }}
        </div>
        <div class="form-group">
            <strong>Telefone:</strong>
            {{ $funcionario->telefone_funcionario }}
        </div>
        <div class="form-group">
            <strong>Data de Nascimento:</strong>
            {{ $funcionario->datanasc_funcionario }}
        </div>
        <div class="form-group">
            <strong>Data da admissão:</strong>
            {{ $funcionario->dataadmissao_funcionario }}
        </div>
        <div class="form-group">
            <strong>Grau de instrução:</strong>
            {{ $funcionario->grauinstrucao_funcionario }}
        </div>
        <div class="form-group">
            <strong>Formação:</strong>
            {{ $funcionario->formacao_funcionario }}
        </div>
        
    </div>

</div>

@endsection