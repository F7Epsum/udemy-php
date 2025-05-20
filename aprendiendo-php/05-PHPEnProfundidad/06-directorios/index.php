<?php
    
    //Crear carpeta
    
    if(!is_dir('mi_Carpeta')){
        mkdir('mi_Carpeta',0777) or die("No se puede crear directorio");
    } else{
        echo "Ya existe la carpeta";
    }

    //rmdir('mi_Carpeta');
    echo "<hr>";
    if($gestor = opendir('./mi_Carpeta')){
        while(false !== ($archivo = readdir($gestor))){
            if($archivo != '.' && $archivo != '..'){
                echo $archivo . "<br/>";
            }
        }
    }

    
?>