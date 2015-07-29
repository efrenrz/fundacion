@extends('layouts.base')

@section('titulo')
{{trans('como-trabajamos.como-trabajamos')}}
@stop

@section('meta_description')
	<meta name="description" content="A partir del reconocimiento de las necesidades de muchos mexicanos, en donde una buena parte de la población padece algún tipo de marginación, llámese alimentaria, de capacidades o patrimonial, así fue como surgió la iniciativa de crear la Fundación Vive Mejor A.C. ">
@stop

@section('contenido')

    <!-- Full Page Image Header Area -->
    <div id="top" class="header_comoTrabajamos">
      <div class="vert-text">
        <h1>{{trans('como-trabajamos.como-trabajamos')}}</h1>
        <a href="#mejor-educacion" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
      </div>
    </div>
    <!-- /Full Page Image Header Area -->

        <!-- Como trabajamos -->
          <div id="quienes-somos" class="intro">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center lead">
                  <h2><em></em> <hr> </h2>
                  <p>
                    <em>
                        {{trans('como-trabajamos.como-trabajamos.desc')}}
                    </em>
                  <p>
                    <a href="#mejor-educacion" class=" flecha-azul-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
                  </p>

                  </p>
                </div>
              </div>
            </div>
          </div>
    <!-- /como trajamos -->
  
    <!-- Intro -->
    <div id="mejor-educacion" class="">
      <div class="mejor-educacion">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center ">
                <div class="row text-center pagination-centered">
                <div class="col-md-12 text-left">
                </div>
                	<div class="col-md-4 text-right ">
                		<img class="featurette-image img-circle img-responsive pull-right" src="{{asset('/')}}images/mejor-educacion.png" alt="Quienes Somos">
                	</div>
                	<div class="col-md-7 text-left">
                		<h3 class="featurette-heading"><span class="text-muted">{{trans('como-trabajamos.mejor-educacion')}}</span></h3>
                    <hr>

                    <h3>{{trans('como-trabajamos.que-hacemos')}}</h3>
                		<p class="lead">
                            {{trans('como-trabajamos.mejor-educacion.que')}}
                    </p>
                    <h3>
                        {{trans('como-trabajamos.como-lo-hacemos')}}
                    </h3>
                    <p >
                      <small>
                          {{trans('como-trabajamos.mejor-educacion.como')}}
                      </small>
                    </p>
                	</div>
                </div>
    		
                <a href="#mejor-vivienda" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
                

              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- /Intro -->

    <div id="mejor-vivienda" class="">
      <div id="" class="mejor-vivienda">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center ">
                <div class="row text-center pagination-centered">
                  <div class="col-md-7 text-right">
                    <h3 class="featurette-heading"><span class="text-muted">{{trans('como-trabajamos.mejor-vivienda')}}</span></h3>
                    <hr>

                    <h3>{{trans('como-trabajamos.que-hacemos')}}</h3>
                    <p class="lead">
                        {{trans('como-trabajamos.mejor-vivienda.que')}}
                    </p>
                    <h3>
                      {{trans('como-trabajamos.como-lo-hacemos')}}
                    </h3>
                    <p >
                      <small>
                          {{trans('como-trabajamos.mejor-vivienda.como')}}
                      </small>
                    </p>
                  </div>
                  <div class="col-md-4 text-right ">
                    <img class="featurette-image img-circle img-responsive pull-left" src="{{asset('/')}}images/mejor-vivienda.png" alt="Quienes Somos">
                  </div>


                </div>
                
        
                <a href="#mejor-salud" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>

              </div>
            </div>
          </div>
        </div>
    </div>
    

    <!-- Mejor Salud-->
    <div id="mejor-salud" class="">
      <div class="mejor-salud">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center ">
                <div class="row text-center pagination-centered">
                <div class="col-md-12 text-left">
                </div>
                  <div class="col-md-4 text-right ">
                    <img class="featurette-image img-circle img-responsive pull-right" src="{{asset('/')}}images/mejor-salud.png" alt="Quienes Somos">
                  </div>
                  <div class="col-md-7 text-left">
                    <h3 class="featurette-heading"><span class="text-muted">{{trans('como-trabajamos.mejor-salud')}}</span></h3>
                    <hr>

                    <h3>{{trans('como-trabajamos.que-hacemos')}}</h3>
                    <p class="lead">
                        {{trans('como-trabajamos.mejor-educacion.que')}}
                    </p>
                    <h3>
                        {{trans('como-trabajamos.como-lo-hacemos')}}
                    </h3>
                    <p >
                      <small>
                          {{trans('como-trabajamos.mejor-salud.como')}}
                      </small>
                    </p>
                  </div>
                </div>
        
                <a href="#mejor-alimentacion" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>

              </div>
            </div>
          </div>
        </div>
    </div>

    <!--Mejor Alimentación-->
    <div id="mejor-alimentacion" class="">
      <div class="mejor-alimentacion">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center ">
                <div class="row text-center pagination-centered">
                  <div class="col-md-7 text-right">
                    <h3 class="featurette-heading"><span class="text-muted">{{trans('como-trabajamos.mejor-alimentacion')}}</span></h3>
                    <hr>

                    <h3>{{trans('como-trabajamos.que-hacemos')}}</h3>
                    <p class="lead">
                        {{trans('como-trabajamos.mejor-alimentacion.que')}}
                    </p>
                    <h3>
                        {{trans('como-trabajamos.como-lo-hacemos')}}
                    </h3>
                    <p >
                      <small>
                          {{trans('como-trabajamos.mejor-alimentacion.como')}}
                      </small>
                    </p>
                  </div>
                  <div class="col-md-4 text-right ">
                    <img class="featurette-image img-circle img-responsive pull-left" src="{{asset('/')}}images/mejor-alimentacion.png" alt="Quienes Somos">
                  </div>


                </div>
                
        
                <a href="#proyectos-productivos" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>

              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Proyectos Productivos-->
    <div id="proyectos-productivos" class="">
      <div class="proyectos-productivos">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center ">
                <div class="row text-center pagination-centered">
                <div class="col-md-12 text-left">
                </div>
                  <div class="col-md-4 text-right ">
                  
                    <img class="visible-lg visible-md img-responsive " src="{{asset('/')}}images/proyectos-concluidos.jpg" alt="Quienes Somos">
                    <img class="visible-sm visible-xs  img-responsive " src="{{asset('/')}}images/proyectos-concluidos-xs.jpg" alt="Quienes Somos">
                  
                  </div>
                  <div class="col-md-7 text-left">
                    <h3 class="featurette-heading"><span class="text-muted">{{trans('como-trabajamos.proyecto')}}</span></h3>
                    <hr>
                    <h4>
                        {{trans('como-trabajamos.proyecto.nombre')}}
                    </h4>
                    <p>
                        {{trans('como-trabajamos.proyecto.nombre2')}}
                    </p>
                    <h4>
                        {{trans('como-trabajamos.proyecto.fecha')}}
                    </h4>
                    <p>
                        {{trans('como-trabajamos.proyecto.fecha2')}}
                    </p>
                    <h4>
                        {{trans('como-trabajamos.proyecto.lugar')}}
                    </h4>
                    <p>
                        {{trans('como-trabajamos.proyecto.lugar2')}}
                    </p>
                    <h4>
                        {{trans('como-trabajamos.proyecto.desc')}}
                    </h4>
                    <p>
                        {{trans('como-trabajamos.proyecto.desc2')}}
                    </p>
                    <h4>
                        {{trans('como-trabajamos.proyecto.logros')}}
                    </h4>
                    <p>
                        {{trans('como-trabajamos.proyecto.logros2')}}
                    </p>
                    <h4>
                        {{trans('como-trabajamos.proyecto.colaboradores')}}
                    </h4>
                    <p>
                        {{trans('como-trabajamos.proyecto.colaboradores2')}}
                    </p>

                  </div>
                </div>
        
                <a href="#campanas-permanentes" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>

              </div>
            </div>
          </div>
        </div>
    </div>

    <!--Mejor Alimentación-->
    <div id="campanas-permanentes" class="">
      <div class="mejor-alimentacion">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center ">
                <div class="row text-center pagination-centered">
                  <div class="col-md-7 text-right">
                    <h3 class="featurette-heading"><span class="text-muted">{{trans('como-trabajamos.campanas')}}</span></h3>
                    <hr>

                    
                    <p class="lead">
                        {{trans('como-trabajamos.campanas.desc')}}
                    </p>
                    <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#queretaro-vive-mejor-sin-frio">
                        {{trans('como-trabajamos.campanas.frio')}} <i class="fa fa-external-link"></i>
                    </button>
                    <!-- Vive Mejor Sin Frio -->
                    <div class="modal fade" id="queretaro-vive-mejor-sin-frio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">{{trans('como-trabajamos.campanas.frio')}}</h4>
                          </div>
                          <div class="modal-body">
                            <div class="modal-dialog">
                              <h4>{{trans('como-trabajamos.campanas.periodo')}}</h4>
                                {{trans('como-trabajamos.campanas.frio.periodo')}}
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.desc2')}}</h4>
                                {{trans('como-trabajamos.campanas.frio.descripcion')}}
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.historial')}}</h4>
                              <h4>2012</h4>
                              <hr>
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.lugares')}}</h4>
                                {{trans('como-trabajamos.campanas.frio.lugares.2012')}}
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.logros')}}</h4>
                                {{trans('como-trabajamos.campanas.frio.logros.2012')}}
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.colaboradores')}}</h4>
                                {{trans('como-trabajamos.campanas.frio.colaboradores.2012')}}
                            </div>
                            <div >
                              <h4>2013</h4>
                              <hr>
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.lugares')}}</h4>
                                {{trans('como-trabajamos.campanas.frio.lugares.2013')}}
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.logros')}}</h4>
                                {{trans('como-trabajamos.campanas.frio.logros.2013')}}
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.colaboradores')}}</h4>
                                {{trans('como-trabajamos.campanas.frio.colaboradores.2013')}}
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('como-trabajamos.campanas.cerrar')}}</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Vive Mejor sn frio-->

                    <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#ayudalos-a-seguir">
                        {{trans('como-trabajamos.campanas.ayudalos')}} <i class="fa fa-external-link"></i>
                    </button>
                    <!-- Ayudalos a seguir -->
                    <div class="modal fade" id="ayudalos-a-seguir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">{{trans('como-trabajamos.campanas.ayudalos')}}</h4>
                          </div>
                          <div class="modal-body">
                            <div class="modal-dialog">
                              <h4>{{trans('como-trabajamos.campanas.periodo')}}</h4>
                                {{trans('como-trabajamos.campanas.ayudalos.periodo')}}
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.desc2')}}</h4>
                                {{trans('como-trabajamos.campanas.ayudalos.descripcion')}}
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.historial')}}</h4>
                              <h4>2012</h4>
                              <hr>
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.lugares')}}</h4>
                                {{trans('como-trabajamos.campanas.ayudalos.lugares.2012')}}
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.logros')}}</h4>
                                {{trans('como-trabajamos.campanas.ayudalos.logros.2012')}}
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.colaboradores')}}</h4>
                                {{trans('como-trabajamos.campanas.ayudalos.colaboradores.2012')}}
                            </div>
                            <div >
                              <h4>2013</h4>
                              <hr>
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.lugares')}}</h4>
                                {{trans('como-trabajamos.campanas.ayudalos.lugares.2013')}}
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.logros')}}</h4>
                                {{trans('como-trabajamos.campanas.ayudalos.logros.2013')}}
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.colaboradores')}}</h4>
                                {{trans('como-trabajamos.campanas.ayudalos.colaboradores.2013')}}
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('como-trabajamos.campanas.cerrar')}}</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Ayudalos a seguir-->

                    <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#haz-que-sonrian">
                        {{trans('como-trabajamos.campanas.sonrian')}} <i class="fa fa-external-link"></i>
                    </button>
                    <!-- Haz que sonrían  -->
                    <div class="modal fade" id="haz-que-sonrian" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">{{trans('como-trabajamos.campanas.sonrian')}}</h4>
                          </div>
                          <div class="modal-body">
                            <div class="modal-dialog">
                              <h4>{{trans('como-trabajamos.campanas.periodo')}}</h4>
                                {{trans('como-trabajamos.campanas.sonrian.periodo')}}
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.desc2')}}</h4>
                                {{trans('como-trabajamos.campanas.sonrian.descripcion')}}
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.historial')}}</h4>
                              <h4>2012</h4>
                              <hr>
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.lugares')}}</h4>
                                {{trans('como-trabajamos.campanas.sonrian.lugares.2012')}}
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.logros')}}</h4>
                                {{trans('como-trabajamos.campanas.sonrian.logros.2012')}}
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.lugares')}}</h4>
                                {{trans('como-trabajamos.campanas.sonrian.lugares.2012')}}
                            </div>
                            <div >
                              <h4>2013</h4>
                              <hr>
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.lugares')}}</h4>
                                {{trans('como-trabajamos.campanas.sonrian.lugares.2013')}}
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.logros')}}</h4>
                                {{trans('como-trabajamos.campanas.sonrian.logros.2013')}}
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.colaboradores')}}</h4>
                                {{trans('como-trabajamos.campanas.sonrian.colaboradores.2013')}}
                            </div>
                            <div >
                              <h4>2014</h4>
                              <hr>
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.lugares')}}</h4>
                                {{trans('como-trabajamos.campanas.sonrian.lugares.2014')}}
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.logros')}}</h4>
                                {{trans('como-trabajamos.campanas.sonrian.logros.2014')}}
                            </div>
                            <div >
                              <h4>{{trans('como-trabajamos.campanas.colaboradores')}}</h4>
                                {{trans('como-trabajamos.campanas.sonrian.colaboradores.2014')}}
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('como-trabajamos.campanas.cerrar')}}</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Haz que sonrían-->

                    <h3>{{trans('como-trabajamos.como-ayudar')}}</h3>

                    <div class="col-sm-7 col-md-offset-4">
                      <div class="list-group">
                        <a href="{{trans('menu.colabora')}}/#voluntariado" class="list-group-item list-group-item-success">{{trans('como-trabajamos.como.voluntario')}}<i class="fa fa-hand-o-right"></i></a>
                        <a href="javascript:void(0)" class="list-group-item list-group-item-info">{{trans('como-trabajamos.como.recomendacion')}}<i class="fa fa-hand-o-right"></i></a>
                        <a href="{{trans('menu.colabora')}}/#en-especie" class="list-group-item list-group-item-warning">{{trans('como-trabajamos.como.especie')}}<i class="fa fa-hand-o-right"></i></a>
                        <a href="{{trans('menu.colabora')}}/#en-efectivo" class="list-group-item list-group-item-danger">{{trans('como-trabajamos.como.efectivo')}}<i class="fa fa-hand-o-right"></i></a>
                      </div>
                    </div>



                  </div>
                  <div class="col-md-4 text-right ">
                    <img class="featurette-image img-circle img-responsive pull-left" src="{{asset('/')}}images/campanas-permanentes.png" alt="Quienes Somos">
                  </div>


                </div>
                
        
                <a href="#callout" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>

              </div>
            </div>
          </div>
        </div>
    </div>

  
    <!-- Callout -->
    <div id="callout" class="callout_comoTrabajamos">
      <div class="vert-text">
        <h1>{{trans('frases.principal')}}</h1>
      </div>
    </div>
    <!-- /Callout -->

@stop