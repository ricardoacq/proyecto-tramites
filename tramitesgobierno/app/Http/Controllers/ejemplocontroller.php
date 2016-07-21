<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Acta;
use App\usuario;
use DB;

class ejemplocontroller extends Controller
{

  public function store(){
      flash('Welcome Aboard!');
      return home();
  }
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
    $usuario->calle = $Request->input('calle');
    $usuario->numerocasa = $Request->input('ncasa');
    $usuario->colonia = $Request->input('colonia');
    $usuario->cp = $Request->input('cp');
    $usuario->save();

    return redirect('/principal');
  }

  public function guardarVisa(Request $Request){
    //Se obtiene el campo definido en el formulario
    $archivo1 = $Request->file('solicitud');
    $archivo2 = $Request->file('pasaporte');
    $archivo3 = $Request->file('foto');
    $archivo4 = $Request->file('estancia');
    //Se saca el nombre del archivo
    $nombre1 = $archivo1->getClientOriginalName();
    $nombre2 = $archivo2->getClientOriginalName();
    $nombre3 = $archivo3->getClientOriginalName();
    $nombre4 = $archivo4->getClientOriginalName();
    //Indicar que se va a guardar un archivo en el disco local
    \Storage::disk('local')->put($nombre1, \File::get($archivo1));
    \Storage::disk('local')->put($nombre2, \File::get($archivo2));
    \Storage::disk('local')->put($nombre3, \File::get($archivo3));
    \Storage::disk('local')->put($nombre4, \File::get($archivo4));
    //Volvemos al inicio tras haber completado la solicitud

    return redirect('/principal');
  }
   public function guardarusuario(Request $Request){
    $usuario = new usuario();
    $usuario->id = $Request->input('curp');
    $usuario->contraseña = $Request->input('contra1');
    $usuario->nombre = $Request->input('nombre');
    $usuario->apellidop = $Request->input('apellidoPaterno');
    $usuario->apellidom = $Request->input('apellidoMaterno');
    $año = $Request->input('año');
    $mes = $Request->input('mes');
    $dia = $Request->input('dia');
    $usuario->fechanac = "$año-$mes-$dia 00:00:00";
    $usuario->sexo = $Request->input('radios');
    $usuario->calle = $Request->input('calle');
    $usuario->numerocasa = $Request->input('numero');
    $usuario->colonia = $Request->input('colonia');
    $usuario->cp = $Request->input('cp');
    $usuario->save();

    return redirect('/principal');
  }


}
