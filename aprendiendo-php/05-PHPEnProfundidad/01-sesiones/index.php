<!-- Una sesion almacena y persiste datos de usuario mientras que navega en el sitio 
hasta su cierre o cierra el navegador  -->

<?php

    //Iniciar la sesion 
    session_start();
    $variable_normal = "soy una cadena de texto";

    //Variable de sesion
    $_SESSION['variable_persistente'] = "Hola soy una sesion activa";

    echo $variable_normal . "<br/>";
    echo $_SESSION['variable_persistente'];

?>