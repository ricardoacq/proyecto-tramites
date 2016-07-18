@extends('master')
@section('encabezado')
<h1>Solicitud de beca</h1>
@stop

@section('contenido')


<div class="form-group">
		<label for="">Beca:</label>		
		<select class ="form-control" name="beca">
			<option value="">Becas.</option>
		</select>	
		<br>
		<br>
		<label for="">Nombre(s):</label>
		<input type="text" class="form-control" name="nombre" maxlength="18" value="">
		<br>
		<br>
		<label for="">Apellido Paterno:</label>
		<input type="text" class="form-control" name="apellidoP" maxlength="18" value="">
		<br>
		<br>
		<label for="">Apellido Materno:</label>
		<input type="text" class="form-control" name="apellidoM" maxlength="18" value="">
		<br>
		<br>
		<label for="">CURP:</label>
		<input type="text" class="form-control" name="curp" maxlength="18" value="">
		<br>
		<br>
		<label for="">Acta de nacimiento</label>
		<input name="acta" type="file" />
		<br>
		<br>
		<label for"">Comprobante de Domicilio</label>
		<input name="comprobanteD" type="file" />
		<br>
		<br>
		<label for"">Fotografía</label>
		<input name="foto" type="file" />
		<br>
		<br>
		<label for="">Constancia de estudios</label>
		<input name="constancia" type="file" />
		<br>
		<br>
		<label for="">Comprobante de ingresos</label>
		<input name="comprobanteI" type="file" />
		<br>
		<br>
		<input type="submit" class="btn btn-primary" value="Confirmar Solicitud">
	</div>
<br>
		<br>
<h5>Nota: Los archivos deben de ser subidos con imagen clara para su correcta verificacion.</h5>





@stop