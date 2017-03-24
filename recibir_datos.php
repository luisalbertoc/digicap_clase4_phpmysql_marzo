<?php
/*
echo "script de recepción<br>";
echo $_POST["nombre"];
echo "<br>";
echo $_POST["mensaje"];
echo "<br>";
echo $_POST["sexo"];
*/

//Conectarnos al motor mysql
$conn = mysql_connect("localhost","root","campanita");
//Seleccionar la base de datos
$db = mysql_select_db("proyecto",$conn);
//Realizar consulta SQL de inserción de datos
$query = mysql_query("INSERT INTO contactoss (nombre,mensaje,sexo)
values ( '".$_POST["nombre"]."','".$_POST["mensaje"]."','".$_POST["sexo"]."' ) ") or die(mysql_error());
//Validar si la consulta es valida
//print_r($query);
//echo mysql_errno($enlace) . ": " . mysql_error($enlace) . "\n";
//Cerrar conexion
?>
