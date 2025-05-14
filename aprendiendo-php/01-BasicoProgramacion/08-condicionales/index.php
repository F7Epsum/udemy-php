<?php

    //Condicionales if

    // Operadores de comparador
    // == igual
    // === identico
    // != distinto
    // <> diferente
    // !== no identico

    //OPERADORES LOGICOS
    // && AND
    //  || OR
    // ! NO

    //OPERADOR SWITCH
    // switch (){
    // case 1: 
    // instrucciones
    //   };

    $color = "verde";

    if($color == "rojo"){
        echo "El color es rojo";
    } else{
        echo "el color NO es rojo";
    };


    //OPERADOR GOTO

    goto marca;
    echo "<h3>Instruccion 1</h3>";
    echo "<h3>Instruccion 2</h3>";
    echo "<h3>Instruccion 3</h3>";
    echo "<h3>Instruccion 4</h3>";

    marca:
    echo "<br/>Me he saltado 4 echos";
?>