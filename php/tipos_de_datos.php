<?php
/*CONSTANTES
Las constantes almacenan valores que no cambian durante la ejecución. Son ideales para configuración,
valores fijos y "números mágicos".*/
//Definir constantes con const

const PI = 3.14159;
const APP_NAME = "Mi Aplicación";
const MAX_USERS = 100;
const DEBUG = true;
// Usar las constantes
echo APP_NAME . "\n";
echo "El valor de PI es: " . PI . "\n";
//Esto causa error
//PI = 3.14; // No se puede modificar una constante

/*DEFINIR CONSTANTES CON define()
La función define() es la forma tradicional de crear constantes. Permite definir constantes de forma condicional.*/

define('VERSION', '1.0.0');
define('AUTHOR', "Osiris");
define("BASE_URL", 'https://www.ejemplo.com');

//Definicion condicional
if(!defined('DEBUG')){
    define('DEBUG', false);
}
echo "La versión de la aplicación es: " . VERSION . "\n";
//CONSTANTES PREDEFINIDAS

// Constantes mágicas (cambian según el contexto)
echo "Ruta completa del archivo actual: " . __FILE__ . "\n";    
echo "Directorio del archivo actual: " . __DIR__ . "\n" ;   
echo "Número de línea actual: " . __LINE__ . "\n";   
echo "Nombre de la función actual: " . __FUNCTION__ . "\n"; 
echo "Nombre de la clase actual: " . __CLASS__ . "\n";   
echo "Nombre del método actual: " . __METHOD__ . "\n";  
 
// Constantes de PHP
echo "Versión de PHP: " . PHP_VERSION . "\n";  
echo "Salto de línea del sistema: " . PHP_EOL . "\n";    
echo "Entero máximo soportado: " . PHP_INT_MAX . "\n"; 


/*VARIABLES
En PHP, las variables se identifican con el símbolo $ seguido del nombre. 
No necesitas declarar el tipo de dato; PHP lo infiere automáticamente.*/

$nombre = "Osiris";
$edad = 37;
$precio = 19.99;
$activo = true;

// Imprimir las variables
echo "Hola $nombre, tengo $edad años, el precio es $precio y el estado activo es $activo.\n";


//SCOPE DE VARIABLES
//El scope determina dónde puede usarse una variable. PHP tiene tres tipos de scope:
//global, local y estático.

//Variables definidas fuera de funciones. Para usarlas dentro de una función, necesitas 
// la palabra clave global.

$mensaje = "\nHola desde el ámbito global!\n";

function saludar()
{
    global $mensaje;// Accede a la variable global
    echo $mensaje;

}
saludar(); 

//SCOPE LOCAL
//Las variables definidas dentro de una función solo existen en esa función.
function calcular()
{
    $resultado = 2 + 2; // Variable local
    return $resultado;
}
echo "El resultado de la suma es: " . calcular() . "\n";
//echo $resultado; // Esto causará un error porque $resultado no es accesible fuera de la función

//VARIABLES ESTÁTICAS
//Las variables estáticas mantienen su valor entre llamadas a la función.
function contador()
{
    static $count = 0; // Variable estática
    $count++;
    return $count;
}
echo contador() . "\n"; // Imprime 1
echo contador() . "\n"; // Imprime 2
echo contador() . "\n"; // Imprime 3