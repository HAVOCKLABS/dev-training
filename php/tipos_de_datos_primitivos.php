<?php
//Un string es una secuencia de caracteres. Se pueden definir con comillas simples o dobles.

//comillas simples: texto literal, no se interpretan variables ni caracteres especiales.
$nombre = 'Osiris';

//comillas dobles: permiten interpretar variables y caracteres especiales.
$saludo = "Hola, $nombre!"; // Interpreta la variable $nombre
echo $saludo . "\n"; // Imprime "Hola, Osiris!"

//verificar tipo de dato
echo gettype($nombre); // Imprime "string"
var_dump($nombre); // Imprime string(6) "Osiris"

//INTEGER
$edad = 37;
$temperatura = -5;
$cero = 0;

//notaciones alternativas
$hexadecimal = 0xFF; // 255 en decimal
$octal = 0755; // 493 en decimal
$binario = 0b11111111; // 255 en decimal

//separadores de miles desde PHP 7.4
$millon = 1_000_000; // Más legible que 1000000

echo $millon . "\n"; // Imprime 1000000
var_dump($edad); // Imprime int(37)

//FLOAT
$precio = 19.99;
$pi = 3.14159;
$negation = -0.5;

//notación científica
$avogadro = 6.022e23; // 6.022 x 10^23
$pequeño = 1.5e-10; // 1.5 x 10^-10

var_dump($precio); // Imprime float(19.99)

//BOOLEAN
$activo = true;
$eliminado = false;

//resultados de comparaciones
$esMayor = $edad > 18; // true
$esIgual = $nombre == "Osiris"; // true
$esIdentico = 5 === "5"; // false, diferente tipo

var_dump($activo); // Imprime bool(true)
var_dump($esIdentico); // Imprime bool(false)

//ARRAYS
//array idexado
$frutas = ["manzana", "pera", "naranja"];

//array asociativo
$persona = [
    "nombre" => "Osiris",
    "edad" => 37,
    "ciudad" => "Mazatlán"
];

echo $frutas[0] . "\n";
echo $persona["nombre"] . "\n";

//NULL
//Representa la ausencia de valor. Una variable es null si no se le ha asignado valor o se le asignó explícitamente null

$sinValor = null;

//verificar si es null
if (is_null($sinValor)){
    echo "es null\n";   
}

var_dump($sinValor);