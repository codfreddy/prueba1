@extends('layouts.default')

@section('content')
	<hr>
	<a class="btn-floating btn-large waves-effect waves-light green" href="{{route('post_create_path')}}">
		<i class="material-icons">add</i>
	</a>
	<h1>{{$post->title}}</h1>
	<p>{{$post->body }}</p>	
@stop