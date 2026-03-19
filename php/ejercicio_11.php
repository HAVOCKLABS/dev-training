<?php
/*
Dada una variable $nota = 7, usa el operador ternario para asignar "Aprobado" 
si la nota es mayor o igual a 5, o "Suspendido" en caso contrario.
*/

$nota = rand(1,10);
$status ="";

if($nota >= 5){
    $status = "Aprobado";
}else{
    $status = "Suspendido";
}

echo "nota : {$nota}, estatus: {$status}";