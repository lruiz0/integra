<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto Integra</title>
    <meta name="description" content="Awesome Bubble Navigation with jQuery" />
    <meta name="keywords" content="jquery, circular menu, navigation, round, bubble"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="screen"/>



    <!-- estilo propio del proyecto integra -->
    <link rel="stylesheet" href="{{ asset('css/plantilla_css_items_juegos.css') }}"/>


    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


    <link rel="icon" href="{{ asset('images/favicon.bmp') }}"/>
</head>

<body>

    <div id="content">

        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <a href="{{ route('jSocial') }}"><button type="button" class="btn btn-primary btn-lg center-block">Juego 1</button></a>
        <button type="button" class="btn btn-primary btn-lg center-block">Juego 2</button>
        <button type="button" class="btn btn-primary btn-lg center-block">Juego 3</button>
        <button type="button" class="btn btn-primary btn-lg center-block">Juego 4</button>
        <button type="button" class="btn btn-primary btn-lg center-block">Juego 5</button>


    </div>  <!-- fin de la seccion del content principal-->

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>