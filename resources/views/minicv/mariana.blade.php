@extends('layouts.minicv')

@section('nombre')
Mariana Guerrero Chávez
@stop

@section('imagen')
  <img width="350" class="featurette-image img-responsive pull-left" src="{{asset('/')}}images/ourteam/mariana.jpg" alt="Quienes Somos">
@stop

@section('cargo')
{{trans('minicv.mariana.cargo')}}
@stop


@section('texto-cv')
{{trans('minicv.mariana.desc')}}
@stop

@section('email')
E-mail: mguerrero@fundacionvivemejor.org
@stop

@section('telefono')
+52 (442) 404 2983
@stop
