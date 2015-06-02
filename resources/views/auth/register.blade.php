<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Página de registro"/>
        <meta name="author" content="Integra corp."/>
        <link rel="icon" href="{{ asset('images/favicon.bmp') }}"/>
        <title>Integra</title>

        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'> 
        <!-- Bootstrap -->
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Mis styles for this template ¡está en la carpeta public!-->
        <link href="{{ asset('css/estiloIntegra.css') }}" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="formBack">
            <form role="form" method="POST" action="{{ url('/auth/register') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form_header"><img class="logo_mediano"src="{{ asset('images/nuevo_logo.png') }}"> <h2 class="form-group-heading">¡Registrate!</h2> </div>
                <div class="form-group">
                    <label for="inputName">Nombre</label>
                    <input name="name" type="text" id="inputName" class="form-control input-lg" placeholder="Nombre" value="{{ old('name') }}" required autofocus><br/>
                </div>

                <div class="form-group">
                    <label for="inputApellidos">Apellidos</label>
                    <input name="apellidos" type="text" id="inputApellidos" class="form-control input-lg" placeholder="Apellidos" value="{{ old('apellidos') }}" required><br/>
                </div>

                <div class="form-group">
                    <label for="inputEmail">E-mail</label>
                    <input name="email" type="email" id="inputEmail" class="form-control input-lg" placeholder="E-mail" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                     <label for="inputPassword">Contraseña</label>
                    <input name="password" type="password" id="inputPassword" class="form-control input-lg" placeholder="Contaseña" value="{{ old('password') }}" required>
                </div>

                <div class="form-group">
                    <h3>¿Eres usuario o cuidador?</h3>
                    <label class="radio-inline">
                        <input name="tipo" type="radio" id="Usuari" value="user" required> Usuari
                    </label>
                    <label class="radio-inline">
                        <input name="tipo" type="radio" id="Cuidador" value="cuidador" required> Cuidador
                    </label><br/>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Quieres subir una foto?</label>
                    <input name="foto" type="file" id="exampleInputFile">
                    <p class="help-block">Para subir una foto de perfil haz click en browse.</p>
                </div>
                    
                        <button class="btn btn-primary btn-lg btn-block botonRegistro " type="submit">Registrame</button>
                    

            </form>
        </div>
         <footer class="volver">
            <a href="{{ route('/') }}">
                <span id="flecha" class="glyphicon glyphicon-home"
                aria-hidden="true">
                    <!--El espacio delante el volver és importante!-->
                </span> Volver
            </a>
        </footer>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <script>
        $('.volver').hover(
                function(){
                // $(".volver").addClass("volver animated flipInX");
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