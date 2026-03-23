<?php
/*
    break termina inmediatamente la ejecución del bucle actual.
    El programa continúa con el código que viene después del bucle.
*/

// Buscar un elemento y salir al encontrarlo
$numeros = [4, 8, 15, 16, 23, 42];
$buscar = 8;
$encontrado = false;

foreach ($numeros as $indice => $numero){
    if ($numero == $buscar) {
        $encontrado = true;
        echo "Encontrado en la pocisión: $indice\n";
        break; //sale del bucle inmediatamente
    }
     // Sin break, seguiría iterando innecesariamente
}

/*
continue salta el resto del código en la iteración actual y pasa 
directamente a la siguiente iteración del bucle.
*/

//Imprimir solo números pares
for ($i = 1; $i <= 10; $i++) {
    if($i % 2 !== 0){
        continue; // Salta los impares
    }
    echo "$i ";
}
echo "\n";

// Procesar solo elementos válidos
$datos = ['Ana', '', 'Luis', null, 'María', ''];

foreach ($datos as $nombre) {
    if (empty($nombre)){
        continue; //Salta valores Vacios
    }
    echo "Procesando: $nombre\n";
}

//Util para filtrar sin crear nuevos arrays
$productos = [
    ['nombre' => 'Laptop', 'stock' => 5],
    ['nombre' => 'Mouse', 'stock' => 0],
    ['nombre' => 'Teclado', 'stock' => 12],
    ['nombre' => 'Monitor', 'stock' => 0],
];

echo "Productos Disponibles: \n";

foreach($productos as $producto) {
    if ($producto['stock'] == 0){
        continue;
    }
    echo "{$producto['nombre']} {$producto['stock']} unidades \n";
}

/*
Cuando tienes bucles dentro de bucles, 
puedes especificar cuántos niveles quieres saltar con break N o continue N.
*/

//Buscar una matriz bidimensional
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

$buscar = 5;
$posicion = null;