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
        
        if($negrita){
            echo "<h1>";
        }

        echo "Suma: " . $suma . "<br/>";
        echo "Resta: " . $resta . "<br/>";
        echo "Multiplicacion: " . $multiplicacon . "<br/>";
        echo "Diivision: " . $division . "<br/>";

        if($negrita){
            echo "</h1>";
        }
    }

    calculadora(10,30);
    calculadora(10,30, true);
    calculadora(10,30);

?>