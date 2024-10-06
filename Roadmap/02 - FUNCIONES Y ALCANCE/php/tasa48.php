<?php 
echo "Funaciones PHP\n";
  function funcion (){
    echo "Hola mundo\n";
 }
echo funcion();

// funcion con parametros 

echo"Funcion con parametros\n";
$nombre = "Tasa48";

function usuario($nombre){
    echo"Hola usuario $nombre";
}

//funcion para un dato especifico 

function mensaje ($nombre): string {
    $saludo = "hola te llamas $nombre tu nombre se alamceno como string";
    return $saludo;
}
echo mensaje($nombre);

//funcion dentro de una funcion 
echo "Funcion dentro de una funcion\n";
$auto = true;
//calificamos el estado del carro de 1 al 10 
$gasolina = false;

function carro($auto, $gasolina){

    if($auto == true){
    function manejar($gasolina){
        if($gasolina == true){
            echo"Puedes viajar en el carro\n ";
        }else{
            echo "No puedes usar el carro no tiene gasolina\n ";
         }
         
        }
        manejar($gasolina);
    }else{
        echo"No tienes carro\n ";
    }
}
echo carro($auto,$gasolina);

//varible local 
function var_local(){
    $text = "Esto es una varible local \n";
    echo $text ;
}
echo var_local();


//varible global
echo "Varible Global\n";
$num1 = 54;
$num2 = 43;

function suma(){
    global $num1, $num2 ;
        $r = $num1 + $num2 ;
        echo "$r" . "\n";
}
echo suma();

//reto extra 
$texto1 = "";
$texto2 = "";

function retohard(){
$contador = 0; 
global $texto1, $texto2 ;

for ($i=1; $i <=100 ; $i++) { 
    if($i % 3 == 0 and $i % 5 == 0){
        echo " $texto1 . $texto2" . "\n" ;
    }elseif($i % 3 == 0){
        echo "$texto1\n";
    }elseif($i % 5 == 0 ){
        echo"$texto2\n";
    }else{
       echo $i . "\n"; 
       $contador++;
    }
    


}
return $contador; 
}
echo "Cantidad de números que no son múltiplos de 3 o 5: " . retohard();
?>