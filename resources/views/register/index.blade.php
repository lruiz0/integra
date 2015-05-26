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
        <title>{{ Lang::get('messages.tituloReg') }}</title>

        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

        <!-- Bootstrap -->
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Mis styles for this template ¡está en la carpeta public!-->
        <link href="{{ asset('signin.css') }}" rel="stylesheet">

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
                <h2 class="form-group-heading">{{ Lang::get('messages.tituloReg') }}</h2>
                <label for="inputName" class="sr-only">{{ Lang::get('messages.nombre') }}</label>
                <input name="name" type="text" id="inputName" class="form-control" placeholder="{{ Lang::get('messages.nombre') }}" value="{{ old('name') }}" required autofocus><br/>
                <label for="inputApellidos" class="sr-only">{{ Lang::get('messages.apellidos') }}</label>
                <input name="apellidos" type="text" id="inputApellidos" class="form-control" placeholder="{{ Lang::get('messages.apellidos') }}" value="{{ old('apellidos') }}" required><br/>
                <label for="inputEmail" class="sr-only">{{ Lang::get('messages.email') }}</label>
                <input name="email" type="email" id="inputEmail" class="form-control" placeholder="{{ Lang::get('messages.email') }}" value="{{ old('email') }}" required>
                <label for="inputConfirmEmail" class="sr-only">{{ Lang::get('messages.confEmail') }}</label>
                <input name="email_confirmation" type="email" id="inputConfirmEmail" class="form-control" placeholder="{{ Lang::get('messages.confEmail') }}" required><br/>
                <label for="inputPassword" class="sr-only">{{ Lang::get('messages.password') }}</label>
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="{{ Lang::get('messages.password') }}" value="{{ old('password') }}" required>
                <label for="inputConfirmPassword" class="sr-only">{{ Lang::get('messages.confPassword') }}</label>
                <input name="password_confirmation" type="password" id="inputConfirmPassword" class="form-control" placeholder="{{ Lang::get('messages.confPassword') }}" required>
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
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>