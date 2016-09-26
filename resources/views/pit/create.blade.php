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
	            <h2>Criar Novo Pit</h2>
	        </div>
            @endsection 
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('pit.index') }}"> Voltar</a>
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
	{!! Form::open(array('route' => 'pit.store','method'=>'POST')) !!}

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Professor:</strong>
                {!! Form::select('fk_professor', $professores, null, array('class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Periodo Letivo:</strong>
                {!! Form::select('fk_periodo_letivo',  $periodoLetivo, null, array('class' => 'form-control'))!!}
            </div>
        </div>
        <h4  style=" color: #0086b3;"> Atividades de Ensino</h4>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <table>
                    <tr>
                        <td style="text-align: right;"><strong>Aulas de graduação (semanal): </strong></td>
                        <td>{!! Form::text('campo1', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo1')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>Aulas de pós-graduação Lato Sensu (semanal): </strong></td>
                        <td>{!! Form::text('campo2', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo2')) !!}</td>
                    </tr>
                        
                    <tr>
                        <td style="text-align: right;"><strong>Aulas de pós-graduação Stricto Sensu (semanal):</strong>
                        <td>{!! Form::text('campo3', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo3')) !!}</td>
                    </tr>
                    
                    <tr>
                        <td style="text-align: right;"><strong>TOTAL</strong></td>
                        <td>{!! Form::text('campo4', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo4')) !!}</td>
                    </tr>
                </table>
            </div>
        </div>
        
        <h4 style=" color: #0086b3;"> Atividades Sindicais</h4>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <table>
                    <tr>
                        <td style="text-align: right;"><strong>Presidência da ADUSB (máx. 40h) </strong></td>
                        <td>{!! Form::text('campo5', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo5')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>Vice-presidente da ADUSB (máx. 20h) </strong></td>
                        <td>{!! Form::text('campo6', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo6')) !!}</td>
                    </tr>
                        
                    <tr>
                        <td style="text-align: right;"><strong>Demais membros da Diretoria da ADUSB (máx. 5h)</strong>
                        <td>{!! Form::text('campo7', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo7')) !!}</td>
                    </tr>
                    
                    <tr>
                        <td style="text-align: right;"><strong>TOTAL</strong></td>
                        <td>{!! Form::text('campo8', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo8')) !!}</td>
                    </tr>
                </table>
            </div>
        </div>
        
        <h4 style=" color: #0086b3;">Atividades de Administração</h4>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <table>
                    <tr>
                        <td style="text-align: right;"><strong>Vice de Departamento/Colegiado (máx. 2h)</strong></td>
                        <td>{!! Form::text('campo9', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo9')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>Coordenação de Colegiado, Gerencia e Subgerências (máx. 50% da CH)</strong></td>
                        <td>{!! Form::text('campo10', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo10')) !!}</td>
                    </tr>
                        
                    <tr>
                        <td style="text-align: right;"><strong>Pró-reitoria, Prefeitura de Campus e Direção de Departamento (máx. 40h):</strong>
                        <td>{!! Form::text('campo11', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo11')) !!}</td>
                    </tr>
                    
                    <tr>
                        <td style="text-align: right;"><strong>TOTAL</strong></td>
                        <td>{!! Form::text('campo12', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo12')) !!}</td>
                    </tr>
                </table>
            </div>
        </div>
        
        
        <h4 style=" color: #0086b3;">Atividades de Administração Acadêmica </h4>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <table>
                    <tr>
                        <td style="text-align: right;"><strong>Coordenação de área (máx. 2h) </strong></td>
                        <td>{!! Form::text('campo13', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo3')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>Coordenação de Núcleos (máx. 4h)</strong></td>
                        <td>{!! Form::text('campo14', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo14')) !!}</td>
                    </tr>
                        
                    <tr>
                        <td style="text-align: right;"><strong>Coordenação de órgãos Suplementares (máx. 10h))</strong>
                        <td>{!! Form::text('campo15', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo15')) !!}</td>
                    </tr>
                    
                    <tr>
                        <td style="text-align: right;"><strong>Participação em Projetos de Publicações Científicas (máx. 5h)</strong>
                        <td>{!! Form::text('campo16', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo16')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>Coordenação de Laboratórios e Setor Agropecuário (máx. 6h) </strong>
                        <td>{!! Form::text('campo17', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo17')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>Coordenação de Área de Educação Física (máx. 20h) </strong>
                        <td>{!! Form::text('campo18', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo18')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>Reuniões de Área (máx. 2h) </strong>
                        <td>{!! Form::text('campo19', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo19')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>Reuniões de Comitês (máx. 2h) </strong>
                        <td>{!! Form::text('campo20', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo20')) !!}</td>
                    </tr>
                    
                    <tr>
                        <td style="text-align: right;"><strong>Reuniões de Departamento (máx. 2h)</strong>
                        <td>{!! Form::text('campo21', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo21')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>Reunião de Colegiado do Curso (máx. 2h) </strong>
                        <td>{!! Form::text('campo22', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo22')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>Reuniões em Comissões indicadas pelo Departamento(máx. 2h) </strong>
                        <td>{!! Form::text('campo23', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo23')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>Reuniões em Comitês de ética em Pesquisa(máx. 6h) </strong>
                        <td>{!! Form::text('campo24', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo24')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>TOTAL</strong></td>
                        <td>{!! Form::text('campo25', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo25')) !!}</td>
                    </tr>
                </table>
            </div>
        </div>
        
        
        <h4 style=" color: #0086b3;"> Atividades de Pesquisa </h4> 
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <table>
                    <tr>
                        <td style="text-align: right;"><strong>Coordenação de Projetos (máx. 8h) </strong></td>
                        <td>{!! Form::text('campo26', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo26')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>Participação/Colaboração em Projetos (máx. 4h) </strong></td>
                        <td>{!! Form::text('campo27', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo27')) !!}</td>
                    </tr>
                        
                    <tr>
                        <td style="text-align: right;"><strong>Acompanhamento de estudantes bolsistas e não bolsistas integrados aos Projetos </strong>
                        <td>{!! Form::text('campo28', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo28')) !!}</td>
                    </tr>
                    
                    <tr>
                        <td style="text-align: right;"><strong>TOTAL</strong></td>
                        <td>{!! Form::text('campo29', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo29')) !!}</td>
                    </tr>
                </table>
            </div>
        </div>
        
        
        <h4 style=" color: #0086b3;"> Eventos Esporádicos </h4> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <table>
                    <tr>
                        <td style="text-align: right;"><strong>Coordenação (100%  da CH, dividida no semestre) </strong></td>
                        <td>{!! Form::text('campo30', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo30')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>Colaboração (50% da CH, dividida no semestre)</strong></td>
                        <td>{!! Form::text('campo31', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo31')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>TOTAL</strong></td>
                        <td>{!! Form::text('campo32', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo32')) !!}</td>
                    </tr>
                </table>
            </div>
        </div>
        
        
        <h4 style=" color: #0086b3;"> Extensão Continuada  </h4> 
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <table>
                    <tr>
                        <td style="text-align: right;"><strong>Coordenação de Projetos (máx. 6h)</strong></td>
                        <td>{!! Form::text('campo33', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo33')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>Participação/Colaboração em Projetos (máx. 3h)</strong></td>
                        <td>{!! Form::text('campo34', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo34')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>TOTAL</strong></td>
                        <td>{!! Form::text('campo35', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo35')) !!}</td>
                    </tr>
                </table>
            </div>
        </div>
        
        <h4 style=" color: #0086b3;">  Lato/Stricto Sensu  </h4> 
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <table>
                    <tr>
                        <td style="text-align: right;"><strong>Afastamento para cursa Lato Sensu (máx. 8h) </strong></td>
                        <td>{!! Form::text('campo36', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo36')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>Afastamento para cursar Stricto Sensu (até 50% da CH)</strong></td>
                        <td>{!! Form::text('campo37', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo37')) !!}</td>
                    </tr>
                        
                    <tr>
                        <td style="text-align: right;"><strong>Coordenação de curso de Lato (máx. 6h) </strong>
                        <td>{!! Form::text('campo38', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo38')) !!}</td>
                    </tr>
                    
                    <tr>
                        <td style="text-align: right;"><strong>TOTAL</strong></td>
                        <td>{!! Form::text('campo39', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo39')) !!}</td>
                    </tr>
                </table>
            </div>
        </div>
        
        <h4 style=" color: #0086b3;">  Orientação de Aluno  </h4> 
        
        
        
        <h4 style=" color: #0086b3;"> Justificativa  </h4> 

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <table>
                    <tr>
                        <td style="text-align: right;"><strong>Monografia de final de curso na graduação (máx. 1h)</strong></td>
                        <td>{!! Form::text('campo40', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo40')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>Monografia de final de curso na prós-graduação (máx. 2h) </strong></td>
                        <td>{!! Form::text('campo41', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo41')) !!}</td>
                    </tr>
                        
                    <tr>
                        <td style="text-align: right;"><strong>Monitoria (máx. 2h)</strong>
                        <td>{!! Form::text('campo42', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo42')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>Monitoria (máx. 2h) </strong>
                        <td>{!! Form::text('campo43', null, array('placeholder' => '','class' => 'form-conttor','style'=>'height:30px; width:40px;', 'id' => 'campo43')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>Dissertação/Tese (máx. 2h)</strong>
                        <td>{!! Form::text('campo44', null, array('placeholder' => '','class' => 'form-conttor','style'=>'height:30px; width:40px;', 'id' => 'campo44')) !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><strong>TOTAL</strong>
                        <td>{!! Form::text('campo45', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px; width:40px;', 'id' => 'campo45')) !!}</td>
                    </tr>
                   
                </table>
            </div>
        </div>  
        
        <h4 style=" color: #0086b3;"> Justificativa  </h4> 

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <table>
                    <tr>
                        <td style="text-align: right;"><strong>Observação</strong></td>
                        <td>{!! Form::text('campo46', null, array('placeholder' => '','class' => 'form-control','style'=>'height:60px; width:200px;', 'id' => 'campo40')) !!}</td>
                    </tr>
                </table>
            </div>
        </div>
        
        <!--<B>TOTAL.....................{!! Form::text('campo44', null, array('placeholder' => '','class' => 'form-conttor','style'=>'height:30px; width:40px;', 'id' => 'campo44')) !!}</b>
-->
        
        
        
        
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Salvar</button>
        </div>
</div>
</div>
</div>
	{!! Form::close() !!}
@endsection

