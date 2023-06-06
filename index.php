<!--        Documentacion php       -->
<?php
/* <!-- Funciones de salida php --> */

//Echo
echo "Hello world!!";// el echo es la funcion mas comun para imprimir en php

//Print
$txt= "world!!"; 
printf("Hello ", $txt); //print solo puede imprimir una cadena de texto a la vez

//Sprint
$text = "Mundo";
$msj = sprintf("Hola ", $text);//devuelve la cadena formateada como resultado
echo $msj; 




/* <!-- Variables y constantes php --> */

/* var_dump */
$sxd = 28382;
echo var_dump ($sxd); // imprime el tipo de dato y el contenido

/* Constantes */
define("PI", 3.15159); //declarando una constante numerica
define("wave", "Hello World"); //declarando strings
define("si", true) // declarando un booleano
?>