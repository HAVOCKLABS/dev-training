<?php
//Strings y Manipulación de Texto
//Los strings son uno de los tipos de datos más utilizados en PHP. 

$nombre = 'Cesar';
$edad = 37;

echo "\n";

//Comillas simples 
//El contenido se toma de forma literal. 
// No interpreta variables ni secuencias de escape (excepto \\ y \').

echo 'Hola, ' . $nombre; //Hola, Cesar
echo "\n";
echo 'Hola, $nombre'; //  Hola, $nombre 
echo "\n";

//Para incluir comilla simple, escapala

echo 'It\'s working';
echo "\n";

//Comillas dobles
//interpreta variables y secuencias de escape como \m, \t, etc.

echo "Hola, $nombre \n";
echo "Tienes $edad años\n";

//Sintaxis con llaves para claridad
echo "Usuario: {$nombre}\n";

//Util para acceder a arrays u objetos
$user = ["name" => "Ana"];

echo "Hola, {$user['name']}";

//Heredoc
//Para strings multilínea que interpretan variables. Útil para HTML o textos largos.
//se abre asi <<<HTML y se cierra asi HTML; el cierre debe estar en una linea solo

$titulo = 'Bienvenido';

$html = <<<HTML

<div class ="card">
    <h1>{$titulo}</h1>
    <p>Hola, {$nombre}. Gracias por visitarnos.</p>
</div>
HTML;

echo $html;

//NOWDOC
//Como Heredoc pero sin interpretar variables. 
// El identificador va entre comillas simples.
echo "\n\n";

$codigo = <<<'PHP'
<?php
$variable = "valor";
echo $variable;
?>
PHP;

echo $codigo;

echo "\n\n";

//CONCATENACION
$apellido = 'Barraza';

//concatenar con punto
$nombrecompleto = $nombre . ' ' . $apellido;
echo $nombrecompleto;
echo "\n";
echo "\n";

//Concatenar y asignar
$mensaje = 'Hola';
$mensaje .= ', mundo'; // equivale a: $mensaje = $mensaje . ', mundo'

echo $mensaje; 
echo "\n";
echo "\n";


//FUNCIONES ESENCIALES DE STRINGS
$texto = 'Hola Mundo';

//Longitud de string
echo strlen($texto); 
echo "\n";

//Acceder a caracteres individuales
echo $texto[0];
echo $texto[5];
echo "\n";

//Numero de palabras
echo str_word_count($texto);
echo "\n";

//Mayusculas & Minusculas

echo strtoupper($texto);
echo "\n";

echo strtolower($texto);
echo "\n";

echo ucfirst('hola');
echo "\n";

echo ucwords('hola mundo');
echo "\n";

echo mb_strtoupper('año');  //UTF 8 
echo "\n";

//buscar y remplzara texto
$texto = 'PHP es genial. PHP es potente';
//Buscar posicion  (primera ocurrencia)
echo strpos($texto, 'es');  //4
echo "\n";

//Buscar ultima ocurrencia 
echo strrpos($texto, 'es');
echo "\n";

//verificar si contiene 
if(str_contains($texto, 'genial')){
    echo "Encontrado\n";
}


//remplazar 

echo str_replace('PHP', 'Laravel', $texto); /*remplaza esta palabra por 
                                            esta otra en la cadena tal */
echo "\n";
//remplazar multiples
$buscar = ['PHP', 'genial'];
$remplazar = ['Python', 'increible'];
echo str_replace($buscar, $remplazar, $texto); 
echo "\n";


//Extraer subcadenas

$texto = 'Hola Mundo';
//Extraer desde posicion
echo substr($texto, 0, 4);  //desde las pos 0 hasta la pos 4
echo "\n";
echo substr($texto, 5);  // desde la pos 5 hasta el final
echo "\n";
echo substr($texto, -5);  // ultimos 5 caracteres
echo "\n";
echo substr($texto, -5, 3); // del final -5 avanza 4 pos imprime mun
echo "\n";

//Verifica inicio y final (PHP 8+)
echo str_starts_with($texto, 'Hola'); //true
echo "\n";
echo str_ends_with($texto, 'Mundo'); //true
echo "\n";

//Limpiar espacios

$texto = '  Hola Mundo  ';
echo trim($texto); 
echo "\n";
echo ltrim($texto);
echo "\n";
echo rtrim($texto);
echo "\n";
echo "\n";

//Quitar caracteres especificos
$ruta = '/carpeta/archivo/';
echo trim($ruta, "/");
echo "\n";
echo "\n";

//UNIR Y DIVIDIR                                
$csv = 'manzana,pera,naranja';
$frutas = explode(",", $csv);   //dividir string en array
print_r($frutas);

//Unir array en String 
$lista = ["PHP", "JavaScript", "Python"];
$texto = implode(", ", $lista); //la convierte a array
echo $texto;   // Array ( [0] => manzana [1] => pera [2] => naranja )
echo "\n";

//La función implode() tiene un nombre alternativo: join()
echo $texto = join(" - ", $lista); 
echo "\n\n";

 //FORMATEO DE TEXTO

$mensaje = sprintf("Hola %s. Tienes %d años.", $nombre, $edad);
echo $mensaje;
echo "\n\n";

// printf - Formatear e imprimir directamente
printf("Precio: %.2f €\n", 19.5); // Precio: 19.50 € 
 
// Formateadores comunes:
// %s - string
// %d - entero
// %f - float
// %.2f - float con 2 decimales
// %05d - entero con padding de ceros (5 dígitos)

//Comparar Cadenas
  //comparar strings
  $a = "Hola";
  $b = "hola";
  //comparacion sensible a mayusculas
  echo $a === $b;
  //comparacion insensible a mayusculas
  echo strcasecmp($a, $b) === 0;

// strcmp devuelve:    //OJO SON DIFERENTES strcasecmp -- strcmp
// 0 si son iguales
// < 0 si $a < $b
// > 0 si $a > $b
echo strcmp("abc", "abd"); // -1
