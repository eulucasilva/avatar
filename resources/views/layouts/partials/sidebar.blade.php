<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li>
               @permission('viewTelaAdministradorDoSistema') 
             <li class="treeview">
                        <a href="#"><i class='fa fa-link' data-toggle="dropdown"></i> <span> Gerenciar </span> <i class="fa fa-angle-left pull-right"></i></a>
                         <ul class="treeview-menu">          
                            <li><a href="{{ route('users.index') }}">Usuarios</a></li>
                            <li><a href="{{ route('roles.index') }}">Papeis</a></li>
                            <li><a href="{{ route('itemCRUD2.index') }}">Items</a></li>
                            <li><a href="{{ route('periodoLetivo.index') }}">Periodo Letivo</a></li>
                            <li><a href="{{ route('professor.index') }}">Professor</a></li>
                            <li><a href="{{ route('aluno.index') }}">Aluno</a></li>
                            <li><a href="{{ route('coordenacao.index') }}">Coordenação</a></li>
                            <li><a href="{{ route('secretario.index') }}">Secretario</a></li>
                            <li><a href="{{ route('colegiado.index') }}">Colegiado</a></li>
                            <li><a href="{{ route('area.index') }}">Area</a></li>
                            <li><a href="{{ route('departamento.index') }}">Departamento</a></li>
                            <li><a href="{{ route('disciplina.index') }}">Disciplina</a></li>
                            <li><a href="{{ route('projeto.index') }}">Projeto</a></li>
                            <li><a href="{{ route('substituicao.index') }}">Substitição</a></li>
                            <li><a href="{{ route('curso.index') }}">Curso</a></li>
                            <li><a href="{{ route('atividadeComplementar.index') }}">Atividade Complementar</a></li>
                            <li><a href="{{ route('atividadePesquisa.index') }}">Atividade de Pesquisa</a></li>
                            <li><a href="{{ route('atividadeEnsino.index') }}">Atividade de Ensino</a></li>
                            <li><a href="{{ route('atividadeAdministrativa.index') }}">Atividade Administrativa</a></li>
                            <li><a href="{{ route('atividadeAdministrativaAcd.index') }}">Atividade Administrativa Acadêmica</a></li>
                            <li><a href="{{ route('atividadeProjetoExtensao.index') }}">Atividade de Projeto de Extensão</a></li>
                            <li><a href="{{ route('orientacao.index') }}">Orientação</a></li>
                            <li><a href="{{ route('orientacao_projeto.index') }}">Orientação de Projeto</a></li>
                        </ul>
                      </li>
                         @endpermission

                       @permission('viewTelaSecretarioColegiado') 
                     <li class="treeview">
                                <a href="#"><i class='fa fa-link' data-toggle="dropdown"></i> <span> Colegiado </span> <i class="fa fa-angle-left pull-right"></i></a>
                                 <ul class="treeview-menu">          
                                    <li><a href="{{ route('users.index') }}">Usuarios</a></li>
                                    <li><a href="{{ route('roles.index') }}">Papeis</a></li>
                                    <li><a href="{{ route('itemCRUD2.index') }}">Items</a></li>
                                    <li><a href="{{ route('periodoLetivo.index') }}">Periodo Letivo</a></li>
                         @endpermission
                             </ul>
                       </li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
