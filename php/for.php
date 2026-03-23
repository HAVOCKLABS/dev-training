<?php
 
// Buscar en una matriz bidimensional
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

$buscar = 9;
$posicion = null;
 print_r($matriz);
 
foreach ($matriz as $fila => $columnas) {
    foreach ($columnas as $col => $valor) {
        if ($valor === $buscar) {
            $posicion = [$fila, $col];
            break 2; // Sale de AMBOS bucles
        }
    }
}
 
echo "Encontrado en fila $posicion[0], columna $posicion[1]";
// Encontrado en fila 1, columna 1
 
// Sin "break 2", solo saldría del bucle interno
// y seguiría con las siguientes filas