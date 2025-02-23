    <?php 
    //Estructuras 
    echo "Estructuras de datos ";

    //Array

    echo "Array\n";

    $nombres = [ "Carlos", "Luis", "Alfonso", "Miguel"];
    // Ingresar datos en el array 
    array_push($nombres,"Andres");
    //Atualizar un elemento en el array
    $nombres[1] = "Juan"; // cambias Luis por Juan 
    //eliminar una datos del array 
    unset($nombres[0]); //Elimina a CARLOS ya que los array los datos se cuentan desde 0 
    $update_nombres = array_values($nombres);
    //Ordenar el array 
    sort($update_nombres);

    //Imprimir el array
    print_r($update_nombres);

    //Array asociativo 
    echo "Array asociativo\n";
    //creamos el array 
    $perosna = [
        "Nombre" => "Carlos",
        "Edad"   => 25,
        "Ciudad" => "Bogota" 

    ];
    // Agregar clave valor 
    $perosna["Trabajo"] = "Desarrollador";
    //actualizar 
    $perosna["Edad"] = 26;
    //borrar 
    unset($perosna["Ciudad"]);
    //Ordenar
    ksort($perosna);

    //imprimir
    print_r($perosna);


    //Objetos POO

    class Empleado{
        public $nombre ;
        public $edad; 
        public $sueldo; 

        public function __construct($nombre, $edad, $sueldo){
            $this -> nombre = $nombre;   
            $this ->  edad = $edad;
            $this -> sueldo = $sueldo;  
        }
        public function mostrarinformacion(){
            echo "Nombre: {$this->nombre}, Edad: {$this->edad}, Salario: {$this->sueldo}";
        }
    }

    // crear un opbejto de la clase empleado

    $crearEmpleado1 = new Empleado("Luis miguel", 31, 120);
    $crearEmpleado2 = new Empleado("Julian felipe", 21, 80);

    $crearEmpleado1->mostrarinformacion();
    $crearEmpleado2 ->mostrarinformacion();
?>


<?php 
// reto extra 
// agenda en php 
$agenda_de_contactos = [];
function extra(){

    global $agenda_de_contactos;

while(true){
    echo"//////////////////////// Agenda de contactos //////////////// ";  
    echo "1. Buscar contacto.\n" ;  
    echo "2. Crear contacto.\n" ;
    echo "3. Actulaizar contacto.\n"; 
    echo "4. Eliminar contacto.\n" ;
    echo "5. Salir del programa.\n" ;
    echo"//////////////////////////////////////////////////////////// "; 

    $option = readline("Selecione una de las opciones(1 al 5): ");

    switch($option){
        case 1:
        
        case 2:

        
        case 3:


        case 4:


        case 5:
        
        
    }


}

}





?>