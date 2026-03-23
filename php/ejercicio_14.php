<?php
/*
Ejercicio 1: Dia de la semana con switch
Dado $numeroDia = 4, usa switch para asignar el nombre del dia 
(1=Lunes, 2=Martes, etc.). Imprime el resultado.
*/

$numeroDia = 4;

switch($numeroDia) {
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
        echo 'Viernes';
        break;
    case 6:
        echo 'Sabado';
        break;
    case 7:
        echo 'Domingo';
        break;
}
echo "\n";
/*
Ejercicio 2: Tipo de archivo con match
Dada la extension $extension = "png", usa match para determinar el tipo: 
jpg/jpeg/png/gif = "imagen", pdf/doc = "documento", mp4/avi = "video", default = "desconocido".
*/

$extensiones = [ "jpeg", "png", "gif", "pdf", "doc", "mp4", "avi"];

$archivo = $extensiones[rand(0, count($extensiones) -1)];

echo "{$archivo} = ";

$tipo = match ($archivo) {
    'jpg', 'jpeg', 'png', 'gif'=>'imagen' ,
    'pdf', 'doc'=> 'documento' ,
    'mp4', 'avi', 'mov' => 'video',
    default => 'desconocido',

};

echo "{$tipo}\n";


/* 
Ejercicio 3: Calificacion con match y condiciones
Dada $nota = 72, usa match con true para asignar: 
menos de 50 = "Suspenso", 50-69 = "Aprobado",
70-89 = "Notable", 90+ = "Sobresaliente".
*/

$nota = rand(49,100);

$estado = match (true) {
    $nota < 50 => 'Suspendido',
    $nota >= 50 && $nota < 70 => 'Aprobado',
    $nota >= 70 && $nota < 90 => 'Notable',
    $nota >= 90 => 'Sobresaliente',
    };

echo "nota = {$nota} : {$estado}";