@extends('layouts.minicv')

@section('nombre')
Amaranta Isabel Medina González
@stop

@section('imagen')
  <img width="350" class="featurette-image img-responsive pull-left" src="{{asset('/')}}images/ourteam/amaranta.jpg" alt="Quienes Somos">
@stop

@section('cargo')
{{trans('minicv.amaranta.cargo')}}
@stop


@section('texto-cv')
{{trans('minicv.amaranta.desc')}}
@stop

@section('email')
amedina@fundacionvivemejor.org
@stop

@section('telefono')
+52 (442) 404 2983
@stop
