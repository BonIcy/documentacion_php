<!--        Documentacion php       -->
<?php
/* <!-- Tipos de datos --> */
/* 
Enteros (int): se utilizan para almacenar números enteros sin decimales.

Punto flotante (float): se utilizan para almacenar números con decimales.

Cadenas de texto (string): se utilizan para almacenar texto y caracteres.

Booleanos (bool): se utilizan para almacenar valores de verdad o falsedad, que se representan por true o false.

Arreglos (array): se utilizan para almacenar una colección de datos, que pueden ser de diferentes tipos.

Objetos (object): se utilizan para almacenar instancias de clases, que son definiciones de
objetos.

Como se puede observar en la imagen anterior que la línea número 10 se está imprimiendo el tipo de dato y el contenido de la variable haciendo uso de lafunción especial var_dump.

Recursos (resource): se utilizan para almacenar referencias a recursos externos, comoconexiones a bases de datos o archivos abiertos.

Nulos (null): se utilizan para representar una variable sin valor o sin definir */

//Boleanos
$si = true;
$no = false;


//Enteros
$entero = 200;

//flotante
$float = 66.6;

//strings
$stringg = "Esto es una string, creo";

//arrays
$array = []; 

/* <!-- Numeros y operadores --> */
    /* Operadores aritméticos:
Nos permiten realizar operaciones numéricas con nuestras variables. Son los más fáciles de asimilar, porque generalmente todos conocemos esas operaciones.  */

// + Suma
// - Resta
// * Multiplicación
// / División
// % Módulo (resto de la división)
// ** Exponenciación (2 ** 3, elevar 2 la a tercera potencia)


     /* Operadores de asignación

Los operadores de asignación son los más habituales y nos permiten traspasar valores en variables. Asignar es el proceso por el cual colocamos un valor en una variable.

    = Asignación      */
$valor = 'Esto es lo que se va a asignar a la variable';
$a = 23;
$b = 3;
$c = $a - $b;

/* 
    += Suma y asignación
    -= Resta y asignación
    *= Multiplicación y asignación
    /= División y asignación
    %= Módulo y asignación
    .= Concatenación y asignación

Comparación
    == Comprueba si son iguales
    != Comprueba si son distintos
    === Comprueba si son iguales y de exactamente el mismo tipo
    !== Comprueba si son distintos o de distinto tipo
    <> Diferente (igual que !=)
    < Menor qué, comprueba si un valor es menor que otro
    > Mayór qué
    <= Menor o igual
    >= Mayor o igual
    <=> Comparador de orden. (PHP 7)
    ?? uno o el otro (PHP 7)

Logicos
    and             Operación lógica "y", será verdadero si ambos son verdaderos.
    or              Operación lógica "o", será verdadero si uno de ellos es verdadero
    xor             Operación lógica "xor", será verdadero si uno de ellos es verdadero, pero no ambos.
    !               Operación de negación, si era verdadero pasa a falso y viceversa.
    &&              Operación lógica "y"
    ||              Operación lógica "o"               */

$a = 3;
$b = ++$a;
echo "\$a vale $a y \$b vale $b"; //$a vale 4 y $b vale 4

$a = 3;
$b = $a++;
echo "\$a vale $a y \$b vale $b"; //$a vale 4 y $b vale 3

$n1 = 20;
$n2 = 30;
$n3 = 30;
$n4 = "30";

var_dump($n1 > $n2);
echo false;
var_dump($n1 < $n2);
echo true;
var_dump($n1 >= $n2);
echo false ;
var_dump($n1 <= $n2);
echo true;
var_dump($n2 == $n3);
echo true;
var_dump($n2 == $n4);
echo true;
var_dump($n2 === $n4);
echo false;

// -1 Si izquierda es menor
// 0 si es igual
// 1 Si izquierda es mayor

var_dump($n1 <=> $n2);
echo -1;

var_dump($n2 <=> $n3);
echo 0;

var_dump($n2 <=> $n1);
echo 1;
?>
<?php include
$nombreCliente = "Nombre del cliente";

///conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

//eliminar espacios en blanco
$sinEspacio = trim($nombreCliente);
echo strlen($sinEspacio);

//en mayusculas
echo strtoupper($nombreCliente);
//en minusculas
echo strtolower($nombreCliente);

$mail1 = "correo@gmail.com";
$mail2 = "Correo@gmail.com";

var_dump(strtolower($mail) == strtolower($mail2));
echo str_replace('Yisus', 'Y', $nombreCliente);

//verificar si un string existe o no 
echo strpos($nombreCliente, 'Julian'); //falso, no existe julian en esa string
$tipoCliente = "Premium - VIP";

echo "El cliente" . $nombreCliente . "es" . $tipoCliente; //concatenacion con puntos
echo "El Cliente {$nombreCliente} es {$tipoCliente}"; //concatenacion con llaves

