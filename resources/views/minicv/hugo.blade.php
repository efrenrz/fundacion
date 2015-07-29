@extends('layouts.minicv')

@section('nombre')
Hugo Rodríguez Reséndiz
@stop

@section('imagen')
  <img width="350" class="featurette-image img-responsive pull-left" src="{{asset('/')}}images/ourteam/hugo.jpg" alt="Quienes Somos">
@stop

@section('cargo')
{{trans('minicv.hugo.cargo')}}
@stop


@section('texto-cv')
{{trans('minicv.hugo.desc')}}
@stop

@section('email')
E-mail: hrodriguez@fundacionvivemejor.org
@stop

@section('telefono')
+52 (442) 404 2983
@stop
