<?php
/**
* Página para loginarse.
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- The above 3 meta tags *must* come first in the head; any other
        head content must come *after* these tags -->
        <meta name="description" content="Página de registro"/>
        <meta name="author" content="Integra corp."/>
        <link rel="icon" href="{{ asset('images/favicon.bmp') }}"/>
        <title>Integra</title>

        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300'
        rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:700'
        rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Indie+Flower'
        rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Poiret+One'
        rel='stylesheet' type='text/css'/> 
        <!-- Bootstrap -->
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet"/>
        <!-- Mis styles for this template ¡está en la carpeta public!-->
        <link href="{{ asset('css/estiloIntegra.css') }}" rel="stylesheet"/>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and
        media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via
        file:// -->
        <!--[if lt IE 9]>
          <script src=
          "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src=
          "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong>Email o contraseña incorrectos
                <br/><br/>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="formBack loginForm">
            <form role="form" method="POST" action="{{ url('/auth/login') }}">
	        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	            <div class="form_header">
                    <img class="logo_mediano"src="{{
                    asset('images/nuevo_logo.png') }}">
                    <h2 class="form-group-heading">¡Loginate!</h2>
                </div>
	            <div class="form-group">
                    <label for="inputEmail">E-mail</label>
                    <input name="email" type="email" id="inputEmail"
                    class="form-control input-lg" placeholder="E-mail"
                    required>
                </div>
	            <div class="form-group">
                    <label for="inputPassword">Contraseña</label>
                    <input name="password" type="password" id="inputPassword"
                    class="form-control input-lg" placeholder="Contaseña"
                    required>
                </div>
	            <div class="checkbox">
	                <label>
		            <input name="remember" type="checkbox">Recuérdame
                </label>
	            </div>
	            <div class="btn-group btn-group-lg btn-group-justified"
                role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <button class="btn btn-lg btn-primary botonRegistro"
                        type="submit">Acceder</button>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    si no estas registrado registrate!
                    <div class="btn-group" role="group">
                        <button class="btn btn-lg btn-primary botonRegistro"
                        onclick='window.location=" {{url("/auth/register") }}" '>Registrate</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=
        "https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
        </script>
        <!-- Include all compiled plugins (below), or include individual
        files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>