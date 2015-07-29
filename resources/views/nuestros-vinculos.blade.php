@extends('layouts.base')


@section('titulo')
{{trans('vinculos.vinculos')}}
@stop

@section('meta_description')
	<meta name="description" content="A partir del reconocimiento de las necesidades de muchos mexicanos, en donde una buena parte de la población padece algún tipo de marginación, llámese alimentaria, de capacidades o patrimonial, así fue como surgió la iniciativa de crear la Fundación Vive Mejor A.C. ">
@stop

@section('contenido')

    <!-- Full Page Image Header Area -->
    <div id="top" class="header_nuestrosVinculos">
      <div class="vert-text">
        <h1>{{trans('vinculos.vinculos')}}</h1>
        <a href="#about" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
      </div>
    </div>
    <!-- /Full Page Image Header Area -->
  
    <!-- Intro -->
    <div id="about" class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">
            <h2><em>{{trans('vinculos.vinculos')}}</em></h2>
            <hr>

            <div class="jumbotron">
                {{trans('vinculos.vinculos.desc')}}
            <ul class="list-inline">
              <!--Empresas-->
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/krespy-kreme.png" alt="Krispy Kreme"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/starbucks.png" alt="Starbucks"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/dana.png" alt="DANA"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/rexam.png" alt="REXAM"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/mpi-products.png" alt="MPI Products"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/exa.png" alt="EXA FM - Querétaro"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/isban.png" alt="Isban. Produban and Geoban"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/pastoral.png" alt="Pastoral Juvenil NSSSJL"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/grupo-santander.png" alt="Grupo Santander"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/global-facilities.png" alt="Santander Global Facilities"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/grupo-construsem.png" alt="Grupo Construsem"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/ge.png" alt="General Electric"></li>
              

              
              <hr>
              
              <!--organizaciones-->


              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/orden-de-malta.png" alt="Orden de Malta"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/fundacion-merced.png" alt="Fundación Merced"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/razon-por-la-vida.png" alt=" Razón por la Vida AC"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/fundacion-donde.png" alt="Fundación Dondé Banco"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/fundacion-gto-nos-une.png" alt="Fundación Guanajuato Nos Une"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/fundacion-simi.png" alt="Fundación del Dr. Simi, A.C"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/fundacion-big-bola.png" alt="Fundación Big Bola"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/comunidades-de-solidaridad.png" alt="Comunidades de Solidaridad AC"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/vive-mexico.png" alt="Vive Mexico"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/cediv.png" alt="Centro de Desarrollo Integral Varonil San Jose I.A.P."></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/fundacion-juan-huerta.png" alt="Fundación Juan Huerta Montero AC"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/fundacion-proteccion-ninez.png" alt="Fundación para la protección de la Niñez IAP"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/club-rotario.png" alt="Club Rotario Querétaro"></li>
              <hr>
              
              <!--Escuelas-->
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/uaq.png" alt="Universidad Autónoma de Querétaro"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/universidad-marista.png" alt="Universidad Marista de Querétaro"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/colegio-celta.png" alt="Colegio CELTA Internacional"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/uco.png" alt="Universidad Contemporanea"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/cetis-105.png" alt="CETis 105"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/5-de-mayo.png" alt="Instituto 5 de Mayo"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/colegio-colonial.png" alt="Colegio Colonial"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/instituto-plancarte.png" alt="Instituto Plancarte"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/facultad-ingenieria.png" alt="Ingeniria en Automatización, UAQ"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/ing-automatizacion.png" alt="Facultad de Ingeniería, UAQ"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/univa.png" alt="Universidad del Valle de Atemajac"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/universidad-de-londres.png" alt="Universidad de Londres"></li>
              <hr>
              
              <!--Gubernamentales-->
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/100.3.png" alt="Radio Queretaro 100.3 FM"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/sejuve.png" alt="Secretaría de la Juventud"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/instituto-queretano.png" alt="Instituto Queretano De La Cultura Y Las Artes"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/cfe.png" alt="Comisión Federal De Electricidad Querétaro"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/camara-de-diputados.png" alt="Cámara de Diputados"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/senado-de-la-republica.png" alt="Senado de la República"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/dif-queretaro.png" alt="DIF Querétaro"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/secretaria-salud.png" alt="Secretaría de la Salud"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/imjuve.png" alt="Instituto Municipal de la Juventud Querétaro"></li>
              <li><img class="image-grayscale" src="{{asset('/')}}images/logos/sedatu.png" alt="Secretaría de Desarrollo Agrario, Territorial y Urbano"></li>
              <hr>
              
              
            </ul>
            </div> 
            
          </div>
        </div>
      </div>
    </div>
    <!-- /Intro -->

  
    <!-- Callout -->
    <div id="callout" class="callout_nuestrosVinculos">
      <div class="vert-text">
        <h1>{{trans('frases.principal')}}</h1>
      </div>
    </div>
    <!-- /Callout -->

@stop


@section('javascript')
<script>
  $(document).ready(function () {
    $('.vinculos').hoverizr();
  })
</script>
@stop