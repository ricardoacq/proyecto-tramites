@extends('layouts.app')
@section('encabezado')
<h1>Perfil de {{ Auth::user()->name }}</h1>
@stop

@section('content')

<form action="{{url('actualizarusuario')}}/{{ Auth::user()->id }}" method="POST" class="col-xs-12">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">	
		<label for="">Nombre(s):</label>
		<input type="text" class="form-control" name="name" maxlength="18" value="{{ Auth::user()->name }}">
	</div>
	<hr>
	<div class="form-group">	
		<label for="">Apellido Paterno:</label>
		<input type="text" class="form-control" name="apellidop" maxlength="18" value="{{ Auth::user()->apellidop }}" >
	</div>
	<hr>
	<div class="form-group">
		<label for="">Apellido Materno:</label>
		<input type="text" class="form-control" name="apellidom" maxlength="18" value="{{ Auth::user()->apellidom }}">
	</div>
	<hr>
	<div class="form-group">
		<label for="">Correo:</label>
		<input type="text" class="form-control" name="email" maxlength="18" value="{{ Auth::user()->email }}">
	</div>
	<div class="text-center">
		<input type="submit" class="btn btn-primary">
		<a href="{{url('/principal')}}" class="btn btn-danger">Cancelar</a>
	</div>
</form>

@stop
