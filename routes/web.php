<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*Route::get('/', 'controller_Hola@welcome');
Route::get('/controller_Hola', 'controller_Hola@index');
Route::get('/welcome', 'controller_Hola@welcome');
Route::get('articulos/{id}','ArticulosController@ver');*/
// Route::resource('photos', 'controller_Hola');
// Route::get('/users', 'InicioController@guardarUsuario');
// Route::get('/buscar', 'InicioController@buscarUsuario');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/',['uses'=>'HomeController@index', 'as' =>'post_inicio_path']);
    //Route::get('posts/{id}','PostsController@show');/*la variable id se inyecta en la funcion show como parametro de entrada*/
    Route::get('posts/create',['uses' => 'PostsController@create', 'as' =>'post_create_path']);
    Route::post('posts/create',['uses' => 'PostsController@store', 'as' =>'post_create_path']);
    Route::get('posts/{id}/edit',['uses' => 'PostsController@edit', 'as' =>'post_edit_path'])->where('id','[0-9]+');
    Route::patch('posts/{id}/edit',['uses' => 'PostsController@update', 'as' =>'post_update_path'])->where('id','[0-9]+');
    Route::get('posts/{id}/delete',['uses' => 'PostsController@destory', 'as' =>'post_delete_path'])->where('id','[0-9]+');

    Route::get('posts/{id}',['uses' => 'PostsController@show', 'as' =>'post_show_path'])->where('id','[0-9]+');
});

Route::group(['prefix'=>'api'],function(){
    Route::get('/',function(){
        return 'Hola soy tu api';
    });
});

Route::get('auth/login',['uses'=>'AuthController@index','as' =>'auth_show_path']);
Route::post('auth/login',['uses' => 'AuthController@store', 'as' =>'auth_store_path']);
Route::get('auth/logout',['uses' => 'AuthController@destroy', 'as' =>'auth_destroy_path']);



