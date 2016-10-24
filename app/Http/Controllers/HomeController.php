<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
    	//$posts=Post::all();
    	//dd($posts);
    	
    	//$posts=Post::find(1);
    	//$posts=[$posts];
    	//dd($posts);
    	$posts=Post::with('autor')->get()->where('autor_id',Auth::user()->id);

        $user=User::with('posts')->get();


        return dd($user);
        //return dd($posts);
    	return view('home',['posts'=>$posts]);
    }
}
