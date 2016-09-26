@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Mostrar Aluno</h2>
        </div>
        @endsection    
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('aluno.index') }}"> Voltar</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">
            <strong>Nome do Aluno:</strong>
            {{ $aluno->nome_aluno }}
        </div>
        <div class="form-group">
            <strong>Matrícula do Aluno:</strong>
            {{ $aluno->matricula_aluno }}
        </div>
        <div class="form-group">
            <strong>Ano de Ingresso do Aluno:</strong>
            {{ $aluno->ano_ingresso_aluno }}
        </div>
        <div class="form-group">
            <strong>Email do Aluno:</strong>
            {{ $aluno->email_aluno }}
        </div>
        <div class="form-group">
            <strong>Telefone do Aluno:</strong>
            {{ $aluno->telefone_aluno }}
        </div>

        <div class="form-group">
            <strong>Endereço do Aluno:</strong>
            {{ $aluno->endereco_aluno }}
        </div>

    </div>
    @endsection