<?php

    $cantantes = ['2pac','Drake','Jennifer Lopez'];
    $numeros = [1,3,6,9,8,6,7];

    asort($cantantes); //Orden alfabetico
    arsort($cantantes); //orden Alfabetico inverso
    sort($numeros); //Ordena por mas que el array este desordenado

    var_dump($numeros);

    //Añadir elementos al array
    $cantantes[] = "Natos";
    array_push($cantantes, "Waor");

    array_pop($cantantes); //quitar el ultimo elemento
    unset($cantantes[2]); //quitar elemento del array deseado

    //Sacar un elemento aleatorio en el array
    $indice = array_rand($cantantes);
    echo $cantantes[$indice];

    //Dar la vuelta
    var_dump(array_reverse($numeros));
    
    //Buscar en array
    $resultado = array_search('Drake', $cantantes);
    var_dump($resultado);

    //contar numero de elementos
    echo count($cantantes);


?>