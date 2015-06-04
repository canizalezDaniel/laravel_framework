<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Codeando</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset("font-awesome/css/font-awesome.min.css")}}" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{asset("css/animate.min.css")}}" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset("css/creative.css")}}" type="text/css">

    <!-- Sticky CSS -->
    <link rel="stylesheet" href="{{ asset("css/sticky.css")}}" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        @include('principal.menu')
    </nav>

    <header>
         @yield('content')
    </header>

    <section class="bg-primary" id="acerca">
        
              
                
        
        @include('principal.acerca')
          
    </section>

    <section id="servicios"  class="bg-dark">
        @include('principal.servicios',  array('servicios' => $servicios))
    </section>
    

   <section id="contacto">
       @include('principal.contacto', array('contacto'=>$contacto))
      
     
    </section>

    <footer class="footer">
      <div class="container">
        <p class="footerT">Derechos Reservados, Daniel Cañizalez @2015 -.</p>
      </div>
    </footer>
     

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
