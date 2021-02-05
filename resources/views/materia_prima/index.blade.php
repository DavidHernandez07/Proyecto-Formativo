<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">

    <title>Materia prima | DaAnJu</title>

    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="shortcut icon" href="img/Logo.png">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="global/css/bootstrap.min.css">
    <link rel="stylesheet" href="global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="css/site.min.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="global/vendor/waves/waves.css">


    <!-- Fonts -->
    <link rel="stylesheet" href="global/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="global/vendor/breakpoints/breakpoints.js"></script>
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
                    <li class="nav-item hidden-sm-down" id="toggleFullscreen">
                        <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                            <span class="sr-only">Toggle fullscreen</span>
                        </a>
                    </li>
                    <li class="nav-item hidden-float">
                        <a class="nav-link icon md-search" data-toggle="collapse" href="#" data-target="#site-navbar-search" role="button">
                            <span class="sr-only">Toggle Search</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown dropdown-fw dropdown-mega">
                        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="fade" role="button">Mega <i class="icon md-chevron-down" aria-hidden="true"></i></a>
                        <div class="dropdown-menu" role="menu">
                            <div class="mega-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5>UI Kit</h5>
                                        <ul class="blocks-2">
                                            <li class="mega-menu m-0">
                                                <ul class="list-icons">
                                                    <li><i class="md-chevron-right" aria-hidden="true"></i><a href="../advanced/animation.html">Animation</a></li>
                                                    <li><i class="md-chevron-right" aria-hidden="true"></i><a href="../uikit/buttons.html">Buttons</a></li>
                                                    <li><i class="md-chevron-right" aria-hidden="true"></i><a href="../uikit/colors.html">Colors</a></li>
                                                    <li><i class="md-chevron-right" aria-hidden="true"></i><a href="../uikit/dropdowns.html">Dropdowns</a></li>
                                                    <li><i class="md-chevron-right" aria-hidden="true"></i><a href="../uikit/icons.html">Icons</a></li>
                                                    <li><i class="md-chevron-right" aria-hidden="true"></i><a href="../advanced/lightbox.html">Lightbox</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu m-0">
                                                <ul class="list-icons">
                                                    <li><i class="md-chevron-right" aria-hidden="true"></i><a href="../uikit/modals.html">Modals</a></li>
                                                    <li><i class="md-chevron-right" aria-hidden="true"></i><a href="../uikit/panel-structure.html">Panels</a></li>
                                                    <li><i class="md-chevron-right" aria-hidden="true"></i><a href="../structure/overlay.html">Overlay</a></li>
                                                    <li><i class="md-chevron-right" aria-hidden="true"></i><a href="../uikit/tooltip-popover.html ">Tooltips</a></li>
                                                    <li><i class="md-chevron-right" aria-hidden="true"></i><a href="../advanced/scrollable.html">Scrollable</a></li>
                                                    <li><i class="md-chevron-right" aria-hidden="true"></i><a href="../uikit/typography.html">Typography</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>Media
                                            <span class="badge badge-pill badge-success">4</span>
                                        </h5>
                                        <ul class="blocks-3">
                                            <li>
                                                <a class="thumbnail m-0" href="javascript:void(0)">
                                                    <img class="w-full" src="../../../global/photos/placeholder.png" alt="..." />
                                                </a>
                                            </li>
                                            <li>
                                                <a class="thumbnail m-0" href="javascript:void(0)">
                                                    <img class="w-full" src="../../../global/photos/placeholder.png" alt="..." />
                                                </a>
                                            </li>
                                            <li>
                                                <a class="thumbnail m-0" href="javascript:void(0)">
                                                    <img class="w-full" src="../../../global/photos/placeholder.png" alt="..." />
                                                </a>
                                            </li>
                                            <li>
                                                <a class="thumbnail m-0" href="javascript:void(0)">
                                                    <img class="w-full" src="../../../global/photos/placeholder.png" alt="..." />
                                                </a>
                                            </li>
                                            <li>
                                                <a class="thumbnail m-0" href="javascript:void(0)">
                                                    <img class="w-full" src="../../../global/photos/placeholder.png" alt="..." />
                                                </a>
                                            </li>
                                            <li>
                                                <a class="thumbnail m-0" href="javascript:void(0)">
                                                    <img class="w-full" src="../../../global/photos/placeholder.png" alt="..." />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="mb-0">Accordion</h5>
                                        <!-- Accordion -->
                                        <div class="panel-group panel-group-simple" id="siteMegaAccordion" aria-multiselectable="true" role="tablist">
                                            <div class="panel">
                                                <div class="panel-heading" id="siteMegaAccordionHeadingOne" role="tab">
                                                    <a class="panel-title" data-toggle="collapse" href="#siteMegaCollapseOne" data-parent="#siteMegaAccordion" aria-expanded="false" aria-controls="siteMegaCollapseOne">
                                                        Collapsible Group Item #1
                                                    </a>
                                                </div>
                                                <div class="panel-collapse collapse" id="siteMegaCollapseOne" aria-labelledby="siteMegaAccordionHeadingOne" role="tabpanel">
                                                    <div class="panel-body">
                                                        De moveat laudatur vestra parum doloribus labitur sentire partes, eripuit praesenti
                                                        congressus ostendit alienae, voluptati ornateque accusamus
                                                        clamat reperietur convicia albucius.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel">
                                                <div class="panel-heading" id="siteMegaAccordionHeadingTwo" role="tab">
                                                    <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseTwo" data-parent="#siteMegaAccordion" aria-expanded="false" aria-controls="siteMegaCollapseTwo">
                                                        Collapsible Group Item #2
                                                    </a>
                                                </div>
                                                <div class="panel-collapse collapse" id="siteMegaCollapseTwo" aria-labelledby="siteMegaAccordionHeadingTwo" role="tabpanel">
                                                    <div class="panel-body">
                                                        Praestabiliorem. Pellat excruciant legantur ullum leniter vacare foris voluptate
                                                        loco ignavi, credo videretur multoque choro fatemur mortis
                                                        animus adoptionem, bello statuat expediunt naturales.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel">
                                                <div class="panel-heading" id="siteMegaAccordionHeadingThree" role="tab">
                                                    <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseThree" data-parent="#siteMegaAccordion" aria-expanded="false" aria-controls="siteMegaCollapseThree">
                                                        Collapsible Group Item #3
                                                    </a>
                                                </div>
                                                <div class="panel-collapse collapse" id="siteMegaCollapseThree" aria-labelledby="siteMegaAccordionHeadingThree" role="tabpanel">
                                                    <div class="panel-body">
                                                        Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                                                        suscipere. Desiderat magnum, contenta poena desiderant
                                                        concederetur menandri damna disputandum corporum.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Accordion -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- End Navbar Toolbar -->

                <!-- Navbar Toolbar Right -->
                <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up" aria-expanded="false" role="button">
                            <span class="flag-icon flag-icon-us"></span>
                        </a>
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
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="scale-up" role="button">
                            <span class="avatar avatar-online">
                                <img src="../../../global/portraits/5.jpg" alt="...">
                                <i></i>
                            </span>
                        </a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="{{url('/perfil')}}" role="menuitem"><i class="icon md-account" aria-hidden="true"></i> Profile</a>
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-card" aria-hidden="true"></i> Billing</a>
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-settings" aria-hidden="true"></i> Settings</a>
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
                        <img class="navbar-brand-logo navbar-brand-logo-normal" src="img/logo2.png" title="DaAnJu Cost System">
                        <img class="navbar-brand-logo navbar-brand-logo-special" src="img/logo2.png" title="DaAnJu Cost System">
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
                <img class="cover-image" src="examples/images/dashboard-header.jpg" alt="...">
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
                        @if (Auth::user()->tieneRole('Super Administrador'))
                        <li class="site-menu-item ">
                            <a class="animsition-link" href="{{route('role.index')}}">
                                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Gestion de Roles</span>
                            </a>
                        </li>
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
            <h1 class="page-title">Menubar Disable Hover</h1>
        </div>

        <div class="page-content">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">DEMO CONTENT</h3>
                </div>
                <div class="panel-body">
                    <p>Liberatione, pueros dissentio athenis inventore morborum efficiat facere
                        conspiratione sensibus diu. Oritur maxime ullius pertinacia commodi
                        lectorem primus talem explicatam, erroribus aiebat male torquem num
                        sapientiam sollicitudines tollitur, summis mutans pariuntur, paene
                        memoria affecta cura aequum, libidinum segnitiae atomi diu molestiae.
                        Placebit protervi beatae arbitrarer velim sitisque omnino operosam,
                        vicinum sermo utilitatibus, sapientes, tali, cumanum animal peccandi,
                        libidinum leniat voluptas ornatum. Temperantiam, desiderat accedunt
                        expetenda diis fuerit cupiditate incidant liberamur antipatrum. Angere
                        meque deorum. Domo acute parta atilii percipit fortunam. Consuetudinum,
                        perturbari geometrica aliena. Animumque dicant dicat magna menandri.
                        Depulsa gloriae civibus. Importari civitatis exercitumque dicit sentiamus
                        iucundum libro perfecto aliter quod, sedentis contemnere mediocrium
                        fatemur linguam molestiam ignota, inportuno quot suscepi disputata
                        sententiam. Saluti dominorum percipi legum ipso videri impediri utroque
                        mediocrium. Expetenda expediunt, ornatus crudeli infinitis logikh
                        delectatum insatiabiles fonte fruitur, manus hominum probarem parum
                        copiosae. Iudicem nec acri recordamur detractio angoribus partes,
                        persecuti, singulis repellere contineri aequitatem, possent ignem
                        vita eidola. Dictum praesidium commodi cupiditate dissentio voce,
                        fugiendam tueri panaetium conspiratione hausta cognitione notionem.
                        Solam doctiores democriti verbis. Fieri finxerat huic audaces despicationes.
                        Umbram diligi synephebos, nemo oporteat horrida memoriter sensu inanitate
                        dolorem, dices ingenii commemorandis. Texit sapiens quicquam vidisse
                        semper utrumque calere, appellantur exedunt incursione invenerit.</p>
                    <p>Vivendo poenis odio repellendus adhibuit saepti, voluptatum. Utramque
                        earum iudicari alienus. Elegantis consistat disputationi nostrum
                        potiendi ipso sitne alliciat. Perfecto dixissem bene horum amoris
                        pararetur gravitate hac corrupisti, aequi eoque malorum torquate
                        octavio, laudandis ullius placet illustriora distrahi incurrunt laus
                        aptius beatam explicatis. Hoc fungimur mererer. Torqueantur viveremus
                        primus omnia p satisfacit evolvendis subtilius aristotele. Desiderent
                        quaestionem didicisse suscipit ei fruenda animum exercitationem,
                        firmissimum intellegam tollitur conformavit caelo ludus convenire,
                        iudicant delectat negent attento, civitas sic inmensae saluto. Numen
                        splendide universas dein diogenem sustulisti locum illam, invitat
                        torquatos terminari continent peccant explicari delapsa statue susciperet,
                        molestia libidinibus emolumenti cupiditatum choro referatur displicet
                        maximi diligamus torquentur, sollicitudines nominata vituperari potitur
                        quanta isti insipientiam ullus conquisitis geometriaque, concordia
                        meminerimus amicos explicari admirer, nominata omnes dictas, ferre
                        dicam gratissimo leguntur diligi licet, maximisque, reperire divitiarum,
                        exercitationem probarem successerit miserum corrupisti stabilitas,
                        solum nemore perspecta sit officiis cumanum pulcherrimum sentiamus,
                        silano quasi, perfunctio aristotelem quanto, quanto cui aliquid quaerenda
                        quibus benivole, turpius aegritudo magnosque paene explentur opera
                        partitio scriptum. Concupiscunt eo quanti, cupiditates vellem ferrentur
                        sentiant plusque pacuvii filium etsi, intellegimus cognitio opinor
                        adhaesiones, valetudinis multo faciant caecilii nemini antiquitate,
                        quidem fugiendum, impediri. Deseruisse vulgo laboramus oderit dolor
                        declinare cura laudabilis, offendimur publicam, pugnare.</p>
                    <p>Beata civitas malum iracundia scipio perspecta doleamus molestiae illa,
                        expectata commodi pericula liberos iuberet sitne suas aspernari,
                        numquidnam responsum cupiditatum romanum asperum. Umquam percipit
                        contemnit utrumque conquisitis angere perspicuum loquuntur statu,
                        vigiliae carum honestatis maximasque. Atomorum pariatur dolorem theophrasti
                        sitne intuemur turbulentaeque captet postulet pleniorem, inanes error
                        illi, adest dissidens putamus deserere voluptatis sit perspecta pluribus
                        fortasse atomum, apertam adhuc vitiis parvos perturbatur dicunt facio
                        mutat numeranda erimus, amorem iracundia mollitia transferre, habent
                        paratus consequatur. Tenere iusteque imperitos cupiditatum omnium,
                        aetatis erudito eorumque declinare probaturum turpius arare, inhumanus
                        potiora pacto permagna, malo ego turpe, efficitur tranquilli albucius
                        ipsarum praetereat nullam corrupisti suas re, frui percipiatur dein
                        accusator arguerent alias. Eamque censet, paranda postulet utilitatibus
                        nostros consistat divitias secutus iudico blanditiis asperiores,
                        voluptatem valetudinis iustius consequentium maioribus, significet
                        scribendi comparat primis declinare ista adversantur per ferre perpetiuntur,
                        erigimur iucundius cognitionem, unum sublatum afranius, seditiones
                        rationibus odio efficitur, leniat antiopam vocant voluptates exhorrescere,
                        hic voluptaria sequitur graeca. Quale desistemus praesentium habemus,
                        magis graviter nihil finibus commemorandis longinquitate, utamur,
                        declinationem volumus omnia cognosci neglegit expedire nemini praesertim,
                        geometrica faciendumve tradidisse depravatum, optime consul eveniet,
                        utramque arare iucunditatem iniurias suscipiantur invidus derepta.
                        Emancipaverat primo neglegit dicebas vivendum fugiamus. Est. Necessariae
                        id investigandi, deditum alienum.</p>
                    <p>Ingeniis stoicis finiri sequatur possum verissimum vel debemus statu
                        exquirere. Omnibus, verterem ferae arbitrer maiora referatur mediocris
                        praeter deseruisse, legendum detractio, consectetur disputandum harum.
                        Aequo cernimus explicabo beatae afficit approbantibus lictores robustus
                        numeranda accedit, apeirian cogitemus parvos adiuvet probatum voluptas
                        saluto proficiscuntur intemperantes data, maiestatis fautrices assidua
                        suaviter mihi. Iis claris quaestionem statim quarum pertinerent audire
                        sedulitatem, referatur, suscipiet maximeque. Tale acutus intercapedo
                        mandamus status nescius insolens audiebamus menandro contenta, fugiat
                        pro, studio morati poetarum venustate supplicii melius lictores sequatur
                        disputari, sapiente imperiis foedus putarent nec dubio lucifugi miraretur
                        fastidium, nescius parabilis poetis num fictae homero praeterea tractatos
                        graecis fortunam, ferrentur muniti atomi adiit sententia hac beata.
                        Facultas dubitemus puerilis generis inflammati assentiar habeat.
                        Studia discordant. Mors sibi propriae umquam magnam saxum celeritas,
                        uti conquirendae videro delicata patre. Errore pertineant consequamur
                        orestem videatur motum usque cyrenaicisque, aptius praesertim tuo
                        istam existimare equos prospexit necesse intereant probatum, improborum,
                        integre motu nostram anteponant paulo, itaque prompta partus albam
                        turma propter litterae cetero, intemperantiam possumus, deterius,
                        verentur adipisci doceat chaere quantaque accedunt, videri decore
                        perfunctio, mel vide mediocritatem sentit, noster arare paulo homo
                        malle provident, causas ullus d sequitur fames penitus ferantur veriusque
                        alia tranquillitatem, aut dicenda reprehensa, collaudata talem. Motum
                        partitio salutandi.</p>
                    <p>Pedalis mediocris, magnosque vitiis dubio parte recusabo, invitat percurri
                        liberalitati maerores fortitudinis legant multavit torquentur, inciderit
                        quaerendi periculum alienum numquid amaret tranquillat modum suo
                        futuros, disciplinis statuerunt debet erudito quae confirmare, meam
                        consequentium voluptatum meminit victi splendore tenebimus definitiones
                        firme iudicari. Amici affert tollit suscipiantur nullam derigatur
                        vicinum, exedunt diu iudicium, aristotele impetu proposita facimus
                        locis conclusum regione turbent segnitiae. Athenis perspexit fonte
                        cum paene indicaverunt temperantiam, signiferumque amatoriis suscipiantur
                        credo reddidisti perdiderunt incommoda poetarum suspicio incidant.
                        Atomum, unde laetitia insolens laudatur, philosophi chaere. Sapientia
                        expressas astris praeclare iudex ornatus expetendam adolescens plurimum,
                        moveat nulla, nulla paranda mutae fidelissimae ibidem caelo ius metuque
                        divinum paene, privatio putamus dicebas, dicant atque velit collegisti
                        firmitatem ferantur sponte inani utrumvis, veritatis, magis coniunctione
                        munere porro indocti scipio graeco quietae obligantur adoptionem,
                        aptissimum quosque, opinemur scripserit rebus acutum ipsarum consentinis
                        singulos declinare, iniurias mens verterem uberius debilitatem afferre
                        captiosa perspicuum magna. Debeo ineruditus asperner iudicat, odio
                        iustioribus alterum optimi cohaerescant metrodorus. Laboribus meis
                        inquam caelo quoque videamus debilitatem metus gravis fugienda, quidem
                        deseruisse intus dividendo suspicio, allevatio triarius transferrem
                        continent debilitati delectat. Explentur inesse equidem invidus,
                        erat ponunt eidola memoria turpe vicinum mererer animal artis occulta,
                        pariuntur venustate doctissimos, consumere quaeque corrupte eisque
                        officiis.</p>
                    <p>Admodum recordamur ne unum, vitae, detractio poterit primum, genuit
                        utilitate displicet hortensio nescius contemnit duo meis ad, declinabunt
                        fructuosam que improborum zenonem placet saluti tam, legendis quietus
                        tractatas tria, verissimum theseo summum que. Dividendo fictae patria
                        totam nostris texit aliena pecunias. Degendae late disseretur, quoniam
                        suavitate quo terentianus debent arridens. Fruuntur doloribus nimis
                        mandaremus assentiar, tempore expectata. Genuit voluptaria artem
                        graecis venustate, praesidium foedus facio aegritudines sentit suscipit
                        torquatus gessisse ob. Concursio quanti agam vestrae. Consequentium
                        assentior provident gravioribus, metuamus intellegerem, incurreret
                        utilitate audita tollunt bene, perpetuis modi bonarum amicis chrysippe,
                        tranquilli interesse liberamur viam chrysippo vituperari proposita
                        manu, volumus virtutem temperantiamque philosophiae expetendum, aliquo
                        multam suscipiet dolores vero exitum, mens ornateque directam, numeris
                        pars torquem calere cupiditatibusque difficiles nulli laboriosam
                        tueri praesenti, labore praesens percipit dices. Te legerint aequitate.
                        Constringendos. Audaces cupiditates tranquilli vester seditione prohiberet
                        putant non, dissident tolerabiles loqueretur fructuosam oratione,
                        fatendum etiam, bonorum probarentur imperitorum dicantur, pueri ferre
                        studiose, videor clarorum. Artifex regione conflixisse impetum graeci.
                        Omne desideraturam expressas deterret inciderint, fungimur nosmet,
                        iudico tantalo delectamur firmam contentam. Discordans arridens incurrunt
                        singulos percurri animadversionis. Discenda patientia amarissimam
                        audita hoc victi contemnere occultarum facilius expectata. Innumerabiles
                        consequi utrum, molestiam phaedrum molestias quas. Expetendas confectum
                        unde afferre audaces.</p>
                </div>
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
    <script src="global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="global/vendor/jquery/jquery.js"></script>
    <script src="global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="global/vendor/bootstrap/bootstrap.js"></script>
    <script src="global/vendor/animsition/animsition.js"></script>
    <script src="global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="global/vendor/waves/waves.js"></script>

    <!-- Plugins -->
    <script src="global/vendor/switchery/switchery.js"></script>
    <script src="global/vendor/intro-js/intro.js"></script>
    <script src="global/vendor/screenfull/screenfull.js"></script>
    <script src="global/vendor/slidepanel/jquery-slidePanel.js"></script>

    <!-- Scripts -->
    <script src="global/js/Component.js"></script>
    <script src="global/js/Plugin.js"></script>
    <script src="global/js/Base.js"></script>
    <script src="global/js/Config.js"></script>

    <script src="js/Section/Menubar.js"></script>
    <script src="js/Section/Sidebar.js"></script>
    <script src="js/Section/PageAside.js"></script>
    <script src="js/Plugin/menu.js"></script>

    <!-- Config -->
    <script src="global/js/config/colors.js"></script>
    <script src="js/config/tour.js"></script>
    <script>
        Config.set('assets', '../../assets');
    </script>

    <!-- Page -->
    <script src="js/Site.js"></script>
    <script src="global/js/Plugin/asscrollable.js"></script>
    <script src="global/js/Plugin/slidepanel.js"></script>
    <script src="global/js/Plugin/switchery.js"></script>

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


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <table>
                    <tr>
                        <td>
                            @if (Auth::user()->tieneRole('Super Administrador'))
                            <a class="btn btn-success" href="{{ route('materia_prima.create') }}">Agregar Materia Prima</a>
                            @endif
                            <a class="btn btn-dark" href="{{ route('home') }}">Volver al Home</a>
                        </td>
                    </tr>
                </table>
                <br>

                <table class="table table-light table-hover">

                    <thead class="thead-light">

                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Costo</th>
                            <th>Unidad de Medida</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($materia_prima as $mp)
                        <tr>
                            <td>{{ $mp->id }}</td>
                            <td>{{ $mp->nombre }}</td>
                            <td>{{ $mp->cantidad }}</td>
                            <td>{{ $mp->costo }}</td>
                            <td>{{ $mp->unidadmedida }}</td>
                            <td>
                                @if (Auth::user()->tieneRole('Super Administrador'))
                                <form method="get" action="{{ route('materia_prima.show',['materia_prima'=>$mp->id]) }}">
                                    <input class="btn btn-primary" type="submit" value="ver">
                                </form>
                                <form method="get" action="{{ route('materia_prima.edit',['materia_prima'=>$mp->id]) }}">
                                    <input class="btn btn-warning" type="submit" value="Editar">
                                </form>
                                <form method="post" action="{{ route('materia_prima.destroy',['materia_prima'=>$mp->id]) }}">
                                    @csrf
                                    {{ method_field('delete') }}
                                    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Desea eliminar esta materia prima?');" value="Eliminar">
                                </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>