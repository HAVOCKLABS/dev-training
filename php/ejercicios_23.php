<?php
/*
 Ejercicio 1: Clase Libro
Crea una clase Libro con constructor que reciba titulo, autor y anio. 
El anio debe ser mayor a 1450. Lanza excepcion si no lo es.
*/

class Libro
{
    public string $titulo;
    public string $autor;
    public int $anio;

    public function __construct(string $titulo, string $autor, int $anio)
    {
        if($anio < 1450)
            {
                throw new InvalidArgumentException("\naqui no habia imprenta\n");
            }
                
        $this->titulo = $titulo;
        $this-> autor = $autor;
        $this->anio = $anio;
    }
}

$libro1 = new Libro("cien años de soledad", "Gabriel Garcias Marquez", 1500);


/**
 * Ejercicio 2: Clase Pedido
Crea una clase Pedido que genere un numero unico en el constructor (usa uniqid()) 
y guarde la fecha. Anade un metodo resumen().
 */

class Pedido
{
    public string $oden;
    public string $fecha;
    public string $cliente;
    public float $total;

    public function __construct(string $cliente, float $total)
    {
        $this->orden = uniqid('ORDEN -');
        $this->fecha = date ('Y-m-d H:i:s');
        $this->cliente = $cliente;
        $this->total = $total;
    }
    public function resumen(): string
    {
        return "{$this->orden}\n
        fecha: {$this->fecha}\n
        cliente: {$this->cliente}\n
        total: {$this->total}\n";
    }
}

$pedido = new Pedido('ana',1990);
echo $pedido->resumen();

/**
 * Ejercicio 3: Clase ConexionSimulada
Crea una clase que muestre "Conexion abierta" en el constructor y "Conexion cerrada" 
en el destructor. Observa cuando se muestra cada mensaje.
 */

class ConexionSimulada
{
    public function __construct()
    {
        echo "Conexion abierta";
    }
    public function __destruct()
    {
        echo "Conexion cerrada";
    }
}

$conexion = new ConexionSimulada();
echo "\n";
$conexion = null;