<?php

$cadena="host=localhost port=5432 dbname=PROYECTO user=postgres password=12345";
$conn=pg_connect($cadena);

if($conn){

    echo "conexion exitosa";
}else{
    echo "no se pudo conectar";
}

?>