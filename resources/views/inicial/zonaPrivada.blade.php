<?php
/**
* Página para loginarse.
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Blog</title>
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/estiloIntegra.css') }}">
		<link rel="stylesheet" href="{{ asset('css/blog.css') }}">
		<link href='http://fonts.googleapis.com/css?family=Poiret+One'
		rel='stylesheet' type='text/css'> 
	</head>
	<body>
		<header>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3">
						<img src="{{ asset('images/niña1.jpeg') }}"
						alt="tu foto" class="img-circle">
					</div>
					<div class="nombre col-md-6">
						<h1>{{ Auth::user()->name }} 
							{{ Auth::user()->apellidos }}</h1>
						<h3>{{ Auth::user()->email }}</h3>
						<h3>
							<span style="color: #A8ADAC">{{Auth::user()->tipo }}</span>
						</h3>
					</div>
					<div class="col-md-3" style="">
						<nav class="navbar">
							<form class="navbar-form navbar-left"
							role="search">
							  <div class="form-group">
							    <input type="text" class="form-control"
							    placeholder="Search">
							  </div>
							  <button type="submit" class="btn btn-default">
							  	<span class="glyphicon glyphicon-search"
							  	aria-hidden="true"></span>
							  </button>
							</form>
						</nav>
					</div>
				</div>
				<hr>
			</div>
		</header>
		<div class='contenedorCircular'>
			en construccion

		</div>
		<footer class="volver">
	        <a href="{{ route('/') }}">
	        	<span id="flecha" class="glyphicon glyphicon-home"
	        	aria-hidden="true"></span> Volver</a>
	    </footer>
		<script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
	    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
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