@extends('layouts.admin')

@section('content')
{!! Form::model($servicio, [ 'method'=> 'PUT', 'action'=> ['BackendController@updateServicios', $servicio->id]]) !!}


<div class="form-group">
    {!! Form::label('Titulo', 'Titulo') !!}
    {!! Form::text('titulo',  null, ['class'=>'form-control']) !!}
</div>



<div class="form-group">

    {!! Form::label('Descripcion', 'Descripcion') !!}
    {!! Form::textarea('descripcion',  null, ['class'=>'form-control', 'maxlength' => '110 ', 'size' => '30x5']) !!}
</div>

<div class="form-group">


    {!! Form::submit('Guardar', ['class'=>'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}


              @include('errors.listado') 
@stop