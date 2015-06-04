@extends('layouts.master')

@section('content')
<div class="header-content">
            <div class="header-content-inner">
                <h1>{ [CODEANDO] }</h1>
                <hr>
                @foreach($infos as $info)
                	<h2>{{ Inspiring::quote() }}</h2>
                	<br>
                @endforeach
                <a href="#acerca" class="btn btn-primary btn-xl page-scroll">Descubre Mas</a>
            </div>
        </div>
@stop