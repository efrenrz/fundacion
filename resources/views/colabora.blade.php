@extends('layouts.base')

@section('titulo')
{{trans('colabora.colabora')}}
@stop

@section('meta_description')
  <meta name="description" content="A partir del reconocimiento de las necesidades de muchos mexicanos, en donde una buena parte de la población padece algún tipo de marginación, llámese alimentaria, de capacidades o patrimonial, así fue como surgió la iniciativa de crear la Fundación Vive Mejor A.C. ">
@stop

@section('contenido')

    <!-- Full Page Image Header Area -->
    <div id="top" class="header_colabora">
      <div class="vert-text">
        <h1>{{trans('colabora.colabora')}}<h1>
        <a href="#colabora" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
      </div>
    </div>
    <!-- /Full Page Image Header Area -->
  
    <!-- Intro -->
    <div id="colabora" class="">

          <div class="container colabora">
            
            <div class="row">
              <div class="col-md-12  text-center">

                <div class="row">
                <h2><em>{{trans('colabora.colabora-nosotros')}}</em> <hr> </h2>
                  <div class="col-md-2 col-md-offset-1 text-center">
                    <a href="#en-especie">
                      <div id="#333399" class="colabora-item ">
                        <i class="fa fa-check fa-4x"></i>
                        <h1 class="lead">{{trans('colabora.en-especie')}}</h1>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-2 text-center">
                    <a href="#en-efectivo">
                      <div id="#990066" class="colabora-item">
                        <i class="fa fa-check fa-4x"></i>
                        <h1 class="lead">{{trans('colabora.en-efectivo')}}</h1>
                      </div>
                    </a>

                  </div>
                  <div class="col-md-2 text-center">
                    <a href="#servicio-social">
                      <div id="#339900" class="colabora-item">
                        <i class="fa fa-check fa-4x"></i>
                        <h1 class="lead">{{trans('colabora.servicio-social')}}</h1>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-2 text-center">
                    <a href="#voluntariado">
                      <div id="#CC3300" class="colabora-item">
                        <i class="fa fa-check fa-4x"></i>
                        <h1 class="lead">{{trans('colabora.voluntariado')}}</h1>
                      </div>
                    </a>
                  </div>

                  <div class="col-md-2 text-center">
                    <a href="#paypal">
                      <div id="#038E8A" class="colabora-item">
                        <i class="fa fa-check fa-4x"></i>
                        <h1 class="lead">PayPal</h1>

                      </div>
                    </a>
                  </div>
                </div>

                


              </div>

              <div class="row separacion">
                <div class="text-center">
                  
                  <a href="#en-especie" class=" flecha-azul-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
                </div>
              </div>


                
                

              </div>
            </div>

          </div>
    </div>
    <!-- /Intro -->

    <!--En especie-->
    <div id="en-especie" class="en-especie">
      <div class="container">
        <div class="row lead">
          <div class="col-md-8 col-md-offset-2">

            <h1>{{trans('colabora.en-especie')}}</h1>
            <hr>

            <div class="jumbotron">
              <ul class="list-unstyled">
                <li>
                  <i class="fa fa-check-circle"></i><b> {{trans('colabora.especie.alimentacion')}}</b> {{trans('colabora.especie.alimentacion.t')}} <a href="" class="texto-gris-claro hover-gris subrayado" data-toggle="modal" data-target="#mejor-alimentacion"> {{trans('colabora.ver-mas')}}</a>
                </li>
                <li>
                  <i class="fa fa-check-circle"></i><b>{{trans('colabora.especie.educacion')}}</b> {{trans('colabora.especie.educacion.desc')}} <a href="" class="texto-gris-claro hover-gris subrayado" data-toggle="modal" data-target="#mejor-educacion"> {{trans('colabora.ver-mas')}}</a>
                </li>
                <li>
                  <i class="fa fa-check-circle"></i><b>{{trans('colabora.especie.salud')}}</b> {{trans('colabora.especie.salud.desc')}} <a href="" class="texto-gris-claro hover-gris subrayado" data-toggle="modal" data-target="#mejor-salud">{{trans('colabora.ver-mas')}}</a>
                </li>
                <li>
                  <i class="fa fa-check-circle"></i><b>{{trans('colabora.especie.vivienda')}}</b> {{trans('colabora.especie.vivienda.desc')}} <a href="" class="texto-gris-claro hover-gris subrayado" data-toggle="modal" data-target="#mejor-vivienda"> {{trans('colabora.ver-mas')}}</a>
                </li>
                <li>
                    {{trans('colabora.especie.donativos')}}
                </li>
                <li>
                    {{trans('colabora.te-interesa')}} <a href="{{trans('menu.contacto')}}/#about" class="texto-blanco hover-gris subrayado"> {{trans('colabora.comunicate')}}<i class="fa fa-hand-o-right"></i></a>
                </li>
              </ul>
            </div>
            <div class="row ">
              <div class="text-center">
                <a href="#en-efectivo" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

                        <!-- MEJOR VIVIENDA -->
                    <div class="modal fade " id="mejor-vivienda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content jumbotron">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">{{trans('colabora.especie.vivienda')}}</h4>
                          </div>
                          <div class="modal-body">
                            <div class="modal-dialog">
                              <h4>{{trans('colabora.especie.vivenda.desc')}}</h4>
                            </div>
                            <p>
                                {{trans('colabora.especie.vivienda.p')}}
                            </p>
                            </div>
                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('colabora.cerrar')}}</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- MEJOR VIVIENDA-->

                    <!-- MEJOR SALUD -->
                    <div class="modal fade" id="mejor-salud" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content jumbotron">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">{{trans('colabora.especie.salud')}}</h4>
                          </div>
                          <div class="modal-body">
                            <div class="modal-dialog">
                              <h4>{{trans('colabora.especie.salud.t1')}}</h4>
                            </div>
                            <div >
                            <p>
                                {{trans('colabora.especie.salud.p1')}}
                            </p>
                            </div>
                            <div class="modal-dialog">
                              <h4>{{trans('colabora.especie.salud.t2')}}</h4>
                            </div>
                            <div >
                            <p>
                                {{trans('colabora.especie.salud.p2')}}
                            </p>
                            </div>
                            <div class="modal-dialog">
                              <h4>{{trans('colabora.especie.salud.t3')}}</h4>
                            </div>
                            <div >
                            <p>
                                {{trans('colabora.especie.salud.p3')}}
                            </p>
                            </div>
                            <div class="modal-dialog">
                              <h4>{{trans('colabora.especie.salud.t4')}}</h4>
                            </div>
                            <div >
                            <p>
                                {{trans('colabora.especie.salud.p4')}}
                            </p>
                            </div>
                            <div class="modal-dialog">
                              <h4>{{trans('colabora.especie.salud.t5')}}</h4>
                            </div>
                            <div >

                            </div>
                            <div class="modal-dialog">
                              <h4>{{trans('colabora.especie.salud.t6')}}</h4>
                            </div>
                            <div >
                            <p>
                                {{trans('colabora.especie.salud.p6')}}
                            </p>
                            </div>
                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('colabora.especie.cerrar')}}</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- MEJOR SALUD-->

                    <!-- MEJOR ALIMENTACION -->
                    <div class="modal fade" id="mejor-alimentacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content jumbotron">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">{{trans('colabora.especie.alimentacion')}}</h4>
                          </div>
                          <div class="modal-body">
                            <div class="modal-dialog">
                              <h4>{{trans('colabora.especie.alimentacion.t')}}</h4>
                            </div>
                            <div >
                            <p>
                                {{trans('colabora.especie.alimentacion.p')}}
                            </p>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('colabora.cerrar')}}</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- MEJOR ALIMENTACION-->

                    <!-- MEJOR EDUCACION-->
                    <div class="modal fade " id="mejor-educacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content jumbotron">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">{{trans('colabora.especie.educacion')}}</h4>
                          </div>
                          <div class="modal-body">
                            <div class="modal-dialog">
                              <h4>{{trans('colabora.especie.educacion.t1')}}</h4>
                            </div>
                            <div >
                            <p>
                                {{trans('colabora.especie.educacion.p1')}}
                            </p>
                            </div>
                            <div class="modal-dialog">
                              <h4>{{trans('colabora.especie.educacion.t2')}}</h4>
                            </div>
                            <div >
                            <p>
                                {{trans('colabora.especie.educacion.p2')}}
                            </p>
                            </div>
                            <div class="modal-dialog">
                              <h4>{{trans('colabora.especie.educacion.t3')}}</h4>
                            </div>
                            <div >
                            <p>
                                {{trans('colabora.especie.educacion.p3')}}
                            </p>
                            </div>
                            <div class="modal-dialog">
                              <h4>{{trans('colabora.especie.educacion.t4')}}</h4>
                            </div>
                            <div >
                            <p>
                                {{trans('colabora.especie.educacion.p4')}}
                            </p>
                            </div>
                            <div class="modal-dialog">
                              <h4>{{trans('colabora.especie.educacion.t5')}}</h4>
                            </div>
                            <div >
                            <p>
                                {{trans('colabora.especie.educacion.p5')}}
                            </p>
                            </div>
                            <div class="modal-dialog">
                              <h4>{{trans('colabora.especie.educacion.t6')}}</h4>
                            </div>
                            <div >
                            <p>
                                {{trans('colabora.especie.educacion.p6')}}
                            </p>
                            </div>
                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('colabora.cerrar')}}</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- MEJOR EDUCACION-->



    <!--En Efectivo-->
    <div id="en-efectivo" class="en-efectivo">
      <div class="container">
        <div class="row lead">
          <div class="col-md-8 col-md-offset-2">
            <h1>{{trans('colabora.en-efectivo')}}</h1>
            <hr>
            <div class="jumbotron">
                <ul class="list-unstyled">
                  <li>{{trans('colabora.efectivo.p0')}}</li>
                  <li>{{trans('colabora.efectivo.p1')}}</li>
                  <li>{{trans('colabora.efectivo.p2')}}<li>
                  <li>{{trans('colabora.efectivo.p3')}}</li>
                  <li>{{trans('colabora.efectivo.p4')}}</li>
                  <li>{{trans('colabora.efectivo.p5')}}</li>
                  <li>
                      {{trans('colabora.te-interesa')}} <a href="{{trans('menu.contacto')}}/#about" class="texto-blanco hover-gris subrayado"> {{trans('colabora.comunicate')}}<i class="fa fa-hand-o-right"></i></a>
                  </li>
                </ul>
            </div>
            <div class="row separacion">
              <div class="text-center">
                <a href="#servicio-social" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!--Servicio Social-->
    <div id="servicio-social" class="servicio-social">
      <div class="container">
        <div class="row lead">
          <div class="col-md-8 col-md-offset-2">
            <h1>{{trans('colabora.servicio-social')}}</h1>
            <hr>

            <div class="jumbotron">
              <ul class="list-unstyled">
                <li>{{trans('colabora.servicio.desc')}}</li>
                <li>{{trans('colabora.te-interesa')}} <a href="{{trans('menu.contacto')}}/#about" class="texto-blanco hover-gris subrayado"> {{trans('colabora.comunicate')}}<i class="fa fa-hand-o-right"></i></a></li>
              </ul>
            </div>
            <div class="row separacion">
              <div class="text-center">
                <a href="#voluntariado" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    

    <!--Voluntariado-->
    <div id="voluntariado" class="voluntariado">
      <div class="container">
        <div class="row lead">
        <div class="col-md-8 col-md-offset-2">
          <h1 class="">{{trans('colabora.voluntariado')}}</h1>
          <hr>
            <div class="jumbotron">
              <ul class="list-unstyled">
                <li>
                    {{trans('colabora.voluntariado.p1')}}
                </li>
                <li>
                    {{trans('colabora.voluntariado.p2')}}
                  <ul>
                    <li>
                        {{trans('colabora.voluntariado.p3')}}
                    </li>
                    <li>
                        {{trans('colabora.voluntariado.p4')}}
                    </li>
                    <li>
                        {{trans('colabora.voluntariado.p5')}}
                    </li>
                    <li>
                        {{trans('colabora.voluntariado.p6')}}
                    </li>
                    <li>
                        {{trans('colabora.voluntariado.p7')}}
                    </li>
                    <li>
                        {{trans('colabora.voluntariado.p8')}}
                    </li>
                    <li>
                        {{trans('colabora.voluntariado.p9')}}
                    </li>
                  </ul>
                </li>
                <li>
                  <i class="fa fa-check-circle"> </i>{{trans('colabora.voluntariado.p10')}}
                </li>
                <li>
                    {{trans('colabora.te-interesa')}} <a href="{{trans('menu.contacto')}}/#about" class="texto-blanco hover-gris subrayado"> {{trans('colabora.comunicate')}}<i class="fa fa-hand-o-right"></i></a>
                </li>
              </ul>
            </div>
            <div class="row separacion">
              <div class="text-center">
                <a href="#voluntariado-internacinoal" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Paypal-->
    <div id="paypal" class="paypal">
      <div class="container">
        <div class="row lead">
        <div class="col-md-8 col-md-offset-2">
          <h1 class="">PayPal</h1>
          <hr>
            <div class="jumbotron">
              <ul class="list-unstyled">
                <li>{{trans('colabora.paypal')}}</li>
                <li>
                  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="89GSFVYPEWQSC">
<input type="image" class="img-responsive" src="http://www.fundacionvivemejor.org/images/Donar.png" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>

                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>




  
    <!-- Callout -->
    <div id="" class="callout_colabora">
      <div class="vert-text">
        <h1>{{trans('frases.principal')}}</h1>
      </div>
    </div>
    <!-- /Callout -->

@stop

@section('javascript')

<script>
$(document).ready(function(){
    var color;
    $('.colabora-item').hover(function(){
      color = $(this).attr('id');
      $(this).stop(true).animate({ 
        backgroundColor: color,
        color: '#fff'
         },500);
    },function(){
      $(this).stop(true).animate({ 
        backgroundColor: '#fff',
        color:'#666666'
      },500);
    });
});
</script>

@stop

