@extends('layouts.default')

@section('content')
    <h1>Editar post</h1>
    @include('partial.errors')
    <div class="row">


        <form class="col s12" action="{{route('post_update_path',$post->id)}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="patch">
            <div class="row">

                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="title" id="title" class="validate" value="{{$post->title}}">
                    <label for="title">Título</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea name="body" id="body" class="materialize-textarea">{{$post->body}}</textarea>
                    <label for="body">Cuerpo</label>
                </div>

            </div>
            <button class="waves-effect waves-light btn" type="submit">Editar </button>

        </form>
    </div>
@stop