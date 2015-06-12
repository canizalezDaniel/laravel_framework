@extends('layouts.admin')


@section('content')

<h1>Blog Site</h1>

<p><a class="btn btn-small btn-info" id="activar" href="{{url('blog/create')}}">Nuevo Articulo</a></p>
<table class="table table-striped table-bordered table-hover"  >
					    <thead>
					        <tr>
					        
					            
					            <td>Titulo</td>
					            <td>Autor</td>
					            <td>Publicado</td>
					            <td>Accion</td>
					        </tr>
					    </thead>
					    <tbody>
					    
					    @foreach ($articulos as $articulo)
					        <tr>
					          
					            
					            <td>{{$articulo->titulo}}</td>
					            <td>{{$articulo->autor}}</td>
					            <td>{{$articulo->fechaPublicado}}</td>
					            <!-- we will also add show, edit, and delete buttons -->
					            <td>

					               
					                <a class="btn btn-small btn-info" id="activar" href="#">Editar</a>
					                 <a class="btn btn-small btn-info" id="activar" href="#">Eliminar</a>

					            </td>
					        </tr>
					    	@endforeach
					    </tbody>
					</table>






@stop