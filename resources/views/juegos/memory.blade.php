<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Memoria</title>


    <link rel="icon" href="{{ asset('images/favicon.bmp') }}"/>

    <title>Memory con JQuery</title>
    <link rel="stylesheet" href="{{asset('css/style_juego_de_memoria.css')}}" type="text/css" media="screen" />
    <script language="JavaScript" src="{{ asset('js/jquery-2.1.3.js') }}"></script>
    <script language="JavaScript" src="{{ asset('js/js_juego_de_memoria.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/lenguaje.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilo_de_prueba.css') }}"/>
</head>
<body>


    <div class="optimalsort-task">
        <div class="task-header">
            <a href="{{ route('menuMemoria') }}" class="os-logo"><img alt="Logo-Integra" src="{{ asset('images/nuevo_logo.png') }}" /></a>

            <div id="contenedorDeBtn">

                <div id="botonera">
                   <span id = "msgContador" class="link">
                       <span id="contador">0</span>
                       Clic
                   </span>
                            &nbsp;
                            <a href="javascript:" class="link" onclick="reiniciarJuego();">Reiniciar</a>
                            &nbsp;
                   <span id = "msgTimer" class="link">
                   <span id = "timer">0</span> Segundos </span>
                </div>
            </div>

            <div id="preguntas" style="width: 40%">Recordando</div>

        </div>
        <div class="clear clearfix"></div>
    </div>

    <div id="imagenes">
        <div id="img1"><img src="{{ asset('images/memoria/color_1.jpg') }}" alt = "" /></div>
        <div id="img2"><img src="{{ asset('images/memoria/color_2.jpg') }}" alt = "" /></div>
        <div id="img3"><img src="{{ asset('images/memoria/color_3.jpg') }}" alt = "" /></div>
        <div id="img4"><img src="{{ asset('images/memoria/color_4.jpg') }}" alt = "" /></div>
        <div id="img5"><img src="{{ asset('images/memoria/color_5.jpg') }}" alt = "" /></div>
        <div id="img6"><img src="{{ asset('images/memoria/color_6.jpg') }}" alt = "" /></div>
        <div id="img7"><img src="{{ asset('images/memoria/color_7.jpg') }}" alt = "" /></div>
        <div id="img8"><img src="{{ asset('images/memoria/color_8.jpg') }}" alt = "" /></div>
        <div id="img9"><img src="{{ asset('images/memoria/color_9.jpg') }}" alt = "" /></div>
        <div id="img10"><img src="{{ asset('images/memoria/color_10.jpg') }}" alt = "" /></div>
        <div id="img11"><img src="{{ asset('images/memoria/color_1.jpg') }}" alt = "" /></div>
        <div id="img12"><img src="{{ asset('images/memoria/color_2.jpg') }}" alt = "" /></div>
        <div id="img13"><img src="{{ asset('images/memoria/color_3.jpg') }}" alt = "" /></div>
        <div id="img14"><img src="{{ asset('images/memoria/color_4.jpg') }}" alt = "" /></div>
        <div id="img15"><img src="{{ asset('images/memoria/color_5.jpg') }}" alt = "" /></div>
        <div id="img16"><img src="{{ asset('images/memoria/color_6.jpg') }}" alt = "" /></div>
        <div id="img17"><img src="{{ asset('images/memoria/color_7.jpg') }}" alt = "" /></div>
        <div id="img18"><img src="{{ asset('images/memoria/color_8.jpg') }}" alt = "" /></div>
        <div id="img19"><img src="{{ asset('images/memoria/color_9.jpg') }}" alt = "" /></div>
        <div id="img20"><img src="{{ asset('images/memoria/color_10.jpg') }}" alt = "" /></div>
    </div>


</body>
</html>