@extends('layouts.base')

@section('titulo')
{{trans('contacto.contacto')}}
@stop

@section('contenido')
    <!-- Full Page Image Header Area -->
    <div id="top" class="header_contacto">
      <div class="vert-text">
        <h1>{{trans('contacto.contacto')}}</h1>
        <a href="#about" class=" flecha-gris-claro btn-lg"><i class="fa fa-arrow-circle-down fa-3x"></i></a>
      </div>
    </div>
    <!-- /Full Page Image Header Area -->
  
    <!-- Intro -->
    <div id="about" class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-left">
            <h2><em>{{trans('contacto.comunicate')}}</em> <hr> </h2>

            @if(isset($_GET['gracias']))

                <div id="gracias">

                    <h1>{{trans('contacto.gracias')}}</h1>
                </div>

            @else

              {!! Form::open(array('method' => 'POST', 'action' => 'ContactoController@store')) !!}

              <div class="form-group">
                {!! Form::label('nombre',trans('contacto.nombre')) !!} <span class="texto-rojo">*</span>
                {!! Form::text('nombre',null,array('placeholder'=> trans('contacto.nombre'),'class' => 'form-control')) !!}
                <span class="texto-rojo"> {!! $errors->first('nombre') !!} </span>
              </div>

              <div class="form-group">
                {!! Form::label('direccion',trans('contacto.direccion')); !!}
                {!! Form::text('direccion',null,array('placeholder'=>trans('contacto.direccion'), 'class' => 'form-control')) !!}
              </div>

              <div class="form-group">
                {!! Form::label('correo',trans('contacto.correo')); !!}
                {!! Form::text('correo',null,array('placeholder' => trans('contacto.correo'), 'class' => 'form-control')) !!}
                <span class="texto-rojo">{!! $errors->first('correo') !!}</span>
              </div>

              <div class="form-group">
                {!! Form::label('comentarios',trans('contacto.comentarios')); !!} <span class="texto-rojo">*</span>
                {!! Form::textarea('comentarios',null,array('placeholder'=> trans('contacto.comentarios'), 'class' => 'form-control')) !!}
                <span class="texto-rojo"> {!! $errors->first('comentarios') !!} </span>
              </div>

              <div class="checkbox">
                {!! Form::label('recibe',trans('contacto.recibe')) !!}
                {!! Form::checkbox('recibe','true', array('checked' => 'checked')) !!}
              </div>

              {!! Form::submit(trans('contacto.enviar'),array('class' => "btn btn-default")) !!}

              {!! Form::close() !!}

            @endif

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

    <div id="map" class="map">
      

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7470.758023516624!2d-100.40360500000001!3d20.57257399999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d34524f1646e21%3A0x5554caf02797d800!2sFundaci%C3%B3n+Vive+Mejor+AC!5e0!3m2!1ses!2s!4v1398444364001" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
    </div>

  
    <!-- Callout -->
    <div id="callout" class="callout_contacto">
      <div class="vert-text">
        <h1>{{trans('frases.principal')}}</h1>
      </div>
    </div>
    <!-- /Callout -->
@stop
