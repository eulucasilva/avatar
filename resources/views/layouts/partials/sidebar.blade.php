<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <br>
        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/logo_uesb.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
            </div>
        </div>
        @endif

        <!-- search form (Optional) -->
        <!--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>-->
        <!-- /.search form -->
        <br><br>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!--<li class="header">{{ trans('adminlte_lang::message.header') }}</li>-->
            <!-- Optionally, you can add icons to the links -->
            <!--<li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>-->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>INÍCIO</span></a></li>
            <?php /*
              <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>
              <li class="treeview">
              <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
              <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
              </ul>
              </li>
             */ ?> 


            <!--  Teste-->



            @permission('viewTelaAdministradorDoSistema')

            <li class="treeview">
                <a href="#"><i class='fa fa-link' data-toggle="dropdown"></i> <span> GERENCIAR </span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">          
                    <li><a href="{{ route('users.index') }}">USUARIOS</a></li>
                    <li><a href="{{ route('roles.index') }}">ROLES</a></li>
                    <li><a href="{{ route('periodoLetivo.index') }}">PERIODO LETIVO</a></li>
                    <li><a href="{{ route('professor.index') }}">PROFESSOR</a></li>
                    <li><a href="{{ route('aluno.index') }}">ALUNO</a></li>
                    <li><a href="{{ route('coordenacao.index') }}">COORDENAÇÃO</a></li>
                    <li><a href="{{ route('secretario.index') }}">SECRETARIO</a></li>
                    <li><a href="{{ route('colegiado.index') }}">COLEGIADO</a></li>
                    <li><a href="{{ route('area.index') }}">AREA</a></li>
                    <li><a href="{{ route('departamento.index') }}">DEPARTAMENTO</a></li>
                    <li><a href="{{ route('disciplina.index') }}">DISCIPLINA</a></li>
                    <li><a href="{{ route('projeto.index') }}">PROJETO</a></li>
                    <li><a href="{{ route('substituicao.index') }}">SUBSTITUIÇÃO</a></li>
                    <li><a href="{{ route('curso.index') }}">CURSO</a></li>
                    <li><a href="{{ route('atividadeComplementar.index') }}">ATIVIDADE COMPLEMENTAR</a></li>
                    <li><a href="{{ route('atividadePesquisa.index') }}">ATIVIDADE DE PESQUISA</a></li>
                    <li><a href="{{ route('atividadeEnsino.index') }}">ATIVIDADE DE ENSINO</a></li>
                    <li><a href="{{ route('atividadeAdministrativa.index') }}">ATIVIDADE ADMINISRATIVA</a></li>
                    <li><a href="{{ route('atividadeAdministrativaAcd.index') }}">ATVIDADE ADMINISTRATIVA ACÂDEMICA</a></li>
                    <li><a href="{{ route('atividadeProjetoExtensao.index') }}">ATIVIDADE DE PROJETO DE EXTENSÃO</a></li>
                    <li><a href="{{ route('orientacao.index') }}">ORIENTAÇÃO</a></li>
                    <li><a href="{{ route('orientacao_projeto.index') }}">ORIENTAÇÃO DE PROJETO</a></li>
                </ul>
            </li>
            <li><a href="#"><i class='fa fa-link'></i> <span>SOBRE</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>MANUAL</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>LOGS</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>SOLICITAÇÕES</span></a></li>

            @endpermission

            @permission('viewTelaColegiado')

            <li><a href="#"><i class='fa fa-link'></i> <span>SOBRE</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>MANUAL</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link' data-toggle="dropdown"></i> <span> SOLICITAÇÕES </span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu"> 
                    <li><a href="{{ route('solicitacao.index') }}">DISCIPLINA</a></li>
                </ul>
            </li>
            <li><a href="#"><i class='fa fa-link'></i> <span>ACOMPANHAMENTO</span></a></li>

            @endpermission


            @permission('viewTelaProfessor')
            <li><a href="#"><i class='fa fa-link'></i> <span>PIT</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>RIT</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link' data-toggle="dropdown"></i> <span> ATIVIDADES </span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu"> 
                    <li><a href="{{ route('atividadeEnsino.index') }}">ENSINO</a></li>
                    <li><a href="{{ route('atividadeComplementar.index') }}">COMPLEMENTAR</a></li>
                    <li><a href="{{ route('atividadePesquisa.index') }}">PESQUISA</a></li>
                    <li><a href="{{ route('atividadeProjetoExtensao.index') }}">EXTENÇÃO</a></li>
                    <li><a href="{{ route('atividadeAdministrativa.index') }}">ADMINISTRATIVAS</a></li>
                    <li><a href="{{ route('atividadeAdministrativaAcd.index') }}">de ADMINISTRAÇÃO ACADÊMICA</a></li>
                    <li><a href="{{ route('orientacao.index') }}">ORIENTAÇÃO</a></li>
                    <li><a href="{{ route('orientacao_projeto.index') }}">ORIENTAÇÃO DE PROJETO</a></li>
                    <li><a href="#">SINDICAIS</a></li>
                </ul>
            </li>
            <li><a href="#"><i class='fa fa-link'></i> <span>SOBRE</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>MANUAL</span></a></li>

            @endpermission

            @permission('viewTelaArea')
            <li><a href="#"><i class='fa fa-link'></i> <span>CADASTRAR</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>PIT</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>RIT</span></a></li>
            <li><a href="{{ route('turma.index') }}"><i class='fa fa-link'></i>ALOCAR TURMAS</a></li>
            <li><a href="{{ route('substituicao.index') }}"><i class='fa fa-link'></i> <span>REGISTRAR SUBSTITUIÇÃO</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>DISTRIBUIR ATIVIDADES</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>PERFIL</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>ACOMPANHAMENTO</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>SOBRE</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>MANUAL</span></a></li>
            @endpermission


            @permission('viewTelaDepartamento')

            <li><a href="#"><i class='fa fa-link'></i><span>PERFIL</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i><span>PIT</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i><span>RIT</span></a></li>
            <li><a href="{{ route('projeto.index') }}"><i class='fa fa-link'></i><span>PROJETO</span></a></li>
            <li><a href="{{ route('curso.index') }}"><i class='fa fa-link'></i><span>CURSO</span></a></li>
            <li><a href="{{ route('professor.index') }}"><i class='fa fa-link'></i><span>PROFESSORES</span></a></li>
            <li><a href="{{ route('disciplina.index') }}"><i class='fa fa-link'></i><span>DISCIPLINA</span></a></li>       
            <li><a href="#"><i class='fa fa-link'></i><span>SOBRE</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i><span>MANUAL</span></a></li>

            @endpermission

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
