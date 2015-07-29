@extends('layouts.base')

@section('titulo')
Haz Que Sonrian
@endsection

@section('meta_description')
<meta name="description" content="Colecta de juguetes para donarlos a los niños de localidades con altos índices de marginación.">
@endsection

@section('contenido')
    <!-- Full Page Image Header Area -->
    <div id="top" class="header_sonrian">
      <div class="vert-text">
        <h1>Haz Que Sonrían 2015</h1>
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
                        <div class="text-center"><img src="{{asset('/')}}images/programas/sonrian-logo.png" alt="{{trans('menu.frio.t')}}"/></div>
                        <div class="text-center lead">
                            <p>
                                Colecta de juguetes del 20 de marzo al 17 de abril
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="text-center">

                            <div align="center" class="video-container">
                                <video autoplay class="embed-responsive-item">
                                    <source src="/video/haz-que-sonrian.mp4" type=video/mp4>
                                </video>
                            </div>
                        </div>
                    </div>

                    <hr/>

                    <div class="col-md-8 lead col-md-offset-2 text-center">
                        <h3>Obtetivo:</h3>
                        Mediante la participación social de la iniciativa privada, instituciones educativas, organizaciones de la sociedad civil y la población en general, recaudar la mayor cantidad de juguetes para ser entregados a niños y niñas de comunidades de muy alta marginación en municipios del estado de Querétaro y Guanajuato por su día.
                    </div>
                    <div class="col-md-12 lead text-center">
                        <b>
                            Para este día del niño,  sólo tú puedes dibujar sonrisas en sus rostros.
                        </b>
                    </div>
                    <div class="col-md-8 col-lg-offset-2 lead text-center">
                        <b>
                            Participa y únete a esta gran campaña social, beneficiando a niñ@s de localidades más vulnerables  en el Estado de Querétaro.
                        </b>
                    </div>
                    <div class="col-md-12 lead text-center">
                        <img src="/images/ninas.png" alt="Niñas" class="img-responsive center-block" />
                    </div>
                    <div class="col-md-8 col-md-offset-2 lead text-center">
                        <b><i class="fa fa-check-circle" style="color: #f9ff00"  ></i>  Características de los juguetes:</b>
                        <br/>
                        Para niños de 0 a 12 años de edad, que sean nuevos, que no usen pilas, costo variable a elección del donante
                    </div>
                    <div class="col-md-8 col-md-offset-2 lead text-center">
                        <b><i class="fa fa-check-circle" style="color: #f9ff00"  ></i>  Lugar a beneficiar:</b>
                        <br/>
                        Municipio de Amealco, Qro. Y San Luis de la Paz, Gto., además de apoyar a otras Organizaciones para la misma causa.
                    </div>
                    <div class="col-md-8 col-md-offset-2 lead text-center">
                        <b><i class="fa fa-check-circle" style="color: #f9ff00"  ></i>Fecha:</b>
                        <br/>
                        25 de Abril
                    </div>
                    <div class="col-md-8 col-md-offset-2 lead text-center">
                        <b><i class="fa fa-check-circle" style="color: #f9ff00"  ></i>Meta:</b>
                        <br/>
                        3,000 + un juguetes
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
                            <button type="button" class="btn btn-info">{{trans('frio.efectivo.link')}}</button>
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
                {{trans('frio.recibo')}} <a href="mailto:contacto@fundacionvivemejor.org">contacto@fundacionvivemejor.org</a>
                <br/><br/>
                <a target="_blank" href="/archivos/sonrian2015.pdf">{{trans('frio.archivo')}}</a>
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
    <div id="callout" class="callout_sonrian">
      <div class="vert-text">
        <h1>Mi sueño es hacer labor altruista</h1>
      </div>
    </div>
    <!-- /Callout -->
@stop
