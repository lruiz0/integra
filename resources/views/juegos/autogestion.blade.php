<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>De compras</title>
    <link rel="icon" href="{{asset('img/favicon.bmp')}}"/>

    <link rel="stylesheet" href="{{asset('css/estilo_de_prueba.css')}}"/>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style_ir_de_compras.css')}}"/>



    <script src="{{asset('js/jquery-1.11.2.js')}}"></script>
    <script>
        var cantidad;

        function borrar() {
            $("#cajaDestino").text("");
        }

        function cargarDinero() {
            $("#hucha").text("");
            $.getJSON("{{ asset('json/dinero.json') }}", function (result) {
                $.each(result["dinero"], function (i, field) {
                    $("#hucha").append('<img alt="'+field.valor+'" value="'+field.valor+'" draggable="true" id="dragtarget-'+i+'" src="'+field.url+'">');
                });
            });
        }


        function cargarPreguntas() {
            $.getJSON("{{ asset('json/preguntas-calculo.json') }}", function(result) {
                var nroPreg = Math.round(Math.random()*10 );
                cantidad = result['preguntas'][nroPreg].valor;
                $("#preguntas").text(""+result['preguntas'][nroPreg].enunciado+"");
            });
        }

        function calcularResultado() {
            var res=0;
            for (var i = 0; i < document.getElementById("cajaDestino").getElementsByTagName("img").length; i++) {
                res += parseFloat( document.getElementById("cajaDestino").getElementsByTagName("img")[i].getAttribute("value") );
            };

            if( res.toFixed(2) == cantidad ){
                $("#resultado").html("<h1>Muy Bien!</h1>");
                $("#resultado h1").css({'color':'green','textAlign':'center'});
            } else {
                $("#resultado").html("<h1>Incorrecto!</h1>");
                $("#resultado h1").css({'color':'red','textAlign':'center'});
            }

            document.getElementById('volverAJugar').innerHTML = "<button type='button' class='btn btn-info' onclick='document.location.reload()' >Volver a Jugar</button>";
        }
    </script>

    <script type="text/javascript" src="{{asset('js/calculo.js')}}"></script>
</head>
<body onload="cargarDinero(), cargarPreguntas()">


    <div class="optimalsort-task">
        <div class="task-header">
            <a href="#" class="os-logo" data-target="#aboutModal" data-toggle="modal"><img alt="Logo-optimalsort-black" src="{{asset('images/nuevo_logo.png')}}" width="256"/></a>

            <div id="contenedorDeBtn">
                <button type="button" class="btn btn-info" onclick="calcularResultado()" >He Terminado</button>
                <button type="button" class="btn btn-danger" onclick="borrar()" >Rectificar</button>
            </div>

            <div id="preguntas"></div>
        </div>
        <div class="clear clearfix"></div>
    </div>





    <div id="hucha" class="droptarget" ></div>
    <div id="cajaDestino" class="droptarget" onmouseout="cargarDinero()"></div>


    <p id="demo"></p>

    <div class="clear clearfix"></div>

    <div id="cajaDeResultado" style="c">
        <div id="resultado"></div>
        <div id="volverAJugar"></div>
    </div>


    <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
</body>

</html>