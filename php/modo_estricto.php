<?php
 
declare(strict_types=1); // Modo estricto
 
function sumar(int $a, int $b): int
{
    return $a + $b;
}
 
//echo sumar(5, 3);    // 8
 echo sumar("5", 3); // Error en modo estricto
 
function saludar(string $nombre): string
{
    return "Hola, $nombre";
}
 
echo saludar("Carlos"); // Hola, Carlos