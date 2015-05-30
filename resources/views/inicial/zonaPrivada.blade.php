<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/estiloIntegra.css') }}">
	<link rel="stylesheet" href="{{ asset('css/blog.css') }}">
</head>
<body>
	<div class='contenedorCircular' style='background:red;'>
		<h1>{{ Auth::user()->name }}</h1>
		<h1>{{ Auth::user()->apellidos }}</h1>
		<h1>{{ Auth::user()->email }}</h1>
		<h1>{{ Auth::user()->password }}</h1>
		<h1>{{ Auth::user()->tipo }}</h1>
		<h1>{{ Auth::user()->foto }}</h1>
	</div>
	<div>
		
	</div>
	<script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
</body>
</html>