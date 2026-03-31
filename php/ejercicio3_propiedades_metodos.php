<?php

class StringBuilder{
    public string $texto = "";
    public function agregar(string $texto): self 
    {
        $this->texto .= $texto;
        return $this;
    }
    public function agregarLinea(): self 
    {
        $this->texto .="\n";
        return $this;
    }
    public function obtener() 
    {
        echo $this->texto;
    }
}

$cadena = new StringBuilder();
$cadena->agregar("hola")->agregarLinea()->agregar("MUNDO")->obtener();