@extends('layouts.default')

@section('content')
	<h1>Iniciar sesion</h1>
	@include('partial.errors')
	<form action="{{ route('auth_store_path')}}" method="post">
	{{csrf_field()}}
	<label for="email">Email:</label>
	<input type="text" name="email" value="" class="form-comtrol"></input>
	<label for="password">Password:</label>
	<input type="password" name="password" value=""></input>
	<input class="waves-effect waves-red btn primary-content" type="submit" value="Iniciar"></input>

	</form>
	
@stop