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
            <h2>Solicitar turma</h2>
        </div>
        @endsection
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('solicitacao.index') }}"> Voltar</a>
        </div>
    </div>
</div>
@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<br>
<div class="box box-primary">
    {!! Form::open(array('route' => 'solicitacao.store','method'=>'POST')) !!}
    <div class="row">
        <div class="box-body">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Colegiado</strong>
                    {!! Form::select('fk_colegiado', $colegiados, null, array('class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Departamento</strong>
                    {!! Form::select('fk_departamento', $departamentos, 0, array('class' => 'form-control', 'id' => 'departamento')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Área</strong>
                    {!! Form::select('fk_area', $areas, null, array('class' => 'form-control', 'id' => 'area')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Período letivo</strong>
                    {!! Form::select('fk_periodo_letivo', $periodo_letivos, null, array('class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Curso</strong>
                    {!! Form::select('fk_curso', $cursos, null, array('class' => 'form-control')) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Disciplina</strong>
                    {!! Form::select('fk_disciplina', $disciplinas, null, array('class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Crédito prático</strong>
                    {!! Form::number('creditacao_pratica', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Crédito teórico</strong>
                    {!! Form::number('creditacao_teorica', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Crédito de estágio</strong>
                    {!! Form::number('creditacao_estagio', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantidade de turmas práticas:</strong>
                    {!! Form::number('quant_pratica_solicitada', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantidade de alunos previstos para a turma prática:</strong>
                    {!! Form::number('quant_aluno_pratica', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantidade de turmas teóricas:</strong>
                    {!! Form::number('quant_teorica_solicitada', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantidade de alunos previstos para a turma teórica:</strong>
                    {!! Form::number('quant_aluno_teorica', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantidade de turmas de estágio:</strong>
                    {!! Form::number('quant_estagio_solicitada', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantidade de alunos previstos para a turma de estágio:</strong>
                    {!! Form::number('quant_aluno_estagio', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
                </div>
            </div>  
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrição da Solicitação:</strong>
                    {!! Form::textarea('observacoes_colegiado', null, array('placeholder' => 'Informe a descrição da solicitação','class' => 'form-control','style'=>'height:30px')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

<script>

$(document).ready(function ()
{
    $('#departamento').change(function ()
    {
        $.get("{{ url('dropdown')}}",
                {
                    option: $(this).val()
                },
                function (data)
                {
                    $('#area').empty();
                    $.each(data, function (key, element)
                    {
                        $('#area').append("<option value='" + key + "'>" + element + "</option>");
                    });
                });
    });
});


$(function ($)
{
    $("#dataInicio").datepicker
            (
                    {
                        dateFormat: 'dd/mm/yy',
                        dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
                        dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
                        dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
                        monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                        monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez']
                    }
            );
});
$(function ($)
{
    $("#dataFim").datepicker
            (
                    {
                        dateFormat: 'dd/mm/yy',
                        dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
                        dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
                        dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
                        monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                        monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez']
                    }
            );
});
</script> 
@endsection