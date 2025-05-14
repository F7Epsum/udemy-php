<?php

    // while(condicion){
    // bloque de instrucciones
    // otra instruccion
    // }

    $num = 0;
    while($num <= 100){
        echo $num;
        if($num != 100){
            echo ", ";    
        }
        $num++;
    }

    echo "<hr>";

    if(isset($_GET['numero'])){
        $numero = (int) $_GET['numero'];
    } else{
        $numero = 1;
    }

    var_dump($numero);

    echo "<br/><h1>Tabla de multiplicar del numero $numero</h1>";

    $contador = 1;
    while($contador <= 10){
        echo "$numero X $contador = ". ($numero*$contador). "<br/>";
        $contador++;
    }

    //BUCLE DO WHILE
/* 
    do{
        BLOQUE DE INSTRUCCIONES
    }while(condicion);
 */
    echo "<hr>";
    $edad = 17;
    $contador = 1;

    do{
        echo "Tienes acceso al local privado $contador <br/>";
        $contador++;
    } while ($edad >= 18 && $contador <= 10);


?>