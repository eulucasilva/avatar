<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <br>
        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/icon-user.png')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <br>
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
               <!-- <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>-->
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
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>INÍCIO</span></a></li>
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
                <a href="#"><i class="fa fa-cog" data-toggle="dropdown"></i> <span> GERENCIAR </span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">          
                    <li><a href="{{ route('users.index') }}"><i class="fa fa-users" aria-hidden="true"></i> USUÁRIOS</a></li>
                    <li><a href="{{ route('roles.index') }}"><i class="fa fa-tasks" aria-hidden="true"></i>PAPEIS</a></li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-cog" data-toggle="dropdown"></i> <span>SALA</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('local.index') }}"><i class="fa fa-home" aria-hidden="true"></i>LOCAL</a></li>
                            <li><a href="{{ route('sala.index') }}"><i class="fa fa-home" aria-hidden="true"></i>SALA</a></li>
                            <li><a href="{{ route('reservasala.index') }}"><i class="fa fa-home" aria-hidden="true"></i>RESERVAR SALA</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-cog" data-toggle="dropdown"></i> <span>PROJETO</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('area.index') }}"><i class="fa fa-home" aria-hidden="true"></i>ÁREA DE ATUAÇÃO</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            @endpermission

            @permission('viewTelaCoordenador')
            <li class="treeview">
                <a href="#"><i class='fa fa-link' data-toggle="dropdown"></i> <span> SOLICITAÇÕES </span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu"> 
                    <li><a href="{{ route('solicitacao.index') }}">TURMA</a></li>
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
            @endpermission

            @permission('viewTelaSecretaria')
            <li><a href="#"><i class='fa fa-link'></i> <span>CADASTRAR</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>PIT</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>RIT</span></a></li>
            <li><a href="{{ route('turma.index') }}"><i class='fa fa-link'></i>ALOCAR TURMAS</a></li>
            <li><a href="{{ route('substituicao.index') }}"><i class='fa fa-link'></i> <span>REGISTRAR SUBSTITUIÇÃO</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>DISTRIBUIR ATIVIDADES</span></a></li>
            @endpermission




        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
