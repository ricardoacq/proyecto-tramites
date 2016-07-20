<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Acta;
use App\usuario;
use DB;

class ejemplocontroller extends Controller
{
  public function master(Request $Request){
  	$usuario=$Request->input('usuario');

  	return view('/principal',compact('usuario'));
  }

  public function enviarActa(Request $Request){
  	$acta = new Acta();

  	$acta->id = $Request->input('curp');
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
  public function becas(){
    return view('becas');
  }


  public function perfil($id){
     $usuario=DB::table('usuarios')->where('id', '=', $id)->first();
     return view('perfil',compact('usuario'));
  }
  public function actualizarusuario(Request $Request,$id){
    $usuario = usuario::find($id);
    $usuario->nombre = $Request->input('nombre');
    $usuario->apellidop = $Request->input('apellidoP');
    $usuario->apellidom = $Request->input('apellidoM');
    $usuario->sexo = $Request->input('sexo');
    $usuario->estado = $Request->input('estado');
    $usuario->save();

    return redirect('/principal');
  }

}
