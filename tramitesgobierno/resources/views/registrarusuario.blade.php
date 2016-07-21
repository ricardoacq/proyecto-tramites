<!DOCTYPE html>
 <html lan="en">
    <head>
      <meta charset="UTF-8">
      <title></title>
       <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
      <script src="{{asset("js/jquery.js")}}"> </script>     
  </head>
  <body>

<div class="container">
   <div class="row">
    <div class="col-xs-12 text-center well">
    	<h1>Registrar Usuario</h1>
         </div>

        </div>  

         <div class="row">
        <div class="col-xs-12">
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
	$("#day, #month, #year, #cp").keypress(function (key){
	    window.console.log(key.charCode)
	    if(key.charCode < 48 || key.charCode > 57) //números del 0 al 9

	    return false;

	});
});
</script>

<form action="{{url('/guardarusuario')}}" method="POST">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<h4>Ingresa tus datos</h4>
		<label for="">CURP:</label>
		<input type="text" class="form-control" name="curp" maxlength="18" placeholder="Escriba su CURP">
		<label for="">Contraseña:</label>
		<input type="password" class="form-control" name="contra1" maxlength="50" placeholder="Escriba su contraseña">
		<label for="">Confirmar Contraseña:</label>
		<input type="password" class="form-control" name="contra2" maxlength="50" placeholder="Confirme su contraseña">
	</div>
	<hr>
	<div class="form-group">
	<h4>Datos personales</h4>		
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
		<h4>Sexo</h4>
		<div class="radio">
  			<label>
    			<input type="radio" name="radios" id="optionsRadios1" value="M" checked> Hombre</label>
		</div>
		<div class="radio">
		 	<label>
		    	<input type="radio" name="radios" id="optionsRadios2" value="F">Mujer</label>
		</div>

	</div>
<div class="form-group">
		<h4>Domicilio</h4>
		<label for"">Calle:</label>
		<input type="text" class="form-control" id="calle" name="calle" value="">
		<label for"">Numero:</label>
		<input type="text" class="form-control" id="numero" name="numero" value="">
		<label for="">Colonia:</label>
		<input type="text" class="form-control" id="colonia" name="colonia" value="">
		<label for="">Codigo Postal:</label>
		<input type="text" class="form-control" id="cp" name="cp" value="" maxlength="5">
	</div>

	<div class="text-center">
		<input type="submit" class="btn btn-primary" value="Registrar">
		
	</div>
	<br>
</form>
     </div>
    </div>
</div>

	</body>
</html>	
