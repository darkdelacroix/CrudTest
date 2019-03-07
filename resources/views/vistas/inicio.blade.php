<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="/vendor/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link href="/vendor/css/sb-admin.css" rel="stylesheet">
   <!-- Morris Charts CSS -->
    <link href="/vendor/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->



</head>

<body>

<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-dark bg-inverse navbar-fixed-top">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button class="navbar-toggler hidden-sm-up pull-sm-right" type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                &#9776;
            </button>
            <a class="navbar-brand" href="/home">Inicio</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-nav top-nav navbar-right pull-xs-right">


            <li class="dropdown nav-item">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>   {{ Auth::user()->name }} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item">
                        <a href="/config_usuario/{{ Auth::user()->id }}"><i class="fa fa-fw fa-gear"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li class="dropdown-item">
                        <a class="" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        @if(Auth::user()->hasRole('admin') or Auth::user()->hasRole('user'))

            <div class="collapse navbar-collapse navbar-toggleable-sm navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav list-group">
                    <li class="list-group-item">
                        <a href="/ubicaciones"><i class="fa fa-fw fa-location-arrow"></i> Ubicaciones</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/marcas"><i class="fa fa-fw fa-area-chart"></i> Marcas</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/modelos"><i class="fa fa-fw fa-asterisk"></i> Modelos</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/origenes"><i class="fa fa-fw fa-map-marker"></i> Origenes</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/pantallas"><i class="fa fa-fw fa-desktop"></i>Pantallas</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/procesadores"><i class="fa fa-fw fa-calculator"></i>Procesadores</a>
                    </li>


                    <li class="list-group-item">
                        <a href="/proveedores"><i class="fa fa-fw fa-truck"></i> Proveedores</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/inventario"><i class="fa fa-fw fa-dropbox"></i> Inventario</a>
                    </li>
@if(Auth::user()->hasRole('admin')   )
  <li class="list-group-item">
      <a href="/usuarios"><i class="fa fa-fw fa-users"></i>Usuarios</a>
  </li>
@endif
</ul>
</div>
@else
<div>Un usuario huesped no puede modificar nada</div>
@endif

<!-- /.navbar-collapse -->
</nav>

<div id="page-wrapper">

<div class="container-fluid">

@yield('content')

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
@yield('scripts')

<script src="/vendor/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/vendor/js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

</body>

</html>