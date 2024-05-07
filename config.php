<?php

$servidor="localhost";
$db="restaurantedb";
$usuario="root";
$clave="";

$conectar= mysqli_connect($servidor,$usuario,$clave,$db);
if (!$conectar) {
    echo "Error al Conectar";
}else {
    //PARA PROBAR
   // echo "Conexion Exitosa";
   
}
?>