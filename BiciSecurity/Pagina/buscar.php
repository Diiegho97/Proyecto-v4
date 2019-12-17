<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link type="text/css" href="estilo.css" rel="stylesheet">

</head>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<body id="LoginForm">

<div class="container1">
<div class="login-form">
<div class="main-div">
    
<?php

include 'prueba/conexion.php';

$busc=$_POST['ser'];

$sql = "SELECT usuarios.documento, usuarios.primer_nombre, usuarios.primer_apellido, articulos.serial_bicicleta, 
articulos.marca_bicicleta, articulos.foto_articulo FROM usuarios INNER JOIN articulos ON articulos.serial_bicicleta='$busc'";


if($resul=pg_query($conn,$sql)){
	echo "<br>";
	echo "<h3>";
	echo "El articulo encontrado es";
	echo "</h3>";
}
else{
	echo "error";
}
echo "<hr>";
    echo "<center>";
	echo "<table border=2 bgcolor=violet>";
	echo "<tr>";
	echo "<td>DOCUMENTO</td>";
	echo "<td>NOMBRE</td>";
	echo "<td>APELLIDO</td>";
	echo "<td>SERIAL</td>";
    echo "<td>MARCA</td>";
    echo "<td>FOTO</td>";
	
while($fila=pg_fetch_row($resul))
{
	echo "<tr>";	
	echo "<td>";
	echo $fila[0]."</td>"."<td>".$fila[1]."</td>"."<td>".$fila[2]."</td>"."<td>".$fila[3]."</td>";
	echo "<td>".$fila[4]."</td>"."<td>".$fila[5]."</td>";
	echo "<tr>";
}	
	echo "</table>";
	echo "</center>";

    echo "<br>";
	echo "<a href='login.php'>REGRESAR</a>"

?>

</div>
</div>
</div>

</body>
</html>