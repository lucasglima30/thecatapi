<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatControlller extends Controller
{
    public function __construct(){
    	$this->middleware('auth:api');
    }

    public function list(){
    	return response()->json(['message' => 'Succesful request']);
    }
}
