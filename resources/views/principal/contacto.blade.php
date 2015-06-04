 <div class="container">
            <div class="row">
    @foreach($contacto as $contacto)
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contactame!</h2>
                    
                    <hr class="primary">
                     
                
                    <p>Si quieres contactarme por ahora dispongo de mis cuentas en la red social o puedes enviarme un correo electronico con gusto atendere tu necesidad</p>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                   
                  <p>{{$contacto->telefono}}</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">{{$contacto->email}}</a></p>
                    
                </div>

            </div>

    @endforeach


        </div>