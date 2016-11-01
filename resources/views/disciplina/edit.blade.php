
@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Editar disciplina</h2>
        </div>
        @endsection 
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('disciplina.index') }}">Voltar</a>
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
{!! Form::model($disciplina, ['method' => 'PATCH','route' => ['disciplina.update', $disciplina->id]]) !!}
<br>
<div class="box  box-primary">
    <div class="row">
        <div class="box-body">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    {!! Form::text('nome_disciplina', null, array('placeholder' => 'Digite o nome','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Código:</strong>
                    {!! Form::text('codigo_disciplina', null, array('placeholder' => 'Digite o código','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Crédito teórico:</strong>
                    {!! Form::number('creditacao_teorica', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px', 'id' => 'ct')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Crédito prático:</strong>
                    {!! Form::number('creditacao_pratica', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px', 'id' => 'cp')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Crédito de estágio:</strong>
                    {!! Form::number('creditacao_estagio', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px', 'id' => 'ce')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Departamento:</strong>
                    {!! Form::select('fk_departamento',$departamento, null, array('placeholder'=>'--Selecione--','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Área:</strong>
                    {!! Form::select('fk_area',$area, null, array('placeholder'=>'--Selecione--','class' => 'form-control')) !!}
                </div>
            </div>
            {!! Form::hidden('ch_teorica', null, array('class' => 'form-control')) !!}
            {!! Form::hidden('ch_pratica', null, array('class' => 'form-control')) !!}
            {!! Form::hidden('ch_estagio', null, array('class' => 'form-control')) !!}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Carga horária total:</strong>
                    {!! Form::number('ch_total_disciplina', null, array('class' => 'form-control', 'readonly' => 'readonly', 'id' => 'chTotal')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
@endsection

<script>
    function id(el) {
        return document.getElementById(el);
    }
    function total(ct, cp, ce) {
        return (parseInt(ct) * 15) + (parseInt(cp) * 30) + (parseInt(ce) * 45);
    }
    window.onload = function () {
        id('ct').addEventListener('keyup', function () {
            var result = total(this.value, id('cp').value, id('ce').value );
            id('chTotal').value = String(result);
        });
        
        id('cp').addEventListener('keyup', function () {
            var result = total(id('ct').value, this.value, id('ce').value );
            id('chTotal').value = String(result);
        });
        
        id('ce').addEventListener('keyup', function () {
            var result = total(id('ct').value, id('cp').value, this.value );
            id('chTotal').value = String(result);
        });

        
    }

    function calculaChTotal() {
        var cht = parseInt(document.getElementById('ct').value) * 15;
        var chp = parseInt(document.getElementById('cp').value) * 30;
        var che = parseInt(document.getElementById('ce').value) * 45;
        var chTotal = cht + chp + che;

        document.getElementById('chTotal').value = chTotal;
    }


</script>
