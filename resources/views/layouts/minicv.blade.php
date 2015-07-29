
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="author" content="Fundación Vive Mejor A.C.">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('/')}}css/bootstrap.css" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('/')}}images/favicon.png">

    <title>
    
    @yield('nombre')

    </title>

  </head>

  <body>
  	<div class="container gris-claro">
  		<div class="row">
  		<div class="row lead">
  			<div class="col-sm-offset-1">

          @yield('imagen')
  			</div>
  			<div class="text-center">
            	<b>
              @yield('nombre')
              
              </b>
            	<br>
            	@yield('cargo')
  			</div>
  		</div>
  			<div class="row text-center">
  				<div class="lead col-md-3 col-sm-7 col-sm-offset-2">		
          @yield('texto-cv')
			  		<hr>
            @yield('email')
					<hr>
                    {{trans('minicv.telefono')}}
          @yield('telefono')
					
  				</div>
  			</div>
  			
  		</div>
  	</div>

  	<script src="{{asset('/')}}fancybox/lib/jquery-1.10.1.min.js"></script>
    <script src="{{asset('/')}}js/bootstrap.js"></script>
    
  </body>

</html>

