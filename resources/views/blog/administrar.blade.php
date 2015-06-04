@extends('layouts.admin')


@section('content')

<h1>Blog Site</h1>
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
					    
					        <tr>
					          
					            
					            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi sunt natus nam..</td>
					            <td>Daniel Canizalez</td>
					            <td>01/06/2015</td>
					            <!-- we will also add show, edit, and delete buttons -->
					            <td>

					               
					                <a class="btn btn-small btn-info" id="activar" href="#">Editar</a>
					                 <a class="btn btn-small btn-info" id="activar" href="#">Eliminar</a>

					            </td>
					        </tr>
					    
					    </tbody>
					</table>






@stop