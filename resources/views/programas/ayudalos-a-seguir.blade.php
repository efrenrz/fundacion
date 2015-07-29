@extends('layouts.base')

@section('titulo')
    Ayudalos a Seguir
@stop

@section('contenido')
<!-- Full Page Image Header Area -->
<div id="top" class="header_ayudalos">
    <div class="vert-text">
        <h1>{{trans('ayudalos.ayudalos')}}</h1>
        <a href="#about" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
    </div>
</div>
<!-- /Full Page Image Header Area -->

<!-- Intro -->
<div id="about" class="intro" style="background-color: #26b526">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left texto-blanco">
                <div class="row">
                    <div class="text-center"><img src="{{asset('/')}}images/programas/ayudalos-logo.png" alt="Ayudalos a Seguir"/></div>
                </div>
                <hr/>
                <div class="text-center lead">
                    <p>
                        {{trans('ayudalos.ayudalos.desc')}}
                    </p>
                </div>
                <div class="col-sm-4 col-md-3 col-md-offset-4 col-sm-offset-3 text text-center">
                    <img class="img-responsive" src="{{asset('/')}}images/programas/ayudalos-nino.png" alt="Ayudalos a seguir 2014"/>
                </div>
                <div class="col-sm-5 col-md-3 lead">
                    <p class="">
                        {{trans('ayudalos.donar')}}
                        <ul class="list-unstyled">
                        {{trans('ayudalos.donar.desc')}}
                        </ul>
                    </p>
                </div>
            </div>

            <div class="intro texto-blanco text-center">
                    <p><br/><br/></p>
                <hr/>
                <h2>
                    {{trans('ayudalos.frase')}}
                </h2>
            </div>
        </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="#como-ayudar" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
                </div>
            </div>
    </div>
</div>
<!-- /Intro -->


<!-- Intro -->
<div id="como-ayudar" class="intro" >
    <div class="container">
        <div class="row texto-gris">
            <div class="col-md-12 text-left">
                <div class="row">
                    <div class="text-center lead">
                        <h1>
                            {{trans('ayudalos.como-ayudar')}}
                        </h1>
                    </div>
                </div>
                <hr/>
                <div class="row">

                </div>
                <div class="col-sm-4 col-md-3 text-center">
                    <div class="gris-claro borde-redondo">
                        <div class="cuadro-ayudalos">
                            {{trans('ayudalos.especie')}}
                            <br/><br/>
                            {{trans('ayudalos.especie.desc')}}
                        </div>
                        <a target="_blank" href="https://www.google.com/maps/preview?ll=20.572574,-100.403605&z=15&t=m&hl=es-MX&gl=US&mapclient=embed&cid=6148762524072794112&source=newuser-ws">
                            <button type="button" class="btn btn-info">
                                {{trans('ayudalos.especie.link')}}
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3  text-center">
                    <div class="gris-claro borde-redondo">
                        <div class="cuadro-ayudalos">
                            {{trans('ayudalos.efectivo')}}
                            <br/><br/>
                            {{trans('ayudalos.efectivo.desc')}}
                        </div>
                        <button type="button" class="btn btn-info">{{trans('ayudalos.efectivo.link')}}</button>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3  text-center ">
                    <div class="gris-claro borde-redondo">
                        <div class="cuadro-ayudalos">
                            {{trans('ayudalos.paypal')}}
                        </div>
                        <a href="#" onclick="document.getElementById('form-paypal').submit();">
                            <button type="button" class="btn btn-info">
                                <form id="form-paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="TMFTSG66UKKDS">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                    {{trans('ayudalos.paypal.link')}}
                                </form>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3  text-center ">
                    <div class="gris-claro borde-redondo">
                        <div class="cuadro-ayudalos">
                            {{trans('ayudalos.servicio')}}
                        </div>
                        <a href="http://www.fundacionvivemejor.org/contacto#about">
                            <button type="button" class="btn btn-info">{{trans('ayudalos.contactanos')}}</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row intro text-center">
            {{trans('ayudalos.recibo')}}
            <br/><br/>
            <a href="archivos/ayudalos2014.pdf">{{trans('ayudalos.archivo')}}</a>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p><br/><br/></p>
                <a href="#callout" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- /Intro -->

<!-- Callout -->
<div id="callout" class="callout_ayudalos">
    <div class="vert-text">
        <h1>{{trans('ayudalos.frase2')}}</h1>
    </div>
</div>
<!-- /Callout -->
@stop
