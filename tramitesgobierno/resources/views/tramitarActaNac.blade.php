@extends('layouts.app')
@section('encabezado')
<h1>Acta de Nacimiento</h1>
@stop
@section('content')

<script>
$(document).ready(function(){
	$("#name, #lastname1, #lastname2").keypress(function (key) {
		window.console.log(key.charCode)
		if ((key.charCode < 97 || key.charCode > 122) //letras minusculas
		    && (key.charCode < 65 || key.charCode > 90) //letras mayusculas
		    && (key.charcode != 241) //ñ
		    && (key.charCode != 209) //Ñ
		    && (key.charCode != 32) //espacio
		    && (key.charCode != 225) //á
		    && (key.charCode != 233) //é
		    && (key.charCode != 237) //í
		    && (key.charCode != 243) //ó
		    && (key.charCode != 250) //ú
		    && (key.charCode != 193) //Á
		    && (key.charCode != 201) //É
		    && (key.charCode != 205) //Í
		    && (key.charCode != 211) //Ó
		    && (key.charCode != 218) //Ú
		    && (key.charCode != 220) //Ü 
		)
		return false;
	});
	$("#day, #month, #year").keypress(function (key){
	    window.console.log(key.charCode)
	    if(key.charCode < 48 || key.charCode > 57) //números del 0 al 9

	    return false;

	});

});
</script>
<form action="{{url('/enviarActa')}}" method="POST">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<h4>CURP del solicitante</h4>
		<label for="">CURP:</label>
		<input type="text" class="form-control" name="curp" maxlength="18" placeholder="Escriba su CURP">
	</div>
	<hr>
	<div class="form-group">		
		<h4>Nombre del solicitante</h4>
		<label for="">Nombre(s):</label>
		<input type="text" class="form-control" id="name" name="nombre" maxlength="20" placeholder="Escriba su nombre">
		<label for="">Apellido paterno:</label>
		<input type="text" class="form-control" id="lastname1" name="apellidoPaterno" maxlength="20" placeholder="Escriba su apellido paterno">
		<label for="">Apellido materno:</label>
		<input type="text" class="form-control" id="lastname2" name="apellidoMaterno" maxlength="20" placeholder="Escriba su apellido materno">
	</div>
	<hr>
	<div class="form-group">
		<h4>Fecha de nacimiento</h4>
		<label for"">Día:</label>
		<input type="text" class="form-control" id="day" name="dia" value="" maxlength="2" placeholder="dd">
		<label for"">Mes:</label>
		<input type="text" class="form-control" id="month" name="mes" value="" maxlength="2" placeholder="mm">
		<label for="">Año:</label>
		<input type="text" class="form-control" id="year" name="año" value="" maxlength="4" placeholder="yyyy">
	</div>
	<hr>
	<div class="form-group">
		<h4>Lugar para recoger el documento</h4>
		<div class="radio">
  			<label>
    			<input type="radio" name="radios" id="optionsRadios1" value="Unidad de Servicios Estatales" checked>
   				 Unidad de Servicios Estatales
  			</label>
		</div>
		<div class="radio">
		 	<label>
		    	<input type="radio" name="radios" id="optionsRadios2" value="Ayuntamiento">
		    	Ayuntamiento
			</label>
		</div>

	</div>
	<div class="text-center">
		<input type="submit" class="btn btn-primary">
		<a href="{{url('/principal')}}" class="btn btn-danger">Cancelar</a>
	</div>
</form>

@stop