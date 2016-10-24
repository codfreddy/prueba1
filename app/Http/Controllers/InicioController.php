<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;


class InicioController extends Controller
{
    //
    public function guardarUsuario(){
    	// $user=User::create(['first_name'=>'freddy','last_name'=>'silva','email'=>'silvoa@gmail.com','password'=>'silva']);
    	// $user->save();
    	// return $user;

    	$user=new User();
    	$user->first_name='freddy';
    	$user->last_name='freddy';
    	$user->email='freddy23@gmail.com';
    	$user->password='aafreddy';
    	$user->save();
    	return $user;
    }
    public function buscarUsuario(){
    	$user=User::find(3);
    	$user->email='freddy13@gmail.com';
    	$user->save();
    	dd($user);
    	return $user;
    }
}
