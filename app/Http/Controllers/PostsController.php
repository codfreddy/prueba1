<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{
    //
	public function show($id){
		$post=Post::findOrFail($id);
		return view('post',['post'=>$post]);
	}
	public function create(){
		return view('posts.create');
	}

	public function store(Request $request){
		$validator=Validator::make($request->all(),['title'=>'required','body'=>'required']);
		if($validator->fails()){
			return redirect()
				->route('post_create_path')
				->withInput()
				->withErrors($validator);
		}

		$post=new Post();
		$post->title=$request->get('title');
		$post->body=$request->get('body');
		$post->autor_id=Auth::id();
		$post->save();
		//dd($post->id);
		return redirect()->route('post_show_path',$post->id);
	}
	public function edit($id){
		$post=Post::findOrFail($id);

		return view('posts.edit',['post'=>$post]);
	}
	public function update(Request $request,$id){
		$validator=Validator::make($request->all(),['title'=>'required','body'=>'required']);
		if($validator->fails()){
			return redirect()
				->route('post_create_path')
				->withInput()
				->withErrors($validator);
		}
		$post=Post::findOrFail($id);
		$post->title=$request->get('title');
		$post->body=$request->get('body');
		$post->autor_id=Auth::id();
		$post->save();
		//dd($post->id);
		return redirect()->route('post_show_path',$post->id);
	}
	public function destory($id){
		$post=Post::findOrFail($id);
		$post->delete($id);
		return redirect()->route('post_inicio_path');
	}
}
