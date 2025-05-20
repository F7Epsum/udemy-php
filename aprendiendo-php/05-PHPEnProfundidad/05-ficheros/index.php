<?php
/*
    //Abrir archivo 
    $abrirArchivo = fopen("fichero_texto.txt", "a+");

    //Ver contenido
    while(!feof($abrirArchivo)){
        $contenido = fgets($abrirArchivo);
        echo $contenido . "<br/>";
    }

    //Escribir
    fwrite($abrirArchivo, "Soy un texto desde PHP<br/>");

    //Cerrar archivo
    fclose($abrirArchivo);


    //Copiar
    copy('fichero_texto.txt', 'fichero_copy') or die("Error al copiar")

    
    //Renombrar
    rename('fichero_copy','archivido_recopiadito.txt');
    
 

    //Eliminar
    unlink('archivido_recopiadito.txt') or die('Error al borrar');
*/

    if(file_exists("fichero_texto.txt")){
        echo "El archivo existe";
    } else{
        echo "El archivo no existe";
    }
?>