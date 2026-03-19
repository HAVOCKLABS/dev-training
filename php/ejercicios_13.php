<?php
/*
Ejercicio 1: Convertir entrada de usuario
Simula una entrada de formulario: $edadInput = "25". 
Convierte este string a entero y verifica que la conversion fue exitosa mostrando el tipo con gettype().
*/


$edadInput = "25";
settype($edadInput, "integer");
var_dump($edadInput);
echo " \n";


/**
Ejercicio 2: Conversion a boolean
Crea variables con los valores "0", 0, "" y "false". 
Convierte cada una a boolean usando (bool) y muestra el resultado con var_dump().
 */

$ceroString = "0";
$ceroInt = 0;
$strVacia = "";
$strFalse = "false";

echo "\"0\" en boolean : ";
var_dump((bool) $ceroString);
echo "0  en boolean : ";
var_dump((bool) $ceroInt);
echo "\" \"  en boolean : ";
var_dump((bool) $strVacia);
echo "\"false\" en boolean : ";
var_dump((bool) $strFalse);
echo "\n";

/**
Ejercicio 3: Calcular precio total
Tienes $precio = "19.99" y $cantidad = "3" como strings 
(simulando datos de un formulario). Convierte ambos al tipo apropiado 
y calcula el total.
 */
$precio = "19.99";
$cantidad = "3";

settype($precio, "float");
settype($cantidad, "integer");

$total = ($precio*$cantidad);
echo "total : ", $total;


