<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap material admin template">
  <meta name="author" content="">

  <title>Olvidaste Contraseña | DaAnJu </title>

  
  <link rel="apple-touch-icon" href="../img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../img/logo.png">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="../css/site.min.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="../global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="../global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="../global/vendor/waves/waves.css">
    <link rel="stylesheet" href="../examples/css/pages/login.css">


    <!-- Fonts -->
    <link rel="stylesheet" href="../global/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="../global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

  <!--[if lt IE 9]>
    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="../global/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
  </script>
</head>

<body class="animsition page-forgot-password layout-full">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


  <!-- Page -->
  <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="page-content vertical-align-middle">
      <h2>Olvidaste Tu Contraseña ?</h2>
      <p>Ingrese su correo electrónico registrado para restablecer su contraseña </p>

      <form method="post" role="form" autocomplete="off">
        <div class="form-group form-material floating" data-plugin="formMaterial">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ $email ?? old('email') }}" required autocomplete="email" placeholder="Correo Electronico"
            autofocus>
          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          <label class="floating-label" for="inputEmail">Tu correo electrónico</label>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Restablecer Su Contraseña</button>
        </div>
      </form>

      <footer class="page-copyright">
        <p>WEBSITE BY Creation Studio</p>
        <p>© 2018. All RIGHT RESERVED.</p>
        <div class="social">
          <a class="btn btn-icon btn-pure" href="javascript:void(0)">
            <i class="icon bd-twitter" aria-hidden="true"></i>
          </a>
          <a class="btn btn-icon btn-pure" href="javascript:void(0)">
            <i class="icon bd-facebook" aria-hidden="true"></i>
          </a>
          <a class="btn btn-icon btn-pure" href="javascript:void(0)">
            <i class="icon bd-google-plus" aria-hidden="true"></i>
          </a>
        </div>
      </footer>
    </div>
  </div>
  <!-- End Page -->

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
    <script src="../../vendor/jquery-placeholder/jquery.placeholder.js"></script>

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
    <script src="../../js/config/colors.js"></script>
    <script src="../../js/config/tour.js"></script>
    <script>
        Config.set('assets', '../../assets');
    </script>

    <!-- Page -->
    <script src="../../js/Site.js"></script>
    <script src="../../global/js/Plugin/asscrollable.js"></script>
    <script src="../../global/js/Plugin/slidepanel.js"></script>
    <script src="../../global/js/Plugin/switchery.js"></script>
    <script src="../../global/js/Plugin/jquery-placeholder.js"></script>
    <script src="../../global/js/Plugin/material.js"></script>

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