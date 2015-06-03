<?php
/**
* Sub-menú de juegos para fomentar la memoria.
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
        <meta name="description" content="Main memory games menu" />
        <meta name="keywords" content="integra, memory games"/>
        <link href='http://fonts.googleapis.com/css?family=Poiret+One'
        rel='stylesheet' type='text/css'> 
        <link rel="stylesheet" type="text/css" href="{{
        asset('css/estiloIntegra.css') }}">
        <link href='http://fonts.googleapis.com/css?family=Indie+Flower'
        rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Quicksand'
        rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="{{ 
        asset('css/listaJuegos.css') }}">
        <link href='http://fonts.googleapis.com/css?family=Poiret+One'
        rel='stylesheet' type='text/css'>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="icon" href="{{ asset('images/favicon.bmp') }}"/>
    </head>
    <body>
        <div class="container-fluid">
            <header>
                <h1>Juegos de 
                    <span style="color:#74FDD8;">Memoria</span>
                </h1>
            </header>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="mediaGame col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-md-7 col-lg-8">
                            <a href="{{ route('jMemoriaMemory') }}">
                              <img  src="images/memoria.png" alt="..." >
                            </a>
                        </div>
                        <div class=" col-md-5 col-lg-4">
                            <h3>Memory</h3>
                            <p>¡Encuentra los paneles del mismo color! </p>
                        </div>
                    </div>
                </div>
                <div class="mediaGame col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-md-7 col-lg-8">
                            <a href="#">
                              <img  src="images/niña1.jpeg" alt="..." >
                            </a>
                        </div>
                        <div class=" col-md-5 col-lg-4">
                            <h3>Juego del supermercado</h3>
                            <p>¡Haz la compra en el super siguiendo la lista 
                                sin equivocarte! </p>
                        </div>
                    </div>
                </div>
                <div class="mediaGame col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-md-7 col-lg-8">
                            <a href="#">
                              <img  src="images/niña1.jpeg" alt="..." >
                            </a>
                        </div>
                        <div class=" col-md-5 col-lg-4">
                            <h3>Juego del supermercado</h3>
                            <p>¡Haz la compra en el super siguiendo la lista 
                                sin equivocarte! </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mediaGame col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-md-7 col-lg-8">
                            <a href="#">
                              <img  src="images/niña1.jpeg" alt="..." >
                            </a>
                        </div>
                        <div class=" col-md-5 col-lg-4">
                            <h3>Juego del supermercado</h3>
                            <p>¡Haz la compra en el super siguiendo la lista 
                                sin equivocarte! </p>
                        </div>
                    </div>
                </div>
                <div class="mediaGame col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-md-7 col-lg-8">
                            <a href="#">
                              <img  src="images/niña1.jpeg" alt="..." >
                            </a>
                        </div>
                        <div class=" col-md-5 col-lg-4">
                            <h3>Juego del supermercado</h3>
                            <p>¡Haz la compra en el super siguiendo la lista 
                                sin equivocarte! </p>
                        </div>
                    </div>
                </div>
                <div class="mediaGame col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-md-7 col-lg-8">
                            <a href="#">
                              <img  src="images/niña1.jpeg" alt="..." >
                            </a>
                        </div>
                        <div class=" col-md-5 col-lg-4">
                            <h3>Juego del supermercado</h3>
                            <p>¡Haz la compra en el super siguiendo la lista 
                                sin equivocarte! </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  <!-- fin de la seccion del content principal-->
        <footer class="volver">
            <a href="{{ route('/') }}">
                <span class="glyphicon glyphicon-home" aria-hidden="true">
                    <!--El espacio delante el volver és importante!-->
                </span> Volver
            </a>
        </footer>
        <script type="text/javascript" src=
        "http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js">
        </script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script>
            $('.volver').hover(
                function()
                {
                    //$(".volver").addClass("volver animated flipInX");
                    $(".volver a").html(
                        "<span class='glyphicon glyphicon-arrow-left' aria-hidden='true'></span> Volver");
                },
                function()
                {
                    //$(".volver").removeClass( "volver animated flipInX" );
                    $(".volver a").html(
                        "<span class='glyphicon glyphicon-home' aria-hidden='true'></span> Volver");
                }
            )
        </script>
    </body>
</html>