<?php
$nombre = "juan";
$apellido = "GARCIA";
$textoFormateado = strtolower($nombre ." " . $apellido);
$nombreCompleto = ucwords($textoFormateado);
echo $nombreCompleto;