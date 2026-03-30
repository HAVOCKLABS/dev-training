<?php

class Rectangulo
{
    public float $ancho;
    public float $alto;

    public function area(): float
    {
        return $this -> ancho * this -> alto;
    }
    public function Perimetro(): float
    {
        return 2 * ($this -> alto + $this -> ancho);

    }
}

$rect =  new Rectangulo();
$rect -> ancho = 10;
$rect -> alto = 3.5;

echo $rect->Perimetro() . "\n";


class Perro
{
    public string $nombre;
    public string $color;
    public string $raza;
    public float $peso;
    public int $edad;

    public function ladrar() : void{
        echo "GUUUAUU!!\n";
    }

}

$luna = new Perro();
$luna->ladrar();


class Contador
{
    public int $valor = 0;

    public function incrementar(): void
    {
        $this -> valor++;
    }
    public function decrementar():  void
    {
        $this -> valor--;
    }
    public function reiniciar(): void{
        $this -> valor = 0;
    }
}

$cont =  new Contador();
for($i = 0; $i < 10; $i++){
    $cont -> incrementar();
    }
for($i = 0; $i <rand(1,10); $i++){
    $cont -> decrementar();
}

echo $cont -> valor;

echo "\n";


class Calculadora
{
    public float $resultado = 0;

    public function valor(float $n): self
    {
        $this -> resultado = $n;
        return $this;
    }

    public function sumar(float $n): self
    {
        $this -> resultado += $n;
        return $this;
    }

    public function multiplicar(float $n): self
    {
        $this -> resultado *= $n;
        return $this;
    }
}

$calc = new Calculadora();
$calc->valor(10)->sumar(5)->multiplicar(2);
echo $calc->resultado;