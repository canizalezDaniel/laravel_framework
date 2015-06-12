@extends('layouts/template')

@section('content')
 
	@foreach($articulos as $articulo)
 <article class="white-panel">
        <h4><a href="#">{{$articulo->titulo}}</a></h4>
        
        <hr>
      	
      	@if($articulo->imagen=="")
		<img src="img/articulos/default.png">
		@else
        <img src="img/articulos/{{$articulo->imagen}}">
		@endif

       
        <p>{{$articulo->contenido}}</p>
      	 	<hr>
      	<p><a href="#"> Leer Mas</a></p>
      </article>

    @endforeach
@stop

