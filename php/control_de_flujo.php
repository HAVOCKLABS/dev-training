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


// Buscar en una matriz bidimensional
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

$buscar = 9;
$posicion = null;
 //print_r($matriz);
 
foreach ($matriz as $fila => $columnas) {
    
    foreach ($columnas as $col => $valor) {
        echo "fila " . ($fila + 1) . " columna " . ($col + 1) . "\n";
        if ($valor === $buscar) {
            $posicion = [$fila, $col];
            break 2; // Sale de AMBOS bucles
            }
    }
}
 
//echo "Encontrado en fila $posicion[0], columna $posicion[1]";
// Encontrado en fila 1, columna 1
 
// Sin "break 2", solo saldría del bucle interno
// y seguiría con las siguientes filas


$empleados = [
    ['nombre' => 'Juan', 'edad' => 30],
    ['nombre' => 'Ana', 'edad' => 25],
    ['nombre' => 'Luis', 'edad' => 35]
];

foreach ($empleados as $index => $empleado) {
    echo "Empleado " . ($index + 1) . ":\n";
    foreach ($empleado as $clave => $valor) {
        echo "  $clave: $valor\n";
    }
}   

/*
Claves importantes:
El primer foreach recorre cada subarray ($empleado).
El segundo foreach recorre cada clave-valor dentro del subarray.
Puedes acceder a la clave del array principal ($index) si la necesitas.
Funciona tanto con arrays numéricos como asociativos. 
Consejo de rendimiento:
Evita bucles anidados muy profundos (más de 3 niveles), ya que afectan la lectura y el rendimiento del código.  Las estructuras 2D y 3D son las más comunes y manejables. 
*/

//Podemos usar el continue 2 para saltar al siguiente elemento del bucle externo

$categorias = [
    'Frutas' => ['manzana', 'ERROR','pera'],
    'Verduras' => ['zanahoria', 'lechuga'],
    'Lacteos' => ['ERROR','leche', 'queso'],
];

foreach ($categorias as $categoria => $items) {
    echo "\n$categoria:\n";

    foreach ($items as $item) {
        if ($item == 'ERROR'){
            echo " - Error encontrado, saltando categoria...\n";
            continue 2; //Salta a la siguiente categoria
        }
        echo "  - $item\n";
    }
    echo "[Categoria completa]\n";
}

/*
break y continue en switch
break también se usa en switch para evitar el fall-through. Cuando tienes un switch dentro de un
bucle, ten cuidado con qué estructura estás terminando.
*/
echo "\n";
$comandos = ['procesar', 'saltar', 'procesar', 'terminar', 'procesar'];

foreach ($comandos as $comando) {
    switch ($comando) {
        case 'procesar':
            echo "Procesando...\n";
            break; // Sale del switch, no del foreach

        case 'saltar':
            echo 'Saltando...\n';
            continue 2; //Salta a la siguiente iteracion del foreach

        case 'terminar':
            echo "Terminando todo.\n";
            break 2; //Sale del swicth y del foreach
    }
    
    echo "Fin de la iteración\n";
}

/**
 * return en funciones
Dentro de una función, return termina la ejecución de la función completamente,
incluyendo cualquier bucle que esté en ejecución.
 */


function buscarUsuario(array $usuarios, int $id): ?array
{
    foreach ($usuarios as $usuario) {
        if ($usuario['id'] == $id) {
            return $usuario; // termina la funcion inmediatamente
        }
    }
    return null; // solo se ejecuta si no se encontró
}
// Early return para validacion
function procesarPedido(array $pedido): string 
{
    if (empty($pedido['items']));{
        return 'Error: pedido sin items';
    }

    if($pedido['total'] <= 0){
        return 'Error: total inválido';
    }

    // Lógica principal solo si pasa las validaciones
    foreach ($pedido['items'] as $item){
        //Procesar cada item
    }
    return 'Pedido procesado correctamente';
}