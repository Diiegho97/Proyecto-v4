<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link type="text/css" href="estilo.css" rel="stylesheet">
</head>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<body id="LoginForm">
<center>
<img class="lo" src="IMAGENES/logo proyecto.png" height="150" width="300">	
<div class="container">
<div class="login-form">
<div class="main-div">
	
    <?php
    
$contra1=$_POST["contra1"];
$concontra1=$_POST["concontra1"];

$enc=md5($contra1);
	
$cadena="host=localhost port=5432 dbname=PROYECTO user=postgres password=12345";
$conn=pg_connect($cadena);

$sql="update usuarios set contrasena='$enc'";
pg_query($conn,$sql);

echo "<h1>";	
echo "La contraseña fue cambiada exitosamente";	

echo "<br>";
echo "<br>";	
echo "<a href='login.php'><h4>INICIAR SESION</h4></a>";
echo "</h1>";	

    ?>

</div>
</div>
</div>
</center>	
    </body>
    </html>