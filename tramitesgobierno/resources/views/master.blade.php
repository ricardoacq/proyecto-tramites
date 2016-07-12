<!DOCTYPE html>
 <html lan="en">
    <head>
      <meta charset="UTF-8">
	<title>Principal</title>
	<script src="{{asset("js/jquery.js")}}"></script>
	<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/')}}">IngWeb</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{url('/asignarusuarios')}}">Acta</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">usuario <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('/consultarproyectos')}}">Proyectos</a></li>
            <li><a href="{{url('/consultarclientes')}}">Clientes</a></li>
            <li><a href="{{url('/usuarios')}}">Usuarios</a></li>
          </ul>
        </li>
        <li><a href="{{url('/requisitos')}}">Requisitos</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
 <div class="row">
  <div class="col-xs-12 text-center well">
   @yield('encabezado')
   </div>
  </div>
   <hr>
   <div class="row">
  <div class="col-xs-12">
   @yield('contenido')
   </div>
  </div>
</div>
 <script src="{{asset("js/bootstrap.js")}}"></script>
</body>
</html>