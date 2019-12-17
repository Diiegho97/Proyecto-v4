<?php

require 'conexion.php';

session_start();

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$enc=md5($clave);

$sql="SELECT *FROM usuarios WHERE documento=$usuario AND contrasena='$enc'";
$consulta=pg_query($conn,$sql);

$fila=pg_fetch_row($consulta);
$usu=$fila[1];
$con=$fila[9];

if($usuario==$usu and $enc==$con){

    $_SESSION['username']=$usuario;
header("location: ../paginaprincipal.php");

}else{

    echo "datos incorrectos";
}



?>