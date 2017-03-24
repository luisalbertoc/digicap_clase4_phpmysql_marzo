<?php

$url_base = "http://localhost/clase_2/";

function conexion()
{
    //Conectactarnos a la base de datos
    $mysqli = new mysqli("localhost","root","campanita","proyecto");
    //Comprobar la conexion
    if($mysqli === false){
      die("Error de conexión".mysqli_connect_error());
    }
    return $mysqli;
}

?>
