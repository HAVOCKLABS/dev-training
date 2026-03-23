<?php
/*
switch compara un valor contra múltiples casos y ejecuta el bloque correspondiente.
Es útil cuando tienes muchas comparaciones contra el mismo valor.
*/ 
$diaSemana = random_int(1, 8);

switch ($diaSemana) {
    case 1:
        echo 'Lunes';
        break;
    case 2:
        echo 'Martes';
        break;
    case 3:
        echo 'Miercoles';
        break;
    case 4:
        echo 'Jueves';
        break;
    case 5:
        echo 'Vienes';
        break;
    case 6:
    
        
    case 7:
        echo 'Fin de semana';
        break;
        
    default:
        echo 'Dia no válido';

}
echo "\n";

                                /*No olvides el break
Sin break, la ejecución "cae" al siguiente caso (fall-through). Esto puede ser útil
intencionalmente (como en case 6 y 7 arriba), pero generalmente es fuente de bugs.
*/

//Switch con strings
//en este caso en lugar de un case relacionado a un numero asigamos una string al case 'GET
$metodoHttp = 'POST';

switch ($metodoHttp) {
    case 'GET':
        $mensaje = 'Obteniendo datos...';
        break;
}

// El problema de switch: comparación débil

$valor = 0;

switch ($valor) {
    case 'texto' :
        echo 'Es texto';
        break;
    case 0:
        echo 'Es cero';
        break;
}