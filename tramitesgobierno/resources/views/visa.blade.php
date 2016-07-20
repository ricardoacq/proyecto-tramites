@extends('master')
@section('encabezado')
<h1>VISA</h1>
@stop
@section('contenido')

<form action="{{url('/guardarVisa')}}" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<label for="">Formato de solicitud de VISA</label><br>
		<a href="https://drive.google.com/file/d/0ByzIMoBRTFBua1FxaXdoWG50QVU/view" target="_blank">Descargar formato de VISA aqui.</a>
		<input name="solicitud" type="file" class="form-control" required>
		<hr>

		<label for="">Pasaporte vigente</label>
		<input name="pasaporte" type="file" class="form-control">
		<hr>

		<label for="">Fotografia reciente (no mayor a 6 meses)</label>
		<input name="foto" type="file" class="form-control">
		<hr>

		<label for="">*Documento de estancia legal</label>
		<input name="estancia" type="file" class="form-control">
		<div class="col-xs-12 well">
			<label>*Aplica solo a persona extranjera que no es nacional al pais donde solicita la VISA.</label><br>
		</div>
		<div class="text-center">
			<input type="submit" id="mensaje" class="btn btn-primary">
			<a href="{{url('/principal')}}" class="btn btn-danger">Cancelar</a>
		</div>
	</div>
</form>
@stop