<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- The above 3 meta tags *must* come first in the head; any other
        head content must come *after* these tags -->
        <title>Social</title>
        <link rel="icon" href="{{ asset('images/favicon.bmp') }}"/>
        <link rel="stylesheet" href="{{
        asset('css/estilo_de_prueba.css') }}"/>
        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="{{
        asset('css/lenguaje.css') }}"/>
        <script>
            var res;
            function cargarPreguntas() {
                $('#resultado').children(':first').text('');
                $.getJSON("{{ asset('json/preguntas-social.json') }}",
                    function(result) {
                    var nroPreg = Math.round(Math.random()*4 );
                    var obj = result['preguntas'][nroPreg];
                    res = obj.valor;
                    $("#preguntas").text(obj.enunciado);
                    $("#opcionA").text(obj.a);
                    $("#opcionB").text(obj.b);
                    $("#opcionC").text(obj.c);
                    $("#opcionD").text(obj.d);
                });
            }
            function calcularResultado(elem) {
                var opcion = elem.getAttribute('id');
                var letter = opcion.charAt(opcion.length-1)

                if( res == letter.toLowerCase() ){
                    $("#resultado").html("<h1>Muy Bien!</h1>");
                    $("#resultado").css('color','green');
                } else {
                    $("#resultado").html("<h2>Incorrecto!</h2>");
                    $("#resultado").css('color','red');
                }
                document.getElementById('volverAJugar').innerHTML =
                "<button type='button' class='btn btn-info' onclick='document.location.reload()' >Volver a Jugar</button>";
            }
        </script>
    </head>
    <body onload="cargarPreguntas()">
        <div class="optimalsort-task">
            <div class="task-header">
                <a href="{{ route('menuSocial') }}" class="os-logo"><img
                    alt="Logo-Integra" src="{{
                    asset('images/nuevo_logo.png') }}"/></a>
                <div id="contenedorDeBtn">
                    <button type="button" class="btn btn-danger"
                    onclick="cargarPreguntas()" >Siguiente Pregunta</button>
                </div>

                <div id="preguntas"></div>
            </div>
            <div class="clear clearfix"></div>
        </div>
        <div id="opciones">
            <ul>
                <li id="opcionA" onclick="calcularResultado(this)"></li>
                <li id="opcionB" onclick="calcularResultado(this)"></li>
                <li id="opcionC" onclick="calcularResultado(this)"></li>
                <li id="opcionD" onclick="calcularResultado(this)"></li>
            </ul>
        </div>
        <div id="resultado"></div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=
        "https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
        </script>
        <!-- Include all compiled plugins (below), or include individual files
        as needed -->
        <script src="¨{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>