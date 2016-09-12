<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-sare</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" crossorigin="anonymous">
      @yield('css')
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    E-sare
                </a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Início</a></li>
                     <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Gerenciar<span class="caret"></span></a>
                        <ul class="dropdown-menu">
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
                 
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
                        <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span> Registrar</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Sair</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
