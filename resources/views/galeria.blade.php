@extends('layouts.base')

@section('titulo')
{{trans('galeria.galerias')}}
@stop

@section('meta_description')
	<meta name="description" content="A partir del reconocimiento de las necesidades de muchos mexicanos, en donde una buena parte de la población padece algún tipo de marginación, llámese alimentaria, de capacidades o patrimonial, así fue como surgió la iniciativa de crear la Fundación Vive Mejor A.C. ">
@stop

@section('contenido')

    <!-- Full Page Image Header Area -->
    <div id="top" class="header_galeria">
      <div class="vert-text">
        <h1>{{trans('galeria.galerias')}}</h1>
        <a href="#about" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
      </div>
    </div>
    <!-- /Full Page Image Header Area -->
  
    <!-- Intro -->
    <div id="about" class="intro">
      <div class="container">
        <div class="row">
          <div class="">
            <h2><em>{{trans('galeria.galerias')}}</em></h2>
            <hr>

              <?php
              $galery = array(
                  1 => array(
                      'title' => trans('galeria.t1'),
                      'pic' => 'Vive_mejor_sin_frio_pedroescobedo.jpg',
                  ),
                  2 => array(
                      'title' => trans('galeria.t2'),
                      'pic' => 'vive_mejor_sin_frio_toliman.jpg',
                  ),
                  3 => array(
                      'title' => trans('galeria.t3'),
                      'pic' => 'entrega_de_utiles.jpg',
                  ),
                  4 => array(
                      'title' => trans('galeria.t4'),
                      'pic' => 'big_bolaton_2013.jpg',
                  ),
                  5 => array(
                      'title' => trans('galeria.t5'),
                      'pic' => 'kermes.jpg',
                  ),
                  6 => array(
                      'title' => trans('galeria.t6'),
                      'pic' => 'bienvenida_de_rebecca.jpg',
                  ),
                  7 => array(
                      'title' => trans('galeria.t7'),
                      'pic' => 'Programa_Mejor_Alimentacion.jpg',
                  ),
                  8 => array(
                      'title' => trans('galeria.t8'),
                      'pic' => 'Entrega_de_cobijas_en_cadereyta.jpg',
                  ),
                  9 => array(
                      'title' => trans('galeria.t9'),
                      'pic' => 'Formando_formadores.jpg',
                  ),
                  10 => array(
                      'title' => trans('galeria.t10'),
                      'pic' => 'AYUDALOS_A_SEGUIR_EN_SAN_JUAN_DEL_RIO.jpg',
                  ),
                  11 => array(
                      'title' => trans('galeria.t11'),
                      'pic' => 'Entrega_para_los_Ninos.jpg',
                  ),
                  12 => array(
                      'title' => trans('galeria.t12'),
                      'pic' => 'RECONOCIMIENTO_DE_GOBIERNO_DEL_ESTADO.jpg',
                  ),
                  13 => array(
                      'title' => trans('galeria.t13'),
                      'pic' => 'APOYOS_DE_ALIMENTACION_Y_SALUD.jpg',
                  ),
                  14 => array(
                      'title' => trans('galeria.t14'),
                      'pic' => 'PREMIO_ESTATAL_DE_LA_JUVENTUD.jpg',
                  ),
                  15 => array(
                      'title' => trans('galeria.t15'),
                      'pic' => 'colecta_de_cobijas.jpg',
                  ),
              );
              ?>

            <div class="lead">
              @foreach($galery as $foto)
              <div class="myButton">

                  <a class="fancybox fancybox-button" rel="fancybox-button" href="{{$foto['pic']}}" title="{{$foto['title']}}">
                      <div class="myDiv"></div>
                  </a>
              </div>
              @endforeach

            </div>
            
          </div> 
            
          </div>
        </div>
      </div>
    </div>
    <!-- /Intro -->

  
    <!-- Callout -->
    <div id="callout" class="callout_galeria">
      <div class="vert-text">
        <h1>{{trans('frases.principal')}}</h1>
      </div>
    </div>
    <!-- /Callout -->

@stop


@section('javascript')
<script>
    $(".myButton").bind("mouseenter",function (e) {

    // Set the effect type

    var effect = 'slide';

    // Set the options for the effect type chosen
    var options = "";

    // Set the duration (default: 400 milliseconds)
    var duration = 300;

    var w = $(this).width();
    var h = $(this).height();

    /** calculate the x and y to get an angle to the center of the div from that x and y. **/
    /** gets the x value relative to the center of the DIV and "normalize" it **/
    var x = (e.pageX - this.offsetLeft - (w/2)) * ( w > h ? (h/w) : 1 );
    var y = (e.pageY - this.offsetTop  - (h/2)) * ( h > w ? (w/h) : 1 );

    /** the angle and the direction from where the mouse came in/went out clockwise (TRBL=0123);**/
    /** first calculate the angle of the point, 
     add 180 deg to get rid of the negative values
     divide by 90 to get the quadrant
     add 3 and do a modulo by 4  to shift the quadrants to a proper clockwise TRBL (top/right/bottom/left) **/
    var direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) +180 ) / 90 ) + 3 )  % 4;


    /** do your animations here **/ 
    switch(direction) {
     case 0:
      /** animations from the TOP **/
            options = { direction: 'up' };
     break;
     case 1:
      /** animations from the RIGHT **/
            options = { direction: 'right' };
     break;
     case 2:
      /** animations from the BOTTOM **/
            options = { direction: 'down' };
     break;
     case 3:
      /** animations from the LEFT **/
            options = { direction: 'left' };
     break;
    }
                //$('.myDiv').stop(true,true).show(effect, options, duration);
                $(this).closest('.myButton').find('.myDiv').stop(true,true).show(effect, options, duration);
    });

    $(".myButton").bind("mouseleave",function () {
      
      $('.myDiv').hide("fade", { direction: "none" }, 300);
    });

    $(document).ready(function() {
      $(".fancybox-button").fancybox({
            prevEffect    : 'none',
            nextEffect    : 'none',
            closeBtn    : false,
            
            helpers: {
              overlay: {locked: false},
              title : { type : 'inside' },
              buttons : {}
            }
        });

      var pathImage = '{{asset("/")}}images/geleria';

      $.each($('.myButton'),function(e){
        var $this = $(this);
        var title  = $this.closest('.myButton').find('.fancybox').attr('title');

        $this.closest('.myButton').find('.myDiv').html(title);
        image = $this.closest('.myButton').find('.fancybox').attr('href');
        $this.closest('.myButton').css({'background' :  'url('+pathImage + '/thumb/thumb_'+ image+')'});

        $this.closest('.myButton').find('.fancybox').attr('href', pathImage + '/'+ image );

      });
  });
</script>
@stop