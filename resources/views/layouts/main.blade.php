<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="{{asset('Content/img/favicon-32x32.png')}}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{asset('Content/img/favicon-16x16.png')}}" sizes="16x16" />
    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('bower_components/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{asset('Content/css/sb-admin-2.css')}}" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        @if(isset($error))
        @include('errors.errros',['error' => $error])
        @endif
        <!-- Menu and Sidebar -->

        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
          <!-- burger -->
            <div class="navbar-header">
                @if (!Auth::guest())
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                @endif
                <a class="navbar-brand" href="index">SIMEI</a>
            </div>
            <!-- burger -->
            @if (!Auth::guest())
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout </a></li>
            </ul>
            @endif


        </nav>



        <!-- Menu and Sidebar -->

        <!-- page main content -->
        <div id="page-wrapper">
          <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bienvenido
                        <img class="logo" src="{{asset('Content/img/logo-simei.png')}}" alt="Simei">
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            @yield('content')


        </div>
        <!-- page main content -->
        <!-- Footer -->
            <div id="footer">
              <div class="container">
                <p class="text-muted credit">
                    Hecho por Gustavo Sevilla
                </p>
              </div>
            </div>
        <!-- Footer -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>

    
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <!-- <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('Content/js/sb-admin-2.js')}}"></script>

</body>

</html>
