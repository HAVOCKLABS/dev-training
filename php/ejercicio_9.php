

<?php
/*Ejercicio 3: Procesar lista CSV
Dado el string $csv = "manzana,pera,naranja,platano", 
conviertelo en un array y luego vuelve a unirlo usando " - " como separador.*/

$csv = "mazana,pera,naranja,platano";
$frutas = explode(",", $csv);
print_r($frutas);
$unir = join(" - ", $frutas);
echo "\n";
echo $unir;