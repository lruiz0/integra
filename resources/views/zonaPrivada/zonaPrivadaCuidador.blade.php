<?php
/**
* Página para loginarse.
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Tu area</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/estiloIntegra.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/blog.css') }}"/>
        <link href='http://fonts.googleapis.com/css?family=Poiret+One'
        rel='stylesheet' type='text/css'/> 
        <link href='http://fonts.googleapis.com/css?family=Julius+Sans+One'
        rel='stylesheet' type='text/css'/>
        <link rel="icon" href="{{ asset('images/favicon.bmp') }}"/>
    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <img src="../storage/app/{{
                        Auth::user()->nombre_archivo }}" alt="Foto personal"/>
                    </div>
                    <div class="nombre col-md-6">
                        <h1>
                            {{ Auth::user()->name }} {{
                            Auth::user()->apellidos }}
                        </h1>
                        <h3>
                            {{ Auth::user()->email }}
                        </h3>
                        <h3>
                            <span style="color: #A8ADAC">
                                {{ Auth::user()->tipo }}
                            </span>
                        </h3>
                    </div>
                </div>
                <hr/>
            </div>
        </header>
        <div class='container-fluid contenedorCircular'>
            <div class="row">
                <div class="col-md-3">
                    <ul class="nav nav-pills nav-stacked"
                    style='font-size:27px;'>
                        <li role="presentation" class="active">
                            <a href="{{ route('zonaPrivadaCuidador') }}">
                                Contactos
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#">Clases</a>
                        </li>
                        <li role="presentation">
                            <a href="#">Tareas</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9 contactos">
                    <div class="panel panel-default panelDeContactos">
                        <!-- Default panel contents -->
                        <div class="panel-heading">
                            <nav class="navbar">
                                <p class='navbaar-text'>
                                  Consulta o Agrega contactos</p>
                                <form class="navbar-form navbar-right"
                                role="search" action="{{route('users')}}"
                                method='get'>
                                    <div class="form-group">
                                        <input type="text" name="usuarioBusqueda"
                                        class="form-control"
                                        placeholder="Search">
                                    </div>
                                    <button type="submit"
                                    class="btn btn-default">
                                        <span
                                        class="glyphicon glyphicon-search"
                                        aria-hidden="true"></span>
                                    </button>
                                </form>
                            </nav>
                        </div>
                    
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Email</th>
                                    <th>Tipo de usuario</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            @if (isset($resultBusqueda))
                            @foreach($resultBusqueda as $result)

                                <tr>
                                    <td style="font-size:15px;">
                                        {{ $result->name }}
                                    </td>
                                    <td>
                                        {{ $result->apellidos }}
                                    </td>
                                    <td>
                                        {{ $result->email }}
                                    </td>
                                    <td>
                                        {{ $result->tipo }}
                                    </td>
                                    <td>
                                        <button type='submit'
                                        class="btn btn-primary botonRegistro">
                                        Agregar a Contactos</button>
                                    </td>
                                </tr>
                            @endforeach
                            @else

                            @foreach(Auth::user()->amigos as $amigo)
                                <!-- Table -->
                                <tr>
                                    <td style="font-size:15px;">
                                        {{ $amigo->name }}
                                    </td>
                                    <td>
                                        {{ $amigo->apellidos }}
                                    </td>
                                    <td>
                                        {{ $amigo->email }}
                                    </td>
                                    <td>
                                        {{ $amigo->tipo }}
                                    </td>
                                    <td>
                                        <button type='submit'
                                        class="btn btn-primary botonRegistro">
                                        Agregar a Contactos</button>
                                    </td>
                                </tr>
                            @endforeach
                            @endif
                        </table>
                    
                    </div>
                </div>
            </div>
        </div>
        <footer class="volver">
            <a href="{{ route('/') }}">
                <span id="flecha" class="glyphicon glyphicon-home"
                aria-hidden="true"></span> Volver
            </a>
        </footer>
        <script type="text/javascript" src="{{
            asset('js/jquery-1.11.3.min.js') }}"></script>
        <script type="text/javascript" src="{{
            asset('js/bootstrap.min.js') }}"></script>
        <script>
            $('.volver').hover(
                  function(){
                      //$(".volver").addClass("volver animated flipInX");
                      $(".volver a").html(
                        "<span class='glyphicon glyphicon-arrow-left' aria-hidden='true'></span> Volver");
                  },
                  function(){
                      //$(".volver").removeClass( "volver animated flipInX" );
                      $(".volver a").html(
                        "<span class='glyphicon glyphicon-home' aria-hidden='true'></span> Volver");
                  }
              )
        </script>
    </body>
</html>