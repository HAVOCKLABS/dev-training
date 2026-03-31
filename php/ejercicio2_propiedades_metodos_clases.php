<?php
class temporizador
{
    public int $segundos = 0;

    public function agregarMinutos(int $m): void
    {
        $this -> segundos += $m * 60;
    }
    
    public function agregarHoras(int $h): void
    {
        $this -> segundos += $h * 3600;
    }
    public function formatear(): string 
    {
        $h = (int) ($this->segundos / 3600);
        $m = (int) ($this->segundos % 3600 / 60);
        $s = $this->segundos % 60;
        
        return sprintf('%02d:%02d:
        %02d', $h, $m, $s);
    }
}

$timer = new Temporizador();
$timer -> agregarHoras(2);
$timer ->agregarMinutos(50);
$timer -> segundos += 40;

echo $timer-> formatear();