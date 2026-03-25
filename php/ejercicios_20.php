<?php
/*
Ejercicio 1: Transformar con array_map
Dado el array $precios = [100, 200, 50, 75], usa array_map para crear un nuevo array 
donde cada precio tenga un 21% de IVA anadido.
*/

$precios = [100, 200, 50, 75];

$conDescuento = array_map(fn($n) => $n-($n*.20), $precios);
print_r($conDescuento);

/*
Ejercicio 2: Filtrar con array_filter
Dado el array $edades = [15, 22, 17, 30, 12, 45], usa array_filter para obtener
solo las edades de mayores de edad (18 o mas).
*/
$edades = [15, 22, 17, 30, 12, 45];
$mayores = array_filter($edades, fn($n) => $n >= 18);
print_r($mayores);

/*
Ejercicio 3: Reducir con array_reduce
Dado el array $cantidades = [5, 3, 8, 2, 10], usa array_reduce para calcular el producto de todos los numeros.
*/
$cantidades = [5, 3, 8, 2, 10];
$producto = array_reduce($cantidades, fn($multi, $n) => $multi * $n, 1);




