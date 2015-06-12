@extends('layouts.admin')
@section('content')
    <h1>Crear nuevo articulo</h1>
    {!! Form::open(['files'=>true, 'url' => 'blog']) !!}
   
    <div class="form-group">
        {!! Form::label('Titulo', 'Titulo:') !!}
        {!! Form::text('titulo',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Autor', 'Autor:') !!}
        {!! Form::text('autor',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Contenido', 'Contenido:') !!}
        {!! Form::textarea('contenido', null, ['class'=>'form-control', 'maxlength' => '110 ', 'size' => '30x5']) !!}
    </div>
   
 
    <div class="form-group">
    {!! Form::label('Fecha', 'Fecha:') !!}
      <div class='input-group date' id='datetimepicker1'>
        
        {!! Form::text('fechaPublicado',null, ['id'=>'datepicker','class'=>'form-control']) !!}
         <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
        </span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('Publicado', 'Publicado:') !!}
      
        {!! Form::select('publicado', [
               '0' => 'NO',
               '1' => 'SI'
               ], null,  ['class' => 'form-control']
            ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::file('imagen', null, ['class'=>'form-control']) !!}

    </div>
         

     
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
       @include('errors.listado') 
@stop
