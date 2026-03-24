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
            'productos' => 'Ordenadores',
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

