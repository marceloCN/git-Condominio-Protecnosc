<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('/DashboardTemplate/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('/DashboardTemplate/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('/DashboardTemplate/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ asset('/DashboardTemplate/plugins/morrisjs/morris.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('/DashboardTemplate/css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('/DashboardTemplate/css/themes/all-themes.css') }}" rel="stylesheet" />



    @yield('estilo')

</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>

        <form action="{{ route('buscar') }}" method='GET'>
            <input type="text" name="busqueda" placeholder="Ingrese su palabra a buscar...">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </form>


        {{-- <input type="text" placeholder="Ingrese su palabra a buscar...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div> --}}
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">CONDOMINIO - PROTECNOSC</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i
                                class="material-icons">search</i></a>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">COMUNICADOS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>



                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar"
                            data-close="true"><i class="material-icons">more_vert</i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ auth()->user()->usuario->u_nom }} {{ auth()->user()->usuario->u_app }} </div>
                    <div class="email">{{ auth()->user()->usuario->acceso->a_acc }}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{ route('usuario.perfil') }}"><i
                                        class="material-icons">person</i>Perfil</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}" class="dropdown-item"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="material-icons">input</i>Salir
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU DE NAVEGACION</li>
                    @if (Request::path() == 'login')
                        <li class="active">
                            <a href="{{ route('usuario.ingresar') }}">
                                <i class="material-icons">home</i>
                                <span>Home</span>
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('usuario.ingresar') }}">
                                <i class="material-icons">home</i>
                                <span>Home</span>
                            </a>
                        </li>
                    @endif

                    @if (Request::path() == 'usuario-listar' || Request::path() == 'acceso-listar' || Request::path() == 'usuario-listar-inquilinos' || Request::path() == 'registrar-usuario')
                        <li class="active">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">widgets</i>
                                <span>Gestionar Usuario</span>
                            </a>
                            <ul class="ml-menu">
                                @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR')
                                    @if (Request::path() == 'registrar-usuario')
                                        <li class="active">
                                            <a href="{{ route('usuario.registrar') }}">Registrar</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('usuario.registrar') }}">Registrar</a>
                                        </li>
                                    @endif
                                @endif
                                @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR' || auth()->user()->usuario->rol->r_tipo == 'COMITE')
                                    @if (Request::path() == 'usuario-listar')
                                        <li class="active">
                                            <a href="{{ route('usuario.listar') }}">Listar Usuario</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('usuario.listar') }}">Listar Usuario</a>
                                        </li>
                                    @endif
                                @endif
                                @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR')
                                    @if (Request::path() == 'acceso-listar')
                                        <li class="active">
                                            <a href="{{ route('acceso.listar') }}">Listar Login Accesos</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('acceso.listar') }}">Listar Login Accesos</a>
                                        </li>
                                    @endif
                                @endif
                                @if (auth()->user()->usuario->rol->r_tipo == 'COMITE' || (auth()->user()->usuario->rol->r_tipo == 'PROPIETARIO' && auth()->user()->usuario->rol->r_cargo == 'DUEÑO'))
                                    @if (Request::path() == 'usuario-listar-inquilinos')
                                        <li class="active">
                                            <a href="{{ route('usuario.listar.inquilinos') }}">Listar tus
                                                inquilinos</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('usuario.listar.inquilinos') }}">Listar tus
                                                inquilinos</a>
                                        </li>
                                    @endif
                                @endif
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">widgets</i>
                                <span>Gestionar Usuario</span>
                            </a>
                            <ul class="ml-menu">
                                @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR')
                                    <li>
                                        <a href="{{ route('usuario.registrar') }}">Registrar</a>
                                    </li>
                                @endif
                                @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR' || auth()->user()->usuario->rol->r_tipo == 'COMITE')
                                    <li>
                                        <a href="{{ route('usuario.listar') }}">Listar Usuario</a>
                                    </li>
                                @endif
                                @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR')
                                    <li>
                                        <a href="{{ route('acceso.listar') }}">Listar Login Accesos</a>
                                    </li>
                                @endif
                                @if (auth()->user()->usuario->rol->r_tipo == 'COMITE' || (auth()->user()->usuario->rol->r_tipo == 'PROPIETARIO' && auth()->user()->usuario->rol->r_cargo == 'DUEÑO'))
                                    <li>
                                        <a href="{{ route('usuario.listar.inquilinos') }}">Listar tus inquilinos</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @endif

                    @if (Request::path() == 'registrar-condominio' || Request::path() == 'listar-condominio')
                        <li class="active">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">swap_calls</i>
                                <span>Gestionar Condominio</span>
                            </a>
                            <ul class="ml-menu">
                                @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR')
                                    @if (Request::path() == 'registrar-condominio')
                                        <li class="active">
                                            <a href="{{ route('condominio.registrar') }}">Registrar</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('condominio.registrar') }}">Registrar</a>
                                        </li>
                                    @endif
                                @endif
                                @if (Request::path() == 'listar-condominio')
                                    <li class="active">
                                        <a href="{{ route('condominio.listar') }}">Listar</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('condominio.listar') }}">Listar</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">swap_calls</i>
                                <span>Gestionar Condominio</span>
                            </a>
                            <ul class="ml-menu">
                                @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR')
                                    <li>
                                        <a href="{{ route('condominio.registrar') }}">Registrar</a>
                                    </li>
                                @endif

                                <li>
                                    <a href="{{ route('condominio.listar') }}">Listar</a>
                                </li>
                            </ul>
                        </li>
                    @endif


                    @if (Request::path() == 'registrar-area-comun' || Request::path() == 'listar-area-comun' || Request::path() == 'registrar-reserva' || Request::path() == 'listar-reserva' || Request::path() == 'registrar-casa' || Request::path() == 'listar-casa')
                        <li class="active">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">assignment</i>
                                <span>Gestionar casas y Areas Comunes</span>
                            </a>
                            <ul class="ml-menu">
                                @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR')
                                    @if (Request::path() == 'registrar-area-comun')
                                        <li class="active">
                                            <a href="{{ route('manzana.registrar') }}">Registrar Area Comun</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('manzana.registrar') }}">Registrar Area Comun</a>
                                        </li>
                                    @endif
                                @endif

                                @if (Request::path() == 'listar-area-comun')
                                    <li class="active">
                                        <a href="{{ route('manzana.listar') }}">Listar Area Comun</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('manzana.listar') }}">Listar Area Comun</a>
                                    </li>
                                @endif

                                @if (Request::path() == 'registrar-reserva')
                                    <li class="active">
                                        <a href="{{ route('reserva.registrar') }}">Registrar una reserva</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('reserva.registrar') }}">Registrar una reserva</a>
                                    </li>
                                @endif

                                @if (Request::path() == 'listar-reserva')
                                    <li class="active">
                                        <a href="{{ route('reserva.listar') }}">Listar reservas</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('reserva.listar') }}">Listar reservas</a>
                                    </li>
                                @endif
                                @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR' || auth()->user()->usuario->rol->r_tipo == 'COMITE')
                                    @if (Request::path() == 'registrar-casa')
                                        <li class="active">
                                            <a href="{{ route('casa.registrar') }}">Añadir una casa (terreno)</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('casa.registrar') }}">Añadir una casa (terreno)</a>
                                        </li>
                                    @endif
                                    @if (Request::path() == 'listar-casa')
                                        <li class="active">
                                            <a href="{{ route('casa.listar') }}">Listar todas las casas</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('casa.listar') }}">Listar todas las casas</a>
                                        </li>
                                    @endif


                                @endif


                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">assignment</i>
                                <span>Gestionar casas y Areas Comunes</span>
                            </a>
                            <ul class="ml-menu">
                                @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR')
                                    <li>
                                        <a href="{{ route('manzana.registrar') }}">Registrar Area Comun</a>
                                    </li>
                                @endif
                                <li>
                                    <a href="{{ route('manzana.listar') }}">Listar Area Comun</a>
                                </li>
                                <li>
                                    <a href="{{ route('reserva.registrar') }}">Registrar una reserva</a>
                                </li>
                                <li>
                                    <a href="{{ route('reserva.listar') }}">Listar reserva</a>
                                </li>
                                @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR' || auth()->user()->usuario->rol->r_tipo == 'COMITE')
                                    <li>
                                        <a href="{{ route('casa.registrar') }}">Añadir una casa (terreno)</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('casa.listar') }}">Listar todas las casas</a>
                                    </li>
                                @endif


                            </ul>
                        </li>
                    @endif

                    @if (Request::path() == 'registrar-comunicado' || Request::path() == 'listar-comunicado' || Request::path() == 'registrar-acta')
                        <li class="active">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">view_list</i>
                                <span>Gestionar Comunicados</span>
                            </a>
                            <ul class="ml-menu">
                                @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR' || auth()->user()->usuario->rol->r_tipo == 'COMITE')
                                    @if (Request::path() == 'registrar-comunicado')
                                        <li class="active">
                                            <a href="{{ route('comunicado.registrar') }}">Crear Comunicado</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('comunicado.registrar') }}">Crear Comunicado</a>
                                        </li>
                                    @endif
                                @endif
                                @if (Request::path() == 'listar-comunicado')
                                    <li class="active">
                                        <a href="{{ route('comunicado.listar') }}">Listar todos los comunicados</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('comunicado.listar') }}">Listar todos los comunicados</a>
                                    </li>
                                @endif
                                @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR' || auth()->user()->usuario->rol->r_tipo == 'COMITE')
                                    @if (Request::path() == 'registrar-acta')
                                        <li class="active">
                                            <a href="{{ route('acta.registrar') }}">Añadir acta</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('acta.registrar') }}">Añadir acta</a>
                                        </li>
                                    @endif
                                @endif

                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">view_list</i>
                                <span>Gestionar Comunicados</span>
                            </a>
                            <ul class="ml-menu">
                                @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR' || auth()->user()->usuario->rol->r_tipo == 'COMITE')
                                    <li>
                                        <a href="{{ route('comunicado.registrar') }}">Crear Comunicado</a>
                                    </li>
                                @endif
                                <li>
                                    <a href="{{ route('comunicado.listar') }}">Listar todos los comunicados</a>
                                </li>
                                @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR' || auth()->user()->usuario->rol->r_tipo == 'COMITE')
                                    <li>
                                        <a href="{{ route('acta.registrar') }}">Añadir acta</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @endif

                    @if (Request::path() == 'registrar-mensaje' || Request::path() == 'listar-mensaje' || Request::path() == 'listar-mensaje-usuario')
                        <li class="active">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">perm_media</i>
                                <span>Gestionar Mensajes</span>
                            </a>
                            <ul class="ml-menu">
                                @if (Request::path() == 'registrar-mensaje')
                                    <li class="active">
                                        <a href="{{ route('mensaje.registrar') }}">Crear Mensaje</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('mensaje.registrar') }}">Crear Mensaje</a>
                                    </li>
                                @endif

                                @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR' || auth()->user()->usuario->rol->r_tipo == 'COMITE')
                                    @if (Request::path() == 'listar-mensaje')
                                        <li class="active">
                                            <a href="{{ route('listar.mensaje') }}">Listar todos los mensajes</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('listar.mensaje') }}">Listar todos los mensajes</a>
                                        </li>
                                    @endif
                                @endif
                                @if (Request::path() == 'listar-mensaje-usuario')
                                    <li class="active">
                                        <a href="{{ route('listar.mensaje.usuario') }}">Listar tus mensajes</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('listar.mensaje.usuario') }}">Listar tus mensajes</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">perm_media</i>
                                <span>Gestionar Mensajes</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="{{ route('mensaje.registrar') }}">Crear Mensaje</a>
                                </li>
                                @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR' || auth()->user()->usuario->rol->r_tipo == 'COMITE')
                                    <li>
                                        <a href="{{ route('listar.mensaje') }}">Listar todos los mensajes</a>
                                    </li>
                                @endif
                                <li>
                                    <a href="{{ route('listar.mensaje.usuario') }}">Listar tus mensajes</a>
                                </li>
                            </ul>
                        </li>
                    @endif

                    @if (Request::path() == 'registrar-servicio' || Request::path() == 'listar-servicio' || Request::path() == 'listar-servicio-alta' || Request::path() == 'listar-servicio-baja')
                        <li class="active">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">pie_chart</i>
                                <span>Gestionar Servicios</span>
                            </a>
                            <ul class="ml-menu">
                                @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR')
                                    @if (Request::path() == 'registrar-servicio')
                                        <li class="active">
                                            <a href="{{ route('servicio.registrar') }}">Registrar Servicio</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('servicio.registrar') }}">Registrar Servicio</a>
                                        </li>
                                    @endif
                                    @if (Request::path() == 'listar-servicio')
                                        <li class="active">
                                            <a href="{{ route('servicio.listar') }}">Listar todos los Servicio</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('servicio.listar') }}">Listar todos los Servicio</a>
                                        </li>
                                    @endif
                                    @if (Request::path() == 'listar-servicio-alta')
                                        <li class="active">
                                            <a href="{{ route('servicio.listar.alta') }}">Listar Servicio Activos</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('servicio.listar.alta') }}">Listar Servicio Activos</a>
                                        </li>
                                    @endif
                                    @if (Request::path() == 'listar-servicio-baja')
                                        <li class="active">
                                            <a href="{{ route('servicio.listar.baja') }}">Listar Servicio
                                                Desactivos</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('servicio.listar.baja') }}">Listar Servicio
                                                Desactivos</a>
                                        </li>
                                    @endif
                                @endif
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">pie_chart</i>
                                <span>Gestionar Servicios</span>
                            </a>
                            <ul class="ml-menu">
                                @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR')
                                    <li>
                                        <a href="{{ route('servicio.registrar') }}">Registrar Servicio</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('servicio.listar') }}">Listar todos los Servicio</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('servicio.listar.alta') }}">Listar Servicio Activos</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('servicio.listar.baja') }}">Listar Servicio Desactivos</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @endif

                    @if (Request::path() == 'listar-servicio-usuario-todo' || Request::path() == 'listar-servicio-usuario-pagado')
                        <li class="active">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">content_copy</i>
                                <span>Gestionar Pagos</span>
                            </a>
                            <ul class="ml-menu">
                                @if (auth()->user()->usuario->rol->r_tipo == 'COMITE' || auth()->user()->usuario->rol->r_tipo == 'PROPIETARIO')
                                    @if (Request::path() == 'listar-servicio-usuario-todo')
                                        <li class="active">
                                            <a href="{{ route('pagos.listar') }}">Listar todos tus Servicios</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('pagos.listar') }}">Listar todos tus Servicios</a>
                                        </li>
                                    @endif

                                    @if (Request::path() == 'listar-servicio-usuario-pagado')
                                        <li class="active">
                                            <a href="{{ route('pagos.listar.pagados') }}">Listar tus servicios
                                                pagados</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('pagos.listar.pagados') }}">Listar tus servicios
                                                pagados</a>
                                        </li>
                                    @endif
                                @endif
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">content_copy</i>
                                <span>Gestionar Pagos</span>
                            </a>
                            <ul class="ml-menu">
                                @if (auth()->user()->usuario->rol->r_tipo == 'COMITE' || auth()->user()->usuario->rol->r_tipo == 'PROPIETARIO')
                                    <li>
                                        <a href="{{ route('pagos.listar') }}">Listar todos tus Servicios</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pagos.listar.pagados') }}">Listar tus servicios
                                            pagados</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @endif

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">map</i>
                            <span>Gestionar Reportes y estadisticas</span>
                        </a>
                        <ul class="ml-menu">
                            @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR')
                                <li>
                                    <a href="pages/maps/google.html">Google Map</a>
                                </li>
                                <li>
                                    <a href="pages/maps/yandex.html">YandexMap</a>
                                </li>
                                <li>
                                    <a href="pages/maps/jvectormap.html">jVectorMap</a>
                                </li>
                            @endif
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">trending_down</i>
                            <span>mas Temas</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#" rel="cosmo">Modo dia</a>
                            </li>
                            <li>
                                <a href="#" rel="cyborg">Modo noche</a>
                            </li>
                            <li>
                                <a rel="lux">Adultos</a>
                            </li>
                            <li>
                                <a rel="simplex">Jovenes</a>
                            </li>
                            <li>
                                <a href="#" rel="sketchy">Niño</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2022 <a href="javascript:void(0);">Condominio - Protecnosc</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">Temas</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>

            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">

            @yield('contenido')

            <div class="block-header">
                <h2>Area de Trabajo</h2>
            </div>

            {{-- esta parte yo adicione --}}
            <div class="block-header">
                <h2>Bienvenido usuario: {{ auth()->user()->usuario->u_nom }} {{ auth()->user()->usuario->u_app }}
                </h2>
            </div>

            @yield('content')




        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="{{ asset('/DashboardTemplate/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('/DashboardTemplate/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ asset('/DashboardTemplate/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('/DashboardTemplate/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('/DashboardTemplate/plugins/node-waves/waves.js') }}"></script>


    <!-- Custom Js -->
    <script src="{{ asset('/DashboardTemplate/js/admin.js') }}"></script>


    <!-- Demo Js -->
    <script src="{{ asset('/DashboardTemplate/js/demo.js') }}"></script>



    @yield('script')
</body>

</html>
