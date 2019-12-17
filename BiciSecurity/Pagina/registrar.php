<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<link rel="stylesheet" href="estilo.css" type="text/css">
</head>

<body>
<center>
<img class="lo" src="IMAGENES/logo proyecto.png">		
<div class="conteiner">
	
	<?php

	require 'prueba/conexion.php';

	$tipo=$_POST["tipo"];	
	$doc=$_POST["doc"];		
    $nom1=$_POST["nom1"];	
    $ape1=$_POST["ape1"];	
    $fecha=$_POST["fecha"];
    $telef=$_POST["cel"];
    $local=$_POST["local"];	
    $bar=$_POST["bar"];
    $correo=$_POST["correo"];	
    $contra=$_POST["contra"];	
	
$ence=md5($contra);		
	
$sql="insert into usuarios values('$tipo',$doc,'$nom1','$ape1','$fecha','$telef',
'$local','$bar','$correo','$ence')";
pg_query($conn,$sql);

echo "<h1>";	
echo "los datos fueron registrados";	

echo "<br>";
echo "<br>";	
echo "<a href='login.php'><h4>REGRESAR</h4></a>";
echo "</h1>";	

	?>

</div>
</center>	
</body>
</html>
