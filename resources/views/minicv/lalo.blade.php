@extends('layouts.minicv')

@section('nombre')
Eduardo Guerrero Chávez
@stop

@section('imagen')
  <img width="350" class="featurette-image img-responsive pull-left" src="{{asset('/')}}images/ourteam/lalo.jpg" alt="Quienes Somos">
@stop

@section('cargo')
{{trans('minicv.eduardo.cargo')}}
@stop


@section('texto-cv')
{{trans('minicv.eduardo.desc')}}
@stop

@section('email')
E-mail: eguerrero@fundacionvivemejor.org
@stop

@section('telefono')
+52 (442) 404 2983
@stop
