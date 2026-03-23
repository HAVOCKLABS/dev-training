<?php

// w h i l e
$contador = 1;

while ($contador <= 10) {
    echo "iteración : $contador\n";
    $contador++;
}

// leer hasta encontrar un valor

$numeros = [4, 7, 2, 5, 9, 1];
$indice = 0;

while ($indice < count($numeros) && $numeros[$indice] !== 9){
    echo $numeros[$indice] . " ";
    $indice++;
}
echo "\n";

// d o   w h i l e
/*
Bucle do-while
Similar a while, pero la condición se evalúa después de cada iteración.
Esto garantiza que el código se ejecute al menos una vez.
*/
$cont = 0;
//haz esto mientras que esto otro 


$hasta = [
    "quemarnos",
    "amarnos",
    "cuidarnos",
    "respetarnos",
    "ayudarnos",
    "protegernos",
    "entendernos",
    "perdonarnos",
    "mirarnos",
    "encontrarnos",
    "saludarnos",
    "olvidarnos",
    "recordarnos",
    "criticarnos",
    "abrazarnos",
    "besarnos",
    "lastimarnos",
    "defendernos",
    "prepararnos",
    "organizarnos",
    "comunicarnos",
    "motivarnos",
    "superarnos",
    "detenernos",
    "levantarnos",
    "acercarnos",
    "alejarnos",
    "adaptarnos",
    "expresarnos",
    "valorarnos"
];


do{
    echo "bailar, ";
    $estado =$hasta[rand(0, count($hasta) -1)];
    //die();
} while ($estado !== "quemarnos");
echo "hasta " . $estado;


// F o r

// Sintaxis: for (inicialización; condición; incremento)
for ($i = 0; $i < 5; $i++) {
    echo "Iteración : $i\n";
}

// Contar hacia atrás
for ($i = 10; $i >=0; $i--){
    echo $i . " ";
}
echo "\n";

//incrementos diferentes
//for ($i = 0; $i <= 20; $i +=5)

//multiples variables
for ($i = 0, $j = 10; $i < $j; $i++, $j--) {
    echo "i = $i, j=$j\n";
}

//Bucle for each
/*
Diseñado específicamente para recorrer arrays y objetos iterables.
Es el bucle más usado en PHP moderno.
*/
$frutas = ['manzana', 'pera', 'naranja'];
//solo valores
foreach ($frutas as $fruta) {
    echo $fruta . "\n";
} 

//Con indice/clave        foreach ($listaDeFrutas as $indice => $nombreFruta)
foreach ($frutas as $indice => $fruta) {
    echo "$indice: $fruta\n";
}

//Arrays asociativos
$persona = [
    'nombre' => 'Ana',
    'edad' => '28',
    'ciudad' => 'Madrid'
];
foreach ($persona as $clave => $valor) {
    echo "$clave: $valor \n";
}
//Arrays multidimensionales
$usuarios = [
    ['nombre' => 'Ana', 'rol' => 'admin'],
    ['nombre' => 'Luis', 'rol' => 'editor'],
    ['nombre' => 'María', 'rol' => 'usuario'],

];
foreach($usuarios as $usuario){
    echo "{$usuario['nombre']} es {$usuario['rol']}\n";
};

//Modificar valores con for reach
/*
Por defecto, foreach trabaja con copias de los valores. 
Para modificar el array original, usa referencias con &:
*/
$numeros = [1, 2, 3, 4, 5];

//Esto no modifica el Array original
foreach($numeros as $numero) {
    $numero *= 2; //Solo modifica la copia
}
print_r($numeros);
//Con referencia & Si modificas el original
foreach($numeros as &$numero) {
    $numero *= 2;
}
unset($numero);// !IMPORTANTE¡ Eliminar la referencia después.
print_r($numeros);
