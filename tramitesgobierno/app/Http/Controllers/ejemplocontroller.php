<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class ejemplocontroller extends Controller
{
  public function master(Request $Request){
  	$usuario=$Request->input('usuario');

  	return view('/master',compact('usuario'));
  }

}
