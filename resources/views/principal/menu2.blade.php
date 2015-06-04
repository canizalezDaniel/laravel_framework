<div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="{{url('/')}}">CODEANDO</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="{{ url('/') }}#acerca">Acerca</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url('/') }}#servicios">Servicios</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="{{ url('/') }}#contacto">Contacto</a>
                    
                    </li>
                   
                    @if (url('/auth/register'))
                        <!--   <li><a href="{{ url('/auth/register') }}">Registrar</a></li> -->
                                          
                    @endif
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->