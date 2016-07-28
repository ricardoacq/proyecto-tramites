@extends('layouts.app')
@section('encabezado')
<h1>Preguntas Frecuentes</h1>
@stop

@section('content')
	@if(Session::has('message'))
		<div class="alert alert-success alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  				<span aria-hidden="true">&times;</span>
  			</button>>
			{{Session::get('message')}}
		</div>
	@endif

	<h4>¿Qué necesito para realizar mis tramites?</h4><br>
	<p><strong>Acta de nacimiento:</strong><br>
	Para tramitar tu acta de nacimiento solo necesitas de tu nombre y tu fecha de nacimiento. <br>
	<hr>
	<strong>Renovar licencia</strong>:<br>
	<ul>
		<li>Copia de acta de nacimiento</li>
		<li>Copia de comprobante de domicilio</li>
		<li>Copia de INE</li>
		<li>Licencia anterior o Constancia de no infraccion</li>
	</ul>
	<hr>
	<strong>Becas:</strong><br>
	<ul>
		<li>Acta de nacimiento</li>
		<li>Fotografia tamaño infantil (blanco y negro)</li>
		<li>Constancia de estudios</li>
		<li>Comprobante de ingresos</li>
		<li>Comprobante de domicilio</li>
	</ul>
	<hr>
	<strong>VISA:</strong>
	<ul>
		<li>Llenar formato descargable</li>
		<li>Pasaporte vigente (orginal y copia)</li>
		<li>Comprobante de nacionalidad</li>
		<li>Foto tamaño pasaporte con no mas de 6 meses de antiguedad</li></p>
	</ul>
@stop