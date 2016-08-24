@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Mostrar item</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('area.index') }}"> Voltar</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome:</strong>
            {{ $area->nome }}
        </div>
    </div>
</div>
@endsection