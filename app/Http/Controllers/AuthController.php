<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    //
    public function index(){
    	return view('auth');
    }
    public function store(Request $request){
    	$this->validate($request,['email'=>'required|email','password'=>'required']);

    	if(!auth()->attempt($request->only(['email','password']))){
    		return redirect()->route('auth_store_path')->withErrors(['No encontramos al usuario']);
    	}
    	return 'exito';
    }
    public function destroy(){
		auth()->logout();
		return redirect()->route('auth_show_path');
	}
}
