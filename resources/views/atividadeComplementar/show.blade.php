@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Mostrar Atividade Complementar</h2>
        </div>
        @endsection
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('atividadeComplementar.index') }}"> Voltar</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Carga Horária:</strong>
            {{ $atividade_complementar->ch_total_atividade_complementar}}
        </div>
        <div class="form-group">
            <strong>Professor:</strong>
            {{ $atividade_complementar->professor->nome_professor}}
        </div>
        <div class="form-group">
            <strong>Período Letivo:</strong>
            {{$atividade_complementar->periodo_letivo->periodo_periodoLetivo}}
        </div>

    </div>
</div>
@endsection