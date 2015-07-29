<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="ttojGiqDU3nE80JYave5o7QI6MkIMass1JrD5RoNGjE" />

    @section('meta_description')
    <meta name="description" content="Mejorar las condiciones de vida de la población. Reducir las brechas o desigualdades mediante intervenciones focalizadas en grupos vulnerables y comunidades marginadas. Prestar servicios de acción social con calidad y seguridad. Evitar el empobrecimiento de la población por motivos de salud, educación, vivienda y alimentación. Garantizar que los programas de apoyo que promueve contribuyan al combate a la pobreza y al desarrollo social del país.">
    @show

    <meta name="author" content="Fundación Vive Mejor A.C.">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('/')}}css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="{{asset('/')}}css/stylish-portfolio.css" rel="stylesheet">
    <link href="{{asset('/')}}css/custom.css" rel="stylesheet">
    <link href="{{asset('/')}}css/carousel.css" rel="stylesheet">
    <link href="{{asset('/')}}font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('/')}}fancybox/source/jquery.fancybox.css?v=2.1.5" rel="stylesheet">



    <link rel="shortcut icon" href="{{asset('/')}}images/favicon.png">

    <title>
        @section('titulo')
        Fundación Vive Mejor
        @show
    </title>

</head>

<body>

<div class="navbar-wrapper">
    <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="{{asset('/')}}images/logo.png" alt="Fundación Vive Mejor A.C."></a>
                </div>

                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="{{trans('menu.conocenos')}}">{{trans('menu.conocenos.t')}}</a></li>
                        <li><a href="{{trans('menu.como-trabajamos')}}">{{trans('menu.como-trabajamos.t')}}</a></li>
                        <li><a href="{{trans('menu.colabora')}}">{{trans('menu.colabora.t')}}</a></li>
                        <li><a href="{{trans('menu.nuestros-vinculos')}}">{{trans('menu.nuestros-vinculos.t')}}</a></li>
                        <li><a href="{{trans('menu.contacto')}}">{{trans('menu.contacto.t')}}</a></li>
                        <li><a href="{{trans('menu.galerias')}}">{{trans('menu.galerias.t')}}</a></li>
                    </ul>


                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="TMFTSG66UKKDS">
                                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                </form>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/fundacion.mejorac" target="_blank" src=""><img src="{{asset('/')}}images/facebook_icon.png" alt="Facebook"/></a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{asset('/')}}/images/lang/{{LaravelLocalization::getCurrentLocale()}}.png" alt=""/>
                                {{LaravelLocalization::getCurrentLocaleNativeReading()}}
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    @if(! ($localeCode == LaravelLocalization::getCurrentLocale()))
                                    <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                        <img src="{{asset('')}}images/lang/{{$localeCode}}.png" alt="{{$properties['native']}}"/>{{$properties['native']}}
                                    </a>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </li>




                    </ul>
                </div>

            </div>
        </div>
    </div>

</div>
</div>

@yield('contenido')


<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-left">
                    <div class="col-md-4 ">
                        <h4><em>Fundación Vive Mejor A.C.</em></h4>
                        <p>
                        <ul class="list-unstyled">
                            <li>
                                Tel.: 01 (442) 404 2983.
                            </li>
                            <li>
                                <a href="mailto:contacto@fundacionvivemejor.org">contacto@fundacionvivemejor.org</a>
                            </li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-md-4 ">
                        <h4><em>{{trans('footer.direccion')}}</em></h4>
                        <p>
                        <ul class="list-unstyled">
                            <li >
                                Ecuador 1, Lomas de Querétaro.
                            </li>
                            <li>
                                CP. 76190
                            </li>
                            <li>
                                Querétaro, Qro.
                            </li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-4 " >
                        <h4><em>{{trans('footer.suscribete')}}</em></h4>
                        <ul class="list-unstyled">
                            <li>{{trans('footer.recibe')}}</li>
                            <li class="">
                                <div class="input-group margin-bottom-sm  text-center">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                                    <input class="form-control" type="text" placeholder="Email address">
                                </div>
                            </li>
                            <li><a href="/aviso-de-privacidad">{{trans('footer.aviso')}}</a></li>
                            <li>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-check-circle fa-lg"></i>{{trans('footer.enviar')}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-md-offset-3 text-center">
                <hr>
                <ul class="list-inline">
                    <li><a target="_blank" href="https://www.facebook.com/fundacion.mejorac" class="texto-gris"> <i class="fa fa-facebook fa-3x"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/FViveMejor" class="texto-gris"> <i class="fa fa-twitter fa-3x"></i></a></li>
                    <li><a target="_blank" href="https://plus.google.com/100152641307081545427/about?hl=es-419" class="texto-gris"><i class="fa fa-google-plus fa-3x"></i></a></li>
                </ul>
                <div class="top-scroll">
                    <a href="#top"><i class="fa fa-circle-arrow-up scroll fa-4x"></i></a>
                </div>
                <hr>
                <p>Copyright &copy; Fundación Vive Mejor A.C. 2013</p>
                <a href="/aviso-de-privacidad">{{trans('footer.aviso-privacidad')}}</a>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer -->

<!-- JavaScript -->

<script src="{{asset('/')}}fancybox/lib/jquery-1.10.1.min.js"></script>
<script src="{{asset('/')}}js/bootstrap.js"></script>
<script src="{{asset('/')}}js/holder.js"></script>
<script src="{{asset('/')}}js/jquery.animate-colors-min.js"></script>
<script src="{{asset('/')}}js/jquery.hoverizr.min.js"></script>
<script src="{{asset('/')}}js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="{{asset('/')}}fancybox/source/jquery.fancybox.js?v=2.1.5"></script>



<!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
<script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
</script>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
</script>
<script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if(this.hash == "#myCarousel") return 0;

            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
                || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>

<!-- Google Analitycs -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-37794817-1', 'fundacionvivemejor.org');
    ga('send', 'pageview');

</script>

@yield('javascript')

</body>

</html>