<?php
/*
Los arrays son una de las estructuras de datos más importantes en PHP. 
Un array indexado es una lista ordenada de valores, donde cada elemento tiene un índice numérico que empieza en 0.
*/

        //Crear arrays
//Hay varias formas de crear un array en PHP:
//Sintaxis corta (desde PHP 5.4)

$fruta = ['manzana', 'pera', 'naranja'];

// Sintaxis clásica con array()
$colores = array('rojo', 'verde', 'azul');

// Sintaxis clásica con array()
$colores = array('rojo', 'verde','azul');

//Array vacio
$lista = [];

//Array con diferentes tipos de datos
$mixto = ['texto', 42, 3.14,true, null];

//Mostrar contenido del array
print_r($mixto);

///Acceder a elementos
//Usa el índice entre corchetes para acceder a un elemento específico:
$frutas = ['manzana', 'pera', 'naranja', 'plátano'];

//Acceder por indice 
echo $frutas[0] . "\n"; //manzana
echo $frutas[2] . "\n"; //naranja

// Último elemento (conociendo la longitud)

$ultimo = $frutas[count($frutas) - 1];
echo $ultimo . "\n"; // plátano

// Verificar si existe un índice
if (isset($frutas[5])) {
    echo $frutas[5];
} else {
    echo 'No existe el índice 5' . "\n";
}


//Modificar elementos

$frutas = ['manzana', 'pera', 'naraja'];

// Modicar un elemento existente 
$fruta[1] = 'uva';

// Asignar a un indice especifico (puede crear huecos)
$frutas[5] = 'kiwi';
print_r($frutas);



//Añadir elementos
$frutas = ['manzana', 'pera'];

//Añadir al final con []
$frutas[] = 'naranja';
$frutas[] = 'plátano';

print_r($frutas); //['manzana', 'pera', 'plátano'];

//Añadir al final con array_push()

array_push($frutas, 'uva', 'kiwi');


//Añadir al inicio con array_unshift()

array_unshift($frutas, 'fresa');


/*
$array[] vs array_push()
Para añadir un solo elemento, $array[] = $valor es más rápido que array_push(). 
Usa array_push() cuando necesites añadir múltiples elementos a la vez.
*/

//Eliminar Elementos

$frutas = ['manzana', 'pera', 'naranja', 'plátano', 'uva'];

//Eliminar del final y obtener el valor
$ultimo = array_pop($frutas);
echo $ultimo;
print_r($frutas);

//Eliminar del inicio y obtener el valor
$primero = array_shift($frutas);
echo $primero;
print_r($frutas);

//Eliminar por indice con unset (No reoderna indices)
$numeros = [10, 20, 30, 40, 50];
unset($numeros[2]);
print_r($numeros);

//Reindexar después de unset
$numeros = array_values($numeros);
print_r($numeros);


//Recorrer arrays

$frutas = ['manzana', 'pera', 'naranja'];

//foreach (la forma mas común y recomendada)
foreach ($frutas as $fruta){
    echo " - $fruta \n";
}
//foreach con indice
foreach ($frutas as $indice => $fruta){
    echo "$indice: $fruta\n";
}

//for optimizado
$total =count($frutas);
for ($i = 0; $i < $total; $i++) {
    echo $frutas[$i] . "\n";
}

//Longitud y verificaciones

$frutas = ['manzana', 'pera', 'naranja'];
$vacio = [];
//Contar elementos
echo count($frutas); 
echo sizeof($frutas); //alias de count

//Verificar si es array
var_dump(is_array($frutas));
var_dump(is_array('texto'));

//Verificar si esta vacio
if (empty($vacio)) {
    echo 'El array está vacio';
}

//Forma alternativa 

if (count($vacio)== 0){
    echo "el array esta vacio";
}

//Verificar si un valor existe en el array
if (in_array('pera', $frutas)); {
    echo 'Encontrado';
}

//in_array con conmparacion estricta
$numeros = [1, 2, 3];
var_dump(in_array('1', $numeros));
var_dump(in_array('1', $numeros, true));

//Buscar arrays

$frutas = ['manzana', 'pera', 'naranja', 'pera'];

//Buscar unduce de un valor
$indice = array_search('naranja', $frutas);
echo $indice;

// array_search devuelve false si no encuentra
$resultado = array_search('kiwi', $frutas);
if ($resultado == false){
    echo 'No encontrado';
}
// ¡Cuidado! Usar === para comparar con false
$indice = array_search('manzana', $frutas);
if ($indice == false){
    // ¡ERROR! 0 == false es true
}
if ($indice === false){
    // CORRECTO: 0 === false es false
}

//Encontrar todas las ocurrencias
$indices = array_keys($frutas);
print_r($indices); // [1, 3]

/*
Siempre usa === con array_search
array_search() devuelve false si no encuentra el valor,
pero puede devolver 0 si lo encuentra en el primer índice. 
Como 0 == false es true, debes usar ===.
*/