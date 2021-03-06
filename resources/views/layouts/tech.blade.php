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
    <link href="{{asset('Content/css/site.css')}}" rel="stylesheet">

    @stack('customstyles')
</head>

<body >

    <div id="wrapper">
        @if(session('error'))
        <div class="alert alert-danger" role="alert">
            <strong>Atencion: {{ session('error') }}</strong>
        </div>
        @elseif(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(session('notification'))
        <div class="alert alert-success" role="success">
            <strong>Bien: {{ session('notification') }}</strong>
        </div>
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
                <a class="navbar-brand" href="{{url('/')}}">SIMEI</a>
            </div>
            <!-- burger -->
            @if (!Auth::guest())
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Salir </a></li>
            </ul>
            <!-- sidebar -->
            <div class="navbar-default sidebar " role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!-- buscar -->
                        @if(Auth::user()->role == 'technician')
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('user/index')}}"><i class="fa fa-search"></i> Ver Usuarios</a>
                                </li>
                                <li>
                                    <a href="{{url('user/create')}}"><i class="fa fa-plus"></i> Crea Usuarios</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-exclamation-circle"></i> Fallas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('fail/index')}}"><i class="fa fa-search"></i> Ver Fallas</a>
                                </li>
                                <li>
                                    <a href="{{url('fail/create')}}"><i class="fa fa-plus"></i> Crear Falla</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Indicencias<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('taskorder/all')}}"><i class="fa fa-search"></i> Ver Incidencias</a>
                                </li>
                                <li>
                                    <a href="{{url('taskorder/create')}}"><i class="fa fa-plus"></i> Crear Incidencia</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-desktop fa-fw"></i> TMS<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('home/tms')}}"><i class="fa fa-link"></i> Conexion a TMS</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-line-chart fa-fw"></i> Reportes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('report')}}"><i class="fa fa-search"></i> Ver Reportes</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        @else
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Indicencias<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('taskorder/create')}}"><i class="fa fa-plus"></i> Crear Incidencia</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-desktop fa-fw"></i> TMS<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('home/tms')}}"><i class="fa fa-link"></i> Conexion a TMS</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-line-chart fa-fw"></i> Reportes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('report')}}"><i class="fa fa-search"></i> Ver Reportes</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        @endif
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- sidebar -->
            @endif


        </nav>

        <!-- Menu and Sidebar -->

        <!-- page main content -->
        <div id="page-wrapper">


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

    <!-- Angular -->
    <script src="{{asset('Content/angular/angular.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('bower_components/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('bower_components/morrisjs/morris.min.js')}}"></script>


    <!-- Custom Theme JavaScript -->
    <script src="{{asset('Content/js/sb-admin-2.js')}}"></script>

    @stack('customscripts')
</body>

</html>
