<?php
declare(strict_types=1);

/*
Ejercicio 1: Buscar y salir con break
Dado el array $numeros = [3, 7, 2, 9, 4, 6], busca el numero 9. 
Cuando lo encuentres, imprime su posicion y sal del bucle con break.
*/
$numeros = [3, 7, 2, 9, 4, 6];

$numeroBuscado = 9;

foreach ($numeros as $pos => $numero){
    if ($numero == $numeroBuscado){
        echo "Numero encontrado en la posición {$pos}";
        break;
    }
    echo "Revisando posición $pos: $numero\n";
}

/* 
Dado el array $edades = [15, 22, 17, 30, 12, 25], 
usa continue para imprimir solo las edades de mayores de edad (18 o mas).
*/
echo "\n filtrar con continue \n";
$edades = [15, 22, 17, 30, 12, 25];

foreach ($edades as $edad){
    if ($edad >= 18){
        echo $edad . ", ";
    }
    continue;
}


/*
Ejercicio 3: Procesar hasta limite
Dado el array $items = [5, 10, 15, 20, 25, 30], 
suma los valores pero detente (break) cuando la suma supere 30.
Imprime la suma final.
*/
echo "\n\n ejercicio 3 \n\n";

$items = [5, 10, 15, 20, 25, 30];
$suma = 0;
$limite = 30;

foreach ($items as $item){
    if (($suma + $item) > $limite){
        break;
    }
    $suma = $suma + $item;
}
echo "\ntotal: " . $suma;