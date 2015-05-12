<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Página de registro">
    <meta name="author" content="Alejandro Feher">
    <link rel="icon" href="img/logo.png">
    <title>Registrate</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <form class="form-group">
        <h2 class="form-group-heading">Porfavor regístrese</h2>
        <label for="inputName" class="sr-only">Nombre</label>
        <input type="text" id="inputName" class="form-control" placeholder="Nombre" required autofocus><br/>
        <label for="inputApellidos" class="sr-only">Apellidos</label>
        <input type="text" id="inputApellidos" class="form-control" placeholder="Apellidos" required><br/>
        <label for="inputEmail" class="sr-only">E-mail</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" required>
        <label for="inputConfirmEmail" class="sr-only">Confirma E-mail</label>
        <input type="email" id="inputConfirmEmail" class="form-control" placeholder="Confirma E-mail" required><br/>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Contaseña" required>
        <label for="inputConfirmPassword" class="sr-only">Confirma Contraseña</label>
        <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Confirma Contaseña" required>
        <h4>Que eres usuario o cuidador?</h4>
        <label class="radio-inline">
            <input type="radio" name="inlineRadioOptions" id="Usuari" value="user" required> Usuari
        </label>
        <label class="radio-inline">
            <input type="radio" name="inlineRadioOptions" id="Cuidador" value="cuidador" required> Cuidador
        </label><br/>
        <label for="exampleInputFile">Quieres subir una foto?</label>
        <input type="file" id="exampleInputFile">
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