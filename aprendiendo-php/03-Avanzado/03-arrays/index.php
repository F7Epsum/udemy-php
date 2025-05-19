<?php
/*
Un ARRAY es una coleccion o conjunto de datos/valores, bajo un unico nombre. Para acceder a los valores 
podemos usar un indice numerico o alfanumerico.
*/

$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
$cantantes = ['2pac','Drake','Jennifer Lopez'];

//Array asociativo
$personas = [
    'nombre' => 'Feca',
    'apellidos' => 'Cafe',
    'Web' => 'Feca7.com'
];

/* 
echo $peliculas[0];
echo "<br/>";
echo $cantantes[2]; */


//Recorrer array bucle for
echo "<ul>";
echo"listado de peliculas"; 
    for($i = 0; $i < count($peliculas); $i++){
        echo "<li>" . $peliculas[$i] . "</li>";
    }
echo "</ul>";

//FOREACH
echo "<br/> Listado de cantantes";
echo "<ul>";
    foreach($cantantes as $cantante){
        echo "<li>" . $cantante . "</li>";
    }
echo "</ul>";




?>