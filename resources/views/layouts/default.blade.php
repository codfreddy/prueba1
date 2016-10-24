<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css')}}">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="container">




@if($currentUser)
    <label>Usuario: {{$currentUser->first_name.', '.$currentUser->last_name}} </label>
    <a href="{{route('auth_destroy_path')}}">Salir</a>
  @else
    <a href="{{route('auth_show_path')}}">Login</a>
  @endif
@yield('content')	


</div>
<script  src="{{ asset('js/app.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<script  src="{{ asset('js/init.js')}}"></script>
</body>
</html>