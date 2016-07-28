<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Acta;
use App\usuario;
use App\user;
use App\Beca;
use App\tramites;
use App\visa;
use App\licencia;
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
    $idacta=acta::all()->last();
   
    $tramites = new tramites();
    $tramites->curp = $Request->input('curp');
    $tramites->tramite = 'Acta de nacimiento'
    $tramites->id_tramite = $idacta->id;
    $tramites->save();

  	return redirect('/principal')->with('message', 'Exito');

  }
  public function becas(){
    return view('becas');
  }


  public function perfil($id){
     $usuario=DB::table('usuarios')->where('id', '=', $id)->first();
     return view('perfil',compact('usuario'));
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

  public function guardarVisa(Request $Request, $curp){
    //Se obtiene el campo definido en el formulario
    $archivo1 = $Request->file('solicitud');
    $archivo2 = $Request->file('pasaporte');
    $archivo3 = $Request->file('foto');
    $archivo4 = $Request->file('estancia');
    //Se saca el nombre del archivo
    $nombre1 = 'Solicitud'.$curp;
    $nombre2 = 'Pasaporte'.$curp;
    $nombre3 = 'Foto'.$curp;
    $nombre4 = 'Estancia'.$curp;
    //Obtener la extencion de los archivos
    $extension1 = $archivo1->getClientOriginalExtension();
    $extension2 = $archivo2->getClientOriginalExtension();
    $extension3 = $archivo3->getClientOriginalExtension();
    $extension4 = $archivo4->getClientOriginalExtension();
    //Indicar que se va a guardar un archivo en el disco local
    \Storage::disk('visas')->put($nombre1.'.'.$extension1, \File::get($archivo1));
    \Storage::disk('visas')->put($nombre2.'.'.$extension2, \File::get($archivo2));
    \Storage::disk('visas')->put($nombre3.'.'.$extension3, \File::get($archivo3));
    \Storage::disk('visas')->put($nombre4.'.'.$extension4, \File::get($archivo4));
    //Volvemos al inicio tras haber completado la solicitud
    $visa = new visa();
    $visa->curp = $curp;
    $visa->save();
    
    $idvisa=visa::all()->last();
    
    $tramites = new tramites();
    $tramites->curp = $curp;
    $tramites->tramite = 'Visa'
    $tramites->id_tramite = $idvisa->id;
    $tramites->save();

    return redirect('/principal')->with('message', 'Exito');
  }
  public function guardarLicencia(Request $Request, $curp){
    //Se obtiene el campo definido en el formulario
    $archivo1 = $Request->file('acta');
    $archivo2 = $Request->file('comprobante');
    $archivo3 = $Request->file('ine');
    $archivo4 = $Request->file('licencia');
    //Se saca el nombre del archivo
    $nombre1 = 'acta'.$curp;
    $nombre2 = 'Domicilio'.$curp;
    $nombre3 = 'INE'.$curp;
    $nombre4 = 'Licencia'.$curp;
    //Obtener la extencion de los archivos
    $extension1 = $archivo1->getClientOriginalExtension();
    $extension2 = $archivo2->getClientOriginalExtension();
    $extension3 = $archivo3->getClientOriginalExtension();
    $extension4 = $archivo4->getClientOriginalExtension();
    //Indicar que se va a guardar un archivo en el disco local
    \Storage::disk('local')->put($nombre1.'.'.$extension1, \File::get($archivo1));
    \Storage::disk('local')->put($nombre2.'.'.$extension2, \File::get($archivo2));
    \Storage::disk('local')->put($nombre3.'.'.$extension3, \File::get($archivo3));
    \Storage::disk('local')->put($nombre4.'.'.$extension4, \File::get($archivo4));
    //Volvemos al inicio tras haber completado la solicitud
    $licencia = new licencia();
    $licencia->curp = $curp;
    $licencia->save();
    
    $idlic=visa::all()->last();
    
    $tramites = new tramites();
    $tramites->curp = $curp;
    $tramites->tramite = 'Licencia'
    $tramites->id_tramite = $idlic->id;
    $tramites->save();

    return redirect('/principal')->with('message', 'Exito');
  }
  public function mostrarnotificaciones(){
     $tramites=tramites::get();
    return view('notificaciones',compact('tramites'));
     
  }

  public function guardarBeca(Request $Request, $curp){

    //Se obtiene el campo definido en el formulario
    $archivo1 = $Request->file('acta');
    $archivo2 = $Request->file('comprobanteD');
    $archivo3 = $Request->file('foto');
    $archivo4 = $Request->file('constancia');
    $archivo5 = $Request->file('comprobanteI');
    //Se saca el nombre del archivo
    $nombre1 = 'acta'.$curp;
    $nombre2 = 'Domicilio'.$curp;
    $nombre3 = 'Foto'.$curp;
    $nombre4 = 'Constancia'.$curp;
    $nombre5 = 'Ingresos'.$curp;
    //Obtener la extencion de los archivos
    $extension1 = $archivo1->getClientOriginalExtension();
    $extension2 = $archivo2->getClientOriginalExtension();
    $extension3 = $archivo3->getClientOriginalExtension();
    $extension4 = $archivo4->getClientOriginalExtension();
    $extension5 = $archivo5->getClientOriginalExtension();
    //Indicar que se va a guardar un archivo en el disco local
    \Storage::disk('beca')->put($nombre1.'.'.$extension1, \File::get($archivo1));
    \Storage::disk('beca')->put($nombre2.'.'.$extension2, \File::get($archivo2));
    \Storage::disk('beca')->put($nombre3.'.'.$extension3, \File::get($archivo3));
    \Storage::disk('beca')->put($nombre4.'.'.$extension4, \File::get($archivo4));
    \Storage::disk('beca')->put($nombre5.'.'.$extension5, \File::get($archivo5));
    //some crazy shit
    $beca = new Beca();
    $beca->curp = $curp;
    $beca->beca = $Request->input('beca');
    $beca->acta = $nombre1;
    $beca->compdomicilio = $nombre2;
    $beca->foto = $nombre3;
    $beca->constancia = $nombre4;
    $beca->compingresos = $nombre5;
    $beca->save();
    
    $idbeca=Beca::all()->last();
    
    $tramites = new tramites();
    $tramites->curp = $idbeca->curp;
    $tramites->tramite = 'Beca'
    $tramites->id_tramite = $idbeca->id;
    $tramites->save();


     //Volvemos al inicio tras haber completado la solicitud
    return redirect('/principal')->with('message', 'Exito');

  }

}
