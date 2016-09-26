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
            <h2>Criar Novo Professor</h2>
        </div>
        @endsection
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('professor.index') }}"> Voltar</a>
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
{!! Form::open(array('route' => 'professor.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome:</strong>
            {!! Form::text('nome_professor', null, array('placeholder' => 'Digite o nome do professor','class' => 'form-control','style'=>'height:30px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Matricula:</strong>
            {!! Form::text('matricula_professor', null, array('placeholder' => 'Digite a matrícula do professor','class' => 'form-control', 'style'=>'height:30px')) !!}

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Situação:</strong>
            {!!Form::select('situacao_professor', array('Atuando' => 'Atuando', 'Afastado' => 'Afastado'),null, array('placeholder'=>'--Selecione--','class' => 'form-control'))!!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Regime de Trabalho:</strong>
           {!!Form::select('regime_trabalho_professor', array('20 horas' => '20 horas', '40 horas' => '40 horas', 'Dedicação Exclusiva'=>'D.E'),null, array('placeholder'=>'--Selecione--','class' => 'form-control'))!!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Carga Horária:</strong>
             {!!Form::select('ch_professor', array('20' => '20 horas', '40' => '40 horas'), null, array('placeholder'=>'--Selecione--','class' => 'form-control'))!!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Inicio Contrato:</strong>
            {!! Form::text('inicio_contrato_professor', null, array('placeholder' => '--Selecione--','class' => 'form-control','style'=>'height:30px' , 'id' => 'dataInicio')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Temino Contrato:</strong>
            {!! Form::text('termino_contrato_professor', null, array('placeholder' => '--Selecione--','class' => 'form-control','style'=>'height:30px' , 'id' => 'dataFim')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Contrato Professor:</strong>
            {!! Form::text('contrato_professor', null, array('placeholder' => 'Digite o número do contrato','class' => 'form-control','style'=>'height:30px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Classe:</strong>
            {!!Form::select('classe_professor', array('Auxiliar' => 'Auxiliar', 'Assistente' => 'Assistente','Adjunto'=>'Adjunto' ,'Titular'=>'Titular', 'Pleno'=>'Pleno'),null, array('placeholder'=>'--Selecione--','class' => 'form-control'))!!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Titulo:</strong>
            {!!Form::select('titulo_professor', array('Graduado(a)' => 'Graduado(a)', 'Especialista' => 'Especialista', 'Mestre'=>'Mestre', 'Doutor(a)'=>'Doutor(a)'), null, array('placeholder'=>'--Selecione--','class' => 'form-control'))!!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email_professor', null, array('placeholder' => 'Digite o e-mail','class' => 'form-control','style'=>'height:40px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Telefone:</strong>
            {!! Form::text('telefone_professor', null, array('placeholder' => 'Digite o telefone','class' => 'form-control','style'=>'height:30px', 'id' => 'telefoneProfessor')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Endereço:</strong>
            {!! Form::text('endereco_professor', null, array('placeholder' => 'Digite o endereço','class' => 'form-control','style'=>'height:30px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Usuario:</strong>
            {!! Form::select('fk_usuario', $usuarios, null, array('placeholder'=>'--Selecione--','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Departamento:</strong>
            {!! Form::select('fk_departamento', $departamento, null, array('placeholder'=>'--Selecione--','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Area:</strong>
            {!! Form::select('fk_area', $area, null, array('placeholder'=>'--Selecione--','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>
{!! Form::close() !!}

<script>



jQuery(function ($) {
    $("#campoAno").mask("9999");
});

jQuery(function ($) {
    $("#telefoneProfessor").mask("(99)99999-9999");
});


$(function ($) {
    $("#dataInicio").datepicker({
        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
        dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
        dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
        monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez']

    });
});

$(function ($) {
    $("#dataFim").datepicker({
        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
        dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
        dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
        monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez']

    });
});

</script> 
@endsection

