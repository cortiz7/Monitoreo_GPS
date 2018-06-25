<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield("title") | Sistema de Monitoreo - GPS</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link rel="stylesheet" href="{{ asset('/theme/bootstrap/css/bootstrap.min.css') }}">
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"-->

    <!-- FontAwesome 4.3.0 -->
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
          type="text/css" /-->
    <link rel="stylesheet" href="{{ asset('/theme/font-awesome/css/font-awesome.min.css') }}">

    @yield("css")

            <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/theme/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/theme/dist/css/skins/_all-skins.min.css') }}">

    <!-- iCheck -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    <header class="main-header">
    <nav class="navbar navbar-static-top">
            <div>
                <div class="navbar-header">
                    <a href="#" class="logo"><i class=""></i> <b>GEOMAP </b></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Sistema de Monitorización y Geoposicionamiento</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Iniciar de Sesión</a></li>
                    </ul>
                </div>
            </div><!-- /.container-fluid -->
        </nav>
    </header>
    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div>
            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section><!-- /.content -->
        </div><!-- /.container -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="container">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2018 <a href="#">XIVARINES </a>.</strong> Todos los Derechos Reservados.
        <div><!-- /.container -->
    </footer>

</div><!-- ./wrapper -->

<script src="{{ asset('/theme/plugins/jQuery/jQuery-2.1.4.min.js') }}" ></script>
<script src="{{ asset('/theme/bootstrap/js/bootstrap.js') }}" ></script>
<!--script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script-->
<!--script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script-->

@yield("js")

<script src="{{ asset('/theme/plugins/slimScroll/jquery.slimscroll.min.js') }}"> </script>
<script src="{{ asset('/theme/plugins/fastclick/fastclick.min.js') }}"> </script>

<script src="{{ asset('/theme/dist/js/app.min.js') }}"> </script>
<!--script src="{{ asset('/theme/dist/js/demo.js') }}"> </script-->
</body>
</html>
