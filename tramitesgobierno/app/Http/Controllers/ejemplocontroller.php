<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Acta;
use App\usuario;
use App\user;

use DB;

class ejemplocontroller extends Controller
{

  public function store(){
      flash('Welcome Aboard!', 'success');
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

  public function notificaciones(){
     $solicitudes=usuario::get();
     return view('notificaciones',compact('solicitudes'));
  }

  public function infoperfil($id){
     $usuario=DB::table('user')->where('id', '=', $id)->first();
     return view('infoperfil',compact('usuario'));
  }
  public function actualizarusuario(Request $Request,$id){
    $usuario = user::find($id);
    $usuario->name = $Request->input('name');
    $usuario->apellidop = $Request->input('apellidop');
    $usuario->apellidom = $Request->input('apellidom');
    $usuario->email = $Request->input('email');
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
    \Storage::disk('visas')->put($nombre1, \File::get($archivo1));
    \Storage::disk('visas')->put($nombre2, \File::get($archivo2));
    \Storage::disk('visas')->put($nombre3, \File::get($archivo3));
    \Storage::disk('visas')->put($nombre4, \File::get($archivo4));
    //Volvemos al inicio tras haber completado la solicitud
    return redirect('/principal')->with('message', 'Exito');
  }
  public function guardarLicencia(Request $Request){
    //Se obtiene el campo definido en el formulario
    $archivo1 = $Request->file('acta');
    $archivo2 = $Request->file('comprobante');
    $archivo3 = $Request->file('ine');
    $archivo4 = $Request->file('licencia');
    //Se saca el nombre del archivo
    //$nombre='acta$id'
    //$extension = $archivo.getClientOriginalExtension();
    $nombre1 = $archivo1->getClientOriginalName();
    $nombre2 = $archivo2->getClientOriginalName();
    $nombre3 = $archivo3->getClientOriginalName();
    $nombre4 = $archivo4->getClientOriginalName();
    //Indicar que se va a guardar un archivo en el disco local
    //\Storage::disk('local')->put($nombre.'.'.$extension, \File::get($archivo));
    \Storage::disk('local')->put($nombre1, \File::get($archivo1));
    \Storage::disk('local')->put($nombre2, \File::get($archivo2));
    \Storage::disk('local')->put($nombre3, \File::get($archivo3));
    \Storage::disk('local')->put($nombre4, \File::get($archivo4));
    //Volvemos al inicio tras haber completado la solicitud

    return redirect('/principal');
  }


}
