@extends('layouts.app')
@section('encabezado')
<h1>Perfil de {{ Auth::user()->name }}</h1>
@stop

@section('content')

<div>
<ul class="nav nav-pills nav-stacked col-xs-2" >
  <li class="active"><label>Opciones</label></li>
  <li><a href="{{url('/infoperfil')}}">Informacion</a></li>
  <li><a href="{{url('/notificaciones')}}">Notificaciones</a></li>
 </div>
  
  </li>
</ul>
<ul>
@yield('info')
</ul>
</div>
@stop
