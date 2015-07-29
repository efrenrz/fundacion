@extends('layouts.minicv')

@section('nombre')
Efrén Rodríguez Reséndiz
@stop

@section('imagen')
  <img width="350" class="featurette-image img-responsive pull-left" src="{{asset('/')}}images/ourteam/efren.jpg" alt="Quienes Somos">
@stop

@section('cargo')
{{trans('minicv.efren.cargo')}}
@stop


@section('texto-cv')
{{trans('minicv.efren.desc')}}
@stop

@section('email')
E-mail: erodriguez@fundacionvivemejor.org
@stop

@section('telefono')
+52 (442) 404 2983
@stop
