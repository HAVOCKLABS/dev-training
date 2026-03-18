<?php

$valores = [0, "", "0", [], null, false];
$nombres = ['0', '""', '"0"', '"[]"', '"null"', '"false"'];

for ($i=0; $i<count($valores); $i++){
    if(!$valores[$i]){
        echo $nombres[$i] . "es false\n";
    }
}