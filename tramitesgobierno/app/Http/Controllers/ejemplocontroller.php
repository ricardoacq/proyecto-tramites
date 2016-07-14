<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Acta;

class ejemplocontroller extends Controller
{
  public function master(Request $Request){
  	$usuario=$Request->input('usuario');

  	return view('/principal',compact('usuario'));
  }

  public function enviarActa(Requests $Requests){
  	$acta = new Acta();

  	$acta->curp = $Request->input('curp');
  	$acta->nombre = $Request->input('nombre')
  	$acta->apellidop = $Request->input('apellidoPaterno');
  	$acta->apellidom = $Request->input('apellidoMaterno');
  	$acta->fechanacimiento = $Request->input('dia','-','mes','-', 'año');

  	$acta->save();

  	return redirect('/principal');
  }

}
