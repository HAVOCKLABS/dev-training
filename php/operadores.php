<?php
$a = 10;
$b = 3;

$a + $b; // 13 (suma)
$a - $b; // 7 (resta)
$a * $b; // 30 (multiplicacion)
$a / $b; //3.333 (division)
$a % $b; //1 (mudulo)
$a ** $b; //1000 (exponienciacion - 10³)
//negacion
-$a; //-10

//operadores de asignacion

$x = 10; //Asignación Básica

$x +=5; //15
$x -=3; //12
$x *=2; //24
$x /=4; //6
$x %=4; //2
$x **3; //8

// Para Strings
$texto = 'Hola ';
$texto .= 'Mundo';
echo $texto;

// Operadores de incremento / Decremeto

$x=5;
echo "\n";
//Pre-incremento: incrementa 1 ANTES de usar un valor
++$x; // en este caso seria 6

//Post-incremento: incrementa DESPUÉS de usar el valor
echo $x++; //
echo"\n";
echo $x;
echo"\n";

//lo mismo para decremento
$y =5;
echo $y;
echo"\n";
echo --$y;
echo"\n";
echo $y--;
echo"\n";
echo $y;

//Operadores de Comparacion
//Devuelven Boleano (true o false)
$a = 5;
$b ='5';
$c = 10;

//Comparacon débil (convieerte tipos)


echo "5 == '5': ". var_dump($a == $b);
echo "5 != 10 : ". var_dump($a != $c);
echo "5 <> 10 :  ". var_dump($a <> $c);

// Comparación Estricta (Tipo + Valor)
var_dump($a == $b);
var_dump($a !== $b);

//Comparaciones numéricas
var_dump($a < $c);
var_dump($a > $c);
var_dump($a <= 5);
var_dump($a >= 5);

//Spaceship operator (PHP 7+)
//comparados valores y de vuelve -1, 0, o 1

echo 1 <=> 2; // -1 (1 < 2)
echo 2 <=> 2; // 0 (iguales)
echo 2 <=> 2; //1 (3 > 2)

//Muy útil para ordenar array
$numeros = [3,1,4,1,5];
usort($numeros, fn($a, $b) => $a <=> $b);


//OPERADORES LÓGICOS 
$a = true;
$b = false;
 
// AND - ambos deben ser true
var_dump($a && $b);    // false
var_dump($a and $b);   // false (alternativa, menor precedencia)
 
// OR - al menos uno debe ser true
var_dump($a || $b);    // true
var_dump($a or $b);    // true (alternativa, menor precedencia)
 
// NOT - invierte el valor
var_dump(!$a);         // false
var_dump(!$b);         // true
 
// XOR - exactamente uno debe ser true
var_dump($a xor $b);   // true
var_dump($a xor $a);   // false

//Short-circuit evaluation (PHP deja de evaluar en cuanto conoce el resultado)

//si lo primero es false. el AND ya es false
//la funcion no se ejecuta

$resultado = false && funcionCostosa();
//sirve para condicionar la ejecucion de una funcion

//Si lo primero es true, el OR ya es true
//la funcion no se ejecuta
$resultado = true || funcionCostosa();

//esto es util para verificaciones seguras
$user = null;
if ($user && $user->isActive()){
    //si user es null, isActive() No se ejecuta
    //Evita error "Call to a member function null"
}

//OPERADOR TERNARIO esto es una forma abreviada de escribir ?
//if-else
$edad = 20;

//sintaxis: condicion ? valor_si_true : valor_si_false
$mensaje = $edad >= 18 ? "Adulto":"Menor";
echo $mensaje; //Adulto

//Equivalente a:
if ($edad >= 18){
    $mensaje = 'Adulto';

}else {
    $mensaje = 'Menor';
}
//Ternario abreviado (Elvis operator)
$nombre = '';
$display = $nombre ?: "Anónimo"; // Si $nombre es falsy, usa "Anónimo"
echo $display;

//Null coalescing operator (PHP 7+) ??
//Devuelve el primer valor que no sea null
//?? devuelve el lado izquierdo si NO es null
$nombre = null;
$display = $nombre ?? "Anónimo";
echo $display; //Anónimo

/* aqui podemos observar que $nombre es null y usando el operador ?? evaluamos 
como si es null entonces se le asigna el valor "Anonimo, esto es muy util para 
valores por defecto";*/

$config = $_GET['page'] ?? 1;
$usuario = $data['user'] ?? $defaultUser ?? "guest"; //

/*
Busca si existe $data['user'] y no es null.

Si existe y tiene valor, se asigna a $usuario.

Si no, intenta con $defaultUser.

Si $defaultUser está definido y no es null, se usa ese valor.

Finalmente, si ninguno de los anteriores aplica, se asigna la cadena "guest".
*/

//Diferencia con Elvis (?:)
$valor = 0;
echo $valor ?: "vacio"; // "vacio" (0 es falsy)
echo $valor ?? "vacio"; //0 (0 no es null)

// Nullcoalescing assignament (PHP 7.4+)   "??="
$nombre ??= "Anónimo"; // Si nombre es null, asigna "Aninimo"

//Nullsafe operator (PHP 8+)
//permite encadenar llamadas de forma segura cunado puede haber nulls

$country = null;
if ($user !== null ) {
    if ($user->getAddress() !== null){
        $country = $user -> getAddress()->getCountry();
    }
}

/*Lo que hace es lo siguiente:

Inicializa $country como null.

Verifica si $user no es null.

Si $user existe, comprueba si la dirección (getAddress()) tampoco es null.

Solo entonces intenta obtener el país (getCountry()).*/
