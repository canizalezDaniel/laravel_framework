<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrador</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset("css/sb-admin.css")}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset("css/plugins/morris.css")}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset("font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css">
    <!-- Date Picker CSS-->

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
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
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
           
            @include('administrador.menu')
        </nav>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                   <div class="col-lg-12">
                        <h1 class="page-header">
                                Panel de Administracion
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row 
                 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">2</div>
                                        <div>Mensajes</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('admin-pg/backend-ms') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">Ingresar</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list-alt fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">4</div>
                                        <div>Servicios</div>
                                    </div>
                                </div>
                            </div>
                           <a href="{{ url('admin-pg/backend-sr') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">Ingresar</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-envelope fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">1</div>
                                        <div>Contacto</div>
                                    </div>
                                </div>
                            </div>
                           <a href="{{ url('admin-pg/backend-ct') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">Ingresar</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">13</div>
                                        <div>Blog Site</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('admin-pg/backend-bg') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">Ingresar</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row 

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                 
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                @yield('content')
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset("js/jquery.js")}}"></script>
  
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset("js/bootstrap.min.js")}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset("js/plugins/morris/raphael.min.js")}}"></script>
    <script src="{{asset("js/plugins/morris/morris.min.js")}}"></script>
    <script src="{{asset("js/plugins/morris/morris-data.js")}}"></script>
    <!-- Date Picker JS -->
 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
   <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  </script>



</body>

</html>
