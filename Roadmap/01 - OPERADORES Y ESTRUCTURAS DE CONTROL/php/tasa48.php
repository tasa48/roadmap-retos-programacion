<?php 
  /* EJERCICIO:
 * - Crea ejemplos utilizando todos los tipos de operadores de tu lenguaje:
 *   Aritméticos, lógicos, de comparación, asignación, identidad, pertenencia, bits...
 *   (Ten en cuenta que cada lenguaje puede poseer unos diferentes)
 * - Utilizando las operaciones con operadores que tú quieras, crea ejemplos
 *   que representen todos los tipos de estructuras de control que existan
 *   en tu lenguaje:
 *   Condicionales, iterativas, excepciones...
 * - Debes hacer print por consola del resultado de todos los ejemplos.
 *
 * DIFICULTAD EXTRA (opcional):
 * Crea un programa que imprima por consola todos los números comprendidos
 * entre 10 y 55 (incluidos), pares, y que no son ni el 16 ni múltiplos de 3.
 *
 * Seguro que al revisar detenidamente las posibilidades has descubierto algo nuevo.
 */
//numeros

    $numero1 = 25;
    $numero2 = 15 ;
    echo "El primer numero es: $numero1 \n";
    echo "El segundo numero es: $numero2 \n";

    $resultado = 0;
    //operaciones aritmeticas 
    echo "operaciones aritmetricas\n " ;

    echo "Suma ";
    $resultado = $numero1 + $numero2 ; 
    echo "La suma de estos dos numeros es de $resultado\n";

$resultado = $numero1 - $numero2;
echo"La resta de estos dos numeros es de $resultado\n ";

$resultado = $numero1 * $numero2; 
echo " La multiplicacion de estos dos numeros es de $resultado\n";

$resultado = $numero1 / $numero2 ;
echo"La division de estos dos numeros es de $resultado\n";

$resultado = $numero1 % $numero2;
echo"El modulo de estos dos numeros es de $resultado\n";

//logicos
echo"Comparadores Logicos\n ";
$var_a = true;
$var_b = false;

echo ($var_a and $var_b) . "\n";
echo ($var_a && $var_b) . "\n";
echo ($var_a or $var_b) . "\n";
echo ($var_a || $var_b) . "\n";
echo ($var_a xor $var_b) . "\n";
echo (!$var_a) . "\n";

//comparacion
echo"Comparacion\n";

echo($numero1 == $numero2) . "\n";
echo($numero1 === $numero2) . "\n";
echo($numero1 != $numero2) . "\n";
echo($numero1 !== $numero2) . "\n";
echo($numero1 < $numero2) . "\n";
echo($numero1 > $numero2) . "\n";
echo($numero1 <= $numero2) . "\n";
echo($numero1 >= $numero2) . "\n";

// concatenacion 
echo"concatenacion";
$string = "!hola";
$string .= "Mundo";
$string .= "¡";
echo"$string" . "\n";

//condicional
echo"Condicional if, elseif y  else\n";
echo"Si varible 1 ($numero1) es mayor que varible 2 ($numero2) entonces imprime: variable 1 es good\n";

if ($numero1 > $numero2) {
    echo"Good";
}
//else 
if ($numero1 < $numero2) {
    echo"Good";
}else{
echo"Variable 2 es menor que variable 1\n";
}

//elseif / else if 

if ($numero1 < $numero2) {
    echo"Good\n";
}elseif ($numero1 > $numero2){
echo"Variable 2 es menor que variable 1\n";
}else{
    echo"Los numero son iguales\n";
}

$color_carro = "negro";
switch ($color_carro) {
    case 'azul':
        echo"El carro es de color azul\n";
        break;
     case 'rojo':
        echo "El carro es de color rojo\n";
        break;
     case 'amarillo':
        echo "El carro es amarillo\n";
        break;
    
    default:
        echo " No hay un color para tu caso\n ";
        break;
}

//while
echo "while";
$z = 1;
echo "mienstras z sea menor o igual a 20 lo va a imprimir";

while ($z <= 20 ){
    echo $z . "\n";
    $z++; // mientras z no sea menor o igual a 20 se va a seguir sumando 
}

// do-wile
$pera = 3;
do{
echo"tenemos $pera estamos bien de peras ";
} while ($pera > 5);
// Mientras pera sea mayor a 5 se va a lanzar el bucle de que estamos bien de peras 
    
// for


for($i = 1; $i < 8; $i++) { 
    echo "$i" ."\n";
}

//foreach

$edades = array("Juan" => 25, "María" => 30, "Pedro" => 35);
   
echo"usuarios de la web ";
 foreach ($edades as $nombre => $edad) {
    echo "$nombre Tiene $edad\n";
 }
// sirve para llamar siertos canpos de un array 
?>