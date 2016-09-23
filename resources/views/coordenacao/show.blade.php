@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Mostrar item</h2>
        </div>
         @endsection    
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('area.index') }}"> Voltar</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tipo:</strong>
            {{ $coordenacao->tipo_coordenacao }}
        </div>
        <div class="form-group">
            <strong>Portaria de Nomeação:</strong>
            {{ $coordenacao->portaria_nomeacao_coordenacao }}
        </div>
        <div class="form-group">
            <strong>Início do mandato:</strong>
            {{ $coordenacao->inicio_mandato_coordenacao }}
        </div>
        <div class="form-group">
            <strong>Término do mandato:</strong>
            {{ $coordenacao->termino_mandato_coordenacao }}
        </div>
        <div class="form-group">
            <strong>Professor :</strong>
            {{ $coordenacao->professor->nome_professor  }}
        </div>
    </div>
</div>
@endsection