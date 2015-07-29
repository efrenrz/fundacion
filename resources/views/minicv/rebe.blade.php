@extends('layouts.minicv')

@section('nombre')
Rebecca Linz
@stop

@section('imagen')
  <img width="350" class="featurette-image img-responsive pull-left" src="{{asset('/')}}images/ourteam/rebe.jpg" alt="Quienes Somos">
@stop

@section('cargo')
{{trans('minicv.rebecca.cargo')}}
@stop


@section('texto-cv')
{{trans('minicv.rebecca.desc')}}
@stop

@section('email')
E-mail: rlinz@fundacionvivemejor.org
@stop

@section('telefono')
+52 (442) 404 2983
@stop
