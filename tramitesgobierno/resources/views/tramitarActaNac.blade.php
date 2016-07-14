@extends('master')
@section('encabezado')
<h1>Acta de nacimiento</h1>
@stop

@section('contenido')
<form action="{{url('/enviarActa')}}" method="POST">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<h4>CURP del solicitante</h4>
		<label for="">CURP:</label>
		<input type="text" class="form-control" name="curp" maxlength="18">
	</div>
	<hr>
	<div class="form-group">		
		<h4>Nombre del solicitante</h4>
		<label for="">Nombre(s):</label>
		<input type="text" class="form-control" name="nombre" maxlength="20">
		<label for="">Apellido paterno:</label>
		<input type="text" class="form-control" name="apellidoPaterno" maxlength="20">
		<label for="">Apellido materno:</label>
		<input type="text" class="form-control" name="apellidoMaterno" maxlength="20">
	</div>
	<hr>
	<div class="form-group">
		<h4>Fecha de nacimiento</h4>
		<label for"">Día</label>
		<input type="text" class="form-control" name="dia" value="" maxlength="2">
		<label for"">Mes</label>
		<input type="text" class="form-control" name="mes" value="" maxlength="2">
		<label for="">Año</label>
		<input type="text" class="form-control" name="ano" value="" maxlength="4">
	</div>
	<hr>
	<div class="form-group">
		<h4>Lugar para recoger el documento</h4>
		<div class="radio">
  			<label>
    			<input type="radio" name="radios" id="optionsRadios1" value="option1" checked>
   				 Unidad de Servicios Estatales
  			</label>
		</div>
		<div class="radio">
		 	<label>
		    	<input type="radio" name="radios" id="optionsRadios2" value="option2">
		    	Ayuntamiento
			</label>
		</div>

	</div>
	<hr>
	<div class="col-xs-12 text-center well">
		<input type="submit" class="btn btn-primary">
		<a href="#" class="btn btn-danger">Cancelar</a>
	</div>
</form>

@stop