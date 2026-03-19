<?php
/* 
Ejercicio 3: Null coalescing
Simula la lectura de un parametro opcional. Crea una variable 
$nombre con valor null y usa el operador ?? para mostrar "Invitado" si el nombre es null.
*/
$nombre = null;
$display = $nombre ?? "Invitado";
echo $display;
