<?php
/**
* Menú principal donde están lo enlaces a los distintos sub-menus
* y a la página personal.
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Integra</title>
        <meta name="description" content="Main integra home page"/>
        <meta name="keywords" content="integra, main page"/>
        <link rel="stylesheet" href="css/style.css" type="text/css"
        media="screen"/>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/estiloIntegra.css') }}" rel="stylesheet"/>
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}"/>
        <link rel="icon" href="images/favicon.bmp"/>
        <link href='http://fonts.googleapis.com/css?family=Poiret+One'
        rel='stylesheet' type='text/css'> 
    </head>
    <body style="background-color:#F5FBFE">
        <div class="container hidden-sm hidden-md hidden-lg menuMovil center">
            <ul>
                <li class="logoli"><img src="{{
                    asset('images/nuevo_logo.png') }}" alt="logo"
                    class="logo_mediano" />
                </li>
                <hr size="4px"/>
                <li class="lightGreen">
                    <a href="{{ url('/auth/login') }}">Accede</a>
                </li>
                <li class="verde">
                    <a href="{{ route('menuSocial') }}">Social</a>
                </li>
                <li class="azul">
                    <a href="{{ route('menuLenguaje') }}">Lenguaje</a>
                </li>
                <li class="babyBlue">
                    <a href="{{ route('menuMemoria') }}">Memoria</a>
                </li>
                <li class="gris">
                    <a href="{{ route('menuAutogestion') }}">Autogestión</a>
                </li>
            </ul>
        </div>
    	<div id="logout">
				@if (Auth::guest())
					<h1>Loginate!</h1><!--Esto no se muestra nunca-->
				@else
                <div>
                    <p style="display:inline; float:right;">
                        Bienvenido {{ Auth::user()->name }}
                    </p>
                    <a id="botonDeLogin" href="{{ url('/auth/logout') }}"
                    class="buttonLogin hidden-xs">
                        <span style="display:inline;"
                        class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
				@endif
    	</div>
        <div id="content">
            <div class="back col-md-6 hidden-xs">
                <img class="animated fadeIn customAnimated2"
                src="images/nuevo_logo.png" alt="logo"/>
            </div>
            <div class="navigation hidden-xs" id="nav">
                <div class="item user animated fadeIn customAnimated1"
                id="social">
                    <img src="images/bg_user.png" alt="" width="199"
                    height="199" class="circle"/>
                    <a href="{{ route('menuSocial') }}" class="icon"></a>
                    <h2>Social</h2>
                </div>
                <div class="item home animated fadeIn customAnimated2"
                id="lenguaje">
                    <img src="images/bg_home.png" alt="" width="199"
                    height="199" class="circle"/>
                    <a href="{{ route('menuLenguaje') }}" class="icon"></a>
                    <h2>Lenguaje</h2>
                </div>
                <div class="item shop animated fadeIn customAnimated3"
                id="memoria">
                    <img src="images/bg_shop.png" alt="" width="199"
                    height="199" class="circle"/>
                    <a href="{{ route('menuMemoria') }}" class="icon"></a>
                    <h2>Memoria</h2>
                </div>
                <div class="item camera animated fadeIn customAnimated4"
                id="autogestion">
                    <img src="images/bg_camera.png" alt="" width="199"
                    height="199" class="circle"/>
                    <a href="{{ route('menuAutogestion') }}" class="icon"></a>
                    <h2>Autogestión</h2>
                </div>
                <div class="item fav animated fadeIn customAnimated5">
                    <img src="images/bg_fav.png" alt="" width="199"
                    height="199" class="circle"/>
                    @if(Auth::user()->tipo == "Cuidador")
                    <a href="{{ route('zonaPrivadaCuidador') }}" class="icon"></a>
                    @else
                    <a href="{{ route('zonaPrivadaUsuario') }}" class="icon"></a>
                    @endif
                    <h2>Tu área</h2>
                </div>
            </div>
        </div>  <!-- fin de la seccion del content principal-->
        <footer>
            <div class='icono'>
                <a href="https://www.facebook.com/">
                    <img src="images/facebookIcon.png" alt="facebook"/>
                </a>
            </div>
            <div class='icono'>
                <a href="https://www.twitter.com/">
                    <img src="images/twitterIcon.png" alt="twitter"/>
                </a>
            </div>
            <div class='icono'>
                <a href="https://es.linkedin.com/">
                    <img src="images/inLogo.png" alt="linkedIn"/>
                </a>
            </div>
        </footer>
        <!-- The JavaScript -->
        <script type="text/javascript" src=
        "http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js">
        </script>
        <script type="text/javascript" src=
        "{{ asset('js/jquery.easing.1.3.js') }}">
        </script>
        <script type="text/javascript">
            $(function() {
                $('#nav > div').hover(
                function () {
                    var $this = $(this);
                    $this.find('img').stop().animate({
                        'width'     :'160px',
                        'height'    :'160px',
                        'top'       :'-25px',
                        'left'      :'-25px',
                        'opacity'   :'1.0'
                    },500,'easeOutBack',function(){
                        $(this).parent().find('ul').fadeIn(700);
                    });
                    $this.find('a:first,h2').addClass('active');
                },
                function () {
                    var $this = $(this);
                    $this.find('ul').fadeOut(500);
                    $this.find('img').stop().animate({
                        'width'     :'0px',
                        'height'    :'0px',
                        'top'       :'-140px',
                        'left'      :'200px',
                        'opacity'   :'0.1'
                    },5000,'easeOutBack');
                    $this.find('a:first,h2').removeClass('active');
                }
                );
            });
        </script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>