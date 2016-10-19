@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Mostrar Colegiado</h2>
        </div>
         @endsection    
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('colegiado.index') }}"> Voltar</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome do Colegiado:</strong>
            {{ $colegiado->nome_colegiado }}
        </div>
        
         <div class="form-group">
            <strong>Sigla do Colegiado:</strong>
            {{ $colegiado->sigla_colegiado }}
        </div>
        <div class="form-group">
            <strong>Email do Colegiado:</strong>
            {{ $colegiado->email_colegiado }}
        </div>
        <div class="form-group">
            <strong>Campus do Colegiado:</strong>
            {{ $colegiado->campus_colegiado }}
        </div>
        <div class="form-group">
            <strong>Nome do Coordenador:</strong>
            {{ $colegiado->coordenacao->professor->nome_professor }}
        </div>
        <div class="form-group">
            <strong>Nome do Secretário:</strong>
            {{ $colegiado->secretario->nome_secretario }}
        </div>
    </div>
</div>
@endsection