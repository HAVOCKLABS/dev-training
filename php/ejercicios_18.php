<?php
/*
Ejercicio 1: Crear un array asociativo
Crea un array asociativo que represente un libro con las claves: 
'titulo', 'autor' y 'anio'. Luego imprime cada dato en formato "Clave: valor".
*/

$libro = [
    'titulo' => 'Cien años de soledad',
    'autor' => 'Gabriel Garcia Márquez',
    'año' => '1967'
];

foreach ($libro  as $clave => $valor) {
        echo "$clave : $valor \n";
    }

/*
Ejercicio 2: Acceso seguro con operador null coalescente
Dado el array $usuario = ['nombre' => 'Ana', 'edad' => 25], 
intenta acceder a la clave 'email' que no existe. 
Usa el operador ?? para mostrar "No especificado" si no existe.
*/

$usuario = [
    'nombre' => 'Ana',
    'edad' => '25'
];


echo $usuario['email'] ?? 'no especificado';

echo "\n";


/*
Ejercicio 3: Combinar arrays con array_merge
Tienes dos arrays: $defaults = ['tema' => 'claro', 'idioma' => 'es'] y 
$preferencias = ['tema' => 'oscuro']. Combinalos con array_merge para que las 
preferencias sobrescriban los valores por defecto.
*/
$defaults = [
    'tema' => 'claro',
    'idiona' => 'es',
    ];

$preferencias = [
    'tema' => 'oscuro'
];

$config = array_merge($defaults, $preferencias);
print_r($config);



/*
Puntos clave
Los arrays asociativos usan claves con nombre: 'clave' => 'valor'
Usa ?? para valores por defecto al acceder a claves

array_key_exists() detecta claves con valor null, isset() no

array_merge() sobrescribe, el operador + mantiene

array_keys() y array_values() extraen claves y valores
Ideales para configuraciones, datos de usuario y respuestas estructuradas
*/
