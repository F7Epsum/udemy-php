<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Proyecto PHP - Blog de Videojuegos</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>
    </head>
    <body>
        <!--HEADER-->
        <header id="cabecera">
            <div id="logo">
                <a href="index.php">
                    Blog de Videojuegos
                </a>
            </div>
            <!--MENU-->
            <nav id="menu">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="index.php">Categoria 1</a></li>
                    <li><a href="index.php">Categoria 2</a></li>
                    <li><a href="index.php">Categoria 3</a></li>
                    <li><a href="index.php">Categoria 4</a></li>
                    <li><a href="index.php">Sobre Mi</a></li>
                    <li><a href="index.php">Contacto</a></li>
                </ul>
            </nav>
        </header>

        <div id="contenedor">
            <!--Barra Lateral-->
            <aside id="sidebar">
                <div id="login" class="bloque">
                    <h3>Identificate</h3>
                    <form method="post" action="login.php">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Email">

                        <label for="password">Contraseña</label>
                        <input type="password" name="password" placeholder="Contraseña">

                        <input type="submit" value="Entrar">
                    </form>
                </div>
                <div id="register" class="bloque">
                    <h3>Registrate</h3>
                    <form method="post" action="registro.php">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" placeholder="Nombre">

                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" placeholder="Apellido">

                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Email">

                        <label for="password">Contraseña</label>
                        <input type="password" name="password" placeholder="Contraseña">

                        <input type="submit" value="Registrar">
                    </form>
                </div>
            </aside>

            <!--Caja principal-->
            <div id="principal">
                <h1>Ultimas entradas</h1>
                <article class="entrada">
                    <h2>Titulo de mi entrada</h2>
                    <p>LoremIpsum</p>
                </article>
                <article class="entrada">
                    <h2>Titulo de mi entrada</h2>
                    <p>LoremIpsum</p>
                </article>
                <article class="entrada">
                    <h2>Titulo de mi entrada</h2>
                    <p>LoremIpsum</p>
                </article>
            </div>
        </div>

        <!--FOOTER-->
        <footer id="pie">
            <p>Desarrollado por Feca7 &copy; 2025</p>
        </footer>

    </body>
</html>


<?php
