<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">

    <title>Mano de Obra | DaAnJu</title>

    <link rel="apple-touch-icon" href="../../img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../../img/Logo.png">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="../../css/site.min.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="../../global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="../../global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../../global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="../../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../../global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="../../global/vendor/waves/waves.css">


    <!-- Fonts -->
    <link rel="stylesheet" href="../../global/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="../../global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="../../global/vendor/breakpoints/breakpoints.js"></script>
    <script>
        Breakpoints();
    </script>
</head>

<body class="animsition site-menubar-disable-hover">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse" role="navigation">

        <div class="navbar-header">
            <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided" data-toggle="menubar">
                <span class="sr-only">Toggle navigation</span>
                <span class="hamburger-bar"></span>
            </button>
            <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
                <i class="icon md-more" aria-hidden="true"></i>
            </button>
            <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
                <img class="navbar-brand-logo" src="img/logo.png" title="DaAnJu Cost System">
                <span class="navbar-brand-text hidden-xs-down"> DaAnJu Cost System</span>
            </div>
            <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search" data-toggle="collapse">
                <span class="sr-only">Toggle Search</span>
                <i class="icon md-search" aria-hidden="true"></i>
            </button>
        </div>

        <div class="navbar-container container-fluid">
            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
                <!-- Navbar Toolbar -->
                <ul class="nav navbar-toolbar">
                    <li class="nav-item hidden-float" id="toggleMenubar">
                        <a class="nav-link" data-toggle="menubar" href="#" role="button">
                            <i class="icon hamburger hamburger-arrow-left">
                                <span class="sr-only">Toggle menubar</span>
                                <span class="hamburger-bar"></span>
                            </i>
                        </a>
                    </li>
                        </div>
                    </li>
                </ul>
                <!-- End Navbar Toolbar -->

                <!-- Navbar Toolbar Right -->
                <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up" aria-expanded="false" role="button">
                            <span class="flag-icon flag-icon-co"></span>
                        </a>
                        <!--
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                                <span class="flag-icon flag-icon-gb"></span> English</a>
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                                <span class="flag-icon flag-icon-fr"></span> French</a>
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                                <span class="flag-icon flag-icon-cn"></span> Chinese</a>
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                                <span class="flag-icon flag-icon-de"></span> German</a>
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                                <span class="flag-icon flag-icon-nl"></span> Dutch</a>
                        </div>
