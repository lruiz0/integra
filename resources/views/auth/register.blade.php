<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Página de registro">
        <meta name="author" content="Integra corp.">
        <link rel="icon" href="img/logo.png">
        <title>Registrate</title>

        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

        <!-- Bootstrap -->
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Mis styles for this template ¡está en la carpeta public!-->
        <link href="{{ asset('/signin.css') }}" rel="stylesheet">

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
        <div class="container">
            <form class="form-group" role="form" method="POST" action="{{ url('/auth/register') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h2 class="form-group-heading">Porfavor regístrese</h2>
                <label for="inputName" class="sr-only">Nombre</label>
                <input name="name" type="text" id="inputName" class="form-control" placeholder="Nombre" value="{{ old('name') }}" required autofocus><br/>
                <label for="inputApellidos" class="sr-only">Apellidos</label>
                <input name="apellidos" type="text" id="inputApellidos" class="form-control" placeholder="Apellidos" value="{{ old('apellidos') }}" required><br/>
                <label for="inputEmail" class="sr-only">E-mail</label>
                <input name="email" type="email" id="inputEmail" class="form-control" placeholder="E-mail" value="{{ old('email') }}" required>
                <label for="inputConfirmEmail" class="sr-only">Confirma E-mail</label>
                <input name="email_confirmation" type="email" id="inputConfirmEmail" class="form-control" placeholder="Confirma E-mail" value="{{ old('email_confirmation') }}" required><br/>
                <label for="inputPassword" class="sr-only">Contraseña</label>
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Contaseña" value="{{ old('password') }}" required>
                <label for="inputConfirmPassword" class="sr-only">Confirma Contraseña</label>
                <input name="password_confirmation" type="password" id="inputConfirmPassword" class="form-control" placeholder="Confirma Contaseña" value="{{ old('password_confirmation') }}" required>
                <h4>Que eres usuario o cuidador?</h4>
                <label class="radio-inline">
                    <input type="radio" name="tipo" id="Usuari" value="user" required> Usuari
                </label>
                <label class="radio-inline">
                    <input type="radio" name="tipo" id="Cuidador" value="cuidador" required> Cuidador
                </label><br/>
                <label for="exampleInputFile">Quieres subir una foto?</label>
                <input name="foto" type="file" id="exampleInputFile">
                <p class="help-block">Para subir una foto de perfil haz click en browse.</p>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Regístrame</button>
                <a href="{{ route('/') }}" class="btn btn-block">Vuelve al índice.</a>
            </form>
        </div> <!-- /container -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
