@extends('layouts.admin')

@section('content')
  <script type="text/javascript">

function mostrar(form)
{
    obj=document.getElementById(form);
    obj.style.display = (obj.style.display=='none') ? 'block':'none';

}

-->
</script>
<h1>Servicios</h1>
<table class="table table-striped table-bordered table-hover">
					    <thead>
					        <tr>
					            <td>ID</td>
					            <td>Titulo</td>
					            <td>Descripcion</td>
					            <td>Accion</td>
					          
					        </tr>
					    </thead>
					    <tbody>
					    @foreach($servicios as $servicio => $value)
					        <tr>
					            <td>{{ $value->id }}</td>
					            <td>{{ $value->titulo }}</td>
					            <td>{{ $value->descripcion }}</td>
					            

					            <!-- we will also add show, edit, and delete buttons -->
					            <td>

					                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
					                <!-- we will add this later since its a little more complicated than the other two buttons -->

					                <!-- show the nerd (uses the show method found at GET /nerds/{id} 
					                <a class="btn btn-small btn-success" href="{{ URL::to('articulos/' . $value->id) }}">Eliminar</a>
					              -->
					                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
					                <a class="btn btn-small btn-info" id="activar" href="{{ URL::to('servicios/' . $value->id . '/editarServicios') }}" >Editar</a>
										
					            </td>
					        </tr>
					    @endforeach
					    </tbody>
					</table>

		



@stop