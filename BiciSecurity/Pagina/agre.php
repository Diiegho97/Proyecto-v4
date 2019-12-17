<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Registrar Bici</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" href="estilo.css" rel="stylesheet">

</head>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<body id="LoginForm">
<div class="container">
<div class="login-form">
<div class="main-div">

<img class="loo" src="IMAGENES/logo proyecto.png" height="120" width="240">	

<?php	
    
include 'prueba/conexion.php';

$serial=$_POST["serial"];
$docu=$_POST["docuper"];
$marc=$_POST["marca"];
$model=$_POST["modelo"];	
$color=$_POST["color"];	
$foto=$_POST["foto"];	

$conn=pg_connect($cadena);	
	
$sql="insert into articulos values('$serial',$docu,'$marc','$model','$color','$foto')";

echo "<h1>";	
echo "La bici se registro con exito";
echo "</h1>";
echo "<a href='paginaprincipal.php'><h4>REGRESAR</h4></a>";	
pg_query($conn,$sql);

?>

</div>
</div>
</div>
</body>
</html>