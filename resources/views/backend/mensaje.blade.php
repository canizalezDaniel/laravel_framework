@extends('layouts.admin')

@section('content')

<h1>Mensajes</h1>
<table class="table table-striped table-bordered table-hover"  >
					    <thead>
					        <tr>
					        
					            <td>Fotografia</td>
					            <td >Biografia</td>
					            <td>Accion</td>
					        </tr>
					    </thead>
					    <tbody>
					    @foreach($infos as $info => $value)
					        <tr>
					          
					            <td><img src="{{asset('/img/'.$value->foto.'')}}" height="64" width="64"></td>
					            <td>{{ $value->bio }}</td>
					            

					            <!-- we will also add show, edit, and delete buttons -->
					            <td>

					                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
					                <!-- we will add this later since its a little more complicated than the other two buttons -->

					                <!-- show the nerd (uses the show method found at GET /nerds/{id} 
					                <a class="btn btn-small btn-success" href="{{ URL::to('articulos/' . $value->id) }}">Eliminar</a>
					                -->
					                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
					                <a class="btn btn-small btn-info" id="activar" href="{{ URL::to('mensajes/' . $value->id . '/editarMensaje') }}">Editar</a>

					            </td>
					        </tr>
					    @endforeach
					    </tbody>
					</table>






@stop