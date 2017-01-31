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
            <h2>Editar sala</h2>
        </div>
        @endsection 
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('sala.index') }}"> Voltar</a>
        </div>
    </div>
</div>
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
{!! Form::model($sala, ['method' => 'PATCH','route' => ['sala.update', $sala->id]]) !!}
<br>
<div class="box box-primary">
    <div class="row">
        <div class="box-body">
            <<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sala:</strong>
                    {!! Form::text('nome_sala', null, array('placeholder' => 'Digite o nome da sala','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Local:</strong>
                    {!! Form::select('fk_local', $locais, null, array('class' => 'form-control')) !!}
                </div>
            </div>
        </div>
        {!! Form::close() !!}

        @endsection

