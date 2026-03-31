<?php
/*
Ejercicio 1: Producto con stock
Crea una clase Producto con propiedades privadas nombre, precio y stock. 
El precio no puede ser negativo y el stock no puede bajar de 0. 
Implementa metodos vender(int $cantidad) y reponer(int $cantidad).
*/

class Producto
{
    private string $nombre;
    private float $precio;
    private int $stock;


    public function __construct(string $nombre, float $precio, int $stock = 0)
    {
        if($precio < 0 || $stock < 0)
        {
            throw new InvalidArgumentException("\nNi el precio ni el stock pueden ser menores a 0\n");
            }

        $this-> nombre =  $nombre;
        $this-> precio = $precio;
        $this-> stock = $stock;
    }

    public function vender(int $cantidad)
    {   
        if($cantidad > $this->stock)
        {
            throw new InvalidArgumentException('la cantidad a vender no 
            puede ser mayor al stock');
        }

        $this->stock -= $cantidad;
    }
    public function reponer (int $cantidad)
    {
        if($cantidad > 0)
        {
            $this->stock += $cantidad;
        }
    }

}

$laptop = new Producto('HP Pavilion', 2000, 20);
$laptop->vender(3);


/*
Ejercicio 2: Contador de instancias
Crea una clase Articulo que cuente cuantas instancias se han creado. 
Usa una propiedad privada para el contador y un metodo publico para obtener el total.
*/

