<?php

// list() permite asignar valores a valiables desde un array

$numeros = [10,20,30,40,50];

list($primero,,,,$ultimo) = $numeros;
echo $primero . " " . $ultimo;

// Sintaxis corta a partir de PHP 7.1

[$primero,,,,$ultimo] = $numeros;
echo "\n{$primero} {$ultimo}";

// Se puede utilizar en funciones que que returnan arrays

// Operador de extensión o Spread ...
$masNumeros = [60, 70, 80, 90, 100];
echo "\n";

$spreads = [...$numeros, ...$masNumeros];
print_r ($spreads);
echo "\n";

// Puedo añadir elemenos de la siguiente manera

$conExtremos = [0, ...$spreads, 110];
echo "\t\$conExtremos: \n";
print_r($conExtremos);
echo "\n";

// Puedo copiar un array 

$copiaSpreads = [...$spreads];
echo "\t\$copiaSpreads: \n";
print_r($copiaSpreads);
echo "\n";

//dentro de funciones
function sumar(int $a, int $b, int $c){
    return $a + $b + $c;
}
$numeritos = [1, 2, 3];
$resultado = sumar(... $numeritos);
echo "\ten funciones:\n";
echo "Resultado = $resultado";
echo "\n";

//  max(), min()
echo " \n\tcon max() o min() :\n";
echo max(...$numeritos). "\n";
echo min(...$numeritos). "\n";

// a las funciones que aceptan culaquier cantidad de argumentos


function sumarTodos(int ...$numerosSuma): int{
    return array_sum($numerosSuma);
}

echo sumarTodos(1,2,3,4);
