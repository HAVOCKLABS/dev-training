<?php
/*
Ejercicio 1: Tabla de multiplicar con for
Usa un bucle for para imprimir la tabla de multiplicar del 5 (del 1 al 10).
*/

for($i = 1; $i <= 10; $i++){
    echo 5 * $i . "\n";
}

/*
Ejercicio 2: Sumar elementos con foreach
    Usa un bucle for para imprimir la tabla de multiplicar del 5 (del 1 al 10).
*/
$precios = [19.00, 5.50, 12.00, 8.75];
$total = 0;
foreach($precios as $precio){
    $total = $precio + $total;
}
unset($precio);
echo "$total \n" ;

/*
Ejercicio 3: Contar hasta condicion con while
Usa un bucle while para imprimir numeros del 1 en adelante hasta que la suma acumulada 
supere 20. Muestra cada numero y la suma acumulada.
*/
$numero = 1;
while($numero <= 20) {
    echo $numero . " ";
    $numero++;
}