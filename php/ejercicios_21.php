<?php
/*
Ejercicios
Ejercicio 1: Funcion de saludo personalizado
Crea una funcion llamada saludarPersona que reciba un nombre (string) y una hora del dia (int, 0-23).
Debe retornar un saludo apropiado: "Buenos dias, [nombre]" (6-11), "Buenas tardes, [nombre]" (12-19),
 o "Buenas noches, [nombre]" (20-5).
*/
declare(strict_types=1);

$nombre  = 'Juan Sandoval';
$hora  = rand(1, 23);

function saludarPersona(string $nombre, int $hora): string
{

if ($hora >= 6 && $hora <= 11){
    return "Buenos dias, {$nombre}\n";

}elseif ($hora >= 12 && $hora <= 19){
    return "Buenas tardes, {$nombre}\n";
    }

    return "Buenas noches, {$nombre}\n";

}

echo saludarPersona($nombre, $hora);


/*
Ejercicio 2: Calculadora de area
Crea una funcion calcularAreaRectangulo que reciba el ancho y alto (ambos float) 
y retorne el area. Incluye un valor por defecto de 1.0 para el alto.
*/

function calcularAreaRectangulo(float $ancho, float $alto = 1.0) : float
{
    $area = ($ancho * $alto)/2;
    return $area;
}
$base  = rand(1, 10);
$alto = rand(2, 10);

echo "base: {$base}, alto: {$alto}, area : ";
echo calcularAreaRectangulo($base, $alto) . "\n";

/*
Ejercicio 3: Validador de password
Crea una funcion esPasswordValido que reciba una password (string) y retorne true si tiene 
al menos 8 caracteres, o false en caso contrario.
 */

function esPasswordValido(string $password) : bool
{
 $valido = strlen($password);   
 if ($valido >= 8){
    return true;
 }
 return false;
}

var_dump(esPasswordValido("alfanumerico"));
?>