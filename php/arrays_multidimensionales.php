<?php

// Arrays Multidimensionales

/*
Los arrays multidimensionales son arrays que contienen otros arrays. 
Son fundamentales para representar datos tabulares, listas de objetos, 
configuraciones anidadas y muchas otras estructuras de datos complejas.
*/

/*Un array bidimensional es como una tabla con filas y columnas. 
Cada elemento del array principal contiene otro array.*/


//Matriz numérica (como una hoja de cálculo)
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

//Acceder a elementos :$matriz[fila][columna]
echo $matriz[0][0]; // 1 (primera fila, primera columna)
echo "\n";
echo $matriz[1][2]; // 2 (segunda fila, tercera columna)
echo "\n";
echo $matriz[2][1]; // 8 (tercera fila, segunda columna)
echo "\n";
echo "\n\n";

// Modificar un elemento
$matriz[1][1] = 50;

// Visualiza la matriz
foreach ($matriz as $fila) {
    echo implode ('|', $fila) . "\n";
}
echo "\n\n";

/* Lista de registros (muy común)
El uso más frecuente de arrays multidimensionales es almacenar listas de objetos 
o registros, como usuarios o productos.
*/
$usuarios = [
    [
        'id' => 1,
        'nombre' => 'Ana Garcia',
        'email' => 'ana@ejemplo.com',
        'rol' => 'admin'
    ],
    [
        'id' => 2,
        'nombre' => 'Luis Martin',
        'email' => 'luis@ejemplo.com',
        'rol' => 'editor'
    ],
    [
        'id' => 3,
        'nombre' => 'Maria López',
        'email' => 'Maria@ejemplo.com',
        'rol' => 'usuario'
    ],

];
echo "\n\n";

// Acceder a un usuario específico

echo $usuarios[0]['nombre']; // Ana Garcia
echo $usuarios[1]['email']; // luis@ejemplo.com
echo "\n\n";

//Recorrer la lista
foreach($usuarios as $usuario){
        echo "{$usuario['nombre']} ({$usuario['rol']})\n";
    }
echo "\n\n";


//Añadir nuevo usuario

$usuarios[] = [
    'id' => 4,
    'nombre' => 'Pedro Ruiz',
    'email' => 'pedro@ejemplo.com',
    'rol' => 'usuario'
];

echo "\n\n";
print_r($usuarios);
echo "\n\n";


// Recorrer índices
$productos = [
    ['nombre' => 'Lapop', 'precio' => 999, 'stock' => 5],
    ['nombre' => 'Mouse', 'precio' => 29, 'stock' => 58],
    ['nombre' => 'Teclado', 'precio' => 79, 'stock' => 25]
];

// Con índice numérico
foreach ($productos as $indice => $producto){
    echo ($indice + 1) . ") {$producto['nombre']} precio: \${$producto['precio']}\n";
}

// Recorrer con for
$total = count($productos);

for ($i = 0; $i < $total; $i++){
    echo $productos[$i]['nombre']. "\n";
}
echo "total = $total";
echo "\n\n";
// Recorrer una matriz numerica
$matriz = [
    [1, 2, 3],
    [4, 5, 6]
];

for ($fila = 0; $fila < count($matriz); $fila++){
    for ($col =0; $col < count($matriz[$fila]); $col++){
        echo "[{$fila}] [{$col}] \n";
    }
}
echo "\n";

        // Estructuras anidadas profundas

// Estructura de una tienda online
$tienda = [
    'nombre' => 'TechStore',
    'categorias' => [
        [
            'id' => 1,
            'nombre' => 'Ordenadores',
            'productos' => [
                ['id' => 101, 'nombre' => 'Laptop Pro', 'precio' => 1299],
                ['id' => 102, 'nombre' => 'Desktop Gaming', 'precio' => 899]
            ]
        ],
        [
            'id' => 2,
            'nombre' => 'Accesorios',
            'productos' => [
                ['id' => 201, 'nombre' => 'Mouse RGB', 'precio' => 49],
                ['id' => 202, 'nombre' => 'Teclado Mecánico', 'precio' => 129],
                ['id' => 203, 'nombre' => 'Monitor 23"', 'precio' => 299]
            ]
        ]
    ]
];

//Recorrer toda la estructura
foreach ($tienda['categorias'] as $categoria) {
    echo "\n {$categoria['nombre']}:\n";
    
    foreach ($categoria['productos'] as $producto) {
        echo " -  {$producto['nombre']} : {$producto['precio']}€\n";
    }
    }
    echo "\n";
/**
 * Buscar en arrays multidimensionales
 */


$usuarios = [
    ['id' => 1, 'nombre' => 'Ana', 'email' => 'ana@ejemplo.com'],
    ['id' => 2, 'nombre' => 'Luis', 'email' => 'luis@ejemplo.com'],
    ['id' => 3, 'nombre' => 'María', 'email' => 'maría@ejemplo.com'],
];

// Buscar usuario por su id
function buscarPorId(array $usuarios, int $id): ?array
{
    foreach ($usuarios as $usuario) {
        if ($usuario['id'] === $id) {
            return $usuario;
        }
    }
    return null;
}
$usuario = buscarPorId($usuarios, 2);
echo $usuario['nombre'] . "\n\n"; // Luis


// Extraer una columna de todos los registros

$emails = array_column($usuarios, 'email');
print_r($emails);

$nombres = array_column($usuarios, 'nombre');
print_r($nombres);

// Extraer columna como array asociativo

$usuarioPorId = array_column($usuarios, null, 'id');
print_r($usuarioPorId);

// Ahora puedes acceder directamente por ID
echo $usuarioPorId[2]['nombre']; // Luis
echo "\n";

// Modificar registros

$productos = [
    ['id' => 1, 'nombre' => 'Laptop', 'precio' => 999, 'stock' => 5],
    ['id' => 2, 'nombre' => 'Mouse', 'precio' => 29, 'stock' => 50],
    ['id' => 3, 'nombre' => 'Teclado', 'precio' => 79, 'stock' => 25],
];

// Modificar con referencia

foreach($productos as &$producto){
    $producto['precio'] *= 1.1 ; // Aumentar 10%
}
unset($producto); // ¡Importante!

// Modificar producto especifico
$producto[1]['stock'] = 45;

// Aplicar descuento a productos caros
foreach ($productos as $i => $producto) {
    if ($producto['precio'] > 100) {
        $producto[$i]['descuento'] = true;
    }
}

// Eliminar registro por id

$idEliminar = 2;
foreach ($productos as $i => $producto) {
    if ($producto['id'] === $idEliminar) {
        unset($productos[$i]);
        break;
    }
}
// Reindexar
$productos = array_values($productos);

// Filtrar registros
$productos = [
    ['nombre' => 'Laptop', 'precio' => 999, 'stock' => 5],
    ['nombre' => 'Mouse', 'precio' => 29, 'stock' => 0],
    ['nombre' => 'Teclado', 'precio' => 79, 'stock' => 25],
    ['nombre' => 'Monitor', 'precio' => 299, 'stock' => 0]
];

// Filtrar productos con stock
$conStock = array_filter($productos, fn($p) =>$p['stock'] > 0 );
print_r($conStock);

// Filtrar por precio
$baratos = array_filter($productos, fn($p) => $p['precio'] < 100);

// Filtrar por multiples condiciones
$disponibles = array_filter($productos, function($p) {
    return $p['stock'] > 0 && $p['precio'] < 500;
});

//QUEDAN PENDIENTE AALGUNOS TEMAS DE ESTE PUNTO