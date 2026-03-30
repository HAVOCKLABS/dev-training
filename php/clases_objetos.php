<?php

/*
Ejercicios
Ejercicio 1: Clase Persona
Crea una clase Persona con propiedades nombre, edad y email. Crea dos personas e imprime sus datos.
*/
class Persona{
    public string $nombre;
    public int $edad;
    public string $email;
}
$personaUno = new Persona;
$personaUno->nombre = "juan";
$personaUno->edad = 19;
$personaUno->email = "juan@ejemplo.com";

$personaDos = new Persona;
$personaDos -> nombre = "Maria";
$personaDos -> edad = 22;
$personaDos -> email = "mariaejemplo.com";

$personas = [$personaUno, $personaDos];

//print_r($personas);


/*
Ejercicio 2: Clase Libro
Crea una clase Libro con titulo, autor, paginas y leido (bool, por defecto false). Crea tres libros y muestra cuales estan leidos.
*/

class Libro{
    public string $titulo;
    public string $autor;
    public int $paginas;
    public bool $leido = false;
}


$datosLibros = [
[
    'titulo'=> 'Cien años de soledad',
    'autor' => 'Gabriel Garcia Marquez',
    'paginas' => 471,
    'leido' => true
],
[
    'titulo'=> 'Pedro Paramo',
    'autor' => 'Juan Rulfo',
    'paginas' => 122,
    'leido' => true
],
[
    'titulo'=> '1984',
    'autor' => 'George Orwell',
    'paginas' => 328,
    'leido' => true
],
];

$totalLibros = count($datosLibros);
$libros = [];

for($i = 0; $i < $totalLibros; $i++){
    $libros[$i] = new Libro();
    $libros[$i]-> titulo = $datosLibros[$i]['titulo'];
    $libros[$i]-> autor = $datosLibros[$i]['autor'];
    $libros[$i]-> paginas = $datosLibros[$i]['paginas'];
    $libros[$i]-> leido = $datosLibros[$i]['leido'];
}

print_r($libros);


/*
Ejercicio 3: Lista de tareas
Crea una clase Tarea con descripcion y completada. Crea un array con 5 tareas y muestra solo las pendientes.
*/

class Tareas{
    public string $descripcion;
    public bool $completada;
}

$tareas = [
    ['descripcion' =>'sacudir',
    'completada' => true],
    ['descripcion' =>'barrer',
    'completada' => false],
    ['descripcion' =>'lavar',
    'completada' => true],
    ['descripcion' =>'trapear',
    'completada' => true],
    ['descripcion' =>'tender',
    'completada' => false],
];
    

echo "\tTAREAS PENDIENTES:\n";


foreach($tareas as $tarea){
    if(!$tarea['completada']){
        echo "  - ". $tarea['descripcion']. "\n";
    }
}

?>