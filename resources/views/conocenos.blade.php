@extends('layouts.base')

@section('titulo')
{{trans('conocenos.quienes-somos')}}
@stop

@section('meta_description')
	<meta name="description" content="A partir del reconocimiento de las necesidades de muchos mexicanos, en donde una buena parte de la población padece algún tipo de marginación, llámese alimentaria, de capacidades o patrimonial, así fue como surgió la iniciativa de crear la Fundación Vive Mejor A.C. ">
  <link rel="stylesheet" href="{{asset('/')}}css/sass-compiled.css" type="text/css" />
@stop

@section('contenido')

    <!-- Full Page Image Header Area -->
    <div id="top" class="header_quienesSomos">
      <div class="vert-text">
        <h1>{{trans('conocenos.quienes-somos')}}</h1>
        <a href="#quienes-somos" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
      </div>
    </div>
    <!-- /Full Page Image Header Area -->
  
    <!-- Quienes Somos -->
          <div id="quienes-somos" class="intro">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center lead">
                  <h2><em>{{trans('conocenos.quienes-somos')}}</em> <hr> </h2>
                  <p><em>
                          {{trans('conocenos.quienes-somos.desc')}}
                     </em>
                  <p>
                    <a href="#antecedentes" class=" flecha-azul-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
                  </p>

                  </p>
                </div>
              </div>
            </div>
          </div>
    <!-- /Intro -->

    <!-- Antecedentes -->
          <div id="antecedentes" class="gris-claro separacion">
            <div class="container ">
              <div class=" row">
                <div class="  text-center lead">
                  <div class="col-md-4 text-right">
                    <img class="featurette-image img-circle img-responsive pull-left" src="{{asset('/')}}images/quienes_somos.png" alt="Quienes Somos">
                  </div>
                  <div class="col-md-7 text-left">
                    <h2 class="featurette-heading "><span class="text-muted marron">{{trans('conocenos.antecedentes')}}</span></h2>
                    <hr>
                    <p>
                        {{trans('conocenos.antecedentes.desc')}}
                    </p>
                   
                  </div>
                </div>
              </div>
             <div class="row text-center">
                <p>
                  <a href="#filosofia" class=" flecha-azul-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
                </p>
              </div>
            </div>
          </div>

    <!-- Folofosia
    ================================================== -->
    <div id="filosofia" class="filosofia"></div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img data-src="holder.js/900x600/auto/#3399CC:#3399CC/text:Misión" alt="Misión">
          <div class="container">
            <div class="carousel-caption">
              <h1>{{trans('conocenos.filosofia')}}<h1>
              
              <h2>{{trans('conocenos.mision')}}</h2>
              <hr>
              <p class="lead">
                  {{trans('conocenos.mision.desc')}}
              </p>
              <a href="#objetivos" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img data-src="holder.js/900x600/auto/#3399CC:#3399CC/text:Visión" alt="Visión">
          <div class="container">
            <div class="carousel-caption">
              <h1>{{trans('conocenos.filosofia')}}</h1>
              <h2>{{trans('conocenos.vision')}}</h2>
              <hr>
              <p class="lead">
                  {{trans('conocenos.vision.desc')}}
              <p>
              <a href="#objetivos" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>

            </div>
          </div>
        </div>
        <div class="item">
          <img data-src="holder.js/900x600/auto/#3399CC:#3399CC/text:Valores" alt="Valores">
          <div class="container">
            <div class="carousel-caption">
              <h1>{{trans('conocenos.filosofia')}}</h1>
              <h2>{{trans('conocenos.valores')}}</h2>
              <hr>
              <p class="lead subrayado">
              	{{trans('conocenos.valores.desc')}}
              </p>
              <a href="#objetivos" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>

            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>

    <!-- Objetivos-->
      <div id="objetivos" class="intro">
        <div class="container">
          <div class="row">
            <div class="col-md-7 col-md-offset-2 lead">
              <h2 class="text-center">{{trans('conocenos.objetivos')}}<hr> </h2>
              <div class="table-responsive">
                <table>
                  <tbody>
                    <tr>
                      <td class="col-md-1 text-right rojo-claro"><i class="fa fa-chevron-circle-right fa-2x"></i></td>
                      <td class="col-md-3">{{trans('conocenos.objetivo1')}}</td>
                    </tr>
                    <tr>
                      <td class="col-md-1 text-right rojo-claro"><i class="fa fa-chevron-circle-right fa-2x"></i></td>
                      <td class="col-md-3">{{trans('conocenos.objetivo2')}}</td>
                    </tr>
                    <tr>
                      <td class="col-md-1 text-right rojo-claro"><i class="fa fa-chevron-circle-right fa-2x"></i></td>
                      <td class="col-md-3">{{trans('conocenos.objetivo3')}}</td>
                    </tr>
                    <tr> 
                      <td class="col-md-1 text-right rojo-claro"><i class="fa fa-chevron-circle-right fa-2x"></i></td>
                      <td class="col-md-3">{{trans('conocenos.objetivo4')}}</td>
                    </tr>
                    <tr>
                      <td class="col-md-1 text-right rojo-claro"><i class="fa fa-chevron-circle-right fa-2x"></i></td>
                      <td class="col-md-3">{{trans('conocenos.objetivo5')}}</td>
                    </tr>
                    <tr>
                      <td class="col-md-1 text-right rojo-claro"><i class="fa fa-chevron-circle-right fa-2x"></i></td>
                      <td class="col-md-3">{{trans('conocenos.objetivo6')}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row text-center">
                <p>
                  <a href="#organigrama" class=" flecha-azul-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!--Organigrama-->
      <div id="organigrama" class="intro fondo-gris-obscuro texto-gris-claro">
        <div class="container">
          <div class="row ">
            <div class="col-md-10 col-md-offset-1 lead text-center">
              <h2 class="text-center"><hr>{{trans('conocenos.organigrama')}}</h2>
              
              <div class="pic">
                  <img src="{{asset('/')}}images/ourteam/mariana.jpg" class="pic-image" alt="Pic"/>
                  <a id="#minicv" class="minicv" href="minicv/mariana" data-fancybox-type="iframe">
                    <span class="pic-caption bottom-to-top">
                        <h3 class="">Mariana Guerrero Chávez</h3>
                        <p>{{trans('minicv.mariana.cargo')}}</p>
                    </span>
                  </a>
              </div>
              <div class="pic">
                  <img src="{{asset('/')}}images/ourteam/amaranta.jpg" class="pic-image" alt="Pic"/>
                  <a id="#minicv" class="minicv" href="minicv/amaranta" data-fancybox-type="iframe">
                    <span class="pic-caption bottom-to-top">
                        <h3 class="">Amaranta Isabel Medina González</h3>
                        <p>{{trans('minicv.amaranta.cargo')}}</p>
                    </span>
                  </a>
              </div>
              <div class="pic">
                  <img src="{{asset('/')}}images/ourteam/chano.jpg" class="pic-image" alt="Pic"/>
                  <a id="#minicv" class="minicv" href="minicv/chano" data-fancybox-type="iframe">
                    <span class="pic-caption bottom-to-top">
                        <h3 class="">Feliciano Guerrero Chávez</h3>
                        <p>{{trans('minicv.feliciano.cargo')}}</p>
                    </span>
                  </a>
              </div>
              <div class="pic">
                  <img src="{{asset('/')}}images/ourteam/lalo.jpg" class="pic-image" alt="Pic"/>
                  <a id="#minicv" class="minicv" href="minicv/lalo" data-fancybox-type="iframe">
                    <span class="pic-caption bottom-to-top">
                        <h3 class="">Eduardo Guerrero Chávez</h3>
                        <p>{{trans('minicv.eduardo.cargo')}}</p>
                    </span>
                  </a>
              </div>
              <div class="pic">
                  <img src="{{asset('/')}}images/ourteam/hugo.jpg" class="pic-image" alt="Pic"/>
                  <a id="#minicv" class="minicv" href="minicv/hugo" data-fancybox-type="iframe">
                    <span class="pic-caption bottom-to-top">
                        <h3 class="">Hugo Rodríguez Reséndiz</h3>
                        <p>{{trans('minicv.hugo.cargo')}}</p>
                    </span>
                  </a>
              </div>
              
              <div class="pic">
                  <img src="{{asset('/')}}images/ourteam/rebe.jpg" class="pic-image" alt="Pic"/>
                  <a id="#minicv" class="minicv" href="minicv/rebe" data-fancybox-type="iframe">
                    <span class="pic-caption bottom-to-top">
                        <h3 class="">Rebecca Linz</h3>
                        <p>{{trans('minicv.rebecca.cargo')}}</p>
                    </span>
                  </a>
              </div>
              <div class="pic">
                  <img src="{{asset('/')}}images/ourteam/efren.jpg" class="pic-image" alt="Pic"/>
                  <a id="#minicv" class="minicv" href="minicv/efren" data-fancybox-type="iframe">
                    <span class="pic-caption bottom-to-top">
                        <h3 class="">Efrén Rodríguez Reséndiz</h3>
                        <p>{{trans('minicv.efren.cargo')}}</p>
                    </span>
                  </a>
              </div>
              

              <div class="row text-center">
                <p>
                  <a href="#volunteers" class=" flecha-azul-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>

<div id="volunteers" class="intro lead">
    <div class="container">
        <div class="row" >
            <div class="text-center" >
                <h2>{{trans('conocenos.voluntarios')}}</h2>
                <hr/>

                <div id="volunteers-carousel" class="carousel slide" data-ride="carousel" style="height: 250px;">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#volunteers-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#volunteers-carousel" data-slide-to="1"></li>
                        <li data-target="#volunteers-carousel" data-slide-to="2"></li>
                        <li data-target="#volunteers-carousel" data-slide-to="3"></li>
                        <li data-target="#volunteers-carousel" data-slide-to="4"></li>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        @foreach($volunteers as $index => $volunteer)
                            @if($index == 0)
                                <div class="item active">
                            @else
                                <div class="item" >
                            @endif
                                    <div class="paragraphs text-left">
                                        <div class="row">
                                            <div class="span4">
                                                <div class="clearfix content-heading">
                                                    <img class="pull-left img-circle" src="{{asset('/')}}images/ourteam/volunteers/{{$volunteer->picture}}" alt="{{$volunteer->name}}"/>
                                                    <h4>{{$volunteer->name}}</h4>
                                                    <p class="texto-gris">{{$volunteer->description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Carousel nav -->
                    </div>

                </div>

            </div>
        </div>
    </div>
 </div>

    
  
    <!-- Callout -->
    <div id="callout" class="callout_quienesSomos">
      <div class="vert-text">
        <h1>{{trans('frases.principal')}}</h1>
      </div>
    </div>
    <!-- /Callout -->

@stop

@section('javascript')
<script>
    $(document).ready(function() {
      $(".minicv").fancybox({
        padding: 1,
        margin:0,
        maxWidth  : 800,
        maxHeight : 600,
        fitToView : false,
        width   : '70%',
        height    : '70%',
        autoSize  : false,
        closeClick  : false,
        openEffect  : 'none',
        closeEffect : 'none',
        helpers: {
              overlay: {locked: false,},
              title : { type : 'inside' },
              buttons : {}
            }
      });
    });
</script>
@stop