<?php
/*
Ejercicio 1: Clase Circulo
Crea una clase Circulo con propiedad radio y metodos area() y perimetro(). Usa M_PI.
*/
class Circulo{
    public float $radio = 3;

    public function area(): float
    {
        return M_PI * ($this -> radio ** 2);
    }
    public function perimetro(): float
    {
        return M_PI * ($this -> radio * 2);
    }
}

$circ = new Circulo();
echo $circ->area() . " " . $circ -> perimetro() . "\n";


/*
Ejercicio 2: Clase Temporizador
Crea una clase Temporizador con propiedad segundos y metodos agregarMinutos(int $min), agregarHoras(int $h) y formatear() que retorne "HH:MM:SS".
*/


class Temporizador{

public int $segundos = 0;

public function agregarMinutos(int $m): void{
    $this -> segundos += $m * 60;
}

public function agregarHoras(int $h):void{
    $this -> segundos += $h * 3600;

}

public function formatear(): string
{
    $h = (int)($this -> segundos / 3600);
    $m = (int)( $this -> segundos % 3600)/ 60;
    $s = $this -> segundos % 60;
    return sprintf('%02d:%02d:%02d'."\n", $h, $m, $s);
}
 
}

$tempo = new Temporizador();
$tempo -> agregarHoras(1);
$tempo -> agregarMinutos(50);
echo $tempo -> formatear();


/*
Ejercicio 3: Clase StringBuilder
Crea una clase con metodos encadenables: agregar(string $texto), agregarLinea(string $texto) y obtener().
*/

class StringBuilder{

public string $cadena = "";

    public function agregar(string $texto): self{
        $this -> cadena .= $texto;
        return $this;
    }

    public function agregarLinea(string $texto):self{
         $this -> cadena .= $texto . "\n";
         return $this;
    }
    public function obtener(): string{
        return $this -> cadena;
    }
}

$sb = new StringBuilder();
$resultado = $sb
->agregarLinea('Hola Mundo')
->agregar(' PHP ')
->agregar('es ')
->agregar('genial')
->obtener();

echo $resultado;
?>