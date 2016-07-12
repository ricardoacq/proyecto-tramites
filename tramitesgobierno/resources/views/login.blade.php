<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>Registrate ahora para realizar tus tramites en lìnea</title>
        <link rel="stylesheet" href="bootstrap.css">
        <script src="{{asset("js/jquery-2.0.0.js")}}"></script>
        <h1 align="center">Registrate ahora para realizar tus tramites en lìnea</h1>
         <br>
        <br> 
<body>
    
        <div align="center"><img src="gobierno.jpg" width="300" height="220" ></div>
        <br>
        <br>
        <br>




                    
<form  align ="center" action="" method="POST" class="col-xs-4 col-md-offset-4">
    <input type="hidden" name="">

<div class="form-group">
<label for="nombre">Usuario </label>
<input value="" type="text" class="form-control" name="usuario"> 
</div>

<div class="form-group">
<label for="edad">Contraseña</label>
<input value="" type="password" class="form-control" name="contraseña"> 
</div>

<input type="submit" class="btn btn-primary">
<br>
<br>
<a href="{{url('usuarios')}}" >No tienes cuenta? Crea Una </a>

</form>

            </div>
             </div>
              </div>

</body>
</html>
