<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Registrate ahora para realizar tus tramites en lìnea</title>
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
    <script src="{{asset("js/jquery.js")}}"></script>
    <h1 align="center">Registrate ahora para realizar tus tramites en lìnea</h1>
    <br>
        <br> 
<body>
    
        <div align="center"><img src="{{asset('img/gobierno.jpg')}}" width="300" height="220" ></div>
        <br>
        <br>
        <br>




                    
<form  align ="center" action="{{url('/principal')}}" method="POST" class="col-xs-4 col-md-offset-4">
    <input type="hidden" name="_token" value="{{csrf_token()}}">

<div class="form-group">
<label for="usuario">Usuario </label>
<input value="" type="text" class="form-control" name="usuario"> 
</div>

<div class="form-group">
<label for="contraseña">Contraseña</label>
<input value="" type="password" class="form-control" name="contraseña"> 
</div>

<input type="submit" class="btn btn-primary">
<br>
<br>
<a href="" >No tienes cuenta? Crea Una </a>

</form>

            </div>
             </div>
              </div>

</body>
</html>
