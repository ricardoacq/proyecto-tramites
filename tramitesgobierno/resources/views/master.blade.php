

<!DOCTYPE html>
 <html lan="en">
    <head>
      <meta charset="UTF-8">
      <title>Principal</title>
       <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
      <script src="{{asset("js/jquery.js")}}"> </script>     

  </head>

  <body>
    
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" align='center'>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Inicio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="{{url('/asignarUsuarios')}}">Acta de Nacimiento</a></li>
        <li ><a href="{{url('/asignarUsuarios')}}">Renovar Licencia </a></li>
        <li><a href="{{url('/asignarUsuarios')}}">Becas </a></li>
        <li><a href="{{url('/asignarUsuarios')}}">Visa</a></li>
        <li class="dropdown">
          
        </li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Editar</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Cerrar sesion</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 
 <div class="row">
  <div class="cik-xs-12 text-center">
    <hr>
    <font color="red"> Gobierno del estado </font>
  </div>
 </div>
 <script src="{{asset("js/bootstrap.js")}}"></script>


  </body>

  </html> 