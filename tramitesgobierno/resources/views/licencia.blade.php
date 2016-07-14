@extends('master')
@section('encabezado')
<h1>Renovar Licencia para conducir</h1>
@stop

@section('contenido')


<div class="form-group">
		<label for="">Acta de nacimiento</label><br>
		<input name="acta" type="file" class="form-control"/>
		<br>
		<br>
		<label for"">Comprobante de Domicilio</label>
		<input name="comprobante" type="file" />
		<br>
		<br>
		<label for"">INE</label>
		<input name="ine" type="file" />
		<br>
		<br>
		<label for="">Licencia Anterior o constancia de no infraccion.</label>
		<input name="licencia" type="file" />
		<br>
		<br>
		<input type="submit" class="btn btn-primary">
	</div>






@stop