<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "pruebaconexion";

    $conexion = mysqli_connect($host, $user, $pass, $database) or die("Error de conexión");

    //mysqli_close($conexion);
?>