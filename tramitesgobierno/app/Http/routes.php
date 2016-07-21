<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//HOME
Route::get('/', function (){return view('login');});

Route::post('/principal','ejemplocontroller@master');
Route::get('/principal', function (){return view('/principal');});

Route::get('/tramitarActaNac', function (){return view('tramitarActaNac');});
Route::post('/enviarActa', 'ejemplocontroller@enviarActa');


Route::get('/licencia', function (){return view('licencia');});

Route::get('/visa', function(){return view('/visa');});

Route::get('/becas', 'ejemplocontroller@becas');

Route::post('/guardarVisa', 'ejemplocontroller@guardarVisa');
Route::post('/guardarLicencia', 'ejemplocontroller@guardarLicencia');

Route::get('/perfil/{id}', 'ejemplocontroller@perfil');
Route::post('/actualizarusuario/{id}', 'ejemplocontroller@actualizarusuario');

Route::get('/mostrarperfil', function (){return view('mostrarperfil');});
Route::get('/infoperfil/{id}', 'ejemplocontroller@infoperfil');
Route::get('/notificaciones', function (){return view('notificaciones');});
Route::get('/registrarusuario', function (){return view('registrarusuario	');});
Route::post('/guardarusuario', 'ejemplocontroller@guardarusuario');

