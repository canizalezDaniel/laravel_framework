
<div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Que hago?</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                
                 @foreach($servicios as $servicio)
                                      
                       @if($servicio->id == 1)
                           
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-5x fa fa-desktop wow bounceIn text-primary"></i>
                            <h3>{{$servicio->titulo}}</h3>
                            <p class="text-muted">{{$servicio->descripcion}}.</p>
                        </div>
                    </div>

                       @endif

                     @if($servicio->id == 2)
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-5x fa-server wow bounceIn text-primary" data-wow-delay=".1s"></i>
                            <h3>{{$servicio->titulo}}</h3>
                            <p class="text-muted">{{$servicio->descripcion}}!</p>
                        </div>
                    </div>

                     @endif

                     @if($servicio->id == 3)
                         <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-5x fa-sitemap wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>{{$servicio->titulo}}</h3>
                        <p class="text-muted">{{$servicio->descripcion}}.</p>
                    </div>
                </div>
                     @endif

                     @if($servicio->id == 4)
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-5x fa-exclamation-triangle wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>{{$servicio->titulo}}</h3>
                        <p class="text-muted">{{$servicio->descripcion}}.</p>
                    </div>
                </div>
                     @endif
                 @endforeach
      
            </div>
        </div>
