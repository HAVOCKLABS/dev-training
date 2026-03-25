<?php
$numeros = [100, 2, 50, 1000, 500, 400, 300];
$limite = count($numeros);

for ($i = 0; $i < $limite; $i++){
    for ($j = 0; $j < $limite - 1; $j++){
        if ($numeros[$i] < $numeros[$j]){
            $vTemp = $numeros[$i];
            $numeros[$i] = $numeros[$j];
            $numeros[$j] = $vTemp;
        }
    }
}

print_r($numeros);