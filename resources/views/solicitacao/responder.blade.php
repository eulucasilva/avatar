
@extends('layouts.app')

<script src = "{{ asset('js/jquery-3.1.0.js') }}" type = "text/javascript" ></script>
<script src = "{{ asset('js/jquery.maskedinput.js') }}" type = "text/javascript" ></script>
<script src = "{{ asset('js/jquery-ui-1.12.0/jquery-ui.js') }}" type = "text/javascript" ></script>
<link href="{{ asset('js/jquery-ui-themes-1.12.0/themes/base/jquery-ui.css') }}" rel="stylesheet">

@section('main-content')
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Responder Solicitação</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('solicitacao.index') }}"> Voltar</a>
                </div>
            </div>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Existe alguns problemas com os dados informados.<br><br>
                <ul>
                	@foreach ($errors->all() as $error)
                		<li>{{ $error }}</li>
                	@endforeach
                </ul>
            </div>
        @endif
        {!! Form::model($solicitacaos, ['method' => 'PATCH','route' => ['solicitacao.gravarResposta', $solicitacaos->id]]) !!}
            <div class="row">    

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status:</strong>
                        {!!Form::select('status_solicitacao', array('Pendente' => 'Pendente', 'Aprovada' => 'Aprovada', 'Corrigir' => 'Corrigir', 'Recusada' => 'Recusada', 'Concluida' => 'Concluida'),  null, array('class' => 'form-control'))!!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Data do Resultado</strong>
                        {!! Form::text('data_resultado', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px' , 'id' => 'dataResultado')) !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Quantidade Prática Aprovada</strong>
                        {!! Form::number('quant_pratica_aprovada', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Quantidade Teórica Aprovada</strong>
                        {!! Form::number('quant_teorica_aprovada', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Quantidade Estágio Aprovada</strong>
                        {!! Form::number('quant_estagio_aprovada', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
                    </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Observações da Área:</strong>
                        {!! Form::textarea('observacoes_departamento', null, array('placeholder' => 'Se necessário, faça observações sobre a decisão da área.','class' => 'form-control','style'=>'height:30px')) !!}
                    </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                	<button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        {!! Form::close() !!}

        <script>
            jQuery
            (
                function($)
                {
                       $("#campoPeriodo").mask("9999.9");
                }
            );

            jQuery
            (
                function($)
                {
                       $("#campoAno").mask("9999");
                }
            );

            $
            (
                function($)
                {
                    $("#dataInicio").datepicker
                    (
                        {
                            dateFormat: 'dd/mm/yy',
                            dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
                            dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                            dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                            monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                            monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
                        }
                    );
                }
            );
            $
            (
                function($)
                {
                    $("#dataResultado").datepicker
                    (
                        {
                            dateFormat: 'dd/mm/yy',
                            dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
                            dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                            dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                            monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                            monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
                        }
                    );
                }
            );
        </script> 
@endsection
