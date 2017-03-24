<?php

$usuario1 = Array("luis","aguilera","M");
$usuario2 = Array("fran","perez","F");
$usuario3 = Array("gaspar","rios","M");

$usuarios_arreglo = Array($usuario1,$usuario2,$usuario3);

for($i = 0; $i < sizeof($usuarios_arreglo); $i++)
{
  $fila = $usuarios_arreglo[$i];
  echo $fila[0]." ".$fila[1];
  echo "<br>";
}

$arreglo = Array("1",2,4,"hola arreglo",5,7,2,4);
//echo $arreglo[2];
//print_r($arreglo);
//echo $arreglo;

for($i = 0; $i < sizeof($arreglo);$i++)
{
  echo $arreglo[$i]."<br>";
}
?>
