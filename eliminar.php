<?php
include_once "conexion.php";


        $id = $_GET["id"];

        $sql = "UPDATE usuarios SET usuario_estado = 0 WHERE usuario_id = $id";;
        $resultado = mysqli_query($conexion, $sql);
        if($resultado){
            echo "Usuario eliminado exitosamente.";
            header("Refresh: 2; url=listado.php");
        }else{
            echo "Error.";
        }
        mysqli_close($conexion);

?>

