<?php
/*
PHP es un lenguaje de tipado dinámico, lo que significa que las variables pueden cambiar de 
tipo durante la ejecución. Entender cómo PHP maneja estas conversiones es crucial para evitar 
bugs sutiles.
*/
//Type Juggling (conversión automática)
//PHP convierte tipos automáticamente según el contexto. 
// Esto se llama type juggling o type coercion.
$resultado = '5' + 3; // 8(int)
$resultado = '5.5' + 3; // 8.5(float)
$resultado = '5 euros' + 3; //8(int, ignora el texto)

//En contexto de string, los números se convierten a string
$texto = 'Tengo' . 5 . "años"; 

//En contexto de booleano
if ("texto"){} //true (string no vacio)
if(0){} //false(cero)
if("0"){} //false (string "0" es especial)
if([]){} //false (array vacio)

/*
Cuidado con las comparaciones
El type juggling causa resultados inesperados en comparaciones débiles: 
0 == "texto" es true, "10" == "1e1" es true. Por eso siempre debes usar ===.
*/ 

//TYPE CASTING (Conversión Explícita)
//puedes forzar la conversion de tipos usando la sintaxis de casting
$valor = '42';

//Casting a diferentes tipos
$entero =(int) $valor; //42
$entero = (integer) $valor; //42 (alias)

$decimal = (float) $valor; //42.0
$decimal = (double) $valor; //42.0

$texto = (string) 42; // "42"

$bool = (bool) $valor; //true
$bool = (boolean) $valor; //true(alias)

$array = (array) $valor; //["42"]

$objeto = (object) ["a" => 1]; //stdClass con propiedad $a =1

//Conversión a entero

//Desde float (trunca, no redondea)
echo (int) 4.9; //4
echo(int) -4.9; //-4

// Desde string
echo (int) "42"; //42
echo(int) "42.9"; //42
echo(int)"42 años";// 42(lee hasta encontrar no-número);
echo(int)"años 42";//0 (empieza con texto)

//Desde boolean
echo (int) true; //1
echo(int)false; //0

//Desde null
echo (int) null; //0


//Conversión a Boolean
//Valores que se convierten a FALSE

var_dump((bool)0); //false
var_dump((bool)0.0); //false
var_dump((bool)""); //false
var_dump((bool)"0");//false
var_dump((bool)[]);//false
var_dump((bool)null);//false

//Todo lo demas TRUE
var_dump((bool)1);
var_dump((bool)-1);
var_dump((bool)"texto");
var_dump((bool)"false");
var_dump((bool)[]);

//Funciones de conversión
$valor = '42.5';

//Funciones de Conversión 
//Además del casting, PHP ofrece funciones para convertir tipos:
$valor = '42.5';

//Funciones de conversión
$entero = intval($valor);//42
$decimal = floatval($valor);//42.5
$texto= strval(42);//"42"
$bool = boolval($valor);//true

//intval() acepta una base
$hex = intval("FF", 16); //255
$binario = intval("1010", 2); //10

//settype()modifica la variable original
$numero = '100';
settype($numero, "integer");
var_dump($numero); //int(100)

//S T R I C T   T Y P E S
//Puedes desactivar el type juggling en funciones usando declare(strict_types=1):

//declare(strict_types=1)

function sumar(int $a, int $b): int
{
    return $a + $b;
}

echo sumar(5, 5); // 8 

//Sin strict_types, esto funcionaría (convertida "5" a 5)
//con strict_types, lanza TypeError

echo sumar("5", 3); //TypeError!

//Recomendación profesional
//Usa declare(strict_types=1) en todos tus archivos PHP. 
//Te obligará a ser explícito con los tipos y detectarás errores antes de que lleguen a producción.
 
// Los datos de formularios siempre son strings
$edad = $_POST['edad'] ?? '';  // "25" o ""
 
// Convertir a entero de forma segura
$edadInt = (int) $edad;
 
// O validar primero
if (is_numeric($edad)) {
    $edadInt = (int) $edad;
} else {
    $edadInt = 0; // o lanzar error
}
 
// Para IDs y cantidades, asegurar que sea positivo
$id = max(0, (int) $_GET['id']);

/*
$_GET['id'] → obtiene el valor de id desde la URL (por ejemplo: pagina.php?id=42).

(int) $_GET['id'] → convierte ese valor a número entero. Si alguien pone texto como abc, se convierte en 0.

max(0, (int) $_GET['id']) → se asegura de que el resultado nunca sea negativo. Si el número es menor que 0, se reemplaza por 0.

este patrón garantiza que $id siempre sea un número entero mayor o igual a cero, lo cual es útil cuando los identificadores en la base de datos deben ser positivos.
*/

