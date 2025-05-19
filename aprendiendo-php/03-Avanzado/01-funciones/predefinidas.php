<?php

    //debug
    $nombre = "Feca";
    var_dump($nombre);

    //Fecha
    echo date('d-m-y');
    echo "<br/>";
    echo time();
    echo "<hr/>";

    //Matematicas
    echo "Raiz cuadrada de 10: " . sqrt(10);
    echo "<br/>";

    echo "numero aleatorio entre 10 y 40: " . rand(10,40); 
    echo "<br/>";

    echo "numero pi " . pi();
    echo "<br/>";

    echo "Redondeo: " . round(7.891234, 2);
    echo "<br/>";

    echo gettype($nombre);
    echo "<br/>";

    if(is_string($nombre)){
        echo "Esa variable es string";
    }
    echo "<br/>";


    if(!is_float($nombre)){
        echo "La variable no es un numero con decimales";
    }

    echo "<br/>";
    if(isset($edad)){
        echo "La variable existe";
    } else {
        echo "No existe";
    }

    echo "<br/>";
    $frase = "      Mi contenido      ";
    var_dump($frase);
    var_dump(trim($frase)); 
    echo "<br/>";

    //Eliminar variables/indices de array
    $year = 2020;
    unset($year);
    echo "<br/>";

    //Comprobar variable vacia 
    $texto = "";
    if(empty($texto)){
        echo "La variable texto esta vacia";
    } else{
        echo "la variable tiene contenido";
    }
    echo "<br/>";

    //Cuantos caracteres tiene una cadena de texto
    $cadena = "12345";
    echo strlen($cadena);
    echo "<br/>";

    //Encontrar caracter
    $frase = "La vida es bella";
    echo strpos($frase, "vida");
    echo "<br/>";


    //Reemplazar contenido de un string. strreplace
    $frase = str_replace("vida", "moto", $frase);
    echo $frase;
    echo "<br/>";


    //Mayusculas y minusculas
    echo strtolower($frase);
    echo "<br/>";
    echo strtoupper($frase);

?>