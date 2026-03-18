<?php
$variables = [
"saludo" => "Hola",
"numero" => 42,
"pi" => 3.14,
"estado" => true,
"valor" => null,
];


foreach($variables as $variable){
    echo gettype($variable). "\n";
}