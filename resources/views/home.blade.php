@extends('layouts.default')

@section('content')
<h1>Estos son nuestros post</h1>
	<hr>
	<ul class="list-unstyled">
	@foreach($posts as $post)

		<li>
		<a href="{{route('post_show_path',$post->id) }}">{{$post->title}}</a>
		<a href="{{route('post_edit_path',$post->id)}}"><i class="material-icons orange-text text-darken-2">edit</i></a>


			<!-- Modal Trigger -->
		<a class="modal-trigger" href="#modal_{{$post->id}}">
			<i class="material-icons red-text text-darken-2">delete</i>
		</a>
		<!-- Modal Structure -->
		<div id="modal_{{$post->id}}" class="modal">
			<div class="modal-content">
				<i class="material-icons Small red-text text-darken-2">delete</i>
				<span>¿Esta seguro de eliminar el post <span for="" class="blue-text text-darken-2">{{$post->title}}</span>?</span>
			</div>
			<div class="modal-footer">
				<a href="{{route('post_delete_path',$post->id)}}" class="waves-effect waves-green btn-flat">Aceptar</a>
				<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
			</div>
		</div>


		<br>
		Autor: {{$post->autor->first_name}}
		<br>
		Creado: {{$post->created_at}}
		<hr>	
	@endforeach
	</ul>
@stop