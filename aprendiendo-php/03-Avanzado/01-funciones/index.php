<!-- Funciones: 
Una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto t que puede reutilizarse 
solamente invocando a la funcion tantas veces como queramos

function nombreDeFuncion(){
    Conjunto de instrucciones.
}

-->

<?php

//Definicion de una funcion
function muestraNombres(){
    echo "Feca 7 <br/>";
    echo "Bla <br/>";
    echo "Becall <br/>";
    echo "Group <br/>";
}

//Invocar de funcion

muestraNombres();
muestraNombres();
muestraNombres();


//Ejemplo 2
    function tabla($numero){
        echo "<h3>Tabla de multiplicar del numero : $numero </h3>";
        for($i = 1; $i <= 10; $i++){
            echo "$numero X $i = " . ($numero*$i) . "<br/>";
        }
    }
    if(isset($_GET['numero'])){
        tabla($_GET['numero']);
    }else{
        echo "No hay numero para multiplicar";
    }


    for($i = 1; $i <= 10; $i++){
        tabla($i);
    }
    echo "<hr/>";   

// Ejemplo 3

    function calculadora($num1, $num2, $negrita = false){
        $suma = $num1 + $num2;
        $resta = $num1 - $num2;
        $multiplicacon = $num1 * $num2;
        $division = $num1 / $num2;
        
        $cadena_texto = "";

        if($negrita){
            $cadena_texto .= "<h1>";
        }

        $cadena_texto .= "Suma: " . $suma . "<br/>";
        $cadena_texto .= "Resta: " . $resta . "<br/>";
        $cadena_texto .= "Multiplicacion: " . $multiplicacon . "<br/>";
        $cadena_texto .= "Diivision: " . $division . "<br/>";

        if($negrita){
            $cadena_texto .= "</h1>";
        }
        
        return $cadena_texto;
    }

    echo calculadora(10,30);
    echo calculadora(10,30, true);
    echo calculadora(10,30);

    //Ejemplo 4

    function getNombre($nombre){
        $texto = "El nombre es: $nombre";
        return $texto;
    }

    function getApellido($apellidos){
        $texto = "Los apellidos son: $apellidos";
        return $texto;
    }
    
    function devuelveElNombre($nombre, $apellidos){
        $texto = getNombre($nombre) . "<br/>" . getApellido($apellidos);
        return $texto;

    }

    echo devuelveElNombre("Federico", "Carassale");



?>