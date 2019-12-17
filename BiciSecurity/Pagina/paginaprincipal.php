<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" href="estilo.css" rel="stylesheet">

</head>

<body>
    
<nav class="navbar navbar-dark bg-dark">

<a style="color: white" class="navbar-toggler">
<span class="navbar-toggler-icon"></span></a>

<div class="btn-group dropleft">
  <button type="button" class="btn btn-danger dropdown-toggle"
  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    OPCIONES
  </button>

  <div class="dropdown-menu">
    <a><center><img src="https://www.stickpng.com/assets/images/585e4bcdcb11b227491c3396.png"
    height="80" width="80"></center></a>
    <a class="dropdown-item" href="agregararti.php">Registrar articulos</a>
    <a class="dropdown-item" href="#">GENERAR PDF DE PROPIEDAD</a>
    <a class="dropdown-item" href="#">GENERAR PDF DE TRASPASO</a>
    <a class="dropdown-item" href="#">LISTADO DE MIS ARTICULOS</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="prueba/salir.php">Cerrar Sesion</a>
  </div>
</div>

</nav>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div> 
<center>
    <br><br><br><br>
<img src="IMAGENES/21-bicicleta.jpg">
</center>
</div>
</body>
</html>

<?php

session_start();
$usuario=$_SESSION['username'];

if(!isset($usuario)){

header("location: login.php");

}else{

}

?>