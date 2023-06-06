<!--        Documentacion php       -->
<?php
/* <!-- Arreglos, Arreglos asociativos y funciones para arreglos --> */

/* Un array es un mapa ordenado donde los datos tendrán una clave (key) pero muchos valores (values). Por ejemplo, podríamos guardar los días de la semana bajo el mismo nombre de variable. */
$semana = [
    'Lunes',
    'Martes',
    'Miércoles',
    'Jueves',
    'Viernes',
    'Sábado',
    'Domingo'
];
/* Los valores están dentro de corchetes ([]) separados por comas. De esta formar se asigna automáticamente un marcador que empieza por cero. Si quiero leer por separado cada elemento debo asignar el marcador envuelto en corchetes. */
echo $semana[0]; // Lunes
echo $semana[3]; // Jueves
echo $semana[6]; // Domingo

/* Si quiero ver todo el contenido puedo usar la función nativa de PHP var_dump. Nos dirá la longitud del array, la posición de cada elemento, su tipo, longitud de cada valor y el propio valor que almacena. */
var_dump($semana);

/*
array(7) {
  [0] =>
  string(5) "Lunes"
  [1] =>
  string(6) "Martes"
  [2] =>
  string(10) "Miércoles"
  [3] =>
  string(6) "Jueves"
  [4] =>
  string(7) "Viernes"
  [5] =>
  string(7) "Sábado"
  [6] =>
  string(7) "Domingo"
}
*/

//Para declarar un array vacío solamente debemos crear una variable donde asignemos unos corchetes. (También se puede crear con su función: $planetas = array();.)
$planetas = [];

/* Añadir elementos.*/
$planetas[] = 'Marte';
$planetas[] = 'Tierra';
$planetas[] = 'Venus';

/* Y si queremos utilizar un método más orientado a la programación funcional, podemos usar array_merge para crear un nuevo array. */




// Array de partida
$planetas = ['Marte', 'Tierra', 'Venus'];

// Añadimos 'Mercurio'
$nuevosPlanetas = array_merge($planetas, ['Mercurio']);

// Vemos el resultado
var_dump($nuevosPlanetas);

/*
array(4) {
  [0]=>
  string(5) "Marte"
  [1]=>
  string(6) "Tierra"
  [2]=>
  string(5) "Venus"
  [3]=>
  string(8) "Mercurio"
}
*/

//Una utilidad muy práctica para saber la longitud de un array es usar la funcion count().
echo count($planetas); // devuelve 3

//Modificar:ara cambiar un valor hay que indicar la posición y el nuevo valor a introducir. 
$planetas[2] = 'Saturno';

//Borrar: Eliminar un elemento es un poco más marciano, debes usar una función nativa llamada unset. Personalmente creo que ha sido creada por un ser malvado. Supongamos que quiero destruir la Tierra antes de que lo haga el hombre. Es el 2º elemento, cuya posición es la 1.
unset($planetas[1]);

?>