@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Mostrar Departamento</h2>
        </div>
        @endsection
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('departamento.index') }}"> Voltar</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome:</strong>
            {{ $departamento->nome }}
        </div>
        <div class="form-group">
            <strong>Sigla:</strong>
            {{ $departamento->sigla }}
        </div>
        <div class="form-group">
            <strong>Email:</strong>
            {{ $departamento->email }}
        </div>
        <div class="form-group">
            <strong>Campus:</strong>
            {{ $departamento->campus }}
        </div>
        <div class="form-group">
            <strong>Secretário:</strong>
            {{ $departamento->secretario->nome_secretario }}
        </div>
        <div class="form-group">
            <strong>Coordenador:</strong>
            {{ $departamento->fk_coordenador }}
        </div>

       
    </div>
</div>
@endsection