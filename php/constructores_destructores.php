<?php
/* El constructor se ejecuta automaticamente al crear un objeto, permitiendo inicializarlo. el destructor se ejecuta cuando el objeto es eliminado de memoria.

// El constructor: _construct()

/* El constructor es un metodo especial que PHP llama automaticamente al usar new
su nombre siempre es __construct*/

declare (strict_types=1);

class Usuario
{
    public string $nombre;
    public string $email;

    public function __construct(string $nombre, string $email)
    {
        $this -> nombre = $nombre;
        $this -> email = $email;
    }
}

// El constructor se llama automaticamente

$usuario = new Usuario('Ana', 'ana@ejemplo.com');

echo $usuario -> nombre;
echo "\n";
echo $usuario -> email;
echo "\n";



/* Antes teniamos que asignar propiedades despues de crear el objeto.
Con el constructor, lo hacemos todo en un paso.*/

// Parametros opcionales

class Producto
{
    public string $nombre;
    public float $precio;
    public int $stock;

    public function __construct(string $nombre, float $precio, int $stock = 0)
    {
        $this -> nombre = $nombre;
        $this -> precio = $precio;
        $this -> stock = $stock;
    }
}

$laptop = new Producto('Laptop', 999,99, 10);
$mouse = new Producto('Mouse', 29.99, );

echo $mouse->stock;

// El constructor es ideal para validar datos

class CuentaBancaria
{
    public string $titular;
    public float $saldo;

    public function __construct(string $titular, float $saldoInicial = 0){

        if (strlen($titular) < 3) {
            throw new InvalidArgumentException('Titular muy corto');
        }
        if ($saldoInicial < 0){
            throw new InvalidArgumentException('Saldo no puede ser negatvo');
        }

        $this -> titular = $titular;
        $this -> saldo = $saldoInicial;
    }
}

$cuenta = new CuentaBancaria("Cesar", 1999);
// new CuentaBancaria('AB', 100); // Error!


print_r($cuenta);



// El destructor
/* El destructor se ejecuta cunado un objeto es eliminado de memoria. Es util para liberar
recursos*/

class Logger
{
    public string $nombre;
    public array $mensajes = [];

    public function __construct(string $nombre){
        $this -> nombre = $nombre;
        echo "Logger iniciado: {$nombre}\n";
        }
    
    public function log(string $mensaje): void{
        $this -> mensajes[] = $mensaje;
    }
    public function __destruct(){
        echo "Guardado " .  count($this -> mensajes) . " mensajes...\n";
        }
}

$logger = new Logger('app');
$logger -> log('Usuario Conectado');
$logger ->log('Accion realizadda');

// Cuando se llama al destructor

class Ejemplo{
    public string $nombre;

    public function __construct(string $nombre){
        $this -> nombre = $nombre;
    }

    public function __destruct()
    {
        echo "Destruido : {$this -> nombre}\n";
        }
}