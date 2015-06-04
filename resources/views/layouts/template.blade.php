<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blogsite</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{asset("css/grid.css")}}" type="text/css">

    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
     <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset("font-awesome/css/font-awesome.min.css")}}" type="text/css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

</head>
<body >

    <nav class="navbar navbar-default" role="navigation">
    @include('principal.menu2')
    </nav>
    


	<div class="container">
  <div class="row">
   <hr>
    <section id="pinBoot">

     @yield('content')


    </section>
  </div>
</div>
<!--Paginacion-->
<div class="container">
<ul class="pagination">
              <li class="disabled"><a href="#">«</a></li>
              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">»</a></li>
            </ul>
</div>
<!-- fin paginacion-->

<!-- Footer 
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
    			<div class="col-lg-3 col-md-6">
                <div class="container">
	
   
    	<div class="col-lg-3">
    				<div class="cuadro_intro_hover " style="background-color:#cccccc;">
						<p style="text-align:center; margin-top:20px;">
							<img src="http://placehold.it/500x330" class="img-responsive" alt="">
						</p>
						<div class="caption">
							<div class="blur"></div>
							<div class="caption-text">
								<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">THIS IS H3</h3>
								<p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
								<a class=" btn btn-default" href="#"><span class="glyphicon glyphicon-plus"> INFO</span></a>
							</div>
						</div>
					</div>
				
	    </div>
       <div class="col-lg-3">
    				<div class="cuadro_intro_hover " style="background-color:#cccccc;">
						<p style="text-align:center; margin-top:20px;">
							<img src="http://placehold.it/500x330" class="img-responsive" alt="">
						</p>
						<div class="caption">
							<div class="blur"></div>
							<div class="caption-text">
								<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">THIS IS H3</h3>
								<p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
								<a class=" btn btn-default" href="#"><span class="glyphicon glyphicon-plus"> INFO</span></a>
							</div>
						</div>
					</div>
				
	    </div>
            

            <div class="col-lg-3 col-md-6">
			<h3>Categories:</h3>
                <ul>
				<li><a href=""><i class="fa fa-file"></i> News</a></li>
				<li><a href=""><i class="fa fa-android"></i> Android</a></li>
				<li><a href=""><i class="fa fa-code"></i> C#</a></li>
				<li><a href=""><i class="fa fa-code"></i> Java</a></li>
				<li><a href=""><i class="fa fa-book"></i> Books</a></li>
				<li><a href=""><i class="fa fa-globe"></i> Web</a></li>
				<li><a href=""><i class="fa fa-windows"></i> Windows</a></li>
				</ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h3>Contact:</h3>
				<p>Have a question or feedback? Contact me!</p>
				<p><a href="" title="Contact me!"><i class="fa fa-envelope"></i> Contact</a></p>
            <h3>Follow:</h3>
			
			
<a href="" id="gh" target="_blank" title="Twitter"><span class="fa-stack fa-lg">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-twitter fa-stack-1x"></i>
</span>
Twitter</a>
<a href=""  target="_blank" title="GitHub"><span class="fa-stack fa-lg">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-github fa-stack-1x"></i>
</span>
GitHub</a>

		


		
			
			</div>
			<br/>
            <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like" data-href="" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

<a href="https://twitter.com/share" class="twitter-share-button" data-url="">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<div class="g-plusone" data-annotation="inline" data-width="300" data-href=""></div>

<!-- Helyezd el ezt a címkét az utolsó +1 gomb címke mögé.
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
			<br/>
			
				<hr>
                    <p>Copyright © Your Website | <a href="">Privacy Policy</a> | <a href="">Terms of Use</a></p>
					
					
					
        </footer>

        -->
	  <script src="js/grid.js"></script>
</body>
</html>
