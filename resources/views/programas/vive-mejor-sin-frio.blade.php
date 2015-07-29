@extends('layouts.base')

@section('titulo')
    {{trans('menu.frio.t')}}
@stop

@section('contenido')
<!-- Full Page Image Header Area -->
<div id="top" class="header_frio">
    <div class="vert-text">
        <h1>{{trans('frio.frio')}}</h1>
        <a href="#about" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
    </div>
</div>
<!-- /Full Page Image Header Area -->

<!-- Intro -->
<div id="about" class="intro" style="background-color: #38678b">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left texto-blanco">
                <div class="row">
                    <div class="text-center"><img src="{{asset('/')}}images/programas/frio-logo.png" alt="{{trans('menu.frio.t')}}"/></div>
                </div>
                <hr/>
                <div class="text-center lead">
                    <p>
                        {{trans('frio.frio.desc')}}
                    </p>
                </div>
                <div class="col-md-12 lead text-center">
                    <i class="fa fa-check-circle fa-1x" style="color: #ffff00"></i>
                    Dona una cobija nueva
                </div>

                <div class="col-md-12 lead text-center">
                    <i class="fa fa-check-circle fa-1x" style="color: #ff27bc"></i>
                    Acude a nuestros centros de acopio
                </div>
            </div>

            <div class="intro texto-blanco text-center">
                    <p><br/><br/></p>
                <hr/>
                <h2>
                    {{trans('frio.frase')}}
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
                            {{trans('frio.como-ayudar')}}
                        </h1>
                    </div>
                </div>
                <hr/>
                <div class="row">

                </div>
                <div class="col-sm-4 col-md-3 text-center">
                    <div class="gris-claro borde-redondo">
                        <div class="cuadro-ayudalos">
                            {{trans('frio.especie')}}
                            <br/><br/>
                            {{trans('frio.especie.desc')}}
                        </div>
                        <a target="_blank" href="https://www.google.com/maps/preview?ll=20.572574,-100.403605&z=15&t=m&hl=es-MX&gl=US&mapclient=embed&cid=6148762524072794112&source=newuser-ws">
                            <button type="button" class="btn btn-info">
                                {{trans('frio.especie.link')}}
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3  text-center">
                    <div class="gris-claro borde-redondo">
                        <div class="cuadro-ayudalos">
                            {{trans('frio.efectivo')}}
                            <br/><br/>
                            {{trans('frio.efectivo.desc')}}
                        </div>
                        <button type="button" class="btn btn-info">{{trans('fro.efectivo.link')}}</button>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3  text-center ">
                    <div class="gris-claro borde-redondo">
                        <div class="cuadro-ayudalos">
                            {{trans('frio.paypal')}}
                        </div>
                        <a href="#" onclick="document.getElementById('form-paypal').submit();">
                            <button type="button" class="btn btn-info">
                                <form id="form-paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="TMFTSG66UKKDS">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                    {{trans('frio.paypal.link')}}
                                </form>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3  text-center ">
                    <div class="gris-claro borde-redondo">
                        <div class="cuadro-ayudalos">
                            {{trans('frio.servicio')}}
                        </div>
                        <a href="http://www.fundacionvivemejor.org/contacto#about">
                            <button type="button" class="btn btn-info">{{trans('frio.contactanos')}}</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row intro text-center">
            {{trans('frio.recibo')}}
            <br/><br/>
            <a target="_blank" href="{{LaravelLocalization::getNonLocalizedURL('archivos/vivemejor-sinfrio.pdf')}}">{{trans('frio.archivo')}}</a>
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
<div id="callout" class="callout_frio">
    <div class="vert-text">
        <h1>{{trans('frio.frase2')}}</h1>
    </div>
</div>
<!-- /Callout -->
@stop
