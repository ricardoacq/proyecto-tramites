@extends('master')
@section('encabezado')
<h1>Preguntas frecuentes</h1>
<p>Para realizar cualquier tramite tiebes que tener tu cuenta en TramitesGubernamentales.com</p>
@stop

@section('contenido')
	@if(Session::has('message'))
		<div class="alert alert-success">
			{{Session::get('message')}}
		</div>
	@endif

	<h4>¿Qué necesito para realizar mis tramites?</h4>
	<p><strong>Acta de nacimiento:</strong><br>
	Para tramitar tu acta de nacimiento solo necesitas de tu nombre y tu fecha de nacimiento. <br>
	<hr>
	<strong>Renovar licencia</strong>:<br>
	Copia de acta de nacimiento <br>
	Copia de INE<br>
	Licencia anterior o Constancia de no infraccion<br>
	<hr>
	<strong>Becas:</strong><br>
	CURP<br>
	Acta de nacimiento<br>
	Fotografia tamaño infantil (blanco y negro)<br>
	Constancia de estudios<br>
	Cardex<br>
	Comprobante de ingresos<br>
	Comprobante de domicilio<br>
	<hr>
	<strong>VISA:</strong><br>
	Llenar formato descargable<br>
	Pasaporte vigente (orginal y copia)<br>
	Comprobante de nacionalidad<br>
	Foto tamaño pasaporte con no mas de 6 meses de antiguedad</p>

@stop