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

  public function enviarActa(Request $Request){
  	$acta = new Acta();

  	$acta->curp = $Request->input('curp');
  	$acta->nombre = $Request->input('nombre');
  	$acta->apellidop = $Request->input('apellidoPaterno');
  	$acta->apellidom = $Request->input('apellidoMaterno');
  	$anio = $Request->input('ano');
  	$mes = $Request->input('mes');
    $dia = $Request->input('dia');
    $fecha="$anio-$mes-$dia 00:00:00";
  	$acta->fechanacimiento = $fecha;
  	$acta->save();

  	return redirect('/tramitarActaNac');
  }

}
