@extends('layouts.base')

@section('contenido')
<!-- Full Page Image Header Area -->
<div id="top" class="header">
    <div class="vert-text">
        <h1>Fundación Vive Mejor AC</h1>
        <h3> <em>{{trans('inicio.bienvenido')}}</em> </h3>
        <a href="#fvm" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
    </div>
</div>
<!-- /Full Page Image Header Area -->

<!--
<div id="events">

  <div class="intro" style="background-color:#3399CC;">
      <div class="row">
        <div class="col-md-12 text-center" >
          <h2 class="texto-blanco">Eventos</h2>
          <!-- Carousel
          ================================================== --
          <div id="myCorouselhash" class="myCorouselhash"></div>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators --
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" >
              <div class="item active">
                <img data-src="holder.js/900x500/auto/#3399CC:#3399CC" alt="Misión">
                <div class="container">
                  <div class="carousel-caption" >

                    <img class="img-responsive center-block" src="images/eventos1.png" alt="">
                    <hr>
                    <p class="lead">
                      Somos una organización dedicada a gestionar y promover acciones que permitan el sano desarrollo integral de la comunidad, el individuo y las familias.
                      <div class="btn btn-info">Click aqui</div>
                    </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <img data-src="holder.js/900x500/auto/#3399CC:#3399CC" alt="Visión">
                <div class="container">
                  <div class="carousel-caption">
                    <img class="img-responsive center-block" src="images/eventos1.png" alt="">
                                           <hr>
                    <p class="lead">
                      Ser una organización destacada a nivel nacional por mejorar la calidad de vida de las personas en estado de vulnerabilidad y de escasos recursos, creando oportunidades que propicien su desarrollo integral y social.
                    <p>
                  </div>
                </div>
              </div>
              <div class="item">
                <img data-src="holder.js/900x500/auto/#3399CC:#3399CC" alt="Valores">
                <div class="container">
                  <div class="carousel-caption">
                    <img class="img-responsive center-block" src="images/eventos1.png" alt="">
                    <hr>
                    <p class="lead">
                    <br><span class="subrayado"> Responsabilidad:</span> Cumplir en tiempo y forma cada una de las actividades a realizar en beneficio de la comunidad.
                    <br> <span class="subrayado"> Compromiso:</span> Influir en las personas para fomentar la participación en su comunidad, en beneficio de las futuras generaciones.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <a class="Cleft carousel-control" href="#myCarousel" data-slide="prev"><i class="fa fa-angle-left fa-4x"></i></a>
            <a class="Cright carousel-control" href="#myCarousel" data-slide="next"><span class="fa fa-angle-right fa-4x"></span></a>
          </div>
          <!-- /.carousel --
          <a href="#fvm" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
        </div>
      </div>
    </div>
</div>
-->

<!-- Onready send msg-->
<div class="modal fade " id="ayudalos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content jumbotron text-center">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">{{trans('inicio.sonrian')}}</h4>
            </div>
            <div class="modal-body text-center ">
                <div class="modal-dialog">
                    <h4>{{trans('inicio.sonrian.ya')}}</h4>
                </div>
                <p>
                    <a href="/{{trans('menu.sonrian')}}">
                        {{trans('inicio.sonrian.click')}}
                        <div id="cf">
                            <img class="bottom" src="/images/face/face-happy.jpg" />
                            <img class="top" src="/images/face/face-sad.jpg" />
                        </div>
                        <img class="img-responsive"  src="{{asset('/')}}images/programas/sonrian-logo.png" alt="Haz Que Sonrían"/>
                    </a>
                </p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('inicio.sonrian.cerrar')}}</button>
            </div>
        </div>
    </div>
</div>
</div>


<!--<MEJOR VIVIENDA-->


<!-- Intro -->
<div id="fvm" class="intro gris-claro">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

                <div class="row ">
                    <div class="col-md-6  col-md-offset-3 text-center">
                        <div class="service-item">
                            <img class="img-responsive center-block" src="{{asset('/')}}images/contribuimos1.png" alt="">
                            <h4>{{trans('inicio.fvm')}}</h4>
                            <p class="lead">
                                {{trans('inicio.fvm.desc')}}
                            </p>
                        </div>
                    </div>

                </div>

                <a href="#programas" class=" flecha-azul-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>

            </div>
        </div>
    </div>
</div>
<!-- /Intro -->

<!-- Intro -->
<div id="programas" class="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2><em>{{trans('inicio.programas')}}</em> <hr> </h2>

                <div class="row">
                    <div class="col-md-2  col-md-offset-2 text-center">
                        <div class="service-item">
                            <img class="img-responsive" src="{{asset('/')}}images/contribuimos1.png" alt="">
                            <h4>{{trans('inicio.educacion')}}</h4>
                            <hr>

                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <div class="service-item">
                            <img class="img-responsive" src="{{asset('/')}}images/contribuimos2.png" alt="">
                            <h4>{{trans('inicio.vivienda')}}</h4>
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <div class="service-item">
                            <img class="img-responsive" src="{{asset('/')}}images/contribuimos3.png" alt="">
                            <h4>{{trans('inicio.salud')}}</h4>
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <div class="service-item">
                            <img class="img-responsive" src="{{asset('/')}}images/contribuimos4.png" alt="">
                            <h4>{{trans('inicio.alimentacion')}}</h4>
                            <hr>
                        </div>
                    </div>
                </div>




                <a href="#callout" class=" flecha-azul-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>

            </div>
        </div>
    </div>
</div>
<!-- /Intro -->

<!-- Callout -->
<div id="callout" class="callout">
    <div class="vert-text">
        <h1>{{trans('frases.principal')}}</h1>
    </div>
</div>
<!-- /Callout -->
@stop

@section('javascript')
<script>
    $(document).ready(function (){
        $('#ayudalos').modal('toggle');
    });
</script>

@stop