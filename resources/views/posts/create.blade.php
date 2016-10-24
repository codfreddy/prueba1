@extends('layouts.default')

@section('content')
    <h1>Crear post</h1>
    @include('partial.errors')
    <div class="row">
        <form class="col s12" action="{{route('post_create_path')}}" method="post">
            {{csrf_field()}}
            <div class="row">

                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="title" id="title" class="validate" value="{{old('title')}}">
                    <label for="title">Título</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea name="body" id="body" class="materialize-textarea">{{old('body')}}</textarea>
                    <label for="body">Cuerpo</label>
                </div>

            </div>
            <input class="waves-effect waves-light btn" type="submit" value="Crear">
        </form>
    </div>
@stop