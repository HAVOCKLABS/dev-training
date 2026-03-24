<?php
/*
Ejercicio 1: Crear y recorrer un array
Crea un array con los nombres de 4 colores. 
Luego recorre el array con foreach e imprime cada color en una linea.
*/

$colores = ['blanco', 'negro', 'rojo', 'azul'];

foreach ($colores as $color){
    echo "$color \n";
}

/*
Ejercicio 2: Sumar elementos de un array
Dado el array $numeros = [10, 25, 8, 42, 15], 
calcula la suma total usando un bucle foreach (sin usar array_sum).
*/ 

$numeros = [10, 25, 8, 42, 15];
$suma = 0;

foreach ($numeros as $numero){
    $suma += $numero;
}
echo "$suma \n";

/*
Ejercicio 3: Buscar un elemento
Dado el array $frutas = ['manzana', 'pera', 'naranja', 'uva'],busca si existe
'naranja' usando in_array() e imprime un mensaje indicando si se encontro o no.
*/

$frutas = ['manzana', 'pera', 'naranja', 'uva'];

if (in_array('naranja', $frutas)) {
    echo "si se enconro";
}

/*
Puntos clave
Los arrays indexados usan índices numéricos que empiezan en 0
Usa $array[] para añadir elementos al final
array_push() y array_pop() para el final
array_unshift() y array_shift() para el inicio
unset() elimina pero no reordena los índices
Usa === al comparar conarray_search()
*/