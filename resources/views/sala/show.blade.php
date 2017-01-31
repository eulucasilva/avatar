@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2> Visualizar sala</h2>
        </div>
        @endsection
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('sala.index') }}"> Voltar</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Sala:</strong>
            {{ $sala->nome_sala }}
        </div>
        <div class="form-group">
            <strong>Local:</strong>
            {{ $sala->local->nome_local }}
        </div>
    </div>
</div>
@endsection