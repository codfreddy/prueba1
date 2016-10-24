<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class controller_Hola extends Controller
{
    function index(){
    	return 'Hola';
    }
    function create(){
    	return 'create';
    }
    function store(){
    	return 'save';
    }
    function show(){
    	return 'list';
    }

}
