@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2> Visualizar reserva de sala</h2>
        </div>
        @endsection
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('reservasala.index') }}"> Voltar</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Sala:</strong>
            {{ $reserva->sala->nome_sala }}
        </div>
        <div class="form-group">
            <strong>Hora de início:</strong>
            {{ $reserva->horaInicio_reserva }}
        </div>
        <div class="form-group">
            <strong>Hora de fim:</strong>
            {{ $reserva->horaFim_reserva }}
        </div>
        <div class="form-group">
            <strong>Dia:</strong>
            {{ $reserva->data_reserva }}
        </div>
    </div>
</div>
@endsection