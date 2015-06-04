@extends('layouts.admin')

@section('content')
{!! Form::model($infos,[ 'files'=>true, 'method'=> 'PUT', 'action'=> ['BackendController@updateMensaje', $infos->id]]) !!}

<div class="form-group">
  {!! Form::label('Fotografia', 'Fotografia') !!}
  {!! Form::file('foto', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">

    {!! Form::label('Biografia', 'Biografia') !!}
    {!! Form::textarea('bio', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">


    {!! Form::submit('Guardar', ['class'=>'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}


              @include('errors.listado') 
@stop