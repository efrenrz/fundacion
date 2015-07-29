@extends('layouts.base')

@section('titulo')
	Error 404
@stop

@section('contenido')
	<div id="top" class="header_error">
      <div class="vert-text">
      	<img src="{{asset('/')}}images/engranaje.png" alt="">
        <h2>Error 404</h2>
        <h2>UPS !! Lo que buscas no esta aquí</h2>
      </div>
    </div>
@stop