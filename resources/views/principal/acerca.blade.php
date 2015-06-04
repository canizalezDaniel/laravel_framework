<div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Yo, Daniel Cañizalez</h2>


                        @foreach($infos as $info)
                    <a href="#" class="image avatar"><img src="img/{{$info->foto}}" alt="" width="123px" height="123px" /></a>

                    <hr class="light"> 
                    <p class="text-faded"> {{$info->bio}}</p>
                    @endforeach

                     <div class="col-md-12 text-center" >
                    <ul class="social-network social-circle">
                        <li class="social"><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li class="social"><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li class="social"><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li class="social"><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>               
                </div>
                </div>
            </div>
        </div>