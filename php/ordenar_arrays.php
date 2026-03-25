<?php
/*
PHP ofrece múltiples funciones para ordenar arrays. 
Desde ordenación simple hasta ordenación personalizada con callbacks. Todas modifican el array original (excepto cuando se indica lo contrario).
*/ 

// Ordenacion básica: sort y rsort
// sort() Ordenar ascendente (reindexa las claves)
$numeros = [3, 1, 4, 1, 5, 9, 2, 6];
sort($numeros);
print_r($numeros);

// rsort() - Ordenar descendente
$numeros = [3, 1, 4, 1, 5, 9, 2, 6];
rsort($numeros);
print_r($numeros);

// Con Strings
$frutas = ['naranja', 'manzana', 'plátano', 'uva'];
sort($frutas);
print_r($frutas);

$frutas = ['naranja', 'manzana', 'plátano', 'uva'];
rsort($frutas);
print_r($frutas);


// Flags de ordenación
$mixto = ['10', '1', '2', 'a', 'A'];

 
// SORT_REGULAR (por defecto): compara sin cambiar tipos
sort($mixto, SORT_REGULAR);
print_r($mixto); // Orden puede variar

//SORT NUMERIC
$nums = ['10', '1', '2'];
sort($nums, SORT_NUMERIC);
print_r($nums); // ['1', '2', '10']

//SORT STRING: compara como strings
sort($nums, SORT_STRING);
print_r($nums);

// SORT_NATURAL: ordenación natural (como humanos)
$archivos = ['img1.pmg', 'img10.pmg', 'img2.png'];
sort($archivos, SORT_NATURAL);
print_r($archivos);


/*
sort() reindexa las claves
sort() y rsort() descartan las claves originales y asignan nuevos índices numéricos
(0, 1, 2...). Si necesitas mantener las claves, usa asort() o arsort().
*/ 

// Mantener claves: asort y arsort
$edades = [
    'ana' => 25,
    'luis' => 30,
    'maria' => 22,
    'pedro' => 28
];

// asort() - Ordena por valor, mantiene claves
asort($edades);
print_r($edades);

//// arsort() - Ordena por valor descendente, mantiene claves
arsort($edades);
print_r($edades);