-->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="scale-up" role="button">
                            <span class="avatar avatar-online">
                                <img src="/imagenes/{{ Auth::user()->avatar }}" alt="...">
                                <i></i>
                            </span>
                        </a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="{{url('/perfil')}}" role="menuitem"><i class="icon md-account" aria-hidden="true"></i> Perfil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem" href="{{ route('logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"><i class="icon md-power" aria-hidden="true"></i>Cerrar Sesión</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form></a>
                        </div>
                    </li>
                </ul>
                <!-- End Navbar Toolbar Right -->
                <div class="navbar-brand navbar-brand-center">
                    <a href="{{url('/home')}}">
                        <img class="navbar-brand-logo navbar-brand-logo-normal" src="../img/logo2.png" title="DaAnJu Cost System">
                        <img class="navbar-brand-logo navbar-brand-logo-special" src="../img/logo2.png" title="DaAnJu Cost System">
                    </a>
                </div>
            </div>
            <!-- End Navbar Collapse -->

            <!-- Site Navbar Seach -->
            <div class="collapse navbar-search-overlap" id="site-navbar-search">
                <form role="search">
                    <div class="form-group">
                        <div class="input-search">
                            <i class="input-search-icon md-search" aria-hidden="true"></i>
                            <input type="text" class="form-control" name="site-search" placeholder="Search...">
                            <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search" data-toggle="collapse" aria-label="Close"></button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Site Navbar Seach -->
        </div>
    </nav>
    <div class="site-menubar">
        <div class="site-menubar-header">
            <div class="cover overlay">
                <img class="cover-image" src="../examples/images/dashboard-header.jpg" alt="...">
                <div class="overlay-panel vertical-align overlay-background">
                    <div class="vertical-align-middle">
                        <a class="avatar avatar-lg" href="javascript:void(0)">
                            <img src="/imagenes/{{ Auth::user()->avatar }}" alt="user" alt="">
                        </a>
                        <div class="site-menubar-info">
                            @foreach(Auth::user()->roles as $role)
                            <h5 class="site-menubar-user">{{Auth::user()->name}}</h5>
                            <p class="site-menubar-email">{{ $role->name }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-menubar-body">
            <div>
                <div>
                    <ul class="site-menu" data-plugin="menu">
                        <li class="site-menu-item active">
                            <a class="animsition-link" href="{{url('/home')}}">
                                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Inicio</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{route('panaderia.index')}}">
                                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Registro Panaderia</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{route('user.index')}}">
                                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Gestion de Usuarios</span>
                            </a>
                        </li>
                        @if (Auth::user()->tieneRole('Super Administrador'))
                        <li class="site-menu-item ">
                            <a class="animsition-link" href="{{route('gestion_usuario.index')}}">
                                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Gestion de Empleados</span>
                            </a>
                        </li>
                        @endif
                        <li class="site-menu-item ">
                            <a class="animsition-link" href="{{route('materia_prima.index')}}">
                                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Materia Prima</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{route('mano_de_obra.index')}}">
                                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Mano de Obra</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{route('cifs.index')}}">
                                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Gestión de Cifs</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{route('ficha_tecnica.index')}}">
                                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Ficha Tecnica</span>
                            </a>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Page -->
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Sección para Agregar Mano de Obra en DaAnJu</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Inicio</a></li>
                <li class="breadcrumb-item"><a>Gestion de Mano de Obra</a></li>
                <li class="breadcrumb-item"><a>Agregar</a></li>
            </ol>
        </div>
        <div class="page-content">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"></h3>
                </div>


                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">


                                @if (Auth::user()->tieneRole('Super Administrador'))
                                <form method="POSt" action="{{ route('mano_de_obra.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <h2>Mano de Obra</h2>
                                    </div>


                                    <div class="form-group">
                                        <label for="id" class="control-label">{{'Id'}}</label>
                                        <input type="number" class="form-control" name="id" />
                                    </div>

                                    <div class="form-group">
                                        <label for="tipo_labor" class="control-label">{{'Tipo de labor'}}</label>
                                        <input type="text" class="form-control" name="tipo_labor" />
                                    </div>

                                    <div class="form-group">
                                        <label for="tiempo" class="control-label">{{'Tiempo'}}</label>
                                        <input type="text" class="form-control" name="tiempo" />
                                    </div>

                                    <div class="form-group">
                                        <label for="costo" class="control-label">{{'Costo'}}</label>
                                        <input type="text" class="form-control" name="costo" />
                                    </div>
                                    <br>

                                    <tr>
                                        <button type="submit" class="btn btn-success" name="btnEnviar">Guardar </button />
                                        <a class="btn btn-primary" href="{{ route('mano_de_obra.index') }}">Volver</a><br><br>
                                    </tr>
                                </form>
                                @else
                                <h1>Acción no permitida</h1>
                                @endif

                            </div>
                        </div>
                    </div>



                    <!-- End Page -->

                    <!-- Footer -->
                    <footer class="site-footer">
                        <div class="site-footer-legal">© 2018 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
                        <div class="site-footer-right">
                            Crafted with <i class="red-600 icon md-favorite"></i> by <a href="https://themeforest.net/user/creation-studio">Creation Studio</a>
                        </div>
                    </footer>
                    <!-- Core  -->
                    <script src="../../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
                    <script src="../../global/vendor/jquery/jquery.js"></script>
                    <script src="../../global/vendor/popper-js/umd/popper.min.js"></script>
                    <script src="../../global/vendor/bootstrap/bootstrap.js"></script>
                    <script src="../../global/vendor/animsition/animsition.js"></script>
                    <script src="../../global/vendor/mousewheel/jquery.mousewheel.js"></script>
                    <script src="../../global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
                    <script src="../../global/vendor/asscrollable/jquery-asScrollable.js"></script>
                    <script src="../../global/vendor/waves/waves.js"></script>

                    <!-- Plugins -->
                    <script src="../../global/vendor/switchery/switchery.js"></script>
                    <script src="../../global/vendor/intro-js/intro.js"></script>
                    <script src="../../global/vendor/screenfull/screenfull.js"></script>
                    <script src="../../global/vendor/slidepanel/jquery-slidePanel.js"></script>

                    <!-- Scripts -->
                    <script src="../../global/js/Component.js"></script>
                    <script src="../../global/js/Plugin.js"></script>
                    <script src="../../global/js/Base.js"></script>
                    <script src="../../global/js/Config.js"></script>

                    <script src="../../js/Section/Menubar.js"></script>
                    <script src="../../js/Section/Sidebar.js"></script>
                    <script src="../../js/Section/PageAside.js"></script>
                    <script src="../../js/Plugin/menu.js"></script>

                    <!-- Config -->
                    <script src="../../global/js/config/colors.js"></script>
                    <script src="../../js/config/tour.js"></script>
                    <script>
                        Config.set('assets', '../../assets');
                    </script>

                    <!-- Page -->
                    <script src="../../js/Site.js"></script>
                    <script src="../../global/js/Plugin/asscrollable.js"></script>
                    <script src="../../global/js/Plugin/slidepanel.js"></script>
                    <script src="../../global/js/Plugin/switchery.js"></script>

                    <script>
                        (function(document, window, $) {
                            'use strict';

                            var Site = window.Site;
                            $(document).ready(function() {
                                Site.run();
                            });
                        })(document, window, jQuery);
                    </script>
</body>

</html>