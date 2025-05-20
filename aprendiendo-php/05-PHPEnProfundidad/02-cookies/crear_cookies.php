<!-- Cookie: 
Fichero que se almacena en el pc del usuario que visita la web con el fin de recordar
datos os rastrear informacion del mismo en la web. -->

<?php

    //Crear cookies
    //setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);
    
    //cookie basica
    setcookie("micookie","valor de mi cookie");

    //cookie con expiracion
    setcookie("unyear","valor de 365 dias", time()+(60*60*24*365));

    header('Location:ver_cookies.php');

?>

