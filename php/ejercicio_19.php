<?php
/*
Ejercicios
Ejercicio 1: Recorrer lista de productos
Dado el array de productos, recorrelo e imprime cada productoen formato "Nombre: precio€".
 */

$productos = [
    ['id' => 1, 'nombre' => 'notebook', 'precio' => 100],
    ['id' => 2, 'nombre' => 'backpack', 'precio' => 200],
    ['id' => 3, 'nombre' => 'blackboard', 'precio' => 300]
];

foreach ($productos as $producto) {
    echo "{$producto['nombre']}: {$producto['precio']}€\n" ;
}

/*
Ejercicio 2: Calcular total de precios
Usando el mismo array de productos del ejercicio anterior, calcula la suma total de todos los precios.
*/
$total = 0;
foreach($productos as $producto){
    $total += $producto['precio'];
}
echo $total;

/*
Ejercicio 3: Extraer columna con array_column
Dado el array de usuarios, usa array_column para extraer solo los nombres en un nuevo array e imprimelo.
*/

$usuarios = [
    ['id' => 1, 'nombre' => 'Ana', 'email' => 'ana@ejemplo.com'],
    ['id' => 2, 'nombre' => 'Luis', 'email' => 'luis@ejemplo.com'],
    ['id' => 3, 'nombre' => 'María', 'email' => 'maria@ejemplo.com']
];

$soloNombre[] = array_column($usuarios, 'nombre');
print_r($soloNombre); 
