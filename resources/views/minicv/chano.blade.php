@extends('layouts.minicv')

@section('nombre')
Feliciano Guerrero Chávez
@stop

@section('imagen')
  <img width="350" class="featurette-image img-responsive pull-left" src="{{asset('/')}}images/ourteam/chano.jpg" alt="Quienes Somos">
@stop

@section('cargo')
{{trans('minicv.feliciano.cargo')}}
@stop


@section('texto-cv')
{{trans('minicv.feliciano.desc')}}
@stop

@section('email')
fguerrero@fundacionvivemejor.org
@stop

@section('telefono')
+52 (442) 404 2983
@stop
