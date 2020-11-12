<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "pruebaconexion";

    $conexion = mysqli_connect($host, $user, $pass, $database) or die("Error de conexión");

if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

function getDatos($con, $cons){
    $query = mysqli_query($con, $cons);
    return $query;
}

function insertar($con, $ins){
    $query = mysqli_query($con, $ins);
    return $query;
}

/*echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL;*/

//mysqli_close($conexion);
?>