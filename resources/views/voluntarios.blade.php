@extends('layouts.base')

@section('titulo')
Voluntarios
@stop

@section('contenido')

<!-- Full Page Image Header Area -->
<div id="top" class="header_contacto">
    <div class="vert-text">
        <h1>Voluntarios</h1>
        <a href="#about" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
    </div>
</div>
<!-- /Full Page Image Header Area -->

<!-- Intro -->
<div id="about" class="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-9 text-left col-md-offset-2">

                <div class="row">
                @foreach($volunteers as $volunteer)
                    <div class="paragraphs">
                        <div class="row">
                            <div class="span4">
                                <div class="clearfix content-heading">
                                    <img class="pull-left img-circle" src="{{$volunteer->picture}}" alt="{{$volunteer->name}}"/>
                                    <h4>{{$volunteer->name}}</h4>
                                    <p class="texto-gris">{{$volunteer->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <a href="#map" class=" flecha-azul-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /Intro -->


<!-- Callout -->
<div id="callout" class="callout_contacto">
    <div class="vert-text">
        <h1>Mi sueño es hacer labor altruista</h1>
    </div>
</div>
<!-- /Callout -->


@stop