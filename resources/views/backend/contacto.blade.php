@extends('layouts.admin')

@section('content')

<h1>Contacto</h1>
<table class="table table-striped table-bordered table-hover" >
					    <thead>
					        <tr>
					            <td>ID</td>
					            <td>Contacto</td>
					            <td>Telefono</td>
					            <td>Email</td>
					              <td>Acciones</td>
					        </tr>
					    </thead>
					    <tbody>
					    @foreach($contacto as $contact => $value)
					        <tr>
					            <td>{{ $value->id }}</td>
					            <td>{{ $value->nombre }}</td>
					            <td>{{ $value->telefono }}</td>
					             <td>{{ $value->email }}</td>
					            

					            <!-- we will also add show, edit, and delete buttons -->
					            <td>

					                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
					                <!-- we will add this later since its a little more complicated than the other two buttons -->

					                <!-- show the nerd (uses the show method found at GET /nerds/{id} 
					                <a class="btn btn-small btn-success" href="{{ URL::to('articulos/' . $value->id) }}">Eliminar</a>
					                -->
					                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
					               <a class="btn btn-small btn-info" id="activar" href="{{ URL::to('contacto/' . $value->id . '/editarContacto') }}" >Editar</a>
									
					            </td>
					        </tr>
					    @endforeach
					    </tbody>
					</table>

@stop