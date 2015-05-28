<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
    <link rel="stylesheet" href="{{asset('css/estiloIntegra.css')}}"/>
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'> 


    </head>
    <body onload="cargarDinero(), cargarPreguntas()">

        <div class="optimalsort-task">
            <div class="task-header">
                <a href="{{ route('menuAutogestion') }}" class="os-logo"><img alt="Logo-optimalsort-black" src="{{asset('images/nuevo_logo.png')}}" width="256"/></a>
                <div id="contenedorDeBtn">
                    <button type="button" class="btn btn-info" onclick="calcularResultado()" data-toggle="modal" data-target=".bs-example-modal-sm">He Terminado</button>
                    <button type="button" class="btn btn-danger" onclick="borrar()" >Rectificar</button>
                </div>

                <div id="preguntas"></div>
            </div>
            <div class="clear clearfix"></div>
        </div>
        <div class="container-fluid">
             <div class="row center-block">
                <div id="hucha" class="droptarget col-md-6 col-sm-6 col-xs-6 col-lg-6" ></div>
                <div id="cajaDestino" class="droptarget col-lg-6 col-md-6 col-sm-6 col-xs-6" onmouseout="cargarDinero()"></div>
            </div>
        </div>
       
        
        <p id="demo"></p>
        <div class="clear clearfix"></div>

    </div>


    <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/calculo.js')}}"></script>

    
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
                $("#preguntas").html("<h1>Muy Bien!</h1>");
                $("#preguntas h1").css({'color':'green','textAlign':'center'});
            } else {
                $("#preguntas").html("<h1>Incorrecto!</h1>");
                $("#preguntas h1").css({'color':'red','textAlign':'center'});
            }

            $('#contenedorDeBtn').append('<button type="button" class="btn btn-primary" onclick="document.location.reload()" >Volver a Jugar</button>')
            
        }

               
            
        </script>
        
</body>

</html>