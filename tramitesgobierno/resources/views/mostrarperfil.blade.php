@extends('master')
@section('encabezado')
<h1>Perfil de Usuario</h1>
@stop

@section('contenido')

<div>
<ul class="nav nav-pills nav-stacked col-xs-2" >
  <li class="active"><a href="#" value="">Yayison</a></li>
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
