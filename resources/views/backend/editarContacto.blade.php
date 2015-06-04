@extends('layouts.admin')

@section('content')

{!! Form::model($contacto, [ 'method'=> 'PUT', 'action'=> ['BackendController@updateContacto', $contacto->id]]) !!}

<div class="form-group">
    {!! Form::label('Nombre', 'Nombre') !!}
    {!! Form::text('nombre', null, ['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('Telefono', 'Telefono') !!}
    {!! Form::text('telefono', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Email', 'Email') !!}
    {!! Form::email('email', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">


    {!! Form::submit('Guardar', ['class'=>'btn btn-primary form-control']) !!}
</div>

@stop