<?php
/*
Los arrays asociativos usan claves con nombre en lugar de índices numéricos. 
Son ideales para representar estructuras de datos como usuarios, 
configuraciones o cualquier conjunto de propiedades relacionadas.
*/ 

//Crear arrauys asociativos

//Ejemplo de Array asociativo con datos de usuario

$usuario = [
    'nombre' => 'Carlos',
    'edad' => 28,
    'email' => 'carlos@ejemplo.com',
    'activo' => true
];

//Sintaxis clásica
$config = array(
    'debug' => false,
    'timezone' => 'Europe/Madrid',
    'charset' => 'UTF-8'
);

// Claves pueden ser strings o enteros
$mixto = [
    'nombre' => 'Ana',
    0 => 'valor en indice 0',
    'items' => 5
];

print_r($usuario);

/*
                    En PHP todo array es asociativo
Técnicamente, todos los arrays en PHP son asociativos. Los "arrays
indexados" son simplemente arrays donde las claves son números secuenciales automáticos.
 */

//Acceso directo por clave
echo $usuario['nombre'];
echo "\n";
echo $usuario['edad'];
echo "\n";

// Acceder a clave que no existe genera Warning
//echo $usuario['telefono']; Warning: Undefined array key "telefono" in C:\Users\Osiris\practica-dev\php\arrays_asociativos.php on line 46

//Verificar antes de acceder
if (isset($usuario['telefono'])){
    echo $usuario['telefono'];
    } else {
        echo "sin telefono\n";

    }


// Operador null coalescente (PHP 7+)
$telefono = $usuario['telefono'] ?? 'no especificado';
echo $telefono; //No especificado

echo "\n";
//Usar strings con llaves
echo "Hola, {$usuario['nombre']}\n";

    //Modificar y añadir elementos
// Modificar valor existente
$usuario['edad'] =  29;

// Añadir nueva clave
$usuario['email'] = 'carlos@ejemplo.com';
$usuario['ciudad'] = 'Madrid';

print_r($usuario);

// Añadir multiples claves a la vez
$usuario += [
    'pais' => 'España',
    'idioma' => 'Español'
];
print_r($usuario);

// El operador + NO sobrescribe claves existentes
$usuario += ['nombre' => 'Otro']; // 'nombre' sigue siendo 'Carlos'

 /*
 Diferencia entre + y array_merge
El operador + mantiene las claves del primer array si hay duplicados. 
array_merge() sobrescribe con los valores del último array. 
 */
echo '<ul>';
foreach ($usuario as $campo => $valor) {
    echo "<li><strong>$campo:</strong> $valor</li>";
}
echo '</ul>';